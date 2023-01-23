<?php require('views/partials/head.php') ?>

    <div class="min-h-full">

        <?php
        require('views/partials/nav.php');
        require('views/partials/banner.php');
        ?>

        <main>
            <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
                <h3><?= htmlspecialchars($note['body']) ?></h3>
                <a class="text-blue-500 hover:underline" href="/notes">
                    ←back to notes
                </a>
            </div>
        </main>
    </div>

<?php require('partials/footer.php') ?>