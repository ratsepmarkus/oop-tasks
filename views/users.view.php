<?php require 'partials/head.php'; ?>

    <ul>
        <?php foreach ( $users as $user ) : ?>
            <li>
                <?= $user->name; ?>
                <a href="/users/delete?id=<?= $user->id; ?>">delete</a>
                <a href="/users/edit?id=<?= $user->id; ?>">edit</a>
            </li>
        <?php endforeach; ?>
    </ul>

    <form action="/users" method="POST">
        <input type="text" name="name">
        <button type="submit">submit</button>
    </form>

<?php require 'partials/footer.php'; ?>