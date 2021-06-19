<?php echo form_open('cost/doCek'); ?>
    <div class="card rounded-lg">
        <div class="card-header">Form Cek Ongkir</div>
        <div class="card-body">            
            <div class="form-row">
                <div class="col-lg-12 row">
                    <label class="col-md-2">Kota Asal</label>
                    <div class="col-md-6">
                        <div class="form-group">
                            <select class="form-control" id="exampleFormControlSelect1" name="origin_id">
                                <option>--Pilih Kota--</option>
                                <?php foreach ($list_city as $row) {
                                    // code...
                                    echo "<option value='".$row['city_id']."'>".$row['city_name'];
                                }?>
                            </select>
                        </div>
                    </div>                        
                </div>

                <div class="col-lg-12 row">
                    <label class="col-md-2">Kota Tujuan</label>
                    <div class="col-md-6">
                        <div class="form-group">
                            <select class="form-control" id="exampleFormControlSelect1" name="destination_id">
                                <option>--Pilih Kota--</option>
                                <?php foreach ($list_city as $row) {
                                    // code...
                                    echo "<option value='".$row['city_id']."'>".$row['city_name'];
                                }?>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 row">
                    <label class="col-md-2">Berat Barang</label>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input class="form-control" name="txtBerat" type="text" placeholder="Berat Barang" />
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 row">
                    <label class="col-md-2">Kurir</label>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input class="form-control" name="txtKurir" type="text" placeholder="Kurir" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer text-right">
            <a href="<?php echo base_url();?>vehicle" class="btn btn-secondary">Batal</a>
            <input class="btn btn-primary" type="submit" value="Cek Ongkir" />
        </div>
    </div>
</form>
