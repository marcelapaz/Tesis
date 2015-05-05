<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Ejercicio'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="ejercicio form large-10 medium-9 columns">
    <?= $this->Form->create($ejercicio); ?>
    <fieldset>
        <legend><?= __('Add Ejercicio') ?></legend>
        <?php
            echo $this->Form->input('ID_CUESTIONARIO');
            echo $this->Form->input('ID_TEST');
            echo $this->Form->input('NOMBRE_EJERCICIO');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
