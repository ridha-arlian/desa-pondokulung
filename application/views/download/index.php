<section id="content">
    <div class="container">
        <div class="row">

            <div class="span8">
                <?php if (!empty($download)) { ?>
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Berkas</th>
                                <th>Download</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                                foreach ($download as $row) : ?>
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td><?= $row['title']; ?></td>
                                    <td><a href="<?= base_url('upload_file/document/' . $row['berkas']); ?>">
                                            <button class="btn btn-theme" type="submit">Download</button>
                                        </a></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                <?php } else { ?>
                    <h3>Tidak ada berkas!</h3>
                <?php } ?>
            </div>