<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
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
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu tree" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <?php if ($this->session->userdata('username') === 'p4nj') { ?>
        <li>
          <a href="<?=base_url()?>administrator/dashboard">
            <i class="fa fa-calendar"></i> <span>Dashboard</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>

        <li>
          <a href="<?=base_url()?>administrator/alumni">
            <i class="fa fa-calendar"></i> <span>Alumni</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Desa & Kecamatan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?=base_url()?>administrator/kecamatan"><i class="fa fa-circle-o"></i> Kecamatan</a></li>
            <li><a href="<?=base_url()?>administrator/desa"><i class="fa fa-circle-o"></i> Desa</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Lembaga</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?=base_url()?>administrator/lembaga"><i class="fa fa-circle-o"></i> Lembaga Alumni</a></li>
            <li><a href="<?=base_url()?>administrator/lembaga_nj"><i class="fa fa-circle-o"></i> Lembaga NJ</a></li>
          </ul>
        </li>

        <li>
          <a href="<?=base_url()?>administrator/jabatan">
            <i class="fa fa-calendar"></i> <span>Jabatan</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>

        <li>
          <a href="<?=base_url()?>administrator/devisi">
            <i class="fa fa-calendar"></i> <span>Devisi</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>

        <li>
          <a href="<?=base_url()?>administrator/struktur">
            <i class="fa fa-calendar"></i> <span>Struktur</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>

        <li>
          <a href="<?=base_url()?>administrator/korcam">
            <i class="fa fa-calendar"></i> <span>Korcam</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>

        <li>
          <a href="<?=base_url()?>administrator/pengurus">
            <i class="fa fa-calendar"></i> <span>Pengurus</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>

        <?php } else { ?>

        <li>
          <a href="<?=base_url()?>administrator/visi_misi?lembaga=<?=$this->session->userdata('username')?>">
            <i class="fa fa-calendar"></i> <span>Visi & Misi</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>

        <li>
          <a href="<?=base_url()?>administrator/kegiatan?lembaga=<?=$this->session->userdata('username')?>">
            <i class="fa fa-calendar"></i> <span>Kegiatan</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>

        <li>
          <a href="<?=base_url()?>administrator/struktur?lembaga=<?=$this->session->userdata('username')?>">
            <i class="fa fa-calendar"></i> <span>Struktur</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>

      <?php } ?>
      
      </ul>

    </section>
    <!-- /.sidebar -->
  </aside>