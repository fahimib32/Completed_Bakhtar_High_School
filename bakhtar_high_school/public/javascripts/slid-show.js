var widthScreen = window.innerWidth;
var sectionTag;
var divTag;
var figureTag;
var labelTag;
var radioBTN;
var btnHolders;

function changePicture(elementName, amountMargin) {
     elementName[0].style.cssText = "margin-left: -" + amountMargin + "px";
}

function checksSelectedLabel(elementName, indexKy) {
    elementName[indexKy].style.cssText = "background-color: green";
}

function removeSelectedLabel(elementName, indexKy) {
    elementName[indexKy].style.cssText = "background-color: none";
}

function chabeValue() {
    test = true;
}

function autmaticSlidShow () {
    figureTag = document.querySelectorAll("figure");
    labelTag  = document.querySelectorAll("label");

    let number = 0;
    for (i = 1; i <= 13; i++) {

        number++;
        switch(number) {
            case 1:
                var marginLeft = widthScreen;
                handler = setTimeout(changePicture, 6000, figureTag, marginLeft);
                handler = setTimeout(checksSelectedLabel, 50, labelTag, 0);
                break;
    
            case 2:
                var marginLeft = widthScreen * 2;
                handler = setTimeout(changePicture, 12000, figureTag, marginLeft);
     //         setTimeout(removeSelectedLabel, 5000, labelTag, 0);
                setTimeout(fineTrackingAndclean, 5000);
                handler = setTimeout(checksSelectedLabel, 6000, labelTag, 1);
                break;
    
            case 3:
                var marginLeft = widthScreen * 3;
                handler = setTimeout(changePicture, 18000, figureTag, marginLeft);
     //             setTimeout(removeSelectedLabel, 11000, labelTag, 1);
                setTimeout(fineTrackingAndclean, 11000);
                handler = setTimeout(checksSelectedLabel, 12000, labelTag, 2);
                break;
    
            case 4:
                var marginLeft = widthScreen * 4;
                handler = setTimeout(changePicture, 24000, figureTag, marginLeft);
     //             setTimeout(removeSelectedLabel, 17000, labelTag, 2);
                setTimeout(fineTrackingAndclean, 17000);
                handler = setTimeout(checksSelectedLabel, 18000, labelTag, 3);
                break;
    
            case 5:
                var marginLeft = widthScreen * 5;
                handler = setTimeout(changePicture, 30000, figureTag, marginLeft);
     //             setTimeout(removeSelectedLabel, 23000, labelTag, 3);
                setTimeout(fineTrackingAndclean, 23000);
                handler = setTimeout(checksSelectedLabel, 24000, labelTag, 4);
                break;
    
            case 6:
     //             setTimeout(removeSelectedLabel, 29000, labelTag, 4);
                setTimeout(fineTrackingAndclean, 29000);
                handler = setTimeout(checksSelectedLabel, 30000, labelTag, 5);
                break;
                   
            case 7:
                var marginLeft = widthScreen * 4;
                handler = setTimeout(changePicture, 42000, figureTag, marginLeft);
     //             setTimeout(removeSelectedLabel, 41000, labelTag, 5);
                setTimeout(fineTrackingAndclean, 41000);
                handler = setTimeout(checksSelectedLabel, 42000, labelTag, 4);
                break;
    
            case 8:
                var marginLeft = widthScreen * 3;
                handler = setTimeout(changePicture, 48000, figureTag, marginLeft);
     //             setTimeout(removeSelectedLabel, 47000, labelTag, 4);
                setTimeout(fineTrackingAndclean, 47000);
                handler = setTimeout(checksSelectedLabel, 48000, labelTag, 3);
                break;
    
            case 9:
                var marginLeft = widthScreen * 2;
                handler = setTimeout(changePicture, 54000, figureTag, marginLeft);
     //             setTimeout(removeSelectedLabel, 53000, labelTag, 3);
                setTimeout(fineTrackingAndclean, 53000);
                handler = setTimeout(checksSelectedLabel, 54000, labelTag, 2);
                break;
    
            case 10:
                var marginLeft = widthScreen * 1;
                handler = setTimeout(changePicture, 60000, figureTag, marginLeft);
     //             setTimeout(removeSelectedLabel, 59000, labelTag, 2);
                setTimeout(fineTrackingAndclean, 59000);
                handler = setTimeout(checksSelectedLabel, 60000, labelTag, 1);
                break;
    
            case 11:
                var marginLeft = 0;
                handler = setTimeout(changePicture, 66000, figureTag, marginLeft);
     //             setTimeout(removeSelectedLabel, 65000, labelTag, 1);
                setTimeout(fineTrackingAndclean, 65000);
                handler = setTimeout(checksSelectedLabel, 66000, labelTag, 0);
                break;
    
                default:
        }
    }
}

function checking () {
    labelTag = document.querySelectorAll("label");

    for (i = 0; i <= 5; i++) {
       if(labelTag[i].style.cssText == "background-color: blue;" ) {
            return false;  
        }
    }
}

function fineTrackingAndclean() {
    labelTag = document.querySelectorAll("label");
    for (i = 0; i <= 5; i++) {
        if(labelTag[i].style.cssText == ("background-color: blue;") || ("background-color: green;")) {
             labelTag[i].style.cssText = "background-color: none;"; 
         }
     }
}

function changeSlid(e) {
    if(e.target.tagName == "LABEL") {
        e.target.style.cssText = "background-color: blue;";
    }
}

window.onload = function () {
    figureTag   = document.querySelectorAll("figure");
    btnHolders  = document.querySelector("#btn-holders")
    labelTag    = document.querySelector("label");

  var eventHandler =   btnHolders.addEventListener("click", function (p) {

        if(p.target.tagName == "LABEL") {
            let amountLeft = p.target.className.charAt(5);
            amountLeft = Number(amountLeft) - 1;
            
            fineTrackingAndclean();

            if(checking() != false) {
                if(p.target.className == "btn-01") {
                    changeSlid(p);
                    changePicture(figureTag, 0);
                } else {
                    changeSlid(p);
                    changePicture(figureTag, widthScreen * amountLeft);
                }
    
            } else {

                if(p.target.className == "btn-01") {
                    fineTrackingAndclean();
                    changeSlid(p);
                    changePicture(figureTag, 0);
                } else {
                    fineTrackingAndclean();
                    changeSlid(p);
                    changePicture(figureTag, widthScreen * amountLeft);
                }
            }
        }

        return false;

     }, false);

     autmaticSlidShow();
};
//# sourceMappingURL=slid-show.js.map