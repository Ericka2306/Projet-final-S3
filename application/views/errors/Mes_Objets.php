<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url() ; ?>assets/images/favicon.png">
    <title>Adminmart Template - The Ultimate Multipurpose admin template</title>
    <!-- Custom CSS -->
    <link href=" <?php echo base_url() ; ?>/assets/extra-libs/c3/c3.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ; ?>assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ; ?>assets/extra-libs/jvector/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
    <!-- Custom CSS -->
    <link href="<?php echo base_url() ; ?>dist/css/style.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
<div>
<div class="row">
        <div class="container-fluid">
                    <div class="col-12">
                        <!-- Row -->
                        <div class="row">
                            <!-- column -->
                            <?php 
                           
                            
                                foreach($objet as $obj){ ?>
                                   
                            
                            <div class="col-lg-3 col-md-6">
                                <!-- Card -->
                                <div class="card">
                                    <img class="card-img-top img-fluid" src="<?php echo $obj['image']; ?>.jpg"
                                        alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="card-title"><?php echo $obj['titre'] ; ?></h4>
                                        <p class="card-text"><?php echo $obj['description'] ; ?></p>
                                        <p class="card-text"><?php echo $obj['prix'] ; ?></p>
                                        <a href="<?php echo site_url('Control_Mes_Objets/modifier?etat=1 && idobjet='.$obj['id_objet']) ?>" class="btn btn-primary">Modifier</a>
                                        <a href="<?php echo site_url('ControlModif/supprimer?idobjet='.$obj['id_objet']) ?>" class="btn btn-primary">Supprimer</a>
                                    </div>
                                </div>
                                <!-- Card -->
                            </div>

                            <?php } ?>
                            <!-- column -->
                            <!-- column -->
                            <div class="col-lg-3 col-md-6">
                                <!-- Card -->
                                <div class="card">
                                    <div class="card-body">
                                        <a href="<?php echo site_url('Control_Mes_Objets/modifier?etat=0') ?>" class="btn btn-primary">Ajouter produit</a>
                                    </div>
                                </div>
                                <!-- Card -->
                            </div>
                        <!-- Row -->
                    </div>
                </div>
        </div>           
    </div>
</div>
<script src="<?php echo base_url() ; ?>assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="<?php echo base_url() ; ?>assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="<?php echo base_url() ; ?>assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- apps -->
    <!-- apps -->
    <script src="<?php echo base_url() ; ?>dist/js/app-style-switcher.js"></script>
    <script src="<?php echo base_url() ; ?>dist/js/feather.min.js"></script>
    <script src="<?php echo base_url() ; ?>assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="<?php echo base_url() ; ?>dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="<?php echo base_url() ; ?>dist/js/custom.min.js"></script>
    <!--This page JavaScript -->
    <script src="<?php echo base_url() ; ?>assets/extra-libs/c3/d3.min.js"></script>
    <script src="<?php echo base_url() ; ?>assets/extra-libs/c3/c3.min.js"></script>
    <script src="<?php echo base_url() ; ?>assets/libs/chartist/dist/chartist.min.js"></script>
    <script src="<?php echo base_url() ; ?>assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
    <script src="<?php echo base_url() ; ?>assets/extra-libs/jvector/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="<?php echo base_url() ; ?>assets/extra-libs/jvector/jquery-jvectormap-world-mill-en.js"></script>
    <script src="<?php echo base_url() ; ?>dist/js/pages/dashboards/dashboard1.min.js"></script>
</body>
</html>