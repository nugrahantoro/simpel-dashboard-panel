                    <div class="span9">
                        <div class="content">
                             <div class="light-font">
                              <nav aria-label="breadcrumb">
                                <ol class="breadcrumb" style="background: #4285f4; color: #fff;">
                                  <li class="breadcrumb-item">Berita / </li>
                                  <li class="breadcrumb-item">Tambah</li>
                                </ol>
                              </nav>
                            </div>
                            <div class="module">
                                <div class="module-head">
                                    <h3>Tambah Berita</h3>
                                </div>
                                <div class="module-body table">
                                    <form class="form-horizontal row-fluid" action="<?php echo base_url()?>berita/aksi_tambah" method="post">
                                        <input type="hidden" name="id_user" value="<?php echo $this->session->userdata("id"); ?>">
                                        <div class="control-group">
                                            <label class="control-label" for="berita_title">Judul</label>
                                            <div class="controls">
                                                <input type="text" id="berita_title" name="berita_title"  placeholder="Type something here..." class="span8" required="">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label">Berita</label>
                                            <div class="controls">
                                                <textarea name="berita_data" class="span8" rows="25" required=""></textarea>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="berita_status">Satus</label>
                                            <div class="controls">
                                                <select class="span8" name="berita_status">
                                                    <option value="1">Active</option>
                                                    <option value="2">Not Active</option>
                                                </select> 
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <div class="controls">
                                                <button type="submit" class="btn btn-info">Save</button>
                                                <a href="<?php echo base_url()?>berita" class="btn btn-danger">Batal</a>
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

