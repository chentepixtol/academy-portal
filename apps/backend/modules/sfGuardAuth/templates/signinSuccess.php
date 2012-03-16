<style>
  #login{
      width: 300px;
      text-align: center;
      margin: 0 auto;
   }
   #login tr td {
      padding: 7px;
   }
</style>
<div id="login">
<form action="<?php echo url_for('@sf_guard_signin') ?>" method="post">
  <table>
    <?php echo $form ?>
  </table>
  <input type="submit" value="Ingresar" />
</form>
</div>