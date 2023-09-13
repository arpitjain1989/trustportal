@include('admin.partial.link')

<body>

    @include('admin.partial.header')




    <div class="page-wrapper">
      <!-- Page header -->
      <div class="page-header d-print-none">
        <div class="container-xl">
          <div class="row g-2 align-items-center">
            <div class="col">
              <!-- Page pre-title -->
              <div class="page-pretitle">
                Overview
              </div>
              <h2 class="page-title">
                Dashboard
              </h2>
            </div>
            <!-- Page title actions -->
          </div>
        </div>
      </div>
  
      <!-- Page header -->
      
    
   
   
      <!-- Page body -->
      <div class="page-body">
        <div class="container-xl">
          <div class="row row-deck row-cards">
            <div class="col-12">
              <div class="row row-cards">
                <div class="col-sm-6 col-lg-4">
                  <div class="card card-sm">
                    <div class="card-body">
                      <div class="row align-items-center">
                        <div class="col-auto">
                          <span class="bg-primary text-white avatar">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-users-group"
                              width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                              fill="none" stroke-linecap="round" stroke-linejoin="round">
                              <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                              <path d="M10 13a2 2 0 1 0 4 0a2 2 0 0 0 -4 0"></path>
                              <path d="M8 21v-1a2 2 0 0 1 2 -2h4a2 2 0 0 1 2 2v1"></path>
                              <path d="M15 5a2 2 0 1 0 4 0a2 2 0 0 0 -4 0"></path>
                              <path d="M17 10h2a2 2 0 0 1 2 2v1"></path>
                              <path d="M5 5a2 2 0 1 0 4 0a2 2 0 0 0 -4 0"></path>
                              <path d="M3 13v-1a2 2 0 0 1 2 -2h2"></path>
                            </svg>
                          </span>
                        </div>
                        <div class="col">
                          <div class="font-weight-medium">
                            1,500
                          </div>
                          <div class="text-secondary">
                            Total Members
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                  <div class="card card-sm">
                    <div class="card-body">
                      <div class="row align-items-center">
                        <div class="col-auto">
                          <span class="bg-green text-white avatar">
                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512">
                              <style>
                                svg {
                                  fill: #fcfcfc
                                }
                              </style>
                              <path
                                d="M163.9 136.9c-29.4-29.8-29.4-78.2 0-108s77-29.8 106.4 0l17.7 18 17.7-18c29.4-29.8 77-29.8 106.4 0s29.4 78.2 0 108L310.5 240.1c-6.2 6.3-14.3 9.4-22.5 9.4s-16.3-3.1-22.5-9.4L163.9 136.9zM568.2 336.3c13.1 17.8 9.3 42.8-8.5 55.9L433.1 485.5c-23.4 17.2-51.6 26.5-80.7 26.5H192 32c-17.7 0-32-14.3-32-32V416c0-17.7 14.3-32 32-32H68.8l44.9-36c22.7-18.2 50.9-28 80-28H272h16 64c17.7 0 32 14.3 32 32s-14.3 32-32 32H288 272c-8.8 0-16 7.2-16 16s7.2 16 16 16H392.6l119.7-88.2c17.8-13.1 42.8-9.3 55.9 8.5zM193.6 384l0 0-.9 0c.3 0 .6 0 .9 0z" />
                            </svg>
                          </span>
                        </div>
                        <div class="col">
                          <div class="font-weight-medium">
                            &#8377; 1,33,532
                          </div>
                          <div class="text-secondary">
                            Total Received Donation
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-lg-4 d-none">
                  <div class="card card-sm">
                    <div class="card-body">
                      <div class="row align-items-center">
                        <div class="col-auto">
                          <span class="bg-facebook text-white avatar">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                              viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                              stroke-linecap="round" stroke-linejoin="round">
                              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                              <path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3" />
                            </svg>
                          </span>
                        </div>
                        <div class="col">
                          <div class="font-weight-medium">
                            132 Likes
                          </div>
                          <div class="text-secondary">
                            21 today
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-6">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Upcoming Events</h3>
                </div>
                <div class="card-body border-bottom py-3">
                  <div class="d-flex">
                    <div class="text-secondary">
                      Show
                      <div class="mx-2 d-inline-block">
                        <input type="text" class="form-control form-control-sm" value="4" size="3"
                          aria-label="Invoices count">
                      </div>
                      entries
                    </div>
                    <div class="ms-auto text-secondary">
                      Search:
                      <div class="ms-2 d-inline-block">
                        <input type="text" class="form-control form-control-sm" aria-label="Search invoice">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="table-responsive">
                  <table class="table card-table table-vcenter text-nowrap datatable">
                    <thead>
                      <tr>
                        <th>Member Name</th>
                        <th>Event Type</th>
                        <th>Event Date</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          Madan Pal
                        </td>
                        <td>
                          Birthday
                        </td>
                        <td>
                          15 Sep 2023
                        </td>
                      </tr>
                      <tr>
                        <td>
                          Sherry Man
                        </td>
                        <td>
                          Birthday
                        </td>
                        <td>
                          18 Dec 2023
                        </td>
                      </tr>
                      <tr>
                        <td>
                          Sukhwinder
                        </td>
                        <td>
                          Birthday
                        </td>
                        <td>
                          18 Sep 2023
                        </td>
                      </tr>
                      <tr>
                        <td>
                          Satinder
                        </td>
                        <td>
                          Birthday
                        </td>
                        <td>
                          20 Sep 2023
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="card-footer d-flex align-items-center">
                  <p class="m-0 text-secondary">Showing <span>1</span> to <span>4</span> of <span>16</span> entries</p>
                  <ul class="pagination m-0 ms-auto">
                    <li class="page-item disabled">
                      <a class="page-link" href="#" tabindex="-1" aria-disabled="true">
                        <!-- Download SVG icon from http://tabler-icons.io/i/chevron-left -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                          stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                          stroke-linejoin="round">
                          <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                          <path d="M15 6l-6 6l6 6" />
                        </svg>
                        prev
                      </a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                    <li class="page-item">
                      <a class="page-link" href="#">
                        next
                        <!-- Download SVG icon from http://tabler-icons.io/i/chevron-right -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                          stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                          stroke-linejoin="round">
                          <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                          <path d="M9 6l6 6l-6 6" />
                        </svg>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-6">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Invoices</h3>
                </div>
                <div class="card-body border-bottom py-3">
                  <div class="d-flex">
                    <div class="text-secondary">
                      Show
                      <div class="mx-2 d-inline-block">
                        <input type="text" class="form-control form-control-sm" value="4" size="3"
                          aria-label="Invoices count">
                      </div>
                      entries
                    </div>
                    <div class="ms-auto text-secondary">
                      Search:
                      <div class="ms-2 d-inline-block">
                        <input type="text" class="form-control form-control-sm" aria-label="Search invoice">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="table-responsive">
                  <table class="table card-table table-vcenter text-nowrap datatable">
                    <thead>
                      <tr>
                        <th class="w-1">No.
                          <!-- Download SVG icon from http://tabler-icons.io/i/chevron-up -->
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-sm icon-thick" width="24" height="24"
                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M6 15l6 -6l6 6" />
                          </svg>
                        </th>
                        <th>Member Name</th>
                        <th>PAN No.</th>
                        <th>Date</th>
                        <th>Status</th>
                        <th>Amount</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><span class="text-secondary">001401</span></td>
                        <td><a href="invoice-details.html" class="text-reset" tabindex="-1">Madan Pal</a></td>
                        <td>
                          87956621
                        </td>
                        <td>
                          15 Dec 2017
                        </td>
                        <td>
                          <span class="badge bg-success me-1"></span> Paid
                        </td>
                        <td>&#8377; 1887</td>
                      </tr>
                      <tr>
                        <td><span class="text-secondary">001403</span></td>
                        <td><a href="invoice-details.html" class="text-reset" tabindex="-1">Madan Pal</a></td>
                        <td>
                          87956621
                        </td>
                        <td>
                          15 Dec 2017
                        </td>
                        <td>
                          <span class="badge bg-success me-1"></span> Paid
                        </td>
                        <td>&#8377; 1887</td>
                      </tr>
                      <tr>
                        <td><span class="text-secondary">001411</span></td>
                        <td><a href="invoice-details.html" class="text-reset" tabindex="-1">Madan Pal</a></td>
                        <td>
                          87956621
                        </td>
                        <td>
                          15 Dec 2017
                        </td>
                        <td>
                          <span class="badge bg-success me-1"></span> Paid
                        </td>
                        <td>&#8377; 1887</td>
                      </tr>
                      <tr>
                        <td><span class="text-secondary">001634</span></td>
                        <td><a href="invoice-details.html" class="text-reset" tabindex="-1">Madan Pal</a></td>
                        <td>
                          87956621
                        </td>
                        <td>
                          15 Dec 2017
                        </td>
                        <td>
                          <span class="badge bg-success me-1"></span> Paid
                        </td>
                        <td>&#8377; 1887</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="card-footer d-flex align-items-center">
                  <p class="m-0 text-secondary">Showing <span>1</span> to <span>4</span> of <span>16</span> entries</p>
                  <ul class="pagination m-0 ms-auto">
                    <li class="page-item disabled">
                      <a class="page-link" href="#" tabindex="-1" aria-disabled="true">
                        <!-- Download SVG icon from http://tabler-icons.io/i/chevron-left -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                          stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                          stroke-linejoin="round">
                          <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                          <path d="M15 6l-6 6l6 6" />
                        </svg>
                        prev
                      </a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                    <li class="page-item">
                      <a class="page-link" href="#">
                        next
                        <!-- Download SVG icon from http://tabler-icons.io/i/chevron-right -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                          stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                          stroke-linejoin="round">
                          <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                          <path d="M9 6l6 6l-6 6" />
                        </svg>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
 




    @include('admin.partial.footer')
                            </div>
    @include('admin.partial.script')
    <script>
        $(document).ready(function() {
            $('.teacherrole').delegate('input[name=approver]', 'change', function() {
                // console.log($(this).is(':checked'));
                var leadid = $(this).attr('data-id');
                var approver = $(this).is(':checked');
                var role = 0;
                if(approver){
                    role=1;
                }
                $.ajax({
                    type: 'POST',
                    url: "{{ route('admin.updaterole') }}",
                    data: {
                        "_token": "{{ csrf_token() }}",
                        'role': role,
                        'row_id': leadid
                    },
                    dataType: 'json',
                    error: function(Err) {

                    },
                    success: function(result) {
                        console.log(result);
                    }
                });
            });

            $('.teacherrole').delegate('input[name=superapprover]', 'change', function() {
                console.log($(this).is(':checked'));
                var leadid = $(this).attr('data-id');
                var approver = $(this).is(':checked');
                var role = 0;
                if(approver){
                    role=1;
                }
                $.ajax({
                    type: 'POST',
                    url: "{{ route('admin.supdaterole') }}",
                    data: {
                        "_token": "{{ csrf_token() }}",
                        'role': role,
                        'row_id': leadid
                    },
                    dataType: 'json',
                    error: function(Err) {

                    },
                    success: function(result) {
                        console.log(result);
                    }
                });
            });

        });
    </script>
</body>


</html>
