<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html lang="<?php print $language->language ?>" xml:lang="<?php print
$language->language ?>" xmlns="http://www.w3.org/1999/xhtml">

<head profile="http://gmpg.org/xfn/11">
<title><?php print $head_title ?></title>
<?php require_once("sites/all/files/navbar/osu-navbar-h.html"); ?>
<?php print $head ?>
<?php print $styles ?>
<?php print $scripts ?>
</head>

<body class="<?php print $body_classes ?>">
<?php require_once("sites/all/files/navbar/osu-navbar-b.html"); ?>
<div id="wrapper">

<div id="header"<?php print (count($secondary_links) ? ' class="p2"' : ' class="p1"') ?>>

  <div id="branding">
  <?php if ($logo){ ?>
    <img src="<?php print check_url($logo) ?>" alt="<?php print $site_name ?>" id="logo" />
  <?php } ?>
  <?php if ($site_slogan){ ?>
    <div class="slogan"><?php print $site_slogan ?></div>
  <?php } ?>
  <?php if ($site_name){ ?>
    <h1><a href="<?php print url() ?>" title="<?php print t('Home') ?>" rel="home"><?php print $site_name ?></a></h1>
  <?php } ?>
  </div>

  <?php if($search_box) { ?>
    <?php print $search_box ?>
  <?php } ?>

  <?php if ($header): ?>
 	 <div id="header-additional">
 	 <?php print $header ?>
 	 </div>
  <?php endif; ?>

</div>

<div id="menu">
  <?php /*if ($primary_links) secondary links only*/ if(0){ ?>
    <?php print theme('links', $primary_links, array('class' => 'links primary_menu')) ?>
  <?php } ?>
  <?php if (count($secondary_links)){ ?>
    <?php print theme('links', $secondary_links, array('class' => 'links secondary_menu')) ?>
  <?php } ?>
</div>

<div id="content">

<?php if ($left != ''){ ?>
  <div id="sidebar-left" class="sidebar">
  <?php print $left; ?>
  </div>
<?php } ?>


<div id="main">
<?php if ($breadcrumb && !$is_front){ ?>
  <div id="breadcrumb"><?php print $breadcrumb ?></div>
<?php } ?>
<?php if ($messages != ""){ ?>
  <div id="message"><?php print $messages ?></div>
<?php } ?>
<?php if ($mission != ""){ ?>
  <div id="mission"><span><?php print $mission ?></span></div>
<?php } ?>
<?php if ($title != ""){ ?>
  <h2 id="title"><?php print $title ?></h2>
<?php } ?>
<?php if ($help != ""){ ?>
  <p id="help"><?php print $help ?></p>
<?php } ?>
<?php if ($tabs != ""){ ?>
  <?php print $tabs ?>
<?php } ?>
<div class="content">
<?php print $before_content ?>
<?php print $content ?>
</div>
</div>

<?php if ($right != ''){ ?>
  <div id="sidebar-right" class="sidebar">
  <?php print $right; ?>
  </div>
<?php } ?>

</div>

</div>

<div id="footer" class="footer">
<?php if ($footer_message){ ?>
  <?php print $footer_message;?>
<?php } ?>
</div>


<?php print $closure;?>
</body>
</html>
