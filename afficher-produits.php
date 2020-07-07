<?php
function connect_to_database() {
$servername = 'localhost';
$username = 'root' ;
$password = '' ;
$databasename = 'basetest01' ;

try {

$pdp = new PDO("mysql:host=$servername;dbname=$databasename", $username, $password );
$pdo->setAttribute(PDO::ATR_ERRMODE, PDO :: ERRMODE_EXCEPTION);

echo "Connected Successfully" ;

return $pdo;
}
catch (PDOException $e) {

    echo "connextion failed : ". $e-> getMessage() ;

}
}
$pdo=connect_to_database();

$query = $pdo -> query ("SELECT * FROM masupertable") -> fetchAll();
$user = $query -> fetch();

$users = $pdo -> query ("SELECT * FROM produit") -> fetchA11();
echo "<ul>";
foreach ($users as $user) {
    echo "<li>" $user ['Nom'] . "</li>";
}
    echo "</ul>" ;
?>