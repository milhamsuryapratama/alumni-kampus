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
    					<h3 class="box-title">Tambah Data Korcam</h3>
    				</div>
    				<!-- /.box-header -->
    				<!-- form start -->
    				<form action="<?=base_url()?>administrator/edit_pengurus/<?=$p['id_pengurus']?>" method="post">
                        <input type="hidden" name="id_pengurus" value="<?=$p['id_pengurus']?>">
    					<div class="box-body">
    						<div class="col-sm-6">
                                <div class="form-group">
                                    <label for="id_alumni">ID Alumni</label>
                                    <input type="text" name="id_alumni" class="form-control" id="id_alumni" placeholder="Enter ID Alumni" value="<?=$p['id_alumni']?>">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="nama_alumni">Nama Alumni</label>
                                    <input type="text" name="nama_alumni" class="form-control" id="nama_alumni" placeholder="Enter Nama Alumni" readonly>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Lembaga</label>
                                <select class="form-control" id="lembaga" name="lembaga">
                                    <option>-- Pilih Lembaga --</option>
                                    <?php 
                                        foreach ($lembaga as $f) { 
                                            if ($f['id_lembaga_alumni'] == $p['id_lembaga_alumni']) { ?>
                                                <option value="<?=$f['id_lembaga_alumni']?>" selected><?=$f['nama_lembaga']?></option>
                                            <?php } else { ?>
                                                <option value="<?=$f['id_lembaga_alumni']?>"><?=$f['nama_lembaga']?></option>
                                            <?php } ?>                                    
                                    <?php } ?>
                                </select>
                            </div>  
                            <!-- <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" name="username" class="form-control" id="username" placeholder="Enter Username" value="<?=$p['username_pengurus']?>">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" name="password" class="form-control" id="password" placeholder="Enter Password" value="<?=$p['password_pengurus']?>">
                            </div> -->
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
<script src="<?=base_url()?>assets/js/jquery-ui.js"></script>

<script>
    $(function(){

        $( "#id_alumni" ).autocomplete({
            source: "<?=base_url()?>administrator/get_autocomplete"
        });

        let id_alumni = $("#id_alumni").val();

        $.post("<?=base_url()?>administrator/get_alumni", {id_alumni: id_alumni}, (result) => {
            $("#nama_alumni").val(result.nama)
        })

        $("#id_alumni").on('keydown', function(e) {
           if(e.which == 9) {
                let id_alumni = $("#id_alumni").val();
                $.post("<?=base_url()?>administrator/get_alumni", {id_alumni: id_alumni}, (result) => {
                    $("#nama_alumni").val(result.nama)
                })
            }
        })

    })
</script>