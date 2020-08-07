<!-- Main Section -->
        <div id="lonon-main">
            <div class="lonon-projects">
               
                <div class="container-fluid">
                     <?php foreach ($blog as $b) {
                ?> 
                    <div class="row">
                        <div class="col-md-12"> <span class="heading-meta style-1">Blog</span>
                            <h2 class="lonon-post-heading animate-box" data-animate-effect="fadeInLeft"><?php echo $b->title; ?></h2> </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 image-content animate-box fadeInLeft animated" data-animate-effect="fadeInLeft"> <img src="<?=base_url()?>assets/uploads/<?=$b->img;?>" class="img-fluid mb-30" alt=""> </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 animate-box fadeInLeft animated" data-animate-effect="fadeInLeft">
                            <p><?php echo $b->desc; ?></p>
                           
                        </div>
                    </div>
                    
                  <?php } ?>  
                </div>
                 
            </div>
           