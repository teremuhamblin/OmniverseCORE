from ariadne import QueryType, make_executable_schema, graphql_sync
from ariadne.constants import PLAYGROUND_HTML
from fastapi import FastAPI, Request
from resolvers import resolve_systemInfo, resolve_aiStatus

type_defs = open("schema.graphql").read()
query = QueryType()

query.set_field("systemInfo", resolve_systemInfo)
query.set_field("aiStatus", resolve_aiStatus)

schema = make_executable_schema(type_defs, query)

app = FastAPI()

@app.get("/")
def graphql_playground():
    return PLAYGROUND_HTML

@app.post("/")
async def graphql_server(request: Request):
    data = await request.json()
    success, result = graphql_sync(schema, data)
    return result
