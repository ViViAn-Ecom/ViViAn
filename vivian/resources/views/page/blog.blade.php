@extends('master')
@section('content')             
    <section class="breadcrumbs">
      <div class="container">
        <ol class="breadcrumb breadcrumb--ys pull-left">
          <li class="home-link">
            <a href="/" class="icon icon-home">
            </a>
          </li>
          <li>
            <span>News
            </span>
          </li>
        </ol>
      </div>
    </section>
    <div id="pageContent" class="starthide">
      <div class="container">
        <div class="row">
          <div class="col-xl-8 col-lg-8 col-md-12" id="centerColumn">
            <div class="blog-layout">
              <!-- title -->
              <div class="title-box">
                <h1 class="text-center text-uppercase title-under">Blog
                </h1>
                <p id="msg" class="alert alert-success"></p>

                @foreach($persons as $person)
                <div class="">
                  <div class="post">
                    <div class="post__title_block">
                      <figure>
                        <a href="#">
                          <img src="{{asset('image/')}}/bogs/{{ $person->image }}" alt="Mauris Lacinia Lectus">
                        </a>
                      </figure>
                      <div class="pull-left">
                        <time>
                          <span>04
                          </span>11

                        </time>
                      </div>
                      <div class="pull-left">
                        <div class="post__meta">
                          <span class="post__meta__item">
                            <span class="autor">by
                              <b id="ID_product">{{$person->id}}
                              </b>
                            </span>
                          </span>
                        </div>
                      </div>
                    </div>
                    <p>{{ $person->description }}
                    </p>
                    <div class="post__meta">
                      <a href="{{route('getLikeTest01',$person->id)}}">like</a>
                    <!-- <button class="btn_like"> like</button> -->
                    <form class="form form-horizontal" action="{!! route('getBlog')!
                    !}" method="POST" >
                      <input type="hidden" name="_token" value="{{ csrf_token() }}" >
                      <input type="hidden" value="{{ $person->id }}" name="id">
                      <div class="row">
                        <div class="col-md-10">
                          <!-- <input type="text" name="commenttext" id="commenttext" data-id="{{ $person->id }}" class="form-control commenttext" placeholder="Write a Comment..."> -->
                          <input type="text" name="commenttext" id="commenttext" data-id="{{ $person->id }}" class="form-control showbutton" placeholder="Write a Comment...">
                        </div>
                        <!-- <button type="submit" class="btn thien" id="thien">comment</button> -->
                        <button type="submit" class="send btn btn-dange" id="thien">comment</button>
                      </div>
                    </form>
                    @include('page.commentlist')
                    </div>
                  </div>
                </div>
                @endforeach
              </div>
              <ul class="pagination">
                <li class="active">
                  <a>1
                  </a>
                </li>
                <li>
                  <a href="/blogs/news?page=2" title="">2
                  </a>
                </li>
                <li>
                  <a href="/blogs/news?page=3" title="">3
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="divider divider--lg visible-md visible-sm visible-xs">
          </div>
          <form class="form form-horizontal" action="{!! route('getBlog')!!}" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{ csrf_token() }}" >
          <aside class="col-xl-4 col-lg-4  col-md-12" id="rightColumn">
            <h4 class="text title-aside">USERNAME :
              <a href="#">vim ♥
              </a>
            </h4>
            <div class="form-group">
              <label for="Description">Description:
              </label>
              <textarea class="form-control" rows="5" id="description" name="txt_Decription">
              </textarea>
            </div>
            <div class="block-underline">
              <ul class="categories-list">
              </ul>
              <div class="upload-btn-wrapper">
                  <button class="btnInputFile">Upload a file</button>
                  <input type="file" name="img" id="chooseimg" />
              </div>
            </div>
            <div class="form-group">
              <img id="image" height="200px" />
            </div>
            <button type="submit" class="btn btn--ys btn--xl">submit
            </button> 
          </aside>
          </form>
        </div>
      </div>
    </div> 
  
      @endsection
    