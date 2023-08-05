<?php 

require_once "../../model/Singleton.class.php";


    $db = Singleton::getInstance()->getConnection();    
    $data=array();
    $sql = "SELECT * FROM `reservation`";
    $requete = $db->prepare($sql);
    $requete->execute();
    $result = $requete->fetchAll(PDO::FETCH_ASSOC);
    
    
    $events = array_map(function($row) {
        $infos = "Service : " . (($row["service"] === "0") ? "service midi" : "service du soir") . "\n" .
                "Nombre de couverts: " . $row["couverts"] . "\n" .
                "Email: " . $row["email"] . "\n" . 
                "Téléphone: " . $row["telephone"];
    
        return array(
            'title' => $row["nom"] . ' ' . $row["prenom"] .  "\n" . $infos,
            'start' => $row["date"], // Date de début de l'événement
        );
    }, $result);
    
    echo json_encode($events);
    

?>



