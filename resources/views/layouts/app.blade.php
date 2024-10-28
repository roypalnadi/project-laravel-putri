<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemesanan</title>
    <!-- Tambahkan CSS AdminLTE dan custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- Tambahkan file CSS lainnya jika diperlukan -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
    <div class="wrapper">
        <!-- Sidebar -->
        <x-sidebar />

        <!-- Konten Utama -->
        <x-header />
        <div class="content-wrapper">

            <section class="content">
                <div class="container-fluid">
                    @yield('content')
                </div>
            </section>
        </div>
    </div>

    <!-- Tambahkan JS AdminLTE dan custom JS -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
