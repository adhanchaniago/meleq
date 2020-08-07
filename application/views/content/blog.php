<!-- Main Section -->
        <div id="lonon-main">
            <!-- Blog -->
            <div class="lonon-blog">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12"> <span class="heading-meta style-1">Read</span>
                            <h2 class="lonon-heading animate-box" data-animate-effect="fadeInLeft">Blog</h2> </div>
                    </div>
                   
                    <div class="row">
                         <?php foreach ($blog as $b): ?>
                        <div class="col-md-6 col-sm-6">
                            <div class="blog-entry animate-box" data-animate-effect="fadeInLeft">
                                <a href="<?php echo base_url("data/post/$b->id");?>" class="blog-img"><img src="<?=base_url()?>assets/uploads/<?=$b->img;?>" class="img-fluid" alt=""></a>
                                <div class="desc"> <span>Sep 27, 2019 | Brand Identity</span>
                                    <h3><a href="<?php echo base_url("data/post/$b->id");?>"><?php echo $b->title; ?></a></h3>
                                    <p><?php echo $b->desc; ?></p>
                                </div>
                            </div>
                            
                        </div>

                         <?php endforeach ?>
                    </div>
                </div>
            </div>
            