const leftArrow = document.getElementById("js--arrowLeft");
const rightArrow = document.getElementById("js--arrowRight");

function callPHPFuntion(){
    let xhr = new XMLHttpRequest();
    xhr.open("GET", "../../source/view/card.php/", true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    
    xhr.onreadystatechange = function(){
        if(xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200){
            let response = xhr.responseText;
            let divWithContent = response.match(/<div[^>]*id="js--shuffle"[^>]*>[\s\S]*?<\/div>/);
            if (divWithContent) {
                response = divWithContent[0];
            } else {
                response = "not found uzjmknj";
            }
            document.getElementById("js--shuffle").style.padding = "0";
            document.getElementById("js--shuffle").innerHTML = response;
        }
    }
    xhr.send("call=displaySDG()");
};

rightArrow.onclick = function(){
    callPHPFuntion();
};

leftArrow.onclick = function(){
    callPHPFuntion();
};

//darkmode

const darkmode = document.getElementById("js--darkmode");
let lightmode = true;
darkmode.onclick = function(){
    if(lightmode === true){
        document.getElementsByTagName("body")[0].classList.add("DMbody");
        document.getElementsByClassName("sdg__title")[0].classList.add("DMsdg__title");
        document.getElementsByClassName("sdg__cardH2")[0].classList.add("DMsdg__cardH2");
        document.getElementsByClassName("sdg__card--intro")[0].classList.add("DMsdg__card--intro");
        document.getElementsByClassName("sdg__cardLink")[0].classList.add("DMsdg__cardLink");
        document.getElementsByClassName("modalDiv__articleTitle")[0].classList.add("DMmodalDiv__articleTitle");
        document.getElementsByClassName("modalDiv__articleIntro")[0].classList.add("DMmodalDiv__articleIntro");
        document.getElementsByClassName("modalDiv__articleInformation")[0].classList.add("DMmodalDiv__articleInformation");
        darkmode.classList.remove("fa-moon");
        darkmode.classList.add("fa-sun");
        lightmode = false;
    }
    else{
        document.getElementsByTagName("body")[0].classList.remove("DMbody");
        document.getElementsByClassName("sdg__title")[0].classList.remove("DMsdg__title");
        document.getElementsByClassName("sdg__cardH2")[0].classList.remove("DMsdg__cardH2");
        document.getElementsByClassName("sdg__card--intro")[0].classList.remove("DMsdg__card--intro");
        document.getElementsByClassName("sdg__cardLink")[0].classList.remove("DMsdg__cardLink");
        document.getElementsByClassName("modalDiv__articleTitle")[0].classList.remove("DMmodalDiv__articleTitle");
        document.getElementsByClassName("modalDiv__articleIntro")[0].classList.remove("DMmodalDiv__articleIntro");
        document.getElementsByClassName("modalDiv__articleInformation")[0].classList.remove("DMmodalDiv__articleInformation");
        darkmode.classList.remove("fa-sun");
        darkmode.classList.add("fa-moon");
        lightmode = true;
    }
};

document.addEventListener("DOMContentLoaded", function(){
const itemLayout = document.getElementsByClassName("OZsdgItem");
for(let i = 0; i < itemLayout.length; i++){
        let layoutOne = "";
        let layoutTwo = "layoutTwo";
        let layoutThree = "layoutThree";
        
        var layouts = [layoutOne, layoutTwo, layoutThree];
        let layoutvalue = layouts[Math.floor(Math.random() * layouts.length)];
        console.log(layoutvalue);
        itemLayout[i].classList.add(layoutvalue);
    }});