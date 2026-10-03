<?= view('partials/header', ['title' => $title]) ?>
<section class="hero"><p class="eyebrow">TASK MANAGEMENT SYSTEM</p><h1>Organize your tasks for today.</h1><p>View current tasks publicly and log in when you need to create, update, or archive a task.</p><a class="button" href="<?= site_url('tasks') ?>">View Task List</a></section>
<h2>Upcoming Tasks</h2>
<?php if (!$tasks): ?><p class="muted">No active tasks yet.</p><?php else: ?><div class="cards"><?php foreach ($tasks as $task): ?><article class="card"><span class="badge"><?= esc($task['status']) ?></span><h3><?= esc($task['title']) ?></h3><p><?= esc($task['description']) ?></p><small><?= esc($task['task_date']) ?></small></article><?php endforeach; ?></div><?php endif; ?>
<?= view('partials/footer') ?>
