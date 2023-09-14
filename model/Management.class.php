<?php

include_once "Singleton.class.php";

/**
 * Class Management
 */
class Management
{

    // READ FONCTION //////

    /* Affichage des message reçus dans le back-office */

    public static function readContacts()
    {
        try {
            $db = Singleton::getInstance()->getConnection();
            $sql = "SELECT * FROM `contact`";
            $requete = $db->prepare($sql);
            $requete->execute();
            $result = $requete->fetchAll(PDO::FETCH_ASSOC);

            return $result;
        } catch (PDOException $e) {
            echo 'Erreur de requête : ' . $e->getMessage();
            return [];
        }
    }

    // /* Compteur reservation du jour */
    // public static function countResa()
    // {
    //     try {
    //         $db = Singleton::getInstance()->getConnection();
    //         $sql = "SELECT COUNT(*) FROM reservation WHERE DATE(date) = CURDATE();";
    //         $requete = $db->prepare($sql);
    //         $requete->execute();
    //         $result = $requete->fetchColumn();

    //         return $result;
    //     } catch (PDOException $e) {
    //         echo 'Erreur de requête : ' . $e->getMessage();
    //         return 0; 
    //     }
    // }

    // /* Compteur total message */
    // public static function countContact()
    // {
    //     try {
    //         $db = Singleton::getInstance()->getConnection();
    //         $sql = "SELECT COUNT(*) FROM `contact`";
    //         $requete = $db->prepare($sql);
    //         $requete->execute();
    //         $result = $requete->fetchColumn();

    //         return $result;
    //     } catch (PDOException $e) {
    //         echo 'Erreur de requête : ' . $e->getMessage();
    //         return 0; 
    //     }
    // }


    // /* Compteur message non lu */
    // public static function countUnreadContact()
    // {
    //     $db = Singleton::getInstance()->getConnection();
    //     $sql = "SELECT * FROM `contact` WHERE `statut`= 0";
    //     $requete = $db->prepare($sql);
    //     $requete->execute();
    //     $result = $requete->rowCount();

    // return $result;
    // }


    // // Update FONCTION //////

    // /* Edition du statut non lu > lu */
    // public static function updateStatut($id_contact)    
    // {
    //     $db = Singleton::getInstance()->getConnection();
    //     $stmt = $db->prepare("UPDATE contact SET statut=:recupStatut WHERE id_contact = :idContactRecup");
    //     $stmt->bindValue(':idContactRecup',$id_contact);
    //     $stmt->bindValue(':recupStatut', "1");
    //     $stmt->execute();
    // }

    //  /* Edition du statut lu > marqué comme lu */
    // public static function updateStatutOpnd($id_contact)    
    // {
    //     $db = Singleton::getInstance()->getConnection();
    //     $stmt = $db->prepare("UPDATE contact SET statut=:recupStatut WHERE id_contact = :idContactRecup");
    //     $stmt->bindValue(':idContactRecup',$id_contact);
    //     $stmt->bindValue(':recupStatut', "0");
    //     $stmt->execute();
    // }


    // // Delete FONCTION //////

    // /* Suppression d'un message (contact) */
    // public static function deleteContact($id_contact)
    // {
    //     $db = Singleton::getInstance()->getConnection();
    //     $sql = "DELETE FROM contact WHERE id_contact = :id_contactRecup";
    //     $requete = $db->prepare($sql);
    //     $requete->bindParam(':id_contactRecup', $id_contact, PDO::PARAM_INT);
    //     $requete->execute();

    // }




    // CREATION D'UNE NOUVELLE RESERVATION
    public static function createReservation($reservation)
    {
        try {
            $db = Singleton::getInstance()->getConnection();
            $sql = 'INSERT INTO reservation (nom, prenom, email, n_tel, jour, nbre_couverts, service, nom_etat) 
                    VALUES (:nom, :prenom, :email, :telephone, :date, :couverts, :service, :etat)';
            $statement = $db->prepare($sql);

            $data = [
                'nom' => $reservation->getNom(),
                'prenom' => $reservation->getPrenom(),
                'email' => $reservation->getEmail(),
                'telephone' => $reservation->getTel(),
                'date' => $reservation->getDate(),
                'couverts' => $reservation->getNbre_Couverts(),
                'service' => $reservation->getService(),
                'etat' => $reservation->getEtat(),
            ];

            $statement->execute($data);

            $rowCount = $statement->rowCount();
            return $rowCount;
        } catch (PDOException $e) {
            echo 'Erreur de requête : ' . $e->getMessage();
            return 0;
        }
    }

    // AFFICHAGE D'UNE RESERVATION
    public static function readReservation($id_reservation)
    {
        try {
            $db = Singleton::getInstance()->getConnection();
            $sql = "SELECT * FROM reservation";
            $requete = $db->prepare($sql);
            $requete->execute();
            $result = $requete->fetchAll(PDO::FETCH_ASSOC);

            return $result;
        } catch (PDOException $e) {
            echo 'Erreur de requête : ' . $e->getMessage();
            return [];
        }
    }

    // UPDATE DE LA RESERVATION
    public static function updateReservation($id_reservation)
    {
        try {
            $db = Singleton::getInstance()->getConnection();
            $sql = "UPDATE reservation SET service = 'soir' WHERE id = :id_reservation";
            $requete = $db->prepare($sql);
            $requete->bindParam(':id_reservation', $id_reservation, PDO::PARAM_INT);
            $requete->execute();

            $rowCount = $requete->rowCount();

            return $rowCount;
        } catch (PDOException $e) {
            echo 'Erreur de requête : ' . $e->getMessage();
            return 0;
        }
    }


    // SUPPRESSION DE LA RESERVATION
    public static function deleteReservation($id_reservation)
    {
        $db = Singleton::getInstance()->getConnection();
        $sql = "DELETE FROM reservation WHERE id_reservation = :id_reservationRecup";
        $requete = $db->prepare($sql);
        $requete->bindParam(':id_reservationRecup', $id_reservation, PDO::PARAM_INT);
        $requete->execute();
    }



    // Creation d'une Newsletter
    public static function createNewsletter(Newsletter $newsletter)
    {
        try {
            $db = Singleton::getInstance()->getConnection();
            $sql = 'INSERT INTO newsletter (mail, jour, etat) 
                    VALUES (:mail, :jour, :etat)';
            $statement = $db->prepare($sql);

            $data = [

                'mail' => $newsletter->getEmail(),
                'jour' => $newsletter->getDate(),
                'etat' => 0,
            ];

            $statement->execute($data);

            return $db->lastInsertId();
        } catch (PDOException $e) {
            echo 'Erreur de requête : ' . $e->getMessage();
            return 0;
        }
    }

    // // Affichage de la Newsletter


    public static function readNewsletter($id_newsletter)
    {
        try {
            $db = Singleton::getInstance()->getConnection();
            $sql = "SELECT * FROM Newsletter";
            $requete = $db->prepare($sql);
            $requete->execute();
            $result = $requete->fetchAll(PDO::FETCH_ASSOC);

            return $result;
        } catch (PDOException $e) {
            echo 'Erreur de requête : ' . $e->getMessage();
            return [];
        }
    }

    // Update de la newsletter
    public static function updateNewsletter($id_newsletter)
    {
        try {
            $db = Singleton::getInstance()->getConnection();
            $stmt = $db->prepare("UPDATE newsletter SET etat=:recupEtat WHERE id_newsletter = :idNewsletterRecup");
            $stmt->bindValue(':idNewsletterRecup', $id_newsletter);
            $stmt->bindValue(':recupEtat', "1");
            $stmt->execute();
        } catch (PDOException $e) {
            error_log("Database Error: " . $e->getMessage());
        }
    }


    // Delete la newsletter

    public static function deleteNewsletter($id_newsletter)
    {
        $db = Singleton::getInstance()->getConnection();
        $sql = "DELETE FROM newsletter WHERE id_newsletter = :id_newsletterRecup";
        $requete = $db->prepare($sql);
        $requete->bindParam(':id_newsletterRecup', $id_newsletter, PDO::PARAM_INT);
        $requete->execute();
    }
}
