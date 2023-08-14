<?php


/**
 * Class Contact
 */
class Contact
{

    /**
     * @var
     */
    private $id_contact = null;
    private $nom;
    private $prenom;
    private $email;
    private $message;
    private $id_categories;
    private $date;
    private $statut;



    /**
     * Contact constructor.
     * @param $id_contact
     * @param $nom
     * @param $prenom
     * @param $email
     * @param $id_categories
     * @param $message
     * @param $date
     * @param $statut



     */
    function __construct($nom, $prenom, $email, $id_categories, $message, $date, $statut)
    {

        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->email = $email;
        $this->id_categories = $id_categories;
        $this->message = $message;
        $this->date = $date;
        $this->statut = $statut;
    }


    //  * @return mixed

    public function getIdContact()
    {
        return $this->id_contact;
    }


    //  * @param mixed $id_contact

    public function setIdContact($id_contact)
    {
        $this->id_contact = $id_contact;
    }

    //  * @return mixed

    public function getDate()
    {
        return $this->date;
    }


    //  * @param mixed $date

    public function setDate($date)
    {
        $this->date = $date;
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

    public function getEmail()
    {
        return $this->email;
    }

    //  * @param mixed $email

    public function setEmail($email)
    {
        $this->email = $email;
    }


    //  * @return mixed

    public function getId_categories()
    {
        return $this->id_categories;
    }


    //  * @param mixed $id_categories

    public function setId_categories($id_categories)
    {
        $this->objet = $id_categories;
    }


    //  * @return mixed

    public function getMessage()
    {
        return $this->message;
    }


    //  * @param mixed $message

    public function setMessage($message)
    {
        $this->Message = $message;
    }


    //  * @return mixed

    public function getStatut()
    {
        return $this->statut;
    }


    //  * @param mixed $statut

    public function setStatut($Statut)
    {
        $this->Statut = $statut;
    }
}
