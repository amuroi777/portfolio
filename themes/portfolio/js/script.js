// document.addEventListener('DOMContentLoaded', function () {
//   const elems = document.querySelectorAll('.p-index-blog__column');
//   const parent = document.querySelector('.p-index-blog__container');

//   let xscrollValue = 0;
// 	let elementGap = 0;
//   elems.forEach((elem) => {
// 		xscrollValue += elem.clientWidth;
// 		elementGap+=26;
//   });
//   parent.style.width = `${xscrollValue + elementGap}px`;
// });

document.addEventListener('DOMContentLoaded', function () {
  const parent = document.querySelector('.p-index-blog__container');
	const elements = parent.children;
	console.log(elements);
	const elementsArray =[...elements];
  let xscrollValue = 0;
  let elementGap = 0;
  elementsArray.forEach((elem) => {
    xscrollValue += elem.clientWidth;
    elementGap += 26;
  });
	parent.style.width = `${xscrollValue + elementGap}px`;
});
