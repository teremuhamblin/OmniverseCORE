/* ============================================================
   OmniverseCORE — Frontend Engine (app.js)
   Auteur : Teremu / OmniverseCORE
   Description :
   - Loader animé
   - Navigation fluide
   - Mode sombre/clair
   - Animations d’apparition
   - Mini Core Engine JS
   ============================================================ */

document.addEventListener("DOMContentLoaded", () => {
    OmniCore.init();
});

/* ============================================================
   OMNICORE ENGINE
   ============================================================ */
const OmniCore = {
    version: "1.0.0",

    init() {
        this.logBoot();
        this.initLoader();
        this.initTheme();
        this.initSmoothScroll();
        this.initRevealAnimations();
    },

    /* ------------------------------------------------------------
       Boot Log
       ------------------------------------------------------------ */
    logBoot() {
        console.log(
            "%c[OmniverseCORE] Boot sequence initialized...",
            "color:#4af2c5;font-weight:bold;font-size:14px;"
        );
    },

    /* ------------------------------------------------------------
       Loader animé
       ------------------------------------------------------------ */
    initLoader() {
        const loader = document.querySelector(".omniloader");
        if (!loader) return;

        setTimeout(() => {
            loader.classList.add("hide");
            setTimeout(() => loader.remove(), 600);
        }, 800);
    },

    /* ------------------------------------------------------------
       Mode sombre / clair
       ------------------------------------------------------------ */
    initTheme() {
        const toggle = document.querySelector("#theme-toggle");
        if (!toggle) return;

        toggle.addEventListener("click", () => {
            document.body.classList.toggle("light-mode");
            localStorage.setItem(
                "omniverse-theme",
                document.body.classList.contains("light-mode") ? "light" : "dark"
            );
        });

        // Charger le thème sauvegardé
        const saved = localStorage.getItem("omniverse-theme");
        if (saved === "light") {
            document.body.classList.add("light-mode");
        }
    },

    /* ------------------------------------------------------------
       Scroll fluide
       ------------------------------------------------------------ */
    initSmoothScroll() {
        document.querySelectorAll('a[href^="#"]').forEach(link => {
            link.addEventListener("click", e => {
                const target = document.querySelector(link.getAttribute("href"));
                if (!target) return;

                e.preventDefault();
                target.scrollIntoView({ behavior: "smooth", block: "start" });
            });
        });
    },

    /* ------------------------------------------------------------
       Animations d’apparition
       ------------------------------------------------------------ */
    initRevealAnimations() {
        const elements = document.querySelectorAll(".reveal");

        const observer = new IntersectionObserver(
            entries => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add("visible");
                    }
                });
            },
            { threshold: 0.2 }
        );

        elements.forEach(el => observer.observe(el));
    }
};
