<!-- ============================================================== -->
<!-- Start Page Content -->
<!-- ============================================================== -->
<!-- basic table -->
<h1>Statistique</h1>
    <div class="card-group">
        <div class="card border-right">
            <div class="card-body">
                <div class="d-flex d-lg-flex d-md-block align-items-center">
                    <div>
                        <div class="d-inline-flex align-items-center">
                            <h2 class="text-dark mb-1 font-weight-medium"><?php echo $inscrit ?></h2>
                        </div>
                        <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Membres</h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="card border-right">
            <div class="card-body">
                <div class="d-flex d-lg-flex d-md-block align-items-center">
                    <div>
                        <div class="d-inline-flex align-items-center">
                            <h2 class="text-dark mb-1 font-weight-medium"><?php echo $echange?></h2>
                        </div>
                        <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Echanges Effectuees</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>

<h1 class="card-title">Tous Les Categories</h1>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                
                <br>
                <br>

                <div class="table-responsive">
                    <table id="zero_config" class="table table-striped table-bordered no-wrap">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nom</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php for($i=0 ; $i<count($categorie) ;$i++){ ?>
                                <tr>
                                    <td><?php echo $categorie[$i]['id_categorie'] ?></td>
                                    <td><?php echo $categorie[$i]['nom'] ?></td>
                                    <td>
                                        <a href="<?php echo site_url('Back_Office/modif_categorie?id='.$categorie[$i]['id_categorie'].'&&nom='.$categorie[$i]['nom']) ?>">Modifier</a>
                                    </td>
                                </tr>                                
                            <?php }?>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
<hr>