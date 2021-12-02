
<?php
//require "index1.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Design_Yourself</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <label class="inputs">
            Name:
            <input id="name" type='text' value=""><button type="submit" class="dbtn" >Download</button>
        </label>
         <canvas id="canvas">
         </canvas>
         <label for="uploader">Select file</label>
         <img src="css\NEW CERTIFICATE.jpg" id="uploader" alt="this is">
         <input type="file" id="supload">
         <?php 
         //session_unset();
         //session_destroy();
         ?>
         <script>
             const canvas = document.getElementById('canvas');
             const ctx = canvas.getContext('2d');
             
             const nameInput = document.getElementById('name')
             const reader = new FileReader();
             const img = new Image();

             const uploadImage =(e)=>{
                 drawImage();
                 reader.onload = () =>{
                     img.onload = () => {
                         canvas.width = img.width;
                         canvas.height = img.height;
                         ctx.drawImage(img, 0, 0);
                     };
                     img.src = reader.result;
                 };
                 reader.readAsDataURL(e.target.files[0]);
             };

             window.onload = function() {
                //var canvas = document.getElementById("canvas");
                var ctx = canvas.getContext("2d");
                var img = document.getElementById("uploader");
                     /*img.onload = () => {
                         canvas.width = img.width;
                         canvas.height = img.height;
                         ctx.drawImage(img, 0, 0);
                     };*/
                canvas.width = img.width;
                canvas.height = img.height;
                ctx.drawImage(img, 0, 0);
            };


             function drawImage() {
                const d = new Date()
	            //ctx.clearRect(0, 0, canvas.width, canvas.height)
	            ctx.drawImage(img, 0, 0, canvas.width, canvas.height)
	            ctx.font = '50px monotype corsiva'
            	ctx.fillStyle = '#101d43'
	            ctx.fillText(nameInput.value, 190, 400)
                //ctx.fillStyle = "#101d43"
                //ctx.fillText("0"+d.getDate()+"/0", 130, 650)
                //ctx.fillText(d.getMonth()+1, 220, 650)
                //ctx.fillText("/"+d.getFullYear(), 250, 650)
                //ctx.files(sign, 400, 650)
            }
            nameInput.addEventListener('input', function () {
	            drawImage()
            })            
            //const sign = document.getElementById('supload');
            //sign.addEventListener('change', uploadImage );
             const imageLoader = document.getElementById('uploader');
             imageLoader.addEventListener('change', uploadImage);
             function download(){
                 const image = canvas.toDataURL();
                 const link = document.createElement('a');
                 console.log(image)
                 link.href = image;
                 link.download = nameInput.value+'.jpeg';
                 link.click();
             }
             function blank(){
                 document.getElementById('name').value='';
             }
             //document.querySelector("input").addEventListener("input", download);
             document.querySelector(".dbtn").addEventListener("click", download);
         </script>
    </body>
</html>