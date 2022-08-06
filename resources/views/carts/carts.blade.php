<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->


<div class="container">
	<div class="row">


        <link href="http://fontawesome.io/assets/font-awesome/css/font-awesome.css" rel="stylesheet" media="screen">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" type="text/css" rel="stylesheet">



        <!-- FORM  -->
	    <div class="col-md-12">

	    <form class="form-horizontal" id="form-edit-client">
        <fieldset>

        <!-- Form Name -->
        <legend>Client</legend>
        <!-- Text input-->
        <div class="form-group">
                <label class="col-md-4 control-label" for="name">Name</label>
            <div class="col-md-4">
                <select name="user_id" class="form-control" id="name">

                    <option value=""></option>

                </select>
            </div>
        </div>
        <div class="form-group">
                <label class="col-md-4 control-label" for="product">Product Name</label>
            <div class="col-md-4">
                <select name="product_id" id="product" class="form-control">

                    <option value="">22</option>

                </select>
            </div>
        </div>
        <div class="form-group">
                <label class="col-md-4 control-label" for="client-name">Quantity</label>
            <div class="col-md-4">
                <input id="client-name" name="quantity" type="text" class="form-control input-md">
            </div>
        </div>


        <!-- Button -->
        <div class="form-group">
        <label class="col-md-4 control-label" for="btn-save"></label>
        <div class="col-md-4">
            <button id="btn-save" name="btn-save" class="btn btn-success">Save</button>
        </div>
        </div>

        </fieldset>
        </form>


	   </div>




        <!-- LIST -->
        <div class=col-md-12>

            <form id="form-list-client">
                    <legend>List of clients</legend>

            <div class="pull-right">
                <a class="btn btn-default-btn-xs btn-primary"><i class="glyphicon glyphicon-refresh"></i> Refresh</a>
                <a class="btn btn-default-btn-xs btn-success"><i class="glyphicon glyphicon-plus"></i> New</a>
            </div>
            <table class="table table-bordered table-condensed table-hover">
                <thead>
                    <tr>
                        <td>Name</td>
                        <th>Email</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>

                </thead>
                <tbody id="form-list-client-body">
                    <tr>
                        <td>Eduardo</td>
                        <td>eluz@counterpath.com</td>
                        <td>Active</td>
                        <td>
                            <a title="view this user" class="btn btn-default btn-sm "> <i class="glyphicon glyphicon-eye-open text-primary"></i> </a>
                            <a title="edit this user" class="btn btn-default btn-sm "> <i class="glyphicon glyphicon-edit text-primary"></i> </a>
                            <a title="delete this user" class="btn btn-default btn-sm "> <i class="glyphicon glyphicon-trash text-danger"></i> </a>

                            <a title="check credit" class="btn btn-default btn-sm "> <i class="glyphicon glyphicon-duplicate text-danger"></i> </a>
                            <a title="generate invoice" class="btn btn-default btn-sm "> <i class="glyphicon glyphicon-level-up bg-success"></i> </a>

                        </td>
                    </tr>
                </tbody>
            </table>
            </form>


        </div>


        <br> 

        <!-- view -->

        <div class="col-md-12">

            <legend>View client</legend>

            <div >

              <div class2=" col-md-9 col-lg-9 ">
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td>Name:</td>
                        <td>Andre Silva</td>
                      </tr>
                      <tr>
                        <td>Email</td>
                        <td><a href="mailto:info@support.com">info@support.com</a></td>
                      </tr>
                    </tbody>
                  </table>
            </div>


            </div>
            <div class="panel with-nav-tabs panel-default">
                <div class="panel-heading">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#tab1default" data-toggle="tab">Default 1</a></li>
                            <li><a href="#tab2default" data-toggle="tab">Default 2</a></li>

                            <li><a href="#tab3default" data-toggle="tab">Default 3</a></li>
                            <!--
                            <li class="dropdown">
                                <a href="#" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#tab4default" data-toggle="tab">Default 4</a></li>
                                    <li><a href="#tab5default" data-toggle="tab">Default 5</a></li>
                                </ul>
                            </li>
                            -->
                        </ul>
                </div>
                <div class="panel-body">
                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="tab1default">Default 1</div>
                        <div class="tab-pane fade" id="tab2default">Default 2</div>
                        <div class="tab-pane fade" id="tab3default">Default 3</div>
                        <!--
                        <div class="tab-pane fade" id="tab4default">Default 4</div>
                        <div class="tab-pane fade" id="tab5default">Default 5</div>
                        -->
                    </div>
                </div>
            </div>

        </div>


	</div>
</div>
