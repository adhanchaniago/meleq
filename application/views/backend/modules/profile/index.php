
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Profile
        
      </h1> 
    
    </section>
 <!-- Main content -->
    <section class="content container-fluid">
      <div class="row">
        <div class="col-xs-12">
          <div class="box box-success">
            <div class="box-header">
              <h3 class="box-title">Daftar Profile</h3>
               <div class="box-tools pull-right">
                    <a href="<?php echo base_url("backend/".$route."/create");?>" class="btn btn-primary btn-sm btn-flat" >
                          
                          Tambah Data
                    </a>
                 </div>
               
            </div>

            <!-- /.box-header -->
            <div class="box-body">
              <table id="table" class="table table-striped table-bordered table-hover" cellspacing="0" width="100%">
                <thead>
                  <tr>
                      <th class="text-center">NO.</th>
                      <th class="text-center">Name</th>
                      <th class="text-center">Profesi</th>
                      <th class="text-center">Image</th>
                      <th class="text-center">Action</th>
                  </tr>
                </thead>

                <tbody>
                  <?php $no=1; 
                foreach ($profile as $row) {
                ?> 
                <tr>
                  <td class="text-center"><?php echo $no++ ?></td>
                  <td class="text-center"><?php echo $row->name; ?></td>
                  <td class="text-center"><?php echo $row->profesi; ?></td>
                  <td class="text-center"><img style="width: 100px;height: 100px;" src="<?=base_url()?>assets/uploads/<?=$row->img;?>"></td>
                  
                  <td class="text-center" style="width:150px;">
                   <form method="POST" action="<?php echo base_url("backend/".$route."/destroy/$row->id") ?>" accept-charset="UTF-8">
                      <a href="<?php echo base_url("backend/".$route."/edit/$row->id") ?>" class="btn btn-primary btn-sm btn-flat" >
                          Edit
                         </a>
                      <input name="_method" type="hidden" value="DELETE">
                      <input name="_token" type="hidden" value="{{ csrf_token() }}">
                      <input type="submit" class="btn btn-danger btn-sm btn-flat" onclick="return confirm('Anda yakin akan menghapus data ini?');" value="Hapus">

                      </form>
                  </td>     
                </tr> 
              <?php } ?>
              
                 </tbody>
               
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
     </div>
      <!-- /.content-wrapper -->
 

<!-- jQuery 3 -->
<script src="<?php echo base_url(); ?>assets/backend/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url(); ?>assets/backend/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url(); ?>assets/backend/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/backend/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url(); ?>assets/backend/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url(); ?>assets/backend/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>assets/backend/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url(); ?>assets/backend/dist/js/demo.js"></script>
<!-- page script -->
<script>
 $(function () {
    
    $('#table').DataTable()
  })
</script>
    