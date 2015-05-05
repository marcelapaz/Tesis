<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $especialistum->ID_ESPECIALISTA],
                ['confirm' => __('Are you sure you want to delete # {0}?', $especialistum->ID_ESPECIALISTA)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Especialista'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="especialista form large-10 medium-9 columns">
    <?= $this->Form->create($especialistum); ?>
    <fieldset>
        <legend><?= __('Edit Especialistum') ?></legend>
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
