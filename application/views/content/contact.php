 <!-- Main Section -->
        <div id="lonon-main">
            <!-- Contact -->
            <div class="lonon-contact">
                <div class="container-fluid">
                  
                    <!-- Map Section-->
                    
            <?php $no=1; 
                foreach ($contact as $row) {
                ?> 

                    <div class="row">
                  

                        <!-- Contact Info -->
                        <div class="col-md-6 mb-30 animate-box" data-animate-effect="fadeInLeft">
                            <h3 class="lonon-about-heading">Contact Info</h3>
                            <p>Qualamy nisl sodales sit amet sapien id, placerat sodales orciter.
                                <br />Vivamus nec magna rhoncus felis, faucibus printy.</p>
                            <p><b>Phone:</b>&nbsp<?php echo $row->phone; ?></p>
                            <p><b>Email:</b> &nbsp<?php echo $row->email; ?></p>
                            <p><b>Address:</b>&nbsp<?php echo $row->address; ?></p>
                        </div>


                       
                        <!-- Contact Form -->
                       <!--  <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
                            <h3 class="lonon-about-heading">How Can I Help You?</h3>
                            <p>We would like to hear from you</p>
                            <form method="post" class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Name" required> </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Email"> </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <textarea name="message" id="message" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-contact" value="Say Hello!"> </div>
                                </div>
                            </form>
                        </div> -->
                    </div>

 <?php } ?>

                </div>
            </div>
           