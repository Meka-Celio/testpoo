<?php 

abstract class Humain 
{
    // Les attributs
    public $nom;
    public $prenom;
    protected $age;

    // Constructeur
    public function __construct ($nom, $prenom, $age)
    {
        $this->nom      =   $nom;
        $this->prenom   =   $prenom;
        $this->setAge($age);
    }

    public function setAge ($age)
    {
        // Age === int
        if (is_int($age)) {
            $this->age = $age;
        }
        else {
            throw new Exception ("L'age doit être un entier !");
        }
    }

    public function getAge () 
    {
        return $this->age;
    }

    abstract public function travailler ();


}

// Class
class Employe extends Humain
{
    // private : la variable ne peut être modifiée par une fonction que dans la classe d'origine à laquelle elle appartient 

    // Méthodes
    function presentation () 
    {
        echo "Salut, je suis $this->nom $this->prenom, j'ai $this->age an(s)<br>";
    }

    public function travailler ()
    {
        return "Je travaille actuellement";
    }

}

class Patron extends Employe
{
    // Les attributs
    private $voiture;

    // Constructeur
    public function __construct ($nom, $prenom, $age, $voiture)
    {
        parent::__construct($nom, $prenom, $age);
        $this->voiture  =   $voiture;
    }

    // Méthodes
    function presentation () 
    {
        echo "Je suis $this->nom $this->prenom, j'ai $this->age an(s) et j'ai une voiture<br>";
    }

    public function rouler ()
    {
        echo "Je roule à bord de ma $this->voiture <br>";
    }

    public function travailler ()
    {
        return "I am the boss and I work";
    }
}

class Etudiant extends Humain
{

    public function travailler ()
    {
        return "Je suis etudiant et je révise";
    }
}

$employe1 = new Employe('Tech', 'Celio', 21);
$employe1->presentation();

$patron = new patron("Grisha", "Steph", 42, "Citroen");
$patron->presentation();
$patron->rouler();


function faireTravailler (Humain $objet)
{
    echo "Travail en cours : {$objet->travailler()}";
}

$etudiant = new Etudiant ("Ecole", "Tobias", 15);

faireTravailler($employe1);
faireTravailler($patron);
faireTravailler($etudiant);
