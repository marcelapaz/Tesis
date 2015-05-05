<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Ejercicio'), ['action' => 'edit', $ejercicio->ID_EJERCICIO]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Ejercicio'), ['action' => 'delete', $ejercicio->ID_EJERCICIO], ['confirm' => __('Are you sure you want to delete # {0}?', $ejercicio->ID_EJERCICIO)]) ?> </li>
        <li><?= $this->Html->link(__('List Ejercicio'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ejercicio'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="ejercicio view large-10 medium-9 columns">
    <h2><?= h($ejercicio->ID_EJERCICIO) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('NOMBRE EJERCICIO') ?></h6>
            <p><?= h($ejercicio->NOMBRE_EJERCICIO) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('ID EJERCICIO') ?></h6>
            <p><?= $this->Number->format($ejercicio->ID_EJERCICIO) ?></p>
            <h6 class="subheader"><?= __('ID CUESTIONARIO') ?></h6>
            <p><?= $this->Number->format($ejercicio->ID_CUESTIONARIO) ?></p>
            <h6 class="subheader"><?= __('ID TEST') ?></h6>
            <p><?= $this->Number->format($ejercicio->ID_TEST) ?></p>
        </div>
    </div>
</div>
