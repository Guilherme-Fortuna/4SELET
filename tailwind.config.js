/** @type {import('tailwindcss').Config} */
const colors = require('tailwindcss/colors')
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        colors: {
            // Verde Água
            primary: {
                DEFAULT: '#518581',
                850: '#6E9996',
                700: '#8BAEAB',
                550: '#A8C2C0',
                400: '#C5D6D5',
                250: '#DCE7E6',
            },
            // Amarelo
            secondary: {
                DEFAULT: '#FFB23F',
                850: '#FFBF5F',
                700: '#FFCC7F',
                550: '#FFD89F',
                400: '#FFE5BF',
                250: '#FFF0D9',
            },
            // Preto
            title: {
                DEFAULT: '#151411',
                850: '#3C3B39',
                700: '#636260',
                550: '#8A8988',
                400: '#B1B1B0',
                250: '#D0D0CF',
            },
            // Cinza
            paragraph: {
                DEFAULT: '#AFADB5',
                850: '#BCBBC1',
                700: '#CAC8CE',
                550: '#D7D6DA',
                400: '#E4E4E6',
                250: '#EFEFF0',
            },
            // Branco
            placeholder: {
                DEFAULT: '#F9F9F9',
                850: '#FAFAFA',
                700: '#FBFBFB',
                550: '#FCFCFC',
                400: '#FDFDFD',
                250: '#FEFEFE',
            },

        },
        extend: {},
    },
    plugins: [],
}

