import os from "os";

export function systemInfo() {
  return {
    platform: os.platform(),
    cpus: os.cpus().length,
    ram: os.totalmem()
  };
}

console.log(systemInfo());
