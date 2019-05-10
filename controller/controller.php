<?php
    require './vue/themeplate/header.php';
function home() {
    require './model/accesdb.php';
    require './model/list-index.php';
    require './vue/list-index.php';
}
function inscription() {
    require './model/accesdb.php';
    require './model/user/inscription.php';
    require './vue/user/inscription.php';
}
function deluser() {
    require './model/accesdb.php';
    require './model/user/deluser.php';
    require './vue/user/gestuser.php';
}
function modifuser() {
    require './model/accesdb.php';
    require './model/user/modifuser.php';
    require './vue/user/modifuser.php';
}
function contact() {
    require './model/accesdb.php';
    require './model/contact/contact.php';
    require './vue/contact/contact.php';
}
function ajoutcontact() {
    require './model/accesdb.php';
    require './model/contact/ajoutcontact.php';
    require './vue/contact/ajoutcontact.php';
}
function detailcontact() {
    require './model/accesdb.php';
    require './model/contact/detailcontact.php';
    require './vue/contact/detailcontact.php';
}
function modifcontact() {
    require './model/accesdb.php';
    require './model/contact/modifcontact.php';
    require './vue/contact/modifcontact.php';
}
function supcontact() {
    require './model/accesdb.php';
    require './model/contact/supcontact.php';
    require './vue/contact/supprimcontact.php';
}
function facture(){
    require './model/accesdb.php';
    require './model/facture/facture.php';
    require './vue/facture/facture.php';
}
function ajoutfacture() {
    require './model/accesdb.php';
    require './model/facture/ajoutfacture.php';
    require './vue/facture/ajoutfacture.php';
}
function detailfacture() {
    require './model/accesdb.php';
    require './model/facture/detailfacture.php';
    require './vue/facture/detailfacture.php';
}
function modiffacture() {
    require './model/accesdb.php';
    require './model/facture/modiffacture.php';
    require './vue/facture/modiffacture.php';
}
function supfacture() {
    require './model/accesdb.php';
    require './model/facture/supfacture.php';
    require './vue/facture/supfacture.php';
}
function societe(){
    require './model/accesdb.php';
    require './model/societe/societe.php';
    require './vue/societe/societe.php';
}
function ajoutsociete() {
    require './model/accesdb.php';
    require './model/societe/add_societe.php';
    require './vue/societe/add_societe.php';
}
function detailsociete() {
    require './model/accesdb.php';
    require './model/societe/detailsociete.php';
    require './vue/societe/detailsociete.php';
}
function modifsociete() {
    require './model/accesdb.php';
    require './model/societe/modifsociete.php';
    require './vue/societe/modifsociete.php';
}
function supsociete() {
    require './model/accesdb.php';
    require './model/societe/supsociete.php';
    require './vue/societe/supsociete.php';
}
function error() {
    echo 'aucune action dans l url';
}
function connexion(){
    $SESSION = 'true';
}
function deconnexion(){
    $SESSION = 'false';
}
require './vue/themeplate/footer.php';
?>