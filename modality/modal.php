<!-- Modal 2 -->
  <div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog" style="width:450px;">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <!-- <h4 class="modal-title">Register</h4> -->
        </div>
        <div class="modal-body">
            <form method="post" class="form-horizontal" enctype="multipart/form-data" name="regform" onSubmit="return validate();">  
                     <center> 
                        <input type="text" name="name" style = " height:45px" class="form-control" placeholder="        Full Name" />   
                    </center>
                     <br />    
                     <center> 
                        <input type="text" name="email"  style = " width:414px; height: 45px" class="form-control" placeholder="        Email" />  
                     </center>
                     <br />  
                      <center> 
                        <input type="password" name="password"  style = " width:414px; height: 45px" class="form-control" placeholder="        Password" />  
                     </center>
                     <br />  
                      <center> 
                        <input type="text" name="designation"  style = " width:414px; height: 45px" class="form-control" placeholder="        Address" />  
                     </center>
                     <br />  
                      <center> 
                        <input type="file" name="image" class="form-control">
                     </center>
                     <br/>
                     <center>
                         <select name="gender" class="form-control" required>
                            <option value="">Select</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                         </select>
                     </center>
                     <br />  
                     <center> 
                        <input type="text" name="mobileno"  style = " width:414px; height: 45px" class="form-control" placeholder="        Phone" />  
                     </center>
                     <br/>
                    <center><button type="submit" name="submit"  style="width: 400px; height: 40px; background-color: orange; font-size: 18px;"  class="btn btn-warning btn-primary">Register</button></center>

                      <hr/>
                     </center>
                 </form>
                   
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
</div>
