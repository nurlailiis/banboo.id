<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Panel Admin Banboo.id</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url('assets/admin/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url('assets/admin/js/sb-admin.css') ?>" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="<?php echo base_url('assets/admin/css/plugins/morris.css') ?>" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url('assets/admin/vendor/font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet" type="text/css">

</head>

<body>

  <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Panel-Admin Banboo.id</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Welcome <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <?php 
                            if ($this->session->has_userdata('username')) {
                                echo '
                                    <li>
                                        <a href="'.base_url('index.php/admin').'">'.$this->session->userdata('nama').'
                                        </a>
                                    </li>
                                    <li>
                                        <a href="'.base_url('index.php/admin/setting').'"><i class="fa fa-fw fa-gear"></i> Settings</a>
                                    </li>
                                    <li>
                                        <a href=" '.base_url('index.php/admin/logout').'"><i class="fa fa-fw fa-gear"></i>Logout
                                        </a>
                                    </li>
                                    ';
                                    }
                            else{
                                echo '
                                    <li>
                                        <a href="'.base_url('index.php/admin/setting').'"><i class="fa fa-fw fa-gear"></i> Settings</a>
                                    </li>
                                    <li>
                                        <a href=" '.base_url('index.php/admin/logout').'"><i class="fa fa-fw fa-gear"></i>Logout
                                        </a>
                                    </li>
                                    ';
                                    }
                        ?>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="<?php echo base_url('index.php/admin') ?>"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('index.php/admin/product') ?>"><i class="fa fa-fw fa-table"></i> Product</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('index.php/admin/add') ?>"><i class="fa fa-fw fa-edit"></i> Input Product</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('index.php/admin/add') ?>"><i class="fa fa-fw fa-edit"></i> Order List</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

    <!-- /#wrapper -->
    <br></br>
     <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Banboo.id</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Tambah Produk Banboo.id
                        </div>
                        <div class="panel-body">
                        <?php echo form_open_multipart(base_url('index.php/admin/tambahProduk')); ?>
                                <p class="col-md-6"><input type="text" class="form-control" placeholder="Id Produk" name="id"></p>
                                <p class="col-md-6"><input type="text" class="form-control" placeholder="Product Name" name="nama"></p>
                                <p class="col-md-6"><input type="text" class="form-control" placeholder="Price" name="harga"></p>
                                <p class="col-md-6"><input type="text" class="form-control" placeholder="Detail" name="detail"></p>
                                <p class="col-md-6"><input type="file" class="form-control" placeholder="Picture" name="gambar"></p>
                                <p class="col-md-6"><select name="kategori" class="form-control">
                                    <option selected="" disabled="">--Category--</option>
                                    <option>Bantal Sofa</option>
                                    <option>Bantal Leher</option>
                                    <option>Slayer</option>
                                    <option>Buff</option>
                                </select></p>
                                <br>
                                <p class="col-lg-12"><input type="submit" value="Add" class="btn btn-warning" name=""></p>
                        <?php echo form_close(); ?>
                        </div>
                    </div>
                </div>
            </div>
            
</div>

    </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="<?php echo base_url('assets/admin/vendor/jquery/jquery.min.js') ?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url('assets/admin/vendor/bootstrap/js/bootstrap.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/admin/vendor/metisMenu/metisMenu.min.js') ?>"></script>

    <!-- Morris Charts JavaScript -->
    <script src="<?php echo base_url('assets/admin/vendor/raphael/raphael.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/admin/vendor/morrisjs/morris.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/admin/data/morris-data.js') ?>"></script>
    <script src="<?php echo base_url('assets/admin/dist/js/sb-admin-2.js') ?>"></script>

</body>

</html>
