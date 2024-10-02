<!DOCTYPE html>
<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .form-control{
            width:250px;
            }
            .container{
                margin-left:500px;
            }
        </style>
        <title>todo</title>
</head>
<body id="content"> 
    <div class=container>

    <div class="row justify-content-center">
        <form action="connection.php" method="POST">
            <div class="form-group">
                <label>Todo</label>
                <input type="text" name="tdo" class="form-control"  placeholder="what todo">
</div>
         <button type="submit" class="btn btn-primary" name="save">Save </button>

</form>
</div>
<?php
    require_once"connection.php";
    ?>
    <?php
    $mysql=new mysqli("localhost","root","","testdb");
    $result=$mysql->query("SELECT * FROM data");
    pre_r($result->fetch_assoc());
    ?>
    <div class="row justify-center">
        <table class="table">
            <thead>
                <tr>
                    <th>todo</th>
                    <th colspan="2">Action</th>
        </tr>
        </thead>
        <?php
        while($row=$result->fetch_assoc()):?>
        <tr>
            <td>
            <?php
            echo $row['todo'];?>
            </td>
            <td><a href="index.php?edit=<?php echo $row['id'];?>"
            class="btn btn-info">Edit</a>
            <a href="connection.php?delete=<?php echo $row['id'];?>"
            class="btn btn-danger">Delete</a>
        </td>
            </tr>
            <?php endwhile ?>
        </table>
        </div>

    <?php
    function pre_r($array){
        echo"<pre>";
        print_r($array);
        echo "</pre>";
    }
    ?>
    </div>
</body>
</html>


