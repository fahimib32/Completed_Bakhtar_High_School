var ShowmoreBTN;
var textHolder;
var feedbackHolder;

feedbackHolder = document.querySelector(".feedback-card");

function showLessFeedback(f) {

    if(f.target.tagName == "BUTTON") {

        if(f.target.className == "show-less" || f.target.className == "" ) {
            let divEditOption = document.querySelector(".comment-edit-option");

            let figcaptionDiv = f.target.parentElement.childNodes[1];
            let BTN = f.target;
            let BTNTextRemove = f.target.childNodes[0];
            let BTNtext = document.createTextNode("See Less");
            
            divEditOption.style.cssText = "align-items: center;";
            figcaptionDiv.style.cssText = "height: 31.5em;";
            BTN.removeChild(BTNTextRemove);
            BTN.appendChild(BTNtext);
            BTN.classList.toggle("show-less", false);
            BTN.classList.toggle("show-more", true);
        
        } else {
            let divEditOption = document.querySelector(".comment-edit-option");

            let figcaptionDiv = f.target.parentElement.childNodes[1];
            let BTN = f.target;
            let BTNTextRemove = f.target.childNodes[0];
            let BTNtext = document.createTextNode("See More");

            divEditOption.style.cssText = "align-items: flex-start;";

            figcaptionDiv.style.cssText = "height: 200px;";
            BTN.removeChild(BTNTextRemove);
            BTN.appendChild(BTNtext);
            BTN.classList.toggle("show-more", false);
            BTN.classList.toggle("show-less", true);
            
        }
    }
};

feedbackHolder.addEventListener("click", function(e) {showLessFeedback(e);}, false);
//# sourceMappingURL=showOrHideInformation.js.map