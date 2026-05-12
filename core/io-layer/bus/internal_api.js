export const InternalAPI = {
    call(module, action, payload) {
        return {
            module,
            action,
            status: "received",
            payload
        };
    }
};
