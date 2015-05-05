<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $interPreRe->ID_PREGUNTAS],
                ['confirm' => __('Are you sure you want to delete # {0}?', $interPreRe->ID_PREGUNTAS)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Inter Pre Res'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="interPreRes form large-10 medium-9 columns">
    <?= $this->Form->create($interPreRe); ?>
    <fieldset>
        <legend><?= __('Edit Inter Pre Re') ?></legend>
        <?php
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
