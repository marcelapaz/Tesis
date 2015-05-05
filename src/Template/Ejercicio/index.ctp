<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Ejercicio'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="ejercicio index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('ID_EJERCICIO') ?></th>
            <th><?= $this->Paginator->sort('ID_CUESTIONARIO') ?></th>
            <th><?= $this->Paginator->sort('ID_TEST') ?></th>
            <th><?= $this->Paginator->sort('NOMBRE_EJERCICIO') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($ejercicio as $ejercicio): ?>
        <tr>
            <td><?= $this->Number->format($ejercicio->ID_EJERCICIO) ?></td>
            <td><?= $this->Number->format($ejercicio->ID_CUESTIONARIO) ?></td>
            <td><?= $this->Number->format($ejercicio->ID_TEST) ?></td>
            <td><?= h($ejercicio->NOMBRE_EJERCICIO) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $ejercicio->ID_EJERCICIO]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $ejercicio->ID_EJERCICIO]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $ejercicio->ID_EJERCICIO], ['confirm' => __('Are you sure you want to delete # {0}?', $ejercicio->ID_EJERCICIO)]) ?>
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
