<br>
<div class="container">	
	<br>
	<?php  
	foreach ($vm as $v) { ?>
		<div class="col-md-12 banner-grid">		
		<h3 align="center">Lembaga</h3>	
			<div class="banner-grid-sec">
				<div class="grid_info">
					<div class="blg-pic">
						<img src="<?=base_url()?>assets/foto/logo/<?=$v['logo']?>" class="img-responsive" alt="">
					</div>
					<div class="blg-pic-info">
						<h4><a href="#"><?=$v['nama_lembaga']?></a></h4>
						<p><strong>Visi : </strong></p> <p style="text-align: justify; font-size: 12px"><?=$v['visi']?></p>
						<p><strong>Misi : </strong></p> <p style="text-align: justify; font-size: 12px"><?=$v['misi']?></p>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
		
	<?php }
	?>	

</div>
<br>


<!-- <section id="team" class="pb-5">
    <div class="container">
        <h5 class="section-title h1">OUR TEAM</h5>
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="<?=base_url()?>assets/foto/logo/logop4nj.png" alt="card image" width="300"></p>
                                    <br>
                                    <h4 class="card-title">Sunlimetech</h4>
                                    <p class="card-text">This is basic card with image on top, title, description and button.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<br> -->

