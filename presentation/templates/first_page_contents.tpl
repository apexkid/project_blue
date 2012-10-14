{*first_page_contents.tpl*}

{load_presentation_object filename = "first_page_contents" assign = "obj"}

{*start*}

<h1 class ="title"> <a href="index.php?ShowId=1"> FEATURED PRODUCTS </a> </h1> <br/>
<ul class="thumbnails">
{section name=i loop = $obj -> first_page_featured}
	{assign var=selected  value = "class=\"selected\""}
	<li class="span2">
	 <div class="thumbnail">
		<address>
		<a href="{$obj -> first_page_featured[i].link_to_product}" > <img src="{$obj -> first_page_featured[i].link_to_image}" alt="{$obj -> first_page_featured[i].shortdescription}">
		<h5>{$obj -> first_page_featured[i].product_name}</h5> </a>
		</address>
	 </div>
		
	</li>
{/section}
<br/>

<h1 class ="title"> HOT PRODUCTS </h1> <br/>
<ul class="thumbnails">
{section name=i loop = $obj -> first_page_hot}
	{assign var=selected  value = "class=\"selected\""}
	<li class="span2">
	 <div class="thumbnail">
		<address>
		<a href="{$obj -> first_page_hot[i].link_to_product}" > <img src="{$obj -> first_page_hot[i].link_to_image}" alt="{$obj -> first_page_hot[i].shortdescription}" />
		<h5>{$obj -> first_page_hot[i].product_name}</h5> </a> 
		</address>
	 </div>
		
	</li>
{/section}

<h1 class ="title"> NEW PRODUCTS </h1> <br/>
<ul class="thumbnails">
{section name=i loop = $obj -> first_page_new}
	{assign var=selected  value = "class=\"selected\""}
	<li class="span2">
	 <div class="thumbnail">
		<address>
		<a href="{$obj -> first_page_new[i].link_to_product}" > <img src="{$obj -> first_page_hot[i].link_to_image}" alt="{$obj -> first_page_new[i].shortdescription}">
		<h5>{$obj -> first_page_new[i].product_name}</h5> </a>
		</address>
	 </div>
		
	</li>
{/section}

{*end*}