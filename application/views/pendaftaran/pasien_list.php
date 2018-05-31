<!doctype html>
<html>
    <head>
        <title>harviacode.com - codeigniter crud generator</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            body{
                padding: 0px;
            }
        </style>
    </head>
    <body>
    <div id="page-wrapper">
        <div class="container-fluid">
        <h2 style="margin-top:50px" class="page-header">Pasien List</h2>
        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-4">
                <?php echo anchor(site_url('pendaftaran/create'),'Daftar Pasien', 'class="btn btn-primary"'); ?>
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 8px" id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-1 text-right">
            </div>
            <div class="col-md-3 text-right">
                <form action="<?php echo site_url('pendaftaran/daftar'); ?>" class="form-inline" method="get">
                    <div class="input-group">
                        <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                        <span class="input-group-btn">
                            <?php 
                                if ($q <> '')
                                {
                                    ?>
                                    <a href="<?php echo site_url('pendaftaran/daftar'); ?>" class="btn btn-default">Reset</a>
                                    <?php
                                }
                            ?>
                          <button class="btn btn-primary" type="submit">Search</button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
        <table class="table table-bordered" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>Nama</th>
		<th>Jenkel</th>
		<th>Alamat</th>
		<th>Umur</th>
        <th>Poliklinik</th>
		<th>No Tlp</th>
		<th>Action</th>
            </tr><?php
            foreach ($pasien_data as $pasien)
            {
                ?>
                <tr>
			<td width="80px"><?php echo ++$start ?></td>
			<td><?php echo $pasien->nama ?></td>
			<td><?php echo $pasien->jenkel ?></td>
			<td><?php echo $pasien->alamat ?></td>
			<td><?php echo $pasien->umur ?></td>
            <td><?php echo $pasien->poliklinik ?></td>
			<td><?php echo $pasien->no_tlp ?></td>
			<td style="text-align:center" width="200px">
				<?php 
				echo anchor(site_url('pendaftaran/read/'.$pasien->id_pasien),'<i class="fa fa-list"></i>'); 
				

				?>
			</td>
		</tr>
                <?php
            }
            ?>
        </table>
        <div class="row">
            <div class="col-md-6">
                <a href="#" class="btn btn-primary">Total Record : <?php echo $total_rows ?></a>
	    </div>
            <div class="col-md-6 text-right">
                <?php echo $pagination ?>
            </div>
        </div>
    </div>
</div>
    </body>
</html>