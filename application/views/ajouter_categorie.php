
<h1>Ajouter Une Nouvelle Categorie</h1>

<br>
<br>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <?php echo form_open('Back_Office/ajouter') ?>
                    <div class="form-group">
                        <h6 class="card-title">Nom de la Categorie</h6>
                        <input type="text" class="form-control" id="nametext" aria-describedby="name"
                               placeholder="Nom" name="nom">
                        <input type="submit" class="form-control" id="nametext" aria-describedby="name"
                              value="Ajouter">

                    </div>
                <?php echo form_close(); ?>
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
