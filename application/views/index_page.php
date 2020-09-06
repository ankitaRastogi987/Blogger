<style type="text/css">
	.ank
	{
		background-color: yellow;
		color: blue;
	}
</style>

<?php
	echo form_open('Welcome/second');

	echo form_label("Enter Username ","uname",['class'=>'ank']);
	echo form_input(['name'=>'uname','placeholder'=>'Write here...','class'=>'ank'])."<br>";
	echo form_label("Enter Password","pass");
	echo form_input(['type'=>'password','name'=>'pass'])."<br>";
	echo form_submit('btnsubmit','Login',['class'=>'btn btn-primary']);
	echo form_checkbox('completed');

	echo form_close();
?>
