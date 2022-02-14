<?php include 'header.php'; ?>
<div id="main-content">
    <h2>Update Students</h2>
    <?php
    include("config.php");
    $tid = $_GET['tid'];
    $fetch_query = "SELECT * FROM trainer WHERE t_id = $tid";
    $result = mysqli_query($db,$fetch_query) or die(mysqli_error());
    while ($rows = mysqli_fetch_assoc($result)) {
    ?>
    <form class="post-form" action="functions/trainerupdate.php" method="post">
        <div class="form-group">
            <label>Trainer Name</label>
            <input type="hidden" name="t_id" value="<?php echo$rows['t_id']; ?>" />
            <input type="text" name="tname" value="<?php echo$rows['t_name']; ?>" />
        </div>
        <div class="form-group">
            <label>Trainer Number</label>
            <input type="number" name="tnumber" value="<?php echo$rows['t_number']; ?>" />
        </div>
        <div class="form-group">
            <label>Trainer Date Of Birth</label>
            <input type="Date" name="tdob" value="<?php echo$rows['t_dob']; ?>" />
        </div>
        <div class="form-group">
            <label>Trainer Address</label>
            <input type="text" name="taddress" value="<?php echo$rows['t_address']; ?>" />
        </div>
        <input class="submit" type="submit" value="Update"  />
    </form>
<?php } ?>
</div>
</div>
<?php include 'footer.php'; ?>
