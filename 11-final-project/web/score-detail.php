<?php
extract($_REQUEST);
$name = '';




?>
<form action="save-score.php" >
    

    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name" value="<?php echo $name ?>" />
    </div>

    <div class="mb-3">
        <label for="score" class="form-label">Score</label>
        <input type="text" class="form-control" id="score" name="score" value="<?php echo $score ?>" />
    </div>

    

    <button type="submit"  class="btn btn-primary">Save</button>
    
<?php if (isset($id)) { ?>
    
    

    </script>
<?php } ?>
    <script>
    
    

    </script>
</form>