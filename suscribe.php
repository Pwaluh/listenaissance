<?php include 'includes/header.php'; ?>

<article class="col-md-10  corps">
  <div class="row">
    <form class="form-horizontal" method="post" action="../includes/suscribe_control.php">
      <?php
      if ($_GET['erreur'] == 1) {
          ?>
          <div class="form-group has-error">
            <label for="mail" class="col-sm-2 control-label">Email</label>
            <div class="col-sm-8">
              <input name="email" type="email" class="form-control" id="mail" placeholder="Email">
            </div>
          </div>
          <?php

      } else {
          ?>
        <div class="form-group">
          <label for="mail" class="col-sm-2 control-label">Email</label>
          <div class="col-sm-8">
            <input name="email" type="email" class="form-control" id="mail" placeholder="Email">
          </div>
        </div>
        <?php

      }
      ?>
      <div class="form-group">
        <label for="pwd" class="col-sm-2 control-label">Password</label>
        <div class="col-sm-8">
          <input name="password" type="password" class="form-control" id="pwd" placeholder="Password">
        </div>
      </div>
      <div class="form-group">
        <label for="name" class="col-sm-2 control-label">Prénom</label>
        <div class="col-sm-8">
          <input name="name" type="text" class="form-control" id="name" placeholder="Prénom">
        </div>
      </div>
      <div class="form-group">
        <label for="firstname" class="col-sm-2 control-label">Nom</label>
        <div class="col-sm-8">
          <input name="firstname" type="text" class="form-control" id="firstname" placeholder="Nom">
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-default">Creer un compte</button>
        </div>
      </div>
    </form>
  </div>
</article>
<?php include 'includes/footer.php'; ?>
