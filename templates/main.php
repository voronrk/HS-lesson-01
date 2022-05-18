<?php

include('./functions/getcontent.php');

$content = GetContent::getFullData(); ?>

<div class="content">

    <?php foreach($content as $article) { ?>
        <h2><?php echo $article->title?></h2>
        <p><?php echo $article->text?></p>

    <?php } ?>

</div>