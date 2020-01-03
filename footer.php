
	<footer class="footer_main">
		<div class="container">
			<div class="footer_top">
				<div class="row">
				
					<div class="col-sm-6 col-lg-4 footer_left footer_col">
						<?php dynamic_sidebar('sidebar-4'); ?>
						<ul class="footer_social_icons d-inline-block align-middle">
							<li class="d-inline-flex"><a href="<?php echo of_get_option('facebook_url'); ?>" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="11" height="20" viewBox="0 0 11 20"><g><g><path fill="#36415f" d="M10.585.001L7.947-.004c-2.964 0-4.88 1.933-4.88 4.923v2.27H.415A.411.411 0 0 0 0 7.597v3.288a.41.41 0 0 0 .415.407h2.652v8.298c0 .225.186.408.415.408h3.461c.23 0 .415-.183.415-.408v-8.298h3.102a.41.41 0 0 0 .414-.407l.002-3.288a.404.404 0 0 0-.122-.288.417.417 0 0 0-.293-.12H7.358V5.265c0-.925.224-1.394 1.45-1.394h1.777a.411.411 0 0 0 .414-.409V.408a.411.411 0 0 0-.414-.407z"/></g></g></svg></a></li>
							<li class="d-inline-flex"><a href="<?php echo of_get_option('twitter_url'); ?>" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="20" viewBox="0 0 25 20"><g><g><path fill="#36415f" d="M24.558 2.363c-.898.402-1.854.668-2.85.797A4.997 4.997 0 0 0 23.883.37a9.745 9.745 0 0 1-3.138 1.223 4.913 4.913 0 0 0-3.613-1.598c-2.74 0-4.945 2.268-4.945 5.048 0 .4.034.785.115 1.151C8.19 5.99 4.551 3.98 2.106.916a5.156 5.156 0 0 0-.678 2.55c0 1.749.883 3.298 2.198 4.194a4.809 4.809 0 0 1-2.235-.62v.054c0 2.453 1.715 4.49 3.963 4.959a4.854 4.854 0 0 1-1.297.165c-.316 0-.636-.018-.936-.085.64 1.998 2.46 3.467 4.622 3.516a9.827 9.827 0 0 1-6.134 2.15c-.406 0-.795-.017-1.184-.07a13.737 13.737 0 0 0 7.59 2.267c9.104 0 14.081-7.693 14.081-14.361 0-.222-.007-.438-.018-.651a9.995 9.995 0 0 0 2.48-2.621z"/></g></g></svg></a></li>
							<li class="d-inline-flex"><a href="<?php echo of_get_option('linkedin_url'); ?>" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"><g><g><path fill="#36415f" d="M19.994 5.515v8.962a5.524 5.524 0 0 1-5.515 5.519H5.525a5.524 5.524 0 0 1-5.515-5.52V5.516a5.524 5.524 0 0 1 5.515-5.52h8.954a5.524 5.524 0 0 1 5.515 5.52zm-1.774 8.962V5.515A3.747 3.747 0 0 0 14.48 1.77H5.525a3.747 3.747 0 0 0-3.742 3.745v8.962a3.747 3.747 0 0 0 3.742 3.744h8.954a3.747 3.747 0 0 0 3.742-3.744zm-3.069-4.481a5.157 5.157 0 0 1-5.15 5.153 5.157 5.157 0 0 1-5.148-5.153 5.158 5.158 0 0 1 5.149-5.154c2.84 0 5.149 2.313 5.149 5.154zm-1.773 0a3.383 3.383 0 0 0-3.376-3.38 3.383 3.383 0 0 0-3.377 3.38 3.38 3.38 0 0 0 3.377 3.378 3.38 3.38 0 0 0 3.376-3.378zm2.909-6.277c.242.242.38.576.38.92 0 .342-.138.678-.38.92-.243.241-.577.38-.92.38-.342 0-.677-.139-.918-.38a1.31 1.31 0 0 1-.382-.92c0-.344.14-.678.382-.92.24-.242.576-.381.918-.381.343 0 .678.139.92.38z"/></g></g></svg></a></li>
							<li class="d-inline-flex"><a href="<?php echo of_get_option('youtube_url'); ?>" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"><g><g><path fill="#36415f" d="M.305 6.245H4.71v13.75H.305zm19.702 4.472v9.279h-4.404v-8.75c-1.405-3.457-4.735 1.25-4.735 1.25v7.5H6.462V6.245h4.406v2.63c.537-.733 2.166-2.63 4.735-2.63.3 0 .556.034.79.082.06.01.12.021.179.035.049.013.093.03.14.045a4.45 4.45 0 0 1 3.295 4.31zM2.46-.005c1.19 0 2.155.98 2.155 2.188 0 1.208-.965 2.188-2.155 2.188S.305 3.391.305 2.183C.305.975 1.27-.005 2.46-.005z"/></g></g></svg></a></li>
						</ul>
					</div>
					
					<div class="col-sm-6 col-lg-4 footer_middle footer_col">
						<?php dynamic_sidebar('sidebar-1'); ?>
					</div>
					
					<div class="col-12 col-lg-4 footer_right footer_col">
						<?php dynamic_sidebar('sidebar-3'); ?>
						<form class="footer_newsletter text-sm-right">
							<?php echo do_shortcode('[contact-form-7 id="184" title="footer_mail"]'); ?>
						</form>
					</div>
					
				</div>
			</div>
			
			<div class="footer_bottom">
				<div class="col-12 footer_bottom_text d-flex align-items-center justify-content-center">
					<span><?php dynamic_sidebar('sidebar-2'); ?></span>
				</div>
			</div>
		</div>
	</footer>

<?php wp_footer(); ?>

	<div class="modal home_form_modal_main" id="home_form_modal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <button type="button" class="close text-right" data-dismiss="modal"> <img src="http://localhost:81/villalautbali/wp-content/uploads/2019/08/modal_close.png" alt="" class="img-fluid"/></button>
                    <!-- Modal body -->
                    <div class="modal-body">
                        <h2 class="title_46 text-center">Submit Personal Details</h2>
						
						<?php echo do_shortcode('[contact-form-7 id="185" title="home_form_modal"]'); ?>
						
						<!--
                        <form class="modal_form font_gilory">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>First Name *</label>
                                    <input type="text" class="form-control" placeholder="Enter First Name">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Last Name *</label>
                                    <input type="text" class="form-control" placeholder="Enter Last Name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Email Address *</label>
                                <input type="email" class="form-control" placeholder="Enter Email Address">
                            </div>
                            <div class="form-group">
                                <label>Comments</label>
                                <textarea class="form-control" placeholder="Enter Comments"></textarea>
                            </div>
                            <button type="submit" class="button blue_btn">Submit</button>
                        </form>
						-->
                    </div>
                </div>
            </div>
        </div>


</body>
</html>
