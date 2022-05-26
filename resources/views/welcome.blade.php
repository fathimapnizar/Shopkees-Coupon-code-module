<html>
<head>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <sc#
    ript src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</head>

<body>
  <div class="container mt-4">
  @if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
  @endif
  <div class="card">
    <div class="card-header text-center font-weight-bold">
      Add Coupon
    </div>

    <div class="card-body">
      <form method="get"  name="form" action="/storecoupon">
        <div class="form-group">
          <label>Name</label>
          <input type="text" id="name" name="name" class="form-control" required="">
          <label>Coupon Code</label>
          <input type="text" id="coupon-code" name="coupon-code" class="form-control" required="">
        </div>

    <div class="form-group row">    
        <div class="col-sm-8">
       <label>Applied On</label>
       <select class="form-control" id="cart-percentage" name="cart-percentage" focus>
        <option value="1" selected>Cart Percentage</option> 
        <option value="2">Cart Amount</option> 
        </select>
        </div>
    </div>

        <div class="form-group">
          <label>Amount/Percentage</label>
          <input type="number" id="amount-percentage" name="amount-percentage" class="form-control" required="">
          <label>Amount Limit</label>
          <input type="number" id="amount-limit" name="amount-limit" class="form-control" required="">
        </div>

        <div class="form-group row">    
            <div class="col-sm-8">
                <label>Type</label>
                    <select class="form-control" id="type" name="type" focus>
                    <option value="" disabled selected>All</option> 
                    </select>
            </div>
        </div>

        <div class="form-group row">    
            <div class="col-sm-8">
                    <select class="form-control" id="cart-total" name="cart-total" focus>
                    <option value="1" selected>Cart total</option> 
                    <option value="2">Cart percentage</option> 
                    </select>
            </div>
        </div>

        <div class="form-group row">    
            <div class="col-sm-8">
                    <select class="form-control" id="condition" name="condition" required focus>
                    @foreach ($condition as $key => $value)
                    <option value="{{ $value }}" 
                    > 
                    {{ $key }} 
                    </option>
                    @endforeach  
                    </select>
            </div>
        </div>

        <div class="form-group">
          <input type="number" id="value" name="value" class="form-control" required="">
        </div>

        <div class="form-group row">    
            <div class="col-sm-8">
                    <select class="form-control" id="cat" name="cat" required focus>
                    @foreach ($cat as $key => $value)
                    <option value="{{ $value }}" > 
                    {{ $key }} 
                    </option>
                    @endforeach  
                    </select>
            </div>
        </div>

        <div class="form-group row">    
            <div class="col-sm-8">
                    <select class="form-control" id="in" name="in" required focus>
                    <option value="1" selected>IN</option> 
                    <option value="2">NOT IN</option> 
                    </select>
            </div>
        </div>

  
        
        <button type="submit" class="btn btn-primary">Submit</button>
        @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif
      </form>
    </div>
  </div>
</div>  
</body>
</html>