
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <header>
        <nav>
            <div class="logo"><img src="img/usuario.png"></div>
            <ul class="lista">
                <li>Elemento 1</li>
                <li>Elemento 2</li>
                <li>Elemento 3</li>
                <li>Elemento 4</li>
            </ul>
        </nav>
        <script>
            function toggleList() {
                var container = document.querySelector(".container");
                container.classList.toggle("active");
            }
        </script>
    </header>
    <main>
   <div class="centro">
        <form action='php/registro.php' method='POST'>
           <h1>Informacion de Registro</h1>
            <div class="gg">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" placeholder="Nombres" name="nombre" required>
                    <label for="floatingInput">Nombres</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingPassword" placeholder="Apellidos" name="apellidos" required>
                    <label for="floatingPassword">Apellidos</label>
                </div>
            </div>
           <div class="gg">
                <div class="form-floating mb-3">
                    <input type="number" class="form-control" id="floatingInput" placeholder="Identificacion" name="ident" required>
                    <label for="floatingInput">Identificacion</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="floatingPassword" placeholder="name@example.com" name="email" required>
                    <label for="floatingPassword">Email address</label>
                </div>
           </div>
           <div class="gg">
                <select class="form-select mb-3" aria-label="Default select example" name="estado" required>
                    <option selected>Estado Civil</option>
                    <option value="solater@">Solter@</option>
                    <option value="casad@">Casad@</option>
                    <option value="union libre">Union Libre</option>
                </select>
                <div class="form-floating mb-3">
                    <input type="date" class="form-control" id="floatingPassword" placeholder="Fecha Nacimiento" name="fecha" required>
                    <label for="floatingPassword">fecha</label>
                </div>
           </div>
           <button>Registrar</button>
        </form> 
        
   </div>
   
</main>
</body>

<footer>
    <label class="text">Copyright © Todos los derechos reservados</label>
</footer>
</html>