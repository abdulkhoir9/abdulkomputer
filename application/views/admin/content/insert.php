<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Tambah Produk Baru
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?= base_url('Welcome/show_home') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Tambah produk</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-solid box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Form Tambah Data Produk</h3>
            </div>
            <form role="form" id="form_brg" name="form_brg" action="<?= base_url('Barang/add_barang') ?>" method="POST" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form_group">
                  <input class="form-control" id="dst" name="dst" type="hidden" value="<?= $kategori ?>">
                </div>
                <div class="form_group">
                  <label for="nama">NAMA PRODUK</label>
                  <input class="form-control" id="nama" name="nama" type="text" placeholder="Masukkan nama barang di sini" required>
                </div>
                <br>
                <div class="form_group">
                  <label for="deskripsi">DESKRIPSI PRODUK</label>
                  <textarea class="form-control" id="deskripsi" name="deskripsi" rows="10" placeholder="Jelaskan spesifikasi barang di sini" required></textarea>
                </div>
                <br>
                <div class="form_group">
                  <label for="kategori">KATEGORI PRODUK</label>
                  <select class="form-control" name="kategori" id="kategori" required>
                    <option value="processor" <?php if($kategori == 'processor' || $kategori == 'all') echo 'selected'; ?>>Processor</option>
                    <option value="vga" <?php if($kategori == 'vga') echo 'selected'; ?>>VGA</option>
                    <option value="ram" <?php if($kategori == 'ram') echo 'selected'; ?>>RAM</option>
                    <option value="harddisk" <?php if($kategori == 'harddisk') echo 'selected'; ?>>Harddisk</option>
                    <option value="ssd" <?php if($kategori == 'ssd') echo 'selected'; ?>>SSD</option>
                    <option value="motherboard" <?php if($kategori == 'motherboard') echo 'selected'; ?>>Motherboard</option>
                    <option value="monitor" <?php if($kategori == 'monitor') echo 'selected'; ?>>Monitor</option>
                    <option value="laptop" <?php if($kategori == 'laptop') echo 'selected'; ?>>Laptop</option>
                    <option value="mouse" <?php if($kategori == 'mouse') echo 'selected'; ?>>Mouse</option>
                    <option value="keyboard" <?php if($kategori == 'keyboard') echo 'selected'; ?>>Keyboard</option>
                    <option value="headset" <?php if($kategori == 'headset') echo 'selected'; ?>>Headset</option>
                  </select>
                </div>
                <br>
                <div class="form-group">
                  <label for="est_berat">ESTIMASI BERAT</label>
                  <div class="input-group">
                    <input class="form-control" id="est_berat" name="est_berat" type="number" min="0.00" step="0.01" placeholder="misal, 0.5" required>
                    <span class="input-group-addon">Kg</span>
                  </div>
                </div>
                <div class="form-group">
                  <label for="harga">HARGA PRODUK</label>
                  <div class="input-group">
                    <span class="input-group-addon">Rp</span>
                    <input class="form-control" id="harga" name="harga" type="number" min="0" step="1000" placeholder="misal, 500000" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="diskon">DISKON</label>
                  <div class="input-group mb-3">
                    <span class="input-group-addon">Rp</span>
                    <input class="form-control" id="diskon" name="diskon" type="number" min="0" step="1000" placeholder="misal, 25000" required>
                  </div>
                </div>
                <div class="form_group">
                  <label>TANGGAL MASUK</label>
                  <div class="input-group date">
                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                    <input id="tgl_masuk" name="tgl_masuk" class="form-control pull-right" placeholder="masukkan tanggal" required>
                  </div>
                </div>
                <br>
                <div class="form-group">
                  <label for="gambar">GAMBAR PRODUK</label>
                  <input type="file" accept=".jpg, .jpeg, .png" id="gambar" name="gambar">
                  <p class="help-block">* Gambar menggunakan format .jpg, .jpeg, atau .png.</p>
                </div>
              </div>
              <div class="box-footer">
                <button class="btn btn-success pull-right" id="submit" name="submit" type="submit">Tambah produk</button>
              </div>
            </form>
        </div>
      </div>
    </div>
  </section>
  <!-- /.content -->
</div>