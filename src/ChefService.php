<?php
namespace App;

// La classe patron hérite de la classe employer
// Elle hérite de toute les méthodes de la méthodes employé
// Un objet de la classe patron est également un objet de la classe employé

class ChefService extends Employe
{
    // Ajout des attributs spécifique
    private string $service;



    // créer le constructeur

    /**
     * @param string $service
     */
    public function __construct(string $nom, string $prenom, int $age, string $service){
        // Appel ou constructeur de la super-classe (employe)
        parent::__construct($nom, $prenom, $age);
        $this->service = $service;
    }

    public function getService(): string
    {
        return $this->service;
    }

    public function setService(string $service): void
    {
        $this->service = $service;
    }


    public function servir(): void{
        dump("Je sers le secteur $this->service");
    }

    // Redéfinir la méthode présenter

    public function presenter (): void
    {
        // Si on à accès à la classe mère
        dump("Je sers sous le nom de $this->nom $this->prenom et je suis née il y a $this->age année.");
    }



}