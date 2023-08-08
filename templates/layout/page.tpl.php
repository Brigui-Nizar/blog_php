<!-- Page Header -->
<? $article = $articles['main'] ?>
<? if (file_exists('/app/public/assets/img/bg-' . $article->slug . '.jpg')) : ?>
  <header class="masthead" style="background-image: url(<?= '/assets/img/bg-' . $article->slug . '.jpg' ?>)">
  <? else : ?>
    <header class="masthead">
    <? endif ?>
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="page-heading">
            <h1><?= $article->title ?></h1>
            <? if ($article->shortDescription) : ?>
              <span class="subheading"><?= $article->shortDescription ?></span>
            <? endif ?>
            <span class="meta"><? if (isset($article->author)) : ?>
                <?= $article->firstname ?>
              <? else : ?>
                anonyme
              <? endif ?>
              le
              <?= $article->createdAt ?>
              <? include __DIR__ . '/_includes/read_time.tpl.php' ?>
            </span>
          </div>
        </div>
      </div>
    </div>
    </header>

    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">

          <?= $article->content ?>

          <hr>

          <div class="clearfix">

            <? if ($articles['previous'] != null) : ?>
              <a class="btn btn-primary float-left" href="articles?slug=<?= $articles['previous']->slug ?>" data-toggle="tooltip" data-placement="top" title="<?= $articles['previous']->title ?>">&larr; Previous<span class="d-none d-md-inline">
                  Post</span></a>
            <? endif ?>
            <? if ($articles['next'] != null) : ?>
              <a class="btn btn-primary float-right" href="articles?slug=<?= $articles['next']->slug ?>" data-toggle="tooltip" data-placement="top" title="<?= $articles['next']->title ?>">Next<span class="d-none d-md-inline">
                  Post</span> &rarr;</a>
            <? endif ?>
          </div>
        </div>
      </div>
    </div>