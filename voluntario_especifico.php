<?php
session_start();
//include('verifica_login.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voluntários Específicos e Projetos</title>
    <link rel="stylesheet" type="text/css" href="style2.php">
	<style type="text/css"> 
    a:link 
    { 
     text-decoration:none; 
    } 
	</style>
</head>
<body>
    <!--Aqui começa o cabeçalho do site, essa parte é igual em todas as páginas-->
<?php
	include("_header.php");
?>
    <!--Fim do cabeçalho-->
    <div>
	  <hr>
        <h2>Cadastro de Voluntários Específicos e Projetos</h2>
        <p id="subtitulo">Se você tem uma especialidade e deseja colaborar conosco ou implementar um projeto, preencha o formulário abaixo e entraremos em contato. </p>
    </div>
    <!--em action colocar página para qual as infomações do formulário serão enivadas-->
    <form action="processa_especifico.php" method="POST" >
        <fieldset class="grupo">
            <div class="campo">
                <label for="nome"><strong>Nome:</strong></label>
                <input type="text" name="nome" id="nome" required>
                <label for="sexo"><strong>Sexo:</strong></label>
                <select name="sexo" id="sexo" required>
                    <option selected disabled value="">Selecione</option>
                    <option>Masculino</option>
                    <option>Feminino</option>
                </select>
            </div>

            <div class="campo">
                <label><strong>CPF:</strong></label>
                <input type="number" name="cpf" id="cpf" required>
                <label><strong>Data de nascimento:</strong></label>
                <input type="date" name="date2" id="date2" required>
                <br>
                <label><strong>Endereço:</strong></label>
                <input type="text number" name="endereço" id="endereço" required>
                <label><strong>Cidade:</strong></label>
                <input type="text" name="cidade" id="cidade" required>
                <label><strong>Telefone:</strong></label>
                <input type="number" name="telefone" id="telefone">
            </div>
            <div class="campo">
                <label><strong>Email:</strong></label>
                <input type="email" name="email" id="email"required><br>
                <label><strong>Disponibilidade de Horário:</strong></label>
                <input type="text" name="horario" id="horario"required>
            </div>
            <div class="campo">
                <label><strong>Descreva sua Especialização:</strong></label>
                <input type="text" name="especializacao" id="especializacao" required>
            </div>
            <div class="campo">
                <label><strong>Deseja implementar um Projeto?</strong></label>
                <input type="checkbox" name="projeto" id="projeto">
            </div>
            <div class="campo">
                <label><strong>Se sim, descreva o projeto:</strong></label>
                <input type="text" name="projdescricao" id="projdescricao">
            </div>

        </fieldset>
        <b><button type="submit" name="enviar" class="botao" >Enviar</button>
    </form>

<hr width="100%">
    <section id="contato">
        <p><strong>CECOI Vó Maria Félix</strong><br>
        Rua Carlos Nunes de Paula, 1172 - Jardim Imperial - São José dos Campos <br>
        Tel: (12) 3966 2823 <br>
        <br>
        <a class="face" href="https://www.facebook.com/cecoivomariafelix" target="_blank"><img src="imagens\facebook.png" width="50px"></a>
        <a class="youtube" href="https://www.youtube.com/channel/UCB-99VOkEEM07VF4VVsP7_g" target="_blank"><img src="imagens\youtube.png" width="50px"></a>
    </section>
    <hr width="100%">
    <footer>Desenvolvido por Grupo Rocket 2021</footer>
</body>
</html>