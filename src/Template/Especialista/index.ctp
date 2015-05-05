<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Especialistum'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="especialista index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('ESPECIALIDAD') ?></th>
            <th><?= $this->Paginator->sort('ID_ESPECIALISTA') ?></th>
            <th><?= $this->Paginator->sort('NOMBRE') ?></th>
            <th><?= $this->Paginator->sort('CORREO') ?></th>
            <th><?= $this->Paginator->sort('CONTRASENA') ?></th>
            <th><?= $this->Paginator->sort('FECHA_NAC') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($especialista as $especialistum): ?>
        <tr>
            <td><?= h($especialistum->ESPECIALIDAD) ?></td>
            <td><?= $this->Number->format($especialistum->ID_ESPECIALISTA) ?></td>
            <td><?= h($especialistum->NOMBRE) ?></td>
            <td><?= h($especialistum->CORREO) ?></td>
            <td><?= h($especialistum->CONTRASENA) ?></td>
            <td><?= h($especialistum->FECHA_NAC) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $especialistum->ID_ESPECIALISTA]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $especialistum->ID_ESPECIALISTA]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $especialistum->ID_ESPECIALISTA], ['confirm' => __('Are you sure you want to delete # {0}?', $especialistum->ID_ESPECIALISTA)]) ?>
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
