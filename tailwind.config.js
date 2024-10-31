import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    // safelist: ["customBlack", "customBlue", "customBlueDark"],
    theme: {
        extend: {
            colors: {
                laravel: "#ef3b2d",
                customBlue: "#39AAD8",
                customBlueDark: "#3C9DC3",
                customBlack: "#22292E",
            },
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
            },
        },
    },
    plugins: [],
};
