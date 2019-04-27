<div class="content-wrapper">
	<section class="content-header">
      <h1>
        Data Visi Misi
        <?php 
              if ($this->session->userdata('id_lembaga') == 1) {
                   echo "FKSJ";
              } elseif ($this->session->userdata('id_lembaga') == 2) {
                  echo "P4NJ";
              } else {
                  echo "NJIC";
              }
          ?>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Administrator</a></li>
        <li class="active">Data Visi Misi 
            <?php 
              if ($this->session->userdata('id_lembaga') == 1) {
                   echo "FKSJ";
              } elseif ($this->session->userdata('id_lembaga') == 2) {
                  echo "P4NJ";
              } else {
                  echo "NJIC";
              }
          ?>
        </li>
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
    				<div class="box-header">
    					<h3 class="box-title">Tabel Data Visi Misi 
                            <?php 
                              if ($this->session->userdata('id_lembaga') == 1) {
                                   echo "FKSJ";
                              } elseif ($this->session->userdata('id_lembaga') == 2) {
                                  echo "P4NJ";
                              } else {
                                  echo "NJIC";
                              }
                            ?>
                        </h3>
    				</div>
    				<div class="box-body">
    					<table id="example1" class="table table-bordered table-striped">
    						<thead>
    							<tr>
    								<td colspan="7">
                                        <?php if (count($vm) > 0) { ?>
                                            <a href="<?=base_url()?>administrator/tambah_visi_misi?lembaga=<?=$this->session->userdata('nama_lembaga')?>" class="btn btn-block btn-primary" disabled>Tambah Data</a>
                                        <?php } else { ?>
                                            <a href="<?=base_url()?>administrator/tambah_visi_misi?lembaga=<?=$this->session->userdata('nama_lembaga')?>" class="btn btn-block btn-primary">Tambah Data</a>
                                        <?php } ?>    									
    								</td>
    							</tr>
    							<tr>
    								<th>NO</th>
    								<th>Visi</th>
                                    <th>Misi</th>
                                    <th>Lembaga</th>
    								<th>Actions</th>
    							</tr>
    						</thead>
    						<tbody>
    							<?php 
    							$no = 1 ;
    							foreach ($vm as $l) { ?>
    								<tr>
    									<td><?=$no?></td>
    									<td><?=$l['visi']?></td>
                                        <td><?=$l['misi']?></td>
                                        <td><?=$l['nama_lembaga']?></td>
    									<td>
    										<div class="btn-group">
    											<a href="<?=base_url()?>administrator/edit_visi_misi/<?=$l['id_visi_misi']?>?lembaga=<?=$this->session->userdata('nama_lembaga')?>" class="btn btn-success">Edit</a>
    											
    											<button type="button" class="btn btn-default" disabled=""><i class="fa fa-align-center"></i></button>

    											<a href="<?=base_url()?>administrator/hapus_visi_misi/<?=$l['id_visi_misi']?>?lembaga=<?=$this->session->userdata('nama_lembaga')?>" class="btn btn-danger" onclick="return confirm('Anda Yakin Ingin Menghapus Data Ini ?')">Hapus</a>
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