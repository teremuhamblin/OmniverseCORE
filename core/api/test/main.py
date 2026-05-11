from fastapi import FastAPI
from routes.system import router as system_router
from routes.ai import router as ai_router
from routes.modules import router as modules_router

app = FastAPI(
    title="OMNIVERSE-CORE REST API",
    version="1.0.0"
)

app.include_router(system_router, prefix="/system")
app.include_router(ai_router, prefix="/ai")
app.include_router(modules_router, prefix="/modules")

@app.get("/")
def root():
    return {"status": "running", "version": "1.0.0"}
