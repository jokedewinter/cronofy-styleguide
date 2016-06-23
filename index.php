<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <title>Pattern Library / Style Guide</title>
  <link rel="stylesheet" href="../cronofy-wpengine/wp-content/themes/cronofy-2015/css/screen.min.css">
  <link rel="stylesheet" href="css/global.css">
</head>
<body>

<div class="patterns__site">
  <?php
  // All the patterns are placed in an array
  $files = array();
  $handle = opendir('patterns');
  while ( false !== ($file = readdir($handle)) ) :
    if ( substr($file, -5) == '.html' ) :
      $files[] = $file;
    endif;
  endwhile;
  ?>

  <header class="patterns__header">
		<h1><span>Cronofy</span> Style Guide</h1>
		<p>This is a styleguide/pattern library with styled elements and shortcodes for the Cronofy website.</p>
  </header>

  <nav class="patterns__nav col-extra-light">
    <ul>
      <?php
      foreach ( $files as $file ) :
        $filename = $file;
    	  $without_extension = basename($filename, '.html');
        ?>
        <li><a href="#<?php echo $without_extension; ?>"><?php echo $without_extension; ?></a></li>
        <?php
      endforeach;
      ?>
    </ul>
  </nav>

  <?php
  foreach ( $files as $file ) :
    $filename = $file;
	  $without_extension = basename($filename, '.html');
    ?>
    <section id="<?php echo $without_extension; ?>" class="pattern">
      <header>
        <h2><?php echo $without_extension; ?></h2>
      </header>
      <div class="pattern__style">
        <?php include('patterns/' . $file); ?>
      </div>
      <a href="#" class="patterns__top">Back to top</a>
    </section><!-- <?php echo '#' . $without_extension; ?>.pattern -->
    <?php
  endforeach;
  ?>
</div><!-- .patterns__site -->

</body>
</html>
