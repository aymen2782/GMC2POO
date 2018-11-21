<?php
/**
 * Created by PhpStorm.
 * User: aymen
 * Date: 21/11/2018
 * Time: 11:35
 */

class SmartPhone extends EquipementElectric
{
    private $os;

    private $ram;

    const COEF_IMPORT = 20;
    const MIN_PRICE = 20;

    /**
     * SmartPhone constructor.
     * @param string $nom
     * @param int $ns
     * @param string $marque
     * @param int $prix
     * @param string $os
     * @param string $ram
     */
    public function __construct(string $nom = "unknown", int $ns = 000000, string $marque = "LG", int $prix = 100, $os="Android",$ram="FHD")
    {
        parent::__construct($nom, $ns, $marque, $prix);
        $this->ram = $ram;
        $this->os = $os;
        self::$nbVendu++;
    }


    /**
     * @return mixed
     */
    public function getOs()
    {
        return $this->os;
    }

    /**
     * @param mixed $os
     */
    public function setOs($os): void
    {
        $this->os = $os;
    }

    function getNorme()
    {
        // TODO: Implement getNorme() method.
    }

    /**
     * @return mixed
     */
    public function getRam()
    {
        return $this->ram;
    }

    /**
     * @param mixed $Ram
     */
    public function setRam($ram): void
    {
        $this->ram = $ram;
    }

    public function getPrice()
    {
        echo "<hr>Smartphone ";
        return ($this->prix) + self::MIN_PRICE * self::COEF_IMPORT;
    }

}