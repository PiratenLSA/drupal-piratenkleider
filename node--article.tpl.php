<div id="node-<?php print $node->nid; ?>" class="post <?php print $classes; ?>"<?php print $attributes; ?>>

  <?php print render($title_prefix); ?>
  <?php if (!$page): ?>
    <div class="post-title">
      <h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
    </div>
  <?php endif; ?>
  <?php print render($title_suffix); ?>

  <div class="post-info">
    <div class="commentbubble">
      <a href="<?php print $node_url; ?>#comments">
        <?php print $comment_count . '<span class="skip"> ' . format_plural($comment_count, 'comment', 'comments') . '</span>'; ?>
      </a>
    </div>
    <div class="cal-icon">
      <span class="day"><?php print format_date($created, 'custom', 'j.'); ?></span>
      <span class="month"><?php print format_date($created, 'custom', 'm.'); ?></span>
      <span class="year"><?php print format_date($created, 'custom', 'Y'); ?></span>
    </div>
  </div>

  <div class="post-entry"<?php print $content_attributes; ?>>
    <?php
      // We hide the comments and links now so that we can render them later.
      hide($content['comments']);
      hide($content['links']);
      print render($content);
    ?>
  </div>

  <div class="post-meta">
    <?php if (!empty($content['links'])): ?>
      <div class="links"><?php print render($content['links']); ?></div>
    <?php endif; ?>
  </div>

  <hr />

  <div class="post-comments" id="comments">
    <?php print render($content['comments']); ?>
  </div>

</div>
