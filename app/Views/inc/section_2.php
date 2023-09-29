<!--myproduct-->
<section class="explore-section section-padding" id="section_2">

                <div class="container">
                    <div class="row">

                        <div class="col-12 text-center">
                            <h2 class="mb-4">Product Informations</h1>
                        </div>

                    </div>
                </div>
                <center>
                <div class="container text-center">
                    <div class="row">
                        <div class="col-18">
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="design-tab-pane" role="tabpanel" aria-labelledby="design-tab" tabindex="0">
                                    <div class="row">
                                        <?php foreach($product as $pr): ?>
                                        <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-7">
                                            <div class="custom-block bg-white shadow-lg">
                                                
                                            <img src="<?= "uploads/".$pr['pimage']; ?>" height="100px" width="100px" alt="Image"><br>
                                            <h2 class="mb-2"><?= $pr['pname'] ?></h2>
                                            <h5 class="mb-2">Php &nbsp<?= $pr['pprice'] ?></h5>
                                            <p class="mb-0"><?= $pr['pdescription'] ?></p>
                                            </div>
                                        </div>
                                        <?php endforeach;?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </center>
            </section>
<!--myproduct-->