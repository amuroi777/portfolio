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

// fvのTweenアニメーション
gsap.fromTo(
  '.p-index-fv__job',
  1,
  {
    x: 0,
    y: 0,
    opacity: 0,
  },
  {
    duration: 3,
    y: -10,
    opacity: 1,
  }
);

gsap.fromTo(
  '.p-index-fv__author',
  2,
  {
    x: 0,
    y: 0,
    opacity: 0,
  },
  {
    duration: 3,
    x: 0,
    y: -10,
    opacity: 1,
  }
);

//formのエラーチェック
document.addEventListener('DOMContentLoaded', () => {
  //.validationForm を指定した最初の form 要素を取得
  const validationForm = document.querySelector('.validationForm');
  if (validationForm) {
    const errorClassName = 'p-contact-item__input--error';

    //required クラスを指定された要素の集まり
    const requiredElems = document.querySelectorAll('.required');
    //email クラスを指定された要素の集まり
    const emailElems = document.querySelectorAll('.email');
    //maxlength クラスを指定された要素の集まり
    const maxlengthElems = document.querySelectorAll('.maxlength');
    //query クラスを指定された要素の集まり
    const queryElems = document.querySelectorAll('.query');

    //エラーメッセージを表示する span 要素を生成して親要素に追加する関数
    //elem ：対象の要素
    //errorMessage ：表示するエラーメッセージ
    const createError = (elem, errorMessage) => {
      const errorSpan = document.createElement('span');
      errorSpan.classList.add(errorClassName);

      //aria-live 属性を設定
      errorSpan.setAttribute('aria-live', 'polite');
      //引数に指定されたエラーメッセージを設定
      errorSpan.textContent = errorMessage;
      //elem の親要素の子要素として追加
      elem.parentNode.appendChild(errorSpan);
    };

    //form 要素の submit イベントを使った送信時の処理
    validationForm.addEventListener('submit', (e) => {
      //エラーを表示する要素を全て取得して削除（初期化）
      const errorElems = validationForm.querySelectorAll('.' + errorClassName);
      errorElems.forEach((elem) => {
        elem.remove();
      });

      //.required を指定した要素を検証
      requiredElems.forEach((elem) => {
        //値（value プロパティ）の前後の空白文字を削除
        const elemValue = elem.value.trim();
        //値が空の場合はエラーを表示してフォームの送信を中止
        if (elemValue.length === 0) {
          createError(elem, '＊名前を入力してください。');
          e.preventDefault();
        }
      });

      //.email を指定した要素を検証
      emailElems.forEach((elem) => {
        //値（value プロパティ）の前後の空白文字を削除
        const elemValue = elem.value.trim();
        //値が空の場合はエラーを表示してフォームの送信を中止
        if (elemValue.length === 0) {
          createError(elem, '＊メールアドレスを入力してください。');
          e.preventDefault();
        }
      });

      //.inquiry を指定した要素を検証
      queryElems.forEach((elem) => {
        //値（value プロパティ）の前後の空白文字を削除
        const elemValue = elem.value.trim();
        //値が空の場合はエラーを表示してフォームの送信を中止
        if (elemValue.length === 0) {
          createError(elem, '＊お問合せ内容を入力して下さい。');
          e.preventDefault();
        }
      });

      //.email を指定した要素を検証
      emailElems.forEach((elem) => {
        //Email の検証に使用する正規表現パターン
        const pattern =
          /^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/iu;
        //値が空でなければ
        if (elem.value !== '') {
          //test() メソッドで値を判定し、マッチしなければエラーを表示してフォームの送信を中止
          if (!pattern.test(elem.value)) {
            createError(elem, '＊正しいメールアドレスを入力してください。');
            e.preventDefault();
          }
        }
      });

      //.maxlength を指定した要素を検証
      maxlengthElems.forEach((elem) => {
        //data-maxlength 属性から最大文字数を取得
        const maxlength = elem.dataset.maxlength;
        //または const maxlength = elem.getAttribute('data-maxlength');
        //値が空でなければ
        if (elem.value !== '') {
          //値が maxlength を超えていればエラーを表示してフォームの送信を中止
          if (elem.value.length > maxlength) {
            createError(elem, maxlength + '文字以内でご入力ください');
            e.preventDefault();
          }
        }
      });

      //エラーの最初の要素を取得
      const errorElem = validationForm.querySelector('.' + errorClassName);
      //エラーがあればエラーの最初の要素の位置へスクロール
      if (errorElem) {
        const errorElemOffsetTop = errorElem.offsetTop;
        window.scrollTo({
          top: errorElemOffsetTop - 40, //40px 上に位置を調整
          //スムーススクロール
          behavior: 'smooth',
        });
      }
    });
  }
});
