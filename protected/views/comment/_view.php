<?php
/* @var $this CommentController */
/* @var $data Comment */
?>

<div class="comment" id="c<?php echo $data->id; ?>">

    <div class="author">
        <?php echo $data->authorLink; ?> says on
        <?php echo CHtml::link(CHtml::encode($data->post->title), $data->post->url); ?>
    </div>

    <div class="content">
        <?php echo nl2br(CHtml::encode($data->content)); ?>
    </div>

    <div class="time">
        <?php if ($data->status == Comment::STATUS_PENDING): ?>
            <span class="pending">Pending approval</span> |
            <?php echo CHtml::linkButton('Approve', array(
                'submit' => array('comment/approve', 'id' => $data->id),
            )); ?> |
        <?php endif; ?>
        <?php echo CHtml::link('Update', array('comment/update', 'id' => $data->id)); ?> |
        <?php echo CHtml::link('Delete', array('comment/delete', 'id' => $data->id), array('class' => 'delete')); ?> |
        <?php echo date('F j, Y \a\t h:i a', $data->create_time); ?>
    </div>

</div><br><!-- comment -->