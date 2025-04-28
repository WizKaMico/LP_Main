        <a href="?view=HOME" class="btn btn-primary" style="width:10%; border-radius:20px;">BACK</a>
           <div class="row mt-2">
             <div class="col-3 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <div class="table-responsive">
                    <h5><b>CALL DISPOSITION</b></h5>
                    <hr />
                      <form method="POST" action="?view=HOME&action=DISPOSITION">
                        <div class="mb-3">
                          <label for="fullname" class="form-label">Fullname</label>
                          <input type="hidden" name="id" value="<?php echo $result[0]['Id']; ?>" class="form-control" readonly="">
                          <input type="text" name="fullname" id="fullname" value="<?php echo $result[0]['Firstname']; echo " "; echo $result[0]['Lastname']; ?>" class="form-control" readonly="">
                        </div>
                        <div class="mb-3">
                          <label for="email" class="form-label">Email</label>
                          <input type="email" name="email" id="email" class="form-control" value="<?php echo $result[0]['Email']; ?>" readonly="">
                        </div>
                        <div class="mb-3">
                          <label for="phone" class="form-label">Phone</label>
                          <input type="phone" name="phone" id="phone" class="form-control" value="<?php echo $result[0]['Primary_Phone']; ?>" readonly="">
                        </div>
                        <div class="mb-3">
                          <label for="disposition" class="form-label">Disposition</label>
                          <select name="disposition" class="form-control" required="">
                            <option value="">--CHOOSE DISPOSITION--</option>
                            <option value="DNC">DNC - Do Not Call</option>
                            <option value="NED">NED - Not Enough Debt</option>
                            <option value="CAMP">CAMP - Can't Afford</option>
                            <option value="NI">NI - Not Interested</option>
                            <option value="P">P - Pitched/FollowUp</option>
                            <option value="SOLD">SOLD</option>
                          </select>
                        </div>
                        <div class="mb-3">
                            <button class="btn btn-primary" name="submit"  style="width:100%; border-radius:20px;">SUBMIT</button>
                        </div>
                      </form>
                   </div>
                </div>
              </div> 
              </div>
              <div class="col-9 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <div class="table-responsive">
                    <h5><b>SCRIPT</b></h5>
                    <hr />
                    </div>
                  </div>
                </div>
              </div>
            </div>
            