public class Personne { //la classe Personne est la classe mère. Public = accessible partout
    protected String nom, personne; // Protected = accessible dans la classe et dans les classes filles

    public Personne(String nom, String personne) {
        this.nom = nom; // this sert à différencier les attributs de la classe mère et de la classe fille
        this.personne = personne;
    }
}

Personne p = new Personne("Wick", "John"); //instanciation de la classe Personne

public class Employee extends Personne { //la classe Employee est la classe fille
    private String email; //attribut de la classe fille. Private = accessible uniquement dans la classe

    public Employee(String nom, String prenom, String email) {
        super(nom, personne); // c'est le constructeur de la classe de laquelle j'hérite. 2 constructeurs ne peuvent pas avoir la même signature
        this.email = email; 
    }
}

Employee e = new Employee("Sparrow", "Jack", "j.sparrow@gmail.com"); // e est un objet polymorphe

// un getter est une méthode publique qui permet d'accéder à un attribut private
// un setter est une méthode publique qui permet de modifier un attribut private
// void = ne retourne rien -->
// static =  méthode de classe, on peut l'appeler sans instancier la classe