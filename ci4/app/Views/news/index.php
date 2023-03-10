<head>
    <title>news archive</title>
</head>

<div class="header2">
    <h2><?= esc($title) ?></h2>
</div>

<div class="subcontent">
    <p>If you want to create a news item, click <a href="<?= base_url("news/create/") ?>">HERE</a></p>
    <br>

    <?php if (! empty($news) && is_array($news)): ?>

    <?php foreach ($news as $news_item): ?>

        <h3><?= esc($news_item['title']) ?></h3>

        <div class="main">
            <?= esc($news_item['body']) ?>
        </div>
        <p><a href="<?= site_url('/news/'), esc($news_item['slug'], 'url') ?>">View article</a></p>

    <?php endforeach ?>

<?php else: ?>

    <h3>No News</h3>

    <p>Unable to find any news for you.</p>

<?php endif ?>
</div>