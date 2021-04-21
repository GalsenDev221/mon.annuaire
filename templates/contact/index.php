<?php $title="Home"; include(__DIR__.'/../layout/header.php') ?>
<div class="container">
  <?php
    echo '<h1 class="welcome-msg">hi 👋, '.$context["name"].'</h1>'
  ?>
</div>
<?php include(__DIR__.'/../layout/footer.php') ?>
