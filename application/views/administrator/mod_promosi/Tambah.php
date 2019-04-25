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
    					<h3 class="box-title">Tambah Data Struktur</h3>
    				</div>
    				<!-- /.box-header -->
    				<!-- form start -->
    				<form action="<?=base_url()?>administrator/tambah_promosi" method="post">
    					<div class="box-body">
                            <input type="hidden" name="id_alumni" id="id_alumni"> <input type="hidden" name="id_lembaga_alumni" id="id_lembaga_alumni" value="<?=$_GET['lembaga']?>">
                            <div class="form-group">
                                <label for="id_alumni">ID Alumni / NO KTP</label>
                                <input type="text" name="no_ktp" class="form-control" id="no_ktp" placeholder="Enter No KTP">
                            </div>
    						<div class="form-group">
    							<label for="nama_alumi">Nama Alumni</label>
    							<input type="text" name="nama_alumni" class="form-control" id="nama_alumni" placeholder="Enter Nama Alumni" readonly>
    						</div>
                            <div class="form-group">
                                <label for="tgl_mulai">Tanggal Mulai</label>
                                <input type="date" name="tgl_mulai" class="form-control" id="tgl_mulai">
                            </div>
                            <div class="form-group">
                                <label for="tgl_akhir">Tanggal Berakhir</label>
                                <input type="date" name="tgl_akhir" class="form-control" id="tgl_akhir">
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

        $("#submit").attr('disabled', true);        

        $( "#no_ktp" ).autocomplete({
            source: "<?=base_url()?>administrator/get_autocomplete"
        });

        $("#no_ktp").on('input', function() {
            if ($("#no_ktp").val() === '') {
                $("#submit").attr('disabled', true); 
                $("#nama_alumni").val('');
            }
        })

        $("#no_ktp").on('keydown', function(e) {
           if(e.which == 13) {
                let no_ktp = $("#no_ktp").val();
                $.post("<?=base_url()?>administrator/get_alumni", {no_ktp: no_ktp}, (result) => {
                    if (result === null) {
                        alert("SALAH");
                    } else {
                        $("#submit").attr('disabled', false);
                        $("#nama_alumni").val(result.nama);
                        $("#id_alumni").val(result.id_alumni);
                    }                    
                })
            }
        })

    })
</script>