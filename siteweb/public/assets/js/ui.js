document.addEventListener("DOMContentLoaded", () => {
    const themeToggle = document.getElementById("theme-toggle");
    const themeLink   = document.getElementById("theme-style");

    if (themeToggle && themeLink) {
        const saved = localStorage.getItem("omniverse-theme") || "dark";
        applyTheme(saved);

        themeToggle.addEventListener("click", () => {
            const current = themeLink.getAttribute("href").includes("dark") ? "dark" : "light";
            const next = current === "dark" ? "light" : "dark";
            applyTheme(next);
            localStorage.setItem("omniverse-theme", next);
        });
    }

    function applyTheme(mode) {
        themeLink.setAttribute("href", `/assets/css/theme-${mode}.css`);
        document.body.className = `theme-${mode}`;
    }
});
