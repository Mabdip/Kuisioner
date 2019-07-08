                   
            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <div class="page-content" style="height: 88%;">
                    <h1 class="page-title"> Selamat Datang <?php echo $this->session->userdata('nama'); ?>
                        <!-- <small>statistics, charts, recent events and reports</small> -->
                    </h1>
                    <div class="page-bar">
                        <ul class="page-breadcrumb">
                            <li>
                                <i class="icon-home"></i>
                                <a href="index.html">Home</a>
                                <i class="fa fa-angle-right"></i>
                            </li>
                            <li>
                                <span>List Alumni</span>
                            </li>
                        </ul>
                    </div>
                    <!-- END PAGE HEADER-->
                
                  <!--   <div class="row">
                        <div class="col-md-6" style="background-color:white; margin-left: 10px;">
                            <div class="portlet light ">
                                <div class="portlet-title">
                                    <div class="caption">
                                       HIIII
                                    </div>

                                <div class="portlet-body">
                                    <div id="dashboard_amchart_1" class="CSSAnimationChart"></div>
                                </div>
                            </div>
                        </div>
                       
                    </div> -->
                    
                    <div class="row">
                        <div class="col-md-12">
                            <div class="portlet light">
                                <bold><h4>List Data Alumni</h4></bold>
                                <br>
                                <table id="aaaa" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th width="5%">No</th>
                <th width="60%">Nama</th>
                <th width="15%">Status</th>
                <th width="15%">Tahun Lulus</th>
                <th width="5%">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $i=1; foreach ($alumni as $data) { ?>
                <tr>
                    <td><?= $i++ ?></td>
                    <td><?= $data->nama ?></td>
                    <td><?php if($data->status=='SB') echo 'Sudah Bekerja'; else { echo 'Belum Bekerja'; } ?></td>
                    <td><?= $data->tahun_lulus ?></td>
                    <td><button class="btn btn-sm btn-info" data-toggle="modal" data-target="#editmodal"
                        data-nama="<?= $data->nama ?>"
                        data-email="<?= $data->email ?>"
                        data-status="<?php if($data->status=='SB') echo 'Sudah Bekerja'; else { echo 'Belum Bekerja'; } ?>"
                        data-username="<?= $data->username ?>"
                        data-password="<?= $data->password ?>"
                        data-tahun_lulus="<?= $data->tahun_lulus ?>"
                        data-nama_perusahaan="<?= $data->nama_perusahaan ?>"
                        data-alamat_perusahaan="<?= $data->alamat_perusahaan ?>"
                        data-foto="<?= base_url('uploads/').$data->foto.'.jpg' ?>"
                        >
                        <i class="fa fa-eye"></i>

                    </button></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>             
                            </div>
                        </div>
                    </div>
                        
                    
                </div>
            </div>
            <!-- END QUICK SIDEBAR -->
        </div>
        <!-- END CONTAINER -->
        <div id="editmodal" tabindex="-1" class="modal" role="dialog">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Lihat Data</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">X</span></button>
              </div>
              <form action="#" class="form">
              <div class="modal-body">        
                  <center><img class="app-sidebar__rute-avatar" height="150" width="150" id="foto"></center>
                  <br>
                  
                  <input class="form-control" type="text" id="nama" name="nama" placeholder="nama">
                  <input class="form-control" type="text" id="email" name="email" placeholder="email">
                  <input class="form-control" type="text" id="username" name="username" placeholder="username">
                  <input class="form-control" type="text" id="password" name="password" placeholder="password">
                  
                  <input class="form-control" type="text" id="tahun_lulus" name="tahun_lulus" placeholder="tahun_lulus">
                  <input class="form-control" type="text" id="status" name="status" placeholder="status">
                  <input class="form-control" type="text" id="nama_perusahaan" name="nama_perusahaan" placeholder="nama_perusahaan">
                  <input class="form-control" type="text" id="alamat_perusahaan" name="alamat_perusahaan" placeholder="alamat_perusahaan">
                      
              </div>
              <div class="modal-footer">
                <input class="btn btn-primary" type="submit" value="save">
                <input class="btn btn-secondary" type="reset" value="close" data-dismiss="modal">
              </div>
              </form>
            </div>
          </div>
        </div>
        <script type="text/javascript">
           $(document).ready(function(){
                $('#aaaa').DataTable({
                    "lengthMenu": [[5, 10, 15, -1], [5, 10, 15, "All"]]
                });


                $('#editmodal').on('show.bs.modal', function(event) {
                  var div = $(event.relatedTarget)
                  var modal = $(this);
                  modal.find('#nama').attr("value", div.data('nama'));
                  modal.find('#email').attr("value", div.data('email'));
                  modal.find('#username').attr("value", div.data('username'));
                  modal.find('#password').attr("value", div.data('password'));
                  modal.find('#status').attr("value", div.data('status'));
                  modal.find('#tahun_lulus').attr("value", div.data('tahun_lulus'));
                  modal.find('#nama_perusahaan').attr("value", div.data('nama_perusahaan'));
                  modal.find('#alamat_perusahaan').attr("value", div.data('alamat_perusahaan'));
                  modal.find('#foto').attr("src", div.data('foto'));
                });
            });
        </script>