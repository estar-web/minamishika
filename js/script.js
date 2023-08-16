//wow使用のための初期化
// new WOW().init();
var pcWidth = window.matchMedia('screen and (min-width: 769px)');
if (!navigator.userAgent.match(/(iPhone|iPad|iPod|Android)/)) { new WOW().init(); }

$(window).resize(function () {
  if (window.matchMedia('(min-width: 768px)').matches) {
    $('.js-anime').attr({
      'data-wow-offset': '30',
      'data-wow-delay': '0.5s'
    });
  }
});

var $header = $('#js-header');

// navigation
$('#js-toggle').on('click', function (e) {
  e.preventDefault();
  $header.toggleClass('add-active');

  let targetClass = $(this).attr("data-target");
  jQuery("." + targetClass).toggleClass("add-active");
});

$('#js-overlay').on('click', function (e) {
  e.preventDefault();
  $header.removeClass('add-active');
});

//PC幅に応じてクラスのつけ外し処理
function checkBreakPoint() {

  if (pcWidth.matches) {
    $header.removeClass('add-active');
    $header.find('*').removeClass('add-active');
  }
}

// カレント表示のつけ外し
href = location.href;
var links = $(".header__nav-link");

$(window).resize(function () {
  links.each(function (index, value) {
    if (pcWidth.matches) {
      if (value.href == href) {
        $(".header__nav-link").eq(index).addClass("is-current");
      }
    } else {
      $(".header__nav-link").eq(index).removeClass("is-current");
    }
  });
});

//リンクで飛んだ際に、ヘッダーの高さ分スクロールした状態で遷移する処理
$(window).on('load', function () {
  let headerHeight = $('.header').outerHeight();
  let urlHash = location.hash;
  if (urlHash) {
    let position = $(urlHash).offset().top - headerHeight;
    $('html, body').animate({ scrollTop: position }, 0);
  }
});

pcWidth.addListener(checkBreakPoint);
checkBreakPoint();

// smooth scroll
// $('a[href^="#"]').on('click', function (e) {
$('a[href*="#"]').on('click', function (e) {
  var speed = 500;
  var href = $(this).attr('href');
  // var target = $(this.hash === '#' || '' ? 'html' : this.hash)
  var target = $(href === '#' || '' ? 'html' : href)
  if (!target.length) return;

  var position = target.offset().top - $header.outerHeight();
  $('html, body').animate({ scrollTop: position }, speed, 'swing');
  e.preventDefault();
});

// header
$(window).on('scroll', function () {
  // if ($(this).scrollTop() > $('#js-hero').outerHeight()) {
  if ($(this).scrollTop() > 100) {
    $('body').addClass('add-scrolled');
  } else {
    $('body').removeClass('add-scrolled');
  }

});

// BLOGの時間差表示
// const wowBlog = function() {
//   const $wowLoop = $('.js-wow');
//   let loopIndex = 0;
//   let loopDelay = 0;
//   const loopLength = $wowLoop.length;
//   console.log(loopLength);
//   while (loopIndex < loopLength) {
//     $($wowLoop[loopIndex]).data('wow-delay', `${loopDelay}s`);
//     loopIndex++;
//     loopDelay += 0.2;
//   }
// };
// wowBlog();

const wowBlog = function () {
  const $wowLoop = document.getElementsByClassName('js-wow');
  let loopIndex = 0;
  let loopDelay = 0;
  const loopLength = $wowLoop.length;
  while (loopIndex < loopLength) {
    $wowLoop[loopIndex].dataset.wowDelay = loopDelay + 's';
    loopIndex++
    // 時間差の秒数はお好みで書き換えてください
    loopDelay += 0.2;
  }
}
wowBlog();

//トップページのスワイパー
const mySwiper1 = new Swiper('.top-swiper', {
  // 以下にオプションを設定
  loop: true,                             //最後に達したら先頭に戻る
  effect: 'fade',
  speed: 300,                            // スライドアニメーションのスピード（ミリ秒）
  // slidesPerView: 'auto',

  // breakpoints:{
  // 768:{
  slidesPerView: '1',                     //何枚表示するか
  // }
  // }

  autoplay: {                             //自動再生する
    delay: 5000,                        //次のスライドに切り替わるまでの時間
    disableOnInteraction: true,        //ユーザーが操作したら止めるか
    waitForTransition: true,           // アニメーションの間にスライドを止めるか
  },

  //ページネーション表示の設定
  pagination: {
    el: '.swiper-pagination',           //ページネーション要素のクラス名
    clickable: true,                    //クリック可能にするか
    type: 'bullets',                    //ページネーションの種類
    direction: 'vertical',
  },

  //ナビゲーションボタン（矢印）表示の設定
  navigation: {
    nextEl: '.swiper-button-next',      //「次へボタン」要素のクラス名
    prevEl: '.swiper-button-prev',      //「前へボタン」要素のクラス名
  },
});

//トップページのスワイパー
const mySwiper2 = new Swiper('.staff-swiper', {
  // 以下にオプションを設定
  //共通のオプション
  loop: true, // ループ
  speed: 1500, // 少しゆっくり(デフォルトは300)
  centeredSlides: true, // アクティブなスライドを中央にする

  autoplay: { // 自動再生
    delay: 1000, // 1秒後に次のスライド
  },

  //スマホ表示のオプション
  slidesPerView: 1.83, // 一度に表示する枚数
  spaceBetween: 10, // スライド間の距離
  //PC表示のオプション
  breakpoints: {
    768: {
      slidesPerView: 4, // 一度に表示する枚数
      spaceBetween: 20, // スライド間の距離
    }
  }
});


// 問い合わせフォームの必須内容確認

// let $form = $('#js-contactForm');
// let $submit = $('#form-submit')
// var requireFlg = false;
// var privacyFlg = false;
// var $require = $('#js-contactForm .js-require');
// // var $require = $($form .js-require);
// var fillCount = 0;
// var errorCount = 0;

// // 必須項目のフォーマット確認
// $require.on('blur', function () {
//   if (($.trim($(this).val()).length !== 0) &&
//     $(this).attr('id') === 'js-formKana' && !$(this).val().match(/^([ァ-ン]|ー)+$/)) {
//     $(this).val('');
//     $('#js-format-error').show();
//     fillCount++;
//     console.log('名前');

// } else {
//   $('#js-format-error').hide();
// }


//   //電話番号のフォーマット確認
//   if ($(this).attr('id') === 'js-telnumber' && !$(this).val().match(/^[0-9\-]*$/)) {
//     $(this).val('');
//     $('#js-number-error').show();
//     fillCount++;
//     console.log('電話番号');

//   } else {
//     $('#js-number-error').hide();
//   }

//   //メールアドレスの確認
//   // 入力された値がメールアドレスの形式かどうか判定する正規表現パターン
//   const emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
//   // メールアドレスの入力欄がフォーカスを失った時にメールアドレスの形式をチェック
//   // $("input[type='email']").on("blur", function () {
//   if (($.trim($(this).val()).length !== 0) &&
//     $(this).attr('id') === 'js-email' && !$(this).val().match(emailPattern)) {

//     $(this).val('');
//     $('#js-mail-error').show();
//     fillCount++;
//     console.log('メルアド');

//   } else {
//     $('#js-mail-error').hide();
//   }

// });

// // フォームが送信される前に入力チェックを行う
// $('#js-contactForm').on('submit', function (e) {
//   // 記入漏れがあるかどうかのフラグ
//   let hasError = false;

//   // 必須項目の空欄をチェック
//   $(this).find('.js-require').each(function () {
//     if ($.trim($(this).val()).length == 0) {
//       // 入力が空の場合はエラーを設定
//       hasError = true;
//       fillCount++;
//       console.log('必須項目エラー');
//       // エラーメッセージを表示
//       $(this).siblings('.required-error').show();
//     } else {
//       // 入力がある場合はエラーを解除
//       $(this).siblings('.required-error').hide();
//     }
//   });

//   // エラーがあった場合は、送信処理をキャンセル
//   if (hasError) {
//     event.preventDefault();
//   }
// });

// // 送信ボタン押下時
// $form.on('submit', function () {

//   if (0 !== fillCount) {
//     requireFlg = true;
//   } else {
//     requireFlg = false;
//   }

//   console.log(requireFlg);

//   // if (!(requireFlg)) {
//   if (requireFlg == true) {

//     $('#js-error').show();

//   }

//   return false;
// });

// 送信後の処理
// $form.submit(function (e) {
//   $.ajax({
//     url: $form.attr('action'),
//     data: $form.serialize(),
//     type: "POST",
//     dataType: "xml",
//     statusCode: {
//       0: function () {
//         //送信に成功したときの処理
//         $form.slideUp()
//         $('#js-success').slideDown()
//       },
//       200: function () {
//         //送信に失敗したときの処理
//         // $form.slideUp()
//         // $('#js-error').show()
//       }
//     }
//   });
//   return false;
// });

//フォーカス外れたときにエラーメッセージ表示
// $(document).ready(function () {
//   $('input[name="kana"]').on("blur", function () {
//     var errorElement = $('.kana-error-message');
//     if ($(this).val() !== '' && !/^[ァ-ヾ]+$/.test($(this).val())) {
//       errorElement.text("全角カタカナで入力してください。");
//     } else {
//       errorElement.text("");
//     }
//   });
// });
