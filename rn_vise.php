<?php
    include './Database/Controler.php';
    include 'role.php';
?>
<script language="javascript" type="text/javascript">
        
        function getYear(crs)
        {
				var crs=crs;
                                                                             //alert(crs);
                                                                             if(crs)
                                                                             {
                                                                                 //alert(crs);
                                                                                 $.ajax({
                                                                                     type:"GET",
                                                                                     url:"dropdown.php",
                                                                                     data:"crs="+crs,
                                                                                     success:function(result)
                                                                                     {
                                                                                         $("#year").html(result);
                                                                                     }
                                                                                 });
                                                                             }
				
                                
				
        }
        function getSemester(yr)
        {
				var yr=yr;
                                //alert(yr);
				if(yr)
                                {
				$.ajax({
                                                  //alert(yr);
						  type: "GET",
						  url:"dropdown.php",
						  data:"yr="+yr,
						  success:function(result)
						  {
							  $("#semester").html(result);
						  }
					
					
					});
                                $.ajax({
                                                  type: "GET",
						  url:"dropdown.php",
						  data:"year="+yr,
						  success:function(result)
						  {
							  $("#division").html(result);
						  }
					
					
					});
                                }
                                
                                
				
	}
        
         
                     
     </script>
     <script language="javascript" src="./assets/js/validation.js"></script>
<script language="javascript">

  function validate_form(f1)
  {
      if(isEmpty(f1.c_id.value,"the Stream"))
      {
        alert(errMsg);
        f1.c_id.focus();
        return (false);
      }
       if(isEmpty(f1.year.value,"the Year"))
      {
        alert(errMsg);
        f1.year.focus();
        return (false);
      }
      
       if(isEmpty(f1.semester.value,"the Semester"))
      {
        alert(errMsg);
        f1.semester.focus();
        return (false);
      }
       
       if(isEmpty(f1.division.value,"the Division"))
      {
        alert(errMsg);
        f1.division.focus();
        return (false);
      }
      
 }
  </script>
  </script>
<form method="post">
<button type="submit" id="back" name="back" class="btn btn-primary">Back</button>
</form>
<h2>Select Details</h2> 
<div class="row">
                <div class="col-md-12">

                    <!-- Advanced Tables -->
                    
                     
                    <div class="panel panel-default">
                        
                        <div class="panel-body">
                            <div class="table-responsive">
                                <form method="post" onSubmit="return validate_form(this)">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                   
                               
                                    <td>
                                        <b>Select Stream:<select class="form-control" id="c_id" name="c_id" onChange="return getYear(this.value)">
                                          <option value="">Select Stream</option>
                                   <?php if(isset($crs)){$cnt=0;foreach($crs as $c){$cnt++; ?>
                                          
                                          <option value="<?php echo $c->c_id; ?>"><?php echo $c->cname; ?></option>
                                          
                                    <?php if($cnt=='2'){break;}}}?>
                                         
                                  </select></b> </td>
                               
                              <td><b>Select Year :<select id="year" class="form-control" name="year" onChange="return getSemester(this.value)">
                                          
                                      </select></b></td>
                                       </tr>
                                <tr>  
                                      <td>
                                       <b>Select Semester:<select class="form-control" id="semester" name="semester" onChange="return getSubject(this.value)">
                                            
                                             </select></b> 
                                    </td>
                                   <td>
                                         <div class="form-group">
                                            <b>Select Division:
                                            <select class="form-control" id="division" name="division">
                                                
                                            </select>
                                        </div>
                                     </td>
                                      </tr>
                                                      
                                </thead>
                                <tr><td colspan="2"><center>
                                          <button type="submit" id="rn_rep_submit" name="rn_rep_submit" class="btn btn-primary"style="width: 30%;" >Get Report</button>
                              </center> </td></tr> 
                                     </table>
                                </form>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
                <!-- /. ROW  -->
            
                <!-- /. ROW  -->
        </div>
               
    </div>
             <!-- /. PAGE INNER  -->
            </div>

                                            

<?php
    include 'footer.php';
?>