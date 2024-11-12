<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css.css">
    
</head>
<body>
    
<header>
<img class="logo" src="anh/FPT_Education_logo.svg.png" alt="">
</header>

   <nav class="hang1">
    <ul>
   <li> <a  href="index.php">Trang chủ</a></li>
<li><a href="">Gới Thiệu</a></li>
<li><a href="">Liên hệ</a></li>
<li><a href="">Góp Ý</a></li>
<li><a href="">Hỏi Đáp</a></li>

</ul></nav> 

<div> 
 <img id="banner"  src="anh/Banner_2.jpg" alt="" width="100%"><br>
    <!-- <input type="button" value="back" onclick="back()">
    <input type="button" value="next" onclick="next()"> -->
    <script>
        var arr=['anh/Banner_2.jpg','anh/banner-quang-cao-dien-thoai_103211774.jpg','anh/banner-quang-cao-du-khach-hang-hieu-qua-3.jpg','anh/s20-plus-pc-banner.jpg','anh/tgdd-tragopoppo-800-300.jpg'];
        var i=0;
        function next(){
            i++;
            if(i==5){
                i=0;
            }
            document.getElementById("banner").src=""+arr[i];
        }
        function back(){
            i--;
            if(i<0){
                i=arr.length-1;
            }
            document.getElementById("banner").src=""+arr[i];
        }
        setInterval(next,2000);
    </script>
</div>
 
</html>



