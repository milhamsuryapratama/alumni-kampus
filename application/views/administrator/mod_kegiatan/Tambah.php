<div class="content-wrapper">
	<section class="content-header">
      <h1>
        Tambah Data Kegiatan
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Administrator</a></li>
        <li class="active">Tambah Data Kegiatan</li>
      </ol>
    </section>
    <section class="content">
    	<div class="row">
    		<div class="col-md-12">
    			

    			<div class="box box-primary">
    				<div class="box-header with-border">
    					<h3 class="box-title">Form Tambah Data Kegiatan</h3>
    				</div>
    				<!-- /.box-header -->
    				<!-- form start -->
    				<form action="<?=base_url()?>administrator/tambah_kegiatan" method="post" enctype="multipart/form-data">
    					<div class="box-body">
    						<div class="form-group">
                                <label>Judul Kegiatan</label>
                                <input type="text" name="judul_kegiatan" class="form-control" id="judul_kegiatan" placeholder="Enter Judul Kegiatan">
                            </div>
                            <div class="form-group">
                                <label>Deskripsi</label>
                                <textarea class="form-control" rows="3" placeholder="Enter ..." name="deskripsi" id="editor1"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Jenis Kegiatan</label>
                                <select class="form-control" id="jenis_kegiatan" name="jenis_kegiatan">
                                    <option>-- Pilih Jenis Kegiatan --</option>
                                    <option value="aksi sosial">Aksi Sosial</option>
                                    <option value="aksi pengajian">Aksi Pengajian</option>
                                    <option value="aksi umum">Aksi Umum</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Foto Kegiatan</label>
                                <input type="file" name="foto_kegiatan" id="foto_kegiatan" class="form-control">
                            </div>
                            <div class="form-group" id="preview">

                            </div>
    					</div>
    					<!-- /.box-body -->

    					<div class="box-footer">
    						<button type="submit" id="submit" name="submit" class="btn btn-primary" onclick="return confirm('Anda Yakin Ingin Menyimpan Data Ini ?')">Submit</button> <button type="button" id="cancle" name="cancle" class="btn btn-primary" onclick="self.history.back()">Batal</button>
    					</div>
    				</form>
    			</div>


    		</div>
    	</div>
    </section>
</div>

<script src="<?=base_url()?>assets/js/jquery.min.js"></script>
<script src="<?=base_url()?>assets/js/ckeditor/ckeditor.js"></script>
<!-- <script src="<?=base_url()?>assets/js/summernote/summernote-bs4.js"></script> -->

<script>
    $(function () {

        // $('#editor1').summernote({
        //     height: "500px",
        //     callbacks: {
        //         onImageUpload: function(image) {
        //             uploadImage(image[0]);
        //         }
        //     }
        // });

        // function uploadImage(image) {
        //     var data = new FormData();
        //     data.append("image", image);
        //     $.ajax({
        //         url: "<?=base_url()?>administrator/summer_upload",
        //         cache: false,
        //         contentType: false,
        //         processData: false,
        //         data: data,
        //         type: "POST",
        //         success: function(url) {
        //             $('#editor1').summernote("insertImage", url);
        //         },
        //         error: function(data) {
        //             console.log(data);
        //         }
        //     });
        // }

        CKEDITOR.replace('editor1', {
            height: '500px'
        });

        $("#foto_kegiatan").on('change', function() {
            var total_file = document.getElementById('foto_kegiatan').files.length;
            for (var i = 0; i < total_file; i++) {
                $("#preview").html("<center><img src='"+URL.createObjectURL(event.target.files[i])+"' width='500'></center>");
                console.log(event.target.files[i])
            }
        });
    });
</script>