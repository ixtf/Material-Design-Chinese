<?php
$vars = array(
  'title' => 'Android',
  'category' => '平台',
  'theme_color' => '#039BE5',
  'color_name' => 'default',
  'prev_title' => 'Platform adaptation',
  'prev_path' => 'platforms/platform-adaptation',
  'next_title' => 'Color palettes',
  'next_path' => 'resources/color-palettes'
);

include $public_files['header'];
?>

<div id="grid-cont">
  <section class="grid_outer chapter">

    <h1 class="chapter-title">Android</h1>
    
    <div class="chapter-content">

      <div class="article-content chapter-intro">
        <div>
          <h1>Material Design has Android-only guidance for several interactions.</h1>
          <p>The following guidance refers specifically to these interactions on Android:</p>
          <ul class="lst-kix_8k696vbjtkz9-0 start">
            <li><a href="../patterns/notifications.html">Notifications</a></li>
            <li><a href="../components/snackbars-toasts.html">Snackbars and toasts</a></li>
            <li><a href="../patterns/fingerprint.html">Fingerprint</a></li>
            <li><a href="../layout/split-screen.html">Split screen</a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>
</div>

<?php
include $public_files['footer'];
?>