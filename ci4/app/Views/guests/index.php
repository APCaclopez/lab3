<head>
  <title>guest list</title>
</head>

<div class="header2">
    <h2><?= esc($title) ?></h2>
</div>

<div class="subcontent">
<p>If you want to be a part of the guests, click<a href="<?= base_url("guests/create/") ?>"> HERE.</a></p>
<?php if (!empty($guests) && is_array($guests)) : ?>

  <?php foreach ($guests as $guest) : ?>

    <h2><?= esc($guest['name']) ?></h2>

    <p><?= esc($guest['email']) ?></p>
    <p><?= esc($guest['website']) ?></p>
    <p><?= esc($guest['comment']) ?></p>
    <br>

  <?php endforeach ?>
  </ul>
<?php else : ?>

  <h2>No Guests</h2>

  <p>Nobody has registered yet.</p>

<?php endif ?>
</div>