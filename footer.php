</div> <!-- /.container -->

<footer class="blog-footer">

    <div class="row">
        <div class="col-md-4 col-sm-12">
            <img src="https://image.noelshack.com/fichiers/2020/03/3/1579076381-logo-original.png" alt="logo-keenetnoa" class="logo-keen"/>
        </div>

        <div class="col-md-4 col-sm-12">
        <span class="v1"></span>
            <h4 style="margin-left: 10%;">Liens utiles</h4>
            </br>
            <?php dynamic_sidebar('footer-links-center'); ?>
        </div>

        <div class="col-md-4 col-sm-12">
        <span class="v1"></span>
            <h4 style="margin-left: 10%;">Légal</h4>
            </br>
            <?php dynamic_sidebar('footer-links-right'); ?>
        </div>
    </div>

</footer>

<?php wp_footer(); ?>
</body>
</html>