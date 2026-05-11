from fastapi import APIRouter
import platform
import psutil

router = APIRouter()

@router.get("/info")
def system_info():
    return {
        "os": platform.system(),
        "cpu": platform.processor(),
        "ram": psutil.virtual_memory().total
    }
