<?php 
include("../../include.php");



if(isset($_POST['dnkk'])){
    $id=$_POST['dnkk'];
    $query=mysqli_query($conn,"select bank_detail.account_holder_name as account_holder_name,bank_detail.account_no as account_no,bank_detail.bank_name as bank_name,bank_detail.branch_name as branch_name,bank_detail.ifsc_code as ifsc_code,bank_detail.stage_1 as stage_1,bank_detail.stage_2 as stage_2,bank_detail.stage_3 as stage_3,complaint_form.book_no as book_no,bank_detail.id as cid,complaint_form.date as date,complaint_form.district as district,complaint_form.police_station as police_station,complaint_form.complaint_no as complaint_no,complaint_form.complaint_filer_name as complain_name,complaint_form.complaint_filer_address as complain_address,image.discription as discription,victim.name as vname from bank_detail inner join complaint_form on complaint_form.id=bank_detail.caseid inner join image on complaint_form.id=image.caseid left join victim on victim.caseid=complaint_form.id where bank_detail.id='$id'");
    $row=mysqli_fetch_array($query);
	
	echo '   
    
    <div class="row">
    <div class="col-md-12">
      <label for="">नोंद वही क्र.:</label>
      <label for="">'.$row["book_no"].'</label>
    </div>
<input type="hidden" value="'.$row['cid'].'" name="id">
  </div>
  <div class="row">
    <div class="col-md-12">
      <label for="">दिनांक:</label>
      <label for="">'.$row["date"].'</label>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <label for="">जिल्हा:</label>
      <label for="">'.$row["district"].'</label>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <label for="">पोलीस ठाणा :</label>
      <label for="">'.$row["police_station"].'</label>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <label for="">गुन्हा न:</label>
      <label for="">'.$row["complaint_no"].'</label>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <label for="">पिडीताचे नाव:</label>
      <label for="">'.$row["vname"].'</label>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6">
            <label for="">Name:</label>
            <input type="text" name="account_name" value="'.$row['account_holder_name'].'"for="">
        </div>
        <div class="col-md-6">
            <label for="">Account No.:</label>
            <input type="text" name="account_no" value="'.$row['account_no'].'"for="">
        </div>
    </div>

    <div class="row">
    <div class="col-md-6">
            <label for="">Bank Name:</label>
            <input type="text" name="bank_name" value="'.$row['bank_name'].'"for="">
        </div>
        <div class="col-md-6">
            <label for="">Branch Name:</label>
            <input type="text" name="barnch" value="'.$row['branch_name'].'"for="">
        </div>
        <div class="col-md-6">
            <label for="">IFSC Code:</label>
            <input type="text" name="ifsc" value="'.$row['ifsc_code'].'"for="">
        </div>
    </div>
    
      
    </div>
  </div>
  <div class="row">
   
  </div>
</div>';
}
?>