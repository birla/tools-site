		<!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script> -->
		<script>window.jQuery || document.write('<script src="/js/vendor/jquery-1.9.1.js"><\/script>')</script>

		<script src="/js/vendor/bootstrap.min.js"></script>
		<script src="/js/vendor/underscore.js"></script>

		<script src="/js/plugins.js"></script>
		<script src="/js/main.js"></script>

		<?php

		if(isset($scripts) && is_array($scripts)) {
			foreach ($scripts as $script) {
				echo '<script src="' . $script . '"></script>' . PHP_EOL;
			}
		}

		?>

		<script>
			var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
			(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
			g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
			s.parentNode.insertBefore(g,s)}(document,'script'));
		</script>
	</body>
</html>