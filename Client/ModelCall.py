from pickle import load
import json
import csv 
import sys
import numpy as np
import pandas as pd

from sklearn.preprocessing import OrdinalEncoder

csv_filename = sys.argv[1]

# Load the encoder
encoder = load(open('encoder.pkl', 'rb'))

# Read CSV file into a DataFrame
new_data = pd.read_csv(csv_filename)
print("type of data: ", type(new_data))
print(new_data)
# Transform the DataFrame using the encoder
new_data_encoded = encoder.transform(new_data)

# Convert the encoded data to a NumPy array
new_data_array = np.array(new_data_encoded)

# Load the model
model = load(open('model.pkl', 'rb'))

# Make predictions on the new data
new_data_predictions = model.predict(new_data_array)

# Convert NumPy array predictions to a Python list
arr_list = new_data_predictions.tolist()
new_data['class']=arr_list

column_to_delete=['same_srv_rate', 'dst_host_srv_count',  'dst_host_same_srv_rate',  'dst_host_same_src_port_rate']
new_data.drop(columns=column_to_delete, inplace=True)
new_data = new_data[new_data['class'] != 0]
json_data = new_data.to_json(orient='records')
#print(json_data)
# Write the predictions to a JSON file
with open(sys.argv[2], 'w') as json_file:
    json.dump(json.loads(json_data), json_file, indent=4)
