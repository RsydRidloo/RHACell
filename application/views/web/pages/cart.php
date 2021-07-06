<div class="main">
    <div class="content">
        <div class="cartoption">
            <div class="cartpage">
                <h2>Keranjang Anda</h2>
                <?php if ($this->cart->total_items()) { ?>
                    <table class="tblone">
                        <tr>
                            <th width="5%">No</th>
                            <th width="30%">Nama Produk</th>
                            <th width="10%">Gambar</th>
                            <th width="15%">Harga</th>
                            <th width="20%">Jumlah</th>
                            <th width="15%">Total Harga</th>
                            <th width="5%"></th>
                        </tr>
                        <?php
                        $i = 0;
                        foreach ($cart_contents as $cart_items) {
                            $i++;
                        ?>
                            <tr>
                                <td><?php echo $i; ?></td>
                                <td><?php echo $cart_items['name'] ?></td>
                                <td><img src="<?php echo base_url('uploads/' . $cart_items['options']['product_image']) ?>" alt="" /></td>
                                <td>Rp<?php echo $this->cart->format_number($cart_items['price']) ?></td>
                                <td>
                                    <?php echo $cart_items['qty'] ?>
                                </td>
                                <td>Rp<?php echo $this->cart->format_number($cart_items['subtotal']) ?></td>
                                <td>
                                    <form action="<?php echo base_url('remove/cart'); ?>" method="post">
                                        <input type="hidden" name="rowid" value="<?php echo $cart_items['rowid'] ?>" />
                                        <input type="submit" name="submit" value="HAPUS" />
                                    </form>
                                </td>
                            </tr>
                        <?php } ?>


                    </table>
                    <table style="float:right;text-align:left;" width="40%">
                        <tr>
                            <th>Total Barang</th>
                            <td>Rp <?php echo $this->cart->format_number($this->cart->total()) ?></td>
                        </tr>
                        <tr>
                            <th>Ongkir</th>
                            <td>Rp
                                <?php
                                $total = $this->cart->total();
                                $tax = ($total * 15) / 100;
                                echo $this->cart->format_number($tax);
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <th>Total Biaya</th>
                            <td>Rp <?php echo $this->cart->format_number($tax + $this->cart->total()); ?> </td>
                        </tr>
                    </table>
                <?php
                } else {
                    echo "<h1>Your Cart Empty</h1>";
                }
                ?>
            </div>
            <div class="shopping">
                <div class="shopleft">
                    <a class="btn btn-primary" href="<?php echo base_url('product') ?>">
                        < Lanjut belanja </a>
                </div>
                <div class="shopright">
                    <?php
                    $customer_id = $this->session->userdata('customer_id');
                    if (empty($customer_id)) {
                    ?>
                        <a class="btn btn-primary" href="<?php echo base_url('user_form') ?>">Lanjut ke pembayaran > </a>
                    <?php
                    } elseif (!empty($customer_id)) {
                    ?>
                        <a class="btn btn-primary" href="<?php echo base_url('customer/shipping') ?>">Lanjut ke pembayaran > </a>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
        <div class="clear"></div>
    </div>
</div>