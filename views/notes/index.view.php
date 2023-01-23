<?php require('views/partials/head.php') ?>

    <div class="min-h-full">

        <?php
        require('views/partials/nav.php');
        require('views/partials/banner.php');
        ?>

        <main>
            <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
                <ul>
                    <?php
                    foreach ($notes as $note): ?>
                        <li class="text-blue-500 hover:underline">
                            <a href="/note?id=<?= $note['id'] ?>">
                                <?= htmlspecialchars($note['body']) ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
                <p class="mt-6 text-blue-500 hover:underline"><a href="notes/create">Create Note</a></p>
            </div>
        </main>
    </div>

<?php require('views/partials/footer.php') ?>