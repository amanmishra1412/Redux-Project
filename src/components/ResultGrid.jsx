import React, { useEffect } from "react";
import { getPhoto, getVideo } from "../api/media";
import {
    setActiveTabs,
    setError,
    setLoading,
    setQuery,
    setResults,
} from "../redux/features/searchSlice";
import { useDispatch, useSelector } from "react-redux";
import ResultCard from "./ResultCard";

const ResultGrid = () => {
    const { activeTab, error, loading, query, results } = useSelector(
        (store) => store.search,
    );

    const dispatch = useDispatch();

    useEffect(() => {
        if (!query) return;
        const getData = async () => {
            try {
                dispatch(setLoading());
                let data = [];
                if (activeTab === "photos") {
                    let res = await getPhoto(query);
                    data = res.results.map((e) => ({
                        id: e.id,
                        type: "photo",
                        title: e.user.username,
                        thumbnail: e.urls.small,
                        src: e.urls.full,
                        links: e.links.html,
                    }));
                }
                if (activeTab === "videos") {
                    let res = await getVideo(query);
                    data = res.videos.map((e) => ({
                        id: e.id,
                        type: "videos",
                        title: e.user.name,
                        thumbnail: e.image,
                        src: e.video_files[0].link,
                        links: e.url,
                    }));
                }
                dispatch(setResults(data));
            } catch (err) {
                dispatch(setError(err.message));
            }
        };
        getData();
    }, [query, activeTab]);

    if (error) return <h1>Error</h1>;
    if (loading) return <h1>Loading</h1>;

    return (
        <div className="flex w-full justify-between flex-wrap gap-6 overflow-auto px-10">
            {results.map((elem, idx) => {
                return (
                    <div key={idx}>
                        <a href={elem.links}>
                            <ResultCard data={elem} />
                        </a>
                    </div>
                );
            })}
        </div>
    );
};

export default ResultGrid;
