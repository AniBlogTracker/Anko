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
          About <?php echo($one->name); ?>
        </h1>
      </div>
    </div>
  </div>
</div>
<!-- END Hero -->

<!-- Page Content -->
<div class="content content-boxed">
  <!-- Frequently Asked Questions -->
  <div class="block block-rounded">
    <div class="block-content block-content-full">
      <div class="p-sm-4 p-xl-7">
        <p>Version <?php echo($one->version) ?></p>
        <p>Copyright 2025 Sakurajima, All Rights Reserved</p>
        <p>Frontend is licensed under BSD License and <a href="https://themeforest.net/licenses/terms/regular">ThemeForest Regular License</a>.</p>
        <p>Follow us for AniBlogTracker updates; <a href="https://sakurajima.moe/@sakurajima">Mastodon</a> <a href="https://bsky.app/profile/joinsakurajima.org">BlueSky</a></p>
      </div>
      <div class="p-sm-4 p-xl-7">
        <!-- Introduction -->
        <h1 class="h3 fw-bold mb-1">
         Frequently Asked Questions
        </h1>
        <div id="faq1" class="mb-5" role="tablist" aria-multiselectable="true">
          <div class="block block-rounded block-bordered overflow-hidden mb-1">
            <div class="block-header block-header-default" role="tab" id="faq1_h1">
              <a class="text-muted" data-bs-toggle="collapse" data-bs-parent="#faq1" href="#faq1_q1" aria-expanded="true" aria-controls="faq1_q1">What is AniBlogTracker?</a>
            </div>
            <div id="faq1_q1" class="collapse show" role="tabpanel" aria-labelledby="faq1_h1" data-bs-parent="#faq1">
              <div class="block-content">
                <p>AniBlogTracker is a web application that allows you to discover new Japanese media and culture related content in the AniBlogosphere, Youtube, and more.</p>
                <p>AniBlogTracker-NG (New Generation) is a recreation of the old AniBlogTracker (animeblogtracker.com), which went offline on May 7th, 2025. This recreation aims to implement most of the features of the old one, with a more modern interface, more features, and API support. Most importantly, it's open sourced.</p>
              </div>
            </div>
          </div>
          <div class="block block-rounded block-bordered overflow-hidden mb-1">
            <div class="block-header block-header-default" role="tab" id="faq1_h2">
              <a class="text-muted" data-bs-toggle="collapse" data-bs-parent="#faq1" href="#faq1_q2" aria-expanded="true" aria-controls="faq1_q2">How do I get my blog/channel/newsletter added?</a>
            </div>
            <div id="faq1_q2" class="collapse" role="tabpanel" aria-labelledby="faq1_h2" data-bs-parent="#faq1">
              <div class="block-content">
                <p>To have your site added, your blog/channel/newsletter must meet these requirements</p>
                <ul>
                  <li>Must be related to Japanese media or culture.</li>
                  <li>Must be at least a month old with content (content may not be entirely generated with Artificial Intelligence)</li>
                  <li>Content must not contain hate speech (e.g. racism, homophobia, transphobia, ableism, etc), misinformation, content that advocates extremist groups, or lolicon/shotacon</li>
                </ul>
                <p>To request to have your site added, <a href="https://forms.office.com/Pages/ResponsePage.aspx?id=foLJ9a3qM0GhTLPBKYvjoJQLJAD3OI1Mi_kkp4Law6BUQlpaRDhKTzlBWTI5TjVIRUo1NkxYMVFVOC4u">fill out this form</a></p>
              </div>
            </div>
          </div>
          <div class="block block-rounded block-bordered overflow-hidden mb-1">
            <div class="block-header block-header-default" role="tab" id="faq1_h3">
              <a class="text-muted" data-bs-toggle="collapse" data-bs-parent="#faq1" href="#faq1_q3" aria-expanded="true" aria-controls="faq1_q3">I see my site is on the website, but my recent posts aren't there! Why is that?</a>
            </div>
            <div id="faq1_q3" class="collapse" role="tabpanel" aria-labelledby="faq1_h3" data-bs-parent="#faq1">
              <div class="block-content">
                <p>It's possible that your web application firewall might be blocking the IP of this server. AniBlogTracker fetches RSS feeds and if there are posts that the service doesn&t have, it will fetch the first image to use as a thumbnail.</p>
                <p>If AniBlogTracker is not fetching your latest post, you need to whitelist the ip address 104.238.220.249 from your firewall. Check your Firewall/security WordPress Plugin or firewall software/hardware documentation to find out how to whitelist/unblock this IP address. Once unblocked, your posts should start appearing</p>
              </div>
            </div>
          </div>
          <div class="block block-rounded block-bordered overflow-hidden mb-1">
            <div class="block-header block-header-default" role="tab" id="faq1_h4">
              <a class="text-muted" data-bs-toggle="collapse" data-bs-parent="#faq1" href="#faq1_q4" aria-expanded="true" aria-controls="faq1_q4">Where can I report bugs or suggest features?</a>
            </div>
            <div id="faq1_q4" class="collapse" role="tabpanel" aria-labelledby="faq1_h4" data-bs-parent="#faq1">
              <div class="block-content">
                <p>You can report bugs and suggest features on the <a href="https://forums.sakurajima.moe">Sakurajima Forums</a></p>
              </div>
            </div>
          </div>
        </div>
        <!-- END Introduction -->
      </div>
    </div>
  </div>
  <!-- END Frequently Asked Questions -->
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>
<?php require 'inc/_global/views/footer_end.php'; ?>
