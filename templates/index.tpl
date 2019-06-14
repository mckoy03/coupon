{include file="header.tpl" title="Project Test"}

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
				    {section name=sec1 loop=$coupons}
						  	<tr>
						  		<td><a href="#">
						  				{$coupons[sec1].resellercode}
						  			</a></td>
						  		<td>{$coupons[sec1].discount}%</td>
						  		<td>{$coupons[sec1].commission}%</td>
						  		<td>{$coupons[sec1].product}</td>
						  		<td>{$coupons[sec1].status}</td>
						  	</tr>
				    {/section}
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

{include file="footer.tpl"}