<?php
/**
 * backend/views/inc_footer.php
 *
 * Author: pixelcave
 *
 * The footer of each page (Backend pages)
 *
 */
?>

<!-- Footer -->
<footer id="page-footer" class="bg-body-light">
  <div class="content py-3">
    <div class="row fs-sm">
      <div class="col-sm-6 order-sm-2 py-1 text-center text-sm-end">
        AniBlogTracker is a web application by <a href="https://joinsakurajima.org">Sakurajima</a>, and it's <a href="https://github.com/orgs/AniBlogTracker/">Open Sourced.</a>
      </div>
      <div class="col-sm-6 order-sm-1 py-1 text-center text-sm-start">
        <a class="fw-semibold" href="https://github.com/orgs/AniBlogTracker/" target="_blank">AniBlogTracker <?php echo $one->name . ' ' . $one->version; ?></a> &copy; <span data-toggle="year-copy"></span>
      </div>
    </div>
  </div>
</footer>
<!-- END Footer -->
