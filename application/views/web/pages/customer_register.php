<div class="main">
    <div class="content" style="text-align: center">
        <div class="register_account" style="text-align:center;display:inline-block;float: none">
            <h3>Daftar Akun Pengguna</h3>
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
            <form method="post" action="<?php echo base_url('customer/save'); ?>">
                <table>
                    <tbody>
                        <tr>
                            <td>
                                <div>
                                    <input type="text" name="customer_name" placeholder="Masukkan Nama Anda">
                                </div>

                                <div>
                                    <input type="text" name="customer_password" placeholder="Buat Password">

                                </div>

                                <div>
                                    <input type="text" name="customer_city" placeholder="Pilih Kota">
                                </div>
                                <div>
                                    <input type="text" name="customer_phone" placeholder="Masukkan No Telepon">
                                </div>
                            </td>
                            <td>
                                <div>
                                    <input type="text" name="customer_email" placeholder="Masukkan Email">
                                </div>


                                <div>
                                    <input type="text" name="customer_address" placeholder="Masukkan Alamat">
                                </div>

                                <div>
                                    <select id="country" name="customer_country" class="frm-field required">
                                        <option value="null">Pilih Kota</option>
                                        <option value="Surabaya">Surabaya</option>
                                        <option value="Gresik">Gresik</option>
                                        <option value="Sidoarjo">Sidoarjo</option>
                                        <option value="Tuban">Tuban</option>

                                    </select>
                                </div>

                                <div>
                                    <input type="text" name="customer_zipcode" placeholder="Masukkan Kode Pos">
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="search">
                    <div><button class="grey">Buat Akun</button></div>
                </div>
                <p class="terms">Saya menyetujui <a href="#">Terms &amp; Conditions</a>.</p>
                <div class="clear"></div>
            </form>
        </div>
        <div class="clear"></div>
    </div>
</div>