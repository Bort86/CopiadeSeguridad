/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package cat.proven.productmanagerapp;

/**
 *
 * @author tarda
 */
public class Tv extends Product{
    int inches;

    //getters y setters
    public int getInches() {
        return inches;
    }

    public void setInches(int inches) {
        this.inches = inches;
    }
    
    //constructor
    public Tv(int inches, String code, String name, double price) {
        super(code, name, price);
        this.inches=inches;
    }
    
    public Tv(String code) {
        super(code);
    }
    
   // public Tv(Tv other) {
  //      super(other);
   // }
    
    @Override
    
    
    public String toString(){
        StringBuilder sb=new StringBuilder();
        sb.append("Tv: {");
        sb.append("inches =");
        sb.append(inches);
        sb.append("}");
        sb.append(super.toString());
        return sb.toString();
    }
    
           
    
}
