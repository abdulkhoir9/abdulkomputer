<!DOCTYPE html>
<html>
<?php
    $this->load->view('admin/top/top_home');
?>
<body class="hold-transition skin-green layout-top-nav">
<!-- Site wrapper -->
<div class="wrapper">
<?php
    $this->load->view($header);
    // $this->load->view('admin/menu/menu');
    $this->load->view($content);
    $this->load->view('admin/footer/footer');
?>
</div>
<?php
    $this->load->view('admin/bottom/bottom_home');
?>
</body>
</html>