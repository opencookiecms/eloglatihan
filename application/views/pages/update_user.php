<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            User
            <small>Daftar User</small>
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
                <h3 class="box-title">Kemaskini Pengguna </h3>


              </div>
              <!-- /.box-header -->
              <!-- form start -->
              <div class="box-body">
              <?php  echo form_open_multipart('', 'class="form-horizontal"'); ?>

                                       <div class="form-group">
                                         <div class="col-md-5">
                                           <label>Nama</label>
                                           <input class="form-control" name="nama" value=" <?php echo $getuser[0]->nama; ?>">
                                           </div>

                                   </div>



                                        <div class="form-group">
                                         <div class="col-md-3">
                                           <label>No Kad Pengenalan</label>
                                           <input class="form-control" placeholder="XXXXX-XX-XXXX" name="nokp" type="text" value=" <?php echo $getuser[0]->nokp; ?>">
                                           </div>
                                       </div>

                                       
                                       <div class="form-group">
                                         <div class="col-md-3">
                                           <label>Gambar</label>
                                           <input class="form-control" placeholder="XXXXX-XX-XXXX" name="file" type="file" accept="image/*">
                                           <input type="hidden" name="hiddenpic" value="<?php echo $getuser[0]->gambar; ?>"/>
                                           <input type="hidden" name="hiddenid" value="<?php echo $getuser[0]->id; ?>"/>
                                           </div>
                                       </div>

                                       <div class="form-group">
                                         <div class="col-md-3">
                                           <label>No Badan</label>
                                           <input class="form-control" placeholder="cth:48366" name="nobadan" type="text" value="<?php echo $getuser[0]->nobadan; ?>">
                                           </div>
                                       </div>

                                       <div class="form-group">
                                         <div class="col-md-3">
                                              <label>Jawatan</label>
                                              <input class="form-control"  name="jawatan" type="text" value="<?php echo $getuser[0]->jawatan; ?>">
                                           </div>
                                           <div class="col-md-2">
                                           <label>Gred Jawatan</label>
                                           <input class="form-control"  type="text" name="gredjawatan" value="<?php echo $getuser[0]->gredjawatan; ?>">

                                       </div>
                                       </div>





                                   <div class="form-group">
                                       <div class="col-md-2">
                                              <label>Unit</label>
                                           <select name="unitsokongan" class="form-control">
                                           <option value="<?php echo $getuser[0]->unitsokongan; ?>"><?php echo $getuser[0]->unitsokongan; ?></option>
                                             <option value="P & P">P & P</option>
                                               <option value="Sokongan 1">Sokongan 1</option>
                                               <option value="Sokongan 2">Sokongan 2</option>


                                           </select>
                                           </div>



                                   </div>

                                           <div class="form-group">
                                       <div class="col-md-2">
                                             <label>Group ( Sila masukkan group untuk tujuan laporan)</label>
                                              <select name="groupUnit" class="form-control">
                                              <option value="<?php echo $getuser[0]->groupUnit; ?>"><?php echo $getuser[0]->groupUnit; ?></option>
                                             <option value="1">P & P</option>
                                               <option value="2">J17 - JA38</option>
                                               <option value="3">N1 - N28</option>
                                               <option value="3">W17 - W28</option>
                                               <option value="4">H11</option>


                                           </select>
                                           </div>



                                   </div>
                                
                                    <div class="box-footer">
                                       <div class="form-group">
                                       <div class="col-md-4">
                                       <button type="submit" class="btn btn-success">Simpan</button>
                                       <button type="reset" class="btn btn-warning">Reset semula</button>
                                  
                                       </div>
                                       </div>
                             
                                     </div>
                                   </form>
                                 </div>


                               </div>
            </div>
        </div>
        <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
</div>