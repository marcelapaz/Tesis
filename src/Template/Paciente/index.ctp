<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Paciente'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="paciente index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('NIVEL_EDUCATIVO') ?></th>
            <th><?= $this->Paginator->sort('PROFESION') ?></th>
            <th><?= $this->Paginator->sort('ANIOS_DE_EVOL_ENF') ?></th>
            <th><?= $this->Paginator->sort('NIVEL_COGNICION') ?></th>
            <th><?= $this->Paginator->sort('ID_PACIENTE') ?></th>
            <th><?= $this->Paginator->sort('ID_ESPECIALISTA') ?></th>
            <th><?= $this->Paginator->sort('NOMBRE') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($paciente as $paciente): ?>
        <tr>
            <td><?= h($paciente->NIVEL_EDUCATIVO) ?></td>
            <td><?= h($paciente->PROFESION) ?></td>
            <td><?= h($paciente->ANIOS_DE_EVOL_ENF) ?></td>
            <td><?= h($paciente->NIVEL_COGNICION) ?></td>
            <td><?= $this->Number->format($paciente->ID_PACIENTE) ?></td>
            <td><?= $this->Number->format($paciente->ID_ESPECIALISTA) ?></td>
            <td><?= h($paciente->NOMBRE) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $paciente->ID_PACIENTE]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $paciente->ID_PACIENTE]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $paciente->ID_PACIENTE], ['confirm' => __('Are you sure you want to delete # {0}?', $paciente->ID_PACIENTE)]) ?>
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
