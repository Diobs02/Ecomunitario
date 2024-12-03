
<?php


if(isset ($_POST['submit']))

{

//print_r ('Nome:' . $_POST['nome']);
//print_r ('<br>');
//print_r ('Email:' . $_POST['email']);
//print_r ('<br>');
//print_r ('Registro:' . $_POST['registro']);
//print_r ('<br>');
//print_r ('Sexo:' . $_POST['genero']);
//print_r ('<br>');
//print_r ('Data de Nascimento:' . $_POST['data_nascimento']);
//print_r ('<br>');
//print_r ('Cidade:' . $_POST['cidade']);
//print_r ('<br>');
//print_r ('Estado:' . $_POST['estado']);
//print_r ('<br>');
//print_r ('Endereço:' . $_POST['endereço']);


include_once ('src/config.php');


$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$registro = $_POST['registro'];
$sexo = $_POST['genero'];
$data_nasc = $_POST['data_nascimento'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$endereco = $_POST['endereço'];


$result = mysqli_query($conexao, "INSERT INTO usuarios(nome,email,telefone,registro,sexo,data_nasc, cidade, estado, endereço ) 
VALUES('$nome','$email', '$telefone', '$registro', '$sexo','$data_nasc','$cidade', '$estado','$endereco' )");



}



?>











<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/cadastro.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Formulário</title>
</head>



<body>
  <nav class="navbar">

    <a href="file:///C:/Users/Diogo/Desktop/Estudo.php/templates/login.html"><img src="src/img.png" alt="imagem deo ecomunitario" class="img-Cadastro"></a>
    <ul>

    <li><a href="file:///C:/xampp/htdocs/formulario-ecomunitario/Estudo.php/templates/home.html">Home</a></li>
      <li><a href="file:///C:/xampp/htdocs/formulario-ecomunitario/Estudo.php/formulario.">Cadastre-se</a></li>
      <li><a href="file:///C:/xampp/htdocs/formulario-ecomunitario/Estudo.php/templates/login.html">Login</a></li>
      <li><a href="#">Contato</a></li>
  
    </ul>

  </nav>

    <div class="box">
      <form action="formulario.php" method="POST">
         <fieldset>
            <legend><b>Cadastro</b></legend>
            <br>
            <div class="inputbox">
            <input type="text" name="nome" id="nome" class="inputUser" required>
            <label for="nome" class="labelInput" > Nome completo</label>
            </div>
            <br><br>
            <div class="inputbox">
                <input type="text" name="email" id="email" class="inputUser" required>
                <label for="nome" class="labelInput"> Email</label>
    
                </div>
                <br><br>
                <div class="inputbox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                    <label for="nome" class="labelInput"> Telefone </label>
        
                    </div>
                    <br><br>
                    <div class="inputbox">
                      <input type="text" name="registro" id="registro" class="inputUser" required>
                      <label for="registro" class="labelInput" > Numero de registro</label>
                      </div>
                    
                    <p>Sexo:</p>
                    <input type="radio" id="feminino" name="genero" value="feminino" required>
                    <label for="feminino">Feminino</label>
                    <br>
                    <input type="radio" id="masculino" name="genero" value="masculino" required>
                    <label for="masculino">Masculino</label>
                    <br>
                    <input type="radio" id="outro" name="genero" value="outro" required>
                    <label for="outro">Outro</label>
                    <br><br>
                  
                    
                      <label for="data_nascimento" > <b>Data de Nascimento:</b></label>
                      <input type="date" name="data_nascimento" id="data_nascimento" class="" required>
                      
                     
                      <br><br><br>

                      <div class="inputbox">
                        <input type="text" name="cidade" id="cidade" class="inputUser" required>
                        <label for="cidade" class="labelInput" > Cidade</label>
            
                        </div>
                        <br><br>

                        <div class="inputbox">
                          <input type="text" name="estado" id="estado" class="inputUser" required>
                          <label for="estado" class="labelInput"> Estado </label>
              
                          </div>
                          <br><br>

                          <div class="inputbox">
                            <input type="text" name="endereço" id="endereço" class="inputUser" required>
                            <label for="endereço" class="labelInput"> Endereço </label>
                
                            </div>
                            <br><br>
                            <input type="submit" name="submit" id="submit">

        </fieldset>


      </form>



    </div>


    <div class="footer">
 

      <div>
      <ul>
  
      <a href="https://www.linkedin.com/in/diogo-bezerra-a75986289/"><li> <i class="bi bi-linkedin"></i></li></a>
      <a href="https://www.instagram.com/"><li><i class="bi bi-instagram"></i></li></a>
      <a><li></li></a>
      <a><li></li></a>
    
      </ul>
    </div>
  
  
    </div>






</body>
</html>