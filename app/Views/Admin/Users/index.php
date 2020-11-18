<?= $this->extend("layouts/default") ?>

<?= $this->section('title') ?><?= lang('AdminUsers.title') ?><?= $this->endSection() ?>

<?= $this->section("content") ?>

    <h1 class="title"><?= lang('AdminUsers.title') ?></h1>
    
    <a class="button" href="<?= site_url("/admin/users/new") ?>"><?= lang('AdminUsers.new') ?></a>
    
    <?php if ($users): ?>
    
        <table class="table">
            <thead>
                <tr>
                    <th><?= lang('AdminUsers.name') ?></th>
                    <th><?= lang('AdminUsers.email') ?></th>
                    <th><?= lang('AdminUsers.active') ?></th>
                    <th><?= lang('AdminUsers.administrator') ?></th>
                    <th><?= lang('AdminUsers.created_at') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($users as $user): ?>
                
                    <tr>
                        <td>
                            <a href="<?= site_url("/admin/users/show/" . $user->id) ?>">
                                <?= esc($user->name) ?>
                            </a>
                        </td>
                        <td><?= esc($user->email) ?></td>
                        <td><?= $user->is_active ? lang('AdminUsers.yes') : lang('AdminUsers.no') ?></td>
                        <td><?= $user->is_admin ? lang('AdminUsers.yes') : lang('AdminUsers.no') ?></td>
                        <td><?= $user->created_at ?></td>
                    </tr>
                    
                <?php endforeach; ?>
            </tbody>
        </table>

        <?= $pager->simpleLinks() ?>
        
    <?php else: ?>
        
        <p><?= lang('AdminUsers.no_users_found') ?>.</p>
        
    <?php endif; ?>

<?= $this->endSection() ?>









