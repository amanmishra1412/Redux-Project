import React from "react";

import { Link, Route, Routes } from "react-router-dom";
import HomePage from "./pages/HomePage";
import Collection from "./pages/Collection";
import { ToastContainer } from "react-toastify";
const App = () => {
    return (
        <div className="min-h-screen text-white w-full bg-gray-950">
            <div className="flex justify-between px-10 py-5 bg-blue-600 font-semibold">
                <h2 className="text-xl font-semibold">Media Search</h2>
                <ul className="flex gap-5">
                    <li>
                        <Link to="/">Home</Link>
                    </li>
                    <li>
                        <Link to="/collection">Collection</Link>
                    </li>
                </ul>
            </div>
            <Routes>
                <Route path="/" element={<HomePage />} />
                <Route path="/collection" element={<Collection />} />
            </Routes>

            <ToastContainer />
        </div>
    );
};

export default App;
