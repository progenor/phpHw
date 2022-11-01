<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHPfile</title>
    <link rel="stylesheet" href="phpCss.css">
</head>
<body>
<header>
      <h1>Elado ingatlan</h1>
    </header>
<main>
    <div class="result_cont">
            <div class="result">
                <h1>Result:</h2>
            <?php
            // declare variables
                $tipus = $_POST['tipus'];
                $email = $_POST['email'];
                $telefon = $_POST['telefon'];
                $terulet = $_POST['terulet'];
                $fekves = $_POST['fekves'];
                $szintszam = $_POST['sziszam'];
                $szobaszam = $_POST['szoszam'];
                $furdo = $_POST['furdo'];
                $garazs = $_POST['garazs'];
                $lift = $_POST['lift'];
                $kert = $_POST['kert'];
                $leiras = $_POST['leiras'];
                $ar = $_POST['ar'];

                // check if fields are valid

                





               // print variables
                echo "Tipus: $tipus <br>";
                echo "Email: $email <br>";
                echo "Telefon: $telefon <br>";
                echo "Terulet: $terulet <br>";
                echo "Fekves: $fekves <br>";
                echo "Szintszam: $szintszam <br>";
                echo "Szobaszam: $szobaszam <br>";
                echo "Furdo: $furdo <br>";
                echo "Garazs: $garazs <br>";
                echo "Lift: $lift <br>";
                echo "Kert: $kert <br>";
                echo "Leiras: $leiras <br>";
                echo "Ar: $ar <br>";

                // database connection
                // $conn = new mysqli('localhost', 'root', '', 'mysite');
                // if($conn->connect_error){
                //   die("Connection failed: ".$conn->connect_error);
                // }else{
                //   $stmt = $conn->prepare("INSERT INTO data(tipus, email, telefon, terulet, fekves, szintszam,
                //     szobaszam,furdo, garazs, lift, kert, leiras, ar)
                //     values(?,?,?,?,?,?,?,?,?,?,?,?,?)");
                //     $stmt->bind_param("ssiiiiiiiiisi". $tipus, $email, $telefon, $terulet, $fekves, $szintszam, $szobaszam, $furdo, $garazs, $lift, $kert, $leiras, $ar);
                //     $stmt->execute();
                //     echo "Data inserted successfully";
                //     $stmt->close();
                //     $conn->close();
                // }
                  
                
              ?>
            </div>
          </div>
</main>
      <footer>
      <p>
        Created by
        <a href="https://github.com/progenor">Progenor(Kantor Csongor)</a>
      </p>
    </footer>
</body>
</html>
