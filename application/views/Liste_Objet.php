<h1>Recherche</h1>
<br>
<?php echo form_open('Recherche/resultatRecherche') ?>
    <div class="row">
        <div class="col-md-5">
            <div class="form-group">
                <select name="id_categorie" class="form-control" id="nametext">
                    <?php $j=0; ?>
                        <?php foreach($categorie as $c){ ?>
                        <option value="<?php echo $c['id_categorie'] ; ?>"><?php echo $c['nom'] ; ?></option>
                        <?php $j++; } ?>

                </select>
            </div>
        </div>
        
        <div class="col-md-5">
            <div class="form-group">
                <input type="text" class="form-control" name="titre" placeholder="Titre">
            </div>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-outline-info float-right">Rechercher</button>
        </div>
    </div>
<?php echo form_close(); ?> 
<br>
<br>

<h1>Listes Des Objets</h1>
<br>
<br>
<div class="row">
        <div class="container-fluid">
                    <div class="col-12">
                        <!-- Row -->
                        <div class="row">
                            <!-- column -->
                            <?php $i=0; ?>
                            <?php foreach($objet as $obj){ ?>
                            
                                <div class="col-lg-3 col-md-6">
                                    <!-- Card -->
                                    <div class="card">
                                        <img class="card-img-top img-fluid" src="<?php echo base_url()?>/images/<?php echo $obj['image']; ?>.jpg"
                                            alt="" >
                                        <div class="card-body">
                                            <h4 class="card-title"><?php echo $obj['titre'] ; ?></h4>
                                            <p class="card-text"><?php echo $obj['prix'] ; ?>$ </p>
                                            <p> 
                                                <?php if(isset($pm[$i]) && $pm[$i]>=0){ ?>
                                                    +<?php echo $pm[$i] ?> %
                                                <?php } ?>
                                                <?php if(isset($pm[$i]) && $pm[$i]<0){ ?>
                                                    <?php echo $pm[$i] ?> %
                                                <?php } ?>
                                            </p>
                                            
                                            <a class="btn btn-primary" href="<?php echo site_url('Details/GetDetail/'.$obj['id_objet']) ?>">
                                                Voir Details
                                            </a>
                                            <?php if(!isset($id_objet)){ ?>
                                                <a href="<?php echo site_url('Options/mes_objets/'.$obj['id_objet']) ?>" class="btn btn-primary">Echanger</a>
                                            <?php }else{?>
                                                <a href="<?php echo site_url('Options/echanger/'.$id_objet.'/'.$obj['id_objet']) ?>" class="btn btn-primary">Echanger</a>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <!-- Card -->
                                </div>

                            <?php $i++; } ?>
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
    <hr>
    