{*admin_login.tpl*}
{load_presentation_object filename="admin_login" assign="obj"}

<div class="login"> 
	<h3> Admin Login </h3>
	<form method="post" action="{$obj -> mLinkToAdmin}">
		<p> Sign in or go back to <a href="{$obj -> mLinkToIndex}" >Shopping Interface </a> </p> <br/>
		
		{if $obj -> mLoginMessage neq ""}
			<p class="error"> {$obj -> mLoginMessage} </p> <br/>
		{/if}
		
		<p><label for="username"> Username: </label> <input type="text" name="username" value="{$obj->mUsername}" size="20" /></p>
		<p><label for="password"> Password: </label> <input type="password" name="password" size="40" value="" /></p>
		<p> <input type="submit" name="submit" value="Login" /> </p>
	</form>
</div>
		