//  Menu

class Menu {

    <!-- @var -->

    private $id_menu = null;
    private $nomMenu;
    private $description;
    private $prix;
    private $etat;
    private $id_plats = null;



 <!-- * Menu constructor.
 * @param $id_menu
 * @param $nomMenu
 * @param $description
 * @param $prix
 * @param $etat
 * @param $id_plats -->


function __construct($id_menu, $nomMenu,$description,$prix,$etat,$id_plats)
{
    
    $this->id_menu = $id_menu;
    $this->nomMenu = $nomMenu;
    $this->description = $description;
    $this->prix = $prix;
    $this->etat = $etat;
    $this->id_plats = $id_plats;

}

 <!-- * @return mixed -->

public function getId_menu()
{
    return $this->id_menu;
}


 <!-- * @param mixed $id_menu -->

public function setId_menu($id_menu)
{
    $this->id_menu = $id_menu;
}


 <!-- * @return mixed -->

public function getNomMenu()
{
    return $this->nomMenu;
}


 <!-- * @param mixed $nomMenu -->

public function setNomMenu($nomMenu)
{
    $this->nomMenu = $nomMenu;
}



 <!-- * @return mixed -->

public function getDescription()
{
    return $this->description;
}


 <!-- * @param mixed $description -->

public function setDescription($description)
{
    $this->description = $description;
}

 <!-- * @return mixed -->


 public function getPrix()
 {
     return $this->prix;
 }
 
 
  <!-- * @param mixed $prix -->
 
 public function setPrix($prix)
 {
     $this->prix = $prix;
 }
 
 
 
  <!-- * @return mixed -->
 
 public function getEtat()
 {
     return $this->etat;
 }
 
 
  <!-- * @param mixed $etat -->
 
 public function setEtat($etat)
 {
     $this->etat = $etat;
 }

 <!-- * @return mixed -->
 
 public function getTel()
 {
     return $this->numero_de_tel;
 }


}