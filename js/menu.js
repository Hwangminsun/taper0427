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
    $("p.quick").on("click",function(){
        $("html, body").animate({
            scrollTop: 0
        }, "slow")
        return false
    });

    });

   

 


