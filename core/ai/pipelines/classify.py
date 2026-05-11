def classify(text):
    if "error" in text.lower():
        return "issue"
    return "general"
