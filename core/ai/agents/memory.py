class Memory:
    def __init__(self):
        self.store = []

    def add(self, item):
        self.store.append(item)

    def get(self):
        return self.store
