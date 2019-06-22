                   
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
                                <a href="<?php echo site_url('user'); ?>">Home</a>
                                <i class="fa fa-angle-right"></i>
                            </li>
                            <li>
                                <span>Dashboard</span>
                            </li>
                        </ul>
                    </div>
                    <!-- END PAGE HEADER-->

                    <div class="row" >
                        <div class="col-md-12 ">
                            <div class="portlet light ">
                                <div class="portlet-title">
                                    <div class="caption">
                                    <i class="glyphicon glyphicon-question-sign font-red-sunglo"></i>
                                        <span class="caption-subject bold uppercase">Daftar Pertanyaan</span>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                 <form>
                                    <table class="table dt-responsive" width="100%" id="sample_1">
                                            <thead>
                                                <tr>
                                                    <th>Pertanyaan</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1. Siapa Saya ?</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="radio" name="jawaban_1" value="w"> wakwwak 
                                                        <input type="radio" name="jawaban_2" value="Kentir"> Kentir
                                                        <input type="radio" name="jawaban_3" value="Sentulup"> Sentulup
                                                        <input type="radio" name="jawaban_4" value="Gila"> Gila
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>2. Entahlah ?</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                    
                                                        <input type="radio" name="jawaban_1" value="w"> wakwwak 
                                                        <input type="radio" name="jawaban_2" value="Kentir"> Kentir
                                                        <input type="radio" name="jawaban_3" value="Sentulup"> Sentulup
                                                        <input type="radio" name="jawaban_4" value="Gila"> Gila
                                                    
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>3. Mana Kutahu?</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                    
                                                        <input type="radio" name="jawaban_1" value="w"> wakwwak 
                                                        <input type="radio" name="jawaban_2" value="Kentir"> Kentir
                                                        <input type="radio" name="jawaban_3" value="Sentulup"> Sentulup
                                                        <input type="radio" name="jawaban_4" value="Gila"> Gila
                                                   
                                                    </td>
                                                </tr>
                                                
                                            </tbody>
                                        </table>
                                        <button type="submit" class="btn blue" style="margin-left: 1000px;">Submit</button>
                                 </form>
                            <!-- END EXAMPLE TABLE PORTLET-->
                                </div>  
                            </div>
                        </div>          
                    </div>
                    
                </div>
            </div>
      