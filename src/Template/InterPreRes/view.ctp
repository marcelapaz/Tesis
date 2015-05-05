<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Inter Pre Re'), ['action' => 'edit', $interPreRe->ID_PREGUNTAS]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Inter Pre Re'), ['action' => 'delete', $interPreRe->ID_PREGUNTAS], ['confirm' => __('Are you sure you want to delete # {0}?', $interPreRe->ID_PREGUNTAS)]) ?> </li>
        <li><?= $this->Html->link(__('List Inter Pre Res'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Inter Pre Re'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="interPreRes view large-10 medium-9 columns">
    <h2><?= h($interPreRe->ID_PREGUNTAS) ?></h2>
    <div class="row">
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('ID PREGUNTAS') ?></h6>
            <p><?= $this->Number->format($interPreRe->ID_PREGUNTAS) ?></p>
            <h6 class="subheader"><?= __('ID RPTA') ?></h6>
            <p><?= $this->Number->format($interPreRe->ID_RPTA) ?></p>
        </div>
    </div>
</div>
