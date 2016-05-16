            <section>
                <div id="content-gallery" class="container">

                    <div class="menus">
                        <center><h1>Galeri Buah</h1><br /> <h2>daftar buah dan khasiat nya</h2></center>
                        <hr />
                        <div class="inside">
                            <div class="main-posts">
                                <div class="row">
                                    <div class="blog-masonry masonry-true">
                                        <?php foreach ($data as $d) { ?>
                                        <div class="post-masonry col-md-4 col-sm-6">
                                            <div class="post-thumb">
                                                <img src="<?php echo base_url()."assets/" ?>image/galeri/<?php echo $d["pict_gallery"]; ?>" alt="">
                                                <div class="title-over">
                                                    <h4><a href="#"><?php echo $d["nama_pict"]; ?></a></h4>
                                                </div>
                                                <div class="post-hover text-center">
                                                    <div class="inside">
                                                        <i class="fa fa-plus"></i>
                                                        <center><img src="<?php echo base_url()."assets/" ?>image/logo.png" style="width:55px;  margin-top:-20px"></center>
                                                        <h4><a data-toggle="modal" data-target="#myModal<?php echo $d["id_gallery"]; ?>"><?php echo $d["nama_pict"]; ?></a></h4>
                                                        <p><?php echo $d["deskripsi"]; ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php foreach ($data as $d) { ?>
                        <div class="modal fade" id="myModal<?php echo $d["id_gallery"]; ?>" role="dialog">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <center>
                                            <img src="<?php echo base_url()."assets/" ?>image/galeri/<?php echo $d["pict_gallery"]; ?>" class="img-responsive">
                                        </center>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>


                    </div>
                </div>
            </section>