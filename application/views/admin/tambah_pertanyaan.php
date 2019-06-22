                   
            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <div class="page-content">
                    <h1 class="page-title"> Selamat Datang <?php echo $this->session->userdata('nama'); ?>
                    </h1>
                    <div class="page-bar">
                        <ul class="page-breadcrumb">
                            <li>
                                <i class="icon-home"></i>
                                <a href="index.html">Home</a>
                                <i class="fa fa-angle-right"></i>
                            </li>
                            <li>
                                <span>Tambah Pertanyaan</span>
                            </li>
                        </ul>
                    </div>
                    <!-- END PAGE HEADER-->

                    <div class="row" >
                        <div class="col-md-6 " style="background-color:white; margin-left: 10px;">
                            <div class="portlet light ">
                                <div class="portlet-title">
                                    <div class="caption font-red-sunglo">
                                        <i class="glyphicon glyphicon-question-sign font-red-sunglo"></i>
                                        <span class="caption-subject bold uppercase"> Tambah Pertanyaan</span>
                                    </div>
                                </div>
                                
                                
                                <div class="portlet-body">
                                <form role="form" action="#">
                                        <div class="form-body">
                                        <div class="form-group">
                                                <label>Jenis Pertanyaan</label>
                                                <select class="form-control" name="jenis_pertanyaan">
                                                    <option value="">------------------</option>
                                                    <option value="Sudah Bekerja">Sudah Bekerja</option>
                                                    <option value="Belum Bekerja">Belum Bekerja</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Pertanyaan</label>
                                                <input type="text" class="form-control" placeholder="Pertanyaan" name="pertanyaan">
                                            </div>   
                                            <div class="form-group">
                                                <label>Jawaban 1</label>
                                                <input type="text" class="form-control" placeholder="Jawaban 1" name="jawaban1">
                                            </div>   
                                            <div class="form-group">
                                                <label>Jawaban 2</label>
                                                <input type="text" class="form-control" placeholder="Jawaban 2" name="jawaban2">
                                            </div>   
                                            <div class="form-group">
                                                <label>Jawaban 3</label>
                                                <input type="text" class="form-control" placeholder="Jawaban 3" name="jawaban3">
                                            </div>   
                                            <div class="form-group">
                                                <label>Jawaban 4</label>
                                                <input type="text" class="form-control" placeholder="Jawaban 4" name="jawaban4">
                                            </div> 
                                            <div class="form-group">
                                                <label>Bobot</label>
                                                <input type="text" class="form-control" placeholder="Bobot" name="bobot">
                                            </div>    
                                            <div class="form-group">
                                                <label>Status</label>
                                                <select class="form-control" name="status">
                                                    <option value="">------------------</option>
                                                    <option value="Benefit">Benefit</option>
                                                    <option value="Cost">Cost</option>
                                                </select><br>
                                                <div style="border:1px solid red; color: red;">
                                                <small style="margin-left: 5px;">Note : </small><br>
                                                <small style="margin-left: 5px;">Benefit -> Semakin besar maka semakin bagus</small> <br>
                                                <small style="margin-left: 5px;">Cost -> Semakin kecil maka semakin bagus</small>
                                                </div>
                                            </div>
                                        <div class="form-actions">
                                            <button type="submit" class="btn blue">Submit</button>
                                            <button type="button" class="btn default">Cancel</button>
                                        </div>
                                    </form>
                                </div>    
                            </div>

                        </div>
                       
                    </div>
                    
                </div>
            </div>
            <!-- END QUICK SIDEBAR -->
        </div>
        <!-- END CONTAINER -->

      