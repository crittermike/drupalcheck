<div class="container">

  <div class="header">
    <h1>Jump Start Your<br />Drupal Project</h1>
    <h2>Let me audit and plan your Drupal site build for you.</h2>

    <?php if ($page['header']): ?>
      <?php print render($page['header']); ?>
    <?php endif; ?>
  </div>
  
  <?php if ($page['highlight']): ?>
    <?php print render($page['highlight']) ?>
  <?php endif; ?>
  
  <?php if ($title): ?>
    <h1 class="page-title"><?php print $title; ?></h1>
  <?php endif; ?>
  
  <?php print render($title_suffix); ?>
  <?php print $messages; ?>
  <?php print render($page['help']); ?>
  
  <?php if ($tabs): ?>
    <?php print render($tabs); ?>
  <?php endif; ?>
  
  <?php if ($action_links): ?>
    <ul><?php print render($action_links); ?></ul>
  <?php endif; ?>
  
  <?php print render($page['content']) ?>
  
  <?php if ($page['sidebar_first']): ?>
    <?php print render($page['sidebar_first']); ?>
  <?php endif; ?> <!-- /sidebar-first -->
  
  <?php if ($page['sidebar_second']): ?>
    <?php print render($page['sidebar_second']); ?>
  <?php endif; ?> <!-- /sidebar-second -->
  
  <?php if ($page['footer']): ?>
    <?php print render($page['footer']); ?>
  <?php endif; ?>

</div>
