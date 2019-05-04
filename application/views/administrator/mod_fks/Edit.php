<div class="content-wrapper">
	<section class="content-header">
      <h1>
        Edit Data Anggota FKSJ
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Administrator</a></li>
        <li class="active">Edit Data Anggota FKSJ</li>
      </ol>
    </section>
    <section class="content">
    	<div class="row">
    		<div class="col-md-6">
    			

    			<div class="box box-primary">
    				<div class="box-header with-border">
    					<h3 class="box-title">Form Edit Data Anggota FKSJ</h3>
    				</div>
    				<!-- /.box-header -->
    				<!-- form start -->
    				<form action="<?=base_url()?>administrator/edit_anggota_fks/<?=$fks['nis']?>" method="post">
                        <input type="hidden" name="nis" id="nis" value="<?=$fks['nis']?>">
    					<div class="box-body">
    						<div class="form-group">
    							<label for="nis">NIS *</label>
    							<input type="text" name="nis" class="form-control" id="nis" placeholder="Enter Nomor Induk Siswa" value="<?=$fks['nis']?>" readonly>
    						</div>
                            <div class="form-group">
                                <label for="nama">Nama *</label>
                                <input type="text" name="nama" class="form-control" id="nama" placeholder="Enter Nama" value="<?=$fks['nama']?>" required>
                            </div>
                            <div class="form-group">
                                <label for="alamat">Alamat *</label>
                                <textarea name="alamat" id="alamat" class="form-control" required><?=$fks['alamat']?></textarea>
                            </div>
                            <div class="form-group">
                                <label for="desa">Desa *</label>
                                <input type="text" name="desa" class="form-control" id="desa" placeholder="Enter Nama Desa" value="<?=$fks['desa']?>" required>
                            </div>
                            <div class="form-group">
                                <label for="kecamatan">Kecamatan *</label>
                                <input type="text" name="kecamatan" class="form-control" id="kecamatan" placeholder="Enter Kecamatan" value="<?=$fks['kecamatan']?>" required>
                            </div>
                            <div class="form-group">
                                <label for="gang_wilayah">Gang / Wilayah *</label>
                                <input type="text" name="gang_wilayah" class="form-control" id="gang_wilayah" placeholder="Enter Gang / Wialayah" value="<?=$fks['gang_wilayah']?>" required>
                            </div>
                            <div class="form-group">
                                <label for="pendidikan">Pendidikan *</label>
                                <select class="form-control" id="pendidikan" name="pendidikan" required>
                                    <option>-- Pilih Pendidikan --</option>
                                    <?php 
                                        foreach ($lembaga_nj as $f) { 
                                            if ($fks['pendidikan'] == $f['id_lembaga']) { ?>
                                                <option value="<?=$f['id_lembaga']?>" selected><?=$f['nama_lembaga']?></option>
                                            <?php } else { ?>
                                                <option value="<?=$f['id_lembaga']?>"><?=$f['nama_lembaga']?></option>
                                            <?php } ?>                                            
                                    <?php } ?>
                                </select>
                            </div> 
                            <div class="form-group">
                                <label for="telepon">Telepon</label>
                                <input type="text" name="telepon" class="form-control" id="telepon" placeholder="Enter Telepon" value="<?=$fks['telepon']?>">
                            </div>  
                            <!-- <div class="form-group">
                                <label for="nama_lengkap">Username</label>
                                <input type="text" name="username" class="form-control" id="username" placeholder="Enter Nama Lengkap">
                            </div>
                            <div class="form-group">
                                <label for="nama_lengkap">Password</label>
                                <input type="password" name="password" class="form-control" id="password" placeholder="Enter Nama Lengkap">
                            </div>  -->                        
    					</div>
    					<!-- /.box-body -->

    					<div class="box-footer">
    						<button type="submit" id="submit" name="submit" class="btn btn-primary" onclick="return confirm('Anda Yakin Ingin Mengupdate Data Ini ?')">Submit</button> <button type="button" id="cancle" name="cancle" class="btn btn-primary" onclick="self.history.back()">Batal</button>
    					</div>
    				</form>
    			</div>


    		</div>

            <div class="col-md-6">
                

                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Form Edit Data Anggota FKSJ</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form action="<?=base_url()?>administrator/reset_password_fks" method="post">
                        <input type="hidden" name="nis" id="nis" value="<?=$fks['nis']?>">
                        <div class="box-body">                            
                            <div class="form-group">
                                <label for="nama_lengkap">Username</label>
                                <input type="text" name="username" class="form-control" id="username" placeholder="Enter Username" value="<?=$fks['username']?>" readonly>
                            </div>
                            <div class="form-group">
                                <label for="nama_lengkap">Rest Password (bila perlu)</label>
                                <input type="password" name="password" class="form-control" id="password" placeholder="Enter Passwrod" required=""> <input type="checkbox" name="lihatpwd" id="lihatpwd" onclick="seepwd()"> Lihat Password | 
                                <small style="color: red">Password Minimal 3 Digit</small>
                            </div>                         
                        </div>
                        <!-- /.box-body -->

                        <div class="box-footer">
                            <button type="submit" id="reset" name="reset" class="btn btn-primary" onclick="return confirm('Anda Yakin Ingin Mereset Password Data Ini ?')">Reset Password</button>
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
                $("#reset").attr('disabled', true);
            } else {
                $("#reset").attr('disabled', false);
            }
        })

        $("#password").on('focusout', function() {
          if ($("#password").val().length < 3) {
                alert('Password Harus Lebih Dari 3 Digit');
                $("#reset").attr('disabled', true);
            } else {
                $("#reset").attr('disabled', false);
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