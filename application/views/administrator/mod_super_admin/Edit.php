<div class="content-wrapper">
	<section class="content-header">
      <h1>
        Edit Data Super Admin
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Administrator</a></li>
        <li class="active">Edit Data Super Admin</li>
      </ol>
    </section>
    <section class="content">
    	<div class="row">
    		<div class="col-md-12">
    			<?php if ($this->session->flashdata('pwdLamaSalah')) { ?>
                    <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h4><i class="icon fa fa-check"></i> Sukses!</h4>
                        <?php echo $this->session->flashdata('pwdLamaSalah'); ?>
                    </div>
                <?php } ?>

    			<div class="box box-primary">
    				<div class="box-header with-border">
    					<h3 class="box-title">Form Edit Data Super Admin</h3>
    				</div>
    				<!-- /.box-header -->
    				<!-- form start -->
    				<form action="<?=base_url()?>administrator/edit_super_admin" method="post">
                        <input type="hidden" name="id_super_admin" value="<?=$admin['id']?>">
    					<div class="box-body">
    						<div class="form-group">
    							<label for="username">Username</label>
    							<input type="text" name="username" class="form-control" id="username" placeholder="Enter Username" value="<?=$admin['username']?>" readonly>
    						</div>  
                            <div class="form-group">
                                <label for="password_lama">Password Lama</label>
                                <input type="password" name="password_lama" class="form-control" id="password_lama" placeholder="Enter password" required> <input type="checkbox" name="lihatpwd" id="lihatpwd" onclick="seepwd_lama()"> Lihat Password
                            </div>  
                            <div class="form-group">
                                <label for="password_baru">Password Baru</label>
                                <input type="password" name="password_baru" class="form-control" id="password_baru" placeholder="Enter password" required>
                                <input type="checkbox" name="lihatpwd" id="lihatpwd" onclick="seepwd_baru()"> Lihat Password | 
                                <small style="color: red">Password Minimal 3 Digit</small>
                            </div>                          
    					</div>
    					<!-- /.box-body -->

    					<div class="box-footer">
    						<button type="submit" id="update" name="update" class="btn btn-primary" onclick="return confirm('Anda Yakin Ingin Menyimpan Data Ini ?')">Update</button> <button type="button" id="cancle" name="cancle" class="btn btn-primary" onclick="self.history.back()">Batal</button>
    					</div>
    				</form>
    			</div>


    		</div>
    	</div>
    </section>
</div>

<script src="<?=base_url()?>assets/js/jquery.min.js"></script>

<script>

  $(function() {
    $("#password_baru").on('focusout', function() {
      if ($("#password_baru").val().length < 3) {
        alert('Password Harus Lebih Dari 3 Digit');
        $("#update").attr('disabled', true);
      } else {
        $("#update").attr('disabled', false);
      }
    })
  })


  function seepwd_lama()
  {
    var temp = document.getElementById("password_lama"); 
    if (temp.type === "password") { 
      temp.type = "text"; 
    } 
    else { 
      temp.type = "password"; 
    } 
  }

  function seepwd_baru()
  {
    var temp = document.getElementById("password_baru"); 
    if (temp.type === "password") { 
      temp.type = "text"; 
    } 
    else { 
      temp.type = "password"; 
    } 
  }
</script>