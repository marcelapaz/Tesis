<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Pregunta'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="preguntas index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('ID_PREGUNTAS') ?></th>
            <th><?= $this->Paginator->sort('TEXTO_PREGUNTA') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($preguntas as $pregunta): ?>
        <tr>
            <td><?= $this->Number->format($pregunta->ID_PREGUNTAS) ?></td>
            <td><?= h($pregunta->TEXTO_PREGUNTA) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $pregunta->ID_PREGUNTAS]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $pregunta->ID_PREGUNTAS]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $pregunta->ID_PREGUNTAS], ['confirm' => __('Are you sure you want to delete # {0}?', $pregunta->ID_PREGUNTAS)]) ?>
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
