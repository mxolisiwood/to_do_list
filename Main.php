<?php
    $erros = [];

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $task = $_POST['task'];

        if ($task == null) {
            $errors[] = "Task is required";
            echo "<h1>Task is required</h1><br>";
            die;
        }

        if(count($errors) == 0){
            return $task;
        }
    }

    


?>

<?php include_once 'header.php';?>
<?php
print <<<_HTML_
<div class="page page-main">
    <h1>TO-DO-LIST</h1>
    <form action = "<?php echo url('upload'); ?>" method = 'POST'>
        <h3>What do you want to remeber?</h3><br>
        <input type = "textarea" name = "task"><br>
        <div class = "form-group">
            <button class = "btn"  type = "submit">Add task</button><br>
        </div>
    </form>
</div>
_HTML_;
?>
<?php include_once 'footer.php'; ?>   