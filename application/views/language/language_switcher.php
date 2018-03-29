<!-- Start of form -->
<!-- 
** This form swithes control to controller/language_switcher/l after for submission
** --> 

<!-- 
**@echo form_open('language_switcher/l') is equivalent to : <form method="post" accept-charset="utf-8" action="http://localhost:8080/index.php/language_switcher/l">

**@$attributes = array('class' => 'email', 'id' => 'myform');
echo form_open('language_switcher/l', $attributes); or 
echo form_open('language_switcher/l', 'class="email" id="myform"'); is equivalent to : <form method="post" accept-charset="utf-8" action="http://localhost:8080/index.php/language_switcher/l" class="email" id="myform">

**
 -->
<?php echo form_open('language_switcher/l', array('class' => 'form', 'id' => 'language','name' => 'language')); ?> 

	<label for="language">Select your language : </label>					
	<select id="language" name="language" >
		<option value="english">Choose Your Language</option>
		<option value="arabic">Arabic</option>
	  <option value="armenian">Armenian</option>
	  <option value="azerbaijani">Azerbaijani</option>
	  <option value="bengali">Bengali</option>
	  <option value="bulgarian">Bulgarian</option>
	  <option value="catalan">Catalan</option>
	  <option value="simplified-chinese">Chinese Simplified</option>
	  <option value="traditional-chinese">Chinese Traditional</option>
	  <option value="croatian">Croatian</option>
	  <option value="czech">Czech</option>
	  <option value="danish">Danish</option>
	  <option value="dutch">Dutch</option>
	  <option value="english">English</option>
	  <option value="french">French</option>
	  <option value="german">German</option>
	  <option value="greek">Greek</option>
	  <option value="gujarati">Gujarati</option>
	  <option value="hindi">Hindi</option>
	  <option value="hungarian">Hungarian</option>
	  <option value="indonesian">Indonesian</option>
	  <option value="italian">Italian</option>
	  <option value="japanese">Japanese</option>
	  <option value="khmer">Khmer</option>
	  <option value="korean">Korean</option>
	  <option value="latvian">Latvian</option>
	  <option value="lithuanian">Lithuanian</option>
	  <option value="norwegian">Norwegian</option>
	  <option value="persian">Persian</option>
	  <option value="polish">Polish</option>
	  <option value="portuguese">Portuguese</option>
	  <option value="portuguese-brazilian">Portuguese-Brazilian</option>
	  <option value="romanian">Romanian</option>
	  <option value="russian">Russian</option>
	  <option value="serbian">Serbian</option>
	  <option value="slovak">Slovak</option>
	  <option value="slovenian">Slovenian</option>
	  <option value="spanish">Spanish</option>
	  <option value="swedish ">Swedish </option>
	  <option value="tamil">Tamil</option>
	  <option value="thai">Thai</option>
	  <option value="turkish">Turkish</option>
	  <option value="ukrainian">Ukrainian</option>
	  <option value="urdu">Urdu</option>
	  <option value="vietnamese">Vietnamese</option>
	</select>
	<input type="submit" name="submit" value="Ok">
<?php echo form_close(); ?>

<!--  End of Form-->

<?php 