var loader = document.querySelector(".pre-loader");
var html = document.querySelector("html");

function myMove() {
  loader.style.display = "none";
  html.style.overflowY = "scroll";
}

window.addEventListener("load", function () {
  setTimeout(function () {
    myMove();
  }, 2000);
});

var selector = ".nav-item";
var url = window.location.href;
var target = url.split("/");
$(selector).each(function () {
  if ($(this).attr("href") === target[4]) {
    $(selector).removeClass("active-nav");
    $(this).removeClass("active-nav").addClass("active-nav");
  }
});

var words = ["ashi NGO"],
  part,
  i = 0,
  offset = 0,
  len = words.length,
  forwards = true,
  skip_count = 0,
  skip_delay = 30,
  speed = 100;
var wordflick = function () {
  setInterval(function () {
    if (forwards) {
      if (offset >= words[i].length) {
        ++skip_count;
        if (skip_count == skip_delay) {
          forwards = false;
          skip_count = 0;
        }
      }
    } else {
      if (offset == 0) {
        forwards = true;
        i++;
        offset = 0;
        if (i >= len) {
          i = 0;
        }
      }
    }
    part = words[i].substr(0, offset);
    if (skip_count == 0) {
      if (forwards) {
        offset++;
      } else {
        offset--;
      }
    }
    $(".word").text(part);
  }, speed);
};

$(document).ready(function () {
  wordflick();
});

var swiper = new Swiper(".mySwiper-heroImg", {
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});

var swiper = new Swiper(".mySwiper-facility", {
  slidesPerView: 3,
  spaceBetween: 50,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  breakpoints: {
    0: {
      slidesPerView: 1,
    },
    640: {
      slidesPerView: 2,
    },
    768: {
      slidesPerView: 3,
    },
    1024: {
      slidesPerView: 3,
    },
  },
});

var swiper = new Swiper(".mySwiper-event", {
  slidesPerView: 1,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
});

var swiper = new Swiper(".mySwiper-gallery", {
  slidesPerView: 3,
  spaceBetween: 50,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  breakpoints: {
    0: {
      slidesPerView: 1,
    },
    640: {
      slidesPerView: 2,
    },
    768: {
      slidesPerView: 3,
    },
    1024: {
      slidesPerView: 3,
    },
  },
});

$(function () {
  $(".video-btn").click(function () {
    $(".video").removeClass("d-none").addClass("d-block");
    $(".photo").addClass("d-none").removeClass("d-block");
    $(".v").removeClass("non-active").addClass("active");
    $(".p").addClass("non-active").removeClass("active");
  });
  $(".photo-btn").click(function () {
    $(".photo").removeClass("d-none").addClass("d-block");
    $(".video").addClass("d-none").removeClass("d-block");
    $(".p").removeClass("non-active").addClass("active");
    $(".v").addClass("non-active").removeClass("active");
  });
  $(".benefit-content").hover(function () {
    $(".benefit-content.active-content").removeClass("active-content");
    $(this).toggleClass("active-content");
  });
});

$(window).scroll(function () {
  var h = $(document).height();
  var hh = $(document).scrollTop();
  if (hh > h / 1.5) {
    $("#top").css({
      // top: "80%",
      opacity: "1",
      visibility: "visible",
      transform: "scale(1)",
    });
  } else {
    $("#top").css({
      // top: "0",
      opacity: "0",
      visibility: "hidden",
      transform: "scale(0.1)",
    });
  }
});
