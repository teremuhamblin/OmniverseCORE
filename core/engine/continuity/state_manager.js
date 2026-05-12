export class StateManager {
    constructor() {
        this.current = {};
        this.history = [];
    }

    save(state) {
        this.history.push(JSON.parse(JSON.stringify(state)));
        this.current = state;
    }

    restore(index) {
        if (this.history[index]) {
            this.current = JSON.parse(JSON.stringify(this.history[index]));
        }
    }
}
