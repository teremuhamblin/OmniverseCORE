import { useEffect, useState } from "react";
import "./bootloader.css";

export default function BootLoader({ onFinish }: any) {
  const [step, setStep] = useState(0);

  const sequence = [
    "Initializing OmniverseCORE Kernel...",
    "Loading CyberTech Modules...",
    "Activating AI Layer...",
    "Synchronizing System Clock...",
    "Booting Dashboard Interface...",
    "Establishing Secure Link...",
    "System Ready."
  ];

  useEffect(() => {
    const interval = setInterval(() => {
      setStep((prev) => {
        if (prev < sequence.length - 1) return prev + 1;
        clearInterval(interval);
        setTimeout(() => onFinish(), 600);
        return prev;
      });
    }, 700);

    return () => clearInterval(interval);
  }, []);

  return (
    <div className="boot-container">
      <div className="boot-scanline"></div>

      <div className="boot-logo">OmniverseCORE</div>

      <div className="boot-sequence">
        {sequence.slice(0, step + 1).map((line, i) => (
          <div key={i} className="boot-line">
            {line}
          </div>
        ))}
      </div>

      <div className="boot-progress">
        <div className="boot-bar" style={{ width: `${(step / (sequence.length - 1)) * 100}%` }}></div>
      </div>
    </div>
  );
}
