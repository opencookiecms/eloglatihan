  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Kursus
        <small>cetak qrcode</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Simple</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Senari kursus serta QR Code</h3>

            

            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
                <tr>
                  <th style="width: 10px">#</th>
                  <th>Tajuk Kursus</th>
                  <th>Hari</th>
                  <th style="width: 100px">QR Code</th>
                </tr>

             
                <?php for ($i = 1; $i <= $getkursusbyid[0]->hari; $i++) : ?>
                
                  <tr>
                    <td><?php echo $i ?></td>
    
                  <td><?php echo $getkursusbyid[0]->tajukkursus ?></</td>
                  <td>
                    <?php echo $i ?> hari
                  </td>
                  <td>
                  <a href="<?php echo site_url('kursus/qrgenerate/'.$getkursusbyid[0]->kid.'/'.$i) ?>" class="btn btn-info"
                                            role="button" onclick="return confirm('Anda Pasti?');"><i
                                                class="fa fa-qrcode" aria-hidden="true"></i></a>

                  <a href="fg">dddd</a>
                          
                  </td>
                </tr>
                <?php endfor; ?>
              

              
          
              </table>
            </div>
            <!-- /.box-body -->
     
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->

        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
  </div>
  
          