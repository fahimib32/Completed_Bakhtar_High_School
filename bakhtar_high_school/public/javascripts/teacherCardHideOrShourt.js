var teacherCardHolder;
var BTN;

teacherCardHolder = document.querySelector("#teacher-card");

function hideOrShow (e) {

    if(e.target.tagName == "BUTTON") {
        if(e.target.className == "BTN") {

            if(e.target.parentElement.classList[1] == "show-more" || e.target.parentElement.classList[1] == undefined ) {
                let teacherCard = e.target.parentElement.previousElementSibling;
                let teacherCardFigure = teacherCard.querySelector("figure");
                let BTNholder = e.target.parentElement;
                let editOption = document.querySelector(".edit-option");
    
                teacherCardFigure.style.cssText = "height: 55em";
                editOption.style.cssText = "align-items: center;";
                BTNholder.classList.toggle("show-more", false);
                BTNholder.classList.toggle("show-less", true);
                
            } else {
                let teacherCard = e.target.parentElement.previousElementSibling;
                let teacherCardFigure = teacherCard.querySelector("figure");
                let BTNholder = e.target.parentElement;
                let editOption = document.querySelector(".edit-option");
    
                teacherCardFigure.style.cssText = "height: 345px";
                editOption.style.cssText = "margin-top: 5em;";
                BTNholder.classList.toggle("show-less", false);
                BTNholder.classList.toggle("show-more", true);
            }
        }
    }
};

teacherCardHolder.addEventListener("click", function(f) {hideOrShow(f);}, false);
//# sourceMappingURL=teacherCardHideOrShourt.js.map