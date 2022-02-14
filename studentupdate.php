<?php include 'header.php'; ?>
<div id="main-content">
    <h2>Update Students</h2>
    <?php
    $sid = $_GET['sid'];
    include("config.php");
    $fetch_query = "SELECT * FROM student WHERE s_id = $sid";
    $result = mysqli_query($db,$fetch_query) or die(mysqli_error());
    if (mysqli_num_rows($result) > 0) {
        while ($rows = mysqli_fetch_assoc($result)) {
    ?>
    <form class="post-form" action="functions/update.php" method="post">
        <div class="form-group">
            <label>Student Name</label>
            <input type="hidden" name="sid" value="<?php echo$rows['s_id']; ?>" />
            <input type="text" name="sname" value="<?php echo$rows['s_name']; ?>" />
        </div>
        <div class="form-group">
            <label>Student Number</label>
            <input type="number" name="snumber" value="<?php echo$rows['s_number']; ?>" />
        </div>
        <div class="form-group">
            <label>Course Trainer</label>
            <select name="student_course">
                <option value=""selected disabled>Select Course</option>
                <?php
                $fetch_query = "SELECT * FROM course";
                $result1 = mysqli_query($db,$fetch_query) or die(mysqli_error()); 
                while ($course =mysqli_fetch_assoc($result1)) {
                ?>
                <option value="<?php echo $course['c_id']; ?>"><?php echo $course['c_name']; ?></option>
                <?php } ?> 
            </select>
        </div>
        <input class="submit" type="submit" value="Update"  />
    </form>
<?php }
} ?>
</div>
</div>
<?php include 'footer.php'; ?>
