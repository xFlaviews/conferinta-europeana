import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";
import typography from "@tailwindcss/typography";
import plugin from "@frostui/tailwindcss/plugin";
import aspect_ratio from "@tailwindcss/aspect-ratio";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "node_modules/@frostui/tailwindcss/**/*.js",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    darkMode: ["class", '[data-mode="dark"]'],
    theme: {
        container: {
            center: true,
        },
        fontFamily: {
            'base': ['Inter', 'sans-serif'],
        },
        extend: {
            colors: {
                primary: "#3073F1",

                secondary: "#68625D",

                success: "#1CB454",

                warning: "#E2A907",

                info: "#0895D8",

                danger: "#E63535",

                light: "#eef2f7",
                dark: "#313a46",
            },
        },
    },

    plugins: [plugin, forms, typography, aspect_ratio],
};
