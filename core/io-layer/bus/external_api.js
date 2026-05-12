export const ExternalAPI = {
    request(endpoint, data) {
        return {
            endpoint,
            timestamp: Date.now(),
            data,
            status: "ok"
        };
    }
};
