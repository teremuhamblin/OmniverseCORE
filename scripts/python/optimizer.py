from profiler import profile_system

def optimize():
    stats = profile_system()
    print("[OMNIVERSE] Profiling:", stats)

    if stats["ram_usage"] > 80:
        print("→ High RAM usage detected")

if __name__ == "__main__":
    optimize()
