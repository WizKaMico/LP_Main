           <a href="https://phone.landpassociate.com/#/login" class="btn btn-primary"  target="_blank" style="width:10%; border-radius:20px;">3CX</a>
           <a href="https://mail.hostinger.com/?_user=<?php echo $account[0]['email']; ?>" class="btn btn-primary"  target="_blank" style="width:10%; border-radius:20px;">EMAIL</a>
           <div class="row mt-2">
              <div class="col-3 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <div class="table-responsive">
                       <h5><b>NOTE</b></h5>
                       <hr />
                       <p><b>STEP 1 : </b> Click the 3CX Link Above</p>
                       <img src="../../public/admin/images/instruction/3CXEXTENSION.PNG" style="width:100%; margin-bottom:10px;"/>
                       <p><b>USE YOUR EXTENSION ID : </b><?php echo $account[0]['extension_id']; ?></p>
                       <p><b>STEP 2 : </b> Set password an email arriving at your <b><?php echo $account[0]['email']; ?></b> with subject <b>"Your 3CX account details"</b> it should have the following format. And click <b>Set Your Password</b></p>
                       <img src="../../public/admin/images/instruction/3CXFORMAT.PNG" style="width:100%; margin-bottom:10px;"/>
                       <p><b>STEP 3 : </b> Login and use extension id and the password you set </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-9 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <div class="table-responsive">
                      <h5><b>CALL DISPOSITION</b></h5>
                      <hr />
                      <table id="dispositiontable" class="align-middle mb-0 table table-borderless table-striped table-hover">
                        <thead>
                            <th>Id</th>
                            <th>Fullname</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Disposition</th>
                            <th>Created By</th>
                        </thead>
                        <tbody>
                            <?php
                            $accounts = $portCont->myDisposition();
                            if (!empty($accounts)) {
                                foreach ($accounts as $key => $accounts) {
                                    echo "<tr>
                                            <td>".$accounts['disposition_id']."</td>   
                                            <td>".$accounts['fullname']."</td>
                                            <td>".$accounts['phone']."</td>
                                            <td>".$accounts['email']."</td>
                                            <td>".$accounts['disposition']."</td>
                                            <td>".$accounts['agent']."</td>
                                        </tr>";          
                                }
                            }
                            ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            