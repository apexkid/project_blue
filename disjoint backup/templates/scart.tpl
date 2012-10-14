{*shopping_Cart_details.tpl*}

{load_presentation_object filename="scart" assign="obj"}

{if $obj->mIsCartNowEmpty eq 1}
	<h3> Your shopping cart is Empty </h3>
{else}
	<h3> Products in shopping cart </h3>
	
	<form class="cart_form" method="post" action={$obj->mUpdateCartTarget}>
		<table>
			<tr>
				<th> Product Name </th>
				<th> Price </th>
				<th> Quantity </th>
				<th> SubTotal </th>
				<th> &nbsp; </th>
			</tr>
			{section name=i loop=$obj->mCartProducts}
			<tr>
				<td> <input name="itemId[]" type="hidden" value="{$obj->mCartProducts[i].item_id}" /> {$obj->mCartProducts[i].product_name} </td>
				<td> {$obj->mCartProducts[i].currentprice} </td>
				<td> <input type="text" name="quantity[]" size="2" value="{$obj->mCartProducts[i].quantity}" > </td>
				<td> <h5>{$obj->mCartProducts[i].subtotal} </h5> </td>
				<td> <a href="{$obj->mCartProducts[i].save}"> Save for later </a> <br/> 
				<a href="{$obj->mCartProducts[i].remove}"> Remove </a>
				</td>
			</tr>
			{/section}
		</table>
		
		<p> Your total amount is {$obj->mTotalAmount} </p> <br />
		<input type="submit" name="update" value="update" /> <br/>
	</form>
{/if}

{if $obj->mIsCartLaterEmpty eq 0}
	<h3> Saved Products to Buy </h3>
	<table>
		<tr>
			<th> Product Name </th>
			<th> Price </th>
			<th> Quantity </th>
			<th> SubTotal </th>
			<th> &nbsp; </th>
		</tr>
		{section name=i loop=$obj->mCartSavedProducts}
			<tr>
				<td> {$obj->mCartSavedProducts[i].product_name} </td>
				<td> {$obj->mCartSavedProducts[i].currentprice} </td>
				<td> {$obj->mCartSavedProducts[i].quantity} </td>
				<td> <h5>{$obj->mCartSavedProducts[i].subtotal} </h5> </td>
				<td> <a href="{$obj->mCartSavedProducts[i].move}" /> Move to Cart <br/ >
				<a href="{$obj->mCartSavedProducts[i].remove}"> Remove </a> </td>
			</tr>
		{/section}
	</table>
{else}
	<h4> No products Saved </h4>
{/if}

	
				
				