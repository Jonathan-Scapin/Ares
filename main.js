let caBrut = document.getElementById("cabrut").value;
let caNet = document.getElementById("canet");
let reduceCa = 0;
let areJ = parseInt(document.getElementById("areJ").value);
let nbDayMonth = parseInt(document.getElementById("nbDayMonth").value);
let reportFA = document.getElementById("reportFA");
let mAre = document.getElementById("mAre");
let resultMinimify = document.getElementById("resultMinimify");
let btnRadio = document.getElementsByName("type");

console.log(reduceCa)
function checkedRadioBtn() {
    if (document.getElementById("achatvente").checked == true) 
    {
        reduceCa = 0.29;
    }
    if (document.getElementById("bic").checked == true)
    {
        reduceCa = 0.50;
    }if(document.getElementById("bnc").checked == true)
    {
        reduceCa = 0.66;
    }
    document.getElementById("cabrut").disabled=false;
}
function resetCheckedRadioBtn() {
    if (reduceCa != 0) {
        caBrut.value = "";
        caNet.value = "";
        areJ.value = "";
        reportFA.value = "";
        mAre.value = "";
        resultMinimify.value = "";
    } 
}

function inputValue(event) {
    caBrut = event.target;
    caNet.value = (caBrut.value * reduceCa).toFixed(2);
    document.getElementById("areJ").disabled=false;
}

function inputValueAre(event) {
    areJ = event.target;
    reportFA.value = areJ.value * nbDayMonth;
    mAre.value = caNet.value * 0.70;
    resultMinimify.value = reportFA.value - mAre.value;
    resultMinimify.classList.add("result");
}

