<?php $auth = 0; 
 include 'lib/include.php'; 
 
 // TRAITEMENT DU FORMULAIRE 
 
 if(isset($_POST['username']) && isset($_POST['password']))
 { 
     $username = $db->quote($_POST['username']);
     $password = sha1($_POST['password']);
     
     $select = $db->query("SELECT * FROM users WHERE username=$username && password='$password'");
     
     
     
     if($select->rowCount() > 0 )
     {
         $_SESSION['auth'] = $select->fetch();
         setFlash('vous êtes maintenant connecté');
         header('location:' . WEBROOT . 'admin/index.php');
         die();
        }
        
        
    }
    // INCLUSION DU HEADER 
    include 'partial/header.php'; 
?>

<form action="" method="POST">
    <div class="form-group">
        <label for="username">Nom d'utilisateur</label>
        <?= input('username'); ?>
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" name="password">
    </div>
    <button type="submit" class=" btn btn-default">Se connecter
        
    </button>

</form>

<?php include 'lib/debug.php'; ?>
<?php include 'partial/footer.php'; ?>