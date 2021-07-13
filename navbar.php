<script type="text/javascript">
   function showResult(str) {
      if (str.length==0) {
        document.getElementById("livesearch").innerHTML="";
        return;
      }
      var xmlhttp = new XMLHttpRequest();
      xmlhttp.onreadystatechange=function() {
        if (this.readyState==4 && this.status==200) {
          document.getElementById("livesearch").innerHTML=this.responseText;
        }
      }
      xmlhttp.open("GET","livesearch.php?q="+str,true);
      xmlhttp.send();
      document.getElementById("livesearch").className += "livesearch ";

    }
</script>


<nav class="navbar navbar-expand-sm navbar-dark fixed-top">
          <div class="container-fluid">
            <div class="navbar-header">
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNavbar">
                <span class="navbar-toggler-icon"></span>
              </button>
              <img style="margin-left:-5px;margin-right:5px;" src="images/logo.png" height="45" width="45"/>
              <a class="navbar-brand mt-1" href="#">PICT | Faculty Section</a>
            </div>

            <div class="collapse navbar-collapse" id="myNavbar">
              <ul class="nav navbar-nav" style="height:100%;">
                <li class="nav-item" style="">
                    <a class="nav-link" href="index.php">Home</a>
                </li>

                <?php 
                $curPageName = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
                if($curPageName == 'index.php'){
                  ?>
                    <li class="nav-item" style="">
                        <a class="nav-link" href="#sec2">Departments</a>
                    </li>
                  <?php
                } 
                ?>
                
              </ul>

              <ul class="nav navbar-nav ml-auto" style="float: right;">
                <li class="mb-1 mr-3" style="">
                    <div style="float: right; margin: 5px; color: white; background: #2d2d2d;" data-theme="dark" data-onsuccess="onSignIn" class="g-signin2"  id="SignIn" onclick="toggleClick()">
                    <span class="buttonText">Google</span>
                    </div>
                </li>
                <li style="margin-top: 5px;">
                  <form action="contactFaculty/contactSearch.php" method="POST" class="form-inline">
                    <input type="text" class="form-control mr-2 ml-4" id="email" placeholder="Search Faculty" name="fname" onkeyup="showResult(this.value)">                
                  </form>
                </li>
              </ul>
            </div>
          </div>
        </nav>

        <div id="livesearch"></div>
        