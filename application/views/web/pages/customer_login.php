<div class="main">
    <div class="content" style="text-align: center">
        <div class="login_panel" style="width:400px;text-align:center;display:inline-block;float: none">
            <h3>Masuk</h3>
            <p>Masuk dengan formulir di bawah ini.</p>
            <style type="text/css">
                #result {
                    color: red;
                    padding: 5px
                }

                #result p {
                    color: red
                }
            </style>
            <div id="result">
                <p><?php echo $this->session->flashdata('message'); ?></p>
            </div>

            <form action="<?php echo base_url('customer/logincheck'); ?>" method="post">
                <input name="customer_email" placeholder="Enter Your Email" type="text" />
                <input name="customer_password" placeholder="Enter Your Password" type="password" />
                <div class="buttons">
                    <div><button class="grey">Masuk</button></div>
                </div>
            </form>

        </div>
        <div class="clear"></div>
    </div>
</div>