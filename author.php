<?php 
require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>
<?php
$pffset = 0;
if (isset($_GET['p'])) {
    $offset = $_GET['p'];
}
else {
    $pffset = 0;
}
$author_id = "";
if (isset($_GET['aid'])) {
    $author_id = $_GET['aid'];
}
?>
<!-- Hero Content -->
<div class="bg-primary-dark">
<?php
// Retrieve recent posts
$jsonData = file_get_contents($one->apiurl . "feeds/author/". $author_id ."/?p=" . $offset );
// Decode the JSON data into a PHP associative array
$data = json_decode($jsonData, true);
// Check if decoding was successful
if ($data !== null && isset($_GET['aid'])) {?>
  <div class="content content-full text-center pt-7 pb-6">
    <h1 class="h2 text-white mb-2">
      Posts from <?php echo($data["data"][0]["websitename"]); ?> by <?php echo($data["data"][0]["author"]); ?>
    </h1>
    <h2 class="h4 fw-normal text-white-75 mb-0">
    </h2>
  </div>
</div>
<!-- END Hero Content -->

<!-- Page Content -->
<div class="content content-boxed">
  <div class="row">
<?php
	$feeditems = $data['data'];
	foreach ($feeditems as $x) {
   // Perform further processing or respond to the request
?>

    <?php require 'inc/templates/post-entry.php'; ?>
<?php }?>
  </div>

  <!-- Pagination -->
  <nav aria-label="Page navigation">
    <ul class="pagination justify-content-center push">
      <?php if (!is_null($data["page"]["prev"])) {?>
      <li class="page-item">
        <a class="page-link" href="?p=<?php echo($data["page"]["prev"]) . "&?aid=" . $author_id ; ?>" aria-label="Prev">
          <span aria-hidden="true">
            <i class="fa fa-angle-left"></i>
          </span>
          <span class="visually-hidden">Previous</span>
        </a>
      <?php }
      if ($data["page"]["next"]) {?>
      <li class="page-item">
        <a class="page-link" href="?p=<?php echo($data["page"]["next"]) . "&?aid=" . $author_id; ?>" aria-label="Next">
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
<?php 
 }else {
?>
<!-- Page Content -->
<div class="content content-boxed">
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
<?php
}
?>
</div>
<!-- END Page Content -->
<!-- END Get Started -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>
<?php require 'inc/_global/views/footer_end.php'; ?>
