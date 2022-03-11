<?php $auth = 0; ?>
<?php include 'lib/include.php'; ?>
<?php include 'partial/header.php'; ?>

<?php 
if(isset($_POST['username']) && isset($_POST['password']))
{ 
    $username = $db->quote($_POST['username']);
    $password = sha1($_POST['password']);

    $select = $db->query("SELECT * FROM users WHERE username=$username && password='$password'");
    
    
    
    if($select->rowCount() > 0 )
    {
        $_SESSION['auth'] = $select->fetchAll();
    }
    
    
}
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

<?php include 'partial/footer.php'; ?>