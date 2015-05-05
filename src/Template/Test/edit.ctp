<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $test->ID_TEST],
                ['confirm' => __('Are you sure you want to delete # {0}?', $test->ID_TEST)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Test'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="test form large-10 medium-9 columns">
    <?= $this->Form->create($test); ?>
    <fieldset>
        <legend><?= __('Edit Test') ?></legend>
        <?php
            echo $this->Form->input('ID_PACIENTE');
            echo $this->Form->input('FECHA_HORA');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
