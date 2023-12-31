<section class="timeline-section section-padding" id="register">
<div class="section-overlay"></div>
                <div class="container">
                    <div class="row">

                        <div class="col-lg-8 col-12 mx-auto">
                            <h1 class="text-white text-center">Register</h1>
                        </div>
                    </div>
                </div>
<?php if(isset($validation)): ?>
    <div class="alert alert-warning">
<?= $validation->listErrors() ?>
    </div>
<?php endif; ?>

<form action="<?php echo base_url();?>/Home/register" method="post">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-6 col-12">
                            <div class="custom-block custom-block-overlay">
                                <div class="d-flex flex-column h-100">
                                    <img src="images/businesswoman-using-tablet-analysis.jpg" class="custom-block-image img-fluid" alt="">
                                    <div class="custom-block-overlay-text d-flex">
                                        <div>
                                            <h3 class="text-white mb-2">Enter you information</h3>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group text-white">
                                                    <label for="username">Username</label>
                                                    <input type="text" name="username" placeholder="username" value="<?=set_value('username')?>" class="form-control">
                                                    </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group text-white">
                                                    <label for="email">Email</label>
                                                    <input type="email" name="email" placeholder="email" value="<?=set_value('email')?>" class="form-control">
                                                    </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group text-white">
                                                    <label for="password">Password</label>
                                                    <input type="password" name="password" placeholder="Password"  class="form-control">
                                                     </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group text-white">
                                                    <label for="confirmpassword">Confirm Password</label>
                                                    <input type="password" name="confirmpassword" placeholder="Confirm Password" class="form-control">
                                                    </div>
                                                    <a type="submit" href="/index"  class="btn custom-btn mt-2 mt-lg-3">Signup</a>
                                            </div>
                                        </div>
                                        
                                        </div>
                                    </div>
                                    <div class="social-share d-flex">
                                        
                                        <a href="#" class="custom-icon bi-bookmark ms-auto"></a>
                                    </div>
                            </form>
                                    <div class="section-overlay"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </form>
            </section>