<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $pregunta->ID_PREGUNTAS],
                ['confirm' => __('Are you sure you want to delete # {0}?', $pregunta->ID_PREGUNTAS)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Preguntas'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="preguntas form large-10 medium-9 columns">
    <?= $this->Form->create($pregunta); ?>
    <fieldset>
        <legend><?= __('Edit Pregunta') ?></legend>
        <?php
            echo $this->Form->input('TEXTO_PREGUNTA');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
