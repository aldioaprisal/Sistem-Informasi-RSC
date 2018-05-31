<!doctype html>
<html>
    <head>
        <title>harviacode.com - codeigniter crud generator</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            body{
                padding: 15px;
            }
        </style>
    </head>
    <body>
    <div id="page-wrapper">
        <div class="container-fluid">
        <h2 style="margin-top:50px" class="page-header">Dokter <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">Nama <?php echo form_error('nama') ?></label>
            <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama" value="<?php echo $nama; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Jenkel <?php echo form_error('jenkel') ?></label>
            <select name="jenkel" id="jenkel" class="form-control" value="<?php echo $jenkel; ?>"/>
                <option>--Jenis Kelamin--</option>
                <option>Laki-laki</option>
                <option>Perempuan</option>
            </select >
        </div>
	    <div class="form-group">
            <label for="alamat">Alamat <?php echo form_error('alamat') ?></label>
            <textarea class="form-control" rows="3" name="alamat" id="alamat" placeholder="Alamat"><?php echo $alamat; ?></textarea>
        </div>
	    <div class="form-group">
            <label for="int">No Tlp <?php echo form_error('no_tlp') ?></label>
            <input type="text" class="form-control" name="no_tlp" id="no_tlp" placeholder="No Tlp" value="<?php echo $no_tlp; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Poliklinik <?php echo form_error('poliklinik') ?></label>
            <select  class="form-control" name="poliklinik" id="poliklinik" placeholder="Poliklinik" value="<?php echo $poliklinik; ?>" />
                <option>--Poliklinik--</option>
                <option>Poliklinik Gigi</option>
                <option>Poliklinik Mata</option>
                <option>Poliklinik Kulit</option>
                <option>Poliklinik Gizi</option>
            </select >
        </div>
	    <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('dokter/dokter') ?>" class="btn btn-default">Cancel</a>
	</form>
</div></div>
    </body>
</html>