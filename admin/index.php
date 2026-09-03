<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>SehatCare - Admin</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Font Awesome -->
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

    <style>
        .sidebar {
            width: 250px;
        }

        .main {
            margin-left: 250px;
        }

        @media (max-width: 768px) {
            .sidebar {
                width: 70px;
            }

            .sidebar span,
            .sidebar h5 {
                display: none;
            }

            .main {
                margin-left: 70px;
            }
        }
    </style>
</head>

<body class="bg-slate-50 text-slate-800">

<?php
include 'modul/sidebar.php';
$page = isset($_GET['page']) ? $_GET['page'] : '';
switch ($page) {
    case 'produk':
        include 'modul/produk.php';
        break;

    case 'konsultasi':
        include 'modul/konsultasi.php';
        break;

    default:
        include 'modul/default.php';
        break;
}
?>

</body>
</html>