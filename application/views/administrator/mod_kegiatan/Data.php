<div class="content-wrapper">
	<section class="content-header">
      <h1>
        Data Kegiatan
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Administrator</a></li>
        <li class="active">Data Kegiatan</li>
      </ol>
    </section>

    <section class="content">
    	<div class="row">
    		<div class="col-md-12">
    			<div class="box box-primary">
    				<div class="box-header">
    					<h3 class="box-title">Tabel Data Kegiatan</h3>
    				</div>
    				<div class="box-body">
    					<table id="example1" class="table table-bordered table-striped">
    						<thead>
    							<tr>
    								<td colspan="7">
    									<a href="<?=base_url()?>administrator/tambah_kegiatan?lembaga=<?=$this->session->userdata('nama_lembaga')?>" class="btn btn-block btn-primary">Tambah Data</a>
    								</td>
    							</tr>
    							<tr>
    								<th>NO</th>
    								<th>Judul Kegiatan</th>
                                    <th>Jenis Kegiatan</th>
                                    <th>Penulis</th>
    								<th>Actions</th>
    							</tr>
    						</thead>
    						<tbody>
    							<?php 
    							$no = 1 ;
    							foreach ($kegiatan as $l) { 
                                    if ($l['author'] == 0) {
                                        $ad = $this->db->query("SELECT * FROM administrator WHERE id = '1'")->row_array();
                                    } else {
                                        $ad = $this->db->query("SELECT * FROM tb_alumni WHERE id_alumni = '$l[author]'")->row_array();
                                    }
                                    ?>
    								<tr>
    									<td><?=$no?></td>
    									<td><?=$l['judul_kegiatan']?></td>
                                        <td><?=$l['jenis_kegiatan']?></td>
                                        <td><?=$l['author'] == 0 ? $ad['username'] : $ad['nama']?></td>
    									<td>
                                            <div class="btn-group">
                                                <a href="<?=base_url()?>administrator/edit_kegiatan/<?=$l['id_kegiatan']?>?lembaga=<?=$this->session->userdata('nama_lembaga')?>" class="btn btn-success">Edit</a>

                                                <button type="button" class="btn btn-default" disabled=""><i class="fa fa-align-center"></i></button>

                                                <a href="<?=base_url()?>administrator/hapus_kegiatan/<?=$l['id_kegiatan']?>?lembaga=<?=$this->session->userdata('nama_lembaga')?>" class="btn btn-danger" onclick="return confirm('Anda Yakin Ingin Menghapus Data Ini ?')">Hapus</a>
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