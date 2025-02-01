/*preloader script*/
$(window).on("load", function () {
  var preloader = $("#loader");
  var timeDelay = 800;
  setTimeout(function () {
    $("body").removeAttr("style");
    preloader.addClass("loader--done");
  }, timeDelay);
});
jQuery(document).ready(function () {
  "use script";
  //constant
  const headerHeight = $("#header").height();
  /*burger button*/
  var burgerBtn = $(".burger__btn");
  $(window).on("load resize", function () {
    if ($(window).width() <= 991) {
      burgerBtn.on("click", function () {
        $(this).toggleClass("burger__btn--active");
      });
    } else {
      burgerBtn.removeClass("burger__btn--active");
    }
  });
  burgerBtn.on("click", function () {
    $(".nav__content--menu").toggleClass("menu__open");
  });
  /*intro slider*/
  var introSlider = $("#introSlider");
  introSlider.slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 3000,
    arrows: false,
    dots: false,
    swipe: false,
    touchMove: false,
    focusOnSelect: false,
    fade: true,
    draggable: false,
  });
  /*product slider*/
  var productSlider = $("#productSlider");
  productSlider.slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 3000,
    arrows: false,
    dots: false,
    swipe: false,
    touchMove: false,
    focusOnSelect: false,
    fade: true,
    draggable: false,
  });
  /*Custom navigation button product slider*/
  $(".slider__button--prev").on("click", function () {
    productSlider.slick("slickPrev");
  });
  $(".slider__button--next").on("click", function () {
    productSlider.slick("slickNext");
  });
  /*proposition slider*/
  var propSlider = $("#propositionSlider");
  propSlider.slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    infinite: true,
    autoplay: true,
    autoplaySpeed: 3000,
    arrows: false,
    dots: false,
    swipe: true,
    touchMove: false,
    focusOnSelect: false,
    fade: false,
    draggable: true,
    responsive: [
      {
        breakpoint: 991,
        settings: {
          slidesToShow: 2,
        },
      },
      {
        breakpoint: 678,
        settings: {
          slidesToShow: 1,
        },
      },
    ],
  });
  $(".proposition__button--prev").on("click", function () {
    propSlider.slick("slickPrev");
  });
  $(".proposition__button--next").on("click", function () {
    propSlider.slick("slickNext");
  });
  /*popular slider*/
  var popularSlider = $("#popularSlider");
  popularSlider.slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    infinite: true,
    autoplay: true,
    autoplaySpeed: 3000,
    arrows: false,
    dots: false,
    swipe: true,
    touchMove: false,
    focusOnSelect: false,
    fade: false,
    draggable: true,
    responsive: [
      {
        breakpoint: 991,
        settings: {
          slidesToShow: 2,
        },
      },
      {
        breakpoint: 678,
        settings: {
          slidesToShow: 1,
        },
      },
    ],
  });
  $(".popular__button--prev").on("click", function () {
    popularSlider.slick("slickPrev");
  });
  $(".popular__button--next").on("click", function () {
    popularSlider.slick("slickNext");
  });
  /*back to top script*/
  var backTopBtn = $(".back__top");
  $(window).on("scroll", function () {
    if ($(this).scrollTop() > (headerHeight)) {
      backTopBtn.css({
        bottom: 0
      });
    } else {
      backTopBtn.removeAttr("style");
    }
  });
  backTopBtn.on("click", function (event) {
    event.preventDefault();
    $("html, body").animate({
      scrollTop: 0
    }, 1000, "swing");
  });
  /*fixed nav menu*/
  var navMenu = $("#navPanel");
  $(window).on("scroll", function () {
    if ($(this).scrollTop() >= (headerHeight)) {
      navMenu.css({
        position: "fixed",
        top: 0,
        left: 0
      });
    } else {
      navMenu.removeAttr("style");
    }
  });
  /*back to cat menu*/
  var catBtn = $("#catBtn");
  $(window).on("load resize", function () {
    /*if ($(window).width() >= 991) {*/
      catBtn.on("click", function (event) {
        event.preventDefault();
        $("html, body").animate({
          scrollTop: headerHeight
        }, 1000, "swing");
      });
    /*}*/
  });
  $(window).on("load resize", function () {
    if ($(window).width() <= 768) {
      catBtn.on("click", function (event) {
        event.preventDefault();
        $("#aside").toggleClass("aside__open");
      });
    }
  });
  /*progres line*/
  $(window).on("scroll resize", function () {
    var docHeight = $(document).height();
    var windowHeight = $(window).height();
    var scrolTop = $(window).scrollTop();
    var progress = scrolTop / (docHeight - windowHeight);
    $("#progressBlock").css({
      width: ((100 * progress) | 0) + "%"
    });
  });
  /*page about slider*/
  var aboutSliderPage = $("#aboutSlider");
  aboutSliderPage.slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    infinite: true,
    autoplay: true,
    autoplaySpeed: 3000,
    arrows: false,
    dots: false,
    swipe: false,
    touchMove: false,
    focusOnSelect: false,
    fade: true,
    draggable: false,
  });
});