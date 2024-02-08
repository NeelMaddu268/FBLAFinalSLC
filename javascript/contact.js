// Get all elements and create variables
var container = document.getElementById("container");
var threshold = 100; 
var scrollTop = window.pageYOffset * 0.85;

// Setup the scrollbar properties
window.onscroll = function() {
  scrollTop = window.pageYOffset * 0.85;

  container.style.transform = "rotate(30deg) translateX(calc(50vw - " + scrollTop + "px))";
};

document.addEventListener("DOMContentLoaded", function () {
  // Create variables to store all elements
  const mailSvg = document.getElementById("envelope");
  const phoneSvg = document.getElementById("phone");
  const facebookSvg = document.getElementById("facebook");
  const instagram = document.getElementById("instagram")

  // Create an onclick of mail function to open a mailto prompt
  mailSvg.addEventListener("click", function () {
    window.location.href = "mailto:hiroteabaratl@gmail.com";
  });

  // Create an onclick of mail function to open a mailto prompt

  phoneSvg.addEventListener("click", function () {
    window.location.href = "tel:4045636031";
  });
  // Create an onclick of open window function to open the facebook page

  facebookSvg.addEventListener("click", function () {
    window.open("https://www.facebook.com/HiroTeaATL/", "_blank");
  });
  // Create an onclick of open window function to open the instagram page

  instagram.addEventListener("click", function () {
    window.open("https://www.instagram.com/hiroteaatl/", "_blank");
  });
});

// Create a scroll function that adjusts the navbar when scrolling.
function scrollFunction() {
if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
  document.getElementById("navBar").style.padding = "2.5px 10px";
  document.getElementById("logo").style.fontSize = "50px";
} else {
  document.getElementById("navBar").style.padding = "10px 10px";
  document.getElementById("logo").style.fontSize = "100px";
}
}