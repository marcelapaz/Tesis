<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Respuestum'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="respuesta index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('ID_RPTA') ?></th>
            <th><?= $this->Paginator->sort('TEXTO_RPTA') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($respuesta as $respuestum): ?>
        <tr>
            <td><?= $this->Number->format($respuestum->ID_RPTA) ?></td>
            <td><?= h($respuestum->TEXTO_RPTA) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $respuestum->ID_RPTA]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $respuestum->ID_RPTA]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $respuestum->ID_RPTA], ['confirm' => __('Are you sure you want to delete # {0}?', $respuestum->ID_RPTA)]) ?>
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
