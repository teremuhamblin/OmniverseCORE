export class EventBus {
    constructor() {
        this.channels = {};
    }

    subscribe(channel, handler) {
        if (!this.channels[channel]) this.channels[channel] = [];
        this.channels[channel].push(handler);
    }

    publish(channel, payload) {
        if (!this.channels[channel]) return;
        this.channels[channel].forEach(h => h(payload));
    }
}
