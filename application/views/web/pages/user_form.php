<div class="main">
    <div class="content">
        <div class="login_panel">
            <h3>Masuk</h3>
            <p>Masuk dengan mengisi form dibawah.</p>
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
                <p><?php echo $this->session->flashdata('messagelogin'); ?></p>
            </div>

            <form action="<?php echo base_url('customer/shipping/login'); ?>" method="post">
                <input name="customer_email" placeholder="Enter Your Email" type="text" />
                <input name="customer_password" placeholder="Enter Your Password" type="password" />
                <p class="note">Jika kamu lupa password tinggal masukkan email kamu dan klik <a href="#">here</a></p>
                <div class="buttons">
                    <div><button class="grey">Masuk</button></div>
                </div>
            </form>
        </div>
        <div class="register_account">
            <h3>Pendaftaran akun baru</h3>
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
            <form method="post" action="<?php echo base_url('customer/shipping/register'); ?>">
                <table>
                    <tbody>
                        <tr>
                            <td>
                                <div>
                                    <input type="text" name="customer_name" placeholder="Enter Your Name">
                                </div>

                                <div>
                                    <input type="text" name="customer_password" placeholder="Enter Your Password">

                                </div>

                                <div>
                                    <input type="text" name="customer_city" placeholder="Enter Your City">
                                </div>
                                <div>
                                    <input type="text" name="customer_phone" placeholder="Enter Your Phone">
                                </div>
                            </td>
                            <td>
                                <div>
                                    <input type="text" name="customer_email" placeholder="Enter Your Email">
                                </div>


                                <div>
                                    <input type="text" name="customer_address" placeholder="Enter Your Address">
                                </div>

                                <div>
                                    <select id="country" name="customer_country" class="frm-field required">
                                        <option value="null">Pilih Negara</option>
                                        <option value="Afghanistan">Indonesia</option>
                                        <option value="Bangladesh">Malaysia</option>
                                        <option value="Pakistan">Singapore</option>
                                        <option value="India">Brunei</option>

                                    </select>
                                </div>

                                <div>
                                    <input type="text" name="customer_zipcode" placeholder="Enter Your ZipCode">
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="search">
                    <div><button class="grey">Create Account</button></div>
                </div>
                <p class="terms">By clicking 'Create Account' you agree to the <a href="#">Terms &amp; Conditions</a>.</p>
                <div class="clear"></div>
            </form>
        </div>
        <div class="clear"></div>
    </div>
</div>