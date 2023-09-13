@include('admin.partial.link')

<body>

    @include('admin.partial.header')
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <div class="page-wrapper">
        <!-- Page header -->
        <div class="page-header d-print-none">
            <div class="container-xl">
                <div class="row g-2 align-items-center">
                    <div class="col">
                        <h2 class="page-title mb-3">
                            Members
                        </h2>
                        <span class="text-danger mr-3 "> @error('name'){{$message}}   @enderror </span>
                        <span class="text-danger"> @error('mobile'){{$message}}   @enderror </span>
                    </div>
                    <div class="col-auto ms-auto d-print-none">
                        <div class="btn-list">
                            <a class="btn btn-primary d-none d-sm-inline-block" data-bs-toggle="modal"
                                data-bs-target="#modal-member">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon-tabler icon-tabler-user-plus" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0"></path>
                                    <path d="M16 19h6"></path>
                                    <path d="M19 16v6"></path>
                                    <path d="M6 21v-2a4 4 0 0 1 4 -4h4"></path>
                                </svg>
                                Add Member
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page body -->
        <div class="page-body">
            <div class="container-xl">
                <div class="card">
                    <div class="row g-0">
                        <div class="col-12 col-md-12 d-flex flex-column">
                            <div id="table-default" class="table-responsive">
                                <table class="table table-vcenter card-table table-striped">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Mobile</th>
                                            <th>Email</th>
                                            <th>City</th>
                                            <th>Plan</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody class="table-tbody">
                                        @php
                  $i= 1;
                  @endphp

                  @foreach ($records as $value)

                  <tr>
                    <td>{{$i;}}</td>                                     
                                            <td>{{$value->name}}</td>
                                            <td>{{$value->mobile}}</td>
                                            <td>{{$value->email}}
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td><span class="text-success">Active</span></td>
                                            <td>
                                                <a class="btn btn-sm btn-blue" href="update-member.html">Edit</a>
                                                <a class="btn btn-sm btn-success memberview" id="memberview"  data-bs-toggle="modal"
                                                data-bs-target="#modal-view-member" data-id="{{$value->id}}">View</a>
                                                <a href="{{url('/admin/member/delete')}}/{{$value->id}}" class="btn btn-sm btn-danger">Delete</a>
                                            </td>
                                        </tr>
                                        @php
                  $i++;
                  @endphp
                  @endforeach
                                        
                                       
                                    </tbody>
                                </table>
                            </div>
                        
                        </div>
                    </div>
                </div>
                <div class="row mt-4 " >
                    {{ $records->links() }}
                </div>
            </div>
        </div>

   
    <div class="modal modal-blur fade" id="modal-member" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Member</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{route('admin.insert_process')}}" method="POST" >
                        @csrf
                    <div class="row mb-3">
                        <label class="form-label">Name</label> 
                        <input type="text"  name="name" class="form-control" />
                    </div>
                    <div class="row mb-3">
                        <label class="form-label">Mobile No.</label>
                        <input type="text" name="mobile" class="form-control" />
                    </div>
             
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn me-auto" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Add Member</button>
                </div>
            </div>
        </form>
        </div>
    </div>
    <div class="modal modal-blur fade" id="modal-view-member" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Member Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row row-cards mb-3">
                        <div class="col-sm-12 col-md-4">
                            <label class="form-label">Name</label>
                            <span id="memberName" ></span>
                        </div>
                        <div class="col-sm-12 col-md-4">
                            <label class="form-label">Mobile No.</label>
                            <span id="memberPhone"></span>
                        </div>
                        <div class="col-sm-12 col-md-4">
                            <label class="form-label">Email</label>
                            <span id="memberEmail"> </span>
                        </div>
                        <div class="col-sm-12 col-md-4">
                            <label class="form-label">Date of Birth</label>
                            <span>19/Aug/1994</span>
                        </div>
                        <div class="col-sm-12 col-md-4">
                            <label class="form-label">Address</label>
                            <span>Mansi Vihar, Sanjay Nagar</span>
                        </div>
                        <div class="col-sm-12 col-md-4">
                            <label class="form-label">City</label>
                            <span>Ghaziabad</span>
                        </div>
                        <div class="col-sm-12 col-md-4">
                            <label class="form-label">State</label>
                            <span>Uttar Pradesh</span>
                        </div>
                        <div class="col-sm-12 col-md-4">
                            <label class="form-label">Event Date 1</label>
                            <span>17/Sep/2023</span>
                        </div>
                        <div class="col-sm-12 col-md-4">
                            <label class="form-label">Event Date 2</label>
                            <span>19/Oct/2023</span>
                        </div>
                    </div>
                    <div class="row">
                        <h3>Submember Deatils</h3>
                    </div>
                    <div class="row mb-3">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <tr>
                                    <th>Submember Name</th>
                                    <th>Date of Birth</th>
                                    <th>Relation</th>
                                    <th>Event Date 1</th>
                                    <th>Event Date 2</th>
                                </tr>
                                <!-- <tr>
                                    <td>
                                        Submember 1
                                    </td>
                                    <td>
                                        19/Oct/1995
                                    </td>
                                    <td>
                                        Brother
                                    </td>
                                    <td>
                                        19/Oct/2023
                                    </td>
                                    <td>
                                        19/Jan/2024
                                    </td>
                                </tr> -->
                            </table>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn me-auto" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
   
    @include('admin.partial.footer')

@include('admin.partial.script')
<script>
    $(document).ready(function(){
        $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

       $(".memberview").click(function(){
        id = $(this).data("id");

        $.ajax({
                url: '{{ route('admin.getmember') }}',
                type: 'POST',
                data:  {_token: "{{ csrf_token() }}",id:id},
                success: function(data, textStatus, jqXHR) {
                console.log(data.Name);
                $('#modal-view-member .modal-body #memberName').text(data.name);
                $('#modal-view-member .modal-body #memberPhone').text(data.mobile);
               
                $('#modal-view-member .modal-body #memberEmail').text(data.email);
                
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    $('#practiceName').html("Please select valid program");
                },
            });
 
        





       })

    })

// $(document).ready(function () {
//   $.ajaxSetup({
//     headers: {
//       'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//     }
//   });

//   $(".memberview").click(function () {
//     id = $(this).data("id");

//     $.ajax({
//       url: '{{ route('admin.getmember') }}',
//       type: 'POST',
//       data: {_token: "{{ csrf_token() }}", id: id},
//   success: function (data, textStatus, jqXHR) {
//   // Assuming your response data structure includes "Name" and "phone" fields
//   $('#modal-view-member .modal-title').text("Member Details");
//   $('#modal-view-member .modal-body .col-md-4:nth-child(1) span').text(data.Name);
//   $('#modal-view-member .modal-body .col-md-4:nth-child(2) span').text(data.phone);

//   // Show the modal
//   $('#modal-view-member').modal('show');
// },

//       error: function (jqXHR, textStatus, errorThrown) {
//         $('#practiceName').html("Please select a valid program");
//       },
//     });
//   });
// });



</script>
</html>