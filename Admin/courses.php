<!-- Header -->
<?php
if (!isset($_SESSION)) {
    session_start();
}
    include_once ("../common/adminHeader.php");
    include_once ("../dbConnection.php");

    if (isset($_SESSION['is_admin_login'])) {
        $adminEmail = $_SESSION['adminLogEmail'];
    } else {
        echo "<script>location.href='../index.php'; </script>";
    }
?>

<div class="col-sm-9 mt-5">
    <!-- Table -->
    <p class="bg-dark text-white p-2">List of Courses</p>
    <?php
    $sql = "SELECT * FROM `course`";
    $result = $conn->query($sql);
    if($result->num_rows > 0) {
    ?>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Courses ID</th>
                <th scope="col">Name</th>
                <th scope="col">Author</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = $result->fetch_assoc()) { ?>
            <tr>
                <th scope="row"><?php echo $row['course_id']?></th>
                <td><?php echo $row['course_name']?></td>
                <td><?php echo $row['course_author']?></td>
                <td>
                    <form action="editCourse.php" method="POST" class="d-inline">
                    <input type="hidden" name="id" value="<?php echo $row["course_id"]; ?>">
                    <button type="submit" class="btn btn-info mr-2" name="edit" value="Edit">
                    <i class="fa-solid fa-pen-to-square"></i></button>
                    </form>
                    <form action="" method="POST" class="d-inline">
                        <input type="hidden" name="id" value="<?php echo $row["course_id"]; ?>">
                    <button type="submit" class="btn btn-secondary" name="delete" value="Delete" >
                    <i class="fa-solid fa-trash"></i></button>
                    </form>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    <?php  } else {
        echo " There is no data in DB table";
        }
        //delete request
        if (isset($_REQUEST['delete'])) {
            $sql = "DELETE FROM course WHERE course_id = {$_REQUEST['id']}";
            if ($conn->query($sql) === true) {
                echo "<meta http-equiv='refresh' content='0;URL=?deleted' />";
            } else {
                echo "Unable to delete";
            }
        }
        ?>
    <div>
        <a class="btn btn-danger box" href="./addCourse.php"><i class="fa-solid fa-plus"></i></a>
    </div>
</div>


<!-- Footer -->
<?php
    include_once("../common/adminFooter.php");
?>