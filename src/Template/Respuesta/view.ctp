<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Respuestum'), ['action' => 'edit', $respuestum->ID_RPTA]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Respuestum'), ['action' => 'delete', $respuestum->ID_RPTA], ['confirm' => __('Are you sure you want to delete # {0}?', $respuestum->ID_RPTA)]) ?> </li>
        <li><?= $this->Html->link(__('List Respuesta'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Respuestum'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="respuesta view large-10 medium-9 columns">
    <h2><?= h($respuestum->ID_RPTA) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('TEXTO RPTA') ?></h6>
            <p><?= h($respuestum->TEXTO_RPTA) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('ID RPTA') ?></h6>
            <p><?= $this->Number->format($respuestum->ID_RPTA) ?></p>
        </div>
    </div>
</div>
