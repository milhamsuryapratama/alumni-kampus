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
    					<h3 class="box-title">Edit Data Lembaga NJ</h3>
    				</div>
    				<!-- /.box-header -->
    				<!-- form start -->
    				<form action="<?=base_url()?>administrator/edit_lembaga_nj" method="post">
                        <input type="hidden" name="id_lembaga_nj" value="<?=$nj['id_lembaga_nj']?>">
    					<div class="box-body">
    						<div class="form-group">
    							<label for="nama_lembaga_nj">Nama Lembaga NJ</label>
    							<input type="text" name="nama_lembaga_nj" class="form-control" id="nama_lembaga_nj" placeholder="Enter Nama Lembaga NJ" value="<?=$nj['nama_lembaga_nj']?>">
    						</div>
                            <div class="form-group">
                                <label for="situs">Situs</label>
                                <input type="text" name="situs" class="form-control" id="situs" placeholder="Enter Situs Lembaga" value="<?=$nj['situs']?>">
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