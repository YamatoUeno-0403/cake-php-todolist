<h1><?= ($article->title) ?></h1>
<p><?= ($article->body) ?></p>
<p><small>Created: <?= $article->created->format(DATE_RFC850) ?></small></p>