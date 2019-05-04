<div class="content-wrapper">
	<section class="content-header">
      <h1>
        Tambah Data Anggota FKSJ
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Administrator</a></li>
        <li class="active">Tambah Data Anggota FKSJ</li>
      </ol>
    </section>
    <section class="content">
    	<div class="row">
    		<div class="col-md-12">
    			

    			<div class="box box-primary">
    				<div class="box-header with-border">
    					<h3 class="box-title">Form Data Anggota FKSJ</h3>
    				</div>
    				<!-- /.box-header -->
    				<!-- form start -->
    				<form action="<?=base_url()?>administrator/tambah_anggota_fks" method="post">
    					<div class="box-body">
    						<div class="form-group">
    							<label for="nis">NIS *</label>
    							<input type="text" name="nis" class="form-control" id="nis" placeholder="Enter Nomor Induk Siswa" required>
    						</div>
                            <div class="form-group">
                                <label for="nama">Nama *</label>
                                <input type="text" name="nama" class="form-control" id="nama" placeholder="Enter Nama" required>
                            </div>
                            <div class="form-group">
                                <label for="alamat">Alamat *</label>
                                <textarea name="alamat" id="alamat" class="form-control" required></textarea>
                            </div>
                            <div class="form-group">
                                <label for="desa">Desa *</label>
                                <input type="text" name="desa" class="form-control" id="desa" placeholder="Enter Nama Desa" required>
                            </div>
                            <div class="form-group">
                                <label for="kecamatan">Kecamatan *</label>
                                <input type="text" name="kecamatan" class="form-control" id="kecamatan" placeholder="Enter Kecamatan" required>
                            </div>
                            <div class="form-group">
                                <label for="gang_wilayah">Gang / Wilayah *</label>
                                <input type="text" name="gang_wilayah" class="form-control" id="gang_wilayah" placeholder="Enter Gang / Wialayah" required>
                            </div>
                            <div class="form-group">
                                <label for="pendidikan">Pendidikan *</label>
                                <select class="form-control" id="pendidikan" name="pendidikan" required>
                                    <option>-- Pilih Pendidikan --</option>
                                    <?php 
                                        foreach ($lembaga_nj as $f) { ?>
                                            <option value="<?=$f['id_lembaga']?>"><?=$f['nama_lembaga']?></option>
                                    <?php } ?>
                                </select>
                            </div> 
                            <div class="form-group">
                                <label for="telepon">Telepon</label>
                                <input type="text" name="telepon" class="form-control" id="telepon" placeholder="Enter Telepon">
                            </div>  
                            <div class="form-group">
                                <label for="nama_lengkap">Username *</label>
                                <input type="text" name="username" class="form-control" id="username" placeholder="Enter Username" required>
                            </div>
                            <div class="form-group">
                                <label for="nama_lengkap">Password *</label>
                                <input type="password" name="password" class="form-control" id="password" placeholder="Enter Password" required> <input type="checkbox" name="lihatpwd" id="lihatpwd" onclick="seepwd()"> Lihat Password | 
                                <small style="color: red">Password Minimal 3 Digit</small>
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

<script>
    $(function () {

        $("#username").on('focusout', function() {
          if ($("#username").val().length < 3) {
                alert('username Harus Lebih Dari 3 Digit');
                $("#submit").attr('disabled', true);
            } else {
                $("#submit").attr('disabled', false);
            }
        })

        $("#password").on('focusout', function() {
          if ($("#password").val().length < 3) {
                alert('Password Harus Lebih Dari 3 Digit');
                $("#submit").attr('disabled', true);
            } else {
                $("#submit").attr('disabled', false);
            }
        })

    })

    function seepwd()
    {
        var temp = document.getElementById("password"); 
        if (temp.type === "password") { 
          temp.type = "text"; 
        } 
        else { 
          temp.type = "password"; 
        } 
    }
</script>