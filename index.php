<!DOCTYPE html>
<html lang="pt_br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Larics</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="assets/CSS/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Sigmar&display=swap" rel="stylesheet">

</head>

<body>
    <header>
        <div class="top">
            <img id="logo" src="assets/imagem/itens.png" alt="">
            <nav class="menu">
                <a id="m" href="#"> Home</a>
                <a id="m" href="#">Cardápio</a>
                <a id="m" href="#">Nossa Vivência</a>
            </nav>
            <img id="login" src="assets/imagem/itens02.png" alt="">
            <img id="sacolinha" src="assets/imagem/sacolinha.png" alt="">
        </div>
        <img id="ima" src="assets/imagem/pburguer.png" alt="">
    </header>

    <main>
     
        <div class="faixa"></div>

        <section class="formulario">
            <form method="post" class="form">
                <div id="faixacinza"></div>


                <div class="container">
                    <h3 id="h3">Tá de Larics?</h3>
                    <div class="linha">
                        <label>
                            <input class="caixa" type="radio" name="fome" value="sim"><a>Mano, adivinhou muito</a> 
                        </label>
                        <label>
                            <input class="caixa" type="radio" name="fome" value="nao"> <a>Nan, tô de boas</a>
                        </label>
                    </div>
                    <h3 id="h3">Com uma graninha a mais?</h3>
                    <div class="linha">
                        <label>
                            <input class="caixa" type="radio" name="dinheiro" value="sim"> <a>Tenho algum</a>
                        </label>
                        <label>
                            <input class="caixa" type="radio" name="dinheiro" value="nao"> <a>Pô, tô zeradex</a>
                        </label>
                    </div>
                    <button id="botao" type="submit">Enviar</button>
                </div>
            </form>
        </section>

        <div class="php">

            <h3 id="pro">PROMOÇÕES</h3>

            <div class="container01">
                <div id="imagem">
                    <img id="img" src="assets/imagem/ERRO.png" alt="">
                </div>

                <div class="cupom">

                    <div id="faixa-cinza"></div>
                    <h3>Cupom</h3>

                    <?php


                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $fome = isset($_POST['fome']) ? $_POST['fome'] : " ";
                        $dinheiro = isset($_POST['dinheiro']) ? $_POST['dinheiro'] : " ";
                        if ($fome == 'sim' && $dinheiro == 'sim') {
                            echo "<p class='texto'>Então vêm fazer um pedido, com a gente como você é parceria toma um cupom de 20% no nosso “combo olhamaefiqueichique”</p>";
                            echo "<script>document.getElementById('img').src ='assets/imagem/lanche01.png';</script>";
                            echo "<button class='bphp'>LARICS20</button>";
                        } else if ($fome == 'sim' && $dinheiro == 'nao') {
                            echo "<p class='texto'>Pô, a gente entende! <br>Final do mês é difícil, as vezes falta.Mas nossos clientes não ficam de larics, toma aqui um cupon de desconto 30% no nosso bigcombo larics!</p>";
                            echo "<script>document.getElementById('img').src ='assets/imagem/lanche02.png'; console.log('02')</script>";
                            echo "<button class='bphp'>LARICS30</button>";
                        } else {
                            echo "<p class='texto'>Sem problema! Aqui a gente tem o combo “tô de boas”, ele é exatamente  o que você quer sem saber o que quer, mas a gente sabe.E pra você que ta de boas 20% de desconto.</p>";
                            echo "<script>document.getElementById('img').src ='assets/imagem/lanche03.png';</script>";
                            echo "<button class='bphp'>LARICS30</button>";
                        }
                    } else {
                        echo "<p class='texto'>Pô, veja bem a parada que você esta perdendo. <br>
                        Dá uma rolada pra cima, responde se ta de larics e qual sua condição atual, que nós vamos achar um combo pra você.</p>";
                        echo "<script>document.getElementById('img').src ='assets/imagem/ERRO.png';</script>";
                        echo "<button class='bphp'>Confia</button>";
                        
                    }
                    ?>
                </div>
            </div>
            </section>


    </main>
    <footer>

    </footer>

</body>

</html>