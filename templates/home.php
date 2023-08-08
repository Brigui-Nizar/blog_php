<!-- Page Header -->
<? if (isset($pageBackground)) : ?>
    <header class="masthead" style="background-image: url(<?= $pageBackground ?>)">
    <? else : ?>
        <header class="masthead">
        <? endif ?>
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="page-heading">
                        <h1><?= $siteTitle ?></h1>
                        <? if ($siteDescription) : ?>
                            <span class="subheading"><?= $siteDescription ?></span>
                        <? endif ?>
                    </div>
                </div>
            </div>
        </div>
        </header>

        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">

                    <!-- Home Post List -->
                    <? foreach ($articles as $article) : ?>
                        <article class="post-preview">
                            <a href="/articles?slug=<?= $article->slug ?>">
                                <h2 class="post-title"><?= $article->title ?></h2>
                                <? if (isset($article->shortDescription)) : ?>
                                    <h3 class="post-subtitle"><?= $article->shortDescription ?></h3>
                                <? else : ?>
                                    <h3 class="post-subtitle"><?= substr($article->description, 0, 100) . ' ...' ?></h3>
                                <? endif ?>
                            </a>
                            <p class="post-meta">Posté par
                                <? if (isset($article->author)) : ?>
                                    <?= $article->firstname ?>
                                <? else : ?>
                                    anonyme
                                <? endif ?>
                                le
                                <?= $article->createdAt ?>
                                <? include __DIR__ . '/layout/_includes/read_time.tpl.php' ?>
                            </p>
                        </article>

                        <hr>
                    <? endforeach  ?>

                    <!-- Pager -->
                    <div class="clearfix">
                        <a class="btn btn-primary float-right" href="/articles">Voir tout les articles &rarr;</a>
                    </div>

                </div>
            </div>
        </div>