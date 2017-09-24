let areIpsumRed = false;

let clickMoreHandler = (event)=>{
  console.log(JSON.stringify(event.target));
  let moreText = $(event.target).parent().find(".longTxtExpanded");
  let isExpanded = moreText.css("display") === "none";
  if (isExpanded) {
    console.log("show");
    moreText.show();

  } else {
    moreText.hide();
  }
};

let smoothScroll = (event)=>{

    event.preventDefault();
    console.log("ok");
    $("html, body").animate({
      scrollTop : $("body").offset().top
    }, 'slow');
};

$(document).ready(()=>{
  $(".readMore").click(clickMoreHandler);
  $("#backToTop" ).click(smoothScroll);
  $("#button").click(()=>{
    if (!areIpsumRed) {
      $(".post").eq(0).html($(".post").eq(0).html().replace(/ipsum/g, "<span style='color:red;'>ipsum</span>"));
      $(".post").eq(1).html($(".post").eq(1).html().replace(/ipsum/g, "<span style='color:red;'>ipsum</span>"));
      $(".post").eq(2).html($(".post").eq(2).html().replace(/ipsum/g, "<span style='color:red;'>ipsum</span>"));
    } else {
      $(".post").eq(0).html($(".post").eq(0).html().replace(/<span style\="color:red;">ipsum<\/span>/g, "ipsum"));
      $(".post").eq(1).html($(".post").eq(1).html().replace(/<span style\="color:red;">ipsum<\/span>/g, "ipsum"));
      $(".post").eq(2).html($(".post").eq(2).html().replace(/<span style\="color:red;">ipsum<\/span>/g, "ipsum"));
    }
    areIpsumRed = !areIpsumRed;
    $(".readMore").click(clickMoreHandler);
  });

});
