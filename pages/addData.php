<?php 
    session_start();
    if (!isset($_SESSION['email']) || !isset($_SESSION['password'])) {
        header('location:../');
        exit;
    }
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Store submitted data in session
        $_SESSION['students'][] = [
            'name' => $_POST['name'],
            'age' => $_POST['age'],
            'gender' => $_POST['gender'],
            'college' => $_POST['college'],
            'course' => $_POST['course'],
            'campus' => $_POST['campus']
        ];
        
        // Redirect to showdata.php
        header('Location:showdata.php');
        exit;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashboard</title>
    <?php include('../layout/style.php'); ?>
</head>
<body class="sb-nav-fixed">
    <?php include('../layout/header.php'); ?>
    <div id="layoutSidenav">
        <?php include('../layout/navigation.php'); ?>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Add Data</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Add Data</li>
                    </ol>
                    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            background-color: #f4f4f9;
            margin: 0;
            padding: 20px;
        }
        h1 {
            color: #333;
            margin-bottom: 20px;
        }
        .form-container {
            background: linear-gradient(45deg, rgb(16, 14, 14), rgb(30, 28, 31)); /* Gradient border */
            padding: 5px; /* Space for border */
            border-radius: 12px; /* Smooth border edges */
        }
        .form-content {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 800px;
        }
        .form-row {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }
        .form-group {
            flex: 1 1 45%;
            min-width: 200px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
            color: #555;
        }
        .form-group input, .form-group select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 1rem;
        }
        .submit-btn {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 1rem;
            margin-top: 20px;
            width: 100%;
            max-width: 200px;
        }
        .submit-btn:hover {
            background-color: #0056b3;
        }
    </style>
                    <div class="form-container">
                        <div class="form-content">
                            <form action="addData.php" method="POST" id="studentForm">
                                <div class="form-row">
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" name="name" id="name" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="age">Age</label>
                                        <input type="number" name="age" id="age" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="gender">Gender</label>
                                        <select name="gender" id="gender" required>
                                            <option value="">Select Gender</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                            <option value="Other">Other</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="course">Course</label>
                                        <input type="text" name="course" id="course" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="campus">Campus</label>
                                        <input type="text" name="campus" id="campus" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="college">College</label>
                                        <input type="text" name="college" id="college" required>
                                    </div>
                                </div>
                                <button type="submit" class="submit-btn">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </main>
            <?php include('../layout/footer.php'); ?>
        </div>
    </div>
    <?php include('../layout/script.php'); ?>
</body>
</html>
