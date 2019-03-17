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
    				<form action="<?=base_url()?>administrator/edit_korcam" method="post">
                        <input type="hidden" name="id_korcam" value="<?=$k['id_korcam']?>">
    					<div class="box-body">
    						<div class="col-sm-6">
                                <div class="form-group">
                                    <label for="id_alumni">ID Alumni</label>
                                    <input type="text" name="id_alumni" class="form-control" id="id_alumni" placeholder="Enter ID Alumni" value="<?=$k['id_alumni']?>">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="nama_alumni">Nama Alumni</label>
                                    <input type="text" name="nama_alumni" class="form-control" id="nama_alumni" placeholder="Enter Nama Alumni" readonly>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Kecamatan</label>
                                <select class="form-control" id="kecamatan" name="kecamatan">
                                    <option>-- Pilih Kecamatan --</option>
                                    <?php 
                                        foreach ($kecamatan as $f) { 
                                            if ($f['id_kecamatan'] == $k['id_kecamatan']) { ?>
                                                <option value="<?=$f['id_kecamatan']?>" selected><?=$f['nama_kecamatan']?></option> 
                                            <?php } else { ?>
                                                <option value="<?=$f['id_kecamatan']?>"><?=$f['nama_kecamatan']?></option>
                                            <?php } ?>                                  
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="tahun">Tahun</label>
                                <input type="text" name="tahun" class="form-control" id="tahun" placeholder="Enter Tahun" value="<?=$k['tahun']?>">
                            </div>
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" name="username" class="form-control" id="username" placeholder="Enter Username" value="<?=$k['username']?>">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" name="password" class="form-control" id="password" placeholder="Enter Password" value="<?=$k['password']?>">
                            </div>
    					</div>
    					<!-- /.box-body -->

    					<div class="box-footer">
    						<button type="submit" id="update" name="update" class="btn btn-primary">Update</button> <button type="button" id="cancle" name="cancle" class="btn btn-primary" onclick="self.history.back()">Batal</button>
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