<div class="content-wrapper">
	<section class="content-header">
      <h1>
        Edit Data Kegiatan
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Administrator</a></li>
        <li class="active">Edit Data Kegiatan</li>
      </ol>
    </section>
    <section class="content">
    	<div class="row">
    		<div class="col-md-12">
    			

    			<div class="box box-primary">
    				<div class="box-header with-border">
    					<h3 class="box-title">Form Edit Data Kegiatan</h3>
    				</div>
    				<!-- /.box-header -->
    				<!-- form start -->
    				<form action="<?=base_url()?>administrator/edit_kegiatan/<?=$k['id_kegiatan']?>" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="id_kegiatan" value="<?=$k['id_kegiatan']?>">
    					<div class="box-body">
    						<div class="form-group">
                                <label>Judul Kegiatan</label>
                                <input type="text" name="judul_kegiatan" class="form-control" id="judul_kegiatan" placeholder="Enter Judul Kegiatan" value="<?=$k['judul_kegiatan']?>">
                            </div>
                            <div class="form-group">
                                <label>Deskripsi</label>
                                <textarea class="form-control" rows="3" placeholder="Enter ..." name="deskripsi" id="editor1"><?=$k['deskripsi']?></textarea>
                            </div>
                            <div class="form-group">
                                <label>Jenis Kegiatan</label>
                                <select class="form-control" id="jenis_kegiatan" name="jenis_kegiatan">
                                    <option>-- Pilih Jenis Kegiatan --</option>
                                    <?php 
                                        if ($k['jenis_kegiatan'] == 'aksi sosial') { ?>
                                            <option value="aksi sosial" selected>Aksi Sosial</option>
                                            <option value="aksi pengajian">Aksi Pengajian</option>
                                            <option value="aksi umum">Aksi Umum</option>
                                        <?php } elseif ($k['jenis_kegiatan'] == 'aksi pengajian') { ?>
                                            <option value="aksi sosial">Aksi Sosial</option>
                                            <option value="aksi pengajian" selected>Aksi Pengajian</option>
                                            <option value="aksi umum">Aksi Umum</option>
                                        <?php } else { ?>
                                            <option value="aksi sosial">Aksi Sosial</option>
                                            <option value="aksi pengajian">Aksi Pengajian</option>
                                            <option value="aksi umum" selected>Aksi Umum</option>
                                        <?php }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Ubah Foto Kegiatan (jika perlu)</label>
                                <input type="file" name="foto_kegiatan" id="foto_kegiatan" class="form-control">
                            </div>
                            <div class="form-group" id="preview">
                                <center><img src="<?=base_url()?>assets/foto/kegiatan/<?=$k['foto_kegiatan']?>" width='500'></center>
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

        CKEDITOR.replace('editor1');

        $("#foto_kegiatan").on('change', function() {
            var total_file = document.getElementById('foto_kegiatan').files.length;
            for (var i = 0; i < total_file; i++) {
                $("#preview").html("<center><img src='"+URL.createObjectURL(event.target.files[i])+"' width='500'></center>");
                console.log(event.target.files[i])
            }
        });
    });
</script>