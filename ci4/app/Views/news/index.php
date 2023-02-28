<head>
    <link rel="icon" type="image/png" href="./images/crown_icon.png">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap">
    <script src="js/script.js"></script>
</head>

<body class="aboutbg">

    <header>
        <div class="container">

            <a href="index"><img src="./images/logo1.png" width="10%" height=auto class="logo"></a>
            <nav>
                <ul>
                    <li><a href="index">Home</a></li>
                    <li><a href="about">About</a></li>
                    <li><a href="forms">Forms</a></li>
                    <li><a href="resources">Resources</a></li>
                </ul>
            </nav>

        </div>
    </header>


<div class="header2">
<h2><?= esc($title) ?></h2>
</div>

<div class="subcontent">
<?php if (! empty($news) && is_array($news)): ?>

    <?php foreach ($news as $news_item): ?>

        <h3><?= esc($news_item['title']) ?></h3>

        <div class="main">
            <?= esc($news_item['body']) ?>
        </div>
        <p><?= anchor("news/" . esc($news_item['slug'], 'url'), "View article") ?></p>

    <?php endforeach ?>

<?php else: ?>

    <h3>No News</h3>

    <p>Unable to find any news for you.</p>

<?php endif ?>
</div>