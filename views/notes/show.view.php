<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/nav.php') ?>
<?php require base_path('views/partials/banner.php') ?>

<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <p class="mb-6">
            <a href="/notes" class="text-blue-500 underline">← back</a>
        </p>
        <p><?= htmlspecialchars($note['body']) ?></p>
        <form method="POST">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="id" value="<?= $note['id'] ?>">
            <button class="rounded-full bg-red-600 mt-[2rem] px-[.5rem]">delete note</button>
        </form>
    </div>
</main>

<?php require base_path('views/partials/footer.php') ?>
