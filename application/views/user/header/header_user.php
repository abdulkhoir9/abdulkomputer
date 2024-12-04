<header class="main-header">
  <nav class="navbar navbar-static-top">
    <div class="container">
      <div class="navbar-header">
        <a href="<?= base_url('Welcome/show_home') ?>" class="navbar-brand" id="logo-font"><b><i class="fa fa-desktop" aria-hidden="true"></i>
 Abdul</b><span id="logo-font-2">Komputer<span></a>
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
          <i class="fa fa-bars"></i>
        </button>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
        <ul class="nav navbar-nav">
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Produk <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="<?= base_url('Welcome/show_kategori/?kategori=processor') ?>">Processor</a></li>
              <li><a href="<?= base_url('Welcome/show_kategori/?kategori=vga') ?>">VGA</a></li>
              <li><a href="<?= base_url('Welcome/show_kategori/?kategori=ram') ?>">RAM</a></li>
              <li><a href="<?= base_url('Welcome/show_kategori/?kategori=harddisk') ?>">Harddisk</a></li>
              <li><a href="<?= base_url('Welcome/show_kategori/?kategori=ssd') ?>">SSD</a></li>
              <li><a href="<?= base_url('Welcome/show_kategori/?kategori=motherboard') ?>">Motherboard</a></li>
              <li><a href="<?= base_url('Welcome/show_kategori/?kategori=monitor') ?>">Monitor</a></li>
              <li><a href="<?= base_url('Welcome/show_kategori/?kategori=laptop') ?>">Laptop</a></li>
              <li><a href="<?= base_url('Welcome/show_kategori/?kategori=mouse') ?>">Mouse</a></li>
              <li><a href="<?= base_url('Welcome/show_kategori/?kategori=keyboard') ?>">Keyboard</a></li>
              <li><a href="<?= base_url('Welcome/show_kategori/?kategori=headset') ?>">Headset</a></li>
              <li class="divider"></li>
              <li><a href="<?= base_url('Welcome/show_kategori/?kategori=all') ?>">Semua produk</a></li>
            </ul>
          </li>
          <li><a href="#">About</a></li>
          <form class="navbar-form navbar-left" action="<?= base_url('Barang/search') ?>" role="search" method="post">
            <div class="form-group">
              <input type="text" class="form-control" id="search" name="search" placeholder="Search">
            </div>
          </form>
        </ul>
      </div>
      <!-- /.navbar-collapse -->
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <!-- Menu toggle button -->
            
          </li>
          <!-- /.messages-menu -->

          <!-- Notifications Menu -->
          <li class="dropdown notifications-menu">
            <!-- Menu toggle button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">10</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 10 notifications</li>
              <li>
                <!-- Inner Menu: contains the notifications -->
                <ul class="menu">
                  <li><!-- start notification -->
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> 5 new members joined today
                    </a>
                  </li>
                  <!-- end notification -->
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>
          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
              <img src="<?= base_url('template/dist/img/user2-160x160.jpg') ?>" class="user-image" alt="User Image">
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs"><?= $this->session->userdata('nama') ?></span>
            </a>
            <ul class="dropdown-menu">
                <!-- The user image in the menu -->
                <li class="user-header">
                  <img src="<?= base_url('template/dist/img/user2-160x160.jpg') ?>" class="img-circle" alt="User Image">
                  <p>
                    <?= $this->session->userdata('nama') ?>
                    <small><?= $this->session->userdata('role') ?></small>
                  </p>
                </li>
                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="pull-left">
                    <a href="#" class="btn btn-default btn-flat">Profile</a>
                  </div>
                  <div class="pull-right">
                    <a href="<?= base_url('Welcome/logout') ?>" class="btn btn-default btn-flat">Sign out</a>
                  </div>
                </li>
              </ul>
          </li>
        </ul>
      </div>
      <!-- /.navbar-custom-menu -->
    </div>
    <!-- /.container-fluid -->
  </nav>
</header>