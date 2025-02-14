<?php
    $title = "Jobs";
    $css_file = "job";
    include("header.php");

    require 'test/db.php';
    $sql = "SELECT * FROM jobs";
    $result = $conn->query($sql);
?>

    <article>
        <div class="search-bar">
            <input type="text" placeholder="Industry">
            <input type="text" placeholder="Location or Postal Code">
            <button>Search Jobs</button>
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