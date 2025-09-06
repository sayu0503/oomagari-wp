"use strict";

jQuery(function ($) {
  // WordPressでも$を使えるようにするスコープ

  // ドロワーメニューの開閉
  $(".js-hamburger").click(function () {
    if ($(this).hasClass("is-active")) {
      $(this).removeClass("is-active");
      $(".js-sp-nav").fadeOut(300);
      $(".header").removeClass("is-open");
      $("body").css("overflow", "auto"); // 背景スクロールを戻す
    } else {
      $(this).addClass("is-active");
      $(".js-sp-nav").fadeIn(300);
      $(".header").addClass("is-open");
      $("body").css("overflow", "hidden"); // 背景を固定
    }
  });

  $(".js-sp-nav a").click(function (event) {
    var href = $(this).attr("href");

    // 同一ページ内のアンカーリンク（href が "#" で始まる）
    if (href.startsWith("#")) {
      event.preventDefault();
      var headerHeight = $(".js-header").outerHeight();
      var $target = $(href);
      if ($target.length) {
        var position = $target.offset().top - headerHeight;
        $("html, body").animate({
          scrollTop: position
        }, 500);
      }
    }

    // メニューを閉じる処理
    $(".js-hamburger").removeClass("is-active");
    $(".js-sp-nav").fadeOut(300);
    $(".header").removeClass("is-open");
    $("body").css("overflow", "auto");
  });

  // ウィンドウ幅が768px以上になったらメニューを閉じる
  $(window).resize(function () {
    if (window.matchMedia("(min-width: 768px)").matches) {
      $(".js-hamburger").removeClass("is-active");
      $(".js-sp-nav").fadeOut(300);
      $(".header").removeClass("is-open");
      $("body").css("overflow", "auto");
    }
  });

  // ヘッダーの高さを毎回計算する関数
  function getHeaderHeight() {
    return $(".js-header").outerHeight() || 0;
  }

  // 余白を追加したい場合はここで調整
  var extraMargin = 0;

  // ページ読み込み時にハッシュがある場合の処理
  if (window.location.hash) {
    // 一旦ブラウザのデフォルトジャンプを打ち消す
    $("html, body").scrollTop(0);

    // 読み込みが落ち着いてからスクロール
    setTimeout(function () {
      var target = $(window.location.hash);
      if (target.length) {
        var targetPosition = target.offset().top - getHeaderHeight() - extraMargin;
        $("html, body").animate({
          scrollTop: targetPosition
        }, 800, "swing");
      }
    }, 300);
  }

  // ページ内リンククリック時の処理
  $('a[href*="#"]').on("click", function (e) {
    var href = $(this).attr("href");
    var currentPath = location.pathname.replace(/\/$/, "");
    var targetPath = this.pathname.replace(/\/$/, "");
    if (currentPath === targetPath && location.hostname === this.hostname) {
      e.preventDefault();
      var $target = $(this.hash === "#" ? "html" : this.hash);
      if ($target.length) {
        var position = $target.offset().top - getHeaderHeight() - extraMargin;
        $("html, body").stop().animate({
          scrollTop: position
        }, 800, "swing");
      }
    }
  });

  // スクロールでページトップボタン表示制御
  $(".js-page-top").hide();
  $(window).on("scroll", function () {
    if ($(this).scrollTop() > 70) {
      $(".js-page-top").fadeIn();
    } else {
      $(".js-page-top").fadeOut();
    }
    var scrollHeight = $(document).height();
    var scrollPosition = $(window).height() + $(window).scrollTop();
    var footHeight = $('footer').outerHeight();
    if (scrollHeight - scrollPosition <= footHeight) {
      $(".js-page-top").css({
        "position": "absolute",
        "bottom": 16 + footHeight
      });
    } else {
      $(".js-page-top").css({
        "position": "fixed",
        "bottom": "16px"
      });
    }
  });

  // サイドバーアコーディオン
  $(".js-accordion-title.is-open").next().show();
  $(".js-accordion-title").on("click", function () {
    $(this).next().slideToggle(300);
    $(this).toggleClass("is-open", 300);
  });
});
gsap.fromTo('.top-worship-info__image img', {
  y: -50
}, {
  y: 0,
  duration: 2,
  scrollTrigger: {
    trigger: '.top-worship-info__image img',
    start: 'top bottom',
    end: 'bottom top',
    scrub: 2
  }
});
gsap.fromTo('.news-item', {
  opacity: 0,
  x: -30
}, {
  opacity: 1,
  x: 0,
  stagger: {
    each: 0.1,
    from: 'start'
  },
  scrollTrigger: {
    trigger: '.top-news__items',
    start: 'top center'
  },
  // アニメーション終了後に transform を削除
  clearProps: "transform"
});
gsap.fromTo('.top-about__content', {
  opacity: 0
}, {
  scrollTrigger: {
    trigger: '.top-about__content',
    start: 'top center'
  },
  opacity: 1,
  duration: 1
});
gsap.fromTo('.blog-card', {
  opacity: 0
}, {
  opacity: 1,
  stagger: {
    each: 0.2,
    from: 'start'
  },
  scrollTrigger: {
    trigger: '.top-blog__contents',
    start: 'top center'
  },
  // アニメーション終了後に transform を削除
  clearProps: "transform"
});