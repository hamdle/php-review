<?php require 'partials/head.php'; ?>

    <h1>My Tasks</h1>

    

    <ul>
        <?php foreach ($tasks as $task) : ?>

            <li>
                
                <?php if ($task->completed) : ?>

                    <strike><?php echo $task->description; ?></strike>
                
                <?php else : ?>

                    <?php echo $task->description; ?>

                <?php endif; ?>
            
            </li>

        <?php endforeach; ?>

    </ul>

<?php require 'partials/footer.php'; ?>