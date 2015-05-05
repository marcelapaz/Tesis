<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Paciente'), ['action' => 'edit', $paciente->ID_PACIENTE]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Paciente'), ['action' => 'delete', $paciente->ID_PACIENTE], ['confirm' => __('Are you sure you want to delete # {0}?', $paciente->ID_PACIENTE)]) ?> </li>
        <li><?= $this->Html->link(__('List Paciente'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Paciente'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="paciente view large-10 medium-9 columns">
    <h2><?= h($paciente->ID_PACIENTE) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('NIVEL EDUCATIVO') ?></h6>
            <p><?= h($paciente->NIVEL_EDUCATIVO) ?></p>
            <h6 class="subheader"><?= __('PROFESION') ?></h6>
            <p><?= h($paciente->PROFESION) ?></p>
            <h6 class="subheader"><?= __('ANIOS DE EVOL ENF') ?></h6>
            <p><?= h($paciente->ANIOS_DE_EVOL_ENF) ?></p>
            <h6 class="subheader"><?= __('NIVEL COGNICION') ?></h6>
            <p><?= h($paciente->NIVEL_COGNICION) ?></p>
            <h6 class="subheader"><?= __('NOMBRE') ?></h6>
            <p><?= h($paciente->NOMBRE) ?></p>
            <h6 class="subheader"><?= __('CORREO') ?></h6>
            <p><?= h($paciente->CORREO) ?></p>
            <h6 class="subheader"><?= __('CONTRASENA') ?></h6>
            <p><?= h($paciente->CONTRASENA) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('ID PACIENTE') ?></h6>
            <p><?= $this->Number->format($paciente->ID_PACIENTE) ?></p>
            <h6 class="subheader"><?= __('ID ESPECIALISTA') ?></h6>
            <p><?= $this->Number->format($paciente->ID_ESPECIALISTA) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('FECHA NAC') ?></h6>
            <p><?= h($paciente->FECHA_NAC) ?></p>
        </div>
    </div>
</div>
