<div class="content-wrapper">
	<section class="content-header">
      <h1>
        Edit Data Devisi
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Administrator</a></li>
        <li class="active">Edit Data Devisi</li>
      </ol>
    </section>
    <section class="content">
    	<div class="row">
    		<div class="col-md-12">
    			

    			<div class="box box-primary">
    				<div class="box-header with-border">
    					<h3 class="box-title">Form Edit Data Devisi</h3>
    				</div>
    				<!-- /.box-header -->
    				<!-- form start -->
    				<form action="<?=base_url()?>administrator/edit_devisi/<?=$d['id_devisi']?>" method="post">
                        <input type="hidden" name="id_devisi" value="<?=$d['id_devisi']?>">
    					<div class="box-body">
    						<div class="form-group">
    							<label for="nama_devisi">Nama Devisi</label>
    							<input type="text" name="nama_devisi" class="form-control" id="nama_devisi" placeholder="Enter Nama Devisi" value="<?=$d['nama_devisi']?>">
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