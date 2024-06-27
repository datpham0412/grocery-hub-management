document.forms['regform'].onsubmit = function (event) {
    var abc = "\n";
    var errMsg = "";
    var result = true;

    var pro = document.getElementById("ProductName").value;
    if (pro == "") {
        errMsg = errMsg + "You must enter product name.\n";
        result = false;
    }
    else if (!pro.match(/^[a-zA-Z0-9 ]+$/)){
        errMsg = errMsg + "Please don't enter special characters for product name.\n";
        result = false;
    }
    if (pro.length > 30){
        errMsg = errMsg + "Product name too long.\n";
        result = false;
    }

    var cat = document.getElementById("Category").value;
    if (cat ==""){
        errMsg = errMsg + "You must enter category.\n";
        result = false;
    }
    if (cat.length > 15){
        errMsg = errMsg + "Category too long.\n";
        result = false;
    }

    var pri = document.getElementById("Price").value;
    if (pri ==""){
        errMsg = errMsg + "You must enter price, format [xxx.xx]\n";
        result = false;
    }
    if (!pri.match(/[1-9]+[.][0-9][0-9]$/)){
        errMsg = errMsg + "Please enter numbers for price, format [xxx.xx]\n";
        result = false;
    }

    var amo = document.getElementById("Stock").value;
    if (amo ==""){
        errMsg = errMsg + "You must enter stocks.\n";
        result = false;
    }
    else if (!amo.match(/^[0-9]+$/)){
        errMsg = errMsg + "Please enter numbers for stock please.\n";
        result = false;
    }
    /*if (result == false){
        errMsg = errMsg + "Please enter correct format then will check for data exist or not.\n";
    }*/

    if (errMsg != "") {
        var errormessage = document.getElementById("errormessage");
        errormessage.innerHTML = abc.replace(/\n/g, '<br />') + errMsg.replace(/\n/g, '<br />');
    }
    return result;
}
