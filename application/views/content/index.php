<!-- Main Section -->
        <div id="lonon-main">
            <!-- About Me -->
            <div class="lonon-about">
                <div class="container-fluid">
                   


                    <div class="row">

                        <?php foreach ($profile as $row): ?>
                            
                        
                        <div class="col-md-5"> <img src="<?=base_url()?>assets/uploads/<?=$row->img;?>" class="img-fluid mb-15 animate-box fadeInLeft animated" data-animate-effect="fadeInLeft" alt=""> </div>
                        <div class="col-md-7 animate-box fadeInLeft animated" data-animate-effect="fadeInLeft"> <span class="heading-meta style-1">Informations</span>

                            <?php endforeach ?>

                            <?php foreach ($profile  as $row): ?>
                            <h3 class="lonon-about-heading">&nbsp<?php echo $row->name; ?></h3>
                            <p> &nbsp<?php echo $row->content; ?></p>
                            

                    <?php endforeach ?>
                    

                            <div class="cardvisit">
                                <?php foreach ($profile as $row): ?>
                                <h3>&nbsp<?php echo $row->name; ?></h3>
                               
                                <span>&nbsp<?php echo $row->profesi; ?></span>
                                 <?php endforeach ?>
                                <div class="divider-line"></div>
                                <?php foreach ($contact as $row): ?>
                                <p><i class="ti-email"></i> &nbsp<?php echo $row->email; ?></p>
                                <p><i class="ti-location-pin"></i>&nbsp<?php echo $row->address; ?></p>
                                <?php endforeach ?>
                            </div>

                            

                        

                        </div>
                    </div>

                </div>
            </div>
            <div class="divider1"></div>
            <!-- Skills -->
            <div class="lonon-skills">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12"> <span class="heading-meta style-1">Abilities</span>
                            <h2 class="lonon-heading animate-box" data-animate-effect="fadeInLeft">My Skills</h2> 
                        </div>
                    </div>
                    <div class="row">
                        
                        <?php foreach ($skill as $key => $s): ?>
                            
                        
                        <div class="col-md-7 animate-box" data-animate-effect="fadeInLeft">
                            <p class="bar-title"><?php echo $s->skill; ?><span class="percent align-right"><?php echo $s->experience; ?></span></p>
                            <div class="bar">
                                <div class="bar-fill bar-fill-developer start"></div>
                            </div>
                            </div>
<?php endforeach ?>
                            <div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="divider1"></div>
            <!-- Testiominals -->
            <div class="lonon-testiominal">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12"> <span class="heading-meta style-1">Say About Us</span>
                            <h2 class="lonon-heading animate-box" data-animate-effect="fadeInLeft">Testimonials</h2> </div>
                    </div>
                    <div class="row">

                        <?php foreach ($testimonials as $t): ?>
                            
                        
                        <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
                            <div class="lonon-quote-card"> <img src="images/quote.png" alt="" class="lonon-quote-2">
                                <p><?php echo $t->comment; ?></p>
                                <h5><strong><?php echo $t->name; ?></strong></h5>
                                <p class="occupation"><?php echo $t->position; ?></p>
                            </div>
                        </div>

                        <?php endforeach ?>
                        
                    </div>
                </div>
            </div>
            <div class="divider1"></div>
            <!-- Clients -->
            <div class="lonon-clients">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12"> <span class="heading-meta style-1">Collaborators</span>
                            <h2 class="lonon-heading animate-box" data-animate-effect="fadeInLeft">Clients</h2> </div>
                    </div>
                    <div class="row">

                        <?php foreach ($client as $c): ?>
                            
                        
                        <div class="col-md-3 animate-box" data-animate-effect="fadeInLeft">
                            <div class="clients"> <img src="<?=base_url()?>assets/uploads/<?=$c->img;?>" class="img-fluid" alt=""> </div>
                        </div>

                        <?php endforeach ?>
                      
                </div>
            </div>
           