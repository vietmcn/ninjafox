<?php 
if ( !defined('ABSPATH') ) {
    exit;
}
add_action('wp_footer', function() {
	?>
		<script>
			(function() {
				var cx = '011986442607755133710:kfeywyfxn94';
				var gcse = document.createElement('script');
				gcse.type = 'text/javascript';
				gcse.async = true;
				gcse.src = '//cse.google.com/cse.js?cx=' + cx;
				var s = document.getElementsByTagName('script')[0];
				s.parentNode.insertBefore(gcse, s);
			})();
		</script>
	<?php 
} );