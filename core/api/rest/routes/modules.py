from fastapi import APIRouter

router = APIRouter()

@router.get("/")
def list_modules():
    return ["performance", "security", "network", "ai"]
