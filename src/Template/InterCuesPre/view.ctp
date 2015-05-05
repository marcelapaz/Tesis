<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Inter Cues Pre'), ['action' => 'edit', $interCuesPre->ID_CUESTIONARIO]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Inter Cues Pre'), ['action' => 'delete', $interCuesPre->ID_CUESTIONARIO], ['confirm' => __('Are you sure you want to delete # {0}?', $interCuesPre->ID_CUESTIONARIO)]) ?> </li>
        <li><?= $this->Html->link(__('List Inter Cues Pre'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Inter Cues Pre'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="interCuesPre view large-10 medium-9 columns">
    <h2><?= h($interCuesPre->ID_CUESTIONARIO) ?></h2>
    <div class="row">
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('ID CUESTIONARIO') ?></h6>
            <p><?= $this->Number->format($interCuesPre->ID_CUESTIONARIO) ?></p>
            <h6 class="subheader"><?= __('ID PREGUNTAS') ?></h6>
            <p><?= $this->Number->format($interCuesPre->ID_PREGUNTAS) ?></p>
        </div>
    </div>
</div>
