<?php

/* @var $this Controller
 * @var $content string
 */
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <link rel="stylesheet" type="text/css" href="<?= axAssetsFrontend('/css/main.min.css') ?>">
    <title><?= CHtml::encode($this->pageTitle) ?></title>
</head>

<body>
<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
    <h5 class="my-0 mr-md-auto font-weight-normal">
        <a href="/<?= axGetBaseUrl() ?>">Company name</a>
    </h5>
    <nav class="my-2 my-md-0 mr-md-3">
        <a class="p-2 text-dark" href="#">Features</a>
        <a class="p-2 text-dark" href="#">Enterprise</a>
        <a class="p-2 text-dark" href="#">Support</a>
        <a class="p-2 text-dark" href="#">Pricing</a>
    </nav>
    <div>
        <?php if (Yii::app()->user->isGuest) { ?>
            <a class="btn btn-outline-primary" href="<?= $this->createUrl('site/registration') ?>">Registration</a>
            <a class="btn btn-outline-primary" href="<?= $this->createUrl('site/login') ?>">Sign up</a>
        <?php } else { ?>
            <a class="p-2 text-dark" href="#"><?= Yii::app()->user->name ?></a>
            <a class="btn btn-outline-primary" href="<?= $this->createUrl('site/logout') ?>">Logout</a>
        <?php } ?>
    </div>
</div>
<div class="container">
    <?= $content ?>
    <footer class="pt-4 my-md-5 pt-md-5 border-top">
        <div class="row">
            <div class="col-12 col-md">
                <img class="mb-2" src="<?= axAssetsFrontend('/images/bootstrap-solid.svg') ?>" alt="" width="24" height="24">
                <small class="d-block mb-3 text-muted">&copy; 2017-2021</small>
            </div>
            <div class="col-6 col-md">
                <h5>Features</h5>
                <ul class="list-unstyled text-small">
                    <li><a class="text-muted" href="#">Cool stuff</a></li>
                    <li><a class="text-muted" href="#">Random feature</a></li>
                    <li><a class="text-muted" href="#">Team feature</a></li>
                    <li><a class="text-muted" href="#">Stuff for developers</a></li>
                    <li><a class="text-muted" href="#">Another one</a></li>
                    <li><a class="text-muted" href="#">Last time</a></li>
                </ul>
            </div>
            <div class="col-6 col-md">
                <h5>Resources</h5>
                <ul class="list-unstyled text-small">
                    <li><a class="text-muted" href="#">Resource</a></li>
                    <li><a class="text-muted" href="#">Resource name</a></li>
                    <li><a class="text-muted" href="#">Another resource</a></li>
                    <li><a class="text-muted" href="#">Final resource</a></li>
                </ul>
            </div>
            <div class="col-6 col-md">
                <h5>About</h5>
                <ul class="list-unstyled text-small">
                    <li><a class="text-muted" href="#">Team</a></li>
                    <li><a class="text-muted" href="#">Locations</a></li>
                    <li><a class="text-muted" href="#">Privacy</a></li>
                    <li><a class="text-muted" href="#">Terms</a></li>
                </ul>
            </div>
        </div>
    </footer>
</div>
<script src="<?= axAssetsFrontend('/js/manifest.js') ?>"></script>
<script src="<?= axAssetsFrontend('/js/vendor.js') ?>"></script>
<script src="<?= axAssetsFrontend('/js/app.js') ?>"></script>
<script src="<?= axAssetsFrontend('/js/main.min.js') ?>"></script>
</body>
</html>
