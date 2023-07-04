
// Page link - <script src="assets/js/custom_frontend.js"></script>


// show expanded image
var expandImg = document.getElementById("expandedImg");
var imgText = document.getElementById("imgtext");

function isImageExpanded(imgs) 
{ 
    if (expandImg.src == imgs.src) {
        hideExpandedImage();
        imgs.classList.remove("closeParent");
    } else {
        // if($('.gallery__img').hasClass('closeParent')){
        //     imgs.classList.remove("closeParent");
        // }
        imgs.classList.add("closeParent");

        expandImg.src = imgs.src;
        imgText.innerHTML = imgs.alt;
        $("#expandContainer").removeClass("d-none");
        expandImg.parentElement.style.display = "block";
        window.location.href = "#expandedImg";
    }
}
function hideExpandedImage() {
    $("#expandContainer").addClass("d-none");
    expandImg.parentElement.style.display = "none";
    expandImg.src = '';
}
function closeExpandedImage() {
    expandImg.src = '';
}

// show Multiple Tabs-----------------------------------------------------------------------------------
function openTabSection(evt, selectedTab, isForm=false, isValid=0) 
{
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    tablinks = document.getElementsByClassName("tablinks");

    if (isForm) {
        if (isValid == 1) {
            if (validateEmptyFields() && isFileUploaded() && phoneNumber()) {
                work_type = $('.work_type:checked').val();
                data = {
                    name:name,
                    email:email,
                    address:address,
                    city:city,
                    state:state,
                    country:country,
                    work_name:work_name,
                    area_of_work:area_of_work,
                    designation:designation,
                    profile_link:profile_link,
                    file:encoded_file,
                    file_name:file_name,
                    permanent_address:permanent_address,
                    phone_no:phone_no,
                    type_of_eng:type_of_eng,
                    work_type:work_type,
                }
                // console.log(data);
                for (i = 0; i < tabcontent.length; i++) {
                    tabcontent[i].style.display = "none";
                }
                for (i = 0; i < tablinks.length; i++) {
                    tablinks[i].className = tablinks[i].className.replace(" active", "");
                }
                document.getElementById(selectedTab).style.display = "block";
                // evt.currentTarget.className += " active";
                $(".tablinks."+selectedTab).addClass("active");
            }
        } else {
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(selectedTab).style.display = "block";
            evt.currentTarget.className += " active";
        }
        window.location="#form_start";

    } else {
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(selectedTab).style.display = "block";
        evt.currentTarget.className += " active";
    
        if (expandImg.src) {
            hideExpandedImage();
        }
    
        $(window).scrollTop(80);// 160
    }
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
    showSubActivity('close');
}

function showSubActivity(isActivity){
    if (isActivity=='close') {
        var numItems = $('.activities').length
        for (let index = 1; index <= numItems; index++) {
            if($(".sub_activity"+index).hasClass('d-none')){
                // do nothing
            } else {
                $(".sub_activity"+index).toggleClass("d-none");
                $(".dd-selected-right2"+index).toggleClass("d-none");
                $(".dd-selected-down2"+index).toggleClass("d-none");
            }
        }
    } else if (isActivity) {
        $(".sub_activity"+isActivity).toggleClass("d-none");
        $(".dd-selected-right2"+isActivity).toggleClass("d-none");
        $(".dd-selected-down2"+isActivity).toggleClass("d-none");
    } else {
        if($(".sub_activity"+isActivity).hasClass("d-none")){
            // do nothing
        } else {
            $(".sub_activity"+isActivity).toggleClass("d-none");
            $(".dd-selected-right2"+isActivity).toggleClass("d-none");
            $(".dd-selected-down2"+isActivity).toggleClass("d-none");
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