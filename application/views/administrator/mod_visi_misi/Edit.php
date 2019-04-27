<div class="content-wrapper">
	<section class="content-header">
      <h1>
        Edit Data Visi Misi
        <small>Version 2.0</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Administrator</a></li>
        <li class="active">Edit Data Visi Misi</li>
      </ol>
    </section>
    <section class="content">
    	<div class="row">
    		<div class="col-md-12">
    			

    			<div class="box box-primary">
    				<div class="box-header with-border">
    					<h3 class="box-title">Form Edit Data Visi Misi</h3>
    				</div>
    				<!-- /.box-header -->
    				<!-- form start -->
    				<form action="<?=base_url()?>administrator/edit_visi_misi/<?=$vm['id_visi_misi']?>" method="post">
                        <input type="hidden" name="id_visi_misi" value="<?=$vm['id_visi_misi']?>">
    					<div class="box-body">
    						<div class="form-group">
                                <label>Visi</label>
                                <textarea class="form-control" rows="3" id="visi" placeholder="Enter ..." name="visi"><?=$vm['visi']?></textarea>
                            </div>
                            <div class="form-group">
                                <label>Misi</label>
                                <textarea class="form-control" rows="3" id="misi" placeholder="Enter ..." name="misi"><?=$vm['misi']?></textarea>
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
<script src="<?=base_url()?>assets/js/ckeditor/ckeditor.js"></script>

<script>
    $(function () {

        CKEDITOR.replace('visi');
        CKEDITOR.replace('misi');

    });
</script>