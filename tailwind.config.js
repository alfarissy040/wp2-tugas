/** @type {import('tailwindcss').Config} */
module.exports = {
    content: ["./app/**/*.{html,js, php}"],
    theme: {
        extend: {},
    },
    plugins: [require("@tailwindcss/forms")],
};
