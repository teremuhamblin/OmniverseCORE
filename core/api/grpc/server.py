import grpc
from concurrent import futures
import platform
import psutil
import omniverse_pb2
import omniverse_pb2_grpc

class SystemService(omniverse_pb2_grpc.SystemServiceServicer):
    def GetSystemInfo(self, request, context):
        return omniverse_pb2.SystemInfo(
            os=platform.system(),
            cpu=platform.processor(),
            ram=psutil.virtual_memory().total
        )

server = grpc.server(futures.ThreadPoolExecutor(max_workers=10))
omniverse_pb2_grpc.add_SystemServiceServicer_to_server(SystemService(), server)
server.add_insecure_port("[::]:50051")
server.start()
server.wait_for_termination()
