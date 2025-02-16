<?php
    require 'test/db.php';
    session_start();

    /* if (!isset($_SESSION['userid'])) { <!-- in case you need user privileges for job page -->
        header("Location: entry.php");
        exit();
    } */

    $title = "Jobs";
    $css_file = "job";
    include("header.php");
    
    $sql = "SELECT * FROM jobs LIMIT 5";
    $result = $conn->query($sql);
?>

    <article>
        <div class="search-bar">
            <form method="get" action="job_search.php">
                <input type="search" name="industry" placeholder="Industry">
                <input type="search" name="location" placeholder="Location or Postal Code">
                <button type="submit">Search Jobs</button>
            </form>
        </div>

        <div class="job-list">
            <?php 
            if ($result -> num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $job_name = $row["name"];
                    $job_date = $row["startdate"];
                    $job_location = $row["location"];
                    $job_postcode = $row["postcode"];
            ?>
            <div class="jobb">
                <div class="job-title"><?php echo $job_name;?></div>
                <div class="job-date"><?php echo $job_date;?></div>
                <div class="job-location"><?php echo $job_location. " ". $job_postcode;?></div>
            </div>
            <?php }
            }?>
        </div>
        <div class="load-more">
            <button>Load more</button>
        </div>
    </article>

<?php
    include("footer.php");
?>