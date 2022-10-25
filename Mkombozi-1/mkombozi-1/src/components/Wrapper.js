import User from "./User";
import { Routes, Route } from "react-router-dom";
import Navbar from "./features/Navbar";

function Wrapper() {
  return (
    <div className="">
      <Navbar />
      <Routes>
        <Route path="/user" element={<User />} />
      </Routes>
    </div>
  );
}

export default Wrapper;
