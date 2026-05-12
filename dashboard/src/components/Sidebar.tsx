export default function Sidebar({ setPage }: any) {
  return (
    <div className="w-64 bg-black/40 border-r border-neon p-4">
      <h2 className="text-xl mb-6">OmniverseCORE</h2>

      <ul className="space-y-4">
        <li onClick={() => setPage("home")} className="cursor-pointer hover:text-accent">
          Home
        </li>
        <li onClick={() => setPage("modules")} className="cursor-pointer hover:text-accent">
          Modules
        </li>
        <li onClick={() => setPage("ai")} className="cursor-pointer hover:text-accent">
          IA
        </li>
        <li onClick={() => setPage("settings")} className="cursor-pointer hover:text-accent">
          Settings
        </li>
      </ul>
    </div>
  );
}
