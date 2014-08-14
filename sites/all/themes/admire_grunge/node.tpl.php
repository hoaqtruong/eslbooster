<div id="node-<?php print $node->nid; ?>" class="node<?php if ($sticky) { print ' sticky'; } ?><?php if (!$status) { print ' node-unpublished'; } ?>">


<div class="clear-block">
  <?php if ($submitted): ?>
    <div class="submitted"><?php print $submitted; ?></div>
  <?php endif; ?>
<?php print $picture ?>
<?php if ($page == 0): ?>
  <h2><a href="<?php print $node_url ?>" title="<?php print $title ?>"><?php print $title ?></a></h2>
<?php endif; ?>

</div>


  <div class="content clear-block">
    <?php print $content; ?>
  </div>

  <div class="clear-block">
    <div class="meta">
    <?php if ($taxonomy): ?>
      <div class="terms"><?php print $terms ?></div>
    <?php endif;?>
    </div>

    <?php if ($links): ?>
      <div class="links clear-block"><?php print $links; ?></div>
    <?php endif; ?>
  </div>
</div>

