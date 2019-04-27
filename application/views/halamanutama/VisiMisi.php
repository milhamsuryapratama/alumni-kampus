
<!-- Register -->
	<br>
	<?php  
	foreach ($vm as $v) { ?>
		<div class="register container">

			<div class="container-fluid">

				<div class="row row-eq-height">
					<div class="col-lg-6 nopadding">

						<!-- Register -->

						<div class="register_section d-flex flex-column align-items-center justify-content-center" style="background-color: #42f46e">
							<div class="register_content text-center">
								<img src="<?=base_url()?>assets/foto/logo/<?=$v['logo']?>" width="225" height="225">
							</div>
						</div>

					</div>

					<div class="col-lg-6 nopadding">

						<!-- Search -->

						<div class="search_section d-flex flex-column align-items-center justify-content-center">
							<div class="search_background" style="background-image:url(images/search_background.jpg);"></div>
							<div class="search_content" >
								<center><h1 class="search_title">Visi</h1></center>
								<div style="margin-left: 10px; margin-right: 10px; text-align: justify;"><?=$v['visi']?></div>
								<center><h1 class="search_title">Misi</h1></center>
								<div style="margin-left: 10px; margin-right: 10px; text-align: justify;">
									<?=$v['misi']?>

								</div>

							<!-- <form id="search_form" class="search_form" action="post">
								<input id="search_form_name" class="input_field search_form_name" type="text" placeholder="Course Name" required="required" data-error="Course name is required.">
								<input id="search_form_category" class="input_field search_form_category" type="text" placeholder="Category">
								<input id="search_form_degree" class="input_field search_form_degree" type="text" placeholder="Degree">
								<button id="search_submit_button" type="submit" class="search_submit_button trans_200" value="Submit">search course</button>
							</form> -->
						</div> 
					</div>

				</div>
			</div>
		</div>
	</div>

	<br>
	<?php } ?>
	