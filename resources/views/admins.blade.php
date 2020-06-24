<!-- Author :bhavik chudasama
shows adnins -->
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  @include('admin_assets.css')

  <title >Match admin</title>
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
  @include('admin_content.sidebar')
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        @include('admin_content.topbar')
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          

       <!-- table for showings admins and their info -->
        <table id="example" class="table table-striped table-bordered" style="width:100%">
      <thead>
            <tr>
                <th>Username</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
       
            <tr>
            @foreach($data as $row)
                <td>{{$row->name}}</td>
                <td>{{$row->email}}</td>
                <td>
                <form action="{{ route('ads.destroy', $row->id) }}" method="post">
                @csrf
				 @method('DELETE')
					 <button type="submit" class="btn btn-danger">Delete</button>
 					
				</form>
                  </td>
            
            </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th>Username</th>
                <th>Email</th>
                <th>Actions</th>
        </tfoot>
    </table>
    </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
     @include('admin_content.footer')
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Bootstrap core JavaScript-->
@include('admin_assets.js')

</body>

</html>
