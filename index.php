<?php
// Définition de la classe Hello
class Hello {
    // Propriété pour stocker un nom
    private $name;

    // Constructeur pour initialiser la propriété
    public function __construct($name = "World") {
        $this->name = $name;
    }

    // Méthode pour afficher un message
    public function sayHello() {
        return "Hello, class " . $this->name . "!";
    }
}

// Exemple d'utilisation de la classe
$hello = new Hello("Class");
echo $hello->sayHello(); // Affichera : Hello, Class!
?>
