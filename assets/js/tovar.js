jQuery(document).ready(function () {
   "use script";
   /*tovar summ*/
   function tovarSumm() {
      var tovarCount = $("._tovarCount").val();
      var tovarPrice = $("[data-price]").data('price');
      var tovarRezult = tovarCount * tovarPrice;
      $("[data-price]").text(tovarRezult);
   }
   tovarSumm();
   /*color value tovar*/
   function colorValue() {
      var colorTag = $("._colorValuye");
      var colorVal = $("#_variationColors").val();
      colorTag.text(colorVal);
   }
   colorValue();
   $("#_variationColors, option").on("click", function () {
      colorValue();
   });
   /*count minus*/
   $(".count__minus").on("click", function (event) {
      event.preventDefault();
      var counterMinus = $("._tovarCount");
      var countMinus = parseInt(counterMinus.val()) - 1;
      countMinus = countMinus < 1 ? 1 : countMinus;
      counterMinus.val(countMinus);
      counterMinus.change();
      tovarSumm();
      return false;
   });
   /*count plus*/
   $(".count__plus").on("click", function (event) {
      event.preventDefault();
      var counertPlus = $("._tovarCount");
      counertPlus.val(parseInt(counertPlus.val()) + 1);
      counertPlus.change();
      tovarSumm();
      return false;
   });
   /*slider tovariv*/
   var tovarSlider = $("#_tovarSlider");
   tovarSlider.slick({
      slidesToShow: 4,
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
   });
   $(".slider__button--prev").on("click", function () {
      tovarSlider.slick("slickPrev");
   });
   $(".slider__button--next").on("click", function () {
      tovarSlider.slick("slickNext");
   });
   /*lightbox tovar galery*/
   lightbox.option({
      resizeDuration: 500,
      fadeDuration: 500,
      disableScrolling: true,
      wrapAround: true,
   })
});