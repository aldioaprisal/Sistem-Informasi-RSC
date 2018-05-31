    <div id="page-wrapper">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"><?= $title ?></h1>
                </div>
           </div>
            <!-- ... Your content goes here ... -->
            <div class="alert alert-info">
  				Selamat Datang Di Rumah Sakit Ceria<strong> <?php echo $this->session->userdata('username')?></strong>
		   </div>
      
        </div>
      </div>
<?php $this->load->view("template/header"); ?>

<?php $this->load->view("template/sidebar"); ?>

<?php $this->load->view("template/footer"); ?>