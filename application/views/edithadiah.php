<!-- <?php 
if (empty($_SESSION['username'])){
  $this->load->view('login');
} else {
  
?>





<html>
<head>
    <meta charset="UTF-8">
    <title>Virtual Reality 360</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <meta name="description" content="Hakko Bio Richard">
    <meta name="keywords" content="Perpus, Website, Aplikasi, Perpustakaan, Online">
    <!-- bootstrap 3.0.2 -->
    <link href="<?php echo config_item('base_url') ?>/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- font Awesome -->
    <link href="<?php echo config_item('base_url') ?>/assets/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="<?php echo config_item('base_url') ?>/assets/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Morris chart -->
    <link href="<?php echo config_item('base_url') ?>/assets/css/morris/morris.css" rel="stylesheet" type="text/css" />
    <!-- jvectormap -->
    <link href="<?php echo config_item('base_url') ?>/assets/css/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
    <!-- Date Picker -->
    <link href="<?php echo config_item('base_url') ?>/assets/css/datepicker/datepicker3.css" rel="stylesheet" type="text/css" />
    <!-- fullCalendar -->
    <!-- <link href="css/fullcalendar/fullcalendar.css" rel="stylesheet" type="text/css" /> -->
    <!-- Daterange picker -->
    <link href="<?php echo config_item('base_url') ?>/assets/css/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
    <!-- iCheck for checkboxes and radio inputs -->
    <link href="<?php echo config_item('base_url') ?>/assets/css/iCheck/all.css" rel="stylesheet" type="text/css" />
    <!-- bootstrap wysihtml5 - text editor -->
    <!-- <link href="css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" /> -->
    <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <!-- Theme style -->
    <link href="<?php echo config_item('base_url') ?>/assets/css/style.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="<?php echo config_item('base_url') ?>/assets/datatable/css/jquery.dataTables.min.css">
<script type="text/javascript" charset="utf8" src="<?php echo config_item('base_url') ?>/assets/datatable/js/jquery.js"></script>
<script type="text/javascript" charset="utf8" src="<?php echo config_item('base_url') ?>/assets/datatable/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
$(document).ready( function () {
    $('#ngoding').DataTable();
} );
</script>


    

              <section class="content">

                    <div class="row">
                        <div class="col-xs-12">
                            <div class="panel">
                                <header class="panel-heading">
                                    <b>Tambahkan Keterangan Hadiah</b>

                                </header>
                                <!-- <div class="box-header"> -->
                                    <!-- <h3 class="box-title">Responsive Hover Table</h3> -->
<?php  foreach($data->result_array() as $i): ?>
                                <!-- </div> -->
                                <div class="panel-body">
                      <form class="form-horizontal style-form" style="margin-top: 20px;" action="<?php echo site_url().'Input/updatehadiah' ?>" method="post" enctype="multipart/form-data" name="form1" id="form1">
                                <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">id</label>
                              <div class="col-sm-8">
                                  <input name="id" type="text" id="id" class="form-control" value="<?php echo $i['id']; ?>" readonly/>
                              </div>
                            </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Nomor Undian</label>
                              <div class="col-sm-8">
                                  <input name="nomor" type="text" id="nomor" class="form-control" value="<?php echo $i['nomor']; ?>"readonly/>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">nama</label>
                              <div class="col-sm-8">
                                  <input name="nama" type="text" id="nama" class="form-control" value="<?php echo $i['nama']; ?>" autofocus="on"  readonly/>
                              </div>
                              <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Keterangan</label>
                              <div class="col-sm-8">
                                  <input name="keterangan" type="text" id="keterangan" class="form-control" value="<?php echo $i['keterangan']; ?>" autofocus="on"  />
                              </div>
                          </div>
                    <?php endforeach;?>       
                        
                          <div class="form-group" style="margin-bottom: 20px;">
                              <label class="col-sm-2 col-sm-2 control-label"></label>
                              <div class="col-sm-8">
                                  <input type="submit" value="Simpan" class="btn btn-sm btn-primary" />&nbsp;
                                  
                              </div>
                          </div>
                          <div style="margin-top: 20px;"></div>
                      </form>
                                </div>
                            </div><!-- /.box -->
                        </div>
                    </div>
              <!-- row end -->
                </section><!-- /.content -->
                </section><!-- /.content -->

                </section><!-- /.content -->
                <div class="footer-main">
                    Copyright &copy <a href="http://sekolah.data.kemdikbud.go.id/index.php/chome/profil/a0a5cd5c-2ef5-e011-97e3-257192bb7c1e" target="_blank">GYP</a> 2019
                </div>
            </aside><!-- /.right-side -->

        </div><!-- ./wrapper -->


       
        <!-- jQuery UI 1.10.3 -->
        <script src="<?php echo config_item('base_url') ?>/assets/js/jquery-ui-1.10.3.min.js" type="text/javascript"></script>
        <!-- Bootstrap -->
        <script src="<?php echo config_item('base_url') ?>/assets/js/bootstrap.min.js" type="text/javascript"></script>
        <!-- daterangepicker -->
        <script src="<?php echo config_item('base_url') ?>/assets/js/plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>

        <script src="<?php echo config_item('base_url') ?>/assets/js/plugins/chart.js" type="text/javascript"></script>

        <!-- datepicker
        <script src="js/plugins/datepicker/bootstrap-datepicker.js" type="text/javascript"></script>-->
        <!-- Bootstrap WYSIHTML5
        <script src="js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>-->
        <!-- iCheck -->
        <script src="<?php echo config_item('base_url') ?>/assets/js/plugins/iCheck/icheck.min.js" type="text/javascript"></script>
        <!-- calendar -->
        <script src="<?php echo config_item('base_url') ?>/assets/js/plugins/fullcalendar/fullcalendar.js" type="text/javascript"></script>

        <!-- Director App -->
        <script src="<?php echo config_item('base_url') ?>/assets/js/Director/app.js" type="text/javascript"></script>

        <!-- Director dashboard demo (This is only for demo purposes) -->
        <script src="<?php echo config_item('base_url') ?>/assets/js/Director/dashboard.js" type="text/javascript"></script>

   
</body>
</html>












<?php } ?>