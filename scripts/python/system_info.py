import platform
import psutil

def get_system_info():
    return {
        "os": platform.system(),
        "cpu": platform.processor(),
        "ram": psutil.virtual_memory().total,
        "cores": psutil.cpu_count()
    }

if __name__ == "__main__":
    print(get_system_info())
