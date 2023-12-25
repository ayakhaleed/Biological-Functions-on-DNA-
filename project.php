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
    // Close connection







    if (isset($_POST["submit"])) {
        $selector = $_POST["selector"];
        $select_value = $_POST["select-value"];
        $selectall = $_POST["selectall"];

        if ((empty($selector) || empty($select_value)) && empty($selectall)) {
            echo "<span style=\"color: red;\">Error: All fields is required.</span>";
        } else {
            echo $selector . "-----------" . $select_value . "<br><br>";
        }

        if ($selectall == "selectall") {
            $sql = "SELECT * FROM Gene";
            $result = $conn->query($sql);
            echo "<table><thead>
                                <tr>
                                    <th>identifier</th>
                                    <th>locus_tag</th>
                                    <th>description</th>
                                    <th>product</th>
                                    <th>protein-id</th>
                                    <th>translation</th>
                                </tr></thead><tbody>";
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                                    <td>" . $row["identifier"] . "</td>
                                    <td>" . $row["locus_tag"] . "</td>
                                    <td>" . $row["description"] . "</td>
                                    <td>" . $row["product"] . "</td>
                                    <td>" . $row["protein_id"] . "</td>
                                    <td>" . $row["translation"] . "</td>
                                </tr>";
            }
            echo "</tbody></table>";
        } else {

            if ($selector == "gene-identifier") {
                $sql = "SELECT * FROM gene_inf WHERE identifier='" . $select_value . "' ";
                $result = $conn->query($sql);
                echo "<table><thead>
                                <tr>
                                    <th>identifier</th>
                                    <th>locus_tag</th>
                                    <th>description</th>
                                    <th>product</th>
                                    <th>protein-id</th>
                                    <th>translation</th>
                                </tr></thead><tbody>";
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                                    <td>" . $row["identifier"] . "</td>
                                    <td>" . $row["locus_tag"] . "</td>
                                    <td>" . $row["description"] . "</td>
                                    <td>" . $row["product"] . "</td>
                                    <td>" . $row["protein_id"] . "</td>
                                    <td>" . $row["translation"] . "</td>
                                </tr>";
                }
                echo "</tbody></table>";
            } else if ($selector == "locus-tag") {
                $sql = "SELECT * FROM gene_inf WHERE locus_tag='" . $select_value . "' ";
                $result = $conn->query($sql);
                echo "<table><thead>
                                <tr>
                                    <th>identifier</th>
                                    <th>locus_tag</th>
                                    <th>description</th>
                                    <th>product</th>
                                    <th>protein-id</th>
                                    <th>translation</th>
                                </tr></thead><tbody>";
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                                    <td>" . $row["identifier"] . "</td>
                                    <td>" . $row["locus_tag"] . "</td>
                                    <td>" . $row["description"] . "</td>
                                    <td>" . $row["product"] . "</td>
                                    <td>" . $row["protein_id"] . "</td>
                                    <td>" . $row["translation"] . "</td>
                                </tr>";
                }
                echo "</tbody></table>";
            } else if ($selector == "protein-id") {
                $sql = "SELECT * FROM gene_inf WHERE protein_id='" . $select_value . "' ";
                $result = $conn->query($sql);
                echo "<table><thead>
                                <tr>
                                    <th>identifier</th>
                                    <th>locus_tag</th>
                                    <th>description</th>
                                    <th>product</th>
                                    <th>protein-id</th>
                                    <th>translation</th>
                                </tr></thead><tbody>";
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                                    <td>" . $row["identifier"] . "</td>
                                    <td>" . $row["locus_tag"] . "</td>
                                    <td>" . $row["description"] . "</td>
                                    <td>" . $row["product"] . "</td>
                                    <td>" . $row["protein_id"] . "</td>
                                    <td>" . $row["translation"] . "</td>
                                </tr>";
                }
                echo "</tbody></table>";
            }
        }
    }

    ?>

</body>

</html>