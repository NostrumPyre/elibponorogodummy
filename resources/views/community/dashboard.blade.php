@extends('community.main')
@section('title', 'Bookmark 1')
@section('page')
<header class="masthead pt-5 pb-5">
  <div class="container position-relative">
    <div class="row justify-content-center">
      <div class="text-center text-white d-flex justify-content-center">

        <div class="text-center row p-5 bg-light rounded" style="width: 960px !important; margin-top: 30px; margin-bottom:30px;">
          <h1 style="color: #212529">Book Collection</h1> <br>
          @foreach($books as $key => $data)
          <div class="col col-sm-4">
            <img src="https://drive.google.com/uc?export=view&id=14r5VEmUBjaVOYQgJ8sZrRXRTLK15YJvv" class="card-img-top" alt="...">
          </div>
          <div class="col text-start m-4 " style="color: #212529">
            <div class="row">
              <div class="col">
                <h3 class="card-title">{{$data->title}}</h3>
              </div>
              <div class="col me-0 text-end">
                <a onclick="bookmarkFunction()"> <i id="bookmarkIcon" class="bi bi-bookmark-fill" style="font-size: 25px;" name="bookmark-fill"></i> </a>
              </div>
              <script>
                function bookmarkFunction() {
                  if (document.getElementById('bookmarkIcon').classList.contains("bi-bookmark-fill")) {
                    document.getElementById('bookmarkIcon').classList.remove("bi-bookmark-fill");
                    document.getElementById('bookmarkIcon').classList.add("bi-bookmark");
                    console.log('test');
                  } else {
                    document.getElementById('bookmarkIcon').classList.remove("bi-bookmark");
                    document.getElementById('bookmarkIcon').classList.add("bi-bookmark-fill");
                  }

                };
              </script>
            </div>
            <p class="card-text mt-3">{{$data->description}}</p>
            <a class="btn btn-primary mt-5" href="{{route('download', ["File_Upload" => "$data->filepath"])}}" style="background-color: #008000; border: #008000">Download</a>
          </div>
        </div>
        @endforeach


        @foreach($journals as $key => $data)
        <div class="text-center row p-5 bg-light rounded" style="width: 960px !important; margin-top: 30px; margin-bottom:30px;">
          <h1 style="color: #212529">Journal Collection</h1> <br>
          <div class="col col-sm-4 ">
            <img src="https://drive.google.com/uc?export=view&id=1kaOdo0gexiT6Xj0cyLq4rIE0fpBdD2KR" class="card-img-top " alt="...">
          </div>
          <div class="col text-start m-4 " style="color: #212529">
            <div class="row">
              <div class="col">
                <h3 class="card-title">{{$data->title}}</h3>
              </div>
              <div class="col me-0 text-end">
                <a onclick="bookmarkFunction2()"><i id="bookmarkIcon2" class="bi bi-bookmark-fill" style="font-size: 25px;" name="bookmark-fill"></i></a>
              </div>
              <script>
                function bookmarkFunction2() {
                  if (document.getElementById('bookmarkIcon2').classList.contains("bi-bookmark-fill")) {
                    document.getElementById('bookmarkIcon2').classList.remove("bi-bookmark-fill");
                    document.getElementById('bookmarkIcon2').classList.add("bi-bookmark");
                    console.log('test');
                  } else {
                    document.getElementById('bookmarkIcon2').classList.remove("bi-bookmark");
                    document.getElementById('bookmarkIcon2').classList.add("bi-bookmark-fill");
                  }

                };
              </script>
            </div>
            <p class="card-text mt-3">{{$data->description}}</p>
            <a class="btn btn-primary mt-5" href="{{route('download', ["File_Upload" => "$data->filepath"])}}" style="background-color: #008000; border: #008000">Download</a>
          </div>
        </div>
        @endforeach



      </div>
    </div>
  </div>
</header>
@endsection