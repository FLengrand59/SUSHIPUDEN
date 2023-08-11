//  Reservation

class Reservation {

    <!-- @var -->

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



 <!-- * reservation constructor.
 * @param $id_reservation
 * @param $nom
 * @param $prenom
 * @param $email
 * @param $numero_de_tel
 * @param $message
 * @param $date
 * @param $nbrecouverts
 * @param $service
 * @param $id_etat -->


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

 <!-- * @return mixed -->

public function getId_reservation()
{
    return $this->id_reservation;
}


 <!-- * @param mixed $id_reservation -->

public function setId_reservation($id_reservation)
{
    $this->id_reservation = $id_reservation;
}


 <!-- * @return mixed -->

public function getNom()
{
    return $this->nom;
}


 <!-- * @param mixed $nom -->

public function setNom($nom)
{
    $this->nom = $nom;
}



 <!-- * @return mixed -->

public function getPrenom()
{
    return $this->prenom;
}


 <!-- * @param mixed $prenom -->

public function setPrenom($prenom)
{
    $this->prenom = $prenom;
}
 
 
 
  <!-- * @return mixed -->
 
 public function getEmail()
 {
     return $this->email;
 }
 
 
  <!-- * @param mixed $email -->
 
 public function setEmail($email)
 {
     $this->email = $email;
 }

 <!-- * @return mixed -->
 
 public function getTel()
 {
     return $this->numero_de_tel;
 }
 
 
  <!-- * @param mixed $Tel -->
 
 public function setTel($numero_de_tel)
 {
     $this->numero_de_tel = $numero_de_tel;
 }

 <!-- * @return mixed -->
 
 public function getMessage()
 {
     return $this->message;
 }
 
 
  <!-- * @param mixed $message -->
 
 public function setMessage($message)
 {
     $this->message = $message;
 }

 <!-- * @return mixed -->
 
 public function getDate()
 {
     return $this->date;
 }
 
 
  <!-- * @param mixed $date -->
 
 public function setDate($date)
 {
     $this->date = $date;
 }

 <!-- * @return mixed -->
 
 public function getNbre_couverts()
 {
     return $this->nbrecouverts;
 }
 
 
  <!-- * @param mixed $nbrecouverts -->
 
 public function setNbre_couverts($nbrecouverts)
 {
     $this->nbrecouverts = $nbrecouverts;
 }

 <!-- * @return mixed -->
 
 public function getService()
 {
     return $this->service;
 }
 
 
  <!-- * @param mixed $service -->
 
 public function setService($service)
 {
     $this->service = $service;
 }

}