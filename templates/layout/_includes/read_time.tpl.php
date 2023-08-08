<span class="reading-time" title="Estimated read time">

  <? $words = count(str_word_count($article->content, 1, 'àáãç3')); ?>
  <? if ($words < 270) : ?>1 min<? else : $words = $words / 135 ?>
  <?= round($words) ?> mins
<? endif ?> de lecture </span>