<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Pregunta'), ['action' => 'edit', $pregunta->ID_PREGUNTAS]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Pregunta'), ['action' => 'delete', $pregunta->ID_PREGUNTAS], ['confirm' => __('Are you sure you want to delete # {0}?', $pregunta->ID_PREGUNTAS)]) ?> </li>
        <li><?= $this->Html->link(__('List Preguntas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pregunta'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="preguntas view large-10 medium-9 columns">
    <h2><?= h($pregunta->ID_PREGUNTAS) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('TEXTO PREGUNTA') ?></h6>
            <p><?= h($pregunta->TEXTO_PREGUNTA) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('ID PREGUNTAS') ?></h6>
            <p><?= $this->Number->format($pregunta->ID_PREGUNTAS) ?></p>
        </div>
    </div>
</div>
