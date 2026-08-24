<?php
    $not_top = ($page_id === 'top') ? '' : $path . 'index.php';
?>
<footer class="l-footer">
        <nav class="l-footer__nav">
            <ul class="l-footer__list">
                <li class="l-footer__item">
                    <a class="l-footer__link c-hover c-hover__underline" href="<?php echo $path; ?>index.php">Top</a>
                </li>
                <li class="l-footer__item">
                    <a class="l-footer__link c-hover c-hover__underline" href="<?php echo $not_top; ?>#about">About</a>
                </li>
                <li class="l-footer__item">
                    <a class="l-footer__link c-hover c-hover__underline" href="<?php echo $not_top; ?>#services">Services</a>
                </li>
                <li class="l-footer__item">
                    <a class="l-footer__link c-hover c-hover__underline" href="<?php echo $not_top; ?>#works">Works</a>
                </li>
                <li class="l-footer__item">
                    <a class="l-footer__link c-hover c-hover__underline" href="<?php echo $not_top; ?>#skills">Skills</a>
                </li>
                <li class="l-footer__item">
                    <a class="l-footer__link c-hover c-hover__underline" href="<?php echo $not_top; ?>#flow">Flow</a>
                </li>
                <li class="l-footer__item">
                    <a class="l-footer__link c-hover c-hover__underline" href="<?php echo $not_top; ?>#faq">FAQ</a>
                </li>
                <li class="l-footer__item">
                    <a class="l-footer__link c-hover c-hover__underline" href="<?php echo $path; ?>contact/contact.html">Contact</a>
                </li>
            </ul>
            <a class="l-footer__privacy c-hover c-hover__underline" href="<?php echo $path; ?>pages/privacy.php">プライバシーポリシー</a>
        </nav>
        <small class="l-footer__copyright">© 2026 Kengo Hidaka</small>
    </footer>

    <script src="<?php echo $path; ?>js/function.js"></script>
    <?php if ($page_id === 'contact'): ?>
    <script src="js/mailform-js.php" id="mailform-js"></script>
	<script src="js/jquery.autoKana.js"></script>
	<script>
		(function( $ ) {
			$.fn.autoKana( 'input[name="name_1"]', 'input[name="read_1"]', {
				katakana: false
			});
		})( jQuery );
	</script>
	<script src="js/ajaxzip3.js"></script>
    <?php endif; ?>
    
</body>
</html>