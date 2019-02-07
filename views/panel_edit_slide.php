                    <div class="span9">
                        <div class="content">
                             <div class="light-font">
                              <nav aria-label="breadcrumb">
                                <ol class="breadcrumb" style="background: #4285f4; color: #fff;">
                                  <li class="breadcrumb-item">Slide / </li>
                                  <li class="breadcrumb-item">Edit</li>
                                </ol>
                              </nav>
                            </div>
                            <div class="module">
                                <div class="module-head">
                                    <h3>Edit Slide</h3>
                                </div>
                                <div class="module-body table">
                                    <?php
                                        foreach ($tampil as $val) {}
                                    ?>
                                    <form class="form-horizontal row-fluid" action="<?php echo base_url()?>slide/aksi_edit" method="post" enctype="multipart/form-data">
                                        <input type="hidden" name="id_slide" value="<?php echo $val->id_slide; ?>">
                                        <div class="control-group">
                                            <label class="control-label" for="slide_title">Judul</label>
                                            <div class="controls">
                                                <input type="text" id="slide_title" name="slide_title" value="<?php echo $val->slide_title; ?>" placeholder="Type something here..." class="span8" required="">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="slide_title">Gambar</label>
                                            <div class="controls">
                                                <img class="img-responsive" src="<?=base_url(""); ?>assets/slide/<?php echo $val->slide_thumb; ?>" style="height: 200px;">
                                                <br><br>
                                                <input type="file" name="userfile"  size="20" required>
                                                <p>
                                                    <br>
                                                    Ket : ... x ... pixels.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <div class="controls">
                                                <button type="submit" class="btn btn-info">Save</button>
                                                <a href="<?php echo base_url()?>slide" class="btn btn-danger">Batal</a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

