<?php
/* Smarty version 3.1.33, created on 2019-06-14 21:04:32
  from '/Users/ronin/Code/Youngzsoft/test_one/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d040be0365979_62764081',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bdf6d05e22943266eccec4a449a2291a44a73138' => 
    array (
      0 => '/Users/ronin/Code/Youngzsoft/test_one/templates/index.tpl',
      1 => 1560544141,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5d040be0365979_62764081 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"Project Test"), 0, false);
?>

	<div class="container">
	  <div class="row">
	    <div class="col">
		    <table id="couponList" class="table table-striped">
				  <thead>
				  	<tr>
				  		<th>Reseller Code</th>
				  		<th>Discount</th>
				  		<th>Commission</th>
				  		<th>Product</th>
				  		<th>Status</th>
				  	</tr>
				  </thead>
				  <tbody>
				    <?php
$__section_sec1_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['coupons']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_sec1_0_total = $__section_sec1_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_sec1'] = new Smarty_Variable(array());
if ($__section_sec1_0_total !== 0) {
for ($__section_sec1_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] = 0; $__section_sec1_0_iteration <= $__section_sec1_0_total; $__section_sec1_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']++){
?>
						  	<tr>
						  		<td><a href="#">
						  				<?php echo $_smarty_tpl->tpl_vars['coupons']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] : null)]['resellercode'];?>

						  			</a></td>
						  		<td><?php echo $_smarty_tpl->tpl_vars['coupons']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] : null)]['discount'];?>
%</td>
						  		<td><?php echo $_smarty_tpl->tpl_vars['coupons']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] : null)]['commission'];?>
%</td>
						  		<td><?php echo $_smarty_tpl->tpl_vars['coupons']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] : null)]['product'];?>
</td>
						  		<td><?php echo $_smarty_tpl->tpl_vars['coupons']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] : null)]['status'];?>
</td>
						  	</tr>
				    <?php
}
}
?>
				  </tbody>
				</table>
	    </div>
	  </div>

	  <div class="row">
	  	<div class="col-4">
	  		<button type="button" class="btn btn-primary" id="addCoupon" data-toggle="modal" data-target="#addModal">Add Coupon</button>
	  	</div>
	  </div>
	</div>

<!-- Modal -->
<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Add Coupon</h4>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="control-label">Reseller Code:</label>
            <input type="text" class="form-control" id="resellercode">
          </div>

          <div class="form-group">
            <label for="recipient-name" class="control-label">Discount (%):</label>
            <input type="text" class="form-control" id="discount">
          </div>

          <div class="form-group">
            <label for="recipient-name" class="control-label">Commission (%):</label>
            <input type="text" class="form-control" id="commission">
          </div>

          <div class="form-group">
            <label for="recipient-name" class="control-label">Product:</label>
            <select class="form-control" id="product">
						  <option value="ALL">ALL</option>
						  <option value="CCBoot">CCBoot</option>
						  <option value="iCafeCloud">iCafeCloud</option>
						</select>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="saveCoupon">Save changes</button>
      </div>
    </div>
  </div>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
