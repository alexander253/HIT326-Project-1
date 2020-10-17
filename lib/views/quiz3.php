
<style media="screen">
  h5, h3, #scan{
    text-align: center;
  }

.center, img{
margin: auto;
width: 50%;
}

#toggle, #toggle2, #toggle3, #toggle4, #toggle5, #toggle6, #toggle7, #toggle8, #toggle9{
  visibility: hidden;
  opacity: 0;
  position: relative;
  z-index: 3;
}

#toggle:checked ~ dialog, #toggle2:checked ~ dialog, #toggle3:checked ~ dialog , #toggle4:checked ~ dialog ,
#toggle5:checked ~ dialog , #toggle6:checked ~ dialog , #toggle7:checked ~ dialog , #toggle8:checked ~ dialog , #toggle9:checked ~ dialog   {
  display: block;
  z-index: 3;
}

#choice li{
  display: inline-block;
  padding: 50px;
  text-align: center;

}

.correct{
  background-color: green;
}

.incorrect{
  background-color: red;
}


img{
  width: 100%;
}

li img{
  width: 50%;
}

a{
  color: white;
}
</style>

<head>
<meta charset='utf-8' />
<title><?php echo $title ?></title>
<link rel="stylesheet" href="/css/standard.css" />

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/styles.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="manifest" href="manifest.webmanifest">

<link rel="stylesheet" type="text/css" href="css/lightbox.min.css">
<script src ="js/lightbox.min.js" type="text/javascript"></script>
<script src ="js/myscript.js" type="text/javascript"></script>



<meta name="Description" content="CDU">



<?php
 ?>


 <div class="main_content">

   <div class="container">
     <div class="progress">
       <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width:100%">
         <span class="sr-only">100% Complete</span>
       </div>
     </div>
   </div>

<div class="desc_activity">
      <h2>Examine the photo and click the correct waste category </h2>

</div>
  <div class="desc_activity">
    <a href="../images/battery.jpg" data-lightbox = "mygallery">
    <img src="../images/battery.jpg" alt="" class="mainimg3" id="">
    </a>

  </div>

  <div class= "desc_activity">




      <section>


        <ul id="choice">
          <li><img src="images/green2.png" alt="Academic integrity and Plagiarism clipart" class="rounded">
            <input type="checkbox" id="toggle">
              <label for="toggle"> Recycle</label>
                <dialog class="incorrect">
                  <p>Not quite, take a closer look at the image</p>
                  <label for="toggle">close</label>



            </dialog>
          </li>

          <li><img src="images/red.png" alt="Academic integrity and Plagiarism clipart" class="rounded">
            <input type="checkbox" id="toggle2">
              <label for="toggle2">General</label>
                <dialog class="incorrect">
                  <p>Not quite, take a closer look at the image</p>
                  <label for="toggle2">close</label>

            </dialog>


          </li>
          <li><img src="images/yellow.png" alt="Academic integrity and Plagiarism clipart" class="rounded">
            <input type="checkbox" id="toggle3">
              <label for="toggle3">Comingled</label>
                <dialog class="correct">
                  <p>Correct! This item belongs to to recycling!</p>

                <a href="/points"><label>Claim Points!</label></a>
            </dialog>

          </li>
        </ul>


              </section>

      </div>
    </div>
