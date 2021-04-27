const defaultTheme = require("tailwindcss/defaultTheme");

module.exports = {
    purge: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./vendor/laravel/jetstream/**/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Quicksand", ...defaultTheme.fontFamily.sans],
            },
            transitionProperty: {
                height: "height",
                maxHeight: "max-height",
                spacing: "margin, padding",
            },
        },
    },

    variants: {
        extend: {
            opacity: ["disabled"],
            display: ["group-hover"],
            backgroundColor: ["active"],
            transitionProperty: ["group-hover"],
            transform: ["group-hover"],
            translate: ["group-hover"],
            visibility: ["group-hover"],
        },
    },

    plugins: [
        require("@tailwindcss/forms"),
        require("@tailwindcss/typography"),
    ],
};
