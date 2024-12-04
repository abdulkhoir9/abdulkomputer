<div class="content-wrapper">
  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
      <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
    </ol>
    <div class="carousel-inner">
      <div class="item active">
        <img src="<?= base_url('img/banner-1.jpg') ?>" alt="First slide">
        <div class="carousel-caption">
          Contoh banner 1
        </div>
      </div>
      <div class="item">
        <img src="<?= base_url('img/banner-2.jpg') ?>" alt="Second slide">
        <div class="carousel-caption">
          Contoh banner 2
        </div>
      </div>
      <div class="item">
        <img src="<?= base_url('img/banner-3.jpg') ?>" alt="Third slide">
        <div class="carousel-caption">
          Contoh banner 3
        </div>
      </div>
    </div>
    <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
      <span class="fa fa-angle-left"></span>
    </a>
    <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
      <span class="fa fa-angle-right"></span>
    </a>
  </div>

  <!-- Content Header (Page header) -->
  <section class="content-header">
  </section>

  <!-- Main content -->
  <section class="content">
    <!-- Default box -->
    <div class="box box-success box-solid">
      <div class="box-header with-border">
        <h3 class="box-title">New Arrivals</h3>
        <a href="<?= base_url('Welcome/show_kategori/?kategori=new') ?>" class="btn btn-warning pull-right">Selengkapnya</a>
      </div>
      <div class="box-body">
        <div class="row">
          <?php
            if($new != null){
              foreach($new as $n){
                $harga_diskon  = $n['harga'] - $n['diskon'];
                $persen_diskon = number_format(($n['diskon'] / $n['harga'] * 100), 2, ',', '.');
                echo "
                <div class='col-md-2'>
                  <div class='card'>
                    <img class='card-img-top' src=
                ";

                if($n['gambar'] != null){
                  echo base_url('img/' . $n['gambar']);
                } else {
                  echo base_url('img/placeholder.jpg');
                }

                echo "
                     alt='Card image cap'>
                    <div class='card-body'>
                      <h4 class='card-title max-lines-title' style='font-weight: bold; text-align: left;'>" . $n['nama'] . "</h4>
                      <p class='card-text max-lines-desc' >" . $n['deskripsi'] . "</p>
                "; 
                
                if($n['diskon'] > 0){
                  echo "
                      <h5><del>Rp" . number_format($n['harga'], 0, ',', '.') . "</del></h5>
                      <h4 style='color: #00a65a; font-weight: bold;'>Rp" . number_format($harga_diskon, 0, ',', '.') . " 
                      <span class='badge bg-warning'>-" . $persen_diskon . "%</span></h4>
                  ";
                } else {
                  echo "
                      <h5>&nbsp</h5>
                      <h4 style='color: #00a65a; font-weight: bold;'>Rp" . number_format($n['harga'], 0, ',', '.') . "</h4>
                  ";
                }

                echo "
                      <a href='" . base_url('Welcome/show_produk?id=' . $n['id']) . "' class='btn btn-success'>Lihat produk</a>
                    </div>
                  </div>
                </div>
                ";
              }
            } else {
              echo "
              <div class='col-md-12'>
                <h3><i>Maaf, tidak ada produk yang tersedia :(</i></h3>
              </div>
              ";
            }
          ?>
        </div>
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
    
    <div class="box box-success box-solid">
      <div class="box-header with-border">
        <h3 class="box-title">Lagi Diskon!</h3>
        <a href="<?= base_url('Welcome/show_kategori/?kategori=diskon') ?>" class="btn btn-warning pull-right">Selengkapnya</a>
      </div>
      <div class="box-body">
        <div class="row">
          <?php
            if($disc != null){
              foreach($disc as $d){
                $harga_diskon  = $d['harga'] - $d['diskon'];
                $persen_diskon = number_format(($d['diskon'] / $d['harga'] * 100), 2, ',', '.');
                echo "
                <div class='col-md-2'>
                  <div class='card'>
                    <img class='card-img-top' src=
                ";
                if($d['gambar'] != null){
                  echo base_url('img/'.$d['gambar']);
                } else {
                  echo base_url('img/placeholder.jpg');
                }
                echo "
                     alt='Card image cap'>
                    <div class='card-body'>
                      <h4 class='card-title max-lines-title' style='font-weight: bold; text-align: left;'>" . $d['nama'] . "</h4>
                      <p class='card-text max-lines-desc' >" . $d['deskripsi'] . "</p>
                      <h5><del>Rp" . number_format($d['harga'], 0, ',', '.') . "</del></h5>
                      <h4 style='color: #00a65a; font-weight: bold;'>Rp" . number_format($harga_diskon, 0, ',', '.') . " 
                      <span class='badge bg-warning'>-" . $persen_diskon . "%</span></h4>
                      <a href='" . base_url('Welcome/show_produk?id=' . $d['id']) . "' class='btn btn-success'>Lihat produk</a>
                    </div>
                  </div>
                </div>
                ";
              }
            } else {
              echo "
              <div class='col-md-12'>
                <h3><i>Maaf, tidak ada produk yang tersedia :(</i></h3>
              </div>
              ";
            }   
          ?>
        </div>
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->

  </section>
  <!-- /.content -->
</div>
  