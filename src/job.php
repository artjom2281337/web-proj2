<?php
    $title = "Jobs";
    $css_file = "job";
    include("header.php");

    require 'test/db.php';
    $sql = "SELECT * FROM jobs";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $job_name = $row['name'];
            $job_date = $row['startdate'];
            $job_location = $row['location'];
            $job_postcode = $row['postcode'];
        }
    }

?>

    <article>
        <div class="search-bar">
            <input type="text" placeholder="Industry">
            <input type="text" placeholder="Location or Postal Code">
            <button>Search Jobs</button>
        </div>

        <div class="job-list">
            <div class="jobb">
                <div class="job-title"><?php echo $job_name;?></div>
                <div class="job-date"><?php echo $job_date;?></div>
                <div class="job-location"><?php echo $job_location . " ".$job_postcode;?></div>
            </div>
            <div class="jobb">
                <div class="job-title">Software Engineer</div>
                <div class="job-date">15.01.2025</div>
                <div class="job-location">Helsinki Uusimaa, 00400</div>
            </div>
            <div class="jobb">
                <div class="job-title">Software Engineer</div>
                <div class="job-date">15.01.2025</div>
                <div class="job-location">Helsinki Uusimaa, 00400</div>
            </div>
            <div class="jobb">
                <div class="job-title">Software Engineer</div>
                <div class="job-date">15.01.2025</div>
                <div class="job-location">Helsinki Uusimaa, 00400</div>
            </div>
            <div class="jobb">
                <div class="job-title">Software Engineer</div>
                <div class="job-date">15.01.2025</div>
                <div class="job-location">Helsinki Uusimaa, 00400</div>
            </div>
            <div class="jobb">
                <div class="job-title">Software Engineer</div>
                <div class="job-date">15.01.2025</div>
                <div class="job-location">Helsinki Uusimaa, 00400</div>
            </div>
        </div>
        <div class="load-more">
            <button>Load more</button>

        </div>
    </article>

<?php
    include("footer.php");
?>