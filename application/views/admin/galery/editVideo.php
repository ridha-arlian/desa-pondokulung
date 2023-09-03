<div id="content">
    <header>
        <h2 class="page_title">Update Video</h2>
    </header>

    <div class="content-inner">
        <div class="form-wrapper">
            <?php echo form_open_multipart('admin/galery/editVideo', array('method' => 'POST')); ?>
            <input type="hidden" name="id" value="<?= $videos['id']; ?>">
            <div class="form-group">
                <label for="title">Judul</label>
                <input type="text" name="title" class="form-control" id="title" value="<?= $videos['title']; ?>">
                <?= form_error('title', '<small class="text-danger">', '</small>'); ?>
            </div>

            <div class="form-group">
                <label for="name">Video</label>
                <div class="col-sm-2">
                    <source src="<?= base_url('upload_file/videos/' . $videos['video']); ?>" class="img-thumbnail" style="width:100px; height:80px;" type="video">
                </div>
                <input class="form-control-file <?php echo form_error('video') ? 'is-invalid' : '' ?>" type="file" name="video" />
                <input type="hidden" name="old_video" value="<?php echo $videos['video']; ?>" />
                <div class="invalid-feedback">
                    <?= form_error('video', '<esmall class="text-danger">', '</esmall>'); ?>
                </div>
            </div>
            <br><br>

            <div class="form-group">
                <label for="keterangan">Deskripsi</label>
                <input type="text" name="keterangan" class="form-control" value="<?= $videos['keterangan']; ?>">
                <?= form_error('keterangan', '<small class="text-danger">', '</small>'); ?>
            </div>

            <div class="clearfix">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>
