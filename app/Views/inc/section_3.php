<!--info1-->
<section class="timeline-section section-padding" id="section_3">
                <div class="section-overlay"></div>

                <div class="container">
                    <div class="row">

                        <div class="col-12 text-center">
                            <h2 class="text-white mb-4">Enter Product Info</h1>
                        </div>
        <form action="/save" method="post">
                        <div class="col-lg-10 col-12 mx-auto">
                            <div class="timeline-container">
                                <ul class="vertical-scrollable-timeline" id="vertical-scrollable-timeline">
                                    <div class="list-progress">
                                        <div class="inner"></div>
                                    </div>

                                        <input type="hidden" name="id" value="">
                                    <li>
                                        <h4 class="text-white mb-3">Product Name</h4>
                                        <input type="text" name="pname" value="" placeholder="Product Name">
                                        <div class="icon-holder">
                                          <i class="bi-book"></i>
                                        </div>
                                    </li>
                                    
                                    <li>
                                        <h4 class="text-white mb-3">Product Price</h4>
                                        <input type="text" name="pprice" value="" placeholder="Product Price">
                                        <div class="icon-holder">
                                          <i class="bi-search"></i>
                                        </div>
                                    </li>

                                    <li>
                                        <h4 class="text-white mb-3">Product Description</h4>
                                        <input type="text" name="pdescription" value="" placeholder="Product Description">
                                        <div class="icon-holder">
                                          <i class="bi-bookmark"></i>
                                        </div>
                                    </li>

                                    <li>
                                        <h4 class="text-white mb-3">Image</h4>
                                        <input type="file" name="pimage" id="pimage" accept=".jpeg, .jpg, .png" value="">
                                        <div class="icon-holder">
                                          <i class="bi-image"></i>
                                        </div>
                                    </li>

                                </ul>
                            </div>
                        </div>

                        <div class="col-12 text-center mt-5">
                            <p class="text-white">
                                Want to add Info?
                                <button name="submit" class="btn custom-btn custom-border-btn ms-3" value="save">Save Product Info</button>
                            </p>
                        </div>
        </form>                
                    </div>
                </div>
            </section>
<!--info1-->