<div class="container-fluid">
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Modifier</h4>
                                
                                <?php 
                                if($etat==1){
                                    echo form_open('ControlModif/modifier');
                                }
                                if($etat==0){
                                    echo form_open('ControlModif/inserer');
                                }
                                ?>
                                <div class="card">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="prenametext" value="<?php echo $objet ;?>" name="titre">  
                                        <small id="name" class="form-text text-muted">Nom</small>
                                    </div>
                                </div>
                                    <div class="card">
                                    <div class="form-group mb-4">
                                        <label class="mr-sm-2" for="inlineFormCustomSelect">Categories</label>
                                        <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="categorie">
                                            <?php foreach($categorie as $cat){?>
                                            <option value="<?php echo $cat['id_categorie'] ?>"><?php echo $cat['nom'] ?></option>
                                           
                                            <?php } ?>
                                        </select>
                                    </div>
                                    </div>
                                    <div class="card">
                                    <div class="form-group">
                                    <label class="mr-sm-2" for="inlineFormCustomSelect">Description</label>
                                        <input type="text" class="form-control" id="prenametext" value="<?php echo $description ;?>" name="description">  
                                       
                                    </div>
                                </div>
                                    <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Prix estimatif</h4>
                                        <div class="form-group">
                                            <input type="number" class="form-control" name="prix" value="<?php echo $prix ?>">
                                        </div>
                                    </div>
                                    <div class="card-body">
                                   
                                        <div class="form-group">
                                            <input type="hidden" name="id" value="<?php echo $id; ?>">
                                            <input type="submit" class="form-control " value="modifier">
                                        </div>
                                    </div>
                                    </div>
                                <?php echo form_close(); ?>
                            </div>
                        </div>
                    </div>
</div>