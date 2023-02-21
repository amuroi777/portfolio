document.addEventListener('DOMContentLoaded', function () {
  new Splide('.splide', {
    perPage: 4, // 1ページあたりに表示するスライド数
    perMove: 1, // スライダーを1つずつ移動させる
    gap: '1rem', // スライドの間隔
    breakpoints: {
      // レスポンシブ対応
      768: { perPage: 2, gap: '0.5rem' },
      576: { perPage: 1, gap: '0.5rem' },
    },
  }).mount();
});
