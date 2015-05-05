<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Cuestionario'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="cuestionario form large-10 medium-9 columns">
    <?= $this->Form->create($cuestionario); ?>
    <fieldset>
        <legend><?= __('Add Cuestionario') ?></legend>
        <?php
            echo $this->Form->input('NOMBRE');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
