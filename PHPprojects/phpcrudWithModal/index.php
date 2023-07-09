<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    
</head>

<body>


    <!-- Modal -->
    <div class="modal fade" id="completeModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Giving User Information </h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="mb-3">
                <label for="completename" class="form-label">Name</label>
                <input type="text" class="form-control" id="completename" name="completename" placeholder="Enter your name">                
            </div>
            <div class="mb-3">
                <label for="completeemail" class="form-label">Email</label>
                <input type="email" class="form-control" id="completeemail" name="completeemail" placeholder="Enter your email">                
            </div>
            <div class="mb-3">
                <label for="completephone" class="form-label">Phone No.</label>
                <input type="text" class="form-control" id="completephone" id="completephone"  placeholder="Enter your phone no.">                
            </div>
            <div class="mb-3">
                <label for="completeplace" class="form-label">Name</label>
                <input type="text" class="form-control" id="completeplace" id="completeplace" placeholder="Enter your place">                
            </div>

        </div>
        <div class="modal-footer">            
            <button type="button" class="btn btn-dark" onclick="adduser()">Submit</button>
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
           
        </div>
    </div>
</div>
    </div>

    <!-- update modal -->
 <div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">User Information update </h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="mb-3">
                <label for="updatename" class="form-label">Name</label>
                <input type="text" class="form-control" id="updatename" name="updatename" placeholder="Enter your name">                
            </div>
            <div class="mb-3">
                <label for="updateemail" class="form-label">Email</label>
                <input type="email" class="form-control" id="updateemail" name="updateemail" placeholder="Enter your email">                
            </div>
            <div class="mb-3">
                <label for="updatephone" class="form-label">Phone No.</label>
                <input type="text" class="form-control" id="updatephone" id="updatephone"  placeholder="Enter your phone no.">                
            </div>
            <div class="mb-3">
                <label for="updateplace" class="form-label">Place</label>
                <input type="text" class="form-control" id="updateplace" id="updateplace" placeholder="Enter your place">                
            </div>

        </div>
        <div class="modal-footer">            
            <button type="button" class="btn btn-dark" onclick="updateDetails()">Update</button>
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            <input type="hidden" id="hiddenData">
           
        </div>
    </div>
</div>
    </div>




    <div class="container">
        <h1 class="text-center">PHP crud with Bootstrap Modal</h1>

        <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#completeModal">
            Add new user
        </button>
        <!-- usr data table -->
        <div id="displayDataTable" class="mt-3">
            
        </div>

    </div>







    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    <script>  
//keeping data to display after reloading
        $(document).ready(function(){
            displayData();
        });
//display user data 
        function displayData(){
            var displayData= "true";

            $.ajax({
                url:"display.php",
                type:'post',
                data:{
                    displayData:displayData
                },
                success:function(data, status){
                    $('#displayDataTable').html(data);
                }
            });
        }   
        //add user in database 
        function adduser(){
            var nameAdd = $('#completename').val();
            var emailAdd = $('#completeemail').val();
            var phoneAdd = $('#completephone').val();
            var placeAdd = $('#completeplace').val();

            $.ajax({
                url:'insert.php',
                type:'post',
                data:{
                    nameSend:nameAdd,
                    emailSend:emailAdd,
                    phoneSend:phoneAdd,
                    placeSend:placeAdd,
                },
                success:function(data,status){
                    //function to display data
                    // console.log(status);
                    $('#completeModal').modal('hide');
                    displayData();
                    
                }
            });
        }

        //delete record user
        function deleteUser(deleteid){
            $.ajax({
                url:'delete.php',
                type:'post',
                data:{
                    deleteidSend:deleteid
                },
                success:function(data,status){
                    displayData();
                }
            });

        }

        // update record data
        function UpdateUser(updateid){
            $('#hiddenData').val(updateid);

            $.post("update.php",{updateid:updateid}, function(data,status){

                var userid = JSON.parse(data);

                $('#updatename').val(userid.name);
                $('#updateemail').val(userid.email);
                $('#updatephone').val(userid.phone);
                $('#updateplace').val(userid.place);

            });


            $('#updateModal').modal('show');
        }
        // update event method
        function updateDetails(){
            var updatename = $('#updatename').val();
            var updateemail = $('#updateemail').val();
            var updatephone = $('#updatephone').val();
            var updateplace = $('#updateplace').val();
            var hiddenData = $('#hiddenData').val();

            $.post("update.php",{
                updatename:updatename,
                updateemail:updateemail,
                updatephone:updatephone,
                updateplace:updateplace,
                hiddenData:hiddenData,
            },
            function(data,status){
                $('#updateModal').modal('hide');
                displayData();
            }
            );
        }
    </script>
</body>

</html>