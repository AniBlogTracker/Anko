<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Page Content -->
<div class="hero-static d-flex align-items-center">
  <div class="content">
    <div class="row justify-content-center push">
      <div class="col-md-8 col-lg-6 col-xl-4">
        <!-- Sign In Block -->
        <div class="block block-rounded mb-0">
          <div class="block-header block-header-default">
            <h3 class="block-title">Sign In</h3>
            <div class="block-options">
              <a class="btn-block-option" href="https://forums.sakurajima.moe/register/" data-bs-toggle="tooltip" data-bs-placement="left" title="New Account">
                <i class="fa fa-user-plus"></i>
              </a>
            </div>
          </div>
          <div class="block-content">
            <div class="p-sm-3 px-lg-4 px-xxl-5 py-lg-5">
              <h1 class="h2 mb-1">AniBlogTracker Login</h1>
              <p class="fw-medium text-muted">
                Click Authorize with your Sakurajima XenForo Forums account to login/signup. If you don't have a Sakurajima Forums account, you can sign up for one.
              </p>

              <!-- Sign In Form -->
              <!-- jQuery Validation (.js-validation-signin class is initialized in js/pages/op_auth_signin.min.js which was auto compiled from _js/pages/op_auth_signin.js) -->
              <!-- For more info and examples you can check out https://github.com/jzaefferer/jquery-validation -->
              <form class="js-validation-signin" action="be_pages_auth_all.php" method="POST">
                <div class="row mb-4">
                  <div class="col-md-6 col-xl-5">
                    <button type="submit" class="btn w-100 btn-alt-primary">
                      <i class="fa fa-fw fa-sign-in-alt me-1 opacity-50"></i> Authorize with XenForo
                    </button>
                  </div>
                </div>
              </form>
              <!-- END Sign In Form -->
			<p><a href="./">Return to AniBlogTracker</a></p>
            </div>
          </div>
        </div>
        <!-- END Sign In Block -->
      </div>
    </div>
    <div class="fs-sm text-muted text-center">
      <strong><?php echo $one->name . ' ' . $one->version; ?></strong> &copy; <span data-toggle="year-copy"></span>
    </div>
  </div>
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>

<!-- jQuery (required for jQuery Validation plugin) -->
<?php $one->get_js('js/lib/jquery.min.js'); ?>

<!-- Page JS Plugins -->
<?php $one->get_js('js/plugins/jquery-validation/jquery.validate.min.js'); ?>

<!-- Page JS Code -->
<?php $one->get_js('js/pages/op_auth_signin.min.js'); ?>

<?php require 'inc/_global/views/footer_end.php'; ?>
