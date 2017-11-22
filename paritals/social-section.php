<?php
  $facebook = get_field('facebook', 'option');
  $twitter = get_field('twitter', 'option');
  $google_plus = get_field('google_plus', 'option');
  $youtube = get_field('youtube', 'option');
?>
<div class="social">
  <?php if($facebook): ?>
    <a href="<?php echo $facebook; ?>" class="fa-stack" target="_blank">
      <i class="fa fa-circle fa-stack-2x"></i>
      <i class="fa fa-facebook-official fa-stack-1x fa-inverse"></i>
    </a>
  <?php endif; if($twitter): ?>
    <a href="<?php echo $twitter; ?>" class="fa-stack" target="_blank">
      <i class="fa fa-circle fa-stack-2x"></i>
      <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
    </a>
  <?php endif; if($google_plus): ?>
    <a href="<?php echo $google_plus; ?>" class="fa-stack" target="_blank">
      <i class="fa fa-circle fa-stack-2x"></i>
      <i class="fa fa-google-plus fa-stack-1x fa-inverse"></i>
    </a>
  <?php endif; if($youtube): ?>
    <a href="<?php echo $youtube; ?>" class="fa-stack" target="_blank">
      <i class="fa fa-circle fa-stack-2x"></i>
      <i class="fa fa-youtube-play fa-stack-1x fa-inverse"></i>
    </a>
  <?php endif; ?>
</div>
