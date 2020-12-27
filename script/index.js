window.onscroll = function() { scrollFunction() };

function scrollFunction() {
    if (document.body.scrollTop > 350 || document.documentElement.scrollTop > 350) {
        document.querySelector("#navbar").style.background = "#44bbaa";
        document.querySelectorAll(".anchor").style.color = "black";
    } else {
        document.querySelector("#navbar").style.background = "rgb(0, 0, 0, 0.3)";
        document.querySelectorAll(".anchor").style.color = "white";
    }
}
var scroll = new SmoothScroll('a[href*="#"]', {
    speed: 1000,
    speedAsDuration: true
});