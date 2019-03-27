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
    					<h3 class="box-title">Tambah Data Anggota FKS</h3>
    				</div>
    				<!-- /.box-header -->
    				<!-- form start -->
    				<form action="<?=base_url()?>administrator/edit_anggota_fks" method="post">
                        <input type="hidden" name="nis" id="nis" value="<?=$fks['nis']?>">
    					<div class="box-body">
    						<div class="form-group">
    							<label for="nis">NIS</label>
    							<input type="text" name="nis" class="form-control" id="nis" placeholder="Enter Nomor Induk Siswa" value="<?=$fks['nis']?>" readonly>
    						</div>
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" name="nama" class="form-control" id="nama" placeholder="Enter Nama" value="<?=$fks['nama']?>">
                            </div>
                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <textarea name="alamat" id="alamat" class="form-control"><?=$fks['alamat']?></textarea>
                            </div>
                            <div class="form-group">
                                <label for="desa">Desa</label>
                                <input type="text" name="desa" class="form-control" id="desa" placeholder="Enter Nama Desa" value="<?=$fks['desa']?>">
                            </div>
                            <div class="form-group">
                                <label for="kecamatan">Kecamatan</label>
                                <input type="text" name="kecamatan" class="form-control" id="kecamatan" placeholder="Enter Kecamatan" value="<?=$fks['kecamatan']?>">
                            </div>
                            <div class="form-group">
                                <label for="gang_wilayah">Gang / Wilayah</label>
                                <input type="text" name="gang_wilayah" class="form-control" id="gang_wilayah" placeholder="Enter Gang / Wialayah" value="<?=$fks['gang_wilayah']?>">
                            </div>
                            <div class="form-group">
                                <label for="pendidikan">Pendidikan</label>
                                <select class="form-control" id="pendidikan" name="pendidikan">
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
    						<button type="submit" id="submit" name="submit" class="btn btn-primary">Submit</button> <button type="button" id="cancle" name="cancle" class="btn btn-primary" onclick="self.history.back()">Batal</button>
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