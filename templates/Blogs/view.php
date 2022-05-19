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
            <?= $this->Html->link(__('Edit Blog'), ['action' => 'edit', $blog->blog_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Blog'), ['action' => 'delete', $blog->blog_id], ['confirm' => __('Are you sure you want to delete # {0}?', $blog->blog_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Blogs'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Blog'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="blogs view content">
            <h3><?= h($blog->title) ?></h3>
            <table>
                <tr>
                    <th><?= __('Image') ?></th>
                    <td><?= h($blog->image) ?></td>
                </tr>
                <tr>
                    <th><?= __('Text') ?></th>
                    <td><?= h($blog->text) ?></td>
                </tr>
                <tr>
                    <th><?= __('Title') ?></th>
                    <td><?= h($blog->title) ?></td>
                </tr>
                <tr>
                    <th><?= __('Status') ?></th>
                    <td><?= h($blog->status) ?></td>
                </tr>
                <tr>
                    <th><?= __('Blog Id') ?></th>
                    <td><?= $this->Number->format($blog->blog_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created Date') ?></th>
                    <td><?= h($blog->created_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified Date') ?></th>
                    <td><?= h($blog->modified_date) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
