<!DOCTYPE html>
  <html>
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width">
      <title>Mirror Fashion</title>
      <link rel="stylesheet" href="css/produtos.css">
      <link rel="stylesheet" href="css/cabecalho.css">
      <link rel="stylesheet" href="css/rodape.css">
      <link rel="stylesheet" href="css/reset.css">
      <link rel="stylesheet" href="css/estilos.css">
      <link rel="stylesheet" href="css/mobile.css" media="(max-width: 939px)">

    </head>
    <body>
      <?php
        include ("cabecalho.php");
        ?>

      <div class="container">
        <div class="produto">
          <h1>Fuzzy Cardigan</h1>
          <p>por apenas R$ 129,00</p>
          <form>
            <fieldset class="cores">
              <legend>Escolha a cor:</legend>
              <input type="radio" name="cor" value="verde" id="verde" checked>
              <label for="verde">
                <img src="img/produtos/foto2-verde.png" alt="verde">
              </label>
              <input type="radio" name="cor" value="rosa" id="rosa">
              <label for="rosa">
                <img src="img/produtos/foto2-rosa.png" alt="rosa">
              </label>
              <input type="radio" name="cor" value="azul" id="azul">
              <label for="azul">
                <img src="img/produtos/foto2-azul.png" alt="azul">
              </label>
            </fieldset>

            <fieldset class="tamanhos">
              <legend>Escolha o tamanho:</legend>
              <input type="range" min="36" max="46" value="42" step="2"
              name="tamanho" id="tamanho">
            </fieldset>
            <input type="submit" class="comprar" value="Comprar">
          </form>
        </div>
      </div>

      <?php
        include ("rodape.php");
       ?>
    </body>
</html>