<div class="content-wrapper">
	<section class="content-header">
      <h1>
        Dashboard
        <small>Version 2.0</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>
    <section class="content">
    	<div class="row">
    		<div class="col-md-12">
    			

    			<div class="box box-primary">
    				<div class="box-header with-border">
    					<h3 class="box-title">Tambah Data Prodi</h3>
    				</div>
    				<!-- /.box-header -->
    				<!-- form start -->
    				<form action="<?=base_url()?>administrator/edit_prodi" method="post">
    					<div class="box-body">
                            <input type="hidden" name="id" value="<?=$p['id']?>">
    						<div class="form-group">
    							<label for="nama_prodi">Nama Prodi</label>
    							<input type="text" name="nama_prodi" class="form-control" id="nama_prodi" placeholder="Enter Nama Prodi" value="<?=$p['nama_prodi']?>">
    						</div>
                            <div class="form-group">
                                <label>Fakultas</label>
                                <select class="form-control" id="fakultas" name="fakultas">
                                    <option>-- Pilih Fakultas --</option>
                                    <?php 
                                        foreach ($fakultas as $f) { 
                                            if ($f['id'] == $p['id_fakultas']) { ?>
                                                <option value="<?=$f['id']?>" selected><?=$f['nama_fakultas']?></option>
                                            <?php } else { ?>
                                                <option value="<?=$f['id']?>"><?=$f['nama_fakultas']?></option>
                                            <?php } 
                                        } ?>
                                </select>
                            </div>
    					</div>
    					<!-- /.box-body -->

    					<div class="box-footer">
    						<button type="submit" id="update" name="update" class="btn btn-primary">Edit</button> <button type="button" id="cancle" name="cancle" class="btn btn-primary" onclick="self.history.back()">Batal</button>
    					</div>
    				</form>
    			</div>


    		</div>
    	</div>
    </section>
</div>

<footer class="main-footer">
	<div class="pull-right hidden-xs">
		<b>Version</b> 2.4.0
	</div>
	<strong>Copyright © 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
reserved.</strong>
</footer>

<script src="<?=base_url()?>assets/js/jquery.min.js"></script>