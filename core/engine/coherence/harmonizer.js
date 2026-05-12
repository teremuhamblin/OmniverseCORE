export function harmonize(states) {
    return states.map(s => {
        if (s.time < 0) s.time = 0;
        if (s.corrupted) s.corrupted = false;
        return s;
    });
}
