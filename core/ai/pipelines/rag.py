from embeddings import embed

def retrieve(query):
    vector = embed(query)
    return {"query_vector": vector, "result": "placeholder"}
