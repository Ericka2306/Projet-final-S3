<h1>Detail Produit : </h1>
<br>
<br>

	 <div class="row">
	        <div class="col-12">
	            <div class="card">
	                <div class="card-body">
	                    <div class="row">
	                    	<div class="col-lg-5">
                                <center>
                                <img src="<?php echo base_url();?>/images/<?php echo $titre ?>.jpg" height="200px">
                                </center>
	                            <h2 class="card-title"><dt><?php echo $titre ; ?></dt></h2>
	                            <br>
	                            <dl>
	                                <dt>Proprietaire Actuel: </dt>
                                    <dd><?php echo $nom_utilisateur ; ?></dd>
                                    
	                                <dt>Categorie : </dt>
                                    <dd><?php echo $nom_categorie ; ?></dd>
                                    
	                                <dt>Description : </dt>
                                    <dd><?php echo $description ; ?></dd>
                                    
	                                <dt>Prix Estimatif : </dt>
                                    <dd><?php echo $prix ; ?></dd>
	                                
	                            </dl>
	                            
	                        
	                        </div>
	                        <div class="col-lg-2"></div>
	                        <div class="col-lg-5">
	                        	<br>
	                        	<br>
	                        	<br>
	                        	<br>
	                        	<br>
	                        	<br>
	                        	<br>
	                        	<br>

	                            <h2 class="card-title"><dt>Liste Des Anciens Proprietaire</dt></h2>
	                            <br>
	                            <dl>
	                                <dt>Proprietaire : </dt>
	                                <br>
	                                <?php for($i=0 ; $i<count($proprietaire) ;$i++) { ?>
	                                	<dd><?php echo $proprietaire[$i]['nom'] ?> jusqu'au <?php echo $proprietaire[$i]['date'] ?></dd>
	                                <?php } ?>                                    
	                            </dl>	
	                        
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	<script src="<?php echo base_url();?>assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?php echo base_url();?>assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="<?php echo base_url();?>assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- apps -->
    <!-- apps -->
    <script src="<?php echo base_url();?>dist/js/app-style-switcher.js"></script>
    <script src="<?php echo base_url();?>dist/js/feather.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="<?php echo base_url();?>assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <!-- themejs -->
    <!--Menu sidebar -->
    <script src="<?php echo base_url();?>dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="<?php echo base_url();?>dist/js/custom.min.js"></script>
    <!-- This Page JS -->
    <script src="<?php echo base_url();?>assets/extra-libs/prism/prism.js"></script>
    <hr>
    