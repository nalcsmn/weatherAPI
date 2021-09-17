<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exam App</title>
  <link href="/docs/5.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

  <link rel="stylesheet" href="css/style.css">

  <script src="{{ asset('js/app.js') }}" defer></script>

  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
@csrf
<main class="container">
  <div class="p-4 p-md-5 mb-4 text-white rounded bg-dark">
    <div class="col-md-6 px-0">
      <h1 class="display-4 fst-italic">Weather Website</h1>
      <p class="lead my-3">Neil Lacsamana</p>
      <p class="lead mb-0"><a href="#" class="text-white fw-bold">BSIT - 4A</a></p>
    </div>
  </div>

  <div class="row mb-2">
    <div class="col-md-6">
      <div class="row g-0 border text-white rounded bg-dark">
        <div class="col p-4 d-flex flex-column ">

          <form action="/" method="get">
            @csrf
            <div class="row m-2">
              <strong class="d-inline-block mb-2 text-primary">Enter Location</strong>
            </div>
            <div class="row m-2">
              <div class="col-sm-6"><input type="text" name="q" id="" placeholder="Input City" value="Manila"></div>
              <div class="col-sm-6"><input type="text" name="language" id="" placeholder="en-us" value="en-us"></div>
            </div>

            <button type="submit" class="mt-3 btn btn-info">Submit</button>
          </form>
        </div>

      </div>
    </div>
    <div class="col-md-6">
      <div class="row g-0 border text-white rounded bg-dark position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-success">Weather today</strong>
          <div class="border border-dark bg-opacity-tan p-3 ">

            <div class="results text-center bg-opacity-secondar ">
              <div class="row">

              </div>
              <div class="row border-dark m-4">
                @isset($weather)

                <div class="col-9">
                  {{print_r($weather["Headline"]["Category"] )}}
                </div>


                @endisset
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</main>
</body>







</html>