<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Hasil Pencarian
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?= base_url('Welcome/show_home') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Hasil pencarian</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-solid box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Hasil:</h3>
            </div>
            <div class="box-body">
                <div class="row">
                <?php
                    if($brg != null){
                    foreach($brg as $b){
                        $harga_diskon  = $b['harga'] - $b['diskon'];
                        $persen_diskon = number_format(($b['diskon'] / $b['harga'] * 100), 2, ',', '.');
                        echo "
                        <div class='col-md-2'>
                        <div class='card'>
                            <img class='card-img-top' src=
                        ";

                        if($b['gambar'] != null){
                        echo base_url('img/' . $b['gambar']);
                        } else {
                        echo base_url('img/placeholder.jpg');
                        }

                        echo "
                            alt='Card image cap'>
                            <div class='card-body'>
                            <h4 class='card-title max-lines-title' style='font-weight: bold; text-align: left;'>" . $b['nama'] . "</h4>
                            <p class='card-text max-lines-desc' >" . $b['deskripsi'] . "</p>
                        "; 
                        
                        if($b['diskon'] > 0){
                        echo "
                            <h5><del>Rp" . number_format($b['harga'], 0, ',', '.') . "</del></h5>
                            <h4 style='color: #00a65a; font-weight: bold;'>Rp" . number_format($harga_diskon, 0, ',', '.') . " 
                            <span class='badge bg-warning'>-" . $persen_diskon . "%</span></h4>
                        ";
                        } else {
                        echo "
                            <h5>&nbsp</h5>
                            <h4 style='color: #00a65a; font-weight: bold;'>Rp" . number_format($b['harga'], 0, ',', '.') . "</h4>
                        ";
                        }

                        echo "
                            <a href='" . base_url('Welcome/show_produk?id=' . $b['id']) . "' class='btn btn-success'>Lihat produk</a>
                            <a href='" . base_url('Welcome/show_edit?id=' . $b['id']) . "' class='btn btn-sm btn-warning' id='btn-edit' name='btn-edit'><i class='fa fa-edit' aria-hidden='true'></i></a>
                            <a href='" . base_url('Barang/hapus?id=' . $b['id']) . "' class='btn btn-sm btn-danger' id='btn-hapus' name='btn-hapus' onclick='return confirm(\"Apakah anda yakin ingin menghapus data ini?\")';><i class='fa fa-trash' aria-hidden='true'></i></a>
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
      </div>
    </div>
  </section>
  <!-- /.content -->
</div>