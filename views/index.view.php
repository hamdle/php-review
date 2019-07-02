<?php require 'partials/head.php'; ?>

    <h1>Submit your name</h1>

    <form method="POST" action="/names">
        <input name="name" type="text"></input>
        <button type="submit">Submit</button>
    </form>


<?php require 'partials/footer.php'; ?>