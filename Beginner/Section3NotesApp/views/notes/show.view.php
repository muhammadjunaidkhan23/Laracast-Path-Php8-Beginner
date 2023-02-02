<?php require('views/partials/head.php') ?>
<?php require('views/partials/nav.php') ?>
<?php require('views/partials/banner.php') ?>




<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <!-- Replace with your content -->
        <div class="px-4 py-6 sm:px-0">
            <div class="h-96 rounded-lg border-4 border-dashed border-gray-200">
                <p class="mb-6">
                    <a href="/notes" class="text-blue-500">Back...</a>
                </p>
                <p> <?= htmlspecialchars($note['body']) ?></p>

            </div>
        </div>
        <!-- /End replace -->
    </div>
</main>
<?php require('views/partials/footer.php') ?>