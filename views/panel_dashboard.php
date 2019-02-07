                    <div class="span9">
                        <div class="content">
                            <div class="light-font">
                              <nav aria-label="breadcrumb">
                                <ol class="breadcrumb" style="background: #4285f4; color: #fff;">
                                  <li class="breadcrumb-item">Dashboard</li>
                                </ol>
                              </nav>
                            </div>
                            <div class="alert alert-success">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                <strong>Hai, <?php echo $this->session->userdata("nama"); ?> !</strong> 
                                Welcome to your dashboard. 
                            </div>
                            <div class="judul" style="margin-top: 100px;">
                              <h4>
                                <center>
                                  <button type="submit" class="btn btn-primary" style="color: #fff;"><?php echo $tgl=date('d-m-Y');;?></button>
                                </center>
                              </h4>
                            </div>
                        </div>
                        <!--/.content-->
                    </div>
                    <!--/.span9-->
                </div>
            </div>
            <!--/.container-->
        </div>
        <!--/.wrapper-->