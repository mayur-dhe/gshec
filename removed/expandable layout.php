<style>
/* The expanding image container */
.galleryBox {
  position: relative;
  display: none;
}
/* The grid: Four equal columns that floats next to each other */
.containerBox {
  float: left;
  width: 25%;
  height: 120px;
  padding: 3px;
}
/* Style the images inside the grid */
.containerBox img {
  opacity: 0.8; 
  height: 100%;
  cursor: pointer;
  object-fit: cover;
}
.containerBox img:hover {
  opacity: 1;
}
/* Clear floats after the columns */
.item:after {
  content: "";
  display: table;
  clear: both;
}
/* Expanding image text */
#imgtext {
  position: absolute;
  bottom: 15px;
  left: 15px;
  color: white;
  font-size: 20px;
}
/* Closable button inside the expanded image */
.closebtn {
  position: absolute;
  top: 10px;
  right: 15px;
  color: white;
  font-size: 35px;
  cursor: pointer;
}
</style>






<div class="galleryBox">
    <?php
        foreach ($teaching_learning_images['data'] as $key => $value) {
        if ($value['type'] == 'mooc') {
            echo '<div class="containerBox">
                    <img onclick="myFunction(this);" src="'.$value['url'].'" alt="" class="py10">
                </div>';
        }
        }
    ?> 
</div>

<div class="expandContainer">
    <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
    <img id="expandedImg" style="width:100%">
</div>









<script>
    function myFunction(imgs) 
    {
      var expandImg = document.getElementById("expandedImg");
      var imgText = document.getElementById("imgtext");
      expandImg.src = imgs.src;
      imgText.innerHTML = imgs.alt;
      expandImg.parentElement.style.display = "block";
    }
  </script>