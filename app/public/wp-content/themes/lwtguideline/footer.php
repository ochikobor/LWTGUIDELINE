</div>
    <footer class="footer">
        
        <div class="row footer_row">
            <div class="footer_contact_info">
                <ul>
                    <li>〒136-8535</li>
                    <li>東京都江東区大島2-1-1 LIXIL WINGビル</li>
                    <li><span>MAIL: </span>yusuke1.nishimura@lixil.com</li>
                    <li><a href="<?php echo home_url(); ?>/logout">ログアウト</a></li>
                </ul>
            </div>
        </div>
    </footer>
    </div>

    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery-3.2.1.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/styles/bootstrap4/popper.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/styles/bootstrap4/bootstrap.min.js"></script>

    <script type="text/javascript">
        $(".carousel").carousel();
    </script>

<?php wp_footer(); ?>

</body>

</html>