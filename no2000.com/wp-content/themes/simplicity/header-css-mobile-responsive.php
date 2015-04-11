<?php //レスポンシブのCSS記述（暫定）
if ( is_responsive_enable() ): //完全レスポンシブにするか?>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/responsive.css">
<?php endif;//完全レスポンシブ
?>
<?php if ( is_mobile() ): //モバイルのCSS記述（暫定）?>
  <?php the_apple_touch_icon_tag() ?>
  <?php
  if ( !is_responsive_enable() ): //完全レスポンシブじゃないときだけモバイルスタイルを読み込む?>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/mobile.css">
  <?php endif;
  ?>
  <?php
  if ( get_skin_file() ): //設定されたスキンがある場合mobile.cssを読み込む?>
    <link rel="stylesheet" href="<?php echo str_replace('style.css', 'mobile.css', get_skin_file()); ?>">
  <?php endif; //設定されたスキン
  ?>
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
<?php else: //PC?>
  <meta name="viewport" content="width=1280, maximum-scale=1, user-scalable=yes">
<?php endif; //モバイル終了?>
<?php
///////////////////////////////////
//animatedModal.js関連ファイルの呼び出し
///////////////////////////////////
if ( is_mobile_menu_type_modal() && is_mobile() ): ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/normalize.min.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/animate.min.css">
<?php endif; //モバイル終了?>
<?php
///////////////////////////////////////////
// フッターモバイルボタンメニュー
///////////////////////////////////////////
if ( is_mobile_menu_type_slide_in() ): ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/jquery.sidr.dark.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/footer-mobile-buttons.css">
<?php endif;//フッターモバイルボタンメニュー終了 ?>