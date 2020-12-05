

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Kursus
          <small>Senarai Nama Individu</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li><a href="#">Tables</a></li>
          <li class="active">Data tables</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-xs-12">
            <div class="box">
              <div class="box-header">

                <style type="text/css">
                .tg  {border-collapse:collapse;border-spacing:0;border-color:#999;border:none;}
                .tg td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:0px;overflow:hidden;word-break:normal;border-color:#999;color:#444;background-color:#F7FDFA;}
                .tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:0px;overflow:hidden;word-break:normal;border-color:#999;color:#fff;background-color:#26ADE4;}
                .tg .tg-ox40{font-weight:bold;font-size:12px;vertical-align:top}
                .tg .tg-k6pi{font-size:12px}
                .tg .tg-dx8v{font-size:12px;vertical-align:top}
                .tg .tg-3sk9{font-weight:bold;font-size:12px}
                </style>

                <table class="tg">
                  <tr>
                    <td class="tg-ox40">Tajuk Kursus<br></td>
                    <td colspan="3" class="tg-k6pi"><?php echo $getK[0]->tajukkursus ?></td>
                  </tr>
                  <tr>
                    <td class="tg-3sk9">Tarikh Mula<br></td>
                    <td class="tg-k6pi"></td>
                    <td class="tg-ox40">Tarikh Akhir<br></td>
                    <td class="tg-k6pi"><td>
                  </tr>
                  <tr>
                    <td class="tg-3sk9">Tempat</td>
                    <td colspan="3" class="tg-k6pi"></td>
                  </tr>
                  <tr>
                    <td class="tg-ox40">Tahun</td>
                    <td class="tg-dx8v"></td>
                    <td class="tg-ox40">Hari</td>
                    <td class="tg-dx8v">td>
                  </tr>
                </table>
                <br>



              </div>
              <!-- /.box-header -->
              <div class="box-body">
              <?php echo form_open('kursus/add_user/'.$getK[0]->kid); ?>
            
              <input type=text= name='hiddenid' value="<?php echo $getK[0]->kid ?>"/>
                  <table width="100%" class="table table-striped table-bordered table-hover" id="example1">
                    <thead>
            
                      <tr>
                        <th>Bil</th>
                        <th>gambar</th>
                        <th>Nama Peserta</th>
                        <th>No Badan</th>
                        <th>Jawatan</th>
                        <th>No/KP</th>
                        <th>Kehadiran</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php $bil=0;?>
                    <?php foreach ($getU as $row): $bil++?>
                      <tr class="odd gradeX">
                    

                        <td><?php echo $bil ?></td>
                        <td><img src="" alt=""></td>
                        <td><?php echo $row->nama ?></td>
                        <td><?php echo $row->nobadan ?></</td>
                        <td><?php echo $row->jawatan ?></td>
                        <td><?php echo $row->nokp ?></td>
                        <td><input type='checkbox' name='cuser[<?php echo $bil ?>]' value='<?php echo $row->id ?>'><?php echo $row->id ?></td>
                        <?php endforeach; ?>
                    </tr>
                  </tbody>

                </table>

                <input type="submit" name="submit" value="Kemaskini"/>
                <!-- /.table-responsive -->
              </form>


            </div>
            <!-- /.panel-body -->
            <!--modal section-->

            <!-- /.col -->
          </div>
          <!-- /.row -->
        </section>
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->
