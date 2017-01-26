<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Single Site
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
            <p>© <?php echo date('Y'); ?> Promenade HB | Stubbfräsning i Sörmland</p>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #wrapper -->
</div><!-- #page -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-23363033-1', 'auto');
  ga('send', 'pageview');

</script>

<?php wp_footer(); ?>

</body>
</html>
