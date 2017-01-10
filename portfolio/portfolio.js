document.addEventListener("DOMContentLoaded", function(event) {
/*document.getElementsByClassName("pic2")[this].onclick = function(event) {document.getElementsByClassName("pic2").style.width = "100%";};
*/

var slideIndex = 0;
function showSlides() {
    var i;
    var slides = [document.getElementsByClassName("slides")];
	console.log(slides.length)
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none"; 
    }
    slideIndex++;
    if (slideIndex> slides.length) {slideIndex = 1} 
    slides[slideIndex-1].style.display = "block"; 
    setTimeout(showSlides, 2000);
  
}
showSlides();
/*var url = "http://titan.dcs.bbk.ac.uk/~gbirge01/infma/index.html";
document.getElementById(play).oclick.window.open(url);*/


});