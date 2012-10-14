{*admin_menu.tpl*}
{load_presentation_object filename="admin_menu" assign="obj"}

<h1> WELCOME TO ADMIN PANEL </h1>

<p>
	<a href = "{$obj -> mLinkToStoreAdmin}" > CATALOG </a>
	<a href = "{$obj -> mLinkToStoreFront}"> STOREFRONT </a>
	<a href = "{$obj -> mLinkToLogout}" > LOGOUT </a>
</p>

<div class="span4"> 
	<h3> <a href="{$obj-> mLinkToDepartment}"> department </a></h3>
	<h3> <a href="{$obj-> mLinkToProduct}">    products </a> </h3>
	<h3> <a href="{$obj-> mLinkToBrand}">      brands </a></h3>
	<h3> <a href="{$obj-> mLinkToCart}">       cart </a></h3>
</div>

<div class = "span7"> content cell</div>