var teacherRadioBTN;
var schoolRadioBTN;
var label;
var droptdownLi;
var spanContieanerTeacher;

function techerFeedback() {

    if(teacherRadioBTN.value == "teacher") {
        spanContieanerTeacher = document.querySelectorAll(".teacher_feedback");
        label = spanContieanerTeacher[0].querySelector("label");
        droptdownLi = spanContieanerTeacher[1].querySelector("select");

        spanContieanerTeacher[0].style.cssText = "opacity: 1;";
        spanContieanerTeacher[1].style.cssText = "opacity: 1; visibility: initial;";

        label.style.cssText = "animation-name: teacherFeedback; animation-duration: 0.5s; animation-delay: 0s; animation-timing-function: ease-in-out; animation-iteration-count: 1; animation-fill-mode: forwards; animation-direction: reverse;";
        droptdownLi.style.cssText = "animation-name: teacherFeedback; animation-duration: 0.5s; animation-delay: 0s; animation-timing-function: ease-in-out; animation-iteration-count: 1; animation-fill-mode: forwards; animation-direction: reverse;";
    }
}

function schoolFeedback() {

    console.log(schoolRadioBTN.value);
    if (schoolRadioBTN.value == "school") {
        spanContieanerTeacher = document.querySelectorAll(".teacher_feedback");
        label = spanContieanerTeacher[0].querySelector("label");
        droptdownLi = spanContieanerTeacher[1].querySelector("select");

        spanContieanerTeacher[0].style.cssText = "opacity: 0;";
        spanContieanerTeacher[1].style.cssText = "opacity: 0; visibility: hidden;";

        label.style = "none";
        droptdownLi.style = "none";
    }
}


teacherRadioBTN = document.querySelector("#teacher");
schoolRadioBTN = document.querySelector("#school");

teacherRadioBTN.addEventListener("click", function(e) {
        techerFeedback();
}, false);
    
schoolRadioBTN.addEventListener("click", function(e) {
        schoolFeedback();
}, false);
//# sourceMappingURL=teacher-feedback.js.map