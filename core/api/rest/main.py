from fastapi import FastAPI

app = FastAPI(title="OmniverseCORE API", version="3.0")

@app.get("/api/stats")
def get_stats():
    return {
        "cpu": "12%",
        "ram": "43%",
        "disk": "68%",
        "uptime": "3h 22m"
    }

@app.get("/api/modules")
def get_modules():
    return [
        {"name": "Core Engine", "status": "active"},
        {"name": "AI Layer", "status": "active"},
        {"name": "Security Layer", "status": "idle"}
    ]

@app.get("/api/ai")
def get_ai():
    return {
        "models_loaded": ["ggml-7b", "onnx-vision"],
        "agents": 3,
        "status": "operational"
    }
