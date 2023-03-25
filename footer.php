			</main>
			<!-- end main-->
			
			<?php if ( !is_page_template(['template-homepage.php']) ) { ?>
				<!-- begin footer-->
				<footer class="footer section bg figure">
					<?php get_template_part( 'template-parts/content', 'footer' ); ?>
				</footer>
				<!-- end footer-->
			<?php } ?>

			<?php if ( is_page_template(['template-laboratory.php']) ) { ?>
				<?php get_template_part( 'template-parts/modals/modal', 'compare' ); ?>
				<?php get_template_part( 'template-parts/modals/modal', 'bargain' ); ?>
			<?php } ?>

			
			<?php get_template_part( 'template-parts/modals/modal', 'info' ); ?>
			<?php get_template_part( 'template-parts/modals/modal', 'reportBug' ); ?>
			<?php get_template_part( 'template-parts/modals/modal', 'modalVideo' ); ?>

			<?php get_template_part( 'template-parts/parts/part', 'toTop' ); ?>

		</div>
		<!-- end wrapper-->

		<?php if ( is_page_template(['template-homepage.php']) ) { ?>
			<!-- start robot-->
			<script src="<?php echo get_template_directory_uri() . '/robot/scripts/three.js' ?>"></script>
			<script type="module" src="<?php echo get_template_directory_uri() . '/robot/scripts/GLTFLoader.js' ?>"></script>
			<script type="module" src="<?php echo get_template_directory_uri() . '/robot/scripts/EffectComposer.js' ?>"></script>
			<script type="module" src="<?php echo get_template_directory_uri() . '/robot/scripts/RenderPass.js' ?>"></script>
			<script type="module" src="<?php echo get_template_directory_uri() . '/robot/scripts/UnrealBloomPass.js' ?>"></script>
			<script type="module" src="<?php echo get_template_directory_uri() . '/robot/scripts/main.js' ?>"></script>
			<!-- end robot-->
		<?php } ?>


		<?php wp_footer(); ?>

		<?php if (get_field('footer_scripts', 'option')) { ?>
			<?php the_field('footer_scripts', 'option'); ?>
		<?php } ?>

	</body>
	<!-- end body -->

</html>
<!-- end html -->
