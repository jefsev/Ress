module.exports = {
    content: [
        "./src/Pages/*.{js,jsx,ts,tsx}",
        "./src/Components/Shared/*.{js,jsx,ts,tsx}",
        "./src/Components/*.{js,jsx,ts,tsx}",
    ],
    theme: {
        extend: {},
    },
    plugins: [],
    corePlugins: {
        preflight: true,
    },
}
