<?php
/* @var $this PostController */
/* @var $data Post */
?>

<div class="view">

    <div class="title">
        <h1>
            <?php echo CHtml::link(CHtml::encode($data->title), $data->url); ?>
        </h1>
    </div>

    <div class="content">
        <?php
        $this->beginWidget('CMarkdown', array('purifyOutput' => true));
        echo $data->content;
        $this->endWidget();
        ?>
    </div>

    <div class="nav">
        <b>Tags:</b>
        <?php echo implode(', ', $data->tagLinks); ?>
        <br/>
        <?php echo CHtml::link("Comments ({$data->commentCount})", $data->url . '#comments'); ?> |
        Last updated on <?php echo date('F j, Y', $data->update_time); ?>
    </div>

    <div class="published">
        posted on <?php echo date('F j, Y', $data->create_time); ?>
    </div>

</div>