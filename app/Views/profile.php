<?= view('partials/header', ['title' => $title]) ?>
<section class="page-head"><p class="eyebrow">PROFILE</p><h1>User Profile</h1></section>
<?php if (session()->get('isLoggedIn')): ?><div class="card"><h2><?= esc(session()->get('full_name')) ?></h2><p>Username: <strong><?= esc(session()->get('username')) ?></strong></p><p>You are logged in and may manage tasks.</p></div><?php else: ?><div class="card"><p>You are viewing the public profile page. Log in to manage tasks.</p><a class="button" href="<?= site_url('login') ?>">Log In</a></div><?php endif; ?>
<?= view('partials/footer') ?>
