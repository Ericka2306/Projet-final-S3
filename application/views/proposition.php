                        <center>
                            <h1 class="page-title text-truncate text-dark font-weight-medium mb-1">Liste des propositions</h1>
                        </center>
                        <?php echo form_open('Reponse/verification'); ?>

                <div class="row">
                    <div class="col-12">
                    <?php for ($i=0; $i <count($objet1) ; $i++) { ?>
                        
                        <div class="row">
                            <!-- column -->
                            <div class="col-lg-3 col-md-6">
                                <!-- Card -->
                                <div class="card">
                                    <img class="card-img-top img-fluid" src="<?php echo base_url();?>images/<?php echo $objet1[$i]['titre']; ?>.jpg"
                                        alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="card-title"><?php echo $objet1[$i]['titre'];?></h4>
                                        <dt>Categorie : <?php echo $categorie1[$i]['nom'] ; ?></dt>
                                        <br>

                                        <dd>Description : 
                                        <br><?php echo $objet1[$i]['description'] ; ?></dd>
                                        <br>
	                                    <dt>Prix Estimatif : <?php echo $objet1[$i]['prix'] ; ?></dt>

                                    </div>
                                </div>
                                <!-- Card -->
                            </div>

                            <div class="col-lg-3 col-md-6 img-fluid">
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>

                            <center><p style="font-size: 100px;"><i class="fas fa-exchange-alt" style="height:100px"></i></p></center>
                            </div>
                            <div class="col-lg-3 col-md-6 img-fluid">
                                <!-- Card -->
                                <div class="card">
                                    <img class="card-img-top img-fluid" src="<?php echo base_url();?>images/<?php echo $objet2[$i]['titre']; ?>.jpg"
                                        alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="card-title"><?php echo $objet2[$i]['titre'];?></h4>
                                        <dt>Categorie : <?php echo $categorie2[$i]['nom'] ; ?></dt>
                                        <br>
                                        <dd>Description : 
                                        <br><?php echo $objet2[$i]['description'] ; ?></dd>
                                        <br>
	                                    <dt>Prix Estimatif : <?php echo $objet2[$i]['prix']; ?></dt>

                                    </div>
                                </div>
                                <!-- Card -->
                            </div>
                            
                            <div class="col-lg-3 col-md-6 img-fluid">
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>

                                <div class="card">
                                    <button type="submit" class="btn btn-success" ><i class="fas fa-check"></i>
                                    Accepter</button>
                                    <input type="hidden" name="etat" value="0">
                                    <input type="hidden" name="id_objet1" value="<?php echo $objet1[$i]['id_objet'];?>">
                                    <input type="hidden" name="id_objet2" value="<?php echo $objet2[$i]['id_objet'];?>">

                                </div>
                                <br>
                            <?php echo form_close(); ?>

                            <?php echo form_open('Reponse/verification'); ?>

                                <div class="card">
                                    <button type="submit" class="btn btn-danger">
                                    Refuser</button>
                                    <input type="hidden" name="etat" value="1">
                                    <input type="hidden" name="id_objet1" value="<?php echo $objet1[$i]['id_objet'];?>">
                                    <input type="hidden" name="id_objet2" value="<?php echo $objet2[$i]['id_objet'];?>">
                                </div>
                            </div>
                            <?php echo form_close(); ?>
                            <!-- column --è
                            >
                        </div>
                        <hr>
                    <?php } ?>
                    </div>
                </div>
                <!-- End Row -->
                <!-- Row -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
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
</body>

</html>