<html>

<body>

    <ul>
        <?php foreach ($tasks as $task) : ?>
            <li><?php echo $task->description; ?></li>
        <?php endforeach; ?>
    </ul>

</body>

</html>