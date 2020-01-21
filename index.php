<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Merienda&display=swap" rel="stylesheet">  

    <title>LocalizaCão</title>
  </head>
  <body>
  <header>
    <!-- nav -->
    <?php
        require_once("./includes/nav.php");
    ?>

    <!-- banner -->
    <div class="banner"></div>

  </header>


<main>

<section class="section section-light">
        <h3>Como funciona</h3>
        <p>
            A LocalizaCão conta com a ajuda de toda comunidade para reunir tutores com animais perdidos ou abandonados.
            Confira no mapa!

        </p>
    </section>

    <div class="box">

    <div class="selectors">
        
        <select>
            <option>animal</option>
            <option>cachorro</option>
            <option>gato</option>
            
        </select>
        
        <select>
            <option>tamanho</option>
            <option>grande</option>
            <option>medio</option>
            <option>pequeno</option>
            
            
        </select>
        
        <select>
            <option>achados ou perdidos</option>
            <option>achados</option>
            <option>perdidos</option>
        </select>
        
        <select>
            <option>estado</option>
            <option>sao paulo</option>
            <option>parana</option>
            
        </select>
        
        <select>
            <option>cidade</option>
            <option>sao paulo</option>
            <option>curitiba</option>
            
        </select>
        
        <input class="form-control" placeholder="nome do bichinho? Digite aqui." type="text">
        
        <input class="btn" type="submit" value="procurar"></input>
    </div>
       
    </div>

    <section class="section section-light">
        <h3>Mapas</h3>
        <p>

            Se você precisa de ajuda para encontrar um animal, um tutor ou apenas gostaria de ajudar. É muito importante
            se cadastrar para conseguirmos entrar em contato com você.
            Faça seu login ou cadastre-se.
        </p>
    </section>

    <div class="maps">
        <img src="images/maps1 copy.jpg" style="width: 45%;">

    </div>


    

    <section class="section section-light">
        <p>

            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae quasi doloribus itaque fugiat, quibusdam totam
            maxime neque illo nostrum similique ex cum quas labore voluptates dolorem aspernatur, quis ipsam quos id
            quia nam, non facere laboriosam error? Maiores dolores minima explicabo delectus fugiat amet necessitatibus!
            Sapiente suscipit vero quos, earum provident eveniet quidem labore? In placeat soluta, fuga doloremque
            numquam nisi amet quaerat! Eius ipsa itaque, minima aliquam explicabo quam nobis aperiam animi repudiandae
            nulla commodi cupiditate tenetur amet autem adipisci ut repellendus, similique, cum totam sapiente facere
            velit quod eligendi. Reiciendis doloremque cumque tempore ratione eius corporis magnam neque.
        </p>
    </section>


</main>




  <!-- Footer -->
<footer>
    <?php
        require_once("./includes/footer.php");
    ?>
</footer>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="node_modules/jquery/jquery.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>
  </body>
</html>