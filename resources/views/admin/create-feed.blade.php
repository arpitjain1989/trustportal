@include('admin.partial.link')

<body>

    @include('admin.partial.header')




    <div class="page">
        <!-- Navbar -->
       
        <div class="page-wrapper">
            <!-- Page header -->
            <div class="page-header d-print-none">
                <div class="container-xl">
                    <div class="row g-2 align-items-center">
                        <div class="col">
                            <h2 class="page-title">
                                Create Feed
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page body -->
            <div class="page-body">
                <div class="container-xl">
                    <div class="card">
                        <div class="card-body">
                            <div class="row row-cards mb-3">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h3 class="card-title">Drop/Upload Photo or Video</h3>
                                            <form method="POST" enctype="multipart/form-data" action="{{route('admin.create-feed-process')}}"   class="dropzone" id="dropzone-default"  >
                        @csrf

                                                <!-- <div class="fallback_old"> -->
                                                    <input name="image" type="file" />
                                                <!-- </div> -->
                                          
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6">
                                    <label class="form-label">Caption</label>
                                    <input type="text" name="title" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Create</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
      
        </div>
    
     


    @include('admin.partial.footer')
                            </div>
    @include('admin.partial.script')
    <!-- Libs JS -->

</body>

</html>