<?php
 /*
    ../app/vues/template/partials/_main.php
 */
?>
  <div class="container">

    <div class="row">

      <!-- Post Content Column -->
      <div class="col-lg-8">
        <?php echo $content; ?>
      </div>

      <!-- Sidebar Widgets Column -->
        <?php include '../app/vues/template/partials/_aside.php'?>
    </div>
    <!-- /.row -->

  </div>
