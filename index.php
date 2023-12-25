<!DOCTYPE html>
<html>

<head>
  <title>Variola Genes DB</title>
  <link rel="stylesheet" href="/server/index.css" type="text/css" />
</head>

<body>
  <ul>
    <li><a href="/server/index.php">Home</a></li>
    <li class="dropdown">
      <a href="javascript:void(0)" class="dropbtn">Genes</a>
      <div class="dropdown-content">
        <a href="/server/db/select/project.html">Genes List</a>
        <a href="/server/db/create/index.html">Discovered New</a>
        <a href="/server/db/delete/index.html">Found False Gene</a>
        <a href="/server/db/update/index.html">Correct Gene</a>
      </div>
    </li>
    <li class="dropdown">
      <a href="javascript:void(0)" class="dropbtn">Sequences</a>
      <div class="dropdown-content">
        <a href="/server/func/gc/index.html">GC</a>
        <a href="/server/func/transcripe/index.html">Transcripe</a>
        <a href="/server/func/complement/index.php">Complement</a>
        <a href="/server/func/revcomp/index.php">Rev. Complement</a>
        <a href="/server/func/most/index.html">Most Freq. K-mer</a>
      </div>
    </li>
    <li class="nav-title">
      <h2>Variola Genes</h2>
    </li>
  </ul>
  <div class="results">
    <?php
    include '../credentials.php';
    // $servername = "localhost";
    // $username = "debian-sys-maint";
    // $password = "0hbwh4xDVCqpV94G";
    // $dbname = "Variola";
    // Create connection
    $conn = new mysqli(
      $servername,
      $username,
      $password,
      $dbname
    );
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    } else {
      echo "Connected successfully<br> ";
    }

    if (isset($_POST['submit'])) {
      $GIdentifier = $_POST['GIdentifier'];
      $GLocusTag = $_POST['GLocusTag'];
      $GNote = $_POST['GNote'];
      $GProduct = $_POST['GProduct'];
      $ProteinId = $_POST['ProteinId'];
      $Translation = $_POST['Translation'];


      if (!(empty($GLocusTag) && empty($GNote)
        && empty($GProduct) && empty($ProteinId) && empty($Translation))) {
        $sql = "UPDATE Gene SET locus_tag='$GLocusTag', note='$GNote',
    product='$GProduct',protein_id='$ProteinId',translation='$Translation'
     WHERE identifier ='$GIdentifier'";


        if ($conn->query($sql) === TRUE) {
          echo "New record from input form  Updated  succsessfully <br> ";
        } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
        }
      }
    }

    ?>
  </div>

</body>

</html>