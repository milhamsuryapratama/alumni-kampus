<div class="content-wrapper">
	<section class="content-header">
      <h1>
        Data Pengurus
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
    				<div class="box-header">
    					<h3 class="box-title">Data Table With Full Features</h3>
    				</div>
    				<div class="box-body">
    					<table id="example1" class="table table-bordered table-striped">
    						<thead>
    							<tr>
    								<td colspan="7">
    									<a href="<?=base_url()?>administrator/tambah_pengurus" class="btn btn-block btn-primary">Tambah Data</a>
    								</td>
    							</tr>
    							<tr>
    								<th>NO</th>
    								<th>Nama Alumni</th>
                                    <!-- <th>Username</th> -->
                                    <th>Pengurus</th>
                                    <th>Status</th>
                                    <th>Actions</th>
    							</tr>
    						</thead>
    						<tbody>
    							<?php 
    							$no = 1 ;
    							foreach ($pengurus as $l) { ?>
    								<tr>
    									<td><?=$no?></td>
    									<td><?=$l['nama']?></td>
                                        <!-- <td><?=$l['username_pengurus']?></td> -->
                                        <td><?=$l['nama_lembaga']?></td>
                                        <td><?=$l['status']?></td>
    									<td>
    										<div class="btn-group">
    											<a href="<?=base_url()?>administrator/edit_pengurus/<?=$l['id_pengurus']?>" class="btn btn-success">Edit</a>
    											
    											<button type="button" class="btn btn-default" disabled=""><i class="fa fa-align-center"></i></button>

    											<a href="<?=base_url()?>administrator/hapus_pengurus/<?=$l['id_pengurus']?>" class="btn btn-danger" onclick="return confirm('Anda Yakin Ingin Menghapus Data Ini ?')">Hapus</a>
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
  })
</script>