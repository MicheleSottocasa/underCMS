$( document ).ready(function() {

    /* Open Menu */
    $( ".hamburger" ).on('click', function() {
      $(".menu").toggleClass("menu--open");
      $(".hamburger").toggleClass("hamburger--open span");
    });
    /* Go to Top */
    window.addEventListener ("scroll",function(){
      if (window.pageYOffset > 300) {
          document.getElementById ("go-top").style.display= "block";
      }else if (window.pageYOffset < 300) {
          document.getElementById ("go-top").style.display= "none";
      }
      val[0].innerHTML= "PageYOffset = "+window.pageYOffset;
      },!1);
      /* White back menu */
      var menu = document.getElementById ("head");
      window.addEventListener ("scroll",function(){
      if (window.pageYOffset < 50) {
          menu.style.display= "none";
      }else if (window.pageYOffset > 50) {
          menu.style.display= "block";
          menu.classList.add("animate__fadeIn");
      }
      val[0].innerHTML= "PageYOffset = "+window.pageYOffset;
      },!1);
  });