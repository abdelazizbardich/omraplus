import defaultTheme from "tailwindcss/defaultTheme";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ["bein-black", ...defaultTheme.fontFamily.sans],
            },
        },
        colors: {
            transparent: "transparent",
            current: "currentColor",
            white: "#ffffff",
            purple: "#3f3cbb",
            midnight: "#121063",
            metal: "#565584",
            tahiti: "#3ab7bf",
            silver: "#ecebff",
            "bubble-gum": "#ff77e9",
            bermuda: "#78dcca",
            yellow: {
                50: "#fffeea",
                100: "#fffac5",
                200: "#fff585",
                300: "#ffea46",
                400: "#ffda1b",
                500: "#ffba00",
                600: "#e28f00",
                700: "#bb6502",
                800: "#984e08",
                900: "#7c3f0b",
                950: "#482000",
            },
            blue: {
                50: "#e9f9ff",
                100: "#cef1ff",
                200: "#a7e8ff",
                300: "#6bdeff",
                400: "#26c6ff",
                500: "#009fff",
                600: "#0075ff",
                700: "#005aff",
                800: "#004de6",
                900: "#0046b3",
                950: "#003581",
                1000: "#001e49",
            },
        },
    },
    plugins: [],
};
