<footer>
    <div class="container">
        <div class="row">
            <div class="span4">
                <div class="widget">
                    <h5 class="widgetheading">Kategori</h5>
                    <?php foreach ($kategori as $row) : ?>
                        <ul class="link-list">
                            <li><a href="<?= base_url($row['url']); ?>"><?= $row['category']; ?></a></li>
                            <?php endforeach; ?>
                            <li><a href="<?= base_url('auth'); ?>" class="link-list">Login Admin</a></li>
                        </ul>
                </div>
            </div>
            <div class="span6">
                <div class="widget">
                    <h5 class="widgetheading">Alamat</h5>
                    <address>
                        <strong>Kantor Desa Pondok Ulung</strong><br>
                        Jl. Syiah Utama, Desa Pondok Ulung, Kecamatan Bandar,<br>
                        Kabupaten Bener Meriah. Kode Pos 24582. Indonesia
                    </address>
                    <p>
                        <i class="icon-phone"></i> +62 822-5378-7953<br>
                        <i class="icon-envelope-alt"></i> desapondokulung@gmail.com
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div id="sub-footer">
        <div class="container">
            <div class="row">
                <div class="span6">
                    <div class="copyright">
                        <p><span>&copy; Copyright <?= date('Y'); ?>. Desa Pondok Ulung</span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
</div>
<a href="#" class="scrollup"><i class="icon-angle-up icon-square icon-bglight icon-2x active"></i></a>

<!-- javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="<?php echo base_url('public/'); ?>js/jquery.js"></script>
<script src="<?php echo base_url('public/'); ?>js/jquery.easing.1.3.js"></script>
<script src="<?php echo base_url('public/'); ?>js/bootstrap.js"></script>

<script src="<?php echo base_url('public/'); ?>js/modernizr.custom.js"></script>
<script src="<?php echo base_url('public/'); ?>js/toucheffects.js"></script>
<script src="<?php echo base_url('public/'); ?>js/google-code-prettify/prettify.js"></script>
<script src="<?php echo base_url('public/'); ?>js/jquery.bxslider.min.js"></script>
<script src="<?php echo base_url('public/'); ?>js/camera/camera.js"></script>
<script src="<?php echo base_url('public/'); ?>js/camera/setting.js"></script>

<script src="<?php echo base_url('public/'); ?>js/jquery.prettyPhoto.js"></script>
<script src="<?php echo base_url('public/'); ?>js/portfolio/jquery.quicksand.js"></script>
<script src="<?php echo base_url('public/'); ?>js/portfolio/setting.js"></script>

<script src="<?php echo base_url('public/'); ?>js/jquery.flexslider.js"></script>
<script src="<?php echo base_url('public/'); ?>js/animate.js"></script>
<script src="<?php echo base_url('public/'); ?>js/inview.js"></script>

<!-- Template Custom JavaScript File -->
<script src="<?php echo base_url('public/'); ?>js/custom.js"></script>

<!-- DataTable js -->
<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#example').DataTable();
    });
</script>

</body>

</html>