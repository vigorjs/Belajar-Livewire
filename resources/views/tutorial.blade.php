<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tutorial Livewire</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    @livewireStyles
</head>

<body>
    <div class="container py-5">
        <h2>Ini adalah component livewire untuk belajar livewire properti</h2>
        @livewire('belajar')
        <h2 class="mt-5">Ini adalah component livewire untuk belajar livewire action</h2>
        @livewire('belajar-action')
    </div>
    @livewireScripts
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
