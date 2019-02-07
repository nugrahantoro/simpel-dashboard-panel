                    <div class="span9">
                        <div class="content">
                            <div class="light-font">
                              <nav aria-label="breadcrumb">
                                <ol class="breadcrumb" style="background: #4285f4; color: #fff;">
                                  <li class="breadcrumb-item">Berita / </li>
                                  <li class="breadcrumb-item">Read</li>
                                </ol>
                              </nav>
                            </div>
                            <div class="module">
                                <div class="module-head">
                                    <a href="<?php echo base_url()?>berita" class="btn btn-success btn-sm">Kembali</a>
                                </div>
                                <div class="module-body table">
                                    <table border="0">
                                        <?php
                                            foreach ($tampil as $val) {}
                                        ?>
                                        <tr>
                                            <td>Judul</td>
                                            <td> : </td>
                                            <td><?php echo $val->berita_title; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Berita</td>
                                            <td> : </td>
                                            <td><?php echo $val->berita_data; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Status</td>
                                            <td> : </td>
                                            <td>
                                                <?php 
                                                    if ($val->berita_status == 1) {
                                                         echo "Active";
                                                     } 
                                                     else{
                                                        echo "Not Active";
                                                     }
                                                ?>
                                            </td>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td><?php echo $val->berita_tgl_post; ?> | Admin</td>
                                            </tr>
                                        </tr>
                                    </table>
                                </div>
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