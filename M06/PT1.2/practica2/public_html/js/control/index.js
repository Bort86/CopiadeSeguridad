/*  
 @name= UF 1 Sintaxis del llenguatge. Objectes predefinits del llenguatge. - Pt1.2
 @author= Pablo Rodriguez Fraga
 @version= 1.0
 @description= functions that use iframes and popups to input, validate and output data
 @date = 11/11/2018
 @params - 
 @return - 
 */

/*
 * we first declare a couple of constats we'll use, both regular expressions to do validations
 * first one is for DNA code, second one for protein code
 */

var adn_code = new RegExp("[^ACGT]", "i");
var prot_code = new RegExp("[^FLSYCWPHQRIMTNKVADEG]", "i");

/*  
 @name= popWind()
 @author= Pablo Rodriguez Fraga
 @version= 1.0
 @description= function that validates in the div if the name of the product
is empty and if the introduced code (dna or protein) is valid, then pops a new window
 @date = 11/11/2018
 @params - 
 @return - 
 */
function popWind() {
    if (validate_name() && validate_code()) {
        var decision = confirm("Do you really want to introduce these properties?");

        if (decision) {
            window.open("./popUpWindows/popUpWindow.html",
                    "_blank", "width=700px,height=500px");
        }
    }
}

/*  
 @name= closeWin()
 @author= Pablo Rodriguez Fraga
 @version= 1.0
 @description= function button for closing a window
 @date = 11/11/2018
 @params - 
 @return - 
 */
function closeWin() {
    close();
}

/*  
 @name= printWin()
 @author= Pablo Rodriguez Fraga
 @version= 1.0
 @description= function button for printing a window
 @date = 11/11/2018
 @params - 
 @return - 
 */
function printWin() {
    print();
}

/*  
 @name= loadData()
 @author= Pablo Rodriguez Fraga
 @version= 1.0
 @description= functions that will load the div data into the popup table
 @date = 11/11/2018
 @params - 
 @return - 
 */
function loadData() {
    
    //we initialize the answer empty
    var respuesta = "";

    //then, we save the arrays with the products name, its description and the checked box
    
    var array_nombre = window.opener.document.getElementsByClassName("nomProd");
    var array_desc = window.opener.document.getElementsByClassName("descProd");
    var array_checked = window.opener.document.getElementsByClassName("checkProd");

    //here, we recover the type of product (dna or protein) in the iframe, so we can print
    //it in the pop up tittle
    
    var type_prod = window.opener.frames[0].document.getElementById("productType").value;
    document.getElementById("prod_type").innerHTML += type_prod;
    
    //here we create and pass the date to the pop up
    // i know the exercise demanded a particular date format
    // but i really didn't have much time to do it after making all the validations
    // i'm really sorry
    
    var d = new Date();
    document.getElementById("date_form").innerHTML += d;
    
    //this is the for that will iterate all the arrays with the answers and print
    //them on the popup. For recovering the checkbox, we first initialize a new
    //variable inside the array, to overwrite it everytime we browse it
    for (var i = 0; i < array_nombre.length; i++) {
        var if_check = "";
        if (array_checked[i].checked) {
            if_check = "YES";
        } else {
            if_check = "NO";
        }
        respuesta += "<tr>\n\
                          <td>" + array_nombre[i].value + "</td>\n\
                          <td>" + array_desc[i].value + "</td>\n\
                          <td>" + if_check + "</td>\n\
                    </tr>";
    }
    document.getElementById("resultado_total").innerHTML += respuesta;
    
    //here, we pass the amount of products to the end of the popup table
    document.getElementById("total_products").innerHTML += array_nombre.length;
}

/*  
 @name= window.onload = function ()
 @author= Pablo Rodriguez Fraga
 @version= 1.0
 @description= general window loader for the index.html, it will always show the iframe
 and hide the div
 @date = 11/11/2018
 @params - 
 @return - 
 */
window.onload = function () {
    document.getElementById("frame1").style.display = "Block";
    document.getElementById("div1").style.display = "none";
}

/*  
 @name= validate_name() 
 @author= Pablo Rodriguez Fraga
 @version= 1.0
 @description= functions that confirms if a product name is empty
 @date = 11/11/2018
 @params - 
 @return true if it's not empty, false if it is 
 */
function validate_name() {
    var array_nombre = document.getElementsByClassName("nomProd");

    for (var i = 0; i < array_nombre.length; i++) {
        if (array_nombre[i].value == "") {
            document.getElementById("div_errors").innerHTML += "One of the names is empty <br>";
            document.getElementById("div_errors").classList.remove("text-dark");
            document.getElementById("div_errors").classList.add("text-danger");
            return false;
        }
    }
    return true;
}

/*  
 @name= validate_code() 
 @author= Pablo Rodriguez Fraga
 @version= 1.0
 @description= functions that will validate if the code is dna based or protein base
 @date = 11/11/2018
 @params - 
 @return false if the code has a wrong base, true if it's ok 
 */
function validate_code() {
    var type_prod = window.frames[0].document.getElementById("productType").value;
    var array_desc = document.getElementsByClassName("descProd");


    switch (type_prod) {
        case 'DNA code':
            for (var i = 0; i < array_desc.length; i++) {
                if (adn_code.test(array_desc[i].value) || array_desc[i].value == "") {
                    document.getElementById("div_errors").innerHTML += "One of your codes has wrong nitrogen bases <br>";
                    document.getElementById("div_errors").classList.remove("text-dark");
                    document.getElementById("div_errors").classList.add("text-danger");
                    return false;
                }
            }
            return true;
            break;

        case "Protein code":
            for (var i = 0; i < array_desc.length; i++) {
                if (prot_code.test(array_desc[i].value) || array_desc[i].value == "") {
                    document.getElementById("div_errors").innerHTML += "One of your codes contains wrong proteins<br>";
                    document.getElementById("div_errors").classList.remove("text-dark");
                    document.getElementById("div_errors").classList.add("text-danger");
                    return false;
                }
            }
            return true;
            break;
    }
}