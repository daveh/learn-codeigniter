<div class="field">
    <label class="label" for="description"><?= lang('Tasks.description') ?></label>
    <input class="input" type="text" name="description" id="description"
           value="<?= old('description', esc($task->description)) ?>">
</div>
