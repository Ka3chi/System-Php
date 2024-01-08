<?php
include("./Login/connection.php");

if (isset($_GET['deleteid'])) {
    $id = $_GET['deleteid'];

    // Escape the input to prevent SQL injection
    $id = mysqli_real_escape_string($con, $id);

    // JavaScript confirmation prompt
    echo '<script>';
    echo 'var confirmation = confirm("Are you sure you want to delete this user?");';
    echo 'if (confirmation) {';
    
    // Perform the deletion
    $sql = "DELETE FROM `tbl_user` WHERE id = $id";
    $result = mysqli_query($con, $sql);
    
    if ($result) {
        echo '   window.location.href = "index.php#usermanagement";';
    } else {
        echo '   alert("Error during deletion.");';
        echo '   window.location.href = "index.php#usermanagement";'; // Redirect to index.php with anchor
    }
    
    echo '} else {';
    echo '   alert("Deletion canceled.");';
    echo '   window.location.href = "index.php#usermanagement";'; // Redirect to index.php with anchor
    echo '}';
    echo '</script>';
}
?>
