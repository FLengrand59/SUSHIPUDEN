//  Categorie

class Categorie {

    <!-- @var -->

    private $id_categorie = null;
    private $categorie;
}


 <!-- * user constructor.
 * @param $id_categorie
 * @param $categorie -->


function __construct($id_categorie, $categorie)
{
    
    $this->id_categorie = $id_categorie;
    $this->categorie = $categorie;

}

 <!-- * @return mixed -->

public function getId_categorie()
{
    return $this->id_categorie;
}


 <!-- * @param mixed $id_categorie -->

public function setId_categorie($id_categorie)
{
    $this->id_categorie = $id_categorie;
}


 <!-- * @return mixed -->

public function getCategorie()
{
    return $this->categorie;
}


 <!-- * @param mixed $categorie -->

public function setCategorie($categorie)
{
    $this->nom = $categorie;
}

}
