<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Inter Pre Res'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="interPreRes form large-10 medium-9 columns">
    <?= $this->Form->create($interPreRe); ?>
    <fieldset>
        <legend><?= __('Add Inter Pre Re') ?></legend>
        <?php
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
