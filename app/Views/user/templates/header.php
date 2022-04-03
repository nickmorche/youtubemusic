<body class="">
  <div class="wrapper">
    <!--     
    <div class="sidebar">
      <div class="sidebar-wrapper">
        <div class="logo">
          <a href="javascript:void(0)" class="simple-text logo-mini">
            CT
          </a>
          <a href="javascript:void(0)" class="simple-text logo-normal">
            Creative Tim
          </a>
        </div>
        <ul class="nav">
          <li class="active ">
            <a href="<?=base_url('/admin')?>">
              <i class="tim-icons icon-chart-pie-36"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li>
            <a href="<?=base_url('/admin/icons')?>">
              <i class="tim-icons icon-atom"></i>
              <p>Icons</p>
            </a>
          </li>
          <li>
            <a href="<?=base_url('/admin/map')?>">
              <i class="tim-icons icon-pin"></i>
              <p>Maps</p>
            </a>
          </li>
          <li>
            <a href="<?=base_url('/admin/notifications')?>">
              <i class="tim-icons icon-bell-55"></i>
              <p>Notifications</p>
            </a>
          </li>
          <li>
            <a href="<?=base_url('/admin/user')?>">
              <i class="tim-icons icon-single-02"></i>
              <p>User Profile</p>
            </a>
          </li>
          <li>
            <a href="<?=base_url('/admin/tables')?>">
              <i class="tim-icons icon-puzzle-10"></i>
              <p>Table List</p>
            </a>
          </li>
          <li>
            <a href="<?=base_url('/admin/typography')?>">
              <i class="tim-icons icon-align-center"></i>
              <p>Typography</p>
            </a>
          </li>
          <li>
            <a href="<?=base_url('/admin/rtl')?>">
              <i class="tim-icons icon-world"></i>
              <p>RTL Support</p>
            </a>
          </li>
          <li class="active-pro">
            <a href="<?=base_url('/admin/upgrade')?>">
              <i class="tim-icons icon-spaceship"></i>
              <p>Upgrade to PRO</p>
            </a>
          </li>
        </ul>
      </div>
    </div> -->

    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="<?=base_url('/')?>">YouTube Music</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse" id="navigation">
            <ul class="navbar-nav ml-auto">
              <li class="search-bar input-group">
                <button class="btn btn-link" id="search-button" data-toggle="modal" data-target="#searchModal"><i class="tim-icons icon-zoom-split" ></i>
                  <span class="d-lg-none d-md-block">Search</span>
                </button>
              </li>
              <li class="dropdown nav-item">
                <a href="#" class="dropdown-toggle nav-link">
                  <i class="tim-icons icon-compass-05"></i>
                  <p class="d-lg-none">Explorar</p>
                </a>
              </li>
              <li class="dropdown nav-item">
                <a href="#" class="dropdown-toggle nav-link">
                  <i class="tim-icons tim-icons icon-time-alarm"></i>
                  <p class="d-lg-none">Biblioteca</p>
                </a>
              </li>
              <li class="dropdown nav-item">
                <a href="javascript:void(0)" class="dropdown-toggle nav-link" data-toggle='dropdown'>
                  <i class="tim-icons icon-simple-add"></i>
                  <p class="d-lg-none">Adicionar</p>
                </a>
                <ul class="dropdown-menu dropdown-menu-right dropdown-navbar">
                  <li class="nav-link"><a href="<?=base_url('/')?>" class="nav-item dropdown-item">Música</a></li>
                  <li class="nav-link"><a href="<?=base_url('/composers')?>" class="nav-item dropdown-item">Compositor</a></li>
                  <li class="nav-link"><a href="<?=base_url('/')?>" class="nav-item dropdown-item">Album</a></li>
                </ul>
              </li>
              <li class="dropdown nav-item">
                <a href="javascript:void(0)" class="dropdown-toggle nav-link" data-toggle="dropdown">
                  <div class="notification d-none d-lg-block d-xl-block"></div>
                  <i class="tim-icons icon-sound-wave"></i>
                  <p class="d-lg-none">
                    Notifications
                  </p>
                </a>
                <ul class="dropdown-menu dropdown-menu-right dropdown-navbar">
                  <li class="nav-link"><a href="#" class="nav-item dropdown-item">Mike John responded to your email</a></li>
                  <li class="nav-link"><a href="javascript:void(0)" class="nav-item dropdown-item">You have 5 more tasks</a></li>
                  <li class="nav-link"><a href="javascript:void(0)" class="nav-item dropdown-item">Your friend Michael is in town</a></li>
                  <li class="nav-link"><a href="javascript:void(0)" class="nav-item dropdown-item">Another notification</a></li>
                  <li class="nav-link"><a href="javascript:void(0)" class="nav-item dropdown-item">Another one</a></li>
                </ul>
              </li>
              <li class="dropdown nav-item">
                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                  <div class="photo">
                    <img src="/img/anime3.png" alt="Profile Photo">
                  </div>
                  <b class="caret d-none d-lg-block d-xl-block"></b>
                  <p class="d-lg-none">
                    Log out
                  </p>
                </a>
                <ul class="dropdown-menu dropdown-navbar">
                  <li class="nav-link"><a href="javascript:void(0)" class="nav-item dropdown-item">Profile</a></li>
                  <li class="nav-link"><a href="javascript:void(0)" class="nav-item dropdown-item">Settings</a></li>
                  <li class="dropdown-divider"></li>
                  <li class="nav-link"><a href="javascript:void(0)" class="nav-item dropdown-item">Log out</a></li>
                </ul>
              </li>
              <li class="separator d-lg-none"></li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="modal modal-search fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchModal" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="SEARCH">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <i class="tim-icons icon-simple-remove"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- End Navbar -->