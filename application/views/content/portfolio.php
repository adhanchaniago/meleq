<!-- Main Section -->
        <div id="lonon-main">
            <!-- Projects -->



            <div class="lonon-projects">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12"> <span class="heading-meta style-1">Take a Look at</span>
                            <h2 class="lonon-heading animate-box" data-animate-effect="fadeInLeft">PROJEKKU</h2> </div>
                    </div>


                    <div class="row">

                        <?php foreach ($portfolio as $p): ?>
                        <div class="col-md-4 animate-box" data-animate-effect="fadeInLeft">
                            <a href="<?php echo base_url("data/project_single/$p->id");?>" class="desc">
                                <div class="project"> <img src="<?=base_url()?>assets/uploads/<?=$p->img;?>" class="img-fluid" alt="">
                                    <div class="desc">
                                        <div class="con">
                                            <h3>&nbsp<?php echo $p->title; ?></h3> <span>&nbsp<?php echo $p->teaser; ?></span> </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                       
                       
                       <?php endforeach ?>
                    </div>


                </div>
            </div>
         