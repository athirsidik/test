
<!DOCTYPE html>
<html>
  <head>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  </head>
  <body>
      <form>
    <div class="container-fluid content index-height">
        <div class="row mt-4 h-100 pr-md-5 pl-md-5">
            <div class="col justify-content-center ">
                <div class="row pr-md-5 pl-md-5  justify-content-center ">
                    <div class="col-md-8  justify-content-center">
                        <div class="card h-80 profile-border justify-content-center shadow-lg bg-white rounded">
                            <div class="card-body border-radius:20% justify-content-center">

    {{-- <form action="SEND ADDRESS" id="ft-form" method="POST" accept-charset="UTF-8"> --}}
        <div class="container">
            <div class="row mt-4 pr-md-5 pl-md-5">
              <div class="col">

          <h2>Appointment Form</h2>
              </div>
            </div>

              <div class="row mt-2 pr-md-5 pl-md-5">
                <div class="col-md-6">
                <input type="text" id="fname" name="firstname" placeholder="First name" class="form-control" required >

              </div>

              <div class="col-md-6">

                <input type="text" id="fname" name="lastname" placeholder="Last name" class="form-control" required>
              </div>
             </div>
             </div>





          <div class="container">
            <div class="row mt-2 pr-md-5 pl-md-5">
              <div class="col-md-6">

              <input type="tel" id="tel" name="tel" placeholder="Phone Number" class="form-control" required>

            </div>

            <div class="col-md-6">

              <input type="text" id="email" name="email" placeholder="Email" class="form-control" required>

           </div>
          </div>
        </div>



          <div class="container">
            <div class="row mt-2 pr-md-5 pl-md-5">
              <div class="col-md-6">

              <input type="date" name="date" class="form-control" required>

              </div>

              <div class="col-md-6" >

                <input type="time" name="time" class="form-control" required>

          </div>
        </div>
    </div>


          <div class="container">
            <div class="row mt-2 pr-md-5 pl-md-5">


            <div class="col">
              <select id="purpose" name="purpose" required class="form-control">
                <option value="">Purpose of Oppointment</option>
                <option value="1">Saja</option>
                <option value="2">Try</option>

              </select>
            </div>
          </div>
          </div>




          <div class="container">
            <div class="row mt-2 pr-md-5 pl-md-5">


                <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Message</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>

            </div>
          </div>
          </div>


        <div class="container">
            <div class="row row-cols-4">
              <div class="col"></div>
              <div class="col"></div>

              <div class="col-md-auto">
                <input type="reset" class="btn btn-light" name="_gotcha" value="" style="display:none;">
                <input type="reset" class="btn btn-light" onclick="alert('Cancel?')" value="Cancel">
              </div>
              <div class="col-col-lg-2">
                <input type="submit" class="btn btn-primary" name="_gotcha" value="" style="display:none;">
                <input type="submit" class="btn btn-primary" onclick="alert('Form is submitted')" value="Submit request">
              </div>


        </div>
    </div>

{{--
        <div class="container">
            <div class="row pr-md-5 pl-md-5">
              <div class="col">
                  <div class="col">




        <div class="btns">



        </div>
        </div>
              </div>
    </div>
</div> --}}
      </form>

    </div>
    </div>
</div>
</div>
</div>


      <!-- JavaScript Bundle with Popper -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
      <script src="script.js"></script>

      <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
  </body>
</html>
