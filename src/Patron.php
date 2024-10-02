<?php
namespace App;

// La classe patron hérite de la classe employer
// Elle hérite de toute les méthodes de la méthodes employé
// Un objet de la classe patron est également un objet de la classe employé

class Patron extends Employe
{
    // Ajout des attributs spécifique
    private string $voiture;



    // créer le constructeur

    /**
     * @param string $voiture
     */
    public function __construct(string $nom, string $prenom, int $age, string $voiture){
        // Appel ou constructeur de la super-classe (employe)
        parent::__construct($nom, $prenom, $age);
        $this->voiture = $voiture;
    }

    public function getVoiture(): string
    {
        return $this->voiture;
    }

    public function setVoiture(string $voiture): void
    {
        $this->voiture = $voiture;
    }

    public function deplacer(): void{
        dump("Je me déplace en $this->voiture");
    }

    // Redéfinir la méthode présenter

    public function presenter (): void
    {
        // Si on à accès à la classe mère
        dump("Je gouverne sous le nom de $this->nom $this->prenom et je suis agé de $this->age ans.");
        // Si on y a pas accès
        dump("Je gouverne sous le nom de {$this->getNom()} {$this->getPrenom()} et je suis agé de {$this->getAge()} ans.");
    }



}