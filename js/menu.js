$(function(){

    // $(".hamburger").click(function() {
    //   $(".menu").toggleClass("open");
          
    //   });
    


    // 모바일
      function slideMenu() {
        const activeState = $(".menu").hasClass("active"); 
        $(".menu").animate({
            left: activeState ? "0%" : "-400px"}, 300);
        }
        
        $("#ham-wrap").on("click",function(){
            $(".hamburger").toggleClass("open");
            $(" .menu").toggleClass("active");
            slideMenu();   
        });

    //모바일 끝
    
    // 퀵메뉴
    // $("p.quick").on("click",function(){
    //     $("html, body").animate({
    //         scrollTop: 0
    //     }, "slow")
    //     return false
    // });

  	// top 아이콘 부드럽게 따라오기 
// const top = parseInt($("aside").css("top"));
// $(window).on("scroll", function () {

//     const dis = $(window).scrollTop();
//     $("aside").stop().animate({
//         top: dis + top + "px"
//     }, 1100);
// });

  // Animate the scroll to top
  $('aside').click(function() {
        
    $('html, body').animate({scrollTop: 0}, 500);
    
  });

  $('aside').hide();
  // ===== Scroll to Top visible ==== 
$(window).scroll(function() {
    if ($(this).scrollTop() >= 2900) {        // If page is scrolled more than 50px
        $('aside').fadeIn();    // Fade in the arrow
    } else {
        $('aside').fadeOut();   // Else fade out the arrow
    }
});
  });

   

 


