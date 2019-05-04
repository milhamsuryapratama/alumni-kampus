<div class="content-wrapper">
	<section class="content-header">
      <h1>
        Data Anggota FKSJ
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Administrator</a></li>
        <li class="active">Data Anggota FKSJ</li>
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
    					<h3 class="box-title">Tabel Data Anggota FKSJ</h3>
    				</div>
    				<div class="box-body">
    					<table id="example1" class="table table-bordered table-striped">
    						<thead>
    							<tr>
    								<td colspan="9">
    									<a href="<?=base_url()?>administrator/tambah_anggota_fks?lembaga=<?=$this->session->userdata('nama_lembaga');?>" class="btn btn-block btn-primary">Tambah Data</a>
    								</td>
    							</tr>
    							<tr>
    								<th>NO</th>
                                    <th>NIS</th>
    								<th>Nama</th>
                                    <th>alamat</th>
                                    <th>Kecamatan</th>
                                    <th>Desa</th>
                                    <th>Gang / Wilayah</th>
                                    <th>Pendidikan</th>
    								<th>Actions</th>
    							</tr>
    						</thead>
    						<tbody>
    							<?php 
    							$no = 1;
    							foreach ($fks as $p) { ?>
    								<tr>
    									<td><?=$no?></td>
                                        <td><?=$p['nis']?></td>
    									<td><?=$p['nama']?></td>
                                        <td><?=$p['alamat']?></td>
                                        <td><?=$p['kecamatan']?></td>
                                        <td><?=$p['desa']?></td>
                                        <td><?=$p['gang_wilayah']?></td>
                                        <td><?=$p['nama_lembaga']?></td>
    									<td>
    										<div class="btn-group">
    											<a href="<?=base_url()?>administrator/edit_anggota_fks/<?=$p['nis']?>?lembaga=<?=$this->session->userdata('nama_lembaga');?>" class="btn btn-success">Edit</a>
    											
    											<button type="button" class="btn btn-default" disabled=""><i class="fa fa-align-center"></i></button>

    											<a href="<?=base_url()?>administrator/hapus_anggota_fks/<?=$p['nis']?>?lembaga=<?=$this->session->userdata('nama_lembaga');?>" class="btn btn-danger" onclick="return confirm('Anda Yakin Ingin Menghapus Data Ini ?')">Hapus</a>
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