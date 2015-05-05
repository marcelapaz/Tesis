<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Imagen'), ['action' => 'edit', $imagen->ID_IMAGEN]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Imagen'), ['action' => 'delete', $imagen->ID_IMAGEN], ['confirm' => __('Are you sure you want to delete # {0}?', $imagen->ID_IMAGEN)]) ?> </li>
        <li><?= $this->Html->link(__('List Imagen'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Imagen'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="imagen view large-10 medium-9 columns">
    <h2><?= h($imagen->ID_IMAGEN) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('URL IMAGEN') ?></h6>
            <p><?= h($imagen->URL_IMAGEN) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('ID IMAGEN') ?></h6>
            <p><?= $this->Number->format($imagen->ID_IMAGEN) ?></p>
            <h6 class="subheader"><?= __('ID TIPO IMAGEN') ?></h6>
            <p><?= $this->Number->format($imagen->ID_TIPO_IMAGEN) ?></p>
            <h6 class="subheader"><?= __('COMPLEJIDAD') ?></h6>
            <p><?= $this->Number->format($imagen->COMPLEJIDAD) ?></p>
        </div>
    </div>
</div>
