<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>
    {{-- LINK Yang menyambungkan Ke Css Pada Folder Public --}}
    <link rel="stylesheet" href="../css/style.css">
    {{-- Link CDNJS FontAwesome  --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

    {{-- Container --}}
    <div class="container">
        <div class="container-sidebar">
            {{-- Nav Bar --}}
            <x-sidebar/>
        </div>
        <main class="content">
            {{-- Content yield --}}
            @yield('content')

        </main>
    </div>
    
</body>
</html>
