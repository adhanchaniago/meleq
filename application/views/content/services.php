<!-- Main Section -->
        <div id="lonon-main">
            <!-- Services -->
            <div class="lonon-services">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12"> <span class="heading-meta style-1">What We Do</span>
                            <h2 class="lonon-heading animate-box" data-animate-effect="fadeInLeft">Services</h2> </div>
                    </div>
                    <div class="row">
<?php foreach ($services as $s): ?>
    


                        <div class="col-md-4">
                            <div class="lonon-feature animate-box" data-animate-effect="fadeInLeft">
                               <!--  <div class="lonon-icon"> <span class="et-strategy font-35px"></span> </div> -->
                                <div class="lonon-text">
                                    <h3><?php echo $s->title; ?></h3>
                                    <p><?php echo $s->desc; ?></p>
                                </div>
                            </div>
                        </div>

                        <?php endforeach ?>
                        
                        
                    </div>
                
                </div>
            </div>
            <div class="divider1"></div>
            <!--  Pricing -->
            