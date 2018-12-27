<section class="content">
      <div class="container-fluid">
          <div class="block-header">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Table Barang
                                <div class="header-dropdown m-r-5">
                                    <span>
                                        <?= anchor('#', 'Tambah', ['class' => 'btn btn-primary waves-effect']); ?>  
                                    </span>
                                </div>
                            </h2>
                        </div>
                        <div class="body table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Barang</th>
                                        <th>Gambar</th>
                                        <th>Harga</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($datas as $no => $data): ?>
                                        <tr>
                                            <td><?= ++$no; ?></td>
                                            <td><?= $data->nama_barang; ?></td>
                                            <td><?= $data->gambar; ?></td>
                                            <td>Rp.<?= $data->harga; ?></td>
                                            <td>
                                                <?= anchor("barang/ubah/{$data->id}", 'Ubah', ['class' => 'btn btn-warning waves-effect']); ?>
                                                <?= anchor("barang/hapus/{$data->id}", 'Hapus', ['class' => 'btn btn-danger waves-effect']); ?>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
          </div>
      </div>
  </section>
</div>