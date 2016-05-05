<section>
    <div id="content-home" class="container">
        <div class="menus"><br>
            <center><h1>Resep Sehat</h1></center>
            <hr/>
            <div class="inside">
                <div id="accordion" class="panel-group">
                    <?php foreach ($data2 as $d2) { ?>
                    <div class="panel panel-transparent">
                        <div class="panel-heading">
                            <h2 class="panel-title">
                                <a href="#collapse<?php echo "$d2[id_resep]"; ?>" data-toggle="collapse" data-parent="#accordion" class="collapsed" aria-expanded="false"><?php echo "$d2[judul_resep]"; ?></a>
                                </h2>
                        </div>
                        <div id="collapse<?php echo "$d2[id_resep]"; ?>" class="panel-collapse collapse" aria-expanded="false" style="height:0px;">
                            <div class="panel-body">
                                <div class="container">
                                    <div class="col-md-5">
                                        <div class="menu" style="width:100%;">
                                            <div class="menu-list">
                                                <?php foreach ($data as $d) {
                                                    if ($d['resep'] == $d2['id_resep']) {
                                                        echo "<p class='main-menu'>$d[nama_bahan]</p>";
                                                        if ($d['deskripsi'] != "") {
                                                            echo "<p class='menu-desc'>$d[deskripsi]</p>";
                                                        }
                                                    }
                                                } ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="menu-image" style="width:100%;">
                                            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                                <div class="carousel-inner" role="listbox">
                                                    <?php $i = 0; ?>
                                                    <?php foreach ($data as $d) { ?>
                                                        <?php if ($i == 0 && $d['resep'] == $d2['id_resep'] && $d['gambar_bahan']) { ?>
                                                        <div class="item active">
                                                            <td><img src="<?php echo base_url("/assets/image/bahan/$d[gambar_bahan]");?>" />
                                                            <?php $i++ ?>
                                                        </div>
                                                        <?php } elseif ($i > 0 && $d['resep'] == $d2['id_resep'] && $d['gambar_bahan']) { ?>
                                                        <div class="item">
                                                            <td><img src="<?php echo base_url("/assets/image/bahan/$d[gambar_bahan]");?>" />
                                                            <?php $i++ ?>
                                                        </div>
                                                        <?php } ?>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                    <br><br><br><br>
            </div>
        </div>
    </div>
</section>
