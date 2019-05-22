<div class="content-wrapper">
	<section class="content-header">
      <h1>
        Tambah Edit Soal
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Tambah Edit Soal</li>
      </ol>
    </section>
    <section class="content">
    	<div class="row">
    		<div class="col-md-12">    			

    			<div class="box box-primary"> 
            <div class="box-header with-border">
              <h3 class="box-title">Form Edit Soal</h3>
            </div>
    				<!-- form start -->
    				<form action="<?=base_url()?>administrator/edit_soal/<?=$s['id_soal']?>" method="post">
    					<div class="box-body">    						
    						<div class="form-group">
    							<label>Soal / Pertanyaan *</label>
    							<textarea class="form-control" rows="3" placeholder="Enter ..." name="soal"><?=$s['pertanyaan']?></textarea>
    						</div>   
                <div class="form-group">
                  <label>Jawaban</label>
                </div>
                <?php $n = 1; foreach ($j as $j) { ?>
                  <div class="col-md-3">
                    <div class="form-group"> 
                      <input type="text" name="jawaban[]" class="form-control" value="<?=$j['jawaban']?>">
                      <input type="hidden" name="id_jawaban[]" class="form-control" value="<?=$j['id_jawaban']?>">
                      <?php if ($j['status'] === 'b') { ?>
                         <input type="radio" name="benar" value="<?=$n?>" checked> Tandai Jawaban Benar
                      <?php } else { ?>
                        <input type="radio" name="benar" value="<?=$n?>"> Tandai Jawaban Benar
                      <?php } ?>
                    </div>
                  </div>
                <?php $n++; } ?> 
                <div class="box-footer">
                  <button type="submit" id="update" name="update" class="btn btn-primary" onclick="return confirm('Anda Yakin Ingin Mengupdate Data Ini ?')">Update</button> <button type="button" id="cancle" name="cancle" class="btn btn-primary" onclick="self.history.back()">Batal</button>
                </div>
              </div>
          </div>            
        </form>
    	</div>
    </section>
</div>

<script src="<?=base_url()?>assets/js/jquery.min.js"></script>