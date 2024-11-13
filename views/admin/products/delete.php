<?php
    require_once('./connection.php');
    $id = intval($_GET['id']);
    
    // Chuẩn bị câu truy vấn
    $query = "DELETE FROM products WHERE id = ?";
    $stmt = mysqli_prepare($conn, $query);

    if ($stmt) {
        // Gán giá trị cho tham số `id`
        mysqli_stmt_bind_param($stmt, "i", $id);

        // Thực thi câu truy vấn
        if (mysqli_stmt_execute($stmt)) {
            // Điều hướng về trang index nếu xoá thành công
            header("Location: index.php");
            exit();
        } else {
            echo "Query error: " . mysqli_stmt_error($stmt);
        }

        // Đóng câu lệnh
        mysqli_stmt_close($stmt);
    } else {
        echo "Failed to prepare the statement: " . mysqli_error($conn);
    }

    // Đóng kết nối
    mysqli_close($conn);
?>
