<?php
require_once("lib-0.php");
load_it_all_up("Registration completed!");

?>
<body>
<div id="all">
<div id="content_background" class="content_centered"><br/>
<img src="1088/images/button-register.jpg" class="content_centered" / >

<div id="content_two_column_container" class="content_centered">
<div class="left_column">
<span class="emphasize"><span class="red_it_up">Congratulations!</span>  You have successfully completed the registration for SingTeam America!</span><br/><br/>
<div class="full_column">
<span class="two">
Your name<br/>
<span class="emphasize"><?php echo $_GET['name']; ?>
</span></span>

<span class="two">
Your SingTeam Student ID<br/>
<span class="emphasize"><?php echo $_GET['id']; ?>
</span></span>
</div><!--full_column-->

<div class="full_column">
<span class="three">
<br/>Your state<br/>
<span class="emphasize">Nebraska</span></span>

<span class="three">
<br/>Your conference<br/>
<span class="emphasize">South Central</span></span>

<span class="three">
<br/>Your Division<br/>
<span class="emphasize">Division
<?php echo " ".$_GET['division']; ?></span></span>
</div><!--full_column-->
<div class="full_column"><br/><a href="completereg.php">add another student</a><br/>
<a href="index.php?referer=completedreg"><img src="1088/images/button-close.jpg" class="content_centered_pad"/></a>

</div>
</div><!--left_column-->
<div class="right_column">
<img src="1088/images/stalogo.jpg" class="content_centered" />

</div><!--right_column-->
</div><!--two_column-->
<?php echo_sitemap(); ?>
</div><!--content_background-->
</div><!--all-->
</body>
