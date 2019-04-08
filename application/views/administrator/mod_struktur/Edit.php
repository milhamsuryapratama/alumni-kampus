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
    					<h3 class="box-title">Edit Data Struktur</h3>
    				</div>
    				<!-- /.box-header -->
    				<!-- form start -->
    				<form action="<?=base_url()?>administrator/edit_struktur" method="post">
                        <input type="hidden" name="id_struktur" value="<?=$s['id_struktur']?>">
                        <input type="hidden" name="id_alumni" value="<?=$s['id_alumni']?>">
    					<div class="box-body">
    						<div class="form-group">
    							<label for="nama_alumi">Nama Alumni</label>
                                <?php 
                                $al = $this->db->query("SELECT nama FROM tb_alumni WHERE id_alumni = '".$s['id_alumni']."' ")->row_array() ?>
                                
    							<input type="text" name="nama_alumi" class="form-control" id="nama_alumi" placeholder="Enter Nama Alumni" value="<?=$al['nama']?>">
    						</div>
                            <div class="form-group">
                                <label for="jabatan">Jabatan</label>
                                <select class="form-control" name="jabatan">
                                    <option>-- Pilih Jabatan --</option>
                                    <?php 
                                        foreach ($jabatan as $j) { 
                                            if ($j['id_jabatan'] == $s['id_jabatan']) { ?>
                                                <option value="<?=$j['id_jabatan']?>" selected><?=$j['nama_jabatan']?></option>
                                            <?php } else { ?>
                                                <option value="<?=$j['id_jabatan']?>"><?=$j['nama_jabatan']?></option>
                                            <?php } ?>                                
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="devisi">Devisi</label>
                                <select class="form-control" name="devisi">
                                    <option>-- Pilih Devisi --</option>
                                    <?php 
                                        foreach ($devisi as $d) { 
                                            if ($d['id_devisi'] == $s['id_devisi']) { ?>
                                                <option value="<?=$d['id_devisi']?>" selected><?=$d['nama_devisi']?></option>
                                            <?php } else { ?>
                                                <option value="<?=$d['id_devisi']?>"><?=$d['nama_devisi']?></option>
                                            <?php } ?>                             
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="masa_bakti">Masa Bakti</label>
                                <input type="text" name="masa_bakti" class="form-control" id="masa_bakti" placeholder="Enter Masa Bakti" value="<?=$s['masa_bakti']?>">
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

<footer class="main-footer">
	<div class="pull-right hidden-xs">
		<b>Version</b> 2.4.0
	</div>
	<strong>Copyright © 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
reserved.</strong>
</footer>

<script src="<?=base_url()?>assets/js/jquery.min.js"></script>
<script src="<?=base_url()?>assets/js/jquery-ui.js"></script>

<script>
    $(function(){

        $( "#nama_alumi" ).autocomplete({
            source: "<?=base_url()?>administrator/get_autocomplete"
        });

        // $("#submit").click(function() {
        //     console.log($("#nama_lembaga").val())
        // })

    })
</script>