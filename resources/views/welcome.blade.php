<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STK_PUSH</title>
    <link
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" ">
    <script
      type="text/javascript"
      src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"
    ></script>
  </head>
  <body oncontextmenu="return false" class="snippet-body">
    <div class="container d-flex justify-content-center">
      <div class="card mt-5 px-3 py-4">
        <div class="d-flex flex-row justify-content-around">
          <div class="mpesa"><span>Mpesa </span></div>
          <div class="records-tab"> <a class="records-tab" href="./records.php" style="text-decoration:none; color:grey;"> <span>Records</span> </a>  </div>
          <!-- <div style="display:none;"><span>Card</span></div> -->
        </div>
        <div class="media mt-4 pl-2">
          <!-- image from the resource  -->
          <img src="{{asset('images/mpesa.png')}}" alt="">
          <!-- <div class="media-body">
            <h6 class="mt-1">Enter Mobile Number To Deduct The Amount:</h6>
          </div> -->
        </div>
        <div class="media mt-3 pl-2">
                          <!--bs5 input-->

            <form class="row g-3" action="/stk" method="GET">
                <div class="col-12">
                  <label for="inputAddress" class="form-label">Amount</label>
                  <input type="text" class="form-control" name="amount" placeholder="Enter Amount">
                </div>
                <div class="col-12">
                  <label for="inputAddress2" class="form-label" >Phone Number</label>
                  <input type="text" class="form-control" name="phone_number"  placeholder="Enter Phone Number">
                </div>
             
                <div class="col-12">
                   <button type="submit" class="btn btn-success" name="submit" value="submit">PAY</button> 
                </div>
              </form>
              <!--bs5 input-->
          </div>
        </div>
      </div>
    </div>
    <script
      type="text/javascript"
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"
    ></script>
    <script type="text/javascript" src=""></script>
    <script type="text/javascript" src=""></script>
    <script type="text/Javascript"></script>
  </body>
</html>
