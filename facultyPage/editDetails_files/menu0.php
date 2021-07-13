<div id="menu0" class="container tab-pane active"><br>
    <div id="photo" class="card">
        <form action="uploadContentf.php" method="post" enctype="multipart/form-data">
            
            <div class="card-header" align="center"><h2>Current Photo</h2></div>

            <div class="card-body" align="center">
                <h4 class="mb-4">Update your Profile Image</h4>
                <img src="/faculty/facultyPage/<?php echo($img) ?>" alt="Faculty Photo" class="img-responsive" style="border-radius: 5px; width: 250px; height: 250px;">
                <input class="btn btn-info" type="file" accept="image/*" name="imageToUpload" id="imageToUpload">
            </div>

            <div class="m-3" align="center">
                <input type="submit" name="picsubmit" value="Update" class="btn btn-success">
            </div>	

        </form>
    </div>
</div>