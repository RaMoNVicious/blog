<?php foreach ($comments as $comment): ?>
    <div class="comment" id="c<?php echo $comment->id; ?>">

        <?php echo CHtml::link("#{$comment->id}", $comment->getUrl($post), array(
            'class' => 'cid',
            'title' => 'Permalink to this comment',
        )); ?>

        <div class="author">
            <?php echo date('F j, Y \a\t h:i a', $comment->create_time) . " " . $comment->authorLink; ?> says:
        </div>

        <div class="content">
            <h3><?php echo nl2br(CHtml::encode($comment->content)); ?></h3>
        </div>

    </div><!-- comment -->
<?php endforeach; ?>