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
    y:0,
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


// お問合せフォーム動作
$(document).ready(function () {
  const $validationForm = $('.validationForm');
  if ($validationForm.length) {
    const errorClassName = 'p-contact-item__input--error';

    const $requiredElems = $('.required');
    const $emailElems = $('.email');
    const $maxlengthElems = $('.maxlength');
    const $queryElems = $('.query');

    // エラーメッセージを作成
    const createError = (elem, errorMessage) => {
      const $errorSpan = $('<span>').addClass(errorClassName).attr('aria-live', 'polite').text(errorMessage);
      elem.parent().append($errorSpan);
    };

    // エラーメッセージを削除
    const removeErrors = () => {
      $validationForm.find('.' + errorClassName).remove();
    };

    // 送信成功時
    const showSuccessMessage = () => {
      const $successElem = $('#js-success');
      $successElem.css('display', 'block').hide().slideDown();
    };

    const validateForm = (e) => {
      removeErrors();

      let hasError = false;

      // 必須項目のバリデーション
      $requiredElems.each(function () {
        const $elem = $(this);
        const elemValue = $elem.val().trim();
        if (elemValue.length === 0) {
          createError($elem, '＊名前を入力してください。');
          hasError = true;
        }
      });

      // メールアドレスのバリデーション
      $emailElems.each(function () {
        const $elem = $(this);
        const elemValue = $elem.val().trim();
        if (elemValue.length === 0) {
          createError($elem, '＊メールアドレスを入力してください。');
          hasError = true;
        }
      });

      // お問合せ内容のバリデーション
      $queryElems.each(function () {
        const $elem = $(this);
        const elemValue = $elem.val().trim();
        if (elemValue.length === 0) {
          createError($elem, '＊お問合せ内容を入力して下さい。');
          hasError = true;
        }
      });

      // メールフォーマットのバリデーション
      $emailElems.each(function () {
        const $elem = $(this);
        const pattern = /^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/iu;
        const elemValue = $elem.val().trim();
        if (elemValue !== '') {
          if (!pattern.test(elemValue)) {
            createError($elem, '＊正しいメールアドレスを入力してください。');
            hasError = true;
          }
        }
      });

      // 文字制限のバリデーション
      $maxlengthElems.each(function () {
        const $elem = $(this);
        const maxlength = $elem.data('maxlength');
        const elemValue = $elem.val().trim();
        if (elemValue !== '') {
          if (elemValue.length > maxlength) {
            createError($elem, maxlength + '文字以内でご入力ください');
            hasError = true;
          }
        }
      });

      if (hasError) {
        e.preventDefault();

        const $errorElem = $validationForm.find('.' + errorClassName).first();
        if ($errorElem.length) {
          const errorElemOffsetTop = $errorElem.offset().top;
          $('html, body').animate({ scrollTop: errorElemOffsetTop - 40 }, 'slow');
        }
      } else {
        e.preventDefault();

        // googleform
        const formData = $validationForm.serialize();
        $.ajax({
          url: $validationForm.attr('action'),
          data: formData,
          type: 'POST',
          dataType: 'xml',
          statusCode: {
            0: function () {
              // 送信に成功した時の処理
              $validationForm.slideUp();
              showSuccessMessage();
            },
            200: function () {
              // 送信に失敗した時の処理
              $validationForm.slideUp();
              $('#js-error').slideDown();
            },
          },
        });
      }
    };

    $validationForm.on('submit', validateForm);
  }
});

//smoothscroll
$('a[href^="#"]').click(function() {
    //移動速度を指定
    let speed =500;
    // hrefで指定されたidを取得
    let id = $(this).attr("href");
    //idの値が#飲みだったらターゲットをhtmlタグにしてトップへ戻るようにする
    let target = $("#" == id ? "html" : id);
    //ページのトップを基準にターゲットの位置を指定
    let position = $(target).offset().top;
    // ターゲットの位置までspeedの速度で移動　body
    $("html, body").animate(
        {
            scrollTop: position - $('#js-header').outerHeight()
        },
        speed
    );
    return false;
});
