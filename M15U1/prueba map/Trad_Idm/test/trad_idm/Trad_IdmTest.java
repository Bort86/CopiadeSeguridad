/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package trad_idm;


import org.junit.Test;
import static org.junit.Assert.*;

/**
 *
 * @author tarda
 */
public class Trad_IdmTest {
    
    public Trad_IdmTest() {
    }
    
        /**
     * Test of main method, of class Trad_Idm.
     */
    @Test
    public void añadirPalabraIdiTest() {
        Traductor diccionario = new Traductor();
        diccionario.añadirPalabra("inglés", "hola", "hello");
        assertTrue(diccionario.traducirPalabra("inglés","hola").equals("hello"));
        
    }
    
}
