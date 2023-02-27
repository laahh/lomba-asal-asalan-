/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./resources/**/*.blade.php"],
  theme: {
    extend: {
      colors:{
        'biru' : 'rgb(58, 87, 255)'
      },
      scrollbar: {
        width: '5px',
        height: '5px',
      },
    },
  },
  
  plugins: [require('tailwind-scrollbar')],
}
