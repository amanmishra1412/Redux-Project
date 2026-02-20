import React from "react";

const ResultCard = ({ data }) => {
    return (
        <div className="w-55 relative h-50 bg-white rounded">
            <div className="h-full">
                {data.type == "photo" ? (
                    <img
                        className="h-full w-full object-cover object-center"
                        src={data.src}
                        alt=""
                        loading="lazy"
                    />
                ) : (
                    ""
                )}
                {data.type == "videos" ? (
                    <video
                        className="h-full w-full object-cover object-center"
                        autoPlay
                        loop
                        muted
                        src={data.src}
                    ></video>
                ) : (
                    ""
                )}
            </div>
            <div id="bottom_pat" className="absolute px-6 py-10 text-center w-full bottom-0 ">
                <h1 className=" font-semibold capitalize">{data.title}</h1>
            </div>
        </div>
    );
};

export default ResultCard;
