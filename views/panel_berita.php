                    <div class="span9">
                        <div class="content">
                            <div class="light-font">
                              <nav aria-label="breadcrumb">
                                <ol class="breadcrumb" style="background: #4285f4; color: #fff;">
                                  <li class="breadcrumb-item">Berita</li>
                                </ol>
                              </nav>
                            </div>
                             <div class="module">
                                <div class="module-head">
                                    <!-- <h3>Berita</h3> <hr> -->
                                    <a class="btn btn-info btn-sm" href="<?php echo base_url()?>berita/add">Tambah</a>
                                </div>
                                <div class="module-body table">
                                    <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped  display" width="100%">
                                        <thead>
                                            <tr>
                                                <th>Judul</th>
                                                <th>Tanggal</th>
                                                <th>Status</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                                foreach ($tampil as $val) { ?>
                                                    <tr class="odd gradeX">
                                                        <td><a href="<?php echo base_url()?>berita/read/<?php echo $val->id_berita; ?>"><?php echo $val->berita_title; ?></a></td>
                                                        <td class="center"><?php echo $val->berita_tgl_post; ?></td>
                                                        <td class="center">
                                                            <?php
                                                                if ($val->berita_status == 1) {
                                                                    echo "Active";
                                                                }
                                                                else{
                                                                    echo "Not Active";
                                                                }
                                                            ?>
                                                        </td>
                                                        <td>
                                                            <a href="<?php echo base_url()?>berita/edit/<?php echo $val->id_berita; ?>">Edit</a> 
                                                            |
                                                            <a href="<?php echo base_url()?>berita/aksi_hapus/<?php echo $val->id_berita; ?>">Hapus</a>
                                                        </td>
                                                    </tr>
                                            <?php } ?>
                                        </tbody>
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