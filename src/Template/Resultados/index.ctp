<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Resultado'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="resultados index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('ID_RESULTADOS') ?></th>
            <th><?= $this->Paginator->sort('ID_EJERCICIO') ?></th>
            <th><?= $this->Paginator->sort('ACIERTOS') ?></th>
            <th><?= $this->Paginator->sort('FALLOS') ?></th>
            <th><?= $this->Paginator->sort('PUNTAJE') ?></th>
            <th><?= $this->Paginator->sort('TIEMPO_TOTAL') ?></th>
            <th><?= $this->Paginator->sort('TOTAL_PREGUNTAS') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($resultados as $resultado): ?>
        <tr>
            <td><?= $this->Number->format($resultado->ID_RESULTADOS) ?></td>
            <td><?= $this->Number->format($resultado->ID_EJERCICIO) ?></td>
            <td><?= h($resultado->ACIERTOS) ?></td>
            <td><?= h($resultado->FALLOS) ?></td>
            <td><?= $this->Number->format($resultado->PUNTAJE) ?></td>
            <td><?= $this->Number->format($resultado->TIEMPO_TOTAL) ?></td>
            <td><?= $this->Number->format($resultado->TOTAL_PREGUNTAS) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $resultado->ID_RESULTADOS]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $resultado->ID_RESULTADOS]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $resultado->ID_RESULTADOS], ['confirm' => __('Are you sure you want to delete # {0}?', $resultado->ID_RESULTADOS)]) ?>
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
