<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Especialistum'), ['action' => 'edit', $especialistum->ID_ESPECIALISTA]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Especialistum'), ['action' => 'delete', $especialistum->ID_ESPECIALISTA], ['confirm' => __('Are you sure you want to delete # {0}?', $especialistum->ID_ESPECIALISTA)]) ?> </li>
        <li><?= $this->Html->link(__('List Especialista'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Especialistum'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="especialista view large-10 medium-9 columns">
    <h2><?= h($especialistum->ID_ESPECIALISTA) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('ESPECIALIDAD') ?></h6>
            <p><?= h($especialistum->ESPECIALIDAD) ?></p>
            <h6 class="subheader"><?= __('NOMBRE') ?></h6>
            <p><?= h($especialistum->NOMBRE) ?></p>
            <h6 class="subheader"><?= __('CORREO') ?></h6>
            <p><?= h($especialistum->CORREO) ?></p>
            <h6 class="subheader"><?= __('CONTRASENA') ?></h6>
            <p><?= h($especialistum->CONTRASENA) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('ID ESPECIALISTA') ?></h6>
            <p><?= $this->Number->format($especialistum->ID_ESPECIALISTA) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('FECHA NAC') ?></h6>
            <p><?= h($especialistum->FECHA_NAC) ?></p>
        </div>
    </div>
</div>
