<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Color $color
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Color'), ['action' => 'edit', $color->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Color'), ['action' => 'delete', $color->id], ['confirm' => __('Are you sure you want to delete # {0}?', $color->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Colors'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Color'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="colors view content">
            <h3><?= h($color->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Description') ?></th>
                    <td><?= h($color->description) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($color->id) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Cars') ?></h4>
                <?php if (!empty($color->cars)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Matricula') ?></th>
                            <th><?= __('Brand Id') ?></th>
                            <th><?= __('Color Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($color->cars as $cars) : ?>
                        <tr>
                            <td><?= h($cars->id) ?></td>
                            <td><?= h($cars->matricula) ?></td>
                            <td><?= h($cars->brand_id) ?></td>
                            <td><?= h($cars->color_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Cars', 'action' => 'view', $cars->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Cars', 'action' => 'edit', $cars->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Cars', 'action' => 'delete', $cars->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cars->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
