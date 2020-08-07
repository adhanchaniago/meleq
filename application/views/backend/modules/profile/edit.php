
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Profile
            <!-- <small>Preview</small> -->
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url("backend/home/index");?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="<?php echo base_url("backend/".$route."/index");?>">All Profile</a></li>
            <li class="active">Edit Profile</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <form role="form" method="POST" enctype="multipart/form-data" action="<?php echo base_url("backend/".$route."/update");?>">
            
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="box box-primary">
                        <!-- <div class="box-header with-border">
              <h3 class="box-title">New Post </h3>
            </div> -->
                        <!-- /.box-header -->
                        <!-- form start -->
                        <?php foreach ($profile as $row) {
                                        ?>
                                        <input id="id" name="id" required="required" type="hidden" value="<?php echo $row->id; ?>"> 
                        <div class="box-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Content</label>
                               
                                 <textarea id="editor2" name="content" rows="10" cols="80">
                                    <?php echo $row->content; ?>
                                </textarea>
                            </div>
                           

                            <div class="form-group">
                                <label class="exampleInputFile">Name</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Enter role name" value="<?php echo $row->name; ?>">
                            </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Profesi</label>
                            <textarea class="form-control" rows="3" name="profesi" id="profesi"><?php echo $row->profesi; ?></textarea>
                            
                        </div>

                             <div class="form-group">
                                <label for="exampleInputEmail1">Image</label>
                                <input type="file" class="form-control" id="image" name="image" >
                                <img class="form-control" style="width: 200px;height: 200px;" src="<?=base_url()?>assets/uploads/<?=$row->img;?>">
                            </div>

                        </div>

                        <div class="box-footer">
                            <a href="<?php echo base_url("backend/".$route."/index")?>" type="button" class="btn btn-default ">Back</a>
                            <button type="submit" class="btn btn-info pull-right">Submit</button>
                        </div>
                        <!-- /.box-body -->

 <?php } ?>

                    </div>
                    <!-- /.box -->

                </div>
                <!--/.col (left) -->
                <!-- right column -->
               
                <!--/.col (right) -->
            </div>
            <!-- /.row -->
        </form>
    </section>

    <!-- /.content -->
</div>

<!-- jQuery 3 -->
<script src="<?php echo base_url(); ?>assets/backend/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Select2 -->
<script src="<?php echo base_url(); ?>assets/backend/bower_components/select2/dist/js/select2.full.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url(); ?>assets/backend/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url(); ?>assets/backend/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>assets/backend/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url(); ?>assets/backend/dist/js/demo.js"></script>
<script src="https://cdn.ckeditor.com/4.12.1/standard/ckeditor.js"></script>
<script type="text/javascript">
    $(document).ready(function() {

        CKEDITOR.replace('editor2')
    //bootstrap WYSIHTML5 - text editor
        $('.textarea').wysihtml5()

       
        
    //Initialize Select2 Elements
    $('.select2').select2()

    });
</script>

