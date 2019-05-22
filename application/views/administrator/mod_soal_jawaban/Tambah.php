<div class="content-wrapper">
	<section class="content-header">
      <h1>
        Tambah Data Soal
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Tambah Data Soal</li>
      </ol>
    </section>
    <section class="content">
    	<div class="row">
    		<div class="col-md-12">    			

    			<div class="box box-primary"> 
            <div class="box-header with-border">
              <h3 class="box-title">Form Tambah Soal</h3>
            </div>
    				<!-- form start -->
    				<form action="<?=base_url()?>administrator/tambah_soal" method="post">
    					<div class="box-body">    						
    						<div class="form-group">
    							<label>Soal / Pertanyaan *</label>
    							<textarea class="form-control" rows="3" placeholder="Enter ..." name="soal" ></textarea>
    						</div>   
                <div class="form-group">
                  <label>Jawaban</label>
                </div>
                <div class="col-md-3">
                    <div class="form-group"> 
                      <input type="text" name="jawaban[]" class="form-control">
                      <input type="radio" name="benar" value="1"> Tandai Jawaban Benar
                    </div>
                </div> 	                     				
                <div class="col-md-3">
                    <div class="form-group"> 
                      <input type="text" name="jawaban[]" class="form-control">
                      <input type="radio" name="benar" value="2"> Tandai Jawaban Benar
                    </div>
                </div> 
                <div class="col-md-3">
                    <div class="form-group"> 
                      <input type="text" name="jawaban[]" class="form-control">
                      <input type="radio" name="benar" value="3"> Tandai Jawaban Benar
                    </div>
                </div> 
                <div class="col-md-3">
                    <div class="form-group"> 
                      <input type="text" name="jawaban[]" class="form-control">
                      <input type="radio" name="benar" value="4"> Tandai Jawaban Benar
                    </div>
                </div> 
                <div class="box-footer">
                  <button type="submit" id="submit" name="submit" class="btn btn-primary" onclick="return confirm('Anda Yakin Ingin Menyimpan Data Ini ?')">Submit</button> <button type="button" id="cancle" name="cancle" class="btn btn-primary" onclick="self.history.back()">Batal</button>
                </div>
              </div>
          </div>            
        </form>
    	</div>
    </section>
</div>

<script src="<?=base_url()?>assets/js/jquery.min.js"></script>