export class TimelineCore {
    constructor() {
        this.time = 0;
        this.events = [];
    }

    tick(delta = 1) {
        this.time += delta;
        this.processEvents();
    }

    schedule(event) {
        this.events.push(event);
        this.events.sort((a, b) => a.time - b.time);
    }

    processEvents() {
        while (this.events.length && this.events[0].time <= this.time) {
            const evt = this.events.shift();
            evt.execute();
        }
    }
}
