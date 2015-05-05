<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Paciente'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="paciente form large-10 medium-9 columns">
    <?= $this->Form->create($paciente); ?>
    <fieldset>
        <legend><?= __('Add Paciente') ?></legend>
        <?php
            echo $this->Form->input('NIVEL_EDUCATIVO');
            echo $this->Form->input('PROFESION');
            echo $this->Form->input('ANIOS_DE_EVOL_ENF');
            echo $this->Form->input('NIVEL_COGNICION');
            echo $this->Form->input('ID_ESPECIALISTA');
            echo $this->Form->input('NOMBRE');
            echo $this->Form->input('CORREO');
            echo $this->Form->input('CONTRASENA');
            echo $this->Form->input('FECHA_NAC', array('empty' => true, 'default' => ''));
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
