export function validateState(state) {
    if (!state.id) return { ok: false, error: "Missing ID" };
    if (state.time < 0) return { ok: false, error: "Negative time" };
    return { ok: true };
}
