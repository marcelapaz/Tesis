<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $imagen->ID_IMAGEN],
                ['confirm' => __('Are you sure you want to delete # {0}?', $imagen->ID_IMAGEN)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Imagen'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="imagen form large-10 medium-9 columns">
    <?= $this->Form->create($imagen); ?>
    <fieldset>
        <legend><?= __('Edit Imagen') ?></legend>
        <?php
            echo $this->Form->input('ID_TIPO_IMAGEN');
            echo $this->Form->input('URL_IMAGEN');
            echo $this->Form->input('COMPLEJIDAD');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
