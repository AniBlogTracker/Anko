<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Hero -->
<div class="bg-body-light">
  <div class="content content-full">
    <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center py-2">
      <div class="flex-grow-1">
        <h1 class="h3 fw-bold mb-1">
          Sites
        </h1>
        <h2 class="fs-base lh-base fw-medium text-muted mb-0">
          This page contains a list of blogs, channels, newsletters, and more that AniBlogTracker tracks.
        </h2>
      </div>
    </div>
  </div>
</div>
<!-- END Hero -->

<!-- Page Content -->
<div class="content">
  <?php 
$offset = 0;
if (isset($_GET['p'])) {
  $offset = $_GET['p'];
}
// Retrieve recent posts
$jsonData = file_get_contents($one->apiurl . "/sites/?p=" . $offset );
// Decode the JSON data into a PHP associative array
$data = json_decode($jsonData, true);
// Check if decoding was successful
if ($data !== null) {
  $feeditems = $data['data'];
  // Perform further processing or respond to the request
  ?>
  <table class="table table-striped table-vcenter">
  <tbody>
  <?php foreach ($feeditems as $x) { 
  ?>
    <tr>
      <td>
        <h4 class="h5 mt-3 mb-2">
          <a href="<?php echo($x["url"]); ?>"><?php echo($x["name"]); ?></a> - <a href="./site.php?sid=<?php echo($x["site_id"]); ?>">Browse Posts</a>
        </h4>
        <p class="d-none d-sm-block text-muted">
         <?php echo($x["description"]); ?>
        </p>
      </td>
    </tr>
    <?php } ?>
  </tbody>
  </table>
  <!-- Pagination -->
  <nav aria-label="Page navigation">
    <ul class="pagination justify-content-center push">
      <?php if (!is_null($data["page"]["prev"])) {?>
      <li class="page-item">
        <a class="page-link" href="?p=<?php echo($data["page"]["prev"]); ?>" aria-label="Prev">
          <span aria-hidden="true">
            <i class="fa fa-angle-left"></i>
          </span>
          <span class="visually-hidden">Previous</span>
        </a>
      <?php }
      if ($data["page"]["next"]) {?>
      <li class="page-item">
        <a class="page-link" href="?p=<?php echo($data["page"]["next"]); ?>" aria-label="Next">
          <span aria-hidden="true">
            <i class="fa fa-angle-right"></i>
          </span>
          <span class="visually-hidden">Next</span>
        </a>
      </li>
      <?php }?>
    </ul>
  </nav>
  <!-- END Pagination -->
  <?php } else { ?>
  <div class="py-4">
          <!-- Error Header -->
          <h1 class="display-1 fw-bolder text-default">
            Unable to load feed items
          </h1>
          <h2 class="h4 fw-normal text-muted mb-5">
            Unable to communicate with API server, try again later.
          </h2>
          <!-- END Error Header -->
        </div>
  </div>
  <?php } ?>
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>
<?php require 'inc/_global/views/footer_end.php'; ?>
