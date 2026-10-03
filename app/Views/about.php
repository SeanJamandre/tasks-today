<?= view('partials/header', ['title' => $title]) ?>
<section class="page-head"><p class="eyebrow">ABOUT</p><h1>Tasks for Today</h1><p>A CodeIgniter 4 management system demonstrating MVC, database-backed CRUD, validation, authentication, and soft deletion.</p></section>
<div class="card"><h2>How it works</h2><p>Anyone can view the Welcome and Task List pages. Only logged-in users can create, edit, or archive tasks. Archived tasks remain in the database but are hidden from active lists.</p></div>
<?= view('partials/footer') ?>
