var w = window.innerWidth;
var h = window.innerHeight;

//33vw + 8vh
var x = w - (33/100)*w 	- (8/100)*h;
var myWidth = x + "px";
document.getElementById("typeMessagesHere").style.width = myWidth;


//31vw + x + 4vh
var y = (w - (31/100)*w - x - (4/100)*h)/2;
var myMargin = y + "px";
document.getElementById("sendButton").style.marginLeft = myMargin;

//31vw + 12vh
var z = w - (32/100)*w - (12/100)*h;
var myCountryNameWidth = z + "px";
document.getElementById("countryName").style.width = myCountryNameWidth;

function openNav() {
    document.getElementById("mySidenav").style.width = "30%";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}