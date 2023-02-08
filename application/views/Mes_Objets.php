<?php if($echange==0) { ?>
    <h1>Listes de mes objets</h1>
<?php }else{ ?>
    <h1>Echanger Avec :</h1>
<?php } ?>
<br>
<br>

<div class="row">
        <div class="container-fluid">
                    <div class="col-12">
                        <!-- Row -->
                        <div class="row">
                            <!-- column -->
                            <?php  foreach($objet as $obj){ ?>
                                   
                            <div class="col-lg-3 col-md-6">
                                <!-- Card -->
                                <div class="card">
                                    <img class="card-img-top img-fluid" src="<?php echo base_url()?>/images/<?php echo $obj['image']; ?>.jpg"
                                        alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="card-title"><?php echo $obj['titre'] ; ?></h4>
                                        <p class="card-text"><?php echo $obj['description'] ; ?></p>
                                        <p class="card-text"><?php echo $obj['prix'] ; ?></p>
                                        <?php if($echange==0) { ?>
                                            <a href="<?php echo site_url('Control_Mes_Objets/modifier?etat=1 && idobjet='.$obj['id_objet']) ?>" class="btn btn-primary">Modifier</a>
                                            <a href="<?php echo site_url('ControlModif/supprimer?idobjet='.$obj['id_objet']) ?>" class="btn btn-primary">Supprimer</a>
                                            <a href="<?php echo site_url('Options/plusOuMoins/20/'.$obj['id_objet']) ?>">20%</a>
                                            <a href="<?php echo site_url('Options/plusOuMoins/10/'.$obj['id_objet']) ?>">10%</a>
                                        <?php }else{ ?>
                                            <a href="<?php echo site_url('Options/echanger/'.$obj['id_objet'].'/'.$id_objet2) ?>" class="btn btn-primary">Echanger</a>
                                        <?php } ?>
                                    </div>
                                </div>
                                <!-- Card -->
                            </div>

                            <?php } ?>

                            <div class="col-lg-3 col-md-6">
                                <!-- Card -->
                                <div class="card">
                                    <div class="card-body">
                                        <a href="<?php echo site_url('Control_Mes_Objets/modifier?etat=0') ?>" class="btn btn-primary">Ajouter produit</a>
                                    </div>
                                </div>
                                <!-- Card -->
                            </div>
                            <!-- column -->
                            <!-- column -->
                            
                        <!-- Row -->
                    </div>
                </div>
        </div>           
    </div>
    <hr>
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