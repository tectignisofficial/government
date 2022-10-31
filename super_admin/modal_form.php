<?php
 include("include.php");
if(isset($_POST['modalid'])){
$id=$_POST['modalid'];
    $sql=mysqli_query($conn,"select * from member_img where id='$id'");
    $fetch=mysqli_fetch_array($sql);
    echo ' <div class="row">
    <label for="">  नाव</label>
    <input type="hidden" name="idtab" value="'.$fetch['id'].'">
    <input type="text" class="form-control" name="name" value="'.$fetch['name'].'" placeholder="नाव" required>
    </div>
    <div class="row">
    <label for="">प्रतिमा</label>
    <input type="file" class="form-control" name="profile" placeholder="प्रतिमा">
    </div>';
}
?>