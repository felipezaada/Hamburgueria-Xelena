<!DOCTYPE HTML>
<html>
<?php
function inserirUsuario($pdo, $nome, $email, $senha, $data_cadastro)
{
  try {

    $sql = "INSERT INTO usuario(nome, email, senha, data_cadastro, ultimo_login) 
                VALUES (:nome, :email, :senha, :data_cadastro, '');";
    $stmt = $pdo->prepare($sql);

    // Vincular parâmetros aos valores
    $stmt->bindValue(":nome", $nome);
    $stmt->bindValue(":email", $email);
    $stmt->bindValue(":senha", $senha);
    $stmt->bindValue(":data_cadastro", $data_cadastro);

    if (!$stmt->execute()) {
      return false;
    }
    return true;
  } catch (PDOException $e) {

    error_log("Erro ao inserir usuário: " . $e->getMessage(), 0);

    return false;
  }
}

function getCodigo(PDO $pdo, $email, $senha)
{
  try {

    $sql = "SELECT codigo FROM usuario WHERE email = :email AND senha = :senha;";
    $stmt = $pdo->prepare($sql);

    //Vincular parametros aos valores
    $stmt->bindValue(":email", $email);
    $stmt->bindValue(":senha", $senha);

    if (!$stmt->execute()) {
      return false;
    }

    $userID = $stmt->fetch();

    $_SESSION['user_ID'] = $userID['codigo'];
    return true;
  } catch (PDOException $e) {
    error_log("Erro no cadastro: " . $e->getMessage(), 0);
  }
  return false;
}
?>

</html>