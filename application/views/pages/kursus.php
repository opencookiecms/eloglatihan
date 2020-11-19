<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Simple Tables</title>

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
                  <th style="width: 40px">QR Code</th>
                </tr>

                
                <?php for ($i = 1; $i <= $getkursusbyid[0]->hari; $i++) : ?>
                  <tr>
                    <td><?php echo $i ?></td>
    
                  <td><?php echo $getkursusbyid[0]->tajukkursus ?></</td>
                  <td>
                    <?php echo $i ?> hari
                  </td>
                  <td><span class="badge bg-green">90%</span></td>
                  
                  
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
  
          