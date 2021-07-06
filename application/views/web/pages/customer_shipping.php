<div class="main">
    <div class="content" style="text-align: center">
        <div class="register_account" style="text-align:center;display:inline-block;float: none">
            <h3>Atur Alamat Pengiriman</h3>
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
            <form method="post" action="<?php echo base_url('customer/save/shipping/address'); ?>">
                <table>
                    <tbody>
                        <tr>
                            <td>
                                <div>
                                    <input type="text" name="shipping_name" placeholder="Nama Penerima">
                                </div>
                                <div>
                                    <input type="text" name="shipping_zipcode" placeholder="Kode Pos">
                                </div>
                                <div>
                                    <input type="text" name="shipping_address" placeholder="Masukkan Alamat">
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="search">
                    <div><button class="grey">Konfirmasi Alamat Pengiriman</button></div>
                </div>
                <div class="clear"></div>
            </form>
        </div>
        <div class="clear"></div>
    </div>
</div>