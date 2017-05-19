<?php

$projects = $items;

/*

The $limit parameter can be passed to this snippet to
display only a specified amount of projects:

```
<?php snippet('showcase', ['limit' => 3]) ?>
```

Learn more about snippets and parameters at:
https://getkirby.com/docs/templates/snippets

*/

if(isset($limit)) $projects = $projects->limit($limit);

?>

<ul>
  <?php $i = $projects->count(); ?>
  <?php foreach($projects as $project): ?>
    <?php $i-- ?>
    <li>
      <a href="<?= $project->url() ?>" class="termin">
        <?php if($image = $project->images()->sortBy('sort', 'asc')->first()): $thumb = $image->crop(600, 600); ?>
          <img src="<?= $thumb->url() ?>" alt="Thumbnail for <?= $project->title()->html() ?>" />
        <?php endif ?>
        <div>
          <h3 class="m-0 float-left"><?= $project->title()->html() ?></h3>
          <h5 class="m-0 float-right"><?= $project->schedule()->html() ?></h5>
          <div class="clearit"></div>
        </div>
      </a>
    </li>

  <?php endforeach ?>

</ul>
