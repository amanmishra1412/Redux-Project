import React from "react";
import { useDispatch } from "react-redux";
import { addCollection, addToast } from "../redux/features/collectionSlice";

const ResultCard = ({ data }) => {
    const dispatch = useDispatch();

    const saveCollection = (item) => {
        dispatch(addCollection(item));
        dispatch(addToast());
    };

    return (
        <div className="w-55 relative h-50 bg-white rounded-xl">
            <a target="_blank" href={data.links}>
                <div className="h-full">
                    {data.type == "photo" ? (
                        <img
                            className="h-full w-full object-cover rounded-xl object-center"
                            src={data.src}
                            alt=""
                            loading="lazy"
                        />
                    ) : (
                        ""
                    )}
                    {data.type == "videos" ? (
                        <video
                            className="h-full w-full object-cover rounded-xl object-center"
                            autoPlay
                            loop
                            muted
                            src={data.src}
                        ></video>
                    ) : (
                        ""
                    )}
                </div>
            </a>
            <div
                id="bottom_pat"
                className="flex items-center justify-between absolute px-2 py-4 w-full bottom-0 "
            >
                <h1 className=" font-semibold capitalize">{data.title}</h1>
                <button
                    onClick={() => {
                        saveCollection(data);
                    }}
                    className="px-2 active:scale-95 font-medium cursor-pointer py-1 rounded bg-indigo-500"
                >
                    Save
                </button>
            </div>
        </div>
    );
};

export default ResultCard;
