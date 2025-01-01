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
        extend: {},
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
            black: {
                50: "#f7f7f7",
                100: "#e3e3e3",
                200: "#c8c8c8",
                300: "#a4a4a4",
                400: "#818181",
                500: "#666666",
                600: "#515151",
                700: "#434343",
                800: "#383838",
                900: "#000000",
                950: "#000000",
                1000: "#1c1c1c",
            },
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
                1100: "#000102",
            },
            emerald: {
                50: "#f0fdf6",
                100: "#dbfdeb",
                200: "#b9f9d7",
                300: "#82f3b9",
                400: "#45e393",
                500: "#1ed779",
                550: "#27d793",
                600: "#11a85c",
                700: "#11844a",
                800: "#13683e",
                900: "#125535",
                950: "#042f1b",
            },
            slate: {
                50: "#f8fafc",
                100: "#f1f5f9",
                200: "#e2e8f0",
                300: "#cbd5e1",
                400: "#94a3b8",
                500: "#64748b",
                600: "#475569",
                700: "#334155",
                800: "#1e293b",
                900: "#0f172a",
                950: "#020617",
            },
            orange: {
                50: "#fff8f1",
                100: "#ffebd7",
                200: "#ffd8a8",
                300: "#ffbb6e",
                400: "#ff9c2f",
                500: "#ff7c0a",
                600: "#f25c00",
                700: "#d94600",
                800: "#b53100",
                900: "#8c1f00",
                950: "#4d0f00",
            },
        },
        fontFamily: {
            "bein-black" : ["bein-black"],
            "bein-normal" : ["bein-normal"],
            "droid-arabic-kufi" : ["droid-arabic-kufi"],
            "droid-arabic-kufi" : ["droid-arabic-kufi-black"],
        },
        fontWeight: {
            thin: "100",
            extralight: "200",
            light: "300",
            normal: "400",
            medium: "500",
            semibold: "600",
            bold: "700",
            extrabold: "800",
            black: "900",
        },
    },
    plugins: [
        require('daisyui')
    ],

    daisyui: {
        themes: ['light', 'dark'], // false: only light + dark | true: all themes | array: specific themes like this ["light", "dark", "cupcake"]
        darkTheme: "light", // name of one of the included themes for dark mode
        base: true, // applies background color and foreground color for root element by default
        styled: true, // include daisyUI colors and design decisions for all components
        utils: true, // adds responsive and modifier utility classes
        prefix: "", // prefix for daisyUI classnames (components, modifiers and responsive class names. Not colors)
        logs: true, // Shows info about daisyUI version and used config in the console when building your CSS
        themeRoot: ":root", // The element that receives theme color CSS variables
      },
};
