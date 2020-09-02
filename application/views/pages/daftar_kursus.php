<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Kursus
            <small>Daftar Kursus</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Forms</a></li>
            <li class="active">General Elements</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->

        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
            <div class="col-md-12">

                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Borang Daftar Kursus</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <div class="box-body">
                        <?php  echo form_open_multipart('daftar-kursus', 'class="form-horizontal"'); ?>

                        <div class="form-group">
                            <div class="col-md-5">
                                <label>Tajuk Kursus</label>
                                <input class="form-control" name="tajukkursus">
                            </div>

                        </div>



                        <div class="form-group">
                            <div class="col-md-5">
                                <label>Tempat</label>
                                <textarea class="form-control" placeholder="Tempat kursus" name="tempat"></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-2">
                                <label>Kursus Mula</label>
                                <input class="form-control" name="tmula" type="text" id=date1>
                            </div>
                            <div class="col-md-2">
                                <label>Kursus Tamat</label>
                                <input class="form-control" type="text" name="takhir" id=date2>

                            </div>
                        </div>





                        <div class="form-group">
                            <div class="col-md-2">
                                <label>Kursus Tahun</label>
                                <select name="tahun" class="form-control">
                                    <option value="2017">2020</option>
                                    <option value="2017">2017</option>
                                    <option value="2017">2018</option>
                                    <option value="2017">2019</option>


                                </select>
                            </div>



                        </div>

                        <div class="form-group">
                            <div class="col-md-1">
                                <label>Kursus Hari</label>
                                <input class="form-control" placeholder="hari" type="text" name="hari">
                            </div>



                        </div>

                        <div class="box-footer">
                            <div class="form-group">
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-success">Simpan</button>
                                    <button type="reset" class="btn btn-warning">Reset semula</button>

                                </div>
                            </div>

                            </form>
                        </div>


                    </div>
                    <!-- /.box -->
                </div>
            </div>
        </div>
        <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
</div>