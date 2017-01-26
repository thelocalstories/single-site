/**

 Custom theme styles

 */

( function( $ ) {

    $("nav .menu-toppmeny-container a").click(function() {
    var link = $(this).attr('href');
    $('html, body').animate({
        scrollTop: $(link).offset().top
    }, 600);
    });

    $("p #offer-btn").click(function() {
    var link = $(this).attr('href');
    $('html, body').animate({
        scrollTop: $(link).offset().top
    }, 600);
    });

    //Hides the menu when clicking a menu alternative in mobile view
$( ".nav-button" ).click(function() {
    $( ".menu-toppmeny-container" ).toggleClass( "menu-active");

});

    //Hides the menu when clicking a menu alternative in mobile view
$( ".menu-item" ).click(function() {
    $( ".menu-toppmeny-container" ).toggleClass( "menu-active");
    $( ".nav-button" ).toggleClass("active");
});

document.querySelector( ".nav-button" ).addEventListener( "click", function() {
  (this.classList.contains("active") === true) ? this.classList.remove("active") : this.classList.add("active");
});

document.querySelector( ".navScroll" ).addEventListener( "click", function() {
  if($( ".menu-toppmeny-container" ).hasClass("menu-active")){
    $( ".menu-toppmeny-container" ).removeClass("menu-active");
    $( ".nav-button" ).toggleClass("active");
  }
});


$(window).scroll(function(){
    $(".fade").css("opacity", 1 - $(window).scrollTop() / 700);
  });


function calculateMenuMarker() {
// Get container scroll position
   var fromTop = $(this).scrollTop()+topMenuHeight;

   // Get id of current scroll item
   var cur = scrollItems.map(function(){
     if ($(this).offset().top < fromTop)
       return this;
   });
   // Get the id of the current element
   cur = cur[cur.length-1];
   var id = cur && cur.length ? cur[0].id : "";

   if (lastId !== id) {
       lastId = id;
       // Set/remove active class
       menuItems.parent().removeClass("active").end().filter("[href=\\#"+id+"]").parent().addClass("active");
   }
}


var lastId,
    topMenu = $("#primary-menu"),
    topMenuHeight = topMenu.outerHeight()+15,
    // All list items
    menuItems = topMenu.find("a"),
    // Anchors corresponding to menu items
    scrollItems = menuItems.map(function(){
      var item = $($(this).attr("href"));
      if (item.length) { return item; }
    });

// Bind to scroll

$(window).scroll(function(){
       calculateMenuMarker();
});

$(window).load(function(){
          calculateMenuMarker();

});

$('.submit input').click(function(){
	ga('send', 'event', { eventCategory: 'Offerrequest', eventAction: 'Submit form', eventLabel: 'Offertformulär', eventValue: 10});
});




} )( jQuery );
