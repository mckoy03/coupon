<?php
/* Smarty version 3.1.33, created on 2019-06-14 21:04:32
  from '/Users/ronin/Code/Youngzsoft/test_one/templates/footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d040be0375d57_56875576',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9e2ed1fcb7d49f3acbf373c96450d57b6c63103e' => 
    array (
      0 => '/Users/ronin/Code/Youngzsoft/test_one/templates/footer.tpl',
      1 => 1560544133,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d040be0375d57_56875576 (Smarty_Internal_Template $_smarty_tpl) {
?>		<?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"><?php echo '</script'; ?>
>

		<!-- Latest compiled and minified JavaScript -->
		<?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"><?php echo '</script'; ?>
>
	
		<?php echo '<script'; ?>
 type="text/javascript">
			$('#saveCoupon').on('click', function(e) {
				saveCoupon();
			});

			function saveCoupon() {
				var dataValues = {
				      		insert: true,
				      		resellercode: $('#resellercode').val(),
									discount: $('#discount').val(),
									commission: $('#commission').val(),
									product: $('#product').val()
				      	};

				var insert = $.ajax({
				      type: 'POST',
				      url: "/?insert_coupon=1",
				      data: dataValues,
				      dataType: "json",
				      success: function(resultData) { 
			      		if (resultData.id !== undefined && resultData.id != 0) {
				      		var newRow = "<tr>" +
			      								  		"<td><a href='#'>" + resultData.resellercode + "</a></td>" +
			      								  		"<td>" + resultData.discount + "%</td>" +
			      								  		"<td>" + resultData.commission + "%</td>" +
			      								  		"<td>" + resultData.product + "</td>" +
			      								  		"<td>" + resultData.status + "</td>" +
			      								  	"</tr>";

			      			$(newRow).appendTo($("#couponList"));

									$('#resellercode').removeAttr('value');
									$('#discount').removeAttr('value');
									$('#commission').removeAttr('value');
									$('#product').removeAttr('value');

									$('#addModal').modal('hide');
			      		}
				      },
				      error: function(XMLHttpRequest, textStatus, errorThrown) { 
                alert("Status: " + textStatus); alert("Error: " + errorThrown); 
              } 
				});
			}
		<?php echo '</script'; ?>
>
  </body>
</html><?php }
}
