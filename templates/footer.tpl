		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	
		<script type="text/javascript">
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
		</script>
  </body>
</html>