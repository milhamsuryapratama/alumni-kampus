<div class="content-wrapper">
	<section class="content-header">
      <h1>
        Tambah Data Korcam
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Administrator</a></li>
        <li class="active">Tambah Data Korcam</li>
      </ol>
    </section>
    <section class="content">
    	<div class="row">
    		<div class="col-md-12">
    			

    			<div class="box box-primary">
    				<div class="box-header with-border">
    					<h3 class="box-title">Form Tambah Data Korcam</h3>
    				</div>
    				<!-- /.box-header -->
    				<!-- form start -->
    				<form action="<?=base_url()?>administrator/tambah_korcam" method="post">
    					<div class="box-body">
                            <input type="hidden" name="id_alumni" id="id_alumni">
    						<div class="col-sm-6">
                                <div class="form-group">
                                    <label for="id_alumni">NO KTP</label>
                                    <input type="text" name="no_ktp" class="form-control" id="no_ktp" placeholder="Enter No KTP">
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
                                        foreach ($kecamatan as $f) { ?>
                                            <option value="<?=$f['id_kecamatan']?>"><?=$f['nama_kecamatan']?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="tahun">Tahun</label>
                                <input type="text" name="tahun" class="form-control" id="tahun" placeholder="Enter Tahun">
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
<script src="<?=base_url()?>assets/js/jquery-ui.js"></script>

<script>
    $(function(){

        $("#submit").attr('disabled', true);

        $( "#no_ktp" ).autocomplete({
            source: "<?=base_url()?>administrator/get_autocomplete"
        });

        $("#no_ktp").on('input', function() {
            if ($("#no_ktp").val() == '') {
                $("#submit").attr('disabled', true);
                $("#nama_alumni").val('');
                $("#id_alumni").val('');
            }
        })

        // $("#no_ktp").on('keydown', function(e) {

        //    if(e.which == 13) {            
        //         let no_ktp = $("#no_ktp").val();
        //         $.post("<?=base_url()?>administrator/get_alumni", {no_ktp: no_ktp}, (result) => {
        //             $("#submit").attr('disabled', false);
        //             $("#nama_alumni").val(result.nama)
        //             $("#id_alumni").val(result.id_alumni)
        //         })
        //     }
        // })

        $("#no_ktp").on('keydown', function(e) {
           if(e.which == 13) {
                let no_ktp = $("#no_ktp").val();
                $.post("<?=base_url()?>administrator/get_alumni", {no_ktp: no_ktp}, (result) => {
                    if (result == null) {
                        alert("SALAH");
                    } else {
                        $.post("<?=base_url()?>administrator/get_korcam", {id_alumni: result.id_alumni},(response) => {
                            if (response == "Fail") {
                                alert("Alumni Ini Telah Menjadi Korcam ");
                                $("#submit").attr('disabled', true);
                            } else {
                                $("#submit").attr('disabled', false);
                                $("#nama_alumni").val(result.nama);
                                $("#id_alumni").val(result.id_alumni);
                            }
                        })                        
                    }                    
                })
            }
        })

    })
</script>