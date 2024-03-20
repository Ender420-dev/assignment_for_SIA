var text = ["HTML...", "Text...", "Profile...", "Done", "Done"];
var counter = 0;
var elem = document.getElementById("loading-content");
var inst = setInterval(change, 2000);



function change() {
    elem.innerHTML = text[counter];
    counter++;

}