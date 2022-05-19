<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Blog $blog
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $blog->blog_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $blog->blog_id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Blogs'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="blogs form content">
            <?= $this->Form->create($blog) ?>
            <fieldset>
                <legend><?= __('Edit Blog') ?></legend>
                <?php
                    echo $this->Form->control('image');
                    echo $this->Form->control('text');
                    echo $this->Form->control('title');
                    echo $this->Form->control('status');
                    echo $this->Form->control('created_date', ['empty' => true]);
                    echo $this->Form->control('modified_date', ['empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
