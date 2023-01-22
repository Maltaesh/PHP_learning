<?php require('partials/head.php') ?>

    <div class="min-h-full">

        <?php
        require('partials/nav.php');
        require('partials/banner.php');
        ?>

        <main>
            <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
                <ul>
                    <?php
                    foreach ($notes as $note): ?>
                        <li class="text-blue-500 hover:underline">
                            <a href="/note?id=<?= $note['id'] ?>">
                                <?= $note['body'] ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </main>
    </div>

<?php require('partials/footer.php') ?>