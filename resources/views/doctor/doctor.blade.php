<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <title>All doctor's</title>
    <link rel="stylesheet" href="{{ asset('css')}}/app.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.4.4/sweetalert2.all.js" integrity="sha512-aYkxNMS1BrFK2pwC53ea1bO8key+6qLChadZfRk8FtHt36OBqoKX8cnkcYWLs1BR5sqgjU5SMIMYNa85lZWzAw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">




    <style>
  @media (max-width: 712px) {
	.responsive{
		padding-bottom: 650px;
    display: inline-grid;
	}
    .responsive2{
        display: inline-block;
    }
    .responsive3{
        display: inline;
    }
  }
  @media (max-width: 600px) {
	.responsive{
	padding-bottom: 500px;
    display: inline-grid;
	}
    .responsive2{
        display: inline-block;
    }
    .responsive3{
        display: inline;
    }
  }
  @media (max-width: 540px) {
	.responsive{
		padding-bottom: 250px;
	}
  }
  @media (max-width: 480px) {
	.responsive{
		padding-bottom: 385px;
    display: inline-grid;
	}
  }
  @media (max-width: 414px) {
	.responsive{
		padding-bottom: 500px;
	}
  }
  @media (max-width: 412px) {
	.responsive{
		padding-bottom: 550px;
	}
  }
  @media (max-width: 394px) {
	.responsive{
		padding-bottom: 365px;
	}
  }
  @media (max-width: 390px) {
	.responsive{
		padding-bottom: 500px;
	}
  }
  @media (max-width: 376px) {
	.responsive{
		padding-bottom: 200px;
	}
  }
  @media (max-width: 360px) {
	.responsive{
	padding-bottom: 190px;
    display: inline-grid;
    margin-top: 20px;
	}
  }
</style>

    

</head>
<body>
    <div class="container pt-3 responsive">
    <marquee behavior="" direction="right">
        <h2 style="color: #1ba8fd;" class="font-weight-bold">MediLab Diagnostic Center</h2>
    </marquee>
    <div class="row responsive2">
        <div class="col-sm-8 col-md-8 col-lg-8 col-xl-8 col-xxl-8">
            <div class="card">
                <div class="card-header">
                    <h3 class="text-center font-weight-bold">All Doctor's</h3>
                </div>
                <div class="card-body">
                    <table class="table table-bordered" id="mytable">
                        <thead>
                            <tr>
                                <th>Doctor’s Name</th>
                                <th>Qualification</th>
                                <th>Designation</th>
                                <th>Institution </th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- <tr>
                                <td>1</td>
                                <td>Sami</td>
                                <td>Udemy Teacher</td>
                                <td>Udemy</td>
                                <td>
                                    <a href="" class="btn btn-success">Edit</a>
                                    <a href="" class="btn btn-danger">Delete</a>
                                </td>
                            </tr> -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4 responsive3">
            <div class="card">
                <div class="card-header">
                    <span id="addteacher"><h3 class="text-center font-weight-bold">Add New Doctor</h3></span>
                    <span id="updateteacher"><h3 class="text-center font-weight-bold">Update Doctor</h3></span>
                </div>
                <div class="card-body paginate">
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name">
                        <span class="text-danger" id="nameError"></span>
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Qualification</label>
                        <input type="text" class="form-control" id="qualification">
                        <span class="text-danger" id="qualificationError"></span>
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Designation</label>
                        <input type="text" class="form-control" id="designation">
                        <span class="text-danger" id="subjectError"></span>
                    </div>
    
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Institution</label>
                        <input type="text" class="form-control" id="institution">
                        <span class="text-danger" id="instituteError"></span>
                    </div>

                    <input type="hidden" id="id">
                    <button type="submit" id="addbtn" onclick="addData()" class="btn btn-primary">Add</button>
                    <button type="submit" id="updatebtn" onclick="updateData()" class="btn btn-primary">Update</button>
                </div>
            </div>
        </div>
    </div>
    </div>

    
    <script>
        $('#addteacher').show();
        $('#addbtn').show();
        $('#updateteacher').hide();
        $('#updatebtn').hide();

        // Ajax setup or header setup
        $.ajaxSetup({
            headers:{
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        })

        // Data read 
        function allData(){
            $.ajax({
            type: "GET",
            dataType: 'json',
            url: "/teacher/all",
            success:function(response){
                var data = ""
                $.each(response,function(key,value){
                    data = data + "<tr>"
                    data = data + "<td>"+value.name+"</td>"
                    data = data + "<td>"+value.qualification+"</td>"
                    data = data + "<td>"+value.designation+"</td>"
                    data = data + "<td>"+value.institution+"</td>"
                    data = data + "<td>"
                    data = data + "<button class='btn btn-primary mb-2' onclick='editData("+value.id+")'>Edit</button>"
                    data = data + "<button class='btn btn-danger' onclick='deleteData("+value.id+")'>Delete</button>"
                    data = data + "</td>"
                    data = data + "</tr>" 
                }) 

                // Dynamic Search & Pagination 
                $(document).ready(function() {
                    $('#mytable').DataTable();
                });
                $('tbody').html(data); 
            }
        })
        }
        allData();

        // Clear Data 
        function clearData(){
            $('#name').val('');
            $('#qualification').val('');
            $('#designation').val('');
            $('#institution').val('');

            $('#nameError').text('');
            $('#qualificationError').text('');
            $('#subjectError').text('');
            $('#instituteError').text('');
        }

        // Data insert
         function addData(){
         var name = $('#name').val();
         var qualification = $('#qualification').val();
         var designation = $('#designation').val();
         var institution = $('#institution').val();

         $.ajax({
             type: "POST",
             dataType: 'json',
             data: {name:name, qualification:qualification, designation:designation, institution:institution},
             url: "/teacher/add",
             success: function(data){
                 clearData(); 
                 allData(); 

                 // Alert (Sweet Alert)
                 const msg = Swal.mixin({
                 toast: true,
                 position: 'top-end',
                 icon: 'success',
                 showConfirmButton: false,
                 timer: 1500
                 })

                 msg.fire({
                 type: 'success',
                 title: 'Data Added Successfully',
                 })

                 console.log('Successfully Data Added'); 
             },
             error: function(error){
                 $('#nameError').text(error.responseJSON.errors.name);
                 $('#qualificationError').text(error.responseJSON.errors.qualification);
                 $('#subjectError').text(error.responseJSON.errors.designation);
                 $('#instituteError').text(error.responseJSON.errors.institution);
                //console.log(error.responseJSON.errors.name); 
             }   
         })
        } 

        // Edit Data & Update 
        function editData(id){
           // alert(id); 
           $.ajax({
               type: "GET",
               dataType: 'json',
               url: "/teacher/edit"+id,
               success:function(data){
                $('#addteacher').hide();
                $('#addbtn').hide();
                $('#updateteacher').show();
                $('#updatebtn').show();

                
                $('#id').val(data.id); 
                $('#name').val(data.name);
                $('#qualification').val(data.qualification);
                $('#designation').val(data.designation);
                $('#institution').val(data.institution); 
               }
           })
        }

        // After edit and update 
        function updateData(){
            var id = $('#id').val();
            var name = $('#name').val(); 
            var qualification = $('#qualification').val(); 
            var designation = $('#designation').val();
            var institution = $('#institution').val();

            $.ajax({
                type: "POST",
                dataType: 'json',
                data: {name:name, qualification:qualification, designation:designation, institution:institution},
                url: "/teacher/update/"+id,
                success:function(data){
                    $('#addteacher').show();
                    $('#addbtn').show();
                    $('#updateteacher').hide();
                    $('#updatebtn').hide();

                    clearData(); 
                    allData(); 

                    // Alert (Sweet Alert)
                    const msg = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    icon: 'success',
                    showConfirmButton: false,
                    timer: 1500
                    })

                    msg.fire({
                    type: 'success',
                    title: 'Data Updated Successfully',
                    })
                   //  console.log('Data Updated Successfully'); 
                }, 
                error:function(error){
                    $('#nameError').text(error.responseJSON.errors.name);
                    $('#qualificationError').text(error.responseJSON.errors.qualification);
                    $('#subjectError').text(error.responseJSON.errors.designation);
                    $('#instituteError').text(error.responseJSON.errors.institution);
                }
            })
        }


        // Delete 
        function deleteData(id){
            Swal.fire({
            title: 'Are you sure to Delete?',
            text: "Once deleted, you will not recover the data",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
            if (result.isConfirmed) {
                Swal(
                    $.ajax({
                    type: "GET",
                    dataType: 'json',
                    url: "/teacher/delete"+id,
                    success:function(data){
                        $('#addteacher').show();
                        $('#addbtn').show();
                        $('#updateteacher').hide();
                        $('#updatebtn').hide();

                        clearData(); 
                        allData(); 

                        // Alert (Sweet Alert)
                        const msg = Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        icon: 'success',
                        showConfirmButton: false,
                        timer: 1500
                        })

                        msg.fire({
                        type: 'success',
                        title: 'Data Deleted Successfully',
                        })

                        console.log('Data Deleted Successfully'); 
                    }
            })
                    
                )
            }
            })
        }
    </script>
</body>
</html>


