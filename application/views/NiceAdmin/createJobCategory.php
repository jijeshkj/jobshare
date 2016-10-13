          <div class="form quick-post">
                                      <!-- Edit profile form (not working)-->
                                      <form class="form-horizontal" id='categoryform' method='post'  >
                                          <!-- Title -->
                                          <div class="form-group">
                                           
                                            <div class="col-lg-offset-2"> 
                                             
                                            </div>
                                          </div>   
                                          <!-- Content -->
                                                                 
                                          <!-- Cateogry -->
                                                 <div class="form-group">
                                           
                                            <div class="col-lg-offset-2"> 
                                             <h1>Add New Job Category</h1>
                                            </div>
                                             <div class="alert-success" style="height:50px;" id="successmsg">

                                           </div> 
                                          </div>    
                                             
                                          <!-- Tags -->
                                          <div class="form-group">
                                            <label class="control-label col-lg-3" for="tags">Category name</label>
                                            <div class="col-lg-2">
                                              <input type="text" name='category' class="form-control" id="category"><label id='lblcategory'></label>
                                            </div>
                                            <div class="col-lg-2">
                                              <button type="button" onClick="validation()" class="btn btn-primary">Save</button>
                                          
                                            </div>
                                          </div>
                                          
                                          <!-- Buttons -->
                                          <div class="form-group">
                                             <!-- Buttons -->
                    
                                          </div>
                                      </form>
                                    </div>
   


                                    <script>
                                   

                                     function validation(){
                                     
                                     if($("#category").val()==''){
                                      $("#category").focus();
                                      $("#lblcategory").html('<span style=color:red>category is required</span>');
                                      //$("#lblcategory").fadeOut('500');
                                      return false;
                                     }
                                     else{
                                        $.ajax({
                                             type: "POST",
                                             url: '<?php echo base_url('JobController/saveCategory');?>',
                                             data: $("#categoryform").serialize(), 
                                             
                                              success: function (data) {
                                                  $("#successmsg").html('<center><span style=color:red>Suucessfully Added</span></center>');
                                                  $("#category").val('');
                                                  $("#successmsg").fadeOut(3000);
                                                 // window.location('reload');
                                              }
                                          });

                                     
                                     }
                                     }
                                  
                                    </script>