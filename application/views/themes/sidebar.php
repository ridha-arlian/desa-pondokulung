<div class="span4">

    <aside class="right-sidebar">

        <div class="widget">
            <form>
                <div class="input-append">
                    <input class="span2" id="appendedInputButton" type="text" placeholder="Type here">
                    <button class="btn btn-theme" type="submit">Cari</button>
                </div>
            </form>
        </div>

        <div class="widget">

            <h5 class="widgetheading">Kategori</h5>
                <?php foreach ($kategori as $row) : ?>
                    <li><i class="icon-angle-right"></i> <a href="<?= base_url($row['url']); ?>"><?= $row['category']; ?></a><span></span></li>
                <?php endforeach; ?>
            </ul>
        </div>

        <div class="widget">

            <h5 class="widgetheading">Video Profil Desa</h5>
            <div class="video-container">
                <iframe src="https://www.youtube.com/embed/LbFPMq76ZLo" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
    </aside>
</div>

</div>
</div>
</section>