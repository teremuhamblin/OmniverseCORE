import axios from "axios";
import { useEffect, useState } from "react";

export default function StatsPanel() {
  const [stats, setStats] = useState<any>(null);

  useEffect(() => {
    axios.get("http://localhost:8000/api/stats").then((res) => {
      setStats(res.data);
    });
  }, []);

  return (
    <div className="p-4 border border-neon rounded-lg bg-black/20">
      <h2 className="text-xl mb-2">System Stats</h2>
      <pre>{JSON.stringify(stats, null, 2)}</pre>
    </div>
  );
}
