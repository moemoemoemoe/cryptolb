<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Crypto LB - Buy/Sell USDT</title>
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="style.css">

</head>
<body>
<!-- partial:index.partial.html -->

<div class="form">
      
      <ul class="tab-group">
        <li class="tab active"><a href="#signup">BUY</a></li>
        <li class="tab"><a href="#login">Sell</a></li>
      </ul>
     <div class="tab-content">
       
                    @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    @if(Session::has('success'))
                        <p class="alert alert-success" style="color: #fffff">{{Session('success')}}</p>
                    @endif
                   
           
              </div>
      <div class="tab-content">
        <div id="signup">   
          <h1>Buy USDT</h1>
          
          <form method="POST" action="{{route('store')}}">
            @csrf
          
          <div class="top-row">
            <div class="field-wrap">
              <label>
                First Name<span class="req">*</span>
              </label>
              <input type="text" required autocomplete="off" name="first_name"/>
            </div>
          <input type="hidden" name="hidden" value="1" />
            <div class="field-wrap">
              <label>
                Last Name<span class="req">*</span>
              </label>
              <input type="text"required autocomplete="off" name="last_name" />
            </div>
          </div>

          <div class="top-row">

           <div class="field-wrap">
            <label>
              Mobile <span class="req">*</span>
            </label>
            <input type="number" required autocomplete="off" min="0" name="mobile"/>
          </div>
          <div class="field-wrap">
            <label>
              Email <span class="req"></span>
            </label>
            <input type="email" autocomplete="off" name="email" />
          </div>
          </div>
          <div class="top-row">
            <div class="field-wrap">
              <label>
                City<span class="req">*</span>
              </label>
              <input type="text" required autocomplete="off" name="city"/>
            </div>
            <div class="field-wrap">
              <label>
                Amount usdt<span class="req">*</span>
              </label>
              <input type="text"required autocomplete="off" name="amount" />
            </div>
          </div>
           <div class="field-wrap">
            <label>
             Full Address<span class="req"></span>
            </label>
            <textarea name="address" autocomplete="off"></textarea>
          </div>
          
          <button type="submit" class="button button-block"/>Buy Usdt</button>
          
          </form>

        </div>
        
        <div id="login">   
          <h1>Sell USDT</h1>
          
         
         <form method="POST" action="{{route('store')}}">
            @csrf
          
          <div class="top-row">
            <div class="field-wrap">
              <label>
                First Name<span class="req">*</span>
              </label>
              <input type="text" required autocomplete="off" name="first_name"/>
            </div>
          <input type="hidden" name="hidden" value="2" />
            <div class="field-wrap">
              <label>
                Last Name<span class="req">*</span>
              </label>
              <input type="text"required autocomplete="off" name="last_name" />
            </div>
          </div>
                    <div class="top-row">

           <div class="field-wrap">
            <label>
              Mobile <span class="req">*</span>
            </label>
            <input type="number" required autocomplete="off" min="0" name="mobile"/>
          </div>
          <div class="field-wrap">
            <label>
              Email <span class="req"></span>
            </label>
            <input type="email" autocomplete="off" name="email" />
          </div>
        </div>

          
          <div class="top-row">
            <div class="field-wrap">
              <label>
                City<span class="req">*</span>
              </label>
              <input type="text" required autocomplete="off" name="city"/>
            </div>
            <div class="field-wrap">
              <label>
                Amount usdt<span class="req">*</span>
              </label>
              <input type="text"required autocomplete="off" name="amount" />
            </div>
          </div>
           <div class="field-wrap">
            <label>
             Full Address<span class="req"></span>
            </label>
            <textarea name="address" autocomplete="off"></textarea>
          </div>
          
          <button type="submit" class="button button-block"/>Sell Usdt</button>
          
          </form>

        </div>
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script  src="script.js"></script>

</body>
</html>
