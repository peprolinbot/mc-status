<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $this->e($title) ?></title>
    <link  rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.css">
    <link rel="stylesheet" type="text/css" href="assets/style.css">
</head>
<body>
<div class="container">
    <div class="logo">
        <img src="/assets/minecraft-logo.svg"/>
    </div>
    <div class="section">
        <?= $this->section('content') ?>
    </div>
    <div class="section">
        <div class="status-footer">
            <p>
                <a href="https://github.com/peprolinbot/mc-status"><i class="fab fa-github"></i> View on GitHub</a>
                <a href="https://peprolinbot.com"><i class="fa fa-user-circle"></i> Created by peprolinbot</a>
                <a href="https://github.com/styxit/MinecraftStatusPage"><i class="fab fa-github"></i> Forked from Styxit</a>
            </p>
        </div>
    </div>
</div>
</body>
</html>
