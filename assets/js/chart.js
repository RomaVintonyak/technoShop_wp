jQuery(document).ready(function () {
   "use script";
   /*summ all chart item*/
   $("[chart-price]").each(function () {
      var chartPrice = $(this).text();
      var chartCount = $(this).closest(".tovar__opys--price")
         .closest(".tovar__opys").closest(".chart__block--content").find("._chartCount").val();
      var tovarRezult = chartPrice * chartCount;
      var tovarSumm = $(this).closest(".tovar__opys--price")
         .closest(".tovar__opys").closest(".chart__block--content").find("[data-chartsumm]");
      tovarSumm.html(tovarRezult);
   });
   /*all basket summ*/
   function allSumm() {
      var arrList = $('[data-chartsumm]').map(function () {
         var arrTovarSumm = $(this).text();
         var numberTovarSumm = Number(arrTovarSumm);
         return numberTovarSumm;
      }).get();
      function arraySum(array) {
         var summaTovariv = 0;
         for (var i = 0; i < array.length; i++) {
            summaTovariv += array[i];
         }
         $("#basketSumm").html(summaTovariv);
      }
      arraySum(arrList);
   }
   allSumm();
   /*remove product position*/
   $("._removeBlock").on("click", function () {
      if (confirm("Бажаєте видалити дану позицію?")) {
         $(this).closest(".chart__block--delete").closest(".chart__block").remove();
         allSumm();
      } else {
         return false;
      }
   });
   /*count minus*/
   $(".chart__minus").on("click", function (event) {
      event.preventDefault();
      var counterMinus = $(this).closest(".chart__tovar--count").find("._chartCount");
      var countMinus = parseInt(counterMinus.val()) - 1;
      countMinus = countMinus < 1 ? 1 : countMinus;
      counterMinus.val(countMinus);
      counterMinus.change();
      var tovarPriceM = $(this).closest(".chart__tovar--count")
         .closest(".chart__block--content").find("[chart-price]").text();
      var tovarCountM = $(this).closest(".chart__tovar--count").find("._chartCount").val().trim();
      var tovarSumm = tovarPriceM * tovarCountM;
      var tovarSummM = $(this).closest(".chart__tovar--count")
         .closest(".chart__block--content").find("[data-chartsumm]");
      tovarSummM.html(tovarSumm);
      allSumm();
      return false;
   });
   /*count plus*/
   $(".chart__plus").on("click", function (event) {
      event.preventDefault();
      var counertPlus = $(this).closest(".chart__tovar--count").find("._chartCount");
      counertPlus.val(parseInt(counertPlus.val()) + 1);
      counertPlus.change();
      var tovarPriceP = $(this).closest(".chart__tovar--count")
         .closest(".chart__block--content").find("[chart-price]").text();
      var tovarCountP = $(this).closest(".chart__tovar--count").find("._chartCount").val().trim();
      var tovarSummP = tovarPriceP * tovarCountP;
      var tovarSummPblock = $(this).closest(".chart__tovar--count")
         .closest(".chart__block--content").find("[data-chartsumm]");
      tovarSummPblock.html(tovarSummP);
      allSumm();
      return false;
   });
   /*reload chart page*/
   $("#reloadPage").on("click", function () {
      location.reload(true);
   });
});