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
        main{
            display: flex;
            width: 100%;
            height: 100%;
            flex-direction: column;
            padding: 30px;
        }
        .section{
            display: flex;
            width: 100%;
            height: fit-content;
            margin: 10px 0px;
        }
        .center{
            align-items: center;
            justify-content: center;
        }
        .column{
            flex-direction: column
        }

.center {
  margin: auto;
  width: 50%;
  padding: 10px;
}


/* The search field */
#myInput {
  box-sizing: border-box;
  background-image: url('searchicon.png');
  background-position: 14px 12px;
  background-repeat: no-repeat;
  font-size: 16px;
  padding: 14px 20px 12px 45px;
  border: 1px solid #ddd;
  width: 14em;
}

/* The search field when it gets focus/clicked on */
#myInput:focus {outline: 3px solid #ddd;}

/* The container <div> - needed to position the dropdown content */
.scroll, .ingredientes-content {
  position: relative;
  width:50px;
  display: inline-block;
}
/* Dropdown Content (Hidden by Default) */
.ingredientes-content {
  display: block;
  width: 14em;
  background: #F0F8FF;
  height: 200px;
  overflow-y: scroll;
  scroll-behavior: smooth;
}

.input {
    margin: 0 0 0 10px;
}

.ingredientes-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: flex;
  height: 40%;
  justify-content: left;
  align-items: center;
  font-size: 1.2em;
}


/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #f1f1f1}

/* Show the dropdown menu (use JS to add this class to the .dropdown-content container when the user clicks on the dropdown button) */
.show {display:block;}
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
    <script>
        console.log('Olá Mundo!');

function filterFunction(){
    var input, filter, ul, li, a, i;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    div = document.getElementById("myDropdown");
    a = div.getElementsByTagName("a");
    for (i=0; i < a.length; i++){
        txtValue = a[i].textContent || a[i].innerText;
        if(txtValue.toUpperCase().indexOf(filter) > -1){
            a[i].style.display = "";
        } else {
            a[i].style.display = "none";
        }
    }
}
    </script>
</body>
</html>