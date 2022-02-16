<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href=css/style.css"/>
    <title>Pendaftaran Siswa Baru | SMK Coding</title>
</head>
<body>
    <div class="container">
    <div class="main">    
    <form method="post" action="index.php" id="form">
        <h2>DATA INDENTITAS</h2>
        </hr>
        <label>Nama :</label>
        <input type="text" name="fnama" id="fnama"/>

        <label>Alamat :</label>
        <input type="text" name="lalamat" id="lalamat"/>\
        
        <label>No HP :</label>
        <input type="text" name="nohape id="nohape"/>

        <label>TTL :</label>
        <input type="text" name="ttl" id="ttl"/>

        <input type="submit" value="Daftar" name="daftar" />
    </form>
    <?php include "proses.php";?>
        </div>
    </div>
    </body>
</html>