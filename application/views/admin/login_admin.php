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
    <div style="margin-top: 100px;" class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <center><h1>Banboo.id</h1></center>
                <div class="login-panel panel panel-green">
                    <div class="panel-heading">
                        <h3 class="panel-title">Login</h3>
                    </div>
                    <div class="panel-body">
                        <?php echo form_open('admin/cek_login'); ?>
                            <fieldset>
                                <div class="form-group has-success">
                                    <input class="form-control" placeholder="Username" name="username" type="username" autofocus>
                                </div>
                                <div class="form-group has-success">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                    </label>
                                </div>
                                <input style="width: 100%" type="submit" value="LOGIN" class="btn btn-success btn-outline" name="">
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer style="margin-top: 140px; padding: 20px;">
        <p style="float: right;">Copyright &copy; 2017 Banboo.id</p>
    </footer>
    <script src="<?php echo base_url('js/jquery.js') ?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url('js/bootstrap.min.js') ?>"></script>

    <!-- Morris Charts JavaScript -->
    <script src="<?php echo base_url('js/plugins/morris/raphael.min.js') ?>"></script>
    <script src="<?php echo base_url('js/plugins/morris/morris.min.js') ?>"></script>
    <script src="<?php echo base_url('js/plugins/morris/morris-data.js') ?>"></script>

</body>

</html>