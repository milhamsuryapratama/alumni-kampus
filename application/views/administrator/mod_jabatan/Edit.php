<div class="content-wrapper">
	<section class="content-header">
      <h1>
        Edit Data Jabatan
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Administrator</a></li>
        <li class="active">Edit Data Jabatan</li>
      </ol>
    </section>
    <section class="content">
    	<div class="row">
    		<div class="col-md-12">
    			

    			<div class="box box-primary">
    				<div class="box-header with-border">
    					<h3 class="box-title">Form Edit Data Jabatan</h3>
    				</div>
    				<!-- /.box-header -->
    				<!-- form start -->
    				<form action="<?=base_url()?>administrator/edit_jabatan/<?=$j['id_jabatan']?>" method="post">
                        <input type="hidden" name="id_jabatan" value="<?=$j['id_jabatan']?>">
    					<div class="box-body">
    						<div class="form-group">
    							<label for="nama_jabatan">Nama Jabatan</label>
    							<input type="text" name="nama_jabatan" class="form-control" id="nama_jabatan" placeholder="Enter Nama Jabatan" value="<?=$j['nama_jabatan']?>">
    						</div>
    					</div>
    					<!-- /.box-body -->

    					<div class="box-footer">
    						<button type="submit" id="update" name="update" class="btn btn-primary" onclick="return confirm('Anda Yakin Ingin Mengupdate Data Ini ?')">Update</button> <button type="button" id="cancle" name="cancle" class="btn btn-primary" onclick="self.history.back()">Batal</button>
    					</div>
    				</form>
    			</div>


    		</div>
    	</div>
    </section>
</div>

<script src="<?=base_url()?>assets/js/jquery.min.js"></script>