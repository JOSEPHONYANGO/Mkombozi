import notification from "../../imgs/notification.png";

function Navbar() {
  return (
    <div className="h-16 w-full bg-white flex justify-between px-8 shadow-sm py-4">
      <div>
        <p>Users</p>
      </div>
      <div>
        <img src={notification} className="h-5 w-5 cursor-pointer" alt="" />
      </div>
    </div>
  );
}

export default Navbar;
