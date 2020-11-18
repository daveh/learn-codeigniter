<?= $this->extend("layouts/default") ?>

<?= $this->section("title") ?>Tasks<?= $this->endSection() ?>

<?= $this->section("content") ?>

    <h1>Tasks</h1>
    
    <a href="<?= site_url("/tasks/new") ?>">New task</a>

    <div>
        <label for="query">Search</label>
        <input name="query" id="query">
    </div>

    <?php if ($tasks): ?>
    
        <ul>
            <?php foreach($tasks as $task): ?>
            
                <li>
                    <a href="<?= site_url("/tasks/show/" . $task->id) ?>">
                        <?= esc($task->description) ?>
                    </a>
                </li>
                
            <?php endforeach; ?>
        </ul>

        <?= $pager->simpleLinks() ?>
        
    <?php else: ?>
        
        <p>No tasks found.</p>
        
    <?php endif; ?>

    <script src="<?= site_url('/js/auto-complete.min.js') ?>"></script>
    
    <script>
        var searchUrl = "<?= site_url('/tasks/search?q=another') ?>";
        
        document.getElementById('query').onclick = function(e) {
            
            var request = new XMLHttpRequest();
            
            request.open('GET', searchUrl, true);
            
            request.onload = function() {
                
                console.log(this.response);
                
                data = JSON.parse(this.response);
                
                console.log(data);
            };
            
            request.send();
        };
    </script>
    
<?= $this->endSection() ?>
















