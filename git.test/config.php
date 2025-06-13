<? 
//configurasi dengan database
$server = "localhost"; 
$user = "root"; 
$passwor = ""; 
$nama_databas = "battle_db"; 

$db = mysqli_connect(hostname: $server, username: $user, password: $passwor, database: $nama_database); 

if(!$db) { 
    die("GAGAL TERUHBUNG KE DATABASE!!!"); 
}

?> 