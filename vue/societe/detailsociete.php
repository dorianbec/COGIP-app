<div class="container">
  <div class="row">
    	<div class="col-12"><h2 class="text-center">Contact : <?php echo $societeName;?></h2></div>
  </div>
  <div class="row">
	<div class="col-6">
		<section>
			<div class="row">
				<div class="col-12">
						<p><span class="bold">Nom du contact</span> : <?php echo $contact[''];?></p>
						<p><span class="bold">Nom de la société</span> : <?php echo $societeName;?></p>
						<p><span class="bold">Adresse e-mail</span> : <?php echo $contact[''];?></p>
						<p><span class="bold">Tel.</span> : <?php echo $contact[''];?></p>
				</div>
			</div>
		</section>
		<section>
			<h3>Contact pour les factures :</h3>
			<div class="row">
				<div class="col-6">N° de facture</div>
				<div class="col-6">Date</div>
			</div>
			<div class="row">
<?php
while ($fournis = $fournisseur->fetch())
{
?>
				<div class="col-6"></div><div class="col-6"></div>
<?php
};
?>
			</div>
		</section>
	</div>
	<div class="col-6">
	</div>
  </div>
</div>

