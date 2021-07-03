<div class="main">
    <div class="content" style="text-align: center">
        <div class="register_account" style="text-align:center;display:inline-block;float: none">
            <h3>Selamat Datang di<?php echo $this->session->flashdata('customer_name'); ?></h3>

            <p>Halo <?php echo $this->session->flashdata('customer_name'); ?>, Kamu berhasil mendaftar
                Silahkan cek email anda <a href="mailto:<?php echo $this->session->flashdata('customer_email'); ?>"><b><?php echo $this->session->flashdata('customer_email'); ?></b></a>
                Dan aktifkan akun anda. Terima kasih.
            </p>



        </div>
        <div class="clear"></div>
    </div>
</div>