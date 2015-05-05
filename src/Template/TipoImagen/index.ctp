<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Tipo Imagen'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="tipoImagen index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('NOMBRE_IMAGEN') ?></th>
            <th><?= $this->Paginator->sort('ID_TIPO_IMAGEN') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($tipoImagen as $tipoImagen): ?>
        <tr>
            <td><?= h($tipoImagen->NOMBRE_IMAGEN) ?></td>
            <td><?= $this->Number->format($tipoImagen->ID_TIPO_IMAGEN) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $tipoImagen->ID_TIPO_IMAGEN]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tipoImagen->ID_TIPO_IMAGEN]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tipoImagen->ID_TIPO_IMAGEN], ['confirm' => __('Are you sure you want to delete # {0}?', $tipoImagen->ID_TIPO_IMAGEN)]) ?>
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
