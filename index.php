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

  <form action="" method="post">
    <fieldset>
      <legend>Complement</legend>
      <label for="sequence">Enter sequence:</label></br>
      <input type="text" name="sequence" id="sequence"></br>
      <input type="submit" name="submit" value="Get Complement">
    </fieldset>
    <?php
    // Check if form has been submitted
    if (isset($_POST["submit"])) {

      $sequence = $_POST['sequence'];
      $sequence = strtoupper($sequence);


      function get_complement($seq)
      {
        $complement = strtr($seq, 'ATCG', 'UAGC');
        return $complement;
      }

      $complement = get_complement($sequence);

      echo "<p>Complement: $complement</p>";
    }
    ?>
  </form>


</body>

</html>