
// header back ground class change on scroll
  window.onscroll = function () { scrollFunction() };
  function scrollFunction() {
    var element = document.getElementById("header");
    if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
      element.classList.add("background-gradiant-header");
      element.classList.add("text-white");
      element.classList.remove("navbar-light");
      element.classList.remove("text-primary");
    } else {
      element.classList.remove("background-gradiant-header");
      element.classList.remove("text-white");
      element.classList.add("navbar-light");
      element.classList.add("text-primary");
    }
  }



