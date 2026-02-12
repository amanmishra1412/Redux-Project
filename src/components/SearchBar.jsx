import React, { useState } from "react";

const SearchBar = () => {
    const [searchInput, setSearchInput] = useState("");

    const submit = (e) => {
        e.preventDefault();
    };

    return (
        <div>
            <form
                onClick={(e) => {
                    submit(e);
                }}
                className="flex bg-gray-900 gap-5 p-10"
            >
                <input
                    value={searchInput}
                    onChange={(e) => {
                        setSearchInput(e.target.value);
                    }}
                    className="border-2 w-full px-4 py-3 text-xl outline-none rounded"
                    type="text"
                    placeholder="Search "
                    required
                />
                <button className="cursor-pointer active:scale-95 border-2 px-4 py-3 text-xl outline-none rounded">
                    Search
                </button>
            </form>
        </div>
    );
};

export default SearchBar;
