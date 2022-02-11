<!--

    This is my simple view, you can make your own

-->

<h1>
    <?php echo $article->title.' | '.$article->id; ?>
</h1>

<p>
    <?php echo print $article->content; ?>
</p>