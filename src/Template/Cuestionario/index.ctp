<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Cuestionario'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="cuestionario index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('ID_CUESTIONARIO') ?></th>
            <th><?= $this->Paginator->sort('NOMBRE') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($cuestionario as $cuestionario): ?>
        <tr>
            <td><?= $this->Number->format($cuestionario->ID_CUESTIONARIO) ?></td>
            <td><?= h($cuestionario->NOMBRE) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $cuestionario->ID_CUESTIONARIO]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $cuestionario->ID_CUESTIONARIO]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $cuestionario->ID_CUESTIONARIO], ['confirm' => __('Are you sure you want to delete # {0}?', $cuestionario->ID_CUESTIONARIO)]) ?>
            </td>
        </tr>

    <?php endforeach; ?>
    </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
