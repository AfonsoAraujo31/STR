/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./view/*.{html,php,js}"],
  theme: {
    extend: {
      colors: {
        //CORES DEFAULT DO WEBSITE
        'label-gray':'#d1cfcf',
        'white':'#ffffff',
        'black': '#00000',
        'strong-oragen':'#ff5e14',
        'weak-oragen':'#ff9564',
        'extra-strong-gray':'#151414',
        'strong-gray': '#2e2e2e',
        'weak-gray':'#202020',
        'yeallow':'#c9b1485b',
        'shadow-yeallow': 'c9b148b6',
        'wrapper-oragen':'#ff5e14a8',
        'starts-orange':'orange',
        'whitesmoke': '#f9f9f9',
        'strong-whitesmoke': '#e0e0e0',
        'bar-wrap':'#f2f2f2',
        'bar-wrap-hover':'#ddd',
        'footer-line-gray': '#373636',
        'footer-weak-gray': '#757575',
        'footer-copyright-gray':'#878787',
      },
      fontFamily: {
      },
  
    },
  },
  plugins: [],
}

