<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="<?=base_url()?>assets/img/user2-160x160.jpg" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>Alexander Pierce</p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <!-- search form -->
    <form action="#" method="get" class="sidebar-form">
      <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Search...">
        <span class="input-group-btn">
          <button type="submit" name="search" id="search-btn" class="btn btn-flat">
            <i class="fa fa-search"></i>
          </button>
        </span>
      </div>
    </form>
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">MAIN NAVIGATION</li>
      <li><a href="<?=base_url()?>administrator/dashboard"><i class="fa fa-circle-o"></i> Dashboard</a></li>
    </ul>
    <ul class="sidebar-menu">
      <?php if ($this->session->userdata('username') === 'p4nj') { ?>
        <li><a href="<?=base_url()?>administrator/alumni"><i class="fa fa-circle-o"></i> Alumni</a></li>
        <li><a href="<?=base_url()?>administrator/kecamatan"><i class="fa fa-circle-o"></i> Kecamatan</a></li>
        <li><a href="<?=base_url()?>administrator/desa"><i class="fa fa-circle-o"></i> Desa</a></li>
        <li><a href="<?=base_url()?>administrator/lembaga"><i class="fa fa-circle-o"></i> Lembaga</a></li>
        <li><a href="<?=base_url()?>administrator/lembaga_nj"><i class="fa fa-circle-o"></i> Lembaga NJ</a></li>
        <li><a href="<?=base_url()?>administrator/jabatan"><i class="fa fa-circle-o"></i> Jabatan</a></li>
        <li><a href="<?=base_url()?>administrator/devisi"><i class="fa fa-circle-o"></i> Devisi</a></li>
        <li><a href="<?=base_url()?>administrator/struktur"><i class="fa fa-circle-o"></i> Struktur</a></li>
        <li><a href="<?=base_url()?>administrator/korcam"><i class="fa fa-circle-o"></i> Korcam</a></li>
      <?php } else { ?>
        <li><a href="<?=base_url()?>administrator/visi_misi?lembaga=<?=$this->session->userdata('username')?>"><i class="fa fa-circle-o"></i> Visi & Misi</a></li>
        <li><a href="<?=base_url()?>administrator/kegiatan?lembaga=<?=$this->session->userdata('username')?>"><i class="fa fa-circle-o"></i> Kegiatan</a></li>
        <li><a href="<?=base_url()?>administrator/struktur?lembaga=<?=$this->session->userdata('username')?>"><i class="fa fa-circle-o"></i> Struktur</a></li>
      <?php } ?>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>