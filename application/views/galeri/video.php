<section id="content">
    <div class="container">
        <div class="row">

            <div class="span8">
                <?php foreach ($video as $row) : ?>
                    <article>
                        <div class="row">

                            <div class="span8">
                                <div class="post-image">
                                    <div class="post-heading">
                                        <h3><a href="#"><?= $row['title']; ?></a></h3>
                                    </div>
                                    <video width="500" height="420" controls>
                                    <source type="video/mp4" src="<?= base_url('upload_file/videos/' . $row['video']); ?>" alt="" />
                                </div>
                                <div class="meta-post">
                                    <ul>
                                        <li><i class="icon-file"></i></li>
                                        <li>By <a href="#" class="author">Admin</a></li>
                                        <li>On <a href="#" class="date"><?= date('d F Y', $row['date_created']); ?></a></li>
                                        <li>Kategori: <a href="#">Video</a></li>
                                    </ul>
                                </div>
                                <div class="post-entry">
                                    <p><?= $row['keterangan']; ?></p>
                                </div> 
                            </div>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>