export function hasPermission(role, action, matrix) {
    return matrix[role] && matrix[role].includes(action);
}
