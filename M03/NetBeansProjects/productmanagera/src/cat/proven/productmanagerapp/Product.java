/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package cat.proven.productmanagerapp;

import java.util.Objects;

/**
 *
 * @author tarda
 */
public class Product {

    //atributos
    private String code;
    private String name;
    private double price;

    // constructores
    //vacio
    public Product() {

    }

    //code
    public Product(String code) {
        this.code = code;
    }

    //todo
    public Product(String code, String name, double price) {
        this.code = code;
        this.name = name;
        this.price = price;
    }

    //metodo para copiar un producto
    public Product copia(Product original) {
        Product copia = new Product();
        copia = original;
        return copia;
    }

    //getters y setters
    public String getCode() {
        return code;
    }

    public void setCode(String code) {
        this.code = code;
    }

    public String getName() {
        return name;
    }

    public void setName(String name) {
        this.name = name;
    }

    public double getPrice() {
        return price;
    }

    public void setPrice(double price) {
        this.price = price;
    }

    @Override
    public int hashCode() {
        int hash=7;
        hash=61*hash+Objects.hashCode(this.code);
        return hash;
    }
    
    /**
     * Two products are considered equals if their code is the same
     * @param obj
     * @return true if "this" is equals to 'obj', false otherwise
     */
    @Override
    public boolean equals(Object obj){          // Object es una clase padre de Java
        boolean b=false;
        if(obj==null)b=false;
        else{
            if(obj==this) b=true;
            else{
                if(obj instanceof Product) {
                    Product other= (Product)obj;  // forzamos a tratar obj como Product
                    b=this.code.equals(other.code);
                }else b=false;
            }
        }
        return b;
    }
    
    @Override
    public String toString() {
        StringBuilder sb = new StringBuilder();
        sb.append("Product: {");
        sb.append("code =");
        sb.append(code);
        sb.append(", ");
        sb.append("name =");
        sb.append(name);
        sb.append(", ");
        sb.append("price =");
        sb.append(price);
        sb.append("}");
        return sb.toString();
    }

}
