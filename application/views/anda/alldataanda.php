<?php $this->load->view('inc/heada'); ?>
<body class="fixed">
    <!-- Header -->
    <header>
        <a href="" class="logo"><i class="fa fa-bolt"></i> <span>OSIS</span></a>
        <nav class="navbar navbar-static-top">
            <div class="navbar-right">
                <ul class="nav navbar-nav">                     
                    <li class="dropdown widget-user">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <span>User <i class="fa fa-caret-down"></i></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="footer">
                                <a href="<?php echo base_url(); ?>login/logout"><i class="fa fa-power-off"></i>Keluar</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- /.header -->

    <!-- wrapper -->
    <div class="wrapper">
        <div class="leftside">
            <div class="sidebar">
                <ul class="sidebar-menu">
                    <li class="title">Menu</li>
                    <li>
                        <a href="<?php echo base_url(); ?>">
                            <i class="fa fa-home"></i> <span>Home</span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="<?php echo base_url(); ?>front">
                            <i class="fa fa-folder"></i> <span>Data Permintaan Anda</span>
                            <small class="label pull-right"></small>
                        </a>
                    </li>
                
                    <li class="">
                       <a href="<?php echo base_url(); ?>login"><i class="fa fa-power-off"></i>Login</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="rightside">
            <div class="page-head">
                <h1>DATA PERMINTAAN ANDA</h1>
            </div>

            <div class="content">
                <!-- Main row -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="box">
                            <div class="box-title">
                                <h3>Data yang telah ditambahkan user</h3>
                            </div><!-- /.box-title -->
                            <div class="box-body">
                               <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>NO</th>
                                        <th>DARI</th>
                                        <th>TANGGAL</th>
                                        <th>BAGIAN</th>
                                        <th>KEPADA</th>
                                        <th>ALASAN</th>
                                        <th>STATUS</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($pppk as $row) {?>
                                    <tr>
                                        <td><?php echo $row['no']; ?></td>
                                        <td><?php echo $row['dari']; ?></td>
                                        <td><?php echo $row['tanggal']; ?></td>
                                        <td><?php echo $row['bagian']; ?> (<?php echo $row['divisi']; ?>)</td>
                                        <td><?php echo $row['kepada']; ?></td>
                                        <td><?php echo $row['alasan']; ?></td>
                                        <td>
                                        <?php if($row['status'] == "waiting"){ ?>

                                            <span class="label label-danger">Waiting</span>

                                        <?php } elseif ($row['status'] == "on progress"){ ?>
                                            <span class="label label-warning">On Progress</span>
                                        <?php } else { ?>
                                            <span class="label label-success">Finished</span>
                                        <?php } ?>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div><!-- /.box -->
                </div><!-- /.col -->
            </div><!-- /.row -->
            
        </div>
    </div><!-- /.wrapper -->
</div>

<!-- Javascript -->
<script src="<?php echo base_url(); ?>assets/js/plugins/jquery/jquery-1.10.2.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/js/plugins/jquery-ui/jquery-ui-1.10.4.min.js" type="text/javascript"></script>

<!-- Bootstrap -->
<script src="<?php echo base_url(); ?>assets/js/plugins/bootstrap/bootstrap.min.js" type="text/javascript"></script>

<!-- Interface -->
<script src="<?php echo base_url(); ?>assets/js/plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/js/plugins/pace/pace.min.js" type="text/javascript"></script>

<!-- Forms -->
<script src="<?php echo base_url(); ?>assets/js/plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/js/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/js/custom.js" type="text/javascript"></script>

<script type="text/javascript">
  $(document).ready(function(){
    $("#example1").dataTable();
    $("#example3").dataTable();
    $('#example2').dataTable({
        "bPaginate": true,
        "bLengthChange": false,
        "bFilter": false,
        "bSort": true,
        "bInfo": true,
        "bAutoWidth": false
    });
});
</script>
</body>
</html>