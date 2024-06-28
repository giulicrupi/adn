








    if (window.matchMedia("(min-width:400px)").matches) {
    $(document).ready(function(){
      $(window).scroll(function() { // check if scroll event happened
        if ($(document).scrollTop() > 90 ) { // check if user scrolled more than 50 from top of the browser 
          // if yes, then change the color of class "navbar-fixed-top" to white (#f8f8f8)
          $(".menu").addClass("change");







        } else {


          $(".menu").removeClass("change");




        }
      });
    });}



//         if (window.matchMedia("(max-width:980px)").matches) {
//     $(document).ready(function(){
//       $(window).scroll(function() { // check if scroll event happened
//         if ($(document).scrollTop() > 390 ) { // check if user scrolled more than 50 from top of the browser 
//           // if yes, then change the color of class "navbar-fixed-top" to white (#f8f8f8)
// $(".logo-nav").addClass("mudar-logo");






//         } else {
// $(".logo-nav").removeClass("mudar-logo");




//         }
//       });
//     });}







    // if (window.matchMedia("(min-width:1080px)").matches) {
    // $(document).ready(function(){
    //   $(window).scroll(function() { // check if scroll event happened
    //     if ($(document).scrollTop() > 3080) { // check if user scrolled more than 50 from top of the browser 
    //       // if yes, then change the color of class "navbar-fixed-top" to white (#f8f8f8)


    //     } 
    //   });
    // });}








     $('.botao a[href^="#"]').on('click', function(e) {
  e.preventDefault();
  var id = $(this).attr('href'),
      targetOffset = $(id).offset().top;
      
  $('html, body').animate({ 
    scrollTop: targetOffset - 100
  }, 500);
});   

 


$('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
  $('.slider-galeria').slick('setPosition');
  $('.slider-galeria-thumbs').slick('setPosition');
  $('.slider-planta').slick('setPosition');
  $('.slider-planta-thumbs').slick('setPosition');  
  $('.slider-implantacao').slick('setPosition');
  $('.slider-implantacao-thumbs').slick('setPosition');    
});



$(document).ready(function(){
    $(".btn-expand").click(function(){
        $(".menu-mobile").toggleClass("ativo");
        $(".btn-expand").toggleClass("ativo");
    });
    $("#click-bar").click(function(){
        $(".closed").toggleClass("abrir");
        
    });    
});