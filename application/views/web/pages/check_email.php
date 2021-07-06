<div class="main">
    <div class="content" style="text-align: center">
        <div class="register_account" style="text-align:center;display:inline-block;float: none">
            <h3>Konfirmasi Pengiriman cek</h3>
            <form>
                <table>
                    <tbody>
                        <tr>
                            <td>
                                <div>
                                    <input type="text" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {
                                                this.value = 'Name';
                                            }">
                                </div>

                                <div>
                                    <input type="text" value="City" onfocus="this.value = '';" onblur="if (this.value == '') {
                                                this.value = 'City';
                                            }">
                                </div>

                                <div>
                                    <input type="text" value="Zip-Code" onfocus="this.value = '';" onblur="if (this.value == '') {
                                                this.value = 'Zip-Code';
                                            }">
                                </div>
                                <div>
                                    <input type="text" value="E-Mail" onfocus="this.value = '';" onblur="if (this.value == '') {
                                                this.value = 'E-Mail';
                                            }">
                                </div>
                            </td>
                            <td>
                                <div>
                                    <input type="text" value="Address" onfocus="this.value = '';" onblur="if (this.value == '') {
                                                this.value = 'Address';
                                            }">
                                </div>
                                <div>
                                    <select id="country" name="country" onchange="change_country(this.value)" class="frm-field required">
                                        <option value="null">Pilih kota</option>
                                        <option value="AF">Tuban</option>
                                        <option value="AL">Gresik</option>
                                        <option value="DZ">Makassar</option>
                                        <option value="AR">Surabaya</option>
                                        <option value="AM">Lamongan</option>
                                        <option value="AW">Nganjuk</option>
                                        <option value="AU">Semarang</option>

                                    </select>
                                </div>

                                <div>
                                    <input type="text" value="Phone" onfocus="this.value = '';" onblur="if (this.value == '') {
                                                this.value = 'Phone';
                                            }">
                                </div>

                                <div>
                                    <input type="text" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {
                                                this.value = 'Password';
                                            }">
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="search">
                    <div><button class="grey">Konfirmasi pengiriman</button></div>
                </div>

                <div class="clear"></div>
            </form>
        </div>
        <div class="clear"></div>
    </div>
</div>