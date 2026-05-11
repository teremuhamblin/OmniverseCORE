from tools import tool_system_info
from memory import Memory

class Agent:
    def __init__(self):
        self.memory = Memory()

    def run(self, prompt):
        self.memory.add(prompt)
        return f"Agent response to: {prompt} | System: {tool_system_info()}"

if __name__ == "__main__":
    agent = Agent()
    print(agent.run("Hello"))
