/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package cat.proven.productmanagerapp;

import java.io.BufferedReader;
import java.io.IOException;
import java.io.InputStreamReader;
import java.util.Scanner;
import java.util.logging.Level;
import java.util.logging.Logger;

/**
 * Functions that has the string for the menu and initializes the store in 10
 * products
 *
 * @author alumne
 */
public class ProductManagerApp {

    //atributos
    Store myStore = new Store(10);

    //atributo para printar el menu
    private String[] menuOptions
            ///esto es para editar las opciones del menu, nada más

            = {"Exit",
                "List all products",
                "Find product by code",
                "Find product by name",
                "Add new product"
            };

    /**
     * main function
     *
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        // TODO code application logic here
        ProductManagerApp myApp = new ProductManagerApp();
        myApp.run();

        ///esto solo hace correr al programa productmanager, lo inicia
    }

    /**
     * Function that prints the menu and asks the user to choose and option
     *
     * @return
     */
    private int showMenu() {
        ///esto sirve para printar el menu con formato;y pide y guarda la opcion elegida

        int option = -1;
        BufferedReader reader = new BufferedReader(new InputStreamReader(System.in));
        //se puede usar el scanner también

        System.out.println("Menu");
        for (int i = 0; i < menuOptions.length; i++) {
            System.out.format("%d %s\n", i, menuOptions[i]);
        }
        System.out.print("Please, choose an option:");

        try {
            Scanner sc = new Scanner(System.in);
            option = sc.nextInt();
        } catch (Exception e) {
            System.out.println("NO ES UN VALOR VÁLIDO");
        }

        return option;
    }

    /**
     * function that makes run the menu, loads 3 new products on the store and
     * makes a switch option regarding the user's choice
     */
    private void run() {

        ///esto es lo que fuerza a repetir el menu una vez tenemos la opcion que nos trae showMenu
        loadData();
        int optionSelected = -1;
        do {
            switch (showMenu()) {
                case 1:
                    System.out.println("Has elegido la opcion 1 ");
                    list_AllProducts();
                    break;
                case 2:
                    System.out.println("Has elegido la opcion 2 ");
                    findProductByCode();
                    break;
                case 3:
                    System.out.println("Has elegido la opcion 3 ");
                    findProductByName();
                    break;
                case 4:
                    System.out.println("Has elegido la opcion 4 ");
                    addNewProduct();
                    break;
                case 0:
                    optionSelected = 0;
                    System.out.println("Has elegido la opcion 0 y cerramos ");

                    break;
            }

        } while (optionSelected != 0);

    }

    /**
     * function that adds 3 new products unto the store
     */
    private void loadData() {

        myStore.add(new Product("1", "Keyboard", 20.0));

        myStore.add(new Product("2", "Monitor", 120.0));

        myStore.add(new Product("3", "Mouse", 15.0));

    }

    /**
     * method that prints out all the products on the store
     */
    public void list_AllProducts() {

        for (int i = 0; i < myStore.getNumElements(); i++) {
            //  Product p[]=myStore.getProducts();
            System.out.println(myStore.getProducts()[i].toString());
        }
    }

    /**
     * method that prints out a product of the store sorted by code it uses the
     * product method of find by code
     */
    public void findProductByCode() {
        Scanner reader = new Scanner(System.in);
        System.out.println("Introduce a valid Code name to search: ");
        String code_tosearch = reader.nextLine();
        Product resultado = myStore.findByCode(code_tosearch);
        System.out.println(resultado.toString());

    }

    /**
     * method that prints out a product of the store sorted by name it uses the
     * product method of find by name
     *
     */
    public void findProductByName() {

        Scanner reader = new Scanner(System.in);
        System.out.println("Introduce a valid product name to search: ");
        String search_name = reader.nextLine();
        Store answer = myStore.findByName(search_name);
        for (int i = 0; i < answer.getNumElements(); i++) {
            System.out.println(answer.getProducts()[i].toString());
        };

    }

    /**
     * method that adds a new product on the store, it asks for code, name and price
     * and prints out a message if it was stored correctly
     */
    public void addNewProduct() {
        Product new_product = new Product();
        Scanner reader = new Scanner(System.in);
        System.out.println("Introduce a code: ");
        new_product.setCode(reader.nextLine());
        System.out.println("Introduce a name: ");
        new_product.setName(reader.nextLine());
        System.out.println("Introduce a price: ");
        new_product.setPrice(reader.nextDouble());
        if (myStore.add(new_product) == 0) {
            System.out.println("Stored correctly");
        }

    }

}
