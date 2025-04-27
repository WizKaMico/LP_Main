<div class="row">
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <div class="table-responsive">
                       <table id="activitiyTable"
                         class="align-middle mb-0 table table-borderless table-striped table-hover">
                         <thead>
                             <th>HID</th>
                             <th>ACTIVITY</th>
                             <th>DATE</th>
                         </thead>
                         <tbody>
                             <?php
                            $activity = $portCont->getAaccountActivity($agent_id);
                            if (!empty($activity)) {
                                foreach ($activity as $key => $value) {
                                    echo 
                                    "<tr>
                                        <td>".$value['hid']."</td>   
                                        <td>".$value['activity']."</td>
                                        <td>".$value['date_created']."</td>
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
            