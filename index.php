<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Facebook</title>
    <link rel="stylesheet" href="estilo/style.css">
</head>

<body>
    <header>
        <div class="center">
            <div class="logo">
                <h2>facebook</h2>
            </div>
            <form method="post" class="form-login">
                <div class="form-element">
                    <p>E-mail ou telefone:</p>
                    <input type="e-mail">
                </div><!-- Form Element -->
                <div class="form-element">
                    <p>Senha:</p>
                    <input type="password">
                </div><!-- Form Element -->
                
                <div class="form-element">
                    <input type="submit" name="acao" value="Entrar">
                </div><!-- Form Element -->
                <p class="esqueceu"><a href="#">Esqueceu sua senha?</a></p>
            </form><!-- Form Login -->
            <div class="clear"></div>
        </div><!-- Center -->
    </header>

    <main>
        <section>
            <div class="center">
                <div class="img-globe">
                    <h3>O Facebook ajuda você a se conectar e compartilhar com as pessoas que fazem parte da sua vida.
                    </h3>
                    <img src="imagens/globe.png" alt="Globo">
                </div>
                <div class="abrir-conta">
                    <h2>Abra uma conta</h2>
                    <h3>É gratuito e sempre será.</h3>
                    <form action="" class="criar-conta">

                        <div class="wd-50">
                            <input placeholder="Nome" type="text">
                        </div>

                        <div class="wd-50">
                            <input placeholder="Sobrenome" type="text">
                        </div>

                        <div class="wd-100">
                            <input placeholder="E-mail" type="email">
                        </div>

                        <div class="wd-100">
                            <input placeholder="Senha" type="password">
                        </div>
                        <div class="wd-100">
                            <h2 class="nasc">Data de Nascimento</h2>
                            <select name="nacimento-dia" class="nascimento">
                                <?php
                                    for($i = 1; $i <= 31; $i++){
                                ?>
                                <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                <?php } ?>
                            </select>
                            <select name="nacimento-mes" class="nascimento">
                                <option value="1">Janeiro</option>
                                <option value="2">Fevereiro</option>
                                <option value="3">Março</option>
                                <option value="4">Abril</option>
                                <option value="5">Maio</option>
                                <option value="6">Junho</option>
                                <option value="7">Julho</option>
                                <option value="8">Agosto</option>
                                <option value="9">Setembro</option>
                                <option value="10">Outubro</option>
                                <option value="11">Novembro</option>
                                <option value="12">Dezembro</option>
                            </select>
                            <select name="nacimento-ano" class="nascimento">
                                <?php for($i = 1960; $i <= 2006; $i++){
                                ?>
                                <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                <?php } ?>
                            </select>
                            <div class="why">
                                <a href="#"><p>Por que preciso informar minha data de nascimento?</p></a>
                            </div>
                        </div>

                        <div class="clear"></div>

                        <div>
                            <div class="input-radio">
                                <input type="radio" name="sexo" value="Feminino">
                                <h2>Feminino</h2>
                            </div><!-- Radio -->
                            <div class="input-radio">
                                <input type="radio" name="sexo" value="Masculino">
                                <h2>Masculino</h2>
                            </div><!-- Radio -->
                        </div>
                        <div class="politicas">
                            <p>Ao clicar em Cadastre-se, você concorda com nosso <a href="">Termos de Política de Dados e Política de Cookies</a>. Você pode receber notificações por SMS e pode cancelar isso quando quiser.</p>
                        </div>

                        <div class="wd-100">
                            <input type="submit" name="acao" value="Cadastre-se">
                        </div>

                        <div class="endform">
                            <p><a href="#">Criar uma Página</a> para uma celebridade, banda ou empresa.</p>
                        </div>

                    </form><!-- Criar Conta -->
                </div><!-- Abrir Conta -->
                <div class="clear"></div>
            </div><!-- Center -->
        </section>
        <footer>
            <div class="center">
                <a href="#">Português (Brasil)</a>
                <a href="#">English (US)</a>
                <a href="#">Espanhol</a>
                <a href="#">Frances (France)</a>
                <a href="#">Italiano</a>
                <a href="#">Deutsch</a>
            </div><!-- Center -->

            <div class="center rodap2">
                <a href="#">Cadastre-se</a>
                <a href="#">Entrar</a>
                <a href="#">Messenger</a>
                <a href="#">Facebook Lite</a>
                <a href="#">Celular</a>
                <a href="#">Encontrar Amigos</a>
                <a href="#">Pessoas</a>
                <a href="#">Páginas</a>
                <a href="#">Jogos</a>
                <a href="#">Locais</a>
                <a href="#">Marketplace</a>
                <a href="#">Vídeos</a>
                <a href="#">Grupos</a>
                <a href="#">Receitas</a>
                <a href="#">Esportes</a>
                <a href="#">Look</a>
                <a href="#">Moments</a>
                <a href="#">Instagram</a>
                <a href="#">Local</a>
                <a href="#">Sobre</a>
                <a href="#">Criar Anuncio</a>
                <a href="#">Criar Página</a>
                <a href="#">Desenvolvedores</a>
                <a href="#">Cameras</a>
                <a href="#">Privacidade</a>
                <a href="#">Cookie</a>
                <a href="#">Opções de anuncio</a>
                <a href="#">Temas</a>
                <a href="#">Ajuda</a>
            </div><!-- Center -->
            
            <div class="center rodap2 rodap">
                <p>Facebook por Jonh Dev ©️ 2022</p>
            </div>
        </footer>
    </main>
</body>

</html>