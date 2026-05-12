export default function ModuleCard({ name, status }: any) {
  return (
    <div className="p-4 border border-neon rounded-lg bg-black/20">
      <h3 className="text-xl">{name}</h3>
      <p className="text-accent">{status}</p>
    </div>
  );
}
