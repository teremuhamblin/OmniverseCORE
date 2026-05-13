import { initParticles } from "./particles.js";

document.addEventListener("DOMContentLoaded", () => {
    const loader = document.querySelector(".omniloader");

    setTimeout(() => loader.classList.add("hide"), 700);

    document.querySelectorAll("a[data-nav]").forEach(link => {
        link.addEventListener("click", e => {
            e.preventDefault();
            loader.classList.remove("hide");
            setTimeout(() => window.location = link.href, 250);
        });
    });

    const canvas = document.getElementById("particles");
    if (canvas) initParticles(canvas);
});
