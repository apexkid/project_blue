<?php /* Smarty version Smarty-3.0.8, created on 2012-10-12 22:59:46
         compiled from "C:\xampp\htdocs\project_blue/presentation/templates\productpage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5030507884c271df77-72418217%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dd1f8e48e289e145f1307abc49659336ad14ce1a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\project_blue/presentation/templates\\productpage.tpl',
      1 => 1349733921,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5030507884c271df77-72418217',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_load_presentation_object')) include 'C:\xampp\htdocs\project_blue/presentation/smarty_plugins\function.load_presentation_object.php';
?>
<?php echo smarty_function_load_presentation_object(array('filename'=>"productpage",'assign'=>"obj"),$_smarty_tpl);?>



	<?php if ($_smarty_tpl->getVariable('obj')->value->product_data[0]['isactive']){?>
	<div class="row">
		<div class="span9">
				<div class="span9">
						<ul class="breadcrumb">
							<li>
							<a href="#">Home</a> <span class="divider">></span>
							</li>
							<li>
							<a href="#">Mobile Phones</a> <span class="divider">></span>
							</li>
							<a href="#">Accessories</a> <span class="divider">></span>
							</li>
							<a href="#">Earphones</a> <span class="divider">></span>
							</li>
							<li class="active">Tekfusion - Tws (Black ..</li>
						</ul>
				</div>
				
				<div class="span9"> 
					<div class="row">
						<div class="span3" ><a href="<?php echo $_smarty_tpl->getVariable('obj')->value->product_data[0]['link_to_largeimage'];?>
" class="zoom"><img src="<?php echo $_smarty_tpl->getVariable('obj')->value->product_data[0]['link_to_smallimage'];?>
" ></a> 
						</div>
						<div class="span6" >
						
							<div class="row">
								<div class="span6">
								<h1> <?php echo $_smarty_tpl->getVariable('obj')->value->product_data[0]['product_name'];?>

									<small> (Additional Text)</small>
								 </h1>
								<div id="ratings" class="span6"> <strong> Rating :  <?php echo $_smarty_tpl->getVariable('obj')->value->product_data[0]['rating'];?>
 </strong> &nbsp; Calculated from  221 Ratings  |  62 Reviews</div> 
									<table >
										<tbody>
											<tr>
												<td>
													<ul>
													<li>Android v2.3 OS </li>
													<li> 5 MP camera -front </li>
													</ul>
												</td>
											    <td>
													<ul>
													<li>0.3 MP Secondary Camera</li>
													<li>3.5-inch TFT Touchscreen</li>
													</ul>
												</td>											
												
											</tr>
										</tbody>
									</table>
									<div id="product_warranty" ><small> with 1 year manufacturer warranty for Phone and 6 months warranty for in the box accessories </small></div></br>

									<table >
										<tbody>
											<tr>
												<td>
													<div id="pricebox" class="span3">
														<h3><span class="label label-info">Price:</span></h3>
														<div id="price"> <h2> <font color="red">Rs. <?php echo $_smarty_tpl->getVariable('obj')->value->product_data[0]['currentprice'];?>
 </font> </h2> </div>
														<div><small>(Prices are inclusive of all taxes)</small> </div>
													</div>
												</td>
												<td>
													<div id="stock" class="span3">
														<div id="stock-status"> IN STOCK </div> 
																<div id="shipping_details" class="modal hide fade">
		   <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h3>Modal Heading</h3>
            </div>
            <div class="modal-body">
              <h4>Text in a modal</h4>
              <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem.</p>

              <h4>Popover in a modal</h4>
              <p>This <a href="#" class="btn popover-test" title="A Title" data-content="And here's some amazing content. It's very engaging. right?">button</a> should trigger a popover on hover.</p>

              <h4>Tooltips in a modal</h4>
              <p><a href="#" class="tooltip-test" title="Tooltip">This link</a> and <a href="#" class="tooltip-test" title="Tooltip">that link</a> should have tooltips on hover.</p>

              <hr>

              <h4>Overflowing text to show optional scrollbar</h4>
              <p>We set a fixed <code>max-height</code> on the <code>.modal-body</code>. Watch it overflow with all this extra lorem ipsum text we've included.</p>
              <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
              <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
              <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
              <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
              <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
              <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
            </div>
            <div class="modal-footer">
              <a href="#" class="btn" data-dismiss="modal" >Close</a>
              <a href="#" class="btn btn-primary">Save changes</a>
            </div>
         </div>
														<div id="deliveredin">Delivered in <strong>2-4 business days.</strong>.</br><a href="#shipping_details" data-toggle="modal">See details</a></div>
													</div>
												</td>
											</tr>
										</tbody>
									</table>
									
									<div class="well">
									Free home delivery
									</div>
									<div id="buynowbox" >
									<div class="span6">
									<div class="row">
									
									<div class="span3"><a class="btn btn-large btn-success well" href="<?php echo $_smarty_tpl->getVariable('obj')->value->product_data[0]['link_to_add_product'];?>
">&nbsp;&nbsp;&nbsp;Buy this Now &nbsp;&nbsp;&nbsp;<i class="icon-shopping-cart icon-white"></i></a></div>
									<div class="span3"> With an option to pay <h3> Cash On Delivery </h3> </div>
									</div></div>
									<div class="span6">
									<div class="row">
									</br>
									<div class="span3"><a href="#"><i class="icon-star icon-black"></i> &nbsp; Add to WishList </a></div>
									
									<div class="span3"> <a href="#"> <i class="icon-plus-sign icon-black"></i> &nbsp; Add to Compare List</a></div>
									</div></div>									
									

								</div>
							</div>
							<div class="span6">
							</br>
								<table class="table table-striped table-condensed">
								<thead>
								<tr>
									<th> Also See</th>
								</tr>
								</thead>
								<tbody>
									<tr>
										<td> <?php echo $_smarty_tpl->getVariable('obj')->value->product_data[0]['product_name'];?>
</td>
										<td>Delivered in 2-4 days.</td>
										<td>Rs.<?php echo $_smarty_tpl->getVariable('obj')->value->product_data[0]['currentprice'];?>
</td>
									</tr>
									<tr>
										<td><?php echo $_smarty_tpl->getVariable('obj')->value->product_data[0]['product_name'];?>
</td>
										<td>Delivered in 3-7 days.</td>
										<td>Rs.<?php echo $_smarty_tpl->getVariable('obj')->value->product_data[0]['currentprice'];?>
</td>
									</tr>							
								</tbody>
								</table>
							</div>
						</div>
					</div>

				</div>
				<hr>
				<div class="span9""> 
						<div class="tabbable"> <!-- Only required for left/right tabs -->
						<ul class="nav nav-pills">
						<li class="active"><a href="#tab1" data-toggle="tab">About the <?php echo $_smarty_tpl->getVariable('obj')->value->product_data[0]['product_name'];?>
</a></li>
						<li><a href="#tab2" data-toggle="tab">Specifications of <?php echo $_smarty_tpl->getVariable('obj')->value->product_data[0]['product_name'];?>
</a></li>
						<li><a href="#tab3" data-toggle="tab">User Reviews on <?php echo $_smarty_tpl->getVariable('obj')->value->product_data[0]['product_name'];?>
</a></li>
						</ul>
						<div class="tab-content">
						<div class="tab-pane active" id="tab1"><h2><?php echo $_smarty_tpl->getVariable('obj')->value->product_data[0]['product_name'];?>
</h2></br>
						<?php echo $_smarty_tpl->getVariable('obj')->value->product_data[0]['htmldescription'];?>

						</div>
						<div class="tab-pane" id="tab2">
						<h2>Specifications of <?php echo $_smarty_tpl->getVariable('obj')->value->product_data[0]['product_name'];?>
</h2> </br>

						
						<table class="table table-striped table-bordered table-condensed">
						<tbody> <thead><th>Specifications of <?php echo $_smarty_tpl->getVariable('obj')->value->product_data[0]['product_name'];?>
 </th></thead>
						<table class="table table-striped table-bordered table-condensed">
							<tbody> 
								
								<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('obj')->value->product_property) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total']);
?>
									<tr>
										<td><?php echo $_smarty_tpl->getVariable('obj')->value->product_property[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['property_name'];?>
 </td>
										<td><?php echo $_smarty_tpl->getVariable('obj')->value->product_property[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['value'];?>
 </td>
									</tr>
								<?php endfor; endif; ?>
							</tbody>

							</tbody>
						</table>


						
						</div>
						<div class="tab-pane" id="tab3"><h2>User Reviews</h2></br>
						<p>if u can afford sola or neo-v pls go for it dont write crappy reviews as reviews means ppl who have gone thruu d fone.
						many ppl cant live with 6 gb space n i am a 20 year old engineering lad who thinks 6 gb is more then sufficient for me!
						as i want songs n vids n pics n not a porn collection!
						there are people who want to know about this fone n this fone only has one flaw; mem card... if u can deal with it then go for it n if your requirments are higher then that please dont say this fone is lame as its obviously better then neo-v cuz of the dual core n d amazing gui!its not making fool out of ppl! its letting middle class people buy such an amazing piece!
						n sola is suppose to be an elder to 'U'.. hence dont compare..
						u gt money! go for it but personaly i love my new briliant NXT U! Stunning masterpiece in good price!amazing sound!goes with my beats solo!the gui is eccstatic n performance beat nexus by miles! </div>
						</div>
						</div>
					
				</div>
				<div id="supported_acc_carousel" class="span9 well">
					<strong>Supported Accessories for <?php echo $_smarty_tpl->getVariable('obj')->value->product_data[0]['product_name'];?>
<br/></strong>
					<img src="supported_accessories.jpg" alt="">
				</div>
				<div id="recommended_prod_carousel" class="span9 well">
					<strong>Recommended Products Based on your browsing History <br/></strong>
					<img src="recommended.jpg" alt="">
				</div>
		</div>
		<div class="span3"> <!-- RIGHT PROMOTIONAL ADDS AND ALL -->
		</div>
	</div>
	<?php }else{ ?>
		<h2> This Product doesnt exists or has been removed from our records. </h2>
	<?php }?>