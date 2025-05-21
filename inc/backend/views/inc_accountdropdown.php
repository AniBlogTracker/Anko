      <div class="dropdown d-inline-block ms-2">
	<?php if ($token) {?>
        <button type="button" class="btn btn-sm btn-alt-secondary d-flex align-items-center" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <img class="rounded-circle" src="<?php echo $one->assets_folder; ?>/media/avatars/avatar10.jpg" alt="Header Avatar" style="width: 21px;">
          <span class="d-none d-sm-inline-block ms-2">Username</span>
          <i class="fa fa-fw fa-angle-down d-none d-sm-inline-block opacity-50 ms-1 mt-1"></i>
        </button>
        <div class="dropdown-menu dropdown-menu-md dropdown-menu-end p-0 border-0" aria-labelledby="page-header-user-dropdown">
          <div class="p-3 text-center bg-body-light border-bottom rounded-top">
            <?php $one->get_avatar(10, '', 48, true); ?>
            <p class="mt-2 mb-0 fw-medium">Username</p>
          </div>
          <div class="p-2">
            <a class="dropdown-item d-flex align-items-center justify-content-between" href="javascript:void(0)">
              <span class="fs-sm fw-medium">Manage Subscriptions</span>
            </a>
          </div>
          <div role="separator" class="dropdown-divider m-0"></div>
          <div class="p-2">
            <a class="dropdown-item d-flex align-items-center justify-content-between" href="op_auth_signin.php">
              <span class="fs-sm fw-medium">Log Out</span>
            </a>
          </div>
        </div>
<?php } else { ?>
        <button type="button" class="btn btn-sm btn-alt-secondary align-items-center" onclick="location.href='./login.php'">
          <span class="d-sm-inline-block ms-2">Login</span>
        </button>
         <?php }?>
      </div>