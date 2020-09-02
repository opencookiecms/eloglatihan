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
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-aqua">
                    <div class="inner">
                        <h3>150</h3>

                        <p>New Orders</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-green">
                    <div class="inner">
                        <h3>53<sup style="font-size: 20px">%</sup></h3>

                        <p>Bounce Rate</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-yellow">
                    <div class="inner">
                        <h3>44</h3>

                        <p>User Registrations</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-red">
                    <div class="inner">
                        <h3>65</h3>

                        <p>Unique Visitors</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-pie-graph"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
            <div class="col-md-12">

                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Senarai Kursus</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Bil</th>
                                    <th>Tajuk Kursus</th>
                                    <th>Tarikh Mula</th>
                                    <th>Tarikh Akhir</th>
                                    <th>Tempat</th>
                                    <th>Tahun</th>
                                    <th>Hari Kursus</th>
                                    <th>Tindakan</th>


                                </tr>
                            </thead>
                            <tbody>
                                <?php $bil=0;?>
                                <?php foreach ($getKursus as $row): $bil++?>

                                <tr>

                                    <td><?php echo $bil ; ?></td>
                                    <td><a
                                            href="kursus?kusId=<?php echo $row->kid ?>"><?php echo $row->tajukkursus ?></a>
                                    </td>
                                    <td><?php echo $row->tmula ?></td>
                                    <td><?php echo $row->takhir ?></td>
                                    <td><?php echo $row->tempat ?></td>
                                    <td><?php echo $row->tahun ?></td>
                                    <td><?php echo $row->hari ?></td>
                                    <td><a href="e_kursus?kusId=<?php echo $row->kid ?>" class="btn btn-primary"><i
                                                class="fa fa-pencil" aria-hidden="true"></i></a>
                                        <a href="kurdel.php?kusId=<?php echo $row->kid ?>" class="btn btn-danger"
                                            role="button" onclick="return confirm('Anda Pasti?');"><i
                                                class="fa fa-trash" aria-hidden="true"></i></a>
                                    </td>


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