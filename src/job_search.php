<?php 
    require 'test/db.php';

    $industry = $_GET['industry'];
    $location = $_GET['location'];

    if ($industry != "") {
    $sql = "SELECT * FROM jobs WHERE name LIKE '%$industry%'";
    $result = $conn ->query($sql);
?>
    <div class="job-list">
    <?php // search for industry
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
    }
}?>

<?php // Search for location
if ($location != "") {
    $sql = "SELECT * FROM jobs WHERE location LIKE '%$location%' OR postcode LIKE '%$location%'";
    $result = $conn ->query($sql);
?>
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
    }
}?>

