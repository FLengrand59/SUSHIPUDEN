<?php

/**
 * Class Newsletter
 */
class Newsletter
{

    /**
     * @var
     */
    private $id_newsletter = null;
    private $email;
    private $date;
    private $etat;



    /**
     * Contact constructor.
     * @param $id_newsletter
     * @param $email
     * @param $date
     * @param $etat



     */
    function __construct($email, $date, $etat)
    {

        $this->email = $email;
        $this->date = $date;
        $this->etat = $etat;
    }

    /**
     * @return mixed
     */
    public function getIdNewsletter()
    {
        return $this->id_newsletter;
    }

    /**
     * @param mixed $id_newsletter
     */
    public function setIdNewsletter($id_newsletter)
    {
        $this->id_newsletter = $id_newsletter;
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
