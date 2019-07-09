<div class="content-wrapper">
	<section class="content-header">
      <h1>
        Data Alumni
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"><?=$bred?></li>
      </ol>
    </section>
    <section class="content">

    	<div class="row">
    		<div class="col-md-12">
                <?php if ($this->session->flashdata('tambahDataSukses')) { ?>
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h4><i class="icon fa fa-check"></i> Sukses!</h4>
                        <?php echo $this->session->flashdata('tambahDataSukses'); ?>
                    </div>
                <?php } elseif ($this->session->flashdata('hapusDataSukses')) { ?>
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h4><i class="icon fa fa-check"></i> Sukses!</h4>
                        <?php echo $this->session->flashdata('hapusDataSukses'); ?>
                    </div>
                <?php } elseif ($this->session->flashdata('updateDataSukses')) { ?>
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h4><i class="icon fa fa-check"></i> Sukses!</h4>
                        <?php echo $this->session->flashdata('updateDataSukses'); ?>
                    </div>
                <?php } elseif ($this->session->flashdata('resetPassword')) { ?>
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h4><i class="icon fa fa-check"></i> Sukses!</h4>
                        <?php echo $this->session->flashdata('resetPassword'); ?>
                    </div>
                <?php } ?>
    			<div class="box box-primary">
                    <div class="box-header">
                        <div class="col-md-3">
                            <h3 class="box-title">Tabel Data Alumni</h3>
                        </div>
                        <div class="col-md-3">
                            <select class="form-control" id="kecamatan" name="kecamatan" required>
                                <option>-- Pilih Kecamatan --</option>
                                <?php 
                                foreach ($kecamatan as $k) { 
                                    if ($k['id_kecamatan'] == $current_kecamatan) { ?>
                                        <option value="<?=$k['id_kecamatan']?>" selected><?=$k['nama_kecamatan']?></option>
                                    <?php } else { ?>
                                        <option value="<?=$k['id_kecamatan']?>"><?=$k['nama_kecamatan']?></option>
                                    <?php } ?>                                    
                                <?php } ?>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <select class="form-control" id="desa" name="desa" required style="display: none;">
                                
                            </select>
                        </div>
                        <div class="col-md-2">
                            <button class="btn btn-primary" id="filter_alumni">Filter</button>
                            <button class="btn btn-success" id="export_excel">Export Excel</button>
                        </div>
                    </div>
    				<div class="box-body">
    					<table id="example1" class="table table-bordered table-striped">
    						<thead>
    							<tr>
    								<td colspan="8">
    									<a href="<?=base_url()?>administrator/tambah_alumni?lembaga=<?=$this->session->userdata('nama_lembaga')?>" class="btn btn-block btn-primary">Tambah Data</a>
    								</td>
    							</tr>
    							<tr>
    								<th>NO</th>
    								<th>NO KTP</th>
    								<th>Nama</th>
    								<th>Alamat</th>
    								<th>Telepon</th>
    								<th>Tahun Mondok</th>
    								<th>Tahun Keluar</th>
                                    <th>Actions</th>
    							</tr>
    						</thead>
    						<tbody>
    							<?php 
    							$no = 1;
    							foreach ($alumni as $a) { ?>
    								<tr>
    									<td><?=$no?></td>
    									<td><?=$a['no_ktp']?></td>
    									<td><?=$a['nama']?></td>
    									<td><?=$a['alamat'] . ' Kecamatan '. $a['nama_kecamatan'] . ' Desa ' . $a['nama_desa']?></td>
    									<td><?=$a['telepon']?></td>
    									<td><?=$a['thn_mondok']?></td>
                                        <td><?=$a['thn_keluar']?></td>
    									<td>
    										<div class="btn-group">
    											<a href="<?=base_url()?>administrator/edit_alumni/<?=$a['id_alumni']?>?lembaga=<?=$this->session->userdata('nama_lembaga')?>" class="btn btn-success">Edit</a>
    											
    											<button type="button" class="btn btn-default" disabled=""><i class="fa fa-align-center"></i></button>

    											<a href="<?=base_url()?>administrator/hapus_alumni/<?=$a['id_alumni']?>?lembaga=<?=$this->session->userdata('nama_lembaga')?>" class="btn btn-danger" onclick="return confirm('Anda Yakin Ingin Menghapus Data Ini ?')">Hapus</a>
    										</div>
    									</td>
    								</tr>
    							<?php $no++; } ?>
    						</tbody>
    					</table>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>
</div>

<script src="<?=base_url()?>assets/js/jquery.min.js"></script>
<script>
  $(function () {
    $('#example1').DataTable();

    var kecamatan = $("#kecamatan").val();
    var desa = $("#desa").val();
    

    var pageUrl = window.location.search.substring(1);
    var sUrlVariables = pageUrl.split('&');

    for (var i = 0; i < sUrlVariables.length; i++) {
        var sParametersName = sUrlVariables[i].split('=');
        if (sParametersName[0] == 'desa') {
            desa = sParametersName[1];            
        } else {
            desa = null;
        }
    }

    if (desa != null) {
        $("#desa").removeAttr("style");       
        $("#filter_alumni").attr('disabled', false); 
    } else {
        $("#filter_alumni").attr('disabled', true);
    }

    $.post('<?=base_url()?>administrator/get_desa', {id: kecamatan}, (result) => {
        // console.log(result);
            // $("#desa").find("option").remove();
            if (desa == 'all') {                                   
                $('#desa').append(
                    `
                    <option value='all' selected>Semua</option>
                    `  
                )
            } else {                             
                $('#desa').append(
                    `
                    <option value='all'>Semua</option>
                    `  
                )
            }

            $.map(result, function(val, i) {
                if (val.id_desa == desa) {
                    $('#desa').append(
                    `
                    <option value='${val.id_desa}' selected>${val.nama_desa}</option>
                    `  
                    )  
              } else {
                    $('#desa').append(
                        `
                        <option value='${val.id_desa}'>${val.nama_desa}</option>
                        `  
                    )
            }
        })
    })

    $("#kecamatan").on('change', function() {
        $("#desa").find("option").remove();
        $("#desa").removeAttr("style");
        $("#desa").append("<option value='all' selected>Semua</option>");
        $("#filter_alumni").removeAttr('disabled');
        $.post('<?=base_url()?>administrator/get_desa', {id: this.value}, (result) => {            
            $.map(result, function(val, i) {
                $('#desa').append(
                    `
                    <option value='${val.id_desa}'>${val.nama_desa}</option>
                    `
                    )
            })
        })
    })

    $("#filter_alumni").click(function() {   
        var kecamatan = $("#kecamatan").val();
        var desa = $("#desa").val();            
        window.location.href = `<?=base_url()?>administrator/filter_alumni?kecamatan=${kecamatan}&desa=${desa}`;
    })

    $("#export_excel").click(function() {
       window.location.href = "<?=base_url()?>administrator/export";
    })

  })
</script>