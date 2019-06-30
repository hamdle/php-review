<html>
<head>
<title>PHP</title>
<style>
    h1 { background: gray; }
</style>
</head>
    <h1><?php echo 'Hello ' . htmlspecialchars($_GET['cat']); ?></h1>
</html>