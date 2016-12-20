<article class="col-md-10  corps">
  <div class="row">
    <form class="form-horizontal" method="post" action="../includes/form_control.php">
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
      <?php
      if ($_GET['erreur'] == 2) {
          ?>
          <div class="form-group has-error">
            <label for="pwd" class="col-sm-2 control-label">Password</label>
            <div class="col-sm-8">
              <input name="password" type="password" class="form-control" id="pwd" placeholder="Password">
            </div>
          </div>
          <?php

      } else {
          ?>
          <div class="form-group">
            <label for="pwd" class="col-sm-2 control-label">Password</label>
            <div class="col-sm-8">
              <input name="password" type="password" class="form-control" id="pwd" placeholder="Password">
            </div>
          </div>
        <?php

      }
      ?>
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <div class="checkbox">
            <label>
              <input type="checkbox"> Remember me
            </label>
          </div>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-default">Sign in</button>
        </div>
      </div>
    </form>
    <div class="col-sm-offset-2">
      <p>Pas encore inscrit? <a href="suscribe.php">C'est par ici!</a></p>
    </div>
  </div>
</article>
