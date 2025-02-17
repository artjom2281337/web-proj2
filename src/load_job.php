<?php 
    $sql = "SELECT * FROM jobs LIMIT $count";
    $result = $conn -> query($sql);

    if ($result -> num_rows > 0) {
        while ($row = $result -> fetch_assoc()) {
            $job_name = $row["name"];
            $job_date = $row["startdate"];
            $job_location = $row["location"];
            $job_postcode = $row["postcode"];

            echo "
                <div class='jobb'>
                    <div class='job-title'>$job_name</div>
                    <div class='job-date'>$job_date</div>
                    <div class='job-location'>$job_location $job_postcode</div>
                </div>
            ";
        }
    }

?>



