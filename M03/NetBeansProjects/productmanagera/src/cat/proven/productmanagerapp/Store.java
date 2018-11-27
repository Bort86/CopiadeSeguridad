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
public class Store {

    //atributos
    private Product[] products;
    private int maxElements;
    private int numElements;

    //getter y setters
    public Product[] getProducts() {
        return products;
    }

    public void setProducts(Product[] products) {
        this.products = products;
    }

    public int getMaxElements() {
        return maxElements;
    }

    public void setMaxElements(int maxElements) {
        this.maxElements = maxElements;
    }

    public int getNumElements() {
        return numElements;
    }

    public void setNumElements(int numElements) {
        this.numElements = numElements;
    }

    // constructor
    public Store(int maxElements) {
        this.maxElements = maxElements;
        this.numElements = 0;
        this.products = new Product[maxElements];
    }

    //método añadir elementos
    /**
     * adds a product to the array of products if there is enough space.
     *
     * @param p an element from class Product
     * @return 0 if success, -1 if fails
     */
    public int add(Product p) {
        int result = 0;
        if (numElements < maxElements) {
            this.products[numElements] = p;
            numElements++;
        } else {
            result = -1;
        }

        return result;
    }

    /**
     * Method that finds and returns a product by code
     * @param code string
     * @return an array of products
     */
    public Product findByCode(String code) {
        Product resultado = new Product();
        for (int i = 0; i < numElements; i++) {
            if (products[i].getCode().equals(code)) {
                resultado = products[i];

            }

        }
        return resultado;
    }

    /**
     * method that searches products by name and returns them in a store
     * @param name string
     * @return a store
     */
    public Store findByName(String name) {
        Store resultado = new Store(numElements);
        int contador=0;
        for (int i = 0; i < numElements; i++) {
            if (products[i].getName().equals(name)){
                contador +=resultado.add(products[i]);
            }

        }
        return resultado;
    }
    
    /**
     * method that finds a product
     * @param p product
     * @return resultado is a product with a copy of the answer
     */
    public Product find_p(Product p){
        Product resultado= new Product();
        for (int i = 0; i < numElements; i ++){
            if (products[i]==p){
               resultado=products[i].copia(p); 
            }
        } return resultado;
    }

}
