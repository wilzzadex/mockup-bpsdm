<?php include '_header.php' ?>



<section id="page-title">

	<div class="container clearfix">
		<h1>Kontak</h1>
		<!-- <span>Get in Touch with Us</span> -->
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="#">Home</a></li>
			<li class="breadcrumb-item active" aria-current="page">Kontak</li>
		</ol>
	</div>

</section>

<section id="content" style="margin-bottom: 0px;">

	<div class="content-wrap">

		<div class="container clearfix">
			
			<div class="postcontent nobottommargin">

				<div class="fancy-title title-dotted-border">
					<h3>Kirim Kami Email</h3>
				</div>

				<div class="form-widget">

					<div class="form-result"></div>

					<form class="nobottommargin" id="template-contactform" name="template-contactform"
						action="include/form.php" method="post" novalidate="novalidate">

						<div class="form-process"></div>

						<div class="col_one_third">
							<label for="template-contactform-name">Nama <small>*</small></label>
							<input type="text" id="template-contactform-name" name="template-contactform-name" value=""
								class="sm-form-control required">
						</div>

						<div class="col_one_third">
							<label for="template-contactform-email">Email <small>*</small></label>
							<input type="email" id="template-contactform-email" name="template-contactform-email"
								value="" class="required email sm-form-control">
						</div>

						<div class="col_one_third col_last">
							<label for="template-contactform-phone">No Telpon</label>
							<input type="text" id="template-contactform-phone" name="template-contactform-phone"
								value="" class="sm-form-control">
						</div>

						<div class="clear"></div>

						<div class="col_full">
							<label for="template-contactform-subject">Subjek <small>*</small></label>
							<input type="text" id="template-contactform-subject" name="subject" value=""
								class="required sm-form-control">
						</div>

						<!-- <div class="col_one_third col_last">
									<label for="template-contactform-service">Services</label>
									<select id="template-contactform-service" name="template-contactform-service" class="sm-form-control">
										<option value="">-- Select One --</option>
										<option value="Wordpress">Wordpress</option>
										<option value="PHP / MySQL">PHP / MySQL</option>
										<option value="HTML5 / CSS3">HTML5 / CSS3</option>
										<option value="Graphic Design">Graphic Design</option>
									</select>
								</div> -->

						<div class="clear"></div>

						<div class="col_full">
							<label for="template-contactform-message">Pesan <small>*</small></label>
							<textarea class="required sm-form-control" id="template-contactform-message"
								name="template-contactform-message" rows="6" cols="30"></textarea>
						</div>

						<div class="col_full hidden">
							<input type="text" id="template-contactform-botcheck" name="template-contactform-botcheck"
								value="" class="sm-form-control">
						</div>



						<div class="col_full">
							<button class="button button-3d nomargin" type="submit" id="template-contactform-submit"
								name="template-contactform-submit" value="submit">Kirim</button>
						</div>

						<input type="hidden" name="prefix" value="template-contactform-">

					</form>

				</div>

			</div>
			<div class="sidebar col_last nobottommargin">

			<i class="fa fa-map-marker" aria-hidden="true"></i> Jl. Medan merdeka Timur No.
										5, Jakarta <br>
										<i class="fa fa-phone" aria-hidden="true"></i> (021) 3847519 <br>
										<i class="fa fa-envelope" aria-hidden="true"></i> humasti-bpsdmp@dephub.go.id

				<div class="widget noborder notoppadding">


				</div>

				<div class="widget noborder notoppadding">

				<a href="https://www.facebook.com/bpsdmkemenhub/" target="_blank" class="social-icon si-small si-dark si-facebook">
						<i class="icon-facebook"></i>
						<i class="icon-facebook"></i>
					</a>

					<a href="https://twitter.com/BPSDMP151?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor" target="_blank" class="social-icon si-small si-dark si-twitter">
						<i class="icon-twitter"></i>
						<i class="icon-twitter"></i>
					</a>

					<a href="https://www.instagram.com/bpsdmp151/" target="_blank" class="social-icon si-small si-dark si-instagram">
						<i class="icon-instagram"></i>
						<i class="icon-instagram"></i>
					</a>

					<a href="https://www.youtube.com/channel/UCNGUU2impwfDjc2L_7MFOGg" target="_blank" class="social-icon si-small si-dark si-youtube">
						<i class="icon-youtube"></i>
						<i class="icon-youtube"></i>
					</a>

				</div>

			</div>
			<!-- Post Content
					============================================= -->
			<!-- .postcontent end -->


		</div>
	</div>


</section>

<?php include '_footer.php' ?>