<?php
include('config/db.php');

if(isset($_POST['save_task']))
{
    $title = $_POST['title'];
    $description = $_POST['description'];

    $query = "INSERT INTO task(title,description) VALUES ('$title', '$description')";
    $result = mysqli_query($conn,$query);

    if(!$result)
    {
        die("QUERY FAILED");
    }
    else
    {
        $_SESSION['message'] = "Task Saved";
        $_SESSION['message_type'] = "success";

        header("Location: index.php");
    }
}
?>