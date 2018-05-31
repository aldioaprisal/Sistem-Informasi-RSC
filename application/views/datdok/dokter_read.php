<!doctype html>
<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            body{
                padding: 15px;
            }
        </style>
    </head>
    <body>

        <h2 style="margin-top:0px">Dokter Read</h2>
        <table class="table">
	    <tr><td>Nama</td><td><?php echo $nama; ?></td></tr>
	    <tr><td>Jenkel</td><td><?php echo $jenkel; ?></td></tr>
	    <tr><td>Alamat</td><td><?php echo $alamat; ?></td></tr>
	    <tr><td>No Tlp</td><td><?php echo $no_tlp; ?></td></tr>
	    <tr><td>Poliklinik</td><td><?php echo $poliklinik; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('datdok/dadok') ?>" class="btn btn-default"></a></td></tr>
	</table>
        </body>
</html>