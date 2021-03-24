<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="../assets/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>GoreTex - Color Generator</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Goretex Professionals LLC</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="color-generator.php">Color Generator</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div id=color-generator>
        <form method=post>
            <table>
                <tr>
                    <td>
                        <label for=rowcols>
                            <p>Number of rows/columns</p>
                        </label>
                        <input type=number name=rowcols id=rowcols>
                    </td>
                    <td>
                        <label for=numcolor>
                            <p>Number of colors</p>
                        </label>
                        <input type=number name=numcolor id=numcolor>
                    </td>
                    <td>
                        <input type=submit value=Submit>
                    </td>
                </tr>
            </table>
        </form>
        <?php
        if (isset($_POST['rowcols'], $_POST['numcolor'])) {
            $rows = $_POST['rowcols'];
            $cols = $_POST['rowcols'];
            $numcolor = $_POST['numcolor'];
            //validate
            $kill = false;
            if ($rows < 1 || $rows > 26) {
                echo ("<p id=err>rows/columns must be between 1 and 26.</p>");
                $kill = true;
            }
            if ($numcolor < 1 || $numcolor > 10) {
                echo ("<p id=err>number of colors must be between 1 and 10.</p>");
                $kill = true;
            }
            if ($kill == true) {
                die();
            }

            $first_table = array();
            // first (upper) table
            $optcolor = array('red', 'brown', 'orange', 'yellow', 'green', 'teal', 'grey', 'blue', 'purple', 'black');
            $datums = array();
            echo "<table id=colorstable>";
            for ($i = 0; $i < $numcolor; $i++) {
                echo "<tr>";
                for ($j = 0; $j < 2; $j++) {

                    if ($j == 0) {
                        echo "<td id=leftcol>";
                        echo "<form method=post>";
                        $datum = "color" . $i;
                        echo "<div id=color_select>";
                        echo "<select name=" . $datum . "id=" . $datum . '>';
                        array_push($datums, $datum);
                        foreach ($optcolor as &$value) {
                            echo "<option value=" . $value . ">" . $value . "</option>";
                            echo "</div>";
                        }
                        $first = array_shift($optcolor);
                        array_push($optcolor, $first);
                    } else {
                        echo "<td id=rightcol>";
                        echo "<p>&nbsp</p>";
                    }
        ?>

        </select>
        </form>
        </td>
        <?php
                }
                echo "</tr>";
            }
            echo "</table>";

            // USE JAVASCRIPT(???) TO CHECK FOR DUPLICATES

        }
        ?>
    </div>

    <footer class="footer mt-auto py-3 bg-light">
        <div class="container">
            <span class="text-center">Copyright "GoreTex Professionals LLC" 2021</span>
        </div>
    </footer>
    <?php
    function has_dupes($array)
    {
        $dupe_array = array();
        foreach ($array as $val) {
            if (++$dupe_array[$val] > 1) {
                return true;
            }
        }
        return false;
    }
    ?>

</body>

</html>