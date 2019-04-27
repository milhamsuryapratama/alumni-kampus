<div class="content-wrapper">
	<section class="content-header">
      <h1>
        Data Struktur 
        <?php 
            if ($_GET['lembaga'] == 1) {
                 echo "FKSJ";
            } elseif ($_GET['lembaga'] == 2) {
                echo "P4NJ";
            } else {
                echo "NJIC";
            }
        ?>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Administrator</a></li>
        <li class="active">Data Struktur 
            <?php 
                if ($_GET['lembaga'] == 1) {
                     echo "FKSJ";
                } elseif ($_GET['lembaga'] == 2) {
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
    			<div class="box box-primary">
    				<div class="box-header">
    					<h3 class="box-title">Tabel Data Struktur 
                            <?php 
                                if ($_GET['lembaga'] == 1) {
                                   echo "FKSJ";
                               } elseif ($_GET['lembaga'] == 2) {
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
    									<a href="<?=base_url()?>administrator/tambah_struktur?lembaga=<?=$_GET['lembaga']?>" class="btn btn-block btn-primary">Tambah Data</a>
    								</td>
    							</tr>
    							<tr>
    								<th>NO</th>
    								<th>Nama Alumni</th>
                                    <th>Jabatan</th>
                                    <th>Devisi</th>
                                    <th>Masa Bakti</th>
                                    <th>Status</th>
    								<th>Actions</th>
    							</tr>
    						</thead>
    						<tbody>
    							<?php 
    							$no = 1 ;
    							foreach ($struktur as $l) { ?>
    								<tr>
    									<td><?=$no?></td>
    									<td><?=$l['nama']?></td>
                                        <td><?=$l['nama_jabatan']?></td>
                                        <td><?=$l['nama_devisi']?></td>
                                        <td><?=$l['masa_bakti']?></td>
                                        <td><?=
                                            $l['status'] === "Y" ? "Aktif" : "Tidak Aktif"
                                        ?></td>
    									<td>
    										<div class="btn-group">
    											<a href="<?=base_url()?>administrator/edit_struktur/<?=$l['id_struktur']?>?lembaga=<?=$_GET['lembaga']?>" class="btn btn-success">Edit</a>
    											
    											<button type="button" class="btn btn-default" disabled=""><i class="fa fa-align-center"></i></button>

    											<a href="<?=base_url()?>administrator/hapus_struktur/<?=$l['id_struktur']?>?lembaga=<?=$_GET['lembaga']?>" class="btn btn-danger" onclick="return confirm('Anda Yakin Ingin Menghapus Data Ini ?')">Hapus</a>

                                                <button type="button" class="btn btn-default" disabled=""><i class="fa fa-align-center"></i></button>

                                                <?php 
                                                    if ($l['status'] == "Y") { ?>
                                                        <a href="<?=base_url()?>administrator/nonaktif_struktur/<?=$l['id_struktur']?>?lembaga=<?=$_GET['lembaga']?>" class="btn btn-danger" onclick="return confirm('Anda Yakin Ingin Menonaktifkan Data Ini ?')">Nonaktifkan</a>
                                                    <?php } else { ?>
                                                        <a href="<?=base_url()?>administrator/aktifkan_struktur/<?=$l['id_struktur']?>?lembaga=<?=$_GET['lembaga']?>" class="btn btn-success" onclick="return confirm('Anda Yakin Ingin Mengaktifkan Data Ini ?')">Aktifkan</a>
                                                <?php } ?>
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