<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Edit Data Produk
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?= base_url('Welcome/show_home') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Edit produk</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-solid box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Data Produk (ID:<?= $brg['id'] ?>)</h3>
            </div>
            <form role="form" id="form_brg" name="form_brg" action="<?= base_url('Barang/edit') ?>" method="POST" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form_group">
                  <input class="form-control" id="id" name="id" type="hidden" value="<?= $brg['id'] ?>">
                </div>
                <div class="form_group">
                  <label for="nama">NAMA PRODUK</label>
                  <input class="form-control" id="nama" name="nama" type="text" placeholder="Masukkan nama barang di sini" value="<?= $brg['nama'] ?>" required>
                </div>
                <br>
                <div class="form_group">
                  <label for="deskripsi">DESKRIPSI PRODUK</label>
                  <textarea class="form-control" id="deskripsi" name="deskripsi" rows="10" placeholder="Jelaskan spesifikasi barang di sini" required><?= $brg['deskripsi'] ?></textarea>
                </div>
                <br>
                <div class="form_group">
                  <label for="kategori">KATEGORI PRODUK</label>
                  <select class="form-control" name="kategori" id="kategori" required>
                    <option value="processor" <?php if($brg['kategori'] == 'processor') echo "selected"; ?>>Processor</option>
                    <option value="vga" <?php if($brg['kategori'] == 'vga') echo "selected"; ?>>VGA</option>
                    <option value="ram" <?php if($brg['kategori'] == 'ram') echo "selected"; ?>>RAM</option>
                    <option value="harddisk" <?php if($brg['kategori'] == 'harddisk') echo "selected"; ?>>Harddisk</option>
                    <option value="ssd" <?php if($brg['kategori'] == 'ssd') echo "selected"; ?>>SSD</option>
                    <option value="motherboard" <?php if($brg['kategori'] == 'motherboard') echo "selected"; ?>>Motherboard</option>
                    <option value="monitor" <?php if($brg['kategori'] == 'monitor') echo "selected"; ?>>Monitor</option>
                    <option value="laptop" <?php if($brg['kategori'] == 'laptop') echo "selected"; ?>>Laptop</option>
                    <option value="mouse" <?php if($brg['kategori'] == 'mouse') echo "selected"; ?>>Mouse</option>
                    <option value="keyboard" <?php if($brg['kategori'] == 'keyboard') echo "selected"; ?>>Keyboard</option>
                    <option value="headset" <?php if($brg['kategori'] == 'headset') echo "selected"; ?>>Headset</option>
                  </select>
                </div>
                <br>
                <div class="form-group">
                  <label for="est_berat">ESTIMASI BERAT</label>
                  <div class="input-group">
                    <input class="form-control" id="est_berat" name="est_berat" type="number" min="0.00" step="0.01" placeholder="misal, 0.5" value="<?= $brg['est_berat'] ?>" required>
                    <span class="input-group-addon">Kg</span>
                  </div>
                </div>
                <div class="form-group">
                  <label for="harga">HARGA PRODUK</label>
                  <div class="input-group">
                    <span class="input-group-addon">Rp</span>
                    <input class="form-control" id="harga" name="harga" type="number" min="0" step="1000" placeholder="misal, 500000" value="<?= $brg['harga'] ?>" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="diskon">DISKON</label>
                  <div class="input-group mb-3">
                    <span class="input-group-addon">Rp</span>
                    <input class="form-control" id="diskon" name="diskon" type="number" min="0" step="1000" placeholder="misal, 25000" value="<?= $brg['diskon'] ?>" required>
                  </div>
                </div>
                <div class="form_group">
                  <label>TANGGAL MASUK</label>
                  <div class="input-group date">
                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                    <input id="tgl_masuk" name="tgl_masuk" class="form-control pull-right" placeholder="masukkan tanggal" value="<?php $tgl = new DateTime($brg['tgl_masuk']); echo $tgl->format('m/d/Y'); ?>" required>
                  </div>
                </div>
                <br>
                <div class="form-group">
                  <label for="gambar">GAMBAR PRODUK</label>
                  <input type="file" accept=".jpg, .jpeg, .png" id="gambar" name="gambar">
                  <p class="help-block">Gambar terupload: <a href="<?= base_url('img/' . $brg['gambar']) ?>">lihat</a>.</p>
                  <p class="help-block">* Gambar menggunakan format .jpg, .jpeg, atau .png.</p>
                  <p class="help-block">* Jika tidak ingin meng-update gambar, tidak perlu meng-upload ulang.</p>
                </div>
              </div>
              <div class="box-footer">
                <button class="btn btn-success pull-right" id="submit" name="submit" type="submit">Update data</button>
              </div>
            </form>
        </div>
      </div>
    </div>
  </section>
  <!-- /.content -->
</div>