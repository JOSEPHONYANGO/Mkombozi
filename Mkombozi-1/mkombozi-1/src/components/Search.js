import search from "../imgs/search.png";

function Search() {
  return (
    <div className="w-80">
      <div className="relative">
        <input
          type="search"
          placeholder="Search"
          className="py-1 pl-8 pr-3 w-5/5 shadow-sm text-base rounded-lg text-current"
        />
        <img src={search} className="absolute bottom-1 left-2 w-5 h-5" />
      </div>
    </div>
  );
}

export default Search;
