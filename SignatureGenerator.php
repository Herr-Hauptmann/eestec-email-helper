<?php
    include('partials/head.php');
    echo "<body>";
    include('partials/navbar.php');
?>

<div class="row justify-content-md-center">
    <div class="col-4">
        <form method="post" action="resources\views\potpisi\potpis.php">
            <div class="form-group">
                <label for="name">Ime i prezime</label>
                <input type="text" class="form-control" id="name" name='name'>
                <label for="pozicija">Opis pozicije</label>
                <input type="text" class="form-control" id="pozicija" name='pozicija'>
                <label for="email-eestec">EESTEC email adresa</label>
                <input type="email" class="form-control" id="email-eestec" name='email-eestec'>
                <label for="email-private">Privatna email adresa</label>
                <input type="email" class="form-control" id="email-private]" name='email-private'>
                <label for="link">Broj telefona</label>
                <input type="text" class="form-control" id="broj" name='broj'>
                <input type="submit" class="btn btn-primary mt-2" name='submit'>
            </div>
        </form>
    </div>
</div>
</body>
