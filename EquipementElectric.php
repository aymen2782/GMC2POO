<?php
/**
 * Created by PhpStorm.
 * User: aymen
 * Date: 21/11/2018
 * Time: 10:01
 */

abstract class EquipementElectric
{
    protected $nom;

    protected $ns;

    protected $marque;

    protected $prix;

    protected $dateFabrication;

    protected static $nbVendu = 0;

    /**
     * EquipementElectric constructor.
     * @param $nom
     * @param $ns
     * @param $marque
     * @param $dateFabrication
     */
    public function __construct($nom="unknown" , int $ns=000000, $marque="LG",$prix = 10)
    {
        $this->nom = $nom;
        $this->ns = $ns;
        $this->marque = $marque;
        $this->prix = $prix;
        $this->dateFabrication = new DateTime();
    }

    /**
     * @return mixed
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * @param mixed $prix
     */
    public function setPrix($prix): void
    {
        $this->prix = $prix;
    }


    /**
     * @return mixed
     */
    public function getDateFabrication()
    {
        return $this->dateFabrication->format('D-M-Y');
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        if (length($nom)<=10)
            $this->nom = $nom;
        else
            $this->nom ="Pas de marque";
    }

    /**
     * @return mixed
     */
    public function getNs()
    {
        return $this->ns;
    }

    /**
     * @param mixed $ns
     */
    public function setNs($ns)
    {
        $this->ns = $ns;
    }

    /**
     * @return mixed
     */
    public function getMarque()
    {
        return $this->marque;
    }

    /**
     * @param mixed $marque
     */
    public function setMarque($marque)
    {
        $this->marque = $marque;
    }

    public function afficheEquipement() {
        $dateToshow = $this->getDateFabrication();
        echo "Je suis un EE mon nom est $this->nom
                <br> num serie : $this->ns <br> 
                marque : $this->marque
                date Création : $dateToshow 
                ";
    }

    public function getPrice () {
        echo "<hr>EE : ";
        return $this->prix;
    }

    abstract function getNorme();

}