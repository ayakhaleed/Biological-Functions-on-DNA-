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
    function transcription()
    {
      $seq = $_POST["seq"];
      $len = strlen($seq);
      $comp = " ";
      for ($i = 0; $i < $len; $i++) {
        if ($seq[$i] == "A") {
          $comp = $comp . "U";
        }
        if ($seq[$i] == "C") {
          $comp = $comp . "G";
        }
        if ($seq[$i] == "G") {
          $comp = $comp . "C";
        }
        if ($seq[$i] == "T") {
          $comp = $comp . "A";
        }
      }
      echo "$comp";
    }
    transcription();
    ?>
  </div>
</body>

</html>