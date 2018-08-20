<?php $this->load->view('layout/header.php');?>
<?php $this->load->view('layout/nav.php');?>
<div class="container">
    HOME ITS MY Home
    <button type="button" class="btn btn-primary">HHHH   HOME</button>
    <br>
    <?php echo base_url().'home';?>
    <br>
    <?php echo site_url().'/home';?>
    <br>
    <?php echo base_url().'index.php/about';?>
</div>
<?php $this->load->view('layout/footer.php');?>
   