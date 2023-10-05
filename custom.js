$(document).ready(function () {
  $(".slider li:first").show();

  index = 0;

  $(".nagivation li").click(function () {
    index = $(this).index();

    $(".slider li").hide();
    $(".slider li:eq(" + index + ")").fadeIn(500);
    $(".nagivation li a").removeClass("active");
    $(this).find("a").addClass("active");
  });

  //sayılar üzerine gelince böyle ilerleyecek
  //   $(".nagivation li").hover(function () {
  //     //üzerine gelindiğinde yapılacak işlemler
  //     var index = $(this).index();
  //     $(".slider li").hide();
  //     $(".slider li:eq(" + index + ")").fadeIn(500);
  //     $(".nagivation li a").removeClass("active");
  //     $(this).find("a").addClass("active");
  //   });

  $("#prev").click(function () {
    if (index == 0) {
      index = 4;
    } else {
      index--;
    }

    $(".slider li").hide();
    $(".slider li:eq(" + index + ")").fadeIn(500);
    $(".nagivation li a").removeClass("active");
    $(".nagivation li:eq(" + index + ")")
      .find("a")
      .addClass("active");
  });
  $("#next").click(function () {
    if (index == 4) {
      index = 0;
    } else {
      index++;
    }

    $(".slider li").hide();
    $(".slider li:eq(" + index + ")").fadeIn(500);
    $(".nagivation li a").removeClass("active");
    $(".nagivation li:eq(" + index + ")")
      .find("a")
      .addClass("active");
  });
});

// yıldız
