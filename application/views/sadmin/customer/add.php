<?php if( count( $this->session->flashdata('addItem') ) ): ?>
	<br>
<div class="alert alert-danger">
	<?php $msg = $this->session->flashdata('addItem');?>
	<?php print_r($msg['msg']);?>
</div>
<?php endif;?>
<?php $customer = $data['customer'];?>

<div class="panel-body">

<div class="row">
    <div class="col-lg-8">

        <form role="form" action="/s-admin/customer/add/" method="post" name="AddFrm">
        	<?php if( isset($customer['id']) && $customer['id'] > 0 ): ?>
        		<input type="hidden" value="<?=$customer['id']?>" name="customer[id]">
        	<?php endif;?>

        	<div class="panel panel-default">
	            <div class="panel-heading">
	                Personal Info
	            </div>
	        	<div class="panel-body">

		    		<div class="row">
			    		<div class="col-lg-12">

			            <div class="form-group col-lg-4">
			                <label>First name</label>
			                <input type="text" class="form-control" value="<?=$customer['first_name']?>" placeholder="Jane" name="customer[first_name]" />
			            </div>

			            <div class="form-group col-lg-4">
			                <label>Middle name</label>
			                <input type="text" class="form-control" value="<?=$customer['middle_name']?>" placeholder="T" name="customer[middle_name]" />
			            </div>

			            <div class="form-group col-lg-4">
			                <label>Last name</label>
			                <input type="text" class="form-control" value="<?=$customer['last_name']?>" placeholder="Doe" name="customer[last_name]" />
			            </div>

			            <div class="form-group col-lg-4">
			                <label>Email</label>
			                <input type="text" class="form-control" value="<?=$customer['email']?>" placeholder="Jane@Testing.com" name="customer[email]" />
			            </div>

			            <div class="form-group col-lg-4">
			                <label>Phone 1</label>
			                <input type="text" class="form-control" value="<?=$customer['phone1']?>" placeholder="xxx-xxx-xxxx" name="customer[phone1]" />
			            </div>

			            <div class="form-group col-lg-4">
			                <label>Phone 2</label>
			                <input type="text" class="form-control" value="<?=$customer['phone2']?>" placeholder="xxx-xxx-xxxx" name="customer[phone2]" />
			            </div>

			            </div>
		            </div>

	            </div>
            </div>

        	<div class="panel panel-default">
	            <div class="panel-heading">
	                Company Info
	            </div>
	        	<div class="panel-body">

		    		<div class="row">
			    		<div class="col-lg-12">
				            <div class="form-group col-lg-6">
				                <label>Company</label>
				                <input class="form-control" value="<?=$customer['company']?>" placeholder="Cloudberry Software .LLC" name="customer[company]">
				            </div>

				            <div class="form-group col-lg-6">
				                <label>Title</label>
				                <input class="form-control" value="<?=$customer['title']?>" placeholder="Senior Developer" name="customer[title]">
				            </div>
		            	</div>

		            </div>

	            </div>
            </div>



		            	<div class="col-lg-12 text-right">
				            <div class="form-group col-lg-12">
				            	<button type="submit" class="btn btn-success">Save</button>
				            	<a href="<?=site_url("s-admin/customer/");?>"><button type="button" class="btn btn-default">Cancel</button></a>
				        	</div>
			        	</div>

        </form>


    </div>
    <!-- /.col-lg-12 -->
</div>
</div>