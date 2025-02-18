<?php
    require 'db.php';
    session_start();

    /* if (!isset($_SESSION['userid'])) { <!-- in case you need user privileges for job page -->
        header("Location: entry.php");
        exit();
    } */

    $title = "Jobs";
    $css_file = "job";
    include("header.php");
    
    $count = 5;

    if (isset($_POST["load"])) {
        $count = (int) $_POST["load"] + 5;
    }
?>

    <article>
        <div class="search-bar">
            <form method="POST">
                <input type="search" name="industry" placeholder="Industry" value=<?php echo isset($_POST["industry"]) ? $_POST["industry"] : ""; ?>>
                <input type="search" name="location" placeholder="Location or Postal Code" value=<?php echo isset($_POST["location"]) ? $_POST["location"] : ""; ?>>
                <button type="submit">Search Jobs</button>
            </form>
            <form method="POST">
                <input type="hidden" name="industry" value="">
                <input type="hidden" name="location" value="">
                <button type="sumbit">Reset Filter</button>
            </form>
        </div>

        <div class="job-list">
            <?php
            if (isset($_POST["industry"]) || isset($_POST["location"])) {
                include("job_search.php");
            } else {
                include("load_job.php");
            }
            ?>
        </div>
        <div class="load-more">
            <form method="POST">
                <input type="hidden" name="load" id="load" value=<?php echo "'$count'"; ?>>
                <?php
                    if (isset($_POST["industry"])) echo '<input type="hidden" name="industry" value='.$_POST["industry"].'>';
                    if (isset($_POST["location"])) echo '<input type="hidden" name="location" value='.$_POST["location"].'>';
                ?>
                <button type="submit">Load more</button>
            </form>
        </div>
    </article>

<?php
    include("footer.php");
?>