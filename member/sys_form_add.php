<style type="text/css">
input[type='radio'] {
-webkit-appearance: none;
width: 20px;
height: 20px;
border: 1px solid darkgray;
border-radius: 50%;
outline: none;
box-shadow: 0 0 5px 0px gray inset;
}
input[type='radio']:hover {
box-shadow: 0 0 5px 0px orange inset;
}
input[type='radio']:before {
content: '';
display: block;
width: 60%;
height: 60%;
margin: 20% auto;
border-radius: 50%;
}
input[type='radio']:checked:before {
background: red;
}
</style>
<div class="container-fluid" style="background-color:#2C3E50">
  <div class="row">
    <div class="col-md-1"></div>
    <div class="col-xs-12 col-md-11">
    </div>
  </div>
</div>
<br>
</div>
<!--start article-->
<div class="container">
<div class="row">
  <div class="col-md-4"> <br />
    <h4> ::ประเมินความพึงพอใจงานซ่อม:: </h4>
    <form id="formqsys" name="formqsys" method="post" action="sys_form_add_db.php">
      <table width="20%" border="1" align="center" cellpadding="0" cellspacing="0" class="table table-bordered table-hover">
        
        <tr>
          <td height="30" align="center"><input type="radio" name="a_score"  value="ดี" required /></td>
          <td height="30">&nbsp; ดี</td>
          
        </tr>
        <tr>
          <td height="30" align="center"><input type="radio" name="a_score"  value="ปานกลาง" /></td>
          <td height="30">&nbsp; ปานกลาง</td>
          
        </tr>
        <tr>
          <td height="30" align="center"><input type="radio" name="a_score"  value="พอใช้" /></td>
          <td height="30">&nbsp; พอใช้</td>
          
        </tr>
        
      </table>
    </div>
  </div>
  <div class="row">
    <div class="col-md-4">
      <input type="hidden" name="ref_c_id" value="<?php echo $_GET['ID']; ?>" />
      <button type="submit" name="save" class="btn btn-primary"> ส่งแบบประเมิน </button>
      
    </div>
  </div>
</form>