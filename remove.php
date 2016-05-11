<?php
    require 'php/connection.php';    
     
    if ( !empty($_GET['cod'])) {
        $cod = $_REQUEST['cod'];
    }
     
    if ( !empty($_POST)) {
        // keep track post values
        $cod = $_POST['cod'];
         
        // delete data
        $pdo = Database::connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "DELETE FROM tabela  WHERE cod = ?";
        $q = $pdo->prepare($sql);
        $q->execute(array($cod));
        Database::disconnect();
        header("Location: contato.php");
         
    }
?>
 
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link   href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
</head>
 
<body>
    <div class="container">
     
                <div class="span10 offset1">
                    <div class="row">
                        <h3>Delete a Customer</h3>
                    </div>
                     
                    <form class="form-horizontal" action="remove.php" method="post">
                      <input type="hidden" name="cod" value="<?php echo $cod;?>"/>
                      <!--<?php echo $cod;?>-->
                      <p class="alert alert-error">Are you sure to delete ?</p>
                      <div class="form-actions">
                          <button type="submit" class="btn btn-danger">Yes</button>
                          <a class="btn" href="contato.php">No</a>
                        </div>
                    </form>
                </div>
                 
    </div> <!-- /container -->
  </body>
</html>
