var myVar;
var myClassName;
var myInterval;
function slideshow(className, interval)
{
myClassName = className;
myInterval = interval;
console.log("Function executed with class name : " + className);
var allImages = document.getElementsByClassName(className);
console.log("Number of images : " + allImages.length);
for (var i=0; i<allImages.length; i++){
console.log("Image : " + i);
allImages[i].style.display = "none";
allImages[i].style.width = "50%";
allImages[i].style.marginLeft = "25%";
allImages[i].style.marginTop = "100px";
}
var j=-1;
myVar = setInterval(
function (){
j++;
if(j == 0)
{
allImages[allImages.length-1].style.display = "none";
}
if(j > 0){
allImages[j-1].style.display = "none";
}
console.log("Image : " + j);
allImages[j].style.display = "block";
if(j == allImages.length-1){
j = -1;
}
}, interval);
}
function start_slideshow(){
slideshow(myClassName, myInterval);
}
function stop_slideshow(){
clearInterval(myVar);
}