export function initParticles(canvas) {
    const ctx = canvas.getContext("2d");
    const particles = [];

    function resize() {
        canvas.width = window.innerWidth;
        canvas.height = window.innerHeight;
    }

    window.addEventListener("resize", resize);
    resize();

    for (let i = 0; i < 80; i++) {
        particles.push({
            x: Math.random() * canvas.width,
            y: Math.random() * canvas.height,
            s: Math.random() * 2 + 1,
            v: Math.random() * 0.8 + 0.2
        });
    }

    function loop() {
        ctx.clearRect(0, 0, canvas.width, canvas.height);
        ctx.fillStyle = "#00f6ff";

        particles.forEach(p => {
            ctx.beginPath();
            ctx.arc(p.x, p.y, p.s, 0, Math.PI * 2);
            ctx.fill();
            p.y -= p.v;
            if (p.y < 0) p.y = canvas.height;
        });

        requestAnimationFrame(loop);
    }

    loop();
}
