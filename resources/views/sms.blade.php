<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>TWILIO SMS API FOR LARAVEL 8</title>
  </head>
  <body>
      <div class="container">
          <div class="header mt-2 px-5 text-center bg-primary py-5 text-white">
            <h1>TWILIO SMS API FOR LARAVEL 8</h1>
          </div>
         <div class="main">
            <form action="{{ url('/') }}" method="post">
             @csrf
             <div class="col-12 pt-5">
                 <div class="form-group">
                     <label for="phone" class="form-label">Phone Number Plus Country Code</label>
                     <input type="text" name="phone" class="form-control" placeholder="Enter your Phone number here">
                 </div>
             </div>
                <div class="col-12 pt-5">
                    <div class="form-group">
                        <label for="message" class="form-label">Message</label>
                        <textarea name="message" class="form-control" placeholder="Write your message here" ></textarea>
                    </div>
                </div>
                <div class="col-12 pt-5">
                    <button type="submit" class="btn btn-primary">Send Message</button>
                </div>

              </form>
         </div>
      </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
