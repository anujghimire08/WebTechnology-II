<?php
  include("db.php");
  include("pagination.php");
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/remixicon@4.9.0/fonts/remixicon.css" rel="stylesheet" />
  <link rel="stylesheet" href="style.css">
  <title>Pagination Demo</title>
</head>

<body>
  <h1>Pagination Demo</h1>
  <table rules="all" frame="box" cellpadding="10">
    <thead>
      <tr>
        <th>S.N</th>
        <th>Name</th>
        <th>Tech</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach($developers as $developer){ ?>
      <tr>
        <td><?= htmlspecialchars($developer["id"]); ?></td>
        <td><?= htmlspecialchars($developer["name"]); ?></td>
        <td><?= htmlspecialchars($developer["tech"]); ?></td>
      </tr>
      <?php }?>
    </tbody>
  </table>
  <br>
  <section id="navigation">
    <?php if($page > 1){ ?>
    <a href="?page=<?= $page - 1 ?>"><i class="ri-arrow-left-s-line"></i> Prev</a>
    <?php } ?>
    <?php for ($i = 1; $i <= $totalpages; $i++){?>
    <a href="?page=<?=$i ?>"><?= $i ?></a>
    <?php } ?>
    <?php if($page < $totalpages){?>
    <a href="?page=<?= $page + 1 ?>">Next <i class="ri-arrow-right-s-line"></i></a>
    <?php } ?>
  </section>
</body>

</html>