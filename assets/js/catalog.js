jQuery(document).ready(function () {
   "use script";
   /*sotr tovar in catalog*/
   $("#popular").click(function () {
      location.reload(true);
   });
   $("#lowPrice").click(function () {
      var tovar = $(".product__card"),
         catalog = $(".catalog__block--content");
      tovar.sort(function (tovar, catalog) {
         return tovar.getAttribute("data-order") - catalog.getAttribute("data-order");
      }),
         tovar.detach().appendTo(catalog);
   });
   $("#heightPrice").click(function () {
      var tovarH = $(".product__card"),
         catalogH = $(".catalog__block--content");
      tovarH.sort(function (tovarH, catalogH) {
         return catalogH.getAttribute("data-order") - tovarH.getAttribute("data-order");
      }),
         tovarH.detach().appendTo(catalogH);
   });
   /*filter product*/
   var filterBtn = $("[data-filter]");
   filterBtn.on("click", function (event) {
      event.preventDefault();
      var filterData = $(this).data('filter');
      $("[data-cat]").each(function () {
         var tovarData = $(this).data('cat');
         if (tovarData != filterData) {
            $(this).addClass("hide");
         } else {
            $(this).removeClass("hide");
         }
      });
   });
});