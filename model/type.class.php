//  Type


class Type {

    <!-- @var -->

    private $id_plats = null;
    private $entree;
    private $plats;
    private $dessert;
    private $etat;


 <!-- * Type constructor.
 * @param $id_plats
 * @param $entree
 * @param $plats
 * @param $dessert
 * @param $etat -->


function __construct($id_plats, $entree,$plats,$dessert,$etat)
{
    
    $this->id_plats = $id_plats;
    $this->entree = $entree;
    $this->plats = $plats;
    $this->dessert = $dessert;
    $this->etat = $etat;

}

 <!-- * @return mixed -->

public function getId_plats()
{
    return $this->id_plats;
}


 <!-- * @param mixed $id_plats -->

public function setId_plats($plats)
{
    $this->id_plats = $id_plats;
}


 <!-- * @return mixed -->

public function getEntree()
{
    return $this->entree;
}


 <!-- * @param mixed $entree -->

public function setEntree($entree)
{
    $this->entree = $entree;
}



 <!-- * @return mixed -->

public function getPlats()
{
    return $this->plats;
}


 <!-- * @param mixed $description -->

public function setPlats($plats)
{
    $this->plats = $plats;
}

 <!-- * @return mixed -->


 public function getDesserts()
 {
     return $this->dessert;
 }
 
 
  <!-- * @param mixed $dessert -->
 
 public function setDessert($dessert)
 {
     $this->dessert = $dessert;
 }
 
 
 
  <!-- * @return mixed -->
 
 public function getEtat($etat)
 {
     return $this->etat;
 }
 
 
  <!-- * @param mixed $etat -->
 
 public function setEtat($etat)
 {
     $this->etat = $etat;
 }

}