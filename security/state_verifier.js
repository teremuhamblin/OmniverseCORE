export function verifyState(state, expectedChecksum, checksumFn) {
    return checksumFn(state) === expectedChecksum;
}
