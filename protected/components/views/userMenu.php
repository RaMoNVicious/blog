<ul>
    <li><?php echo CHtml::link('Створити новий запис', array('post/create')); ?></li>
    <li><?php echo CHtml::link('Управління записами', array('post/admin')); ?></li>
    <li><?php echo CHtml::link('Ухвалення коментарів', array('comment/index'))
            . ' (' . Comment::model()->pendingCommentCount . ')'; ?></li>
    <li><?php echo CHtml::link('Вихід', array('site/logout')); ?></li>
</ul>