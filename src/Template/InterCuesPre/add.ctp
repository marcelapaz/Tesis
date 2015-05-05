<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Inter Cues Pre'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="interCuesPre form large-10 medium-9 columns">
    <?= $this->Form->create($interCuesPre); ?>
    <fieldset>
        <legend><?= __('Add Inter Cues Pre') ?></legend>
        <?php
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
