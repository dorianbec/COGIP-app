<?php
require('./controller/controller.php');
if(isset($_GET['action'])) {
    $action = $_GET['action'];
    if($action == 'connexion'){
        connexion();
    }
    if($action == 'deconnexion'){
        deconnexion();
    }
}
if(isset($_GET['page'])) {
    $page = $_GET['page'];
    if($page == 'user') {
        if(isset($_GET['action'])) {
            $action = $_GET['action'];
            if($action == 'inscription') {
                inscription();
            } 
            if($action == 'deluser') {
                deluser();
            }
            if($action == 'modifuser') {
                modifuser();
            }
        }
        else {
            deluser();
        }
    }
    if($page == 'contact') {
        if(isset($_GET['action'])) {
            $action = $_GET['action'];
            if($action == 'ajoutcontact') {
                ajoutcontact();
            }
            if($action == 'detailcontact') {
                detailcontact();
            }
            if($action == 'modifcontact') {
                modifcontact();
            }
            if($action == 'supcontact') {
                supcontact();
            }
        }
        else {
            contact();
        }
    }
    if($page == 'facture') {
        if(isset($_GET['action'])) {
            $action = $_GET['action'];
            if($action == 'ajoutfacture') {
                ajoutfacture();
            }
            if($action == 'detailfacture') {
                detailfacture();
            }
            if($action == 'modiffacture') {
                modiffacture();
            }
            if($action == 'supfacture') {
                supfacture();
            }
        }
        else {
            facture();
        }
    }
    if($page == 'societe') {
        if(isset($_GET['action'])) {
            $action = $_GET['action'];
            if($action == 'ajoutsociete') {
                ajoutsociete();
            }
            if($action == 'detailsociete') {
                detailsociete();
            }
            if($action == 'modifsociete') {
                modifsociete();
            }
            if($action == 'supsociete') {
                supsociete();
            }
        }
        else {
            societe();
        }
    }
} else {
    home();
}
?>