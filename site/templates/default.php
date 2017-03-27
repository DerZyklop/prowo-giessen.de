<?php snippet('header') ?>

  <main class="main" role="main">

    <header class="wrap">
      <h1><?= $page->title()->html() ?></h1>
      <div class="introduction text">
        <?= $page->intro()->kirbytext() ?>
      </div>
      <hr />
    </header>

    <div class="text wrap">
      <?php if ($page->hasSchedule()): ?>
        <div class="introduction text">
          <?= $page->schedule() ?>
        </div>
      <?php endif; ?>
      <?= $page->text()->kirbytext() ?>
    </div>

  </main>

<?php snippet('footer') ?>
