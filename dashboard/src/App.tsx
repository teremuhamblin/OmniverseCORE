import { useState } from "react";

import Sidebar from "./components/Sidebar";
import Header from "./components/Header";

import Home from "./pages/Home";
import Modules from "./pages/Modules";
import AI from "./pages/AI";
import Settings from "./pages/Settings";

import BootLoader from "./components/BootLoader";

export default function App() {
  const [booted, setBooted] = useState(false);
  const [page, setPage] = useState("home");

  const pages: any = {
    home: <Home />,
    modules: <Modules />,
    ai: <AI />,
    settings: <Settings />
  };

  // Boot sequence first
  if (!booted) {
    return <BootLoader onFinish={() => setBooted(true)} />;
  }

  // Dashboard after boot
  return (
    <div className="flex h-screen">
      <Sidebar setPage={setPage} />
      <div className="flex flex-col flex-1">
        <Header />
        <div className="p-6">{pages[page]}</div>
      </div>
    </div>
  );
}
