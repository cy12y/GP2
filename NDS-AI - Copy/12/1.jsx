import * as React from "react";

function MyComponent(props) {
  return (
    <div className="flex flex-col pt-12 bg-zinc-900">
      <div className="flex gap-5 justify-between items-center self-center px-9 py-5 mt-1.5 w-full text-lg leading-7 border border-solid bg-zinc-900 border-[color:var(--Grey-15,#262626)] max-w-[1596px] rounded-[100px] max-md:flex-wrap max-md:px-5 max-md:max-w-full">
        <img
          loading="lazy"
          srcSet="..."
          className="self-stretch max-w-full aspect-[3.03] w-[280px]"
        />
        <div className="flex gap-5 justify-between items-center self-stretch my-auto text-white">
          <div className="grow justify-center self-stretch px-6 py-3 whitespace-nowrap bg-neutral-800 rounded-[82px] max-md:px-5">
            Home
          </div>
          <div className="self-stretch my-auto">Try now</div>
          <div className="self-stretch my-auto">About</div>
          <div className="grow self-stretch my-auto">Security</div>
        </div>
        <div className="flex gap-5 justify-between self-stretch my-auto">
          <div className="my-auto text-white">Sign Up</div>
          <div className="grow justify-center px-8 py-3.5 text-white whitespace-nowrap bg-blue-500 rounded-[82px] max-md:px-5">
            Login
          </div>
        </div>
      </div>
      <div className="flex justify-center items-center px-16 py-12 mt-3 w-full text-lg max-md:px-5 max-md:max-w-full">
        <div className="flex gap-5 justify-between items-start mt-12 mb-52 w-full max-w-[1654px] max-md:flex-wrap max-md:my-10 max-md:max-w-full">
          <div className="flex flex-col flex-1 self-start max-md:max-w-full">
            <div className="text-5xl font-medium text-blue-500 leading-[72px] max-md:max-w-full max-md:text-4xl max-md:leading-[67px]">
              Welcome to <span className="text-blue-500">XDEFENSE</span> <br />
              Your First Line of Defense Against Cyber Threats with AI-Powered
              Early Detection{" "}
            </div>
            <div className="mt-3.5 font-light leading-7 text-zinc-200 max-md:max-w-full">
              &quot;At XDEFENSE, we leverage cutting-edge AI technology to
              detect and neutralize cyber threats before they can harm your
              digital assets. Explore our innovative solutions and fortify your
              defenses in the ever-evolving landscape of cybersecurity. Your
              security is our priority.
            </div>
            <div className="justify-center self-start px-8 py-5 mt-12 text-white whitespace-nowrap bg-blue-500 leading-[150%] rounded-[82px] max-md:px-5 max-md:mt-10">
              Try Now
            </div>
          </div>
          <img
            loading="lazy"
            srcSet="..."
            className="flex-1 self-end mt-20 w-full aspect-square max-md:mt-10 max-md:max-w-full"
          />
        </div>
      </div>
      <div className="flex justify-center items-center px-16 py-12 w-full bg-zinc-900 max-md:px-5 max-md:max-w-full">
        <div className="flex flex-col mt-12 w-full max-w-[1596px] max-md:mt-10 max-md:max-w-full">
          <div className="flex justify-center items-center px-16 text-lg leading-7 whitespace-nowrap text-zinc-200 max-md:px-5 max-md:max-w-full">
            <div className="flex flex-col max-w-full w-[323px]">
              <img
                loading="lazy"
                srcSet="..."
                className="self-center max-w-full aspect-[3.85] w-[156px]"
              />
              <div className="flex gap-5 justify-between mt-12 max-md:mt-10">
                <div className="grow">Home</div>
                <div>Careers</div>
                <div>About</div>
                <div className="grow">Security</div>
              </div>
            </div>
          </div>
          <div className="shrink-0 mt-12 h-px bg-neutral-800 max-md:mt-10 max-md:max-w-full" />
          <div className="flex justify-center items-center px-16 mt-12 text-lg leading-7 whitespace-nowrap text-zinc-200 max-md:px-5 max-md:mt-10 max-md:max-w-full">
            <div className="flex gap-5 max-md:flex-wrap max-md:max-w-full">
              <div className="flex gap-1.5 justify-between rounded-md">
                <img
                  loading="lazy"
                  src="https://cdn.builder.io/api/v1/image/assets/TEMP/e1212720df90cca9b07756a324de6bfd9619911aea6f16ccda732dcd6786ee6b?"
                  className="my-auto w-6 aspect-square"
                />
                <div className="grow">info@xdefense.com</div>
              </div>
              <div className="flex gap-1.5 justify-between rounded-md">
                <img
                  loading="lazy"
                  src="https://cdn.builder.io/api/v1/image/assets/TEMP/a5d8079bb190093239635aa4c8d222357c53be02ca790262b1aab8ca1121d28a?"
                  className="my-auto w-6 aspect-square"
                />
                <div className="grow">+996 017123452</div>
              </div>
              <div className="flex gap-1.5 justify-between rounded-md">
                <img
                  loading="lazy"
                  src="https://cdn.builder.io/api/v1/image/assets/TEMP/948ba2c841910e7029bf1602e460c8bce4175b9b6aac893aab29c37171120e9f?"
                  className="my-auto w-6 aspect-square"
                />
                <div className="grow">ABHA</div>
              </div>
            </div>
          </div>
          <div className="shrink-0 mt-12 h-px bg-neutral-800 max-md:mt-10 max-md:max-w-full" />
          <div className="flex gap-5 justify-between items-center px-6 py-4 mt-12 w-full border border-solid bg-zinc-900 border-[color:var(--Grey-15,#262626)] rounded-[100px] max-md:flex-wrap max-md:pr-5 max-md:mt-10 max-md:max-w-full">
            <div className="flex gap-3.5 self-stretch">
              <div className="flex justify-center items-center px-3.5 bg-blue-500 aspect-square h-[52px] rounded-[100px] w-[52px]">
                <img
                  loading="lazy"
                  src="https://cdn.builder.io/api/v1/image/assets/TEMP/1cac997253a59dc8003d7528e9f225fc6cd89c754db376f1839890babe341027?"
                  className="w-full aspect-square"
                />
              </div>
              <div className="flex justify-center items-center px-3.5 bg-blue-500 aspect-square h-[52px] rounded-[100px] w-[52px]">
                <img
                  loading="lazy"
                  src="https://cdn.builder.io/api/v1/image/assets/TEMP/779a351158a92492ef741c6d13a81a51b93c19c38e07f6ec72cbbadb0afa5a72?"
                  className="w-full aspect-square"
                />
              </div>
              <div className="flex justify-center items-center px-3.5 bg-blue-500 aspect-square h-[52px] rounded-[100px] w-[52px]">
                <img
                  loading="lazy"
                  src="https://cdn.builder.io/api/v1/image/assets/TEMP/13eaab76814051c2e4172ee46e247b9027e39e48359919d3b03c892752519574?"
                  className="w-full aspect-square"
                />
              </div>
            </div>
            <div className="flex-auto self-stretch my-auto text-lg font-light leading-7 text-zinc-400">
              XDEFENSE All Rights Reserved
            </div>
            <div className="flex gap-5 justify-between self-stretch my-auto text-lg font-light leading-7 whitespace-nowrap text-zinc-400">
              <div className="grow">Privacy Policy</div>
              <div className="grow">Terms of Service</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  );
}



