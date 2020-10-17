
<style media="screen">
  h5, h3, #scan{
    text-align: center;
  }

.center, img{
margin: auto;
width: 50%;
}

.overview a {
  text-decoration: none;
  display: inline-block;
  padding: 8px 16px;
}

a:hover {
  background-color: #ddd;
  color: black;
}

.previous {
  background-color: #007a87;
  color: white;
  margin-top: -15px;
  margin-left: -15px;

}

.round {
  border-radius: 50%;
}


img{
  width: 50%;
}

.info_card{
  -webkit-box-shadow: 9px 11px 13px 2px rgba(0,0,0,0.54);
-moz-box-shadow: 9px 11px 13px 2px rgba(0,0,0,0.54);
box-shadow: 9px 11px 13px 2px rgba(0,0,0,0.54);
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
<meta name="Description" content="CDU">

<?php
 ?>

 <section class="callaction">
   	<div class="container">
   		<div class="row">
   			<div class="col-lg-12">
   				<div class="overview">
                    <a href="/" class="previous round">&#8249;</a>
   				</div>
   			</div>
   		</div>
   	</div>
   	</section>


<h3>Waste Items</h3>
<h4>Click to see common items that belong to each group</h4>

     <section id="">
       <div class="container">
         <div class="row">
           <div class="col-md-12">
             <div class="cardContainer">

               <a href="/recycle"><div class="info_card" style="background-color: green;">
                 <h3>Recycle</h3>
                 <p>Items which are recycled means they are usually proccessed and reused</p>
               </div>
             </a>

             <a href="/general">
               <div class="info_card" style="background-color:red;">
                 <h3>General</h3>
                 <p>General waste items are usually used as landfill</p>
                 </div>
            </a>

            <a href="/commingled">
               <div class="info_card" style="background-color: orange;">
                 <h3>Commingled</h3>
                 <p>Commingled waste items are items that belong in commingled</p>
               </div>
             </a>









           </div>
         </div>
       </div>
     </div>
     </section>
