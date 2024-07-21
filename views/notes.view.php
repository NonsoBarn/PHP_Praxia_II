<?php require('partials/head.php') ?>


<!-- Navbar -->
<?php require('partials/nav.php') ?>

<!-- banner -->
<?php require('partials/banner.php') ?>


<main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <ul>
            <?php foreach ($notes as $note) : ?>
                <li>
                    <a href="/note?id=<?= $note['id'] ?>" class="text-blue-500 hover:underline cursor:point"><?= htmlspecialchars($note['body']) ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>

        <p class="mt-6">
            <a href="/note/create" class="text-blue-500 hover:underline">Create Note</a>
        </p>
    </div>
</main>

<?php require('partials/footer.php') ?>