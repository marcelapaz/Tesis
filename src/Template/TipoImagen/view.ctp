<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Tipo Imagen'), ['action' => 'edit', $tipoImagen->ID_TIPO_IMAGEN]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Tipo Imagen'), ['action' => 'delete', $tipoImagen->ID_TIPO_IMAGEN], ['confirm' => __('Are you sure you want to delete # {0}?', $tipoImagen->ID_TIPO_IMAGEN)]) ?> </li>
        <li><?= $this->Html->link(__('List Tipo Imagen'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tipo Imagen'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="tipoImagen view large-10 medium-9 columns">
    <h2><?= h($tipoImagen->ID_TIPO_IMAGEN) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('NOMBRE IMAGEN') ?></h6>
            <p><?= h($tipoImagen->NOMBRE_IMAGEN) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('ID TIPO IMAGEN') ?></h6>
            <p><?= $this->Number->format($tipoImagen->ID_TIPO_IMAGEN) ?></p>
        </div>
    </div>
</div>
