<div class="content-wrapper">
	<section class="content-header">
      <h1>
        Edit Data Kecamatan
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Administrator</a></li>
        <li class="active">Edit Data Kecamatan</li>
      </ol>
    </section>
    <section class="content">
    	<div class="row">
    		<div class="col-md-12">
    			

    			<div class="box box-primary">
    				<div class="box-header with-border">
    					<h3 class="box-title">Form Edit Data Kecamatan</h3>
    				</div>
    				<!-- /.box-header -->
    				<!-- form start -->
    				<form action="<?=base_url()?>administrator/edit_kecamatan/<?=$f['id_kecamatan']?>" method="post">
    					<div class="box-body">
                            <input type="hidden" name="id_kecamatan" value="<?=$f['id_kecamatan']?>">
    						<div class="form-group">
                                <label for="nama_kecamatan">Nama Kecamatan</label>
                                <input type="text" name="nama_kecamatan" class="form-control" id="nama_kecamatan" placeholder="Enter Nama Kecamatan" value="<?=$f['nama_kecamatan']?>">
                            </div>
    					</div>
    					<!-- /.box-body -->

    					<div class="box-footer">
    						<button type="submit" id="update" name="update" class="btn btn-primary" onclick="return confirm('Anda Yakin Ingin Mengupdate Data Ini ?')">Edit</button> <button type="button" id="cancle" name="cancle" class="btn btn-primary" onclick="self.history.back()">Batal</button>
    					</div>
    				</form>
    			</div>


    		</div>
    	</div>
    </section>
</div>

<script src="<?=base_url()?>assets/js/jquery.min.js"></script>