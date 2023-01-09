module.exports = () => ({
  plugins: {
    autoprefixer: {},
    'node-css-mqpacker': {
      from: '/themes/portfolio/assets/css/main.css',
      map: {
        inline: false,
      },
      sort: true,
      to: '/themes/portfolio/assets/css/main.css',
    },
  },
});
