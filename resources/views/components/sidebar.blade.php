<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

    <div class="container-sidebar">
        <div class="content-bar">
            <aside class="sidebar">
                <div class="container-user">
                    <img src="images/user.png" alt="User" class="user-img">
                    <div class="container-user-p">
                        <p class="user">Muhammad Nur Rizky</p>
                        <p class="user">Student At SMK Wikrama</p>
                    </div>
                </div>
                <h1>My Portfolio.</h1>
                <nav>
                    <ul>
                        <li><a href="/" class="nav-link" id="home">- Home</a></li>
                        <li><a href="/about" class="nav-link" id="about">- About Me</a></li>
                        <li><a href="/contact" class="nav-link" id="contact">- Contact</a></li>
                    </ul>
                </nav>
            </aside>
        </div>
    </div>
    
    <script>
    document.addEventListener('DOMContentLoaded', () => {
    const links = document.querySelectorAll('.nav-link');

    links.forEach(link => {
        link.addEventListener('click', () => {
            links.forEach(item => item.classList.remove('active'));
            link.classList.add('active');
        });
    });
});
    </script>

</body>
</html>
