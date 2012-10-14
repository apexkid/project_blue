{*smarty*}

{load_presentation_object filename="topbar" assign="obj"}
{*start*}

<div class="navbar-inner">
	<div class="container-fluid">
		<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</a>
		<a class="brand" href="{$obj -> homeLink}">Dwingg</a>
		<div class="nav-collapse">
			<ul class="nav">
				<li ><a href="/project_blue">Home</a></li>
				<li><a href="about.html">About</a></li>
				<li><a href="contact.html">Contact</a></li>
			</ul>    
            
			<ul class="nav">
				<li class="divider-vertical"></li>
				<form class="navbar-search pull-left" method="post" action="{$obj->mLinkToSearch}">
					
					<select id="category" name="category" class="navbar-form pull-right">
						<option value="0"> All Categories </option>
						{section name=i loop = $obj -> mCategories}
							<option value="{$obj->mCategories[i].department_id}"> {$obj->mCategories[i].department_name} </option>
						{/section}
					</select>
					<input type="text" maxlength="100" class="nav search-query" placeholder="What are you Dwingg today?" name="search_string" id="search_string" value="{$obj->search_string}"> 
				</form>
				<li class="divider-vertical"></li>
			</ul>                

			<ul class="nav pull-right"> 
				<li><a href="#home">Home</a></li>
				<li class="divider-vertical"></li>
				<li id="fat-menu" class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Account<b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="#"><i class="icon-book"> </i> Purchase History</a></li>
						<li><a href="#"><i class="icon-cog"> </i> Account Settings </a></li>
						<li><a href="#"><i class="icon-shopping-cart"> </i>&nbsp;View Cart</a></li>
						<li class="divider"></li>
						<li><a href="#">Logout</a></li>
					</ul>
				</li>
			</ul>

		</div>  <!--/.nav-collapse -->
	</div>
</div>