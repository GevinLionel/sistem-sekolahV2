<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Siswa</title>
    <link rel="stylesheet" href="/css/output.css">
</head>
<body class="flex flex-col min-h-screen bg-gray-100">
    <!-- Header start -->
    <?php require_once '../app/views/layouts/partials/header.php'; ?>
    <!-- <! -- Header end -->

    <!-- Main  start -->
        <main class="flex-grow container mx-auto px-4 py-8">
            <?php require_once '../app/views/layouts/partials/content.php'; ?>
        </main>

    <!-- Main end -->

    <!-- Footer start -->
        <?php require_once '../app/views/layouts/partials/footer.php'; ?>
    <!-- Footer end -->

   
    </header>
</body>
</html>