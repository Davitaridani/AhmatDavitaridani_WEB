<diV class="row">
    <div class="col-sm-6">
        <div class="card card-danger">
            <div class="card-header">
                <h3 class="card-title">No Rekening Toko</h3>
            </div>

            <div class="card-body">

                <div class="form-group">
                    <p>Silahkan Tranfer Uang Ke No Rekening Dibawah Ini Sebesar :
                    <h1 class="text-danger">Rp. <?= number_format($pesanan->total_bayar, 0) ?>.-</h1>
                    </p><br>
                    <table class="table">
                        <tr>
                            <th>Bank</th>
                            <th>No Rekening</th>
                            <th>Atas Nama</th>
                        </tr>
                        <?php foreach ($rekening as $key => $value) { ?>
                            <tr>
                                <td><?= $value->nama_bank ?></td>
                                <td><?= $value->no_rek ?></td>
                                <td><?= $value->atas_nama ?></td>
                            </tr>
                        <?php } ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="card card-danger">
            <div class="card-header">
                <h3 class="card-title">Upload Bukti Pembayaran</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <?php echo
            form_open_multipart('pesanan_saya/bayar/' . $pesanan->id_transaksi);
            ?>
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Atas Nama</label>
                    <input class="form-control" name="atas_nama" placeholder="Atas Nama" required>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Nama Bank</label>
                    <input name="nama_bank" class="form-control" placeholder="Nama Bank" required>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">No Rekening</label>
                    <input name="no_rek" class="form-control" placeholder="No Rekening" required>
                </div>

                <div class="form-group">
                    <label for="exampleInputFile">Bukti Bayar</label>
                    <input type="file" name="bukti_bayar" class="form-control" required>
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="<?= base_url('pesanan_saya') ?>" class="btn btn-success">Kembali</a>
            </div>
            <?php echo
            form_close()
            ?>
        </div>
        <!-- /.card -->
    </div>
</diV>