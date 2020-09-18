@extends('website.backend.layout.main')

@section('content')
  
  <div class="container" >
   <div class="row">  <!--  2row start -->   
   <div class="col-md-6 col-sm-6 col-xs-9"><!--col-lg-3 col-md-6 start -->
    <div class="panel panel-primary"> <!--panel panel-primary start -->
      <div class="panel-heading">  <!-- panel-heading start -->
        <div class="row"> <!-- row start -->
          <div class="col-xs-3">  <!-- col-xs-3 start -->
          <i class="fa fa-tasks fa-5x"></i> 
          </div> <!-- col-xs-3 end -->
          <div class="col-xs-9 text-right"><!-- col-xs-9 text-right start -->
          <div class="huge"></div> 
          <div>Products</div>
          </div><!-- col-xs-9 text-right end -->

        </div> <!-- row end -->
      </div>  <!-- panel-heading end -->
      <a href="{{url('dashboard/product')}}">
        <div class="panel-footer"><!-- panel-footer start -->
        <span class="pull-left">View Details</span> 
        <span class="pull-right"><i class="fa fa-arrow-circle-right">
        </i></span>
        <div class="clearfix"></div>
        </div><!-- panel-footer end -->
      </a>
    </div> <!--panel panel-primary end -->
   </div><!--col-lg-3 col-md-6 end-->

   <div class="col-md-6 col-sm-6 col-xs-9"><!--col-lg-3 col-md-6 start -->
    <div class="panel panel-info"> <!--panel panel-primary start -->
      <div class="panel-heading">  <!-- panel-heading start -->
        <div class="row"> <!-- row start -->
          <div class="col-xs-3">  <!-- col-xs-3 start -->
          <i class="fa fa-comment fa-5x"></i> 
          </div> <!-- col-xs-3 end -->
          <div class="col-xs-9 text-right"><!-- col-xs-9 text-right start -->
          <div class="huge"></div>  
          <div>Customer</div>
          </div><!-- col-xs-9 text-right end -->

        </div> <!-- row end -->
      </div>  <!-- panel-heading end -->
      <a href="{{url('dashboard/customer')}}">
        <div class="panel-footer"><!-- panel-footer start -->
        <span class="pull-left">View Details</span> 
        <span class="pull-right"><i class="fa fa-arrow-circle-right">
        </i></span>
        <div class="clearfix"></div>
        </div><!-- panel-footer end -->
      </a>
    </div> <!--panel panel-primary end -->
   </div><!--col-lg-3 col-md-6 end-->

   <div class="col-md-6 col-sm-6 col-xs-9"><!--col-lg-3 col-md-6 start -->
    <div class="panel panel-success"> <!--panel panel-yellow start -->
      <div class="panel-heading">  <!-- panel-heading start -->
        <div class="row"> <!-- row start -->
          <div class="col-xs-3">  <!-- col-xs-3 start -->
          <i class="fa fa-shopping-cart fa-5x"></i> 
          </div> <!-- col-xs-3 end -->
          <div class="col-xs-9 text-right"><!-- col-xs-9 text-right start -->
          <div class="huge"></div> 
          <div>Product Category</div>
          </div><!-- col-xs-9 text-right end -->

        </div> <!-- row end -->
      </div>  <!-- panel-heading end -->
      <a href="{{url('dashboard/productcategory')}}">
        <div class="panel-footer"><!-- panel-footer start -->
        <span class="pull-left">View Details</span> 
        <span class="pull-right"><i class="fa fa-arrow-circle-right">
        </i></span>
        <div class="clearfix"></div>
        </div><!-- panel-footer end -->
      </a>
    </div> <!--panel panel-yellow end -->
   </div><!--col-lg-3 col-md-6 end-->

    <div class="col-md-6 col-sm-6 col-xs-9"><!--col-lg-3 col-md-6 start -->
    <div class="panel panel-warning"> <!--panel panel-red start -->
      <div class="panel-heading">  <!-- panel-heading start -->
        <div class="row"> <!-- row start -->
          <div class="col-xs-3">  <!-- col-xs-3 start -->
          <i class="fa fa-support fa-5x"></i> 
          </div> <!-- col-xs-3 end -->
          <div class="col-xs-9 text-right"><!-- col-xs-9 text-right start -->
          <div class="huge"></div>  
          <div>Order</div>
          </div><!-- col-xs-9 text-right end -->

        </div> <!-- row end -->
      </div>  <!-- panel-heading end -->
      <a href="{{url('dashboard/payment')}}">
        <div class="panel-footer"><!-- panel-footer start -->
        <span class="pull-left">View Details</span> 
        <span class="pull-right"><i class="fa fa-arrow-circle-right">
        </i></span>
        <div class="clearfix"></div>
        </div><!-- panel-footer end -->
      </a>
    </div> <!--panel panel-red end -->
   </div><!--col-lg-3 col-md-6 end-->

    <div class="col-md-6 col-sm-6 col-xs-9"><!--col-lg-3 col-md-6 start -->
    <div class="panel panel-default"> <!--panel panel-red start -->
      <div class="panel-heading">  <!-- panel-heading start -->
        <div class="row"> <!-- row start -->
          <div class="col-xs-3">  <!-- col-xs-3 start -->
          <i class="fa fa-address-card-o fa-5x  " aria-hidden="true"></i> 
          </div> <!-- col-xs-3 end -->
          <div class="col-xs-9 text-right"><!-- col-xs-9 text-right start -->
          <div class="huge"></div>  
          <div>Customer Form</div>
          </div><!-- col-xs-9 text-right end -->

        </div> <!-- row end -->
      </div>  <!-- panel-heading end -->
      <a href="{{url('dashboard/customerform')}}">
        <div class="panel-footer"><!-- panel-footer start -->
        <span class="pull-left">View Details</span> 
        <span class="pull-right"><i class="fa fa-arrow-circle-right">
        </i></span>
        <div class="clearfix"></div>
        </div><!-- panel-footer end -->
      </a>
    </div> <!--panel panel-red end -->
   </div><!--col-lg-3 col-md-6 end-->

    <div class="col-md-6 col-sm-6 col-xs-9"><!--col-lg-3 col-md-6 start -->
    <div class="panel panel-danger"> <!--panel panel-red start -->
      <div class="panel-heading">  <!-- panel-heading start -->
        <div class="row"> <!-- row start -->
          <div class="col-xs-3">  <!-- col-xs-3 start -->
          <i class="fa fa-id-badge fa-5x"></i>
          </div> <!-- col-xs-3 end -->
          <div class="col-xs-9 text-right"><!-- col-xs-9 text-right start -->
          <div class="huge"></div>  
          <div>Company Contact</div>
          </div><!-- col-xs-9 text-right end -->

        </div> <!-- row end -->
      </div>  <!-- panel-heading end -->
      <a href="{{url('dashboard/companycontact')}}">
        <div class="panel-footer"><!-- panel-footer start -->
        <span class="pull-left">View Details</span> 
        <span class="pull-right"><i class="fa fa-arrow-circle-right">
        </i></span>
        <div class="clearfix"></div>
        </div><!-- panel-footer end -->
      </a>
    </div> <!--panel panel-red end -->
   </div><!--col-lg-3 col-md-6 end-->
</div>  <!-- 2row end -->
<div>
  
</div>
       

           
@endsection