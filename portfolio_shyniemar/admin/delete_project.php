<?php
include '../includes/conn.php';

if (isset($_GET['id']) && !empty($_GET['id'])) {
    $intro_id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);

    $sql = "DELETE FROM project WHERE id = ?";
    $stmt = $Conn->prepare($sql);
    $stmt->execute([$intro_id]);

    header("Location: projects.php");
    exit();
} else {
    header("Location: projects.php");
    exit();
}
?>
