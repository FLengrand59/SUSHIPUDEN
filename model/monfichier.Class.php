<?php

// Utilisateur

class Utilisateur {

    // @var

    private $id_user = null;
    private $nom;
    private $prenom;
    private $mot_de_passe;
    private $email;
    private $numero_de_tel;



//  * user constructor.
//  * @param $id_user
//  * @param $nom
//  * @param $prenom
//  * @param $mot_de_passe
//  * @param $email
//  * @param $numero_de_tel


function __construct($nom,$prenom,$mot_de_passe,$email,$numero_de_tel)
{
    
    $this->nom = $nom;
    $this->prenom = $prenom;
    $this->mot_de_passe = $mot_de_passe;
    $this->email = $email;
    $this->numero_de_tel = $numero_de_tel;

}

//  * @return mixed

public function getId_user()
{
    return $this->id_user;
}


//  * @param mixed $id_user

public function setId_user($id_user)
{
    $this->id_user = $id_user;
}


//  * @return mixed

public function getNom()
{
    return $this->nom;
}


//  * @param mixed $nom

public function setNom($nom)
{
    $this->nom = $nom;
}



//  * @return mixed

public function getPrenom()
{
    return $this->prenom;
}


//  * @param mixed $prenom

public function setPrenom($prenom)
{
    $this->prenom = $prenom;
}

//  * @return mixed


 public function getMot_de_passe()
 {
     return $this->mot_de_passe;
 }
 
 
//   * @param mixed $mot_de_passe
 
 public function setMot_de_passe($mot_de_passe)
 {
     $this->mot_de_passe = $mot_de_passe;
 }
 
 
 
//   * @return mixed
 
 public function getEmail()
 {
     return $this->email;
 }
 
 
//   * @param mixed $email
 
 public function setEmail($email)
 {
     $this->email = $email;
 }

//  * @return mixed
 
 public function getTel()
 {
     return $this->numero_de_tel;
 }
 
 
//   * @param mixed $Tel
 
 public function setTel($numero_de_tel)
 {
     $this->numero_de_tel = $numero_de_tel;
 }






}