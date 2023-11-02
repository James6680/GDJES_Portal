/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    extend: {
      gradients: {
        'amber-to-zinc': ['var(--amber-color)', 'var(--zinc-color)'],
      },
      colors: {
        brown: {
          50: "#f4f1ec",
          100: "#ded4c3",
          200: "#cdbfa6",
          300: "#b7a17e",
          400: "#a98f65",
          500: "#93733e",
          600: "#866938",
          700: "#68522c",
          800: "#513f22",
          900: "#3e301a",
        },
        green: {
          50: "#eef0ee",
          100: "#cbd2cb",
          200: "#b2bcb2",
          300: "#8f9d8f",
          400: "#798a79",
          500: "#586d58",
          600: "#506350",
          700: "#3e4d3e",
          800: "#303c30",
          900: "#252e25",
        },
        yellow: {
          50: "#faf6ef",
          100: "#f0e4cf",
          200: "#e8d7b7",
          300: "#dec596",
          400: "#d7ba82",
          500: "#cda963",
          600: "#bb9a5a",
          700: "#927846",
          800: "#715d36",
          900: "#56472a",
        },
        black: "#2F2F2F",
        white: "#FFFDF9",
      },
      fontFamily: {
        frl: ["Frank Ruhl Libre", "serif"],
        mulish: ["Mulish", "sans"],
      },
    },
  },
  plugins: [
    require('flowbite/plugin')
  ],
}
