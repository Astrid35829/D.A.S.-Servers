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

const modal = document.getElementById("js--modal");
const modalExit = document.getElementById("js--modalExit");

let modalHidden = true;

document.body.onclick = function(event){
    if (event.target.classList.contains('sdg__cardLink')){
        if (modalHidden === true) {
            document.getElementsByClassName("nav")[0].style.display = "none";
            document.getElementsByClassName("header")[0].style.display = "none";
            document.getElementsByClassName("main")[0].style.display = "none";
            document.getElementsByClassName("footer")[0].style.display = "none";
            const sdgCard = event.target.closest('.sdg__card');    
            if(sdgCard){
                const sdgId = sdgCard.getAttribute("data-sdg-id");
                const sdgTitle = sdgCard.querySelector(".sdg__cardH2").textContent;
                const sdgIntro = sdgCard.querySelector(".sdg__card--intro").textContent;
                const sdgPhoto = sdgCard.querySelector(".sdg__cardImg");
                const sdgPhotoURL = sdgPhoto.getAttribute("src");
                const modalImage = document.getElementById('js--modalImage');
                modalImage.setAttribute("src", sdgPhotoURL);
                const modalTitle = document.getElementById("js--modalTitle");
                modalTitle.innerHTML = "";
                const xhrModal = new XMLHttpRequest();
                xhrModal.open("GET", "../../source/view/card.php/?sdg_id=" + sdgId, true);
                xhrModal.onreadystatechange = function(){
                    if(xhrModal.readyState === XMLHttpRequest.DONE && xhrModal.status === 200){
                        let modalResponse = xhrModal.responseText;
                        let modalDivContent = modalResponse.match(/<h2[^>]*id="js--modalTitle"[^>]*>[\s\S]*?<\/h2>/);
                        if(modalDivContent){
                            modalResponse = modalDivContent[0];
                        }
                        else{
                            console.log("not found uzjmknj");
                        }
                        modal.style.display = "flex";
                        modalTitle.innerHTML = sdgTitle;
                        console.log(modalResponse);
                        console.log(modalTitle);
                        document.getElementsByClassName("modalDiv__articleIntro")[0].innerHTML = sdgIntro;
                        modalHidden = false;
                    }
                };
            xhrModal.send();
        };
}};

modalExit.onclick = function(){
    if(modalHidden === false){
        document.getElementsByClassName("nav")[0].style.display = "flex";
        document.getElementsByClassName("header")[0].style.display = "flex";
        document.getElementsByClassName("main")[0].style.display = "flex";
        document.getElementsByClassName("footer")[0].style.display = "flex";
        modal.style.display = "none";
        modalHidden = true;
    }
}};