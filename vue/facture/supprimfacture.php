<h3>Supprimer une facture</h3>
<ul>
<?php while ($donnees = $req->fetch()){?>
<li><a href="supfacture.php?id=<?= $donnees['id'];?>&n_facture=<?= $donnees['n_facture'];?>&date_facture=<?= $donnees['date_facture'];?>"><?= $donnees['n_facture'].' '.$donnees['date_facture'];?></a></li>

<?php
}
?>
</ul>
