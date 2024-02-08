const boba = document.querySelector("#boba");
console.log(boba.offsetWidth);
const bobaHeader = document.querySelector('#bobaHeader');
const bobaText = document.querySelector('#bobaText');
let offset = pageYOffset-100; 

const icesDiv =  document.querySelectorAll('#float');
const ices = document.querySelectorAll('#ice')

var bobaWidth = 4000;
var neg = 0;
var max;
console.log(screen.width);

console.log(max);
var min =0.01;

for(i=0;i<ices.length;i++){

    ices[i].style.transform = 'rotate('+ Math.random()*360 +'deg) scale(0.7)';

}

boba.style.transform = 'scale(' + min +0.001 + ')';
window.addEventListener('scroll', function () {
  if(screen.width>1000){
  requestAnimationFrame(bobaFunc);
  }
});

function bobaFunc() {
  max  = (screen.width/bobaWidth);
  offset = pageYOffset - 100;
    if (max<0.8){
    max  = Math.sqrt(max);
  }
  const growthRate = 0.0015;

  if (offset * growthRate < min) {
    boba.style.transform = 'scale(' + min+ ')';

  } else if (offset * growthRate > min&& offset * growthRate < max) {
    boba.style.transform = 'scale(' + offset * growthRate + ')';

      ')';
  } else if (offset * growthRate >= max) {
    boba.style.transform = 'scale(' + max + ')';

  }
  if (offset *growthRate >=0.4){
    bobaHeader.style.opacity =1;
    bobaText.style.opacity  = 1;

  }else{
    bobaText.style.opacity  = 0;

    bobaHeader.style.opacity =0;
  }
  scrollFunction();
}

// handle nav bar shrink
function scrollFunction() {
  if (document.body.scrollTop > 50) {
    document.getElementById("navBar").style.padding = "2.5px 10px";
    document.getElementById("logo").style.fontSize = "50px";
    if ( window.innerWidth <=1000){
    document.getElementById("navLinks").style.top = "calc(3rem + 16px)";
      document.getElementById("navBar").style.padding = "";

    }
  } else if(document.body.scrollTop < 40) {
    document.getElementById("navBar").style.padding = "10px 10px";
    document.getElementById("logo").style.fontSize = "100px";    
    if ( window.innerWidth<=1000){
    document.getElementById("navLinks").style.top = "calc(3rem + 16px)";
    }
  }
}