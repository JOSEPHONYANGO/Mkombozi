import "./App.css";
import SideBar from "./components/features/SideBar";
import Wrapper from "./components/Wrapper";

function App() {
  return (
    <div className="flex bg-[#F9FAFB] h-screen">
      <SideBar />
      <div className="w-5/6">
        <Wrapper />
      </div>
    </div>
  );
}

export default App;
