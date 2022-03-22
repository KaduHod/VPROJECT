<!DOCTYPE html>
<html lang ="pr-br">
<head>
    <meta charset = "UTF-8">

    <meta name = "viewport" content = "width=device-width, initial-scale=1.0">

    <meta http-equiv = "X-UA-Compatible" content = "ie=edge">

    

    <title>@yield('title')</title>  
    

    <link rel  = "preconnect" href = "https://fonts.googleapis.com">
    <link rel  = "preconnect" href = "https://fonts.gstatic.com" crossorigin>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script> 

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Fredoka:wght@300&display=swap" rel="stylesheet">



    <link href="/css/app.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/header.css" content="width=device-width,initial-scale-1.0">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="/css/footer.css">
    <link rel="stylesheet" href="/css/main.css">
    
    
    
    <style>
        *{
            margin:0;
            padding: 0;
            text-decoration: none;
        }
    </style>
    
</head>

<body>
    <div id="menu">
        <ion-icon name="menu-outline"></ion-icon>
    </div>
    
    <div id="sidebar" class="sidebar hiddenSidebar">
        <ul>
            <ion-icon class='iconClose' id="closeSidebar" name="close-outline"></ion-icon>
            <ion-icon class="icon" name="home-outline"></ion-icon>
            <ion-icon class="icon"  name="pizza-outline"></ion-icon>
            <ion-icon class="icon" name="call-outline"></ion-icon>
            <ion-icon class='icon' name="information-circle-outline"></ion-icon>
        </ul>
    </div>
    <header>
        

    </header>
    <main>
        @yield('content')
    </main>    
    <footer>
        
    </footer>
    
    

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script>
        let menu = document.getElementById('menu')
        
            menu.addEventListener('click',handleMenu)

        let closeSidebar = document.getElementById('closeSidebar')
            closeSidebar.addEventListener('click', handleMenu)

        function handleMenu(){
            var sidebar = document.getElementById('sidebar')
            let verificaSidebar = this.id !== 'closeSidebar' ? mostraSidebar() : escondeSidebar()
        }
        function mostraSidebar(){
            sidebar.classList.remove('hiddenSidebar')
            sidebar.classList.add('showSidebar')
            return true
        }
        function escondeSidebar(){
            sidebar.classList.remove('showSidebar')
            sidebar.classList.add('hiddenSidebar')
            return false
        }
    </script>
</body>
</html>