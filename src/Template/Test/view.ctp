<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Test'), ['action' => 'edit', $test->ID_TEST]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Test'), ['action' => 'delete', $test->ID_TEST], ['confirm' => __('Are you sure you want to delete # {0}?', $test->ID_TEST)]) ?> </li>
        <li><?= $this->Html->link(__('List Test'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Test'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="test view large-10 medium-9 columns">
    <h2><?= h($test->ID_TEST) ?></h2>
    <div class="row">
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('ID TEST') ?></h6>
            <p><?= $this->Number->format($test->ID_TEST) ?></p>
            <h6 class="subheader"><?= __('ID PACIENTE') ?></h6>
            <p><?= $this->Number->format($test->ID_PACIENTE) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('FECHA HORA') ?></h6>
            <p><?= h($test->FECHA_HORA) ?></p>
        </div>
    </div>
</div>
