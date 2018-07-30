/*About Page Text Javascript*/

$(document).ready(function() {
    var sloganArea = $(".slogan ul");
    var textwidth480 = window.matchMedia("(max-width: 480px)");
    var textwidth375 = window.matchMedia("(max-width: 375px)");
  
    sloganArea.width(sloganArea.find("li").eq(0).find("span").width());
  
    setInterval(function() {
      var itemHeight = $(".slogan ul li").eq(0).height();
  
      // test if else statement
      if (textwidth375.matches) {
        var itemHeight = $(".slogan ul li").eq(0).height() + 20;
        // window width is at less than 375px
      } else if (textwidth480.matches) {
        var itemHeight = $(".slogan ul li").eq(0).height() + 25;
        // window width is greater than 480px
      }
      
      else {
        var itemHeight = $(".slogan ul li").eq(0).height() + 50;
        // window width is greater than 480px
      }
  
      // test statement
  
      sloganArea.animate(
        {
          width: $(".slogan ul li").eq(1).find("span").width(),
          top: itemHeight * -1
        },
        350,
        function() {
          sloganArea.append($(".slogan ul li").eq(0));
          sloganArea.css("top", 0);
  
          $(".slogan ul li").each(function(i) {
            $(this).css("top", i * itemHeight);
          });
        }
      );
    }, 3000);
    // $(".slogan ul li").eq(5);hideword.hide();
  });