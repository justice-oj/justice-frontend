<?php

use www\widgets\common\GoogleAdSenseWidget;
use www\widgets\common\PaginationWidget;

$presenter = new \www\presenters\SubmissionPresenter();
?>

<div class="ui basic segment">
    <?= GoogleAdSenseWidget::widget() ?>
</div>
<h2 class="ui header">Submissions</h2>
<table class="ui selectable striped celled table">
    <thead>
    <tr>
        <th class="one wide">#</th>
        <th class="two wide">User</th>
        <th class="three wide">Problem</th>
        <th class="one wide">Language</th>
        <th class="two wide">Status</th>
        <th class="one wide">Time</th>
        <th class="one wide">Memory</th>
        <th class="two wide">Submit Time</th>
    </tr>
    </thead>
    <tbody>
    <?php
    foreach ((array) $records as $record) {
        echo <<< SUBMISSION
    <tr>
        <td>{$record->id}</td>
        <td>
        <i class="{$record->user->country} flag"></i>
        <a href="/profile?name={$record->user->username}" target="_blank">{$record->user->username}</a>
        </td>
        <td>
        <a href="/problem/?problem_id={$record->problem->id}" target="_blank">{$record->problem->title}</a>
        </td>
        <td>{$presenter->showLanguage($record->language)}</td>
        <td><a href="/submission?id={$record->id}" target="_blank">{$presenter->showStatus($record->status)}</a></td>
        <td>{$record->runtime} ms</td>
        <td>{$record->memory} MB</td>
        <td>{$record->created_at}</td>
    </tr>
SUBMISSION;
    }
    ?>
    </tbody>
</table>
<?= PaginationWidget::widget(['pagination' => $pagination]) ?>
<div class="ui basic segment">
    <?= GoogleAdSenseWidget::widget() ?>
</div>