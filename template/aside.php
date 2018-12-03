 <?php 
 /* Template for sidebar */
 ?>
        <div class="block">
		 <h2 class="block-title">First Block</h2>
         <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
        </div>
        <div class="block">
		  <h2 class="widget-title">Message Us</h2>
		  <form method="post" action="res/sendmail.php">
			Email: <input type="email" name="email" required /><br>
			Message:<br>
			<textarea name="message" rows="5" cols="30" maxlength="4000" required></textarea><br>
			<p class="ihatespam">Url: <input type="text" name="url" /></p>
			<input type="submit" />
		  </form>
        </div><!-- /.block -->
        <div class="block">
         This is last block of the sidebar. And place it here for testing purpose
        </div>
