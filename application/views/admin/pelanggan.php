<section class="content">
      <div class="container-fluid">
          <div class="block-header">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2 class="d-inline">
                                Nama Pelanggan
                            </h2>
                            <div class="header-dropdown m-r-5">                            
                                <span >
                                    <?= anchor('pelanggan/insert','<button type="button" class="btn btn-primary">Tambah</button>'); ?>
                                </span>
                            </div>
                        </div>
                        <br>    
                        <div class="body table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Pelanggan</th>
                                        <th>Password</th>
                                        <th>Email</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($datas as $no => $data): ?>   
                                        <tr>
                                            <td><?= ++$no; ?></td>
                                            <td><?= $data->nama; ?></td>
                                            <td><?= $data->password; ?></td>
                                            <td><?= $data->email; ?></td>
                                            <td>
                                                <?= anchor("pelanggan/ubah/{$data->id}", 'ubah', ['class' => 'btn btn-warning']);?>  
                                                <?= anchor("pelanggan/hapus/{$data->id}", 'hapus', ['class' => 'btn btn-danger']);?>
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