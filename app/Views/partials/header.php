<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= esc($title ?? 'Tasks for Today') ?></title>
    <link rel="stylesheet" href="<?= base_url('css/app.css') ?>">
</head>
<body>
<nav class="nav"><div class="wrap nav-inner"><a class="brand" href="<?= site_url('/') ?>">Tasks for Today</a><div class="links"><a href="<?= site_url('/') ?>">Welcome</a><a href="<?= site_url('tasks') ?>">Tasks</a><a href="<?= site_url('about') ?>">About</a><a href="<?= site_url('profile') ?>">Profile</a><?php if (session()->get('isLoggedIn')): ?><a class="button small" href="<?= site_url('tasks/new') ?>">New Task</a><a href="<?= site_url('logout') ?>">Logout</a><?php else: ?><a class="button small" href="<?= site_url('login') ?>">Login</a><?php endif; ?></div></div></nav>
<main class="wrap">
<?php if ($message = session()->getFlashdata('success')): ?><div class="alert success"><?= esc($message) ?></div><?php endif; ?>
<?php if ($message = session()->getFlashdata('error')): ?><div class="alert error"><?= esc($message) ?></div><?php endif; ?>
<?php if ($errors = session()->getFlashdata('errors')): ?><div class="alert error"><ul><?php foreach ((array) $errors as $error): ?><li><?= esc($error) ?></li><?php endforeach; ?></ul></div><?php endif; ?>
