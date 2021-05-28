<?php
    include('partials/head.php');
    echo "<body>";
    include('partials/navbar.php');
?>

<div class="row mx-auto">
    <div class="col-4">
        <form method="post" action="products/email.php">
            <div class="form-group">
                <label for="email">Email addresa</label>
                <input type="email" class="form-control" id="email" name='email'>
                <label for="name">Ime</label>
                <input type="text" class="form-control" id="name" name='name'>
                <label for="link">Link</label>
                <input type="text" class="form-control" id="link" name='link'>
                <input type="submit" class="btn btn-primary mt-2" name='submit'>
            </div>
        </form>
    </div>
</div>
</body>