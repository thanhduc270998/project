
 
  <body class="h-100">
    <div class="color-switcher animated">
      <h5>Set Color</h5>
      <ul class="accent-colors">
        <li class="accent-primary active" data-color="primary">
          <i class="material-icons">check</i>
        </li>
        <li class="accent-secondary" data-color="secondary">
          <i class="material-icons">check</i>
        </li>
        <li class="accent-success" data-color="success">
          <i class="material-icons">check</i>
        </li>
        <li class="accent-info" data-color="info">
          <i class="material-icons">check</i>
        </li>
        <li class="accent-warning" data-color="warning">
          <i class="material-icons">check</i>
        </li>
        <li class="accent-danger" data-color="danger">
          <i class="material-icons">check</i>
        </li>
      </ul>
      <div class="actions mb-4">
          <div class="loading-overlay">
          <div class="spinner"></div>
        </div>
      </div>
      <div class="close">
        <i class="material-icons">close</i>
      </div>
    </div>
    <div class="color-switcher-toggle animated pulse infinite">
      <i class="material-icons">settings</i>
    </div>
    <div class="container-fluid">
      <div class="row">
        <!-- Main Sidebar -->
       
        <aside class="main-sidebar col-12 col-md-3 col-lg-2 px-0">
          <div class="main-navbar">
            <nav class="navbar align-items-stretch navbar-light bg-white flex-md-nowrap border-bottom p-0">
              <a class="navbar-brand w-100 mr-0" href="dashboard" style="line-height: 25px;">
                <div class="d-table m-auto">
                  <img id="main-logo" class="d-inline-block align-top mr-1" style="max-width: 25px;" src="https://scontent.fhan3-1.fna.fbcdn.net/v/t1.0-9/71169039_1115121175351558_4425705069698088960_o.jpg?_nc_cat=102&ccb=2&_nc_sid=174925&_nc_ohc=fkGsenuLkz8AX9Wm5g1&_nc_ht=scontent.fhan3-1.fna&oh=f745ecd7217f474ea714eb547d0317c0&oe=60081C91" alt="Vip like">
                  <span class="d-none d-md-inline ml-1">SBGROUP</span>
                </div>
              </a>
              <a class="toggle-sidebar d-sm-inline d-md-none d-lg-none">
                <i class="material-icons">&#xE5C4;</i>
              </a>
            </nav>
          </div>
          <form action="#" class="main-sidebar__search w-100 border-right d-sm-flex d-md-none d-lg-none">
            <div class="input-group input-group-seamless ml-3">
              <div class="input-group-prepend">
                <div class="input-group-text">
                  <i class="fas fa-search"></i>
                </div>
              </div>
              <input class="navbar-search form-control" type="text" placeholder="Search for something..." aria-label="Search"> </div>
          </form>
          <div class="nav-wrapper">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="/">
                  <i class="material-icons">dashboard</i>
                  <span>Trang Chủ</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="/pages/viplike.php">
                  <i class="material-icons">thumb_up</i>
                  <span>Vip Like</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="/pages/bufflike.php">
                  <i class="material-icons">thumb_up</i>
                  <span>Buff Like</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="/pages/botcamxuc.php">
                  <i class="material-icons">insert_emoticon</i>
                  <span>Bot Cảm Xúc</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="/pages/vipcmt.php">
                  <i class="material-icons">comment</i>
                  <span>Vip Comment</span>
                </a>
              </li>
            

            </ul>
          </div>
        </aside>
        <!-- End Main Sidebar -->        
        <main class="main-content col-lg-10 col-md-9 col-sm-12 p-0 offset-lg-2 offset-md-3">
          <div class="main-navbar sticky-top bg-white">
            <!-- Main Navbar -->
            <nav class="navbar align-items-stretch navbar-light flex-md-nowrap p-0">
              <form action="#" class="main-navbar__search w-100 d-none d-md-flex d-lg-flex">
                <div class="input-group input-group-seamless ml-3">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                      <i class="fas fa-search"></i>
                    </div>
                  </div>
                  <input class="navbar-search form-control" type="text" placeholder="Search for something..." aria-label="Search"> </div>
              </form>
              <ul class="navbar-nav border-left flex-row">
                <li class="nav-item border-right dropdown notifications">
                  <a class="nav-link nav-link-icon text-center" href="javascript:void(0)" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="nav-link-icon__wrapper">
                      <i class="material-icons">&#xE7F4;</i>
                      <span class="badge badge-pill badge-danger">1</span>
                    </div>
                  </a>
                  <div class="dropdown-menu dropdown-menu-small" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" href="javascript:void(0)">
                      <div class="notification__icon-wrapper">
                        <div class="notification__icon">
                          <i class="material-icons">&#xE6E1;</i>
                        </div>
                      </div>
                      <div class="notification__content">
                        <span class="notification__category">Noti</span>
                        <p>Chào mừng bạn đến với hệ thống vip like của sbgroup
                        </p>
                      </div>
                    </a>
                    
                    <a class="dropdown-item notification__all text-center" href="javascript:void(0)"> View all Notifications </a>
                  </div>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle text-nowrap px-3  <a class="nav-link dropdown-toggle text-nowrap px-3" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    <img class="user-avatar rounded-circle mr-2" src="/images/avatars/0.jpg" alt="User Avatar"> <span class="d-none d-md-inline-block">
                        <?php
                        require_once ('database.php');
                        $query = "SELECT * FROM register WHERE username = '".$_SESSION['username']."' ORDER BY id DESC LIMIT 0,3 ";

                    $query_run = mysqli_query($conn, $query);
  if(mysqli_num_rows($query_run) > 0 )
  {
    while($row = mysqli_fetch_assoc($query_run))
   {
   ?><?php echo $row['username']; ?><?php }}?></span>
                  </a>
                  <div class="dropdown-menu dropdown-menu-small">
                    <a class="dropdown-item" href="user-profile-lite.html"><i class="material-icons">&#xE7FD;</i> Profile</a>
                    <a class="dropdown-item" href="components-blog-posts.html"><i class="material-icons">vertical_split</i> Blog Posts</a>
                    <a class="dropdown-item" href="add-new-post.html"><i class="material-icons">note_add</i> Add New Post</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item text-danger" href="#">
                      <i class="material-icons text-danger">&#xE879;</i> Logout </a>
                  </div>
                </li>
              </ul>
              <nav class="nav">
                <a href="#" class="nav-link nav-link-icon toggle-sidebar d-md-inline d-lg-none text-center border-left" data-toggle="collapse" data-target=".header-navbar" aria-expanded="false" aria-controls="header-navbar">
                  <i class="material-icons">&#xE5D2;</i>
                </a>
              </nav>
            </nav>
          </div>

          <!-- / .main-navbar -->
          <div class="main-content-container container-fluid px-4">
      