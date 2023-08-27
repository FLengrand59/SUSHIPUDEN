<?php

require_once  "../../model/Singleton.class.php";

/**
 * Class Management
 */
class Management
{

    // READ FONCTION //////

    /* Affichage des message reçus dans le back-office */

    // public static function readContacts()
    // {
    //     try {
    //         $db = Singleton::getInstance()->getConnection();
    //         $sql = "SELECT * FROM `contact`";
    //         $requete = $db->prepare($sql);
    //         $requete->execute();
    //         $result = $requete->fetchAll(PDO::FETCH_ASSOC);

    //         return $result;
    //     } catch (PDOException $e) {
    //         echo 'Erreur de requête : ' . $e->getMessage();
    //         return []; 
    //     }
    // }

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


    // AFFICHAGE D'UNE RESERVATION
    public static function readReservation()
    {
        try {
            $db = Singleton::getInstance()->getConnection();
            $sql = "SELECT * FROM Reservation";
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
    public static function updateReservation($reservationId, $nouveauService) {
        try {
            $db = Singleton::getInstance()->getConnection();
            $sql = "UPDATE reservation SET service = :nouveauService WHERE id = :reservationId";
            $requete = $db->prepare($sql);
            $requete->bindParam(':nouveauService', $nouveauService, PDO::PARAM_STR);
            $requete->bindParam(':reservationId', $reservationId, PDO::PARAM_INT);
            $requete->execute();
            
            $rowCount = $requete->rowCount();
    
            return $rowCount;
        } catch (PDOException $e) {
            echo 'Erreur de requête : ' . $e->getMessage();
            return 0;
        }
    }


    // AFFICHAGE DANS CONTACT

    public static function readFormContact()
    {
        try {
            $db = Singleton::getInstance()->getConnection();
            $sql = "SELECT * FROM Contact";
            $requete = $db->prepare($sql);
            $requete->execute();
            $result = $requete->fetchAll(PDO::FETCH_ASSOC);

            return $result;
        } catch (PDOException $e) {
            echo 'Erreur de requête : ' . $e->getMessage();
            return [];
        }
    }


// Affichage de la Newsletter


    public static function readNewsletter()
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