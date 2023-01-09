var ShowmoreBTN;
var textHolder;
var feedbackHolder;

feedbackHolder = document.querySelector(".feedback-card");

function showLessFeedback(f) {

    if(f.target.tagName == "BUTTON") {

        if(f.target.className == "show-less" || f.target.className == "" ) {

            let figcaptionDiv = f.target.parentElement.childNodes[1];
            let BTN = f.target;
            let BTNTextRemove = f.target.childNodes[0];
            let BTNtext = document.createTextNode("See Less");
            
            figcaptionDiv.style.cssText = "height: 31.5em;";
            BTN.removeChild(BTNTextRemove);
            BTN.appendChild(BTNtext);
            BTN.classList.toggle("show-less", false);
            BTN.classList.toggle("show-more", true);
        
        } else {

            let figcaptionDiv = f.target.parentElement.childNodes[1];
            let BTN = f.target;
            let BTNTextRemove = f.target.childNodes[0];
            let BTNtext = document.createTextNode("See More");


            figcaptionDiv.style.cssText = "height: 200px;";
            BTN.removeChild(BTNTextRemove);
            BTN.appendChild(BTNtext);
            BTN.classList.toggle("show-more", false);
            BTN.classList.toggle("show-less", true);
            
        }
    }
};

feedbackHolder.addEventListener("click", function(e) {showLessFeedback(e);}, false);
//# sourceMappingURL=showOrHideComment.js.map