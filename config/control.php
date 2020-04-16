<?php

$host = 'localhost';
$username = 'id13300304_media';
$password = "Mufardiq1234@gmail.com";
$db = 'id13300304_covid_19master';

//connect to database
$con = mysqli_connect($host, $username, $password, $db) or die('Database Not Found!');

class Covid
{

    function insert($table, array $field, $redirect)
    {
        global $con;
        $sql = "INSERT INTO $table SET "; 

        foreach ($field as $key => $value) {
            $sql .= " $key = '$value',";
        }
        $sql = rtrim($sql, ',');
        $jalan = mysqli_query($con, $sql);
        if ($jalan) {
            echo "<script>alert('Selamat Datang di Web Covid ');
                document.location.href='$redirect'</script>";
        } else {
            echo "<script>alert('Mohon Maaf Data Gagal Disimpan!');
                document.location.href='index.php'</script>";
        }
    }

    public function validateHtml($field)
    {
        $field = htmlspecialchars($field);
        return $field;
    }
}

?>