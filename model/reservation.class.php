<?php

/**
 * Class Reservation
 */
class Reservation {

    /**
     * @var
     */
    private $id_reservation = null;
    private $nom;
    private $prenom;
    private $email;
    private $telephone;
    private $couverts;
    private $date;
    private $statut;


    

    /**
     * Reservation constructor.
     * @param $id_reservation
     * @param $nom
     * @param $prenom
     * @param $email
     * @param $couverts
     * @param $telephone
     * @param $date
     * @param $etat
     * @param $service



     */
    function __construct($nom,$prenom,$email,$telephone,$date,$couverts,$service,$etat)
    {
        
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->email = $email;
        $this->telephone = $telephone;
        $this->date = $date;
        $this->couverts = $couverts;
        $this->service = $service;
        $this->etat = $etat;

    }

    /**
     * @return mixed
     */
    public function getIdReservation()
    {
        return $this->id_reservation;
    }

    /**
     * @param mixed $id_reservation
     */
    public function setIdReservation($id_reservation)
    {
        $this->id_reservation = $id_reservation;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param mixed $date
     */
    public function setDate($date)
    {
        $this->date = $date;
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
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @param mixed $prenom
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getCouverts()
    {
        return $this->couverts;
    }

    /**
     * @param mixed $couverts
     */
    public function setCouverts($couverts)
    {
        $this->couverts = $couverts;
    }

    /**
     * @return mixed
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * @param mixed $telephone
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;
    }

    /**
     * @return mixed
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * @param mixed $service
     */
    public function setService($service)
    {
        $this->service = $service;
    }


    /**
     * @return mixed
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * @param mixed $etat
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;
    }



}


