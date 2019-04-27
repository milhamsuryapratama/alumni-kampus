<div class="content-wrapper">
	<section class="content-header">
      <h1>
        Edit Data Desa
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Administrator</a></li>
        <li class="active">Edit Data Desa</li>
      </ol>
    </section>
    <section class="content">
    	<div class="row">
    		<div class="col-md-12">
    			

    			<div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Form Edit Data Desa</h3>
                    </div>
    				<!-- form start -->
    				<form action="<?=base_url()?>administrator/edit_desa/<?=$p['id_desa']?>" method="post">
    					<div class="box-body">
                            <input type="hidden" name="id_desa" value="<?=$p['id_desa']?>">
                            <div class="form-group">
                                <label>Kecamatan</label>
                                <select class="form-control" id="kecamatan" name="kecamatan">
                                    <option>-- Pilih Kecamatan --</option>
                                    <?php 
                                        foreach ($kecamatan as $f) { 
                                            if ($f['id_kecamatan'] == $p['id_kecamatan']) { ?>
                                                <option value="<?=$f['id_kecamatan']?>" selected><?=$f['nama_kecamatan']?></option>
                                            <?php } else { ?>
                                                <option value="<?=$f['id_kecamatan']?>"><?=$f['nama_kecamatan']?></option>
                                            <?php } 
                                        } ?>
                                </select>
                            </div>
    						<div class="form-group">
                                <label for="nama_desa">Nama Desa</label>
                                <input type="text" name="nama_desa" class="form-control" id="nama_desa" placeholder="Enter Nama Desa" value="<?=$p['nama_desa']?>">
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