<div class="top_color"></div>
<?php get_header(); ?>
<?php if(wp_is_mobile()): ?>
<p class="recommend_text2">
<img src="http://digitalian.blam.co.jp/wp/wp-content/uploads/2017/12/new.png" alt="写真">
<span style="font-size:40%;">　</span>
		<span style="font-size:120%;font-weight:bold">新着記事</span>　New<span style="letter-spacing:3px"> </span>post
</p>
<?php endif; ?>
<div id="content" class="main_content">

<div id="inner-content" class="wrap cf">

<main id="main" class="m-all t-all d-5of7 cf" role="main">

<?php get_template_part( 'parts_add_top' ); ?>

<?php
	$toplayout = get_option('opencage_toppage_archivelayout');
	$toplayoutsp = get_option('opencage_toppage_sp_archivelayout');
?>
<?php if (is_mobile()) :?>
	<?php if ( $toplayoutsp == "toplayout-big" ) : ?>
	<?php get_template_part( 'parts_archive_big' ); ?>
	<?php elseif ( $toplayoutsp == 'toplayout-card' ) : ?>
	<?php get_template_part( 'parts_archive_card' ); ?>
	<?php elseif ( $toplayoutsp == 'toplayout-magazine' ) : ?>
	<?php get_template_part( 'parts_archive_magazine' ); ?>
	<?php else : ?>
	<?php get_template_part( 'parts_archive_simple' ); ?>
	<?php endif;?>
<?php else : ?>
<p class="recommend_text2">
<img src="http://digitalian.blam.co.jp/wp/wp-content/uploads/2017/12/new.png" alt="写真">
<span style="font-size:40%;">　</span>
		<span style="font-size:120%;font-weight:bold">新着記事</span>　New<span style="letter-spacing:3px"> </span>post
</p>
	<?php if ( $toplayout == "toplayout-big" ) : ?>
	<?php get_template_part( 'parts_archive_big' ); ?>
	<?php elseif ( $toplayout == 'toplayout-card' ) : ?>
	<?php get_template_part( 'parts_archive_card' ); ?>
	<?php elseif ( $toplayout == 'toplayout-magazine' ) : ?>
	<?php get_template_part( 'parts_archive_magazine' ); ?>
	<?php else : ?>
	<?php get_template_part( 'parts_archive_simple' ); ?>
	<?php endif;?>
<?php endif;?>

<?php pagination(); ?>
<?php get_template_part( 'parts_add_bottom' ); ?>
</main>
<?php get_sidebar(); ?>
</div>
</div>
<?php get_footer(); ?>

<script>
$(function(){
    var $setElm = $('.card-content2');
    var cutFigure = '25'; // カットする文字数
    var afterTxt = ' …'; // 文字カット後に表示するテキスト
 
    $setElm.each(function(){
        var textLength = $(this).text().length;
        var textTrim = $(this).text().substr(0,(cutFigure))
 
        if(cutFigure < textLength) {
            $(this).html(textTrim + afterTxt).css({visibility:'visible'; font-family:"游ゴシック体","Yu Gothic",YuGothic,"Midashi Go MB31","メイリオ",sans-serif;});
        } else if(cutFigure >= textLength) {
            $(this).css({visibility:'visible'});
        }
    });
});
</script>