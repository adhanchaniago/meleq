  <!-- Main Section -->
        <div id="lonon-main">
            <div class="lonon-projects">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12"> <span class="heading-meta style-1">Portfolio</span>
                            <h2 class="lonon-heading animate-box" data-animate-effect="fadeInLeft">Project Single</h2> </div>
                    </div>

                    <?php foreach ($project as $key): ?>
                        
                    <?php endforeach ?>
                    <div class="row">
                        <div class="col-md-7 image-content animate-box fadeInLeft animated" data-animate-effect="fadeInLeft"> <img class="img-fluid mb-30" src="<?=base_url()?>assets/uploads/<?=$key->img;?>" alt=""> <!-- <img class="img-fluid mb-30" src="images/portfolio/01.jpg" alt="">  --></div>
                        <div class="col-md-5 sticky-parent animate-box fadeInLeft animated" data-animate-effect="fadeInLeft">
                            <div id="sticky_item">
                                <div class="project-desc">
                                    <h2><?php echo $key->title;?></h2>
                                    <p><?php echo $key->content ;?></p>
                                   
                        </div>
                    </div>
                </div>
            </div>
           