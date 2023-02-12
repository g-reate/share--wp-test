<?php
/**
 * Index.
 *
 * @package WP-TEST
 */

?>


<?php //get_header(); ?>
<div id="wrapper" class="l-wrapper l-wrapper__index">
<!-- ここから -->

<? /*
ローカル環境を作ってphpを実行出来るようにしたのですが、get_header(),get_footer()を読み込めていないので現状ではコメントアウトしています。
*/>
<? /*
以下で、stylesheetを呼び出しています。
*/>
<link rel="stylesheet" href="style.css">

<div class="img1">
    <img src="./images/test.jpg" id="image1">
</div>
<div class="center">
    <p class="Bold">WPテスト</p>
</div>
<div class="cssgrid">
    <div class="block">
        <p>01</p>
    </div>
    <div class="block">
        <p>02</p>    
    </div>
    <div class="block">
        <p>03</p>
    </div>
    <div class="block">
        <p>04</p>
    </div>
</div>

<!-- ここまで -->
</div>

<?php //get_footer(); ?>
