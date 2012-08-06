
</div>
</div>
<div class="hrline" style="width:100%;"></div>

<div id="footer" class="inset">
<div class="box">
<!-- credit links are not required to remain intact, but is appreciated. Thanks! -->
	<p class="fl ger">Tel: (011) 4444 5555</p>
	<p class="fr">&copy; <?php echo date("Y"); ?> <?php bloginfo('name'); ?></p>

</div>
</div>

<?php 
$pov_google_analytics = get_option('pov_google_analytics');
if ($pov_google_analytics != '') { echo stripslashes($pov_google_analytics); }
?>
<?php wp_footer(); ?>
</body>
</html>
