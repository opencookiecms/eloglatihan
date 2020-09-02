<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Dashboard
            <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
     
 
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
            <div class="col-md-12">

                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Senarai Nama</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                <th>Bil</th>
                                       <th>Nama</th>
                                       <th>No Badan</th>
                                       <th>Jawatan</th>
                                       <th>Gred Jawatan</th>
                                       <th>Unit</th>
                                     <th>Kehadiran</th>
                                       <th>Tindakan</th>


                                </tr>
                            </thead>
                            <tbody>
                                <?php $bil=0;?>
                                <?php foreach ($getU as $row): $bil++?>

                                <tr>
                                <td><?php echo $bil ?></td>
                                <td><?php echo $row->nama ?></td>
                                 <td><?php echo $row->nobadan ?></td>
                                 <td><?php echo $row->jawatan ?></td>
                                 <td><?php echo $row->gredjawatan ?></td>
                                 <td><<?php echo $row->unitsokongan ?></td>

                                 <td>0</td>
                                 <td><a href="l_individu.php?usrIcNo=<?php echo $row->nobadan ?>" class="btn btn-success"><i class="fa fa-list" aria-hidden="true"></i>
</a> <a href="e_user.php?usrId=<?php echo $row->nobadan ?>" class="btn btn-primary"><i class="fa fa-pencil" aria-hidden="true"></i>
</a> <a href="daftarrem.php?usrId=<?php echo $row->nobadan ?>" class="btn btn-danger" role="button" onclick="return confirm('Anda Pasti?');"><i class="fa fa-trash" aria-hidden="true"></i>
</a></td>


                                </tr>
                                <?php endforeach; ?>




                            </tbody>

                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
            </div>
        </div>
        <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
</div>