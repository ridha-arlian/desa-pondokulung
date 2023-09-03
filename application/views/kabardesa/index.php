<section id="content">
    <div class="container">
        <div class="row">

            <div class="span8">
                <?php foreach ($kabardesa as $row) : ?>
                    <article>
                        <div class="row">

                            <div class="span8">
                                <div class="post-image">
                                    <div class="post-heading">
                                        <h3><a href="#"><?= $row['title']; ?></a></h3>
                                    </div>

                                    <img src="<?= base_url('upload_file/images/' . $row['image']); ?>" alt="" />
                                </div>
                                <div class="meta-post">
                                    <ul>
                                        <li><i class="icon-file"></i></li>
                                        <li>By <a href="#" class="author">Admin</a></li>
                                        <li>On <a href="#" class="date"><?= date('d F Y', $row['date_created']); ?></a></li>
                                        <li>Kategori: <a href="#">Kabar desa</a></li>
                                    </ul>
                                </div>
                                <div class="post-entry">
                                    <p><?= word_limiter($row['content'], 20); ?></p>
                                    <a href="<?php echo base_url(); ?>kabardesa/readmores/<?php echo $row['id']; ?>" class="readmore">Read more <i class="icon-angle-right"></i></a>
                                </div> 
                            </div>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>