//ドロワー
jQuery('.l-header-hamburger').on('click', function (e) {
  e.preventDefault();

  jQuery('.l-header-hamburger').toggleClass('is-active');
  jQuery('.l-drawer__content').toggleClass('is-active');
  // jQuery('.drawer-background').toggleClass('is-active');

  return false;
});


// p-index-blog__containerの横スクロール幅を動的に変更

document.addEventListener('DOMContentLoaded', function () {
  const parent = document.querySelector('.p-index-blog__container');
  const elements = parent.children;
  console.log(elements);
  const elementsArray = [...elements];
  
  let xscrollValue = 0;
  let elementGap = 0;
  elementsArray.forEach((elem) => {
    xscrollValue += elem.clientWidth;
    elementGap += 26;
  });

  parent.style.width = '${xscrollValue + elementGap}px';

});
