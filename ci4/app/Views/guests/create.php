<head>
  <title>add a guest</title>
</head>

<div class="header2">
    <h2><?= esc($title) ?></h2>
</div>

<?= session()->getFlashdata('error') ?>
<?= validation_list_errors() ?>

<div class="subcontent">
<form action="<?= base_url() . "/guests/create" ?>" method="post">
  <?= csrf_field() ?>

  <?php
  $field_names = ["name", "email", "website"];
  foreach ($field_names as $field_name) :
  ?>
    <?= form_label(ucfirst($field_name), $field_name) ?>
    <br />
    <?= form_input($field_name, set_value($field_name), [
      "placeholder" => "Your " . $field_name . "...",
    ]) ?>
    <br />
    <br />
  <?php endforeach?>

  <?= form_label("Comment", "comment") ?>
  <br />
  <?= form_textarea("comment", set_value("comment"), [
    "cols" => "45",
    "rows" => "4",
    "placeholder" => "Comments...",
  ])?>
  <br />
  <br />

  <?= form_label("Gender", "gender") ?>
  <br />
  <?php $genders = ["female", "male", "other"];
  foreach($genders as $gender) :
  ?>
    <?= form_radio("gender", $gender, set_value("gender") == $gender) ?>
    <?= ucfirst($gender) ?>
    <br />
  <?php endforeach?>
  <br />

  <input type="submit" name="submit" value="Submit">
</form>
</div>