{*search_products.tpl*}
{*smarty*}

{load_presentation_object filename="search_products" assign="obj"}

<div>
<p> {$obj -> mSearchDescription} </p>
</div>

<ul class="thumbnails">
{section name=i loop = $obj -> mProducts}
	<li class="span2">
	 <div class="thumbnail">	
		<a href="{$obj -> mProducts[i].link_to_product}" > <img src="{$obj -> mProducts[i].link_to_image}">
		<h5>{$obj -> mProducts[i].product_name}</h5> </a>
		Rs. {$obj -> mProducts[i].currentprice}
		
	 </div>
	</li>
{/section}
</ul>

<div class="thumbnail" id="postedProducts"> </div>

<div id="showMoreProducts" style="display:none;"><center>
	<img src="images/gif/loading1.gif"> </center> </div>