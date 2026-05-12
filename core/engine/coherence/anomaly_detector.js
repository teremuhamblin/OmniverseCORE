export function detectAnomalies(states) {
    return states.filter(s => s.time < 0 || s.corrupted === true);
}
