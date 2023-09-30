<section class="timeline-section section-padding" id="section_1">
<div class="section-overlay"></div>
                <div class="container">
                    <div class="row">

                        <div class="col-lg-8 col-12 mx-auto">
                            <h1 class="text-white text-center">Register</h1>
                        </div>

                    </div>
                </div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-6 col-12">
                            <div class="custom-block custom-block-overlay">
                                <div class="d-flex flex-column h-100">
                                    <img src="images/businesswoman-using-tablet-analysis.jpg" class="custom-block-image img-fluid" alt="">
                                    <div class="custom-block-overlay-text d-flex">
                                        <div>
                                            <h3 class="text-white mb-2">Enter you information</h3>
                            <form action="<?php echo base_url('register') ?>" method="POST">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group text-white">
                                                    <label for="username">Username</label>
                                                    <input type="text" name="username" class="form-control">
                                                    <small class="text-danger"><?= $validation->getError('username') ?></small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group text-white">
                                                    <label for="password">Password</label>
                                                    <input type="password" name="password" class="form-control">
                                                    <small class="text-danger"><?= $validation->getError('password') ?></small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group text-white">
                                                    <label for="cpassword">Confirm Password</label>
                                                    <input type="password" name="cpassword" class="form-control">
                                                    <small class="text-danger"><?= $validation->getError('cpassword') ?></small>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn custom-btn mt-2 mt-lg-3">Register Now</button>
                                        </div>
                                    </div>
                                    <div class="social-share d-flex">
                                        <p class="text-white me-4">Share:</p>
                                        <ul class="social-icon">
                                            <li class="social-icon-item">
                                                <a href="#" class="social-icon-link bi-twitter"></a>
                                            </li>
                                            <li class="social-icon-item">
                                                <a href="#" class="social-icon-link bi-facebook"></a>
                                            </li>
                                            <li class="social-icon-item">
                                                <a href="#" class="social-icon-link bi-pinterest"></a>
                                            </li>
                                        </ul>
                                        <a href="#" class="custom-icon bi-bookmark ms-auto"></a>
                                    </div>
                            </form>
                                    <div class="section-overlay"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>