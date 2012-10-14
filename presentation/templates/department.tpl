{*department.tpl*}

{load_presentation_object filename = "department" assign = "obj"}

{*start*}

<h1 class ="title"> DEPARTMENT FEATURED PRODUCTS </h1> <br/>
<ul class="thumbnails">
{section name=i loop = $obj -> department_featured}
	{assign var=selected  value = "class=\"selected\""}
	<li class="span2">
	 <div class="thumbnail">
		<address>
		<a href="{$obj -> department_featured[i].link_to_product}" > <img src="{$obj -> department_featured[i].link_to_image}" alt="{$obj -> department_featured[i].shortdescription}">
		<h5>{$obj -> department_featured[i].product_name}</h5> </a>
		</address>
	 </div>
		
	</li>
{/section}
<br/>

<h1 class ="title"> DEPARTMENT HOT PRODUCTS </h1> <br/>
<ul class="thumbnails">
{section name=i loop = $obj -> department_hot}
	{assign var=selected  value = "class=\"selected\""}
	<li class="span2">
	 <div class="thumbnail">
		<address>
		<a href="{$obj -> department_hot[i].link_to_product}" > <img src="{$obj -> department_hot[i].link_to_image}" alt="{$obj -> department_hot[i].shortdescription}" />
		<h5>{$obj -> department_hot[i].product_name}</h5> </a> 
		</address>
	 </div>
		
	</li>
{/section}

<h1 class ="title"> DEPARTMENT NEW PRODUCTS </h1> <br/>
<ul class="thumbnails">
{section name=i loop = $obj -> department_new}
	{assign var=selected  value = "class=\"selected\""}
	<li class="span2">
	 <div class="thumbnail">
		<address>
		<a href="{$obj -> department_new[i].link_to_product}" > <img src="{$obj -> department_hot[i].link_to_image}" alt="{$obj -> department_new[i].shortdescription}">
		<h5>{$obj -> department_new[i].product_name}</h5> </a>
		</address>
	 </div>
		
	</li>
{/section}

{*end*}