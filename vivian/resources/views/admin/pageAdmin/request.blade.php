@extends('masterAdmin')
@section('content')
<div class="content-detached content-right">
  <div class="content-body">
    <section class="row">
      <div class="col-lg-12">
                @if(Session::has('flash_message'))
                  <div class="alert alert-{!! Session::get('flash_level') !!}">
                    {!! Session::get('flash_message') !!}
                  </div>
                @endif
              </div>
      <div class="col-12">
        <div class="card">
          <div class="card-head">
            <div class="card-header">
              <h4 class="card-title">All Request
              </h4>
              <a class="heading-elements-toggle">
                <i class="la la-ellipsis-h font-medium-3">
                </i>
              </a>
              <div class="heading-elements">
                <a href="{{route('getAddRequest')}}">
                  <button class="btn btn-primary btn-sm">
                    <i class="ft-plus white">Add new
                    </i> 
                  </button>
                </a>
              </div>
            </div>
            
          </div>
          <div class="card-content">
            <div class="card-body">
              <!-- Task List table -->
              <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
     <thead>
                      <tr>
                        <th>ID
                        </th>
                        <th>Image
                        </th>
                        <th>Created at
                        </th>
                        <th>Decription
                        </th>
                        <th>Like
                        </th>
                        <th>Comment
                        </th>
                        <th>Actions
                        </th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $stt=0 ?>
                    @foreach($requests as $request)
                    <?php $stt=$stt+1 ?>
                    <tr>
                      <td>
                        {!! $stt !!}
                      </td>
                      <td class="text-center"><img src="{{asset('image/')}}/bogs/{{ $request->image }}" style='max-width:80px;max-height:200px' class='img img-thumbnail' />
                      </td>
                      <td>
                        {{ $request-> created_at }}
                      </td>
                      <td>
                        {{ $request-> description }}
                      </td>
                      <td>
                        1
                      </td>
                      <td>
                        1
                      </td>
                      <td>
                        <span class="dropdown">
                          <button id="btnSearchDrop2" type="button" data-toggle="dropdown" aria-haspopup="true"
                                  aria-expanded="true" class="btn btn-primary dropdown-toggle dropdown-menu-right">
                            <i class="ft-settings">
                            </i>
                          </button>
                          <span aria-labelledby="btnSearchDrop2" class="dropdown-menu mt-1 dropdown-menu-right">
                            <a href="{{route('getEditRequest',$request['id'])}}" class="dropdown-item">
                              <i class="ft-edit-2">
                              </i> Edit
                            </a>
                            <a onclick="return xacnhanxoa(' Bạn có chắc muốn xóa không !!! ')" href="{{route('getDeleteRequest',$request['id'])}}" class="dropdown-item">
                              <i class="ft-trash-2">
                              </i> Delete
                            </a>
                          </span>
                        </span>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  @endsection
