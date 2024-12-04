import defaultTheme from "tailwindcss/defaultTheme";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js",
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
    ],
    theme: {
        extend: {
            boxShadow: {
                "shadow-light": "0 2px 8px rgba(0, 0, 0, 0.1)", // Shadow lembut
                "shadow-dark": "0 4px 12px rgba(0, 0, 0, 0.3)", // Shadow gelap
                "shadow-colored": "0 4px 12px rgba(128, 15, 47, 0.5)", // Shadow berwarna
            },
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
            },
        },
    },
    plugins: [
        require("flowbite/plugin")({
            charts: true,
        }),
        {
            datatables: true,
        },
        // ... other plugins
    ],
};
