                    <div class="span9">
                        <div class="content">
                            <div class="light-font">
                              <nav aria-label="breadcrumb">
                                <ol class="breadcrumb" style="background: #4285f4; color: #fff;">
                                  <li class="breadcrumb-item">Slide</li>
                                </ol>
                              </nav>
                            </div>
                            <div class="btn-box-row row-fluid">
                                <?php
                                    foreach ($tampil as $val) { ?>
                                        <a href="<?php echo base_url()?>slide/edit/<?php echo $val->id_slide; ?>" class="btn-box span4">
                                            <img src="<?php echo base_url()?>assets/slide/<?php echo $val->slide_thumb; ?>" alt="">
                                            <b><?php echo $val->slide_title; ?></b>
                                        </a>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>