<div id="content">
    <header class="clearfix">
        <h2 class="page_title pull-left">Data Foto dan Video</h2>
        <a href="" class="btn btn-primary btn-xs pull-right" data-toggle="modal" data-target="#tambahFoto"><b>+ Foto</b></a>
        <a href="" class="btn btn-primary btn-xs pull-right" data-toggle="modal" data-target="#tambahVideo"><b>+ Video</b></a>
    </header>

    <div class="content-inner">
        <?php if (validation_errors()) : ?>
            <div class="alert alert-danger">
                <?= validation_errors(); ?>
            </div>
        <?php endif; ?>
        <?= $this->session->flashdata('message'); ?>
        <table id="example" class="table table-striped table-bordered" style="width:100%">
            
        <!-- Foto Tabel -->
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Gambar</th>
                    <th>Keterangan</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                <?php foreach ($image as $row) : ?>
                    <tr>
                        <td><?= ++$no; ?></td>
                        <td><?= $row['title']; ?></td>
                        <td><img src="<?= base_url('upload_file/images/' . $row['galery']); ?>" class="img-thumbnail" style="width:80px; height:60px;"></td>
                        <td><?= $row['keterangan']; ?></td>
                        <td>
                            <a href="<?= base_url('admin/galery/editFoto/' . $row['id']); ?>" class="btn btn-info btn-xs"><span class="glyphicon glyphicon-pencil"> </span></a> |
                            <a onclick="return confirm('Anda yakin mau menghapus foto ini?')" href="<?= base_url('admin/galery/hapusFoto/' . $row['id']); ?>" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"> </span></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>


            <!-- Video Tabel -->
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Video</th>
                    <th>Deskripsi</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                <?php foreach ($video as $row) : ?>
                    <tr>
                        <td><?= ++$no; ?></td>
                        <td><?= $row['title']; ?></td>
                        <td><source src="<?= base_url('upload_file/videos/' . $row['video']); ?>" class="img-thumbnail" style="width:80px; height:60px;" type="video"></td>
                        <td><?= $row['keterangan']; ?></td>
                        <td>
                            <a href="<?= base_url('admin/galery/editVideo/' . $row['id']); ?>" class="btn btn-info btn-xs"><span class="glyphicon glyphicon-pencil"> </span></a> |
                            <a onclick="return confirm('Anda yakin mau menghapus video ini?')" href="<?= base_url('admin/galery/hapusVideo/' . $row['id']); ?>" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"> </span></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<!-- Modal tambah Foto -->
<div class="modal fade" id="tambahFoto" tabindex="-1" role="dialog" aria-labelledby="fotoModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="fotoModalLabel">Tambah foto</h4>
            </div>
            <?php echo form_open_multipart('admin/galery/tambahFoto', array('method' => 'post')); ?>
            <div class="modal-body">
                <div class="form-group">
                    <label for="title">Nama foto</label>
                    <input type="text" name="title" class="form-control" id="title" placeholder="Nama foto..." autofocus>
                </div>
                <div class="form-group">
                    <label for="keterangan">Keterangan</label>
                    <input type="text" name="keterangan" class="form-control" id="keterangan" placeholder="Keterangan...">
                </div>
                <div class="form-group">
                    <label for="foto">Pilih berkas</label>
                    <input type="file" name="foto" class="form-control" id="foto">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Tambah</button>
            </div>
            <?php echo form_close(); ?> 
        </div>
    </div>
</div>

<!-- Modal tambah Video -->
<div class="modal fade" id="tambahVideo" tabindex="-1" role="dialog" aria-labelledby="videoModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="videoModalLabel">Tambah Video</h4>
            </div>
            <?= form_open_multipart('admin/galery/tambahVideo', ['method' => 'post']); ?>
            <div class="modal-body">
                <div class="form-group">
                    <label for="title">Judul Video</label>
                    <input type="text" name="title" class="form-control" id="title" placeholder="Judul Video..." autofocus>
                </div>
                <div class="form-group">
                    <label for="keterangan">Deskripsi Video</label>
                    <input type="text" name="keterangan" class="form-control" id="keterangan" placeholder="Deskripsi Video...">
                </div>
                <div class="form-group">
                    <label for="video">Pilih berkas</label>
                    <input type="file" name="video" class="form-control" id="video">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Tambah</button>
            </div>
            <?= form_close(); ?>
        </div>
    </div>
</div>