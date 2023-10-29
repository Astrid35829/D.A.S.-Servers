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
    xhr.send("call=randomSDG()");
};

rightArrow.onclick = function(){
    callPHPFuntion();
};

leftArrow.onclick = function(){
    callPHPFuntion();
};

const modalLink = document.getElementsByClassName("sdg__cardLink");
const modal = document.getElementById("js--modal");
let modalHidden = true;
for(let i = 0; i < modalLink.length; i++){
    modalLink[i].onclick = function(){
        if(modalHidden === true){
            document.getElementsByClassName("header")[0].style.display = "none";
            document.getElementsByClassName("heading")[0].style.display = "none";
            document.getElementsByClassName("main")[0].style.display = "none";
            document.getElementsByClassName("footer")[0].style.display = "none";
            modal.style.display = "flex";
            modalHidden = false;
        }
    }
};

const modalExit = document.getElementById("js--modalExit");
modalExit.onclick = function(){
    if(modalHidden === false){
        document.getElementsByClassName("header")[0].style.display = "flex";
        document.getElementsByClassName("heading")[0].style.display = "flex";
        document.getElementsByClassName("main")[0].style.display = "flex";
        document.getElementsByClassName("footer")[0].style.display = "flex";
        modal.style.display = "none";
        modalHidden = true;
    }
};