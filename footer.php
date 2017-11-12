			<footer>

				<div>
					<?php if( dynamic_sidebar( 'footer_left' ) ): ?>

					<?php else: ?>
						<p>Insert content for left footer area.</p>

					<?php endif; ?>
				</div>


				<div>
					<?php if( dynamic_sidebar( 'footer_middle' ) ): ?>

					<?php else: ?>
						<p>Insert content for middle footer area.</p>

					<?php endif; ?>
				</div>


				<div>
					<?php if( dynamic_sidebar( 'footer_right' ) ): ?>

					<?php else: ?>
						<p>Insert content for right footer area.</p>

					<?php endif; ?>
				</div>


				<p>&copy; Copyright <?php echo date( 'Y' ); ?></p>


			</footer>

		</div><!-- End .page-wrap -->

	<?php wp_footer() ;?>
	<script src="http://localhost:35729/livereload.js"></script>

	</body>

</html>