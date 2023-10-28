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