import home from "../../imgs/home.png";
import briefcase from "../../imgs/briefcase.png";
import cart from "../../imgs/cart.png";
import message from "../../imgs/message.png";
import user from "../../imgs/user.png";
import users from "../../imgs/users.png";
import hamburger from "../../imgs/hamburger.png";
import brief from "../../imgs/brief.png";
import user1 from "../../imgs/user1.png";
import settings from "../../imgs/settings.png";
import { NavLink } from "react-router-dom";

function SideBar() {
  return (
    <div className="w-20 bg-white shadow-sm backdrop-blur flex justify-center py-4">
      <div>
        <div className="">
          <img src={hamburger} className="h-9 w-9" alt="" />
        </div>
        <div className="pt-10">
          <div className="py-4">
            <NavLink exact to="/">
              <img className="h-5 w-5" alt="user icon" src={home} />
            </NavLink>
          </div>
          <div className="py-4">
            <NavLink exact to="/user">
              <img className="h-5 w-5" alt="user icon" src={user} />
            </NavLink>
          </div>
          <div className="py-4">
            <NavLink exact to="/users">
              <img className="h-5 w-5" alt="user icon" src={users} />
            </NavLink>
          </div>
          <div className="py-4">
            <NavLink exact to="/cart">
              <img className="h-5 w-5" alt="user icon" src={cart} />
            </NavLink>
          </div>
          <div className="py-4">
            <NavLink exact to="/brief">
              <img className="h-5 w-5" alt="user icon" src={brief} />
            </NavLink>
          </div>
          <div className="py-4">
            <NavLink exact to="/report">
              <img className="h-5 w-5" alt="user icon" src={briefcase} />
            </NavLink>
          </div>

          <div className="py-4">
            <NavLink exact to="/notification">
              <img className="h-5 w-5" alt="user icon" src={message} />
            </NavLink>
          </div>
        </div>
        <div className="pt-14">
          <div className="py-4">
            <NavLink exact to="/profile">
              <img
                className="h-6 w-6 rounded-full"
                alt="user icon"
                src={user1}
              />
            </NavLink>
          </div>
          <div className="py-4">
            <NavLink exact to="/settings">
              <img className="h-5 w-5" alt="user icon" src={settings} />
            </NavLink>
          </div>
        </div>
      </div>
    </div>
  );
}

export default SideBar;
