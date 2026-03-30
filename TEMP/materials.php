<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Materials Registration</title>
    
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f6f8;
        }
        .container {
            width: 420px;
            margin: 50px auto;
            background: #ffffff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        label {
            font-weight: bold;
            display: block;
            margin-top: 10px;
        }
        input, textarea, select {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
        }
        textarea {
            resize: vertical;
        }
        button {
            margin-top: 20px;
            width: 100%;
            padding: 10px;
            background-color: #28a745;
            color: white;
            border: none;
            cursor: pointer;
        }
        button:hover {
            background-color: #1e7e34;
        }
    </style>
    <div class="header">
    <title>Student Materials System</title>
    <h1><center>STUDENT MATERIALS RECORD SYSTEM</h1>
    <link rel="stylesheet" href="dashboard.css">
    <img src="logo.jpg" alt="KASS Logo" style="width:13%; height:79px; position: absolute;top:-1px;right: 5px;">

    </div>
</head>
<body>

<div class="container">
    <h2>Material Registration</h2>

    <form action="#" method="post">
        <label>Material Id</label>
        <input type="text" name="material_id" required>
        <label>Material Name</label>
        <input type="text" name="material_name" required>

        <label>Category</label>
        <input type="text" name="category">

        <label>Total Quantity</label>
        <input type="number" name="quantity_total" min="1" required>

        <label>Available Quantity</label>
        <input type="number" name="quantity_available" min="0" required>

        <button type="submit">Save Material</button>
        <button><a href="dashboard.php">Back</a></button>
    </form>
</div>

</body>
</html>
