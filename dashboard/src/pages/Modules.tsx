import ModuleCard from "../components/ModuleCard";

export default function Modules() {
  const modules = [
    { name: "Core Engine", status: "Active" },
    { name: "AI Layer", status: "Active" },
    { name: "Security Layer", status: "Idle" }
  ];

  return (
    <div>
      <h2 className="text-2xl mb-4">Modules</h2>
      <div className="grid grid-cols-3 gap-4">
        {modules.map((m) => (
          <ModuleCard key={m.name} name={m.name} status={m.status} />
        ))}
      </div>
    </div>
  );
}
