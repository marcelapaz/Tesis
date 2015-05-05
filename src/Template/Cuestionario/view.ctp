<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Cuestionario'), ['action' => 'edit', $cuestionario->ID_CUESTIONARIO]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Cuestionario'), ['action' => 'delete', $cuestionario->ID_CUESTIONARIO], ['confirm' => __('Are you sure you want to delete # {0}?', $cuestionario->ID_CUESTIONARIO)]) ?> </li>
        <li><?= $this->Html->link(__('List Cuestionario'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cuestionario'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="cuestionario view large-10 medium-9 columns">
    <h2><?= h($cuestionario->ID_CUESTIONARIO) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('NOMBRE') ?></h6>
            <p><?= h($cuestionario->NOMBRE) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('ID CUESTIONARIO') ?></h6>
            <p><?= $this->Number->format($cuestionario->ID_CUESTIONARIO) ?></p>
        </div>
    </div>
</div>
