export function syncTimelines(timelines) {
    const maxTime = Math.max(...timelines.map(t => t.time));
    timelines.forEach(t => {
        while (t.time < maxTime) t.tick();
    });
}
