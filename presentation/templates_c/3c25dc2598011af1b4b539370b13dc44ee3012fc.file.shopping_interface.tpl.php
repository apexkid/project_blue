<?php /* Smarty version Smarty-3.0.8, created on 2012-10-14 00:10:32
         compiled from "C:\xampp\htdocs\project_blue/presentation/templates\shopping_interface.tpl" */ ?>
<?php /*%%SmartyHeaderCode:24725079e6d8e92228-46906008%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3c25dc2598011af1b4b539370b13dc44ee3012fc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\project_blue/presentation/templates\\shopping_interface.tpl',
      1 => 1349733921,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24725079e6d8e92228-46906008',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_load_presentation_object')) include 'C:\xampp\htdocs\project_blue/presentation/smarty_plugins\function.load_presentation_object.php';
?>

<?php echo smarty_function_load_presentation_object(array('filename'=>"shopping_interface",'assign'=>"obj"),$_smarty_tpl);?>



<div class="container">
    <div class="row-fluid">
		<div class="span3" >
			<div class="span3 clearfix" id="navbar"> <?php $_template = new Smarty_Internal_Template($_smarty_tpl->getVariable('obj')->value->dCell, $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?> </div>
			<div class="span3 id="featured 1" clearfix"></div>
			<div class="span3 id="featured 2" clearfix"></div>
			<div class="span3 id="featured 3" clearfix"></div>
		</div>
		
		<div class="span8">
			<div class="span8" id="slider">
				<div id="myCarousel" class="carousel">
					<!-- Carousel items -->
					<div class="carousel-inner">
						<div class="active item"><img src="images/featured_on_slider/1.jpg" alt=""></img></div>
						<div class="item"><img src="images/featured_on_slider/2.jpg" alt=""></img></div>
					</div>
				
					<!-- Carousel nav -->
					<a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
					<a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
				</div> <hr/>
			</div>
			
			<div class="span8" id="bestsellers">
				<?php $_template = new Smarty_Internal_Template($_smarty_tpl->getVariable('obj')->value->mContentsCell, $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?> <hr/>
			</div>

			<div class="span8" id="supersavers"><hr/> </div>
			<div class="span8" id="latest_arrivals"><hr/> </div>
			<div class="span8"><hr/></div>
		</div>
	</div>
</div>

    </div> <!-- /container -->
</body>
</html>