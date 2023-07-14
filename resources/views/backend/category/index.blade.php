
@extends('layouts.dashboard_master')

@section('content')
 <!-- Content wrapper -->
 <div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <!-- Total Revenue -->
        <div class="col-12 col-lg-9 order-2 order-md-3 order-lg-2 mb-4 mx-auto">
          <div class="card">

            <div class="row row-bordered g-0">
                @if ($categories->count() > 0)
                <h4 class="text-center p-2"><strong>All Category lists ({{$categories->count()}})</strong></h4>
                @else
                <h4 class="text-center p-2"><strong>All Category lists</strong></h4>
                @endif

              <div class="col-md-12 col-12 col-xl-12 col-xxl-12 p-5">

                    <table id="category_table" class="display" style="width:100%">
                        <thead>
                          <tr>
                            <th scope="">Serial No</th>
                            <th scope="" align="center">Category Name</th>
                            <th scope="col" align="center">Category Image</th>
                            <th scope="col" align="center">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          @if ($categories->count() > 0)
                              @foreach ($categories as $category )
                              <tr>
                                  <th scope="row">{{$loop->index+1}}</th>
                                  <td>{{$category->category_name}}</td>
                                  <td>
                                    @if ($category->category_image)
                                       <img src="{{asset('uploads/category')}}/{{$category->category_image}}" class="img-thumbnail rounded-sm w-25 mx-auto" alt="">
                                    @else
                                        <img src="{{asset('uploads/category/default_category.jpg')}}" alt="not found" class="w-25 mx-auto rounded ">
                                    @endif
                                  </td>
                                  <td>
                                    <div class="btn-group btn-group-sm" role="group" aria-label="Small button group">
                                      <button type="button" class="btn btn-danger">DELETE</button>
                                      <button type="button" class="btn btn-info"><a href="{{route('category.edit', $category->id)}}" class="text-white">EDIT</a></button>
                                      <button type="button" class="btn btn-warning"><a class="text-white" href="{{route('category.view', $category->id)}}">View</a></button>
                                    </div>
                                  </td>
                                </tr>
                              @endforeach
                          @else
                                <tr>
                                  <td colspan="8" align="center">No Category Uploaded Yet</td>
                                </tr>
                          @endif
                        </tbody>
                      </table>
                </form>

              </div>
            </div>
          </div>
        </div>
        <!--/ Total Revenue -->

      </div>

    </div>

    <script>

    $(function(e){
                $('#all_delete').click(function(){
                    $(".singleBox")
                })
            });



	</script>




@endsection
