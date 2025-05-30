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
          Seasons
        </h1>
      </div>
    </div>
  </div>
</div>
<!-- END Hero -->

<!-- Page Content -->
<div class="content">
<?php
// Retrieve recent posts
$jsonData = file_get_contents($one->apiurl . "/seasons/" );
// Decode the JSON data into a PHP associative array
$data = json_decode($jsonData, true);
// Check if decoding was successful
if ($data !== null) {
    $seasonsorder = array();
    if ($data["current_season"] == "winter") {
        $seasonsorder = array( "winter", "fall", "summer", "spring" );
    }
    elseif ($data["current_season"] == "spring") {
        $seasonsorder = array( "spring", "winter", "fall", "summer" );
    }
    elseif ($data["current_season"] == "summer") {
        $seasonsorder = array( "summer", "spring", "winter", "fall" );
    }
    elseif ($data["current_season"] == "fall") {
        $seasonsorder = array( "fall", "summer", "spring", "winter" );
    }
    ?>
  <!-- Results -->
  <div class="block block-rounded overflow-hidden">
    <ul class="nav nav-tabs nav-tabs-block" role="tablist">
      <li class="nav-item">
        <button type="button" class="nav-link active" id="season1-tab" data-bs-toggle="tab" data-bs-target="#season1" role="tab" aria-controls="season1" aria-selected="true"><?php echo(ucfirst($seasonsorder[0])); ?></button>
      </li>
      <li class="nav-item">
        <button type="button" class="nav-link" id="season2-tab" data-bs-toggle="tab" data-bs-target="#season2" role="tab" aria-controls="season2" aria-selected="false"><?php echo(ucfirst($seasonsorder[1])); ?></button>
      </li>
      <li class="nav-item">
        <button type="button" class="nav-link" id="season3-tab" data-bs-toggle="tab" data-bs-target="#season3" role="tab" aria-controls="season3" aria-selected="false"><?php echo(ucfirst($seasonsorder[2])); ?></button>
      </li>
      <li class="nav-item">
        <button type="button" class="nav-link" id="season4-tab" data-bs-toggle="tab" data-bs-target="#season4" role="tab" aria-controls="season4" aria-selected="false"><?php echo(ucfirst($seasonsorder[3])); ?></button>
      </li>
    </ul>
    <div class="block-content tab-content overflow-hidden">
      <!-- Season 1 -->
      <div class="tab-pane fade fade-up show active" id="season1" role="tabpanel"
        <?php $s1items = $data[$seasonsorder[0]]['data'];?>
        // Perform further processing or respond to the request
        ?>
        <table class="table table-striped table-vcenter">
        <tbody>
        <?php foreach ($s1items as $x) {
        ?>
            <?php require 'inc/templates/season-entry.php'; ?>
          <?php } ?>
        </tbody>
        </table>
      </div>
      <!-- END Season 1 -->

      <!-- Season 2 -->
      <div class="tab-pane fade fade-up" id="season2" role="tabpanel" aria-labelledby="season2" tabindex="0">
        <?php $s2items = $data[$seasonsorder[1]]['data'];?>
        <table class="table table-striped table-vcenter">
        <tbody>
        <?php foreach ($s2items as $x) {
        ?>
            <?php require 'inc/templates/season-entry.php'; ?>
          <?php } ?>
        </tbody>
        </table>
      </div>
      <!-- END Season 2 -->

      <!-- Season 3 -->
      <div class="tab-pane fade fade-up" id="season3" role="tabpanel" aria-labelledby="season3" tabindex="0">
        <?php $s3items = $data[$seasonsorder[2]]['data'];?>
        <table class="table table-striped table-vcenter">
        <tbody>
        <?php foreach ($s3items as $x) {
        ?>
            <?php require 'inc/templates/season-entry.php'; ?>
          <?php } ?>
        </tbody>
        </table>
      </div>
      <!-- END Season 3 -->

      <!-- Season 4 -->
      <div class="tab-pane fade fade-up" id="season4" role="tabpanel" aria-labelledby="season4" tabindex="0">
        <?php $s4items = $data[$seasonsorder[3]]['data'];?>
        <table class="table table-striped table-vcenter">
        <tbody>
        <?php foreach ($s4items as $x) {
        ?>
            <?php require 'inc/templates/season-entry.php'; ?>
          <?php } ?>
        </tbody>
        </table>
      </div>
      <!-- END Season 4 -->
    </div>
  </div>
  <!-- END Results -->
    <?php } else {?>
        >div class="py-4">
                <!-- Error Header -->
                <h1 class="display-1 fw-bolder text-default">
        Unable to load Seasons
                </h1>
                <h2 class="h4 fw-normal text-muted mb-5">
                  Unable to communicate with API server, try again later.
                </h2>
                <!-- END Error Header -->
              </div>
        </div>
    <?php }?>
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>
<?php require 'inc/_global/views/footer_end.php'; ?>
