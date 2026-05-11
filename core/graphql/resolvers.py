import platform
import psutil

def resolve_systemInfo(*_):
    return {
        "os": platform.system(),
        "cpu": platform.processor(),
        "ram": psutil.virtual_memory().total
    }

def resolve_aiStatus(*_):
    return "AI Engine Ready"
