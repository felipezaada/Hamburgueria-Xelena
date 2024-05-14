<?php
session_start();
error_reporting(0);
?>

<!DOCTYPE HTML>
<html>

<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cefet";
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

if ($_SERVER['REQUEST_METHOD'] == "POST") {

  $email = $_POST["email"];
  $senha = $_POST["senha"];
  $data_ultimo_login = date("y-m-d");
}

function validaLogin($email, $senha, PDO $pdo)
{

  $sql = "SELECT codigo, nome FROM usuario WHERE email = :email AND senha = :senha;";
  $stmt = $pdo->prepare($sql);

  //Vincular parametros aos valores
  $stmt->bindValue(":email", $email);
  $stmt->bindValue(":senha", $senha);

  if (!$stmt->execute()) {
    throw new Exception("Erro ao executar consulta de login");
  }

  $usuario = $stmt->fetch();

  if ($usuario) {
    $_SESSION = $usuario;
    return true;
  }

  return false;
}


function updateUltimoDiaOn_LOGIN(PDO $pdo, $user_ID)
{
  $dataAtual = date("y-m-d");
  $sql = "UPDATE usuario SET ultimo_login = :data_ultimo_login WHERE codigo = :id_de_usuario";
  $stmt = $pdo->prepare($sql);

  $stmt->bindValue(":id_de_usuario", $user_ID);
  $stmt->bindValue(":data_ultimo_login", $dataAtual);

  if (!$stmt->execute()) {
    return false;
  }
  return true;
}


try {

  if (!validaLogin($email, $senha, $conn)) {
    echo "O email ou senha incorretos!";
    header("Refresh: 1; URL=sessionEnd.php");
  } else {

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    updateUltimoDiaOn_LOGIN($conn, $_SESSION['codigo']);
    $_SESSION['id'] = $_SESSION['codigo'];
    header("Refresh: 0; URL=welcome.php");
  }
} catch (PDOException $e) {
  echo $conn . "<br>" . $e->getMessage();
} finally {
  $conn = null;
}
?>

</html>