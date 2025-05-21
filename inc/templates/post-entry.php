    <!-- Post -->
    <div class="col-lg-4">
      <div class="block block-rounded block-link-pop overflow-hidden">
        <img class="img-fluid" src="<?php echo($one->apiurl . "/static/imgcache/" . $x["thumbnail_filename"])?>" alt="">
        <div class="block-content">
          <h4 class="mb-1">
            <a href="<?php echo($x["post_url"]); ?>"><?php echo($x["title"]); ?></a>
          </h4>
          <p class="fs-sm fw-medium mb-2">
            <span class="text-primary"><a href="./author.php?aid=<?php echo($x["author_id"]); ?>"><?php echo($x["author"]); ?></a></span> on <?php echo($x["published_date"]["month"]); ?>/<?php echo($x["published_date"]["day"]); ?>/<?php echo($x["published_date"]["year"]); ?> ·
          </p>
          <p class="fs-sm text-muted">
           <?php echo($x["content"]); ?> <a href="<?php echo($x["post_url"]); ?>">[Read More]</a>
          </p>
		      <hr />
	                <p class="fs-sm text-muted">
                 <a href="./site.php?sid=<?php echo($x["site_id"]); ?>"><img src="<?php echo($one->apiurl . "/static/imgcache/" . $x["site_id"] . ".ico" )?>" alt=""><?php echo($x["websitename"]); ?></a>
                </p>
	      </p>
        </div>
      </div>
    </div>
    <!-- End Post -->
