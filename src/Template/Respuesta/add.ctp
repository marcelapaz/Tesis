<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Respuesta'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="respuesta form large-10 medium-9 columns">
    <?= $this->Form->create($respuestum); ?>
    <fieldset>
        <legend><?= __('Add Respuestum') ?></legend>
        <?php
            echo $this->Form->input('TEXTO_RPTA');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
