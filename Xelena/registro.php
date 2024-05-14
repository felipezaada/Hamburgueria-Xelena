<?php
session_start();
?>

<!DOCTYPE HTML>
<html>

<?php

include "comportamentos.php";

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cefet";
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

if ($_SERVER['REQUEST_METHOD'] == "POST") {
  $nome = $_POST["name"];
  $email = $_POST["email"];
  $senha = $_POST["senha"];
  $data_cadastro = date("y-m-d");
}

function verifica_email($email, PDO $pdo)
{

  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    return false;
  }

  $sql = "SELECT COUNT(*) FROM usuario WHERE email = :email";
  $stmt = $pdo->prepare($sql);

  $stmt->bindValue(":email", $email);

  $stmt->execute();

  $numero_linhas = $stmt->fetchColumn();

  return $numero_linhas > 0;
}

if (verifica_email($email, $conn)) {
  echo "O email $email já existe no sistema!";
  header("Refresh: 5; URL=sessionEnd.php");
} else {
  try {

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    inserirUsuario($conn, $nome, $email, $senha, $data_cadastro);
    getCodigo($conn, $email, $senha);

    $_SESSION['nome'] = $nome;
    $_SESSION['id'] = $_SESSION['user_ID'];

    echo "Usuário cadastrado com sucesso! Seu ID " . $_SESSION['user_ID'];
  } catch (PDOException $e) {

    error_log("Erro no cadastro: " . $e->getMessage(), 0);
    echo "Falha no cadastro. Tente novamente mais tarde.";
  }

  $conn = null;
  header("Refresh: 0.5; URL=welcome.php"); // Redirecionamento

}

?>

</html>