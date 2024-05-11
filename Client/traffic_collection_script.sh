#!/bin/bash

output_file_prefix="network_traffic"
processed_file="processed_traffic_data.csv"
result_file="analysis_result.json"
server_url="http://127.0.0.1/upload" # file upload endpoint
capture_duration=60 

# Function to process captured data and analyze it using the model
process_and_analyze() {
    local capture_file="$1"
    processed_file="${capture_file%.pcap}_processed.csv"
    result_file="${capture_file%.pcap}_result.json"

    # Process the pcap file to extract the needed fields
    echo "Processing $capture_file..."
    tshark -r "$capture_file" -T fields \
    -e frame.proto \
    -e frame.time_epoch \
    -e ip.proto \
    -e frame.len \
    -e ip.src \
    -e ip.dst \
    -e tcp.dstport \
    -e udp.dstport \
    -e tcp.flags.syn \
    -e tcp.analysis.bytes_in_flight \
    -e tcp.analysis.ack_rtt \
    -E separator=',' -E quote=d -E occurrence=f > "$processed_file.tmp"


    # Add header line with specified attribute names
    echo "protocol_type,service,flag,src_bytes,dst_bytes,count,same_srv_rate,dst_host_srv_count,dst_host_same_srv_rate,dst_host_same_src_port_rate" > "$processed_file"
    cat "$processed_file.tmp" >> "$processed_file"
    rm "$processed_file.tmp"

    # Replace empty fields with double quotes using awk
    awk 'BEGIN{FS=OFS=","} {for (i=1; i<=NF; i++) if ($i == "") $i = "\"\""} 1' "$processed_file" > "$processed_file.tmp"
    mv "$processed_file.tmp" "$processed_file"

    # Print the content of the processed file for debugging
    # echo "Content of processed file:"
    # cat "$processed_file"

    # ML model 
    echo "Analyzing traffic..."
    python ModelCall "$processed_file" "$result_file"

    # Upload the result to the server if the result file is not empty
    if [ -s "$result_file" ]; then
        echo "Uploading results..."
        # curl used to send the POST request with result data
        curl -F "file=@${result_file}" "$server_url"
    fi

    # Remove temporary files if necessary
    rm "$capture_file" "$processed_file" "$result_file"
}

# Main loop to capture and process network traffic
while true; do
    current_time=$(date +%Y%m%d_%H%M%S)
    output_file="${output_file_prefix}_${current_time}.pcap"

    # Capture network traffic for a 60 seconds duration
    echo "Capturing network traffic for $capture_duration seconds..."
    tcpdump -w "$output_file" -G 60 -W 1

    # Process and analyze the captured data in the background to allow the next capture to start
    process_and_analyze "$output_file" &
done
