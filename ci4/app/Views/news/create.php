<head>
    <title> create a news item</title>
</head>
<div class="header2">
    <h2><?= esc($title) ?></h2>
</div>

<?= session()->getFlashdata('error') ?>
<?= validation_list_errors() ?>

<div class="subcontent">
<form action="<?= base_url("/news/create") ?>" method="post">
    <?= csrf_field() ?>

    <label for="title">Title:</label>
    <input type="input" name="title" value="<?= set_value('title') ?>">
    <br>
    <br>

    <label for="body">Text:</label>
    <textarea name="body" cols="45" rows="4"><?= set_value('body') ?></textarea>
    <br>
    <br>

    <input type="submit" name="submit" value="Create news item">
</form>
</div>