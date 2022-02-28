module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],

    theme: {
        container: (theme) => ({
            // To center containers by default
            center: true,

            // To add horizontal padding by default
            padding: {
                default: theme("spacing.4"),
                sm: theme("spacing.5"),
                lg: theme("spacing.6"),
                xl: theme("spacing.8"),
            },
        }),
    },
    extend: {},

    plugins: [require("daisyui")],
    plugins: [
        ({ addComponents, theme }) => {
            addComponents({
                ".container": {
                    marginInline: "auto",
                    paddingInline: theme("spacing.4"),
                    maxWidth: theme("screens.sm"),

                    // Breakpoints
                    "@screen sm": {
                        maxWidth: theme("screens.sm"),
                    },
                    "@screen md": {
                        maxWidth: theme("screens.md"),
                    },
                },
            });
        },
    ],
};
