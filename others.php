<html>
    <head>
        <title>Gallery</title>
       <style>
           body{
               background-color: #d8e6d85c;
           }
           .gallery{
               width: 200px;
               margin: 10px;
               border: 1px solid #cccccc;
               float: left;
               transition: transform .4s;
               display: block;
           }
           img{
               width: 200px;
               height: auto;
           }
           .desc{
               box-shadow: 2px 2px 6px rgba(0,0,0,0.2);  
               padding: 15px;
               text-align: center;
               background-color: #fff;
           }
           .gallery:hover{
               box-shadow: 2px 2px 6px rgba(0,0,0,0.2);
               transform: scale(1.1);
          }            
             
        </style> 
    </head>
    <body>
        <div class="gallery">
            <a href="Images/Jaipur.jpg" target="_blank"><img src="HTML_Files/Images/Jaipur.jpg" alt="Hawa Mahal"></a>
            <div class="desc">Hawa Mahal</div>
        </div>
         <div class="gallery">
            <a href="Images/Mumbai.jpg" target="_blank"><img src="HTML_Files/Images/Mumbai.jpg" alt="Mumbai"></a>
            <div class="desc">Chatrapati Shivaji Station</div>
        </div>
        <div class="gallery">
            <a href="Images/Delhi.jpg" target="_blank"><img src="HTML_Files/Images/Delhi.jpg" alt="Lotus Temple"></a>
            <div class="desc">Lotus Temple</div>
        </div>
        <div class="gallery">
            <a href="Images/India_Gate.jpg" target="_blank"><img src="HTML_Files/Images/India_Gate.jpg" alt="India Gate"></a>
            <div class="desc">India Gate</div>
        </div>
        <div class="gallery">
            <a href="Images/Taj.jpg" target="_blank"><img src="HTML_Files/Images/Taj.jpg" alt="Taj"></a>
            <div class="desc">Taj Mahal Palace</div>
        </div>
        <div class="gallery">
            <a href="Images/Red-Fort.jpg" target="_blank"><img src="HTML_Files/Images/Red-Fort.jpg" alt="Taj"></a>
            <div class="desc">Red Fort</div>
        </div>
         <div class="gallery">
            <a href="Images/Almora.jpg" target="_blank"><img src="HTML_Files/Images/Almora.jpg" alt="Taj"></a>
            <div class="desc">Almora Hill Station</div>
        </div>
        <div class="gallery" style="position: relative; top: -200" >
            <a href="Images/Kerela.jpg" target="_blank"><img src="HTML_Files/Images/Kerela.jpg" alt="Taj"></a>
            <div class="desc">Kerela</div>
        </div>
          <div class="gallery" style="position: relative; top: -200">
            <a href="Images/Mahal.jpg" target="_blank"><img src="HTML_Files/Images/Mahal.jpg" alt="Taj"></a>
            <div class="desc">Taj Mahal</div>
        </div>
        <div class="gallery" style="position: relative; top: -200" >
            <a href="Images/Hockey.jpg" target="_blank"><img src="HTML_Files/Images/Hockey.jpg" alt="Indian Hockey " ></a>
            <div class="desc" style="font-size: 12px; padding: 11px;">Indian Hockey at Berlin Olympics</div>
        </div>
        
        <div class="gallery" style="position: relative; top: -200" >
            <a href="Images/Banaras.jpg" target="_blank"><img src="HTML_Files/Images/Banaras.jpg" alt="Varanasi Ghats" ></a>
            <div class="desc" style="font-size: 15px; padding: 11px;">Ghats of Banaras</div>
        </div>
        <div class="gallery" style="position: relative; top: -200" >
            <a href="Images/Jama-Masjid.jpg" target="_blank"><img src="HTML_Files/Images/Jama-Masjid.jpg" alt="Jama-Masjid" ></a>
            <div class="desc" style="font-size: 15px; padding: 11px;">Jama Masjid</div>
        </div>
        <div class="gallery" style="position: relative; top: 1; left: -1110" >
        <a href="Images/Haji Ali.jpg" target="_blank"><img src="HTML_Files/Images/Haji Ali.jpg" alt="Haji Ali" ></a>
            <div class="desc" style="font-size: 15px; padding: 11px;">Haji Ali Dargah</div>
        </div>
    </body>
</html>