<?php
/**
 * backend/views/inc_header.php
 *
 * Author: pixelcave
 *
 * The header of each page (Backend pages)
 *
 */
?>

<!-- Header -->
<header id="page-header">
  <!-- Header Content -->
  <div class="content-header">
    <!-- Left Section -->
    <div class="d-flex align-items-center">
      <!-- Toggle Sidebar -->
      <!-- Layout API, functionality initialized in Template._uiApiLayout()-->
      <button type="button" class="btn btn-sm btn-alt-secondary me-2" data-toggle="layout" data-action="sidebar_toggle">
        <i class="fa fa-fw fa-bars"></i>
      </button>
      <!-- END Toggle Sidebar -->

      <!-- Open Search Section (visible on smaller screens) -->
      <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
      <button type="button" class="btn btn-sm btn-alt-secondary d-md-none" data-toggle="layout" data-action="header_search_on">
        <i class="fa fa-fw fa-search"></i>
      </button>
      <!-- END Open Search Section -->

      <!-- Search Form (visible on larger screens) -->
      <form class="d-none d-md-inline-block" action="search.php" method="POST">
        <div class="input-group input-group-sm">
          <input type="text" class="form-control form-control-alt" placeholder="Search.." id="page-header-search-input2" name="page-header-search-input2">
          <span class="input-group-text border-0">
            <i class="fa fa-fw fa-search"></i>
          </span>
        </div>
      </form>
      <!-- END Search Form -->
    </div>
    <!-- END Left Section -->

    <!-- Right Section -->
    <div class="d-flex align-items-center">
      <!-- User Dropdown -->
      <div class="dropdown d-inline-block ms-2">
        <button type="button" class="btn btn-sm btn-alt-secondary d-flex align-items-center" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <img class="rounded-circle" src="<?php echo $one->assets_folder; ?>/media/avatars/avatar10.jpg" alt="Header Avatar" style="width: 21px;">
          <span class="d-none d-sm-inline-block ms-2">John</span>
          <i class="fa fa-fw fa-angle-down d-none d-sm-inline-block opacity-50 ms-1 mt-1"></i>
        </button>
        <div class="dropdown-menu dropdown-menu-md dropdown-menu-end p-0 border-0" aria-labelledby="page-header-user-dropdown">
          <div class="p-3 text-center bg-body-light border-bottom rounded-top">
            <?php $one->get_avatar(10, '', 48, true); ?>
            <p class="mt-2 mb-0 fw-medium">John Smith</p>
            <p class="mb-0 text-muted fs-sm fw-medium">Web Developer</p>
          </div>
          <div class="p-2">
            <a class="dropdown-item d-flex align-items-center justify-content-between" href="be_pages_generic_inbox.php">
              <span class="fs-sm fw-medium">Inbox</span>
              <span class="badge rounded-pill bg-primary ms-2">3</span>
            </a>
            <a class="dropdown-item d-flex align-items-center justify-content-between" href="be_pages_generic_profile.php">
              <span class="fs-sm fw-medium">Profile</span>
              <span class="badge rounded-pill bg-primary ms-2">1</span>
            </a>
            <a class="dropdown-item d-flex align-items-center justify-content-between" href="javascript:void(0)">
              <span class="fs-sm fw-medium">Settings</span>
            </a>
          </div>
          <div role="separator" class="dropdown-divider m-0"></div>
          <div class="p-2">
            <a class="dropdown-item d-flex align-items-center justify-content-between" href="op_auth_lock.php">
              <span class="fs-sm fw-medium">Lock Account</span>
            </a>
            <a class="dropdown-item d-flex align-items-center justify-content-between" href="op_auth_signin.php">
              <span class="fs-sm fw-medium">Log Out</span>
            </a>
          </div>
        </div>
      </div>
      <!-- END User Dropdown -->
    </div>
    <!-- END Right Section -->
  </div>
  <!-- END Header Content -->

  <!-- Header Search -->
  <div id="page-header-search" class="overlay-header bg-body-extra-light">
    <div class="content-header">
      <form class="w-100" action="search.php" method="POST">
        <div class="input-group">
          <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
          <button type="button" class="btn btn-alt-danger" data-toggle="layout" data-action="header_search_off">
            <i class="fa fa-fw fa-times-circle"></i>
          </button>
          <input type="text" class="form-control" placeholder="Search or hit ESC.." id="page-header-search-input" name="page-header-search-input">
        </div>
      </form>
    </div>
  </div>
  <!-- END Header Search -->

  <!-- Header Loader -->
  <!-- Please check out the Loaders page under Components category to see examples of showing/hiding it -->
  <div id="page-header-loader" class="overlay-header bg-body-extra-light">
    <div class="content-header">
      <div class="w-100 text-center">
        <i class="fa fa-fw fa-circle-notch fa-spin"></i>
      </div>
    </div>
  </div>
  <!-- END Header Loader -->
</header>
<!-- END Header -->
