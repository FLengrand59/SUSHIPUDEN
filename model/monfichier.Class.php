<?php

// Utilisateur

class Utilisateur {

    @var

    private $id_user = null;
    private $nom;
    private $prenom;
    private $mot_de_passe;
    private $email;
    private $numero_de_tel;



 * user constructor.
 * @param $id_user
 * @param $nom
 * @param $prenom
 * @param $mot_de_passe
 * @param $email
 * @param $numero_de_tel


function __construct($nom,$prenom,$mot_de_passe,$email,$numero_de_tel)
{
    
    $this->nom = $nom;
    $this->prenom = $prenom;
    $this->mot_de_passe = $mot_de_passe;
    $this->email = $email;
    $this->numero_de_tel = $numero_de_tel;

}

 * @return mixed

public function getId_user()
{
    return $this->id_user;
}


 * @param mixed $id_user

public function setId_user()
{
    $this->id_user = $id_user;
}


 * @return mixed

public function getNom()
{
    return $this->nom;
}


 * @param mixed $nom

public function setNom()
{
    $this->nom = $nom;
}



 * @return mixed

public function getPrenom()
{
    return $this->prenom;
}


 * @param mixed $prenom

public function setPrenom()
{
    $this->prenom = $prenom;
}

 * @return mixed


 public function getMot_de_passe()
 {
     return $this->mot_de_passe;
 }
 
 
  * @param mixed $mot_de_passe
 
 public function setMot_de_passe()
 {
     $this->mot_de_passe = $mot_de_passe;
 }
 
 
 
  * @return mixed
 
 public function getEmail()
 {
     return $this->email;
 }
 
 
  * @param mixed $email
 
 public function setEmail()
 {
     $this->email = $email;
 }

 * @return mixed
 
 public function getTel()
 {
     return $this->numero_de_tel;
 }
 
 
  * @param mixed $Tel
 
 public function setTel()
 {
     $this->numero_de_tel = $numero_de_tel;
 }


//  Menu

class Menu {

    @var

    private $id_menu = null;
    private $nomMenu;
    private $description;
    private $prix;
    private $etat;
    private $id_plats = null;



 * Menu constructor.
 * @param $id_menu
 * @param $nomMenu
 * @param $description
 * @param $prix
 * @param $etat
 * @param $id_plats


function __construct($id_menu, $nomMenu,$description,$prix,$etat,$id_plats)
{
    
    $this->id_menu = $id_menu;
    $this->nomMenu = $nomMenu;
    $this->description = $description;
    $this->prix = $prix;
    $this->etat = $etat;
    $this->id_plats = $id_plats;

}

 * @return mixed

public function getId_menu()
{
    return $this->id_menu;
}


 * @param mixed $id_menu

public function setId_menu()
{
    $this->id_menu = $id_menu;
}


 * @return mixed

public function getNomMenu()
{
    return $this->nomMenu;
}


 * @param mixed $nomMenu

public function setNomMenu()
{
    $this->nomMenu = $nomMenu;
}



 * @return mixed

public function getDescription()
{
    return $this->description;
}


 * @param mixed $description

public function setDescription()
{
    $this->description = $description;
}

 * @return mixed


 public function getPrix()
 {
     return $this->prix;
 }
 
 
  * @param mixed $prix
 
 public function setPrix()
 {
     $this->prix = $prix;
 }
 
 
 
  * @return mixed
 
 public function getEtat()
 {
     return $this->etat;
 }
 
 
  * @param mixed $etat
 
 public function setEtat()
 {
     $this->etat = $etat;
 }

 * @return mixed
 
 public function getTel()
 {
     return $this->numero_de_tel;
 }


//  Type


class Type {

    @var

    private $id_plats = null;
    private $entree;
    private $plats;
    private $dessert;
    private $etat;



 * Type constructor.
 * @param $id_plats
 * @param $entree
 * @param $plats
 * @param $dessert
 * @param $etat


function __construct($id_plats, $entree,$plats,$dessert,$etat)
{
    
    $this->id_plats = $id_plats;
    $this->entree = $entree;
    $this->plats = $plats;
    $this->dessert = $dessert;
    $this->etat = $etat;

}

 * @return mixed

public function getId_plats()
{
    return $this->id_plats;
}


 * @param mixed $id_plats

public function setId_plats()
{
    $this->id_plats = $id_plats;
}


 * @return mixed

public function getEntree()
{
    return $this->entree;
}


 * @param mixed $entree

public function setEntree()
{
    $this->entree = $entree;
}



 * @return mixed

public function getPlats()
{
    return $this->plats;
}


 * @param mixed $description

public function setPlats()
{
    $this->plats = $plats;
}

 * @return mixed


 public function getDesserts()
 {
     return $this->dessert;
 }
 
 
  * @param mixed $dessert
 
 public function setDessert()
 {
     $this->dessert = $dessert;
 }
 
 
 
  * @return mixed
 
 public function getEtat($etat)
 {
     return $this->etat;
 }
 
 
  * @param mixed $etat
 
 public function setEtat($etat)
 {
     $this->etat = $etat;
 }


//  Contact

class Contact {

    @var

    private $id_contact = null;
    private $nom;
    private $prenom;
    private $email;
    private $numero_de_tel;
    private $message;
    private $id_categorie;



 * user constructor.
 * @param $id_contact
 * @param $nom
 * @param $prenom
 * @param $email
 * @param $numero_de_tel
 * @param $message
 * @param $id_categorie


function __construct($id_contact, $nom,$prenom,$email,$numero_de_tel, $message, $id_categorie)
{
    
    $this->id_contact = $id_contact;
    $this->nom = $nom;
    $this->prenom = $prenom;
    $this->email = $email;
    $this->numero_de_tel = $numero_de_tel;
    $this->message = $message
    $this->id_categorie = $id_categorie;

}

 * @return mixed

public function getId_contact()
{
    return $this->id_contact;
}


 * @param mixed $id_contact

public function setId_contact()
{
    $this->id_contact = $id_contact;
}


 * @return mixed

public function getNom()
{
    return $this->nom;
}


 * @param mixed $nom

public function setNom()
{
    $this->nom = $nom;
}



 * @return mixed

public function getPrenom()
{
    return $this->prenom;
}


 * @param mixed $prenom

public function setPrenom()
{
    $this->prenom = $prenom;
}
 
 
 
  * @return mixed
 
 public function getEmail()
 {
     return $this->email;
 }
 
 
  * @param mixed $email
 
 public function setEmail()
 {
     $this->email = $email;
 }

 * @return mixed
 
 public function getTel()
 {
     return $this->numero_de_tel;
 }
 
 
  * @param mixed $Tel
 
 public function setTel()
 {
     $this->numero_de_tel = $numero_de_tel;
 }

 * @return mixed
 
 public function getMessage()
 {
     return $this->message;
 }
 
 
  * @param mixed $message
 
 public function setMessage()
 {
     $this->message = $message;
 }


//  Categorie

class Categorie {

    @var

    private $id_categorie = null;
    private $categorie;



 * user constructor.
 * @param $id_categorie
 * @param $categorie


function __construct($id_categorie, $categorie)
{
    
    $this->id_categorie = $id_categorie;
    $this->categorie = $categorie;

}

 * @return mixed

public function getId_categorie()
{
    return $this->id_categorie;
}


 * @param mixed $id_categorie

public function setId_categorie()
{
    $this->id_categorie = $id_categorie;
}


 * @return mixed

public function getCategorie()
{
    return $this->categorie;
}


 * @param mixed $categorie

public function setCategorie()
{
    $this->nom = $categorie;
}

//  Reservation

class Reservation {

    @var

    private $id_reservation = null;
    private $nom;
    private $prenom;
    private $email;
    private $numero_de_tel;
    private $message;
    private $date;
    private $nbrecouverts;
    private $service;
    private $id_etat;



 * user constructor.
 * @param $id_reservation
 * @param $nom
 * @param $prenom
 * @param $email
 * @param $numero_de_tel
 * @param $message
 * @param $date
 * @param $nbrecouverts
 * @param $service
 * @param $id_etat


function __construct($id_reservation, $nom,$prenom,$email,$numero_de_tel, $message, $date, $nbrecouverts, $service, $id_etat)
{
    
    $this->id_reservation = $id_reservation;
    $this->nom = $nom;
    $this->prenom = $prenom;
    $this->email = $email;
    $this->numero_de_tel = $numero_de_tel;
    $this->message = $message
    $this->date = $date;
    $this->nbrecouverts = $nbrecouverts;
    $this->service = $service;
    $this->id_etat = $id_etat;
}

 * @return mixed

public function getId_reservation()
{
    return $this->id_reservation;
}


 * @param mixed $id_reservation

public function setId_reservation()
{
    $this->id_reservation = $id_reservation;
}


 * @return mixed

public function getNom()
{
    return $this->nom;
}


 * @param mixed $nom

public function setNom()
{
    $this->nom = $nom;
}



 * @return mixed

public function getPrenom()
{
    return $this->prenom;
}


 * @param mixed $prenom

public function setPrenom()
{
    $this->prenom = $prenom;
}
 
 
 
  * @return mixed
 
 public function getEmail()
 {
     return $this->email;
 }
 
 
  * @param mixed $email
 
 public function setEmail()
 {
     $this->email = $email;
 }

 * @return mixed
 
 public function getTel()
 {
     return $this->numero_de_tel;
 }
 
 
  * @param mixed $Tel
 
 public function setTel()
 {
     $this->numero_de_tel = $numero_de_tel;
 }

 * @return mixed
 
 public function getMessage()
 {
     return $this->message;
 }
 
 
  * @param mixed $message
 
 public function setMessage()
 {
     $this->message = $message;
 }

 * @return mixed
 
 public function getDate()
 {
     return $this->date;
 }
 
 
  * @param mixed $date
 
 public function setDate()
 {
     $this->date = $date;
 }

 * @return mixed
 
 public function getNbre_couverts()
 {
     return $this->nbrecouverts;
 }
 
 
  * @param mixed $nbrecouverts
 
 public function setNbre_couverts()
 {
     $this->nbrecouverts = $nbrecouverts;
 }

 * @return mixed
 
 public function getService()
 {
     return $this->service;
 }
 
 
  * @param mixed $service
 
 public function setService()
 {
     $this->service = $service;
 }



//  Etat reservation

class Etat {

    @var

    private $id_etat = null;
    private $nom_etat;



 * user constructor.
 * @param $id_etat
 * @param $nom_etat


function __construct($id_etat, $nom_etat)
{
    
    $this->id_etat = $id_etat;
    $this->nom_etat = $nom_etat;

}

 * @return mixed

public function getId_etat()
{
    return $this->id_etat;
}


 * @param mixed $id_etat

public function setId_etat()
{
    $this->id_etat = $id_etat;
}


 * @return mixed

public function getNom_etat()
{
    return $this->nom_etat;
}


 * @param mixed $nom_etat

public function setNom_etat()
{
    $this->nom_etat = $nom_etat;
}

?>