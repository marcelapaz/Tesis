<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Especialista'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="especialista form large-10 medium-9 columns">
    <?= $this->Form->create($especialistum); ?>
    <fieldset>
        <legend><?= __('Add Especialistum') ?></legend>
        <?php
            echo $this->Form->input('ESPECIALIDAD');
            echo $this->Form->input('NOMBRE');
            echo $this->Form->input('CORREO');
            echo $this->Form->input('CONTRASENA');
            echo $this->Form->input('FECHA_NAC', array('empty' => true, 'default' => ''));
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
