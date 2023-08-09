    <?php
    class Utilisateur {
    private $id;
    private $nom;
    private $prenom;
    private $mot_de_passe;
    private $email;
    private $numero_de_tel;
    }

    public function __construct($id, $nom, $prenom, $mot_de_passe, $email, $numero_de_tel) {
        $this->id = $id;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->mot_de_passe = $mot_de_passe;
        $this->email = $email;
        $this->numero_de_tel = $numero_de_tel;
    }

    public function getId() {
        return $this->id;
    }

    public function setId() {
        $this->id = $id;
    }

    ?>