<?php 
session_start(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title> Nom de Page </title>
</head>
<body>
  <?php  include('Up.html');  ?>

  <forme class="menu">

  <ul class="list-unstyled">




<!-- French-->
  
  <section class="francais section" id="french">
   
  <div class="plat">
     <div class="origine" >Des entrées Françaises: </div>
     <li class="media">
       <img class="mr-3" src="..." alt="Generic placeholder image">
       <div class="media-body">
         <h3 class="mt-0 mb-1 name">French plate</h3>
           <div class="discription" >
             Ajaa is made out of blab bllalal lsldasld lqsld lqsdl qlsdl l ls dllsqdnusqdf sdufusdofkdsmflsmdofok  msodf ksdfo.""
           </div>

           <div class="price">
           <span class=" titles"> Prix </span> : 19$
           </div> 

           <div class="stock">
           <span class=" titles"> Stock </span> : <!-- <div if ($stock>=1) { class="availebel"> availbel </div> }   else { class="unavailebel"> unavailbel </div> -->
           </div> 


       </div>
     </li>
  </div> 

  </section>




<!-- Syrian-->

<section class="Syrian section" id="syrian">

<div class="plat"> 
   <div class="origine" >Des plats Syriens: </div>
     
   <li class="media my-4">
       <img class=" myimg" src="img/syfood.jpg" alt="Generic placeholder image">
       <div class="media-body">
         <h3 class="mt-0 mb-1 name">Syrian plate</h3>
           <div class="discription" >
           <span class=" titles"> Desciption : </span>Ajaa is made out of blab bllalal lsldasld lqsld lqsdl qlsdl l ls dllsqdnusqdf sdufusdofkdsmflsmdofok  msodf ksdfo.
           </div>
           
           <div class="price">
            <span class=" titles"> Prix : </span> 19$
           </div> 

           <div class="stock">
           <span class=" titles"> Stock : </span>  <!-- <div if ($stock>=1) { class="availebel"> availbel </div> }   else { class="unavailebel"> unavailbel </div> -->
           </div> 
           <input type="number" name="platSy1" min="0" step="1" class="form-control quantity"
          placeholder="Quantité">
        
        </div>
          
     </li>

   <li class="media my-4">
       <img class=" myimg" src="img/syfood.jpg" alt="Generic placeholder image">
       <div class="media-body">
         <h3 class="mt-0 mb-1 name">Syrian plate</h3>
           <div class="discription" >
           <span class=" titles"> Desciption : </span>Ajaa is made out of blab bllalal lsldasld lqsld lqsdl qlsdl l ls dllsqdnusqdf sdufusdofkdsmflsmdofok  msodf ksdfo.
           </div>
           
           <div class="price">
            <span class=" titles"> Prix : </span> 19$
           </div> 

           <div class="stock">
           <span class=" titles"> Stock : </span>  <!-- <div if ($stock>=1) { class="availebel"> availbel </div> }   else { class="unavailebel"> unavailbel </div> -->
           </div> 
           <input type="number" name="platSy1" min="0" step="1" class="form-control quantity"
          placeholder="Quantité">
       
        </div>
          
     </li>
   
   <li class="media my-4">
       <img class=" myimg" src="img/syfood.jpg" alt="Generic placeholder image">
       <div class="media-body">
         <h3 class="mt-0 mb-1 name">Syrian plate</h3>
           <div class="discription" >
           <span class=" titles"> Desciption : </span>Ajaa is made out of blab bllalal lsldasld lqsld lqsdl qlsdl l ls dllsqdnusqdf sdufusdofkdsmflsmdofok  msodf ksdfo.
           </div>
           
           <div class="price">
            <span class=" titles"> Prix : </span> 19$
           </div> 

           <div class="stock">
           <span class=" titles"> Stock : </span>  <!-- <div if ($stock>=1) { class="availebel"> availbel </div> }   else { class="unavailebel"> unavailbel </div> -->
           </div> 
           <input type="number" name="platSy1" min="0" step="1" class="form-control quantity"
          placeholder="Quantité">
          <button class="buttonCom" type="submit"> Commande !</button>
        </div>
          
     </li>
   </div> 

</section>




<!-- Tunisian-->

  <section class="tunisian section" id="tunisian">

  <div class="plat">  
     <div class="origine" >  Des desserts Tunisians:  </div>
      <li class="media">
        <img class="mr-3" src="..." alt="Generic placeholder image">
        <div class="media-body">
          <h3 class="mt-0 mb-1 name">Tunisian desserts</h3>
             <div class="discription" >
               Ajaa is made out of blab bllalal lsldasld lqsld lqsdl qlsdl l ls dllsqdnusqdf sdufusdofkdsmflsmdofok  msodf ksdfo.
             </div>
             
           <div class="price">
           <span class=" titles"> Prix </span> : 19$
           </div> 

           <div class="stock">
           <span class=" titles"> Stock </span>: <!-- <div if ($stock>=1) { class="availebel"> availbel </div> }   else { class="unavailebel"> unavailbel </div> -->
           </div> 

        </div>
       </li>
  </div> 

  </section>



</ul>


  </forme>

<section class ="avis" id="avis">
   <div class="container">
       <ul class ="ul-avis">
          <li class="li-avis">
            <img class="img-portrait" src="img/satea.jpg" alt="Portrait">
            <blockquote>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui, dignissimos quibusdam! Vitae cumque quidem commodi! Ratione fugit soluta aliquam assumenda, corrupti reprehenderit quaerat cum reiciendis. Optio illum consequatur quasi eius. "</blockquote> 
            <cite> - Satea 
          </li>

          <li class="li-avis">
            <img class="img-portrait" src="img/maryam.jpg" alt="Portrait">
            <blockquote>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui, dignissimos quibusdam! Vitae cumque quidem commodi! Ratione fugit soluta aliquam assumenda, corrupti reprehenderit quaerat cum reiciendis. Optio illum consequatur quasi eius. "</blockquote> 
            <cite> - Maryam
          </li>

          <li class="li-avis ">
            <img class="img-portrait" src="img/alexis.gif" alt="Portrait">
            <blockquote>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui, dignissimos quibusdam! Vitae cumque quidem commodi! Ratione fugit soluta aliquam assumenda, corrupti reprehenderit quaerat cum reiciendis. Optio illum consequatur quasi eius. "</blockquote> 
            <cite> - Alexis
          </li>
       </ul>
   </div>
  
</section>

<?php  include('Down.html');  ?>
</body>
</html>
