<!doctype html>
<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            body{
                padding: 0px;
            }
        </style>
    </head>
    <body>
            <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">

            <!-- ... Your content goes here ... -->
         <h2 style="margin-top:50px" class="page-header">Dokter List</h2>
        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-4 text-center">
                <div style="margin-top: 8px" id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-1 text-right">
            </div>
            <div class="col-md-7 text-right">
                <form action="<?php echo site_url('datdok/dadok'); ?>" class="form-inline" method="get">
                    <div class="input-group">
                        <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                        <span class="input-group-btn">
                            <?php 
                                if ($q <> '')
                                {
                                    ?>
                                    <a href="<?php echo site_url('datdok/dadok'); ?>" class="btn btn-default">Reset</a>
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
        <th>No Tlp</th>
        <th>Poliklinik</th>
        <th>Action</th>
            </tr><?php
            foreach ($dokter_data as $dokter)
            {
                ?>
                <tr>
            <td width="80px"><?php echo ++$start ?></td>
            <td><?php echo $dokter->nama ?></td>
            <td><?php echo $dokter->jenkel ?></td>
            <td><?php echo $dokter->alamat ?></td>
            <td><?php echo $dokter->no_tlp ?></td>
            <td><?php echo $dokter->poliklinik ?></td>
            <td style="text-align:center" width="200px">
                <?php 
                echo anchor(site_url('datdok/read/'.$dokter->id),'<i class="fa fa-list"></i>'); 
                ?>
            </td>
        </tr>
                <?php
            }
            ?>
        </table>
            <div class="col-md-6 text-right">
                <?php echo $pagination ?>
            </div>
    </div>
</div>
    </body>
</html>