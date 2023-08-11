//  Etat reservation

class Etat {

    <!-- @var -->

    private $id_etat = null;
    private $nom_etat;



 <!-- * user constructor.
 * @param $id_etat
 * @param $nom_etat -->


function __construct($id_etat, $nom_etat)
{
    
    $this->id_etat = $id_etat;
    $this->nom_etat = $nom_etat;

}

 <!-- * @return mixed -->

public function getId_etat()
{
    return $this->id_etat;
}


 <!-- * @param mixed $id_etat -->

public function setId_etat($id_etat)
{
    $this->id_etat = $id_etat;
}


 <!-- * @return mixed -->

public function getNom_etat()
{
    return $this->nom_etat;
}


 <!-- * @param mixed $nom_etat -->

public function setNom_etat($nom_etat)
{
    $this->nom_etat = $nom_etat;
}


}
?>