from fastapi import APIRouter

router = APIRouter()

@router.get("/status")
def ai_status():
    return {"ai_engine": "ready", "model": "local-gguf-small"}
