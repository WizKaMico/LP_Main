       <form  id="contact" action="?view=CONSULTATION&action=STEP2" method="POST">
			<h3>Hi! <?php echo $consultation[0]['firstname'].' '.$consultation[0]['lastname']; ?></h3>	
            <p> We would like to know the following details </p>
            <hr />
			<fieldset>
              <input type="hidden" name="code" value="<?php echo $consultation[0]['code']; ?>" required autofocus>
			  <input placeholder="What are your personal credit goals?" type="text" name="credit_goals" tabindex="1" required autofocus>
			</fieldset>
			<fieldset>
              <select name="credit_score" tabindex="2" required autofocus>
                 <option value="700-800">700-800</option>
                 <option value="600-700">600-700</option>
                 <option value="Below 600">Below 600</option>
                 <option value="Not Sure">Not Sure</option>
              </select>
			</fieldset>
			<fieldset>
              <select name="employment_status" tabindex="3" required autofocus>
                 <option value="Fulltime">Fulltime</option>
                 <option value="Parttime">Parttime</option>
                 <option value="Student">Student</option>
                 <option value="In Between Jobs">In Between Jobs</option>
              </select>
			</fieldset>
			<fieldset>
              <select name="housing_status" tabindex="4" required autofocus>
                 <option value="Rent">Rent</option>
                 <option value="Own">Own</option>
                 <option value="Student Housing">Student Housing</option>
                 <option value="Other">Other</option>
              </select>
			</fieldset>
			<fieldset>
			   <button name="submit" type="submit" name="submit" id="contact-submit">NEXT</button>
			</fieldset>
		</form>  	