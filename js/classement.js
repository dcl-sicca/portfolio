// Classement References --------------------------------------------------------------------------------------------------

$(document).ready(function () {
   /* Ã  la sÃ©lection du classement on met Ã  jour */
   $(document).on("change", "#select-order", function () {
       updateOrder();
   });
   /* au chargement de la page on lance le classement */
   updateOrder();
});

function updateOrder() {
   var order = $("#select-order").val();
   if (order == 'position' || order == 'an' || order == 'techno') {
       var divList = $(".item");
       if (order == 'position') { //tri numerique croissant
           divList.sort(function (a, b) {
               return  $(a).data(order) - $(b).data(order);
           });
       } else if (order == 'an') {//tri numerique decroissant
           divList.sort(function (a, b) {
               return $(b).data(order) - $(a).data(order);
           });
       } else if (order == 'techno') { //tri alphabetique
           divList.sort(function (a, b) {
               var compA = $(a).data(order).toUpperCase();
               var compB = $(b).data(order).toUpperCase();
               return (compB < compA) ? -1 : (compB > compA) ? 1 : 0;
           });
       }
       $(".card-container").html(divList);
   }
}





