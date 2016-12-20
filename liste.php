<?php include 'includes/header.php'; ?>
<?php
$listDir = 'account/'.$_COOKIE['loginOK'].'/liste.txt';
$data = file_get_contents($listDir);
?>
<article class="col-md-10  corps">
  <div class="row">
    <?php if ($_COOKIE['loginOK']): ?>
      <!--si y'a un cookie de user afficher le menu d'ajout a la liste.-->
      <div class="col-md-12">
        <form class="form-inline" action="includes/add_item.php" method="post">
          <div class="input-group">
            <input name="item_id" type="text" class="form-control" value="id">
          </div>
          <div class="input-group">
              <input name="item_name" type="text" class="form-control">
          </div>
          <div class="input-group">
              <input name="item_cost" type="text" class="form-control">
          </div>
          <button type="submit" class="btn btn-primary" name="button">Ajouter</button>
        </form>
      </div>
    <?php else: ?>
      <div class="col-md-6 text-right">
        <form class="form-inline" action="index.php" method="post">
          <div class="input-group">
              <input type="text" class="form-control">
          </div>
          <button type="button" class="btn btn-primary" name="button">Rechercher</button>
        </form>
      </div>
      <div class="col-md-6 text-left">
        <form class="form-inline" action="add.php" method="post">
          <div class="input-group">
              <input type="text" class="form-control">
          </div>
          <button type="submit" class="btn btn-primary" >Ajouter</button>
        </form>
      </div>

    <?php endif; ?>
    <div class="row">
      <div class="col-md-12">
    <table class="table table-striped">
      <thead>
        <th >
          id
        </th>
        <th>
          Cadeau
        </th>
        <th>
          Prix
        </th>
        <th>
        </th>
      </thead>
  <?php
foreach (explode("\n", $data) as $lines) {
    if (!empty($lines)) {
        $item = unserialize($lines);
        print_r($item); ?>
        <tr>
          <td>
            <?php echo $item['item_id']; ?>
          </td>
          <td>
            <?php echo $item['item_name']; ?>

          </td>
          <td>
            <?php echo $item['item_cost']; ?>

          </td>
          <td class="text-right commander">
            <a href="includes/commander.php?item_id=<?php echo $item['item_id']; ?>">commander</a>
          </td>
        </tr>
        <?php

    }
}
 ?>
      </table>
    </div>
  </div>
</article>
