jQuery(function(){

  // --vhというカスタムプロパティを作成
  var vh = window.innerHeight * 0.01;
  document.documentElement.style.setProperty('--vh', vh  + 'px');
  // window resize
  window.addEventListener('resize', () => {
      vh = window.innerHeight * 0.01;
      document.documentElement.style.setProperty('--vh', vh  + 'px');
  });


  // スムーススクロール：ページ内リンク
  jQuery('a[href^="#"]').click(function(){
    //スクロールのスピード
    var speed = 500;
    //リンク元を取得
    var href= jQuery(this).attr("href");
    //リンク先を取得
    var target = jQuery(href == "#" || href == "" ? 'html' : href);
    //リンク先までの距離を取得
    var position = target.offset().top;

    jQuery("html, body").animate({scrollTop:position}, speed, "swing");
    return false;
  });

  // トップに戻るボタン表示
  var topBtn = jQuery('.to_top');    
  topBtn.hide();
  //スクロールが100に達したらボタン表示
  jQuery(window).scroll(function () {
      if (jQuery(this).scrollTop() > 100) {
          topBtn.fadeIn();
      } else {
          topBtn.fadeOut();
      }
  });

  // 追従ヘッダ
  var main = jQuery('.main_wrap');
  var offsetTop = main.offset().top;
  var nav = jQuery('header nav');
  var fixedMenu = function(){
    if ( jQuery(window).scrollTop() > offsetTop ) {
      nav.addClass('header_fixed');
  
    } else {
      nav.removeClass('header_fixed');
    }
  }
  jQuery(window).scroll(fixedMenu);
  jQuery('body').bind('touchmove' , fixedMenu);


  // パララックス
  var para_box_top = jQuery('.para_box').offset().top;
  jQuery(window).scroll(function(){
    var scrollval = jQuery(this).scrollTop();
    jQuery('.para_box').css('top' , para_box_top + scrollval / 50);
  });
});

