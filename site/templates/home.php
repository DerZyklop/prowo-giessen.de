<?php snippet('header') ?>

  <main class="main" role="main">

    <header class="wrap">
      <h1><?= $page->title()->html() ?></h1>
      <div class="introduction text">
        <?= $page->intro()->kirbytext() ?>
      </div>
      <hr />
    </header>

    <div class="text wrap weisheit">
      <h4><?= $page->weisheitheadline()->kirbytext() ?></h4>
      <?= $page->weisheit()->kirbytext() ?>
    </div>

    <section class="projects-section invert">

      <div class="wrap wide">
        <h2>Termine</h2>
        <?php #snippet('showcase', ['items' => page('termine')->children()->visible()]) ?>
        <?php
          snippet(
            'termine', [
              'items' => page('termine')->children()->visible()
            ]
          )
        ?>
      </div>

    </section>

  </main>

<?php snippet('footer') ?>
