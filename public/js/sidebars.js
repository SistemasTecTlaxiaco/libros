/* global bootstrap: false */
(function () {
  'use strict'
  var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
  tooltipTriggerList.forEach(function (tooltipTriggerEl) {
    new bootstrap.Tooltip(tooltipTriggerEl)
  })
})()

$(".dropdown-toggle").on("click", function(event){//"show.bs.dropdown"
    var liparent=$(this.parentElement);
    var ulChild=liparent.find('ul');
    var xOffset=liparent.offset().left;
    var alignRight=($(document).width()-xOffset)<xOffset;
    if (liparent.hasClass("dropdown-submenu"))
    {
        ulChild.css("left",alignRight?"-101%":"");
    }
    else
    {                
        ulChild.toggleClass("dropdown-menu-right",alignRight);
    }

});