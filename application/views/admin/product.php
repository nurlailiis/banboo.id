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

     <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"><br>Data Product Banboo.id</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Data Product Banboo.id
                        </div>
                        <div class="panel-body">
                        <a class="btn btn-success" href="<?php echo base_url('index.php/admin/add') ?>">+ Tambah Produk</a>
                        <br>
                        <br>
                        <div class="table-responsive">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr>
                                    <th>ID Product</th>
                                    <th>Nama Produk</th>
                                    <th>Harga</th>
                                    <th>Kategori</th>
                                    <th>Detail</th>
                                    <th style="width: 250px;">Gambar</th>
                                    <th style="width: 200px;">Pilihan</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($produk as $p) {?>
                                <tr class="odd gradeX">
                                    <td><?php echo $p['id_produk'] ?></td>
                                    <td><?php echo $p['nama_produk'] ?></td>
                                    <td><?php echo 'Rp. '.number_format($p['harga_produk'], 2, ',', '.'); ?></td>
                                    <td class="center"><?php echo $p['kategori_produk'] ?></td>
                                    <td class="center"><?php echo $p['detail_produk'] ?></td>
                                    <td class="center"><img style="width: 100%" src="<?php echo base_url()."assets/produk/image/".$p['gambar_produk'] ?>"></td>
                                    <td class="center">
                                        <a class="btn btn-primary btn-outline" href="<?php echo base_url()."index.php/admin/editData/".$p['id_produk']?>">Update</a>
                                        <a class="btn btn-danger btn-outline" href="<?php echo base_url()."index.php/admin/deleteData/".$p['id_produk']?>">Delete</a>
                                    </td>
                                </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                        </div>
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
