
// Page call 
// <script src="assets/js/frontend.js"></script>

// show Multiple Tabs-----------------------------------------------------------------------------------
function openTabSection(evt, selectedTab) 
{
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(selectedTab).style.display = "block";
    evt.currentTarget.className += " active";

    $(window).scrollTop(80);// 160
}
// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();

function showActivity(isActivity){
    if (isActivity) {
        $(".activities").toggleClass("d-none");
        $(".dd-selected-right").toggleClass("d-none");
        $(".dd-selected-down").toggleClass("d-none");
    } else {
        if($('.activities').hasClass('d-none')){
            // do nothing
        } else {
            $(".activities").toggleClass("d-none");
            $(".dd-selected-right").toggleClass("d-none");
            $(".dd-selected-down").toggleClass("d-none");
        }
    }
}

// show more list)-----------------------------------------------------------------------------
function showMore() {
    $(".list_items").toggleClass("d-none");
}
function showMoreSalient() {
    $(".list_items_salient").toggleClass("d-none");
}


// Show/Hide Text (read More)-----------------------------------------------------------------------------
// Create Variables
var allOSB = [];
var mxh = '';

window.onload = function() {
// Set Variables
allOSB = document.getElementsByClassName("only-so-big");

if (allOSB.length > 0) {
    mxh = window.getComputedStyle(allOSB[0]).getPropertyValue('max-height');
    mxh = parseInt(mxh.replace('px', ''));
    
    // Add read-more button to each OSB section
    for (var i = 0; i < allOSB.length; i++) {
        var el = document.createElement("button");
        el.innerHTML = "Read More";
        el.setAttribute("type", "button");
        el.setAttribute("class", "read-more hid");
        
        insertAfter(allOSB[i], el);
    }
}
// Add click function to buttons
var readMoreButtons = document.getElementsByClassName("read-more");
for (var i = 0; i < readMoreButtons.length; i++) {
        readMoreButtons[i].addEventListener("click", function() { 
        revealThis(this);
    }, false);
}
// Update buttons so only the needed ones show
updateReadMore();
}
// Update on resize
window.onresize = function() {
updateReadMore();
}
// show only the necessary read-more buttons
function updateReadMore() {
    if (allOSB.length > 0) {
        for (var i = 0; i < allOSB.length; i++) {
        if (allOSB[i].scrollHeight > mxh) {
            if (allOSB[i].hasAttribute("style")) {
                updateHeight(allOSB[i]);
            }
            allOSB[i].nextElementSibling.className = "read-more";
        } else {
            allOSB[i].nextElementSibling.className = "read-more hid";
        }
        }
    }
}
function revealThis(current) {
    var el = current.previousElementSibling;
    if (el.hasAttribute("style")) {
        current.innerHTML = "Read More";
        el.removeAttribute("style");
    } else {
        updateHeight(el);
        current.innerHTML = "Show Less";
    }
}
function updateHeight(el) {
    el.style.maxHeight = el.scrollHeight + "px";
}
function insertAfter(referenceNode, newNode) {
    referenceNode.parentNode.insertBefore(newNode, referenceNode.nextSibling);
}
// -----------------------------------------------------------------------------