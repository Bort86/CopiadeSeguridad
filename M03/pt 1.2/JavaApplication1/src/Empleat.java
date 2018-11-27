/*
 * Creeu una nova classe anomenada Empleat. 
 * Aquesta classe heretarà de la classe persona
 */

/**
 *
 * @author Bort
 */
public class Empleat extends Person {

    /* fields, attributes, properties*/
    private double salari;
    private String carrec;
    private String departament;
    private int anyIngres;

    //getters and setters:
    
    /**
     * getSalari()
     * @return double
     */
    public double getSalari() {
        return salari;
    }

    /**
     * setSalari() throws an exception if param < 0
     * @param salari double
     * @throws PropietatValorIvalidException 
     */
    public void setSalari(double salari) throws PropietatValorIvalidException {
        if (salari >= 0) {
            this.salari = salari;
        } else {
            throw new PropietatValorIvalidException("Negative or null value for property \"salari\"");
        }
    }

    /**
     * getCarrec() throws exception in case null
     * @return string
     * @throws PropietatNoInicialitzadaException 
     */
    public String getCarrec() throws PropietatNoInicialitzadaException {
        if (carrec == null) {
            throw new PropietatNoInicialitzadaException("The \"carrec\" is not set");
        }
        return carrec;
    }

    /**
     * setCarrec throws exc if it's null
     * @param carrec string
     * @throws PropietatValorIvalidException 
     */
    public void setCarrec(String carrec) throws PropietatValorIvalidException {
        if (carrec == null) {
            throw new PropietatValorIvalidException("No valid value for property \"carrec\"");
        }
        this.carrec = carrec;
    }

    /**
     * getDepartament() throws ex in case null
     * @return string
     * @throws PropietatNoInicialitzadaException 
     */
    public String getDepartament() throws PropietatNoInicialitzadaException {
        if (departament == null) {
            throw new PropietatNoInicialitzadaException("The \"departament\" is not set");
        }
        return departament;
    }

    /**
     * setDepartament() throws exc if it's null
     * @param departament string
     * @throws PropietatValorIvalidException 
     */
    public void setDepartament(String departament) throws PropietatValorIvalidException {
        if (departament == null) {
            throw new PropietatValorIvalidException("No valid value for property \"departament\"");
        }
        this.departament = departament;
    }

    /**
     * getAnyIngres simple getter
     * @return int
     */
    public int getAnyIngres() {
        return anyIngres;
    }

    /**
     * setAnyIngres() must be a positive number
     * @param anyIngres
     * @throws PropietatValorIvalidException 
     */
    public void setAnyIngres(int anyIngres) throws PropietatValorIvalidException {
        if (anyIngres >= 0) {
            this.anyIngres = anyIngres;
        } else {
            throw new PropietatValorIvalidException("Invalid value for property \"anyIngres\"");
        }

    }

    /**
     * Empty constructor
     */
    public Empleat() {

    }

    /**
     * Constructor with a super class as param
     * @param p Person
     * @throws PropertyNotInitializedException
     * @throws InvalidValueException 
     */
    public Empleat(Person p) throws PropertyNotInitializedException, InvalidValueException {
        super(p.getNif(), p.getName(), p.getAge());
    }

    /**
     * Constructor with a super class and full attributes as param
     * @param p
     * @param salari
     * @param carrec
     * @param departament
     * @param anyIngres
     * @throws PropertyNotInitializedException
     * @throws InvalidValueException
     * @throws PropietatValorIvalidException 
     */
    public Empleat(Person p, double salari, String carrec, String departament, int anyIngres) throws PropertyNotInitializedException, InvalidValueException, PropietatValorIvalidException {
        super(p.getNif(), p.getName(), p.getAge());
        setSalari(salari);
        setCarrec(carrec);
        setDepartament(departament);
        setAnyIngres(anyIngres);
    }

    /**
     * Constructor with its self object as param
     * @param e Empleat
     */
    public Empleat(Empleat e) {
        salari = e.salari;
        carrec = e.carrec;
        departament = e.departament;
        anyIngres = e.anyIngres;
    }
}