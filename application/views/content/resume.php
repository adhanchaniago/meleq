<!-- Main Section -->
        <div id="lonon-main">
            <!-- About Me -->
            <div class="lonon-about">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12"> <span class="heading-meta style-1">Resume</span>
                            <h2 class="lonon-heading animate-box" data-animate-effect="fadeInLeft">Tentang Aku</h2> </div>
                    </div>

                    <?php foreach ($profile as $p): ?>
                        
                    
                    <div class="row">
                        <div class="col-md-5"> <img src="<?=base_url()?>assets/uploads/<?=$p->img;?>" class="img-fluid mb-15 animate-box fadeInLeft animated" data-animate-effect="fadeInLeft" alt=""> </div>
                        <div class="col-md-7 animate-box fadeInLeft animated" data-animate-effect="fadeInLeft"> <span class="heading-meta style-1">Resume</span>
                            <h3 class="lonon-about-heading">&nbsp<?php echo $p->profesi; ?></h3>
                            <p>&nbsp<?php echo $p->content; ?></p>
                            <div class="lonon-about-contact-wrap">
                              <!--   <div class="row">
                                    <div class="col-md-6">
                                        <p><b>Birthday:</b> 15 April 1980</p>
                                        <p><b>Website:</b> www.lonon.com</p>
                                        <p><b>Phone:</b> +1 650-123-0000</p>
                                        <p><b>Skype:</b> lonon</p>
                                    </div>
                                    <div class="col-md-6">
                                        <p><b>Degree:</b> Master</p>
                                        <p><b>Mail:</b> dev@lonon.com</p>
                                        <p><b>Freelance:</b> Available</p>
                                        <p><b>Linkedin:</b> lonon</p>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php endforeach ?>

<div>
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

              <!-- Timeline Experience -->
            <div class="lonon-timeline">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12"> <span class="heading-meta style-1">Resume</span>
                            <h2 class="lonon-heading animate-box" data-animate-effect="fadeInLeft">Experience</h2> </div>
                    </div>
                    <div class="row">

                        <?php foreach ($experience as $e ): ?>
                            
                        

                        <div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
                            <div class="timeline lonon-timeline-second-style clearfix">
                                
                                
                                <div class="lonon-timeline-item clearfix">
                                    <div class="left-part">
                                        <h5 class="item-period"><?php echo $e->date ; ?></h5> <span class="item-company">Microsoft</span> </div>
                                    <div class="divider"></div>
                                    <div class="right-part">
                                        <h4 class="item-title"><?php echo $e->position; ?></h4>
                                        <p><?php echo $e->description ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>


                         <?php endforeach ?>
                    </div>
                </div>
            </div>

             <div class="divider1"></div>
            <!-- Timeline Education -->
            <div class="lonon-timeline">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12"> <span class="heading-meta style-1">Resume</span>
                            <h2 class="lonon-heading animate-box" data-animate-effect="fadeInLeft">Education</h2> </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
                            <div class="timeline lonon-timeline-second-style clearfix">
                              


                              <?php foreach ($education as $e): ?>
                                  
                             
                                <div class="lonon-timeline-item clearfix">
                                    <div class="left-part">
                                        <h5 class="item-period"><?php echo $e->date; ?></h5> <span class="item-company">Education</span> </div>
                                    <div class="divider"></div>
                                    <div class="right-part">
                                        <h4 class="item-title"><?php echo $e->school; ?></h4>
                                        <p><?php echo $e->content; ?></p>
                                    </div>
                                </div>

                                 <?php endforeach ?>



                            </div>
                        </div>
                    </div>
                </div>
            </div>





          