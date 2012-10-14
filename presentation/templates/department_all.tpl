{*smarty*}
{load_presentation_object filename="department_all" assign="obj"}


<ul class="thumbnails">
{section name=i loop = $obj -> products_all}
	<li class="span2">
	 <div class="thumbnail">
		
		<a href="{$obj -> products_all[i].link_to_product}" > <img src="{$obj -> products_all[i].link_to_image}">
		<h5>{$obj -> products_all[i].product_name}</h5> </a>
		Rs. {$obj -> products_all[i].currentprice}
	 </div>
	</li>
{/section}
</ul>

<div class="thumbnail" id="postedProducts"> </div>

<div id="showMoreProducts" style="display:none;"><center>
	<img src="images/gif/loading1.gif"> </center> </div>

	
{literal}
<script>
	$(window).scroll( function()
	{
		if( $(window).scrollTop() == $(document).height() - $(window).height() ){
			$('div#showMoreProducts').show();
			$.ajax({
				url: "presentation/department_all.php?LastProductId=10",
				success: function(html) {
					if(html) {
						$('#postedProducts').append(html);
						$('div#showMoreProducts').hide();
					} else {
						$('div#showMoreProducts').replaceWith("<h4> END OF IT </h4>");
					}
				}
			});
		}
	});
</script>
{/literal}