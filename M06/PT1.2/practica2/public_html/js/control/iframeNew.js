/*  
 @name= introduceCode()
 @author= Pablo Rodriguez Fraga
 @version= 1.0
 @description= function that will print on the div as many name and code inputs
 as they were informed in the iframe
 
 @date = 11/11/2018
 @params= -
 @return = -
 */


function introduceCode() {
    var code_type = document.getElementById("productType").value;
    var number_prod = document.getElementById("numberProducts").value;
    var respuesta_div = "";

    if (isNaN(number_prod)  || number_prod == 0) {
        document.getElementById("errors").innerHTML += "You must enter a number <br>";
        document.getElementById("errors").classList.remove("text-dark");
        document.getElementById("errors").classList.add("text-danger");

    } else {

        showDiv();
        window.parent.document.getElementById("type_prod").innerHTML = code_type;

        for (var i = 0; i < number_prod; i++) {
            respuesta_div +=
                    "<tr>\n\
                <td><input type='text' class='nomProd' id='nameProduct'></td>\n\
                <td><input type='text' class='descProd' id='desProduct'></td>\n\
                <td align='center'><input class ='checkProd' type='checkbox' id='idbox'> </td>\n\
                </tr>";

        }

        window.parent.document.getElementById("tableDiv").innerHTML += respuesta_div;
    }
}

/*  
 @name= showDiv()
 @author= Pablo Rodriguez Fraga
 @version= 1.0
 @description= function that will hide the iframe and show the div once everything
was validated and it starts printing on the div
 
 @date = 11/11/2018
 @params= -
 @return = -
 */
function showDiv() {
    window.parent.document.getElementById("div1").style.display = "Block";
    window.parent.document.getElementById("frame1").style.display = "none";
}