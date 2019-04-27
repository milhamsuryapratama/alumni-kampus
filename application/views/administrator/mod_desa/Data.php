<div class="content-wrapper">
	<section class="content-header">
      <h1>
        Data Desa
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Administrator</a></li>
        <li class="active">Data Desa</li>
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
                <?php } ?>
    			<div class="box box-primary">
    				<div class="box-body">
    					<table id="example1" class="table table-bordered table-striped">
    						<thead>
    							<tr>
    								<td colspan="7">
    									<a href="<?=base_url()?>administrator/tambah_desa?lembaga=<?=$this->session->userdata('nama_lembaga');?>" class="btn btn-block btn-primary">Tambah Data</a>
    								</td>
    							</tr>
    							<tr>
    								<th>NO</th>
    								<th>Nama Desa</th>
                                    <th>Nama Kecamatan</th>
    								<th>Actions</th>
    							</tr>
    						</thead>
    						<tbody>
    							<?php 
    							$no = 1;
    							foreach ($prodi as $p) { ?>
    								<tr>
    									<td><?=$no?></td>
    									<td><?=$p['nama_desa']?></td>
                                        <td><?=$p['nama_kecamatan']?></td>
    									<td>
    										<div class="btn-group">
    											<a href="<?=base_url()?>administrator/edit_desa/<?=$p['id_desa']?>?lembaga=<?=$this->session->userdata('nama_lembaga');?>" class="btn btn-success">Edit</a>
    											
    											<button type="button" class="btn btn-default" disabled=""><i class="fa fa-align-center"></i></button>

    											<a href="<?=base_url()?>administrator/hapus_desa/<?=$p['id_desa']?>?lembaga=<?=$this->session->userdata('nama_lembaga');?>" class="btn btn-danger" onclick="return confirm('Anda Yakin Ingin Menghapus Data Ini ?')">Hapus</a>
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