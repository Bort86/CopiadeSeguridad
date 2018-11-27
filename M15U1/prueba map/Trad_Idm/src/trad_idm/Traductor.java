/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package trad_idm;

import java.util.HashMap;

/**
 *
 * @author tarda
 */
class Traductor {
    
    private HashMap<String,HashMap<String,String>> diccionario = new HashMap<String,HashMap<String,String>>();

    void añadirPalabra(String idioma, String hola, String hello) {
       this.diccionario.put(idioma, new HashMap<String,String>());
       this.diccionario.get(idioma).put(hola, hello);       
    }

    String traducirPalabra(String idioma, String hola) {
        return this.diccionario.get(idioma).get(hola);
    }
    
}

/**
 * Tema tests: en fase zona verde, añadimos tests y a medida que los añadimos, 
 * tenemos que ir cambiando el código para que se ejecute y salga verde
 */