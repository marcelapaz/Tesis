<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Test'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="test form large-10 medium-9 columns">
    <?= $this->Form->create($test); ?>
    <fieldset>
        <legend><?= __('Add Test') ?></legend>
        <?php
            echo $this->Form->input('ID_PACIENTE');
            echo $this->Form->input('FECHA_HORA');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
