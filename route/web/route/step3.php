<form  id="contact" action="?view=CONSULTATION&action=STEP3" method="POST">
			<h3>Hi! <?php echo $consultation[0]['firstname'].' '.$consultation[0]['lastname']; ?></h3>	
            <p> We would like to know the following details </p>
            <hr />
			<fieldset>
            <input type="hidden" name="code" value="<?php echo $consultation[0]['code']; ?>" required autofocus>
              <select name="holding_credit_back" tabindex="1" required autofocus>
                 <option value="Late payment">Late payment</option>
                 <option value="Charge-off">Charge-off</option>
                 <option value="Collection">Collection</option>
                 <option value="Repossession">Repossession</option>
                 <option value="Foreclosure / Eviction">Foreclosure / Eviction</option>
                 <option value="Bankruptcy">Bankruptcy</option>
                 <option value="Identity theft">Identity theft</option>
                 <option value="Other">Other</option>
                 <option value="I'm not sure">I'm not sure</option>
              </select>
			</fieldset>
			<fieldset>
              <select name="disputed" tabindex="2" required autofocus>
                 <option value="Yes">Yes</option>
                 <option value="No">No</option>
                 <option value="I'm not sure">I'm not sure</option>
              </select>
			</fieldset>
			<fieldset>
               <textarea placeholder="How much money are you willing to invest in fixing your credit?" name="money_invest" tabindex="3" required></textarea>
			</fieldset>
            <fieldset>
               <textarea placeholder="Message (optional)" name="message" tabindex="4"></textarea>
			</fieldset>
            <fieldset>
			  <input type="date" name="consultation_time" tabindex="5" required autofocus>
			</fieldset>
			<fieldset>
			   <button name="submit" type="submit" name="submit" id="contact-submit">NEXT</button>
			</fieldset>
		</form>  	