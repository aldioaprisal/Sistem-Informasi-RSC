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
        <h2 style="margin-top:50px" class="page-header">Data Pasien</h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">Nama <?php echo form_error('nama') ?></label>
            <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama" value="<?php echo $nama; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Jenis Kelamin <?php echo form_error('jenkel') ?></label>
            <select type="text" class="form-control" name="jenkel" id="jenkel" placeholder="Jenis Kelamin" value="<?php echo $jenkel; ?>" />
                <option>--Jenis Kelamin--</option>
                <option>Laki-Laki</option>
                <option>Perempuan</option>
            </select>
        </div>
	    <div class="form-group">
            <label for="alamat">Alamat <?php echo form_error('alamat') ?></label>
            <textarea class="form-control" rows="3" name="alamat" id="alamat" placeholder="Alamat"><?php echo $alamat; ?></textarea>
        </div>
	    <div class="form-group">
            <label for="int">Umur <?php echo form_error('umur') ?></label>
            <input type="text" class="form-control" name="umur" id="umur" placeholder="Umur" value="<?php echo $umur; ?>" />
        </div>
        <div class="form-group">
            <label for="int">Poliklinik <?php echo form_error('poliklinik') ?></label>
            <select type="text" class="form-control" name="poliklinik" id="poliklinik" placeholder="poliklinik" value="<?php echo $poliklinik; ?>" />
                <option>--Poliklinik--</option>
                <option>Gigi</option>
                <option>Mata</option>
                <option>Kulit</option>
                <option>Gizi</option>
            </select>
        </div>
	    <div class="form-group">
            <label for="int">No Tlp <?php echo form_error('no_tlp') ?></label>
            <input type="text" class="form-control" name="no_tlp" id="no_tlp" placeholder="No Tlp" value="<?php echo $no_tlp; ?>" />
        </div>
	    <input type="hidden" name="id_pasien" value="<?php echo $id_pasien; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('pasien/pasien') ?>" class="btn btn-default">Cancel</a>
	</form>
</div>
</div>
    </body>
</html>