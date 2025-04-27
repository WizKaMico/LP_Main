<form  id="contact" action="?view=CONSULTATION&action=STEP3" method="POST">
			<h3>Hi! <?php echo $consultation[0]['firstname'].' '.$consultation[0]['lastname']; ?></h3>	
            <p> Our agent / representative will call you on this date  <?php echo $consultation[0]['consultation_time']; ?></p>
			<a onclick="location.href='?view=HOME'" class="btn" style=" margin-top: 20px; display: inline-block; padding: 12px 24px; background-color: #ff545a; color: white; text-decoration: none; border-radius: 20px; font-weight: bold; transition: background-color 0.3s ease;">COMPLETE</a>
		</form>  	