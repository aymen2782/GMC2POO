<?php
/**
 * Created by PhpStorm.
 * User: aymen
 * Date: 21/11/2018
 * Time: 11:35
 */

class Electromenager extends EquipementElectric
{
    private $type;

    /**
     * Electromenager constructor.
     * @param string $nom
     * @param int $ns
     * @param string $marque
     * @param int $prix
     * @param string $type
     */
    public function __construct(string $nom = "unknown", int $ns = 000000, string $marque = "LG", int $prix = 0, $type = "mixeur")
    {
        parent::__construct($nom, $ns, $marque, $prix);
        $this->type = $type;
        self::$nbVendu++;
    }


    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type): void
    {
        $this->type = $type;
    }

    function getNorme()
    {
        // TODO: Implement getNorme() method.
    }


}