// modal sdg info
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

//modal
const modal = document.getElementById("js--modal");
const modalExit = document.getElementById("js--modalExit");
let modalDiv = document.getElementById("js--modalDiv");

let modalHidden = true;

//modal randomizer
let modalImage = document.getElementById('js--modalImage');

document.body.onclick = function(event){
    if (event.target.classList.contains('sdg__cardLink')){
        if (modalHidden === true){
            document.getElementsByClassName("nav")[0].style.display = "none";
            document.getElementsByClassName("header")[0].style.display = "none";
            document.getElementsByClassName("main")[0].style.display = "none";
            document.getElementsByClassName("footer")[0].style.display = "none";
            const sdgCard = event.target.closest('.sdg__card');
            let layout1 = ""
            let layout2 = " modalDiv2";
            let layout3 = " modalDiv3";
            
            var values = [layout1, layout2, layout3];

            let valueToUse = values[Math.floor(Math.random() * values.length)];
            console.log(valueToUse);
            let modalFigure = document.getElementById("js--modalDiv__figure");
            let modalArticle = document.getElementById("js--modalArticle");
            if(valueToUse === layout1 || layout2){
                modalDiv.classList = "modalDiv" + valueToUse;
            }
            if(valueToUse === layout3){
                modalDiv.classList = "modalDiv" + valueToUse;
                modalFigure.classList = "modalDiv__figure " + "modal__figure2";
                modalImage.classList = "modalDiv__figureImg " + "modalDiv_figureImg";
                modalArticle.classList = "modalDiv__article " + "modal__article2";
            }
            
            if(sdgCard){
                const sdgId = sdgCard.getAttribute("data-sdg-id");
                const sdgTitle = sdgCard.querySelector(".sdg__cardH2").textContent;
                const sdgIntro = sdgCard.querySelector(".sdg__card--intro").textContent;
                const sdgPhoto = sdgCard.querySelector(".sdg__card--photo");
                const sdgPhotoURL = sdgPhoto.getAttribute("src");
                const sdgDescription = sdgCard.querySelector(".sdg__cardDescription").textContent;
                const sdgURL = sdgCard.querySelector(".sdg__cardURL").textContent;
                modalImage.setAttribute("src", sdgPhotoURL);
                const modalTitle = document.getElementById("js--modalTitle");
                document.getElementById("js--modalURL").setAttribute("href", sdgURL);
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
                        
                        //console.log(modalResponse);
                        //console.log(modalTitle);
                        document.getElementsByClassName("modalDiv__articleIntro")[0].innerHTML = sdgIntro;
                        document.getElementsByClassName("modalDiv__articleInformation")[0].innerHTML = sdgDescription;
                        modalHidden = false;
                    }
                }
            xhrModal.send();
            modalDiv.classlist = "modal";
            modalArticle.classList = "modalDiv__article";
        }
    }
    document.getElementById("js--modal").style.display = "";
};

modalExit.onclick = function(){
    if(modalHidden === false){
        document.getElementsByClassName("nav")[0].style.display = "flex";
        document.getElementsByClassName("header")[0].style.display = "flex";
        document.getElementsByClassName("main")[0].style.display = "flex";
        document.getElementsByClassName("footer")[0].style.display = "flex";
        modal.style.display = "none";
        modal.classList = "modal";
        modalHidden = true;
    }
}};

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