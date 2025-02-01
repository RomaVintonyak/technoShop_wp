jQuery(document).ready(function () {
   "use script";
   /*chackout form*/
   var chackoutBtn = $("#sendChackout");
   var chackout_ajax_url = $("#chackoutForm").attr('data-action');
   chackoutBtn.on("click", function () {
      var name = $("#chackoutPIB").val().trim();
      var phone = $("#chackoutPhone").val().trim(),
         intRegex = /^(\s*)?(\+)?([- _():=+]?\d[- _():=+]?){10,14}(\s*)?$/;
      var email = $("#chackoutMail").val().trim(),
         emailReg = /^[a-z0-9_-]+@[a-z0-9-]+\.([a-z]{1,6}\.)?[a-z]{2,6}$/i;
      var region = $("#chackoutRegion").val().trim();
      var city = $("#chackoutCity").val().trim();
      var department = $("#chackoutDepartment").val().trim();
      var pay = $("#chackoutPay").val().trim();
      if (name.length < 8) {
         $(".error__pib--chackout").css({
            "opacity": "1",
            "visibility": "visible"
         });
         return false;
      } else if ((phone.length < 6) || (!intRegex.test(phone))) {
         $(".error__pib--chackout").removeAttr("style");
         $(".error__phone--chackout").css({
            "opacity": "1",
            "visibility": "visible"
         });
         return false;
      } else if (!emailReg.test(email) || email == '') {
         $(".error__pib--chackout").removeAttr("style");
         $(".error__phone--chackout").removeAttr("style");
         $(".error__mail--chackout").css({
            "opacity": "1",
            "visibility": "visible"
         });
         return false;
      } else if (region.length < 3) {
         $(".error__pib--chackout").removeAttr("style");
         $(".error__phone--chackout").removeAttr("style");
         $(".error__mail--chackout").removeAttr("style");
         $(".error__region--chackout").css({
            "opacity": "1",
            "visibility": "visible"
         });
         return false;
      } else if (city.length < 3) {
         $(".error__pib--chackout").removeAttr("style");
         $(".error__phone--chackout").removeAttr("style");
         $(".error__mail--chackout").removeAttr("style");
         $(".error__region--chackout").removeAttr("style");
         $(".error__city--chackout").css({
            "opacity": "1",
            "visibility": "visible"
         });
         return false;
      } else if (department.length < 3) {
         $(".error__pib--chackout").removeAttr("style");
         $(".error__phone--chackout").removeAttr("style");
         $(".error__mail--chackout").removeAttr("style");
         $(".error__region--chackout").removeAttr("style");
         $(".error__city--chackout").removeAttr("style");
         $(".error__department--chackout").css({
            "opacity": "1",
            "visibility": "visible"
         });
         return false;
      } else if (pay.length < 3) {
         $(".error__pib--chackout").removeAttr("style");
         $(".error__phone--chackout").removeAttr("style");
         $(".error__mail--chackout").removeAttr("style");
         $(".error__region--chackout").removeAttr("style");
         $(".error__city--chackout").removeAttr("style");
         $(".error__department--chackout").removeAttr("style");
         $(".error__pay--chackout").css({
            "opacity": "1",
            "visibility": "visible"
         });
         return false;
      }
      $(".error__pib--chackout").removeAttr("style");
      $(".error__phone--chackout").removeAttr("style");
      $(".error__mail--chackout").removeAttr("style");
      $(".error__region--chackout").removeAttr("style");
      $(".error__city--chackout").removeAttr("style");
      $(".error__department--chackout").removeAttr("style");
      $(".error__pay--chackout").removeAttr("style");
      $.ajax({
         url: chackout_ajax_url,
         type: 'POST',
         cache: false,
         data: {
            action: 'sendChackoutForm',
            'name': name,
            'phone': phone,
            'email': email,
            'region': region,
            'city': city,
            'department': department,
            'pay': pay
         },
         dataType: 'html',
         beforeSend: function () {
            chackoutBtn.prop("disabled", true);
         },
         success: function (data) {
            if (!data)
               alert("Щось не так ... Спробуйте ще раз!");
            else
               $("#chackoutForm").trigger("reset");
            alert(data);
            chackoutBtn.prop("disabled", false);
         }
      });
   });
});