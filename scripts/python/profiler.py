import psutil

def profile_system():
    return {
        "cpu_usage": psutil.cpu_percent(),
        "ram_usage": psutil.virtual_memory().percent,
        "disk_usage": psutil.disk_usage('/').percent
    }

if __name__ == "__main__":
    print(profile_system())
