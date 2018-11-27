/*  
 @name= Practice 1
 @author= Pablo Rodriguez Fraga
 @version= 1.0
 @description= a series of tassks and functions in a same html frontpage
 @date = 17/10/2018
 
 */


/**
 * First we declare a couple of constants for the functions
 * @type Number
 */
var num_aleatorio;
var contador2 = 0;

/*  
 @name= numeroprimo()
 @author= Pablo Rodriguez Fraga
 @version= 1.0
 @description= exercice 1, confirms if a number is prime or not
 
 @date = 17/10/2018
 @params= integer
 @return = a message confirming if it's prime or not
 */

function numeroprimo() {
    var num1 = document.getElementById("num1").value;
    primo = true;

    // we confirm first if the information introduced is a number or not
    if (isNaN(num1)) {
        document.getElementById("resultado1").innerHTML = "Data introduced is not a number";
        document.getElementById("resultado1").classList.remove("text-dark");
        document.getElementById("resultado1").classList.add("text-danger");

        // then we get to confirm wether the introduced number is prime or not
    } else {
        if (num1 !== 1 || num1 !== 2) {
            for (i = 2; i < num1; i++) {
                if (num1 % i === 0) {
                    primo = false;
                }
            }
        }

        //and we return an answer acording to the confirmation
        if (primo === true) {
            document.getElementById("resultado1").innerHTML = "El numero " + num1 + " es primo";
        } else {
            document.getElementById("resultado1").innerHTML = "El numero " + num1 + " no es primo";
        }

    }

}


/*  
 @name= adivina_numero()
 @author= Pablo Rodriguez Fraga
 @version= 1.0
 @description= exercice 2, guessing number machine
 
 @date = 17/10/2018
 @params= integer
 @return = a message confirming if you guessed or not the random number
 */

function adivina_numero() {

    //first of all, we confirm if we are at the last try, if it is, we
    //inform about the program's ending
    // take note that we generate the random number when we call the function
    //in the hide and show section of it

    if (contador2 == 50) {
        document.getElementById("resultado2").innerHTML = "Has superado la cantidad de intentos, vuelve a empezar";
        document.getElementById("intento2").innerHTML = "Intento " + contador2;
    } else {

        contador2++;
        var num2 = document.getElementById("num2").value;

        //we validate if the user introduced a number
        if (isNaN(num2)) {
            document.getElementById("resultado2").innerHTML = "Data introduced is not a number";
            document.getElementById("resultado2").classList.remove("text-dark");
            document.getElementById("resultado2").classList.add("text-danger");

        } else {

            //then we check if its the right number, a smaller or a bigger one

            if (num2 > num_aleatorio) {
                document.getElementById("resultado2").innerHTML = "Demasiado grande";
                document.getElementById("intento2").innerHTML = "Intento " + contador2;
            }

            if (num2 < num_aleatorio) {
                document.getElementById("resultado2").innerHTML = "Demasiado pequeño";
                document.getElementById("intento2").innerHTML = "Intento " + contador2;
            }

            if (num2 == num_aleatorio) {
                document.getElementById("resultado2").innerHTML = "Correcto!"
                document.getElementById("intento2").innerHTML = "Intento " + contador2;
            }
        }
    }
}


/*  
 @name= f_mul_13()
 @author= Pablo Rodriguez Fraga
 @version= 1.0
 @description= exercice 3, print all numbers multiple of 13, their addition and product
 
 @date = 17/10/2018
 @params= -
 @return = a list of integers 
 */

function f_mul_13() {
    var suma = 0;
    var producto = parseFloat('1');

    for (var i = 13; i < 2000; i++) {
        if (i % 13 == 0) {
            document.getElementById("resultado3").innerHTML += i + "<br/>";
            suma += i;
            producto *= i;

        }

    }

    if (producto === Infinity) {
        producto = "Desbordamiento de datos";
    }
    document.getElementById("resultado3").innerHTML += "Suma = " + suma + " y producto = " + producto;
}

/*  
 @name= calculadora()
 @author= Pablo Rodriguez Fraga
 @version= 1.0
 @description= exercice 4, minimal calculator
 
 @date = 17/10/2018
 @params= integers and a char
 @return = result of the selected operation
 */

function calculadora() {
    var op_1 = parseInt(document.getElementById("op_1").value);
    var op_2 = parseInt(document.getElementById("op_2").value);
    var op = String(document.getElementById("op").value);
    var result = 0;
    

    // first, we validate if numbers are in right type
    if (isNaN(op_1) || isNaN(op_2)) {
        document.getElementById("resultado5").innerHTML = "Data introduced is not a number";
        document.getElementById("resultado5").classList.remove("text-dark");
        document.getElementById("resultado5").classList.add("text-danger");

    } else {
        
     

        switch (op) {
            case "+":
                result = op_1 + op_2;
                break;
            case "-":
                result = op_1 - op_2;
                break;
            case "*":
                result = op_1 * op_2;
                break;
            case "/":
                result = op_1 / op_2;
                break;
        }


        document.getElementById("resultado4").setAttribute('value', result);
    }


}


//display functions for all exercices


window.onload = function () {
    //Hide 
    document.getElementById("div1").style.display = "none";
    document.getElementById("div2").style.display = "none";
    document.getElementById("div3").style.display = "none";
    document.getElementById("div4").style.display = "none";
    //show 
    document.getElementById("cabecera").style.display = "Block";
}


function funcion1() {
    //show
    document.getElementById("div1").style.display = "Block";
    //hide
    document.getElementById("div2").style.display = "none";
    document.getElementById("div3").style.display = "none";
    document.getElementById("div4").style.display = "none";
}



function funcion2() {
    //show
    document.getElementById("div2").style.display = "Block";
    //hide
    document.getElementById("div1").style.display = "none";
    document.getElementById("div3").style.display = "none";
    document.getElementById("div4").style.display = "none";
    //generamos número aleatorio
    num_aleatorio = Math.floor(Math.random() * 500) + 1;
}



function funcion3() {
    //show
    document.getElementById("div3").style.display = "Block";
    //hide
    document.getElementById("div2").style.display = "none";
    document.getElementById("div1").style.display = "none";
    document.getElementById("div4").style.display = "none";
    //funcion
    document.getElementById("resultado3").innerHTML = "";
    f_mul_13();
}


function funcion4() {
    //show
    document.getElementById("div4").style.display = "Block";
    //hide
    document.getElementById("div2").style.display = "none";
    document.getElementById("div3").style.display = "none";
    document.getElementById("div1").style.display = "none";
}

