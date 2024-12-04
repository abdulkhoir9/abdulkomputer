<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Detail Produk
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?= base_url('Welcome/show_home') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Detail produk: <?= $brg['nama'] ?></li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-success">
            <div class="box-body">
                <div class="row">
                    <div class="col-md-4" style="padding:5%;">
                        <img class="img-detail-produk" src="
                        <?php 
                            if($brg['gambar'] != null){
                                echo base_url('img/' . $brg['gambar']);
                            } else {
                                echo base_url('img/placeholder.jpg');
                            }
                        ?>
                        " alt="gambar produk" style="width:100%; max-height:300px;">
                    </div>
                    <div class="col-md-8" style="padding:2%;">
                        <h3><?= $brg['nama'] ?></h3>
                        <hr>
                        <?php
                            $harga_diskon  = $brg['harga'] - $brg['diskon'];
                            $persen_diskon = number_format(($brg['diskon'] / $brg['harga'] * 100), 2, ',', '.');

                            if($brg['diskon'] > 0){
                                echo "
                                    <h5><del>Rp" . number_format($brg['harga'], 0, ',', '.') . "</del></h5>
                                    <h3 style='color: #00a65a; font-weight: bold; margin-top: 0px; margin-bottom: 20px;'>Rp" . number_format($harga_diskon, 0, ',', '.') . " 
                                    <span class='badge bg-warning'>-" . $persen_diskon . "%</span></h3>
                                ";
                            } else {
                                echo "
                                    <h5>&nbsp</h5>
                                    <h3 style='color: #00a65a; font-weight: bold; margin-top: 0px; margin-bottom: 20px;'>Rp" . number_format($brg['harga'], 0, ',', '.') . "</h3>
                                ";
                            }      
                        ?>
                        <p style="text-align: justify;"><?= $brg['deskripsi'] ?></p>
                        <p>ID barang : <?= $brg['id'] ?></p>
                        <p>Est. berat: <?= $brg['est_berat'] ?> Kg</p>
                        <p>Kategori  : <a href="<?= base_url('Welcome/show_kategori/?kategori=' . $brg['kategori']) ?>"><?= $brg['kategori'] ?></a></p>
                        <a href="#" type="button" class="btn btn-success">Beli sekarang</a>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>
  </section>
  <!-- /.content -->
</div>