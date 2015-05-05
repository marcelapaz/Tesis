<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Inter Cues Pre'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="interCuesPre index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('ID_CUESTIONARIO') ?></th>
            <th><?= $this->Paginator->sort('ID_PREGUNTAS') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($interCuesPre as $interCuesPre): ?>
        <tr>
            <td><?= $this->Number->format($interCuesPre->ID_CUESTIONARIO) ?></td>
            <td><?= $this->Number->format($interCuesPre->ID_PREGUNTAS) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $interCuesPre->ID_CUESTIONARIO]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $interCuesPre->ID_CUESTIONARIO]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $interCuesPre->ID_CUESTIONARIO], ['confirm' => __('Are you sure you want to delete # {0}?', $interCuesPre->ID_CUESTIONARIO)]) ?>
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
