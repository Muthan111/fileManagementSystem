<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Form</title>
    <link rel="stylesheet" href="navbarCSS.css">
    <link rel="stylesheet" href="popup.css">
</head>
<body>
<nav>
        <!-- The sidebar -->  
        <div id="mySidenav" class="sidenav">
          <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
          <a href="Home.php">Home</a>
          <a href="myfiles.php">Myfiles</a>
          <a href="Favourites.php">Favourites</a>
          <a href="Recycle.php">Recycle</a>
          <a href="Contact.php">Contact</a>
          <a href="Profile.php">Contact</a>
          <!-- <a href="Profile.html">Profile</a> -->
      </div>
      
      <!-- Use any element to open the sidenav -->
      <span onclick="openNav()">Click here to open</span>
      
      <!-- Add all page content inside this div if you want the side nav to push page content to the right (not used if you only want the sidenav to sit on top of the page -->
      <div id="main">
          ...
      </div>
    </nav>
    
  

    <div id="main">
        <!-- Use any element to open the modal -->
        <button id="openModalBtn">Click here to open upload form</button>

        <!-- The Modal -->
        <div id="uploadModal" class="modal">
            <!-- Modal content -->
            <div class="modal-content">
                <span class="close" id="closeModalBtn">&times;</span>
                <form action="upload.php" method="post" enctype="multipart/form-data">
                    Select file to upload:
                    <input type="file" name="file">
                    <input type="submit" value="Upload">
                </form>
            </div>
        </div>
    </div>

    <script>
        function openNav() {
            document.getElementById("myNavbar").style.left = "0";
            document.getElementById("main").classList.add("shifted");
        }

        function closeNav() {
            document.getElementById("myNavbar").style.left = "-250px";
            document.getElementById("main").classList.remove("shifted");
        }

        // Get the modal
        var modal = document.getElementById("uploadModal");

        // Get the button that opens the modal
        var btn = document.getElementById("openModalBtn");

        // Get the <span> element that closes the modal
        var span = document.getElementById("closeModalBtn");

        // When the user clicks the button, open the modal 
        btn.onclick = function() {
            modal.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>
    <script src="navbarScript.js"></script> 
</body>
</html>