

<?php
echo "Nigger Nigger Nigger";
echo "<br>";

if(isset($_GET['Streamid'])){
echo $_GET['Streamid'];
echo "<br>";
}

if(isset($_GET['StreamPos'])){
    echo $_GET['StreamPos'];
}
?>
<form action="home.php" method="post">
StreamId: <input type="text" name="var1"><br>
<input type="submit">
</form>

You URL so far = <?php if(isset($_POST['var1'])){
echo $_POST['var1'];
echo "<br>";}?>
