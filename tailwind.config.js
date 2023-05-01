/** @type {import('tailwindcss').Config} */
const plugin = require("tailwindcss/plugin");

module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.jsx",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js",
    ],
    theme: {
        extend: {},
    },
    plugins: [
        require("flowbite/plugin"),
        require("@tailwindcss/forms"),
        require("daisyui"),
        plugin(function ({ addBase, theme }) {
            addBase({
                h1: { fontSize: theme("fontSize.2xl"), fontWeight: 700 },
                h2: { fontSize: theme("fontSize.xl"), fontWeight: 700 },
                h3: { fontSize: theme("fontSize.lg"), fontWeight: 700 },
            });
        }),
    ],
};
