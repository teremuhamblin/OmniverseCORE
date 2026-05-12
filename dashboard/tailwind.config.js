// tailwind.config.js
module.exports = {
  content: ["./index.html", "./src/**/*.{js,ts,jsx,tsx}"],
  theme: {
    extend: {
      colors: {
        neon: "#00D4FF",
        dark: "#0A0F1F",
        accent: "#007BFF"
      },
      fontFamily: {
        mono: ["'Share Tech Mono'", "monospace"]
      }
    }
  },
  plugins: []
};
