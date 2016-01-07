<?php if( count( $this->session->flashdata('addItem') ) ): ?>
	<br>
<div class="alert alert-danger">
	<?php $msg = $this->session->flashdata('addItem');?>
	<?php print_r($msg['msg']);?>
</div>
<?php endif;?>
<?php $product = $data['product'];?>

<div class="panel-body">

<div class="row">
    <div class="col-lg-8">

        <form role="form" action="/s-admin/product/add/" method="post" name="AddFrm">
        	<?php if( isset($product['id']) && $product['id'] > 0 ): ?>
        		<input type="hidden" value="<?=$product['id']?>" name="product[id]">
        	<?php endif;?>

        	<div class="panel panel-default">
	            <div class="panel-heading">
	                Product Info
	            </div>
	        	<div class="panel-body">

		    		<div class="row">
			    		<div class="col-lg-12">

			            <div class="form-group col-lg-4">
			                <label>Name</label>
			                <input type="text" class="form-control" value="<?=$product['name']?>" placeholder="SB Website Package" name="product[name]" />
			            </div>

			            <div class="form-group col-lg-4">
			                <label>Type</label>
			                <select class="form-control" name="product[type_id]">
			                	<option>Select type</option>
			                	<?php foreach($data['product_type'] as $key => $val):?>
			                	<option value="<?=$key?>" <?php if($key == $product['type_id']) echo "SELECTED"; ?> ><?=$val?></option>
			                	<?php endforeach;?>
			                </select>
			            </div>

			            <div class="form-group col-lg-4">
			                <label>Price</label>
			                <input type="text" class="form-control" value="<?=$product['price']?>" placeholder="$19.99" name="product[price]" />
			            </div>

			            </div>
		            </div>

	            </div>
            </div>


        	<div class="col-lg-12 text-right">
	            <div class="form-group col-lg-12">
	            	<button type="submit" class="btn btn-success">Save</button>
	            	<a href="<?=site_url("s-admin/product/");?>"><button type="button" class="btn btn-default">Cancel</button></a>
	        	</div>
        	</div>

        </form>


    </div>
    <!-- /.col-lg-12 -->
</div>
</div>