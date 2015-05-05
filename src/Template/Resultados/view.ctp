<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Resultado'), ['action' => 'edit', $resultado->ID_RESULTADOS]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Resultado'), ['action' => 'delete', $resultado->ID_RESULTADOS], ['confirm' => __('Are you sure you want to delete # {0}?', $resultado->ID_RESULTADOS)]) ?> </li>
        <li><?= $this->Html->link(__('List Resultados'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Resultado'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="resultados view large-10 medium-9 columns">
    <h2><?= h($resultado->ID_RESULTADOS) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('ACIERTOS') ?></h6>
            <p><?= h($resultado->ACIERTOS) ?></p>
            <h6 class="subheader"><?= __('FALLOS') ?></h6>
            <p><?= h($resultado->FALLOS) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('ID RESULTADOS') ?></h6>
            <p><?= $this->Number->format($resultado->ID_RESULTADOS) ?></p>
            <h6 class="subheader"><?= __('ID EJERCICIO') ?></h6>
            <p><?= $this->Number->format($resultado->ID_EJERCICIO) ?></p>
            <h6 class="subheader"><?= __('PUNTAJE') ?></h6>
            <p><?= $this->Number->format($resultado->PUNTAJE) ?></p>
            <h6 class="subheader"><?= __('TIEMPO TOTAL') ?></h6>
            <p><?= $this->Number->format($resultado->TIEMPO_TOTAL) ?></p>
            <h6 class="subheader"><?= __('TOTAL PREGUNTAS') ?></h6>
            <p><?= $this->Number->format($resultado->TOTAL_PREGUNTAS) ?></p>
        </div>
    </div>
</div>
