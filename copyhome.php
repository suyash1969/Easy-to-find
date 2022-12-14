<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Easy to find</title>
    <style>
        *
{
    margin: 0;
    padding: 0;
    font-family: 'Poppins',sans-serif;
    box-sizing: border-box;
}
body
{
    background: #f0f2f0;
    color: #5f5f5f;
}
a{
    text-decoration: none;
    color: #5f5f5f;
}
.navbar{
    display: flex;
    align-items: center;
    justify-content: space-between;
    background: #fff;
    padding: 6px 6%;
    position: sticky;
    top: 0;
    z-index: 100;
    box-shadow: 0 5px 10px rgba(0, 0, 0,0.1);
}
.logo img
{
 width: 90px;
 margin-right: 15px;
 display: block;
}
.navbar-center ul li
{
    display: inline-block;
    list-style: none;


}
.navbar-center ul li a
{
    display: flex;
    align-items: center;
    font-size: 14px;
    margin: 5px 8px;
    padding-right: 5px;
    position: relative;
}
.navbar-center ul li a img
{
    width: 30px;
}
.navbar-center ul li a::after
{
    content: '';
    width: 0%;
    height: 2px;
    background: #045be0;
    position: absolute;
    bottom: -15px;
    transition: width 0.3sec;
}
.navbar-center ul li a:hover::after
{
    width: 100%;
}
.nav-profile-img
{
    width: 40px;
    border-radius: 50%;
    display: block;
    cursor: pointer;
    position: relative;
}
.online
{
    position: relative;
}
.online::after
{
    content: '';
    width: 7px;
    height: 7px;
    border: 2px solid #fff;
    border-radius: 50%;
    right: 0px;
    top: 0px;
    background: #41db51;
    position: absolute;
}
.search-box
{
    background: #f0f2f0;
    width: 250px;
    border-radius: 20px;
    display: flex;
    align-items: center;
    padding: 0 15px;
}
.navbar-left
{
    display: flex;
    align-items: center;
}
.search-box img
{
     width: 14px;

}
.search-box input
{
    width: 100%;
    background: transparent;
    padding: 8px;
    outline: none;
    border: none;
}
/* -----------nacvar end here---------------- */
.container
{
    padding: 20px 6%;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
}


.main-content
{
    flex-basis: 50%;
    margin-right: 150px;

}

.rigth-sidebar{
    flex-basis: 20%;
    align-self: flex-start;
}
.sidebar-news
{
    background: #fff;
    padding: 10px 25px;
}
.info-icon
{
    width: 15px;
    float: right;
    margin-top: 15px;
}
.sidebar-news h3{
    font-size: 18px;
    font-weight: 600;
    color: green;
    margin: 10px 0 30px;
}
.sidebar-news a{
    display: block;
    font-size: 1.sidebar-news6px;
    font-weight: 600;
    margin-top: 10px;
    margin-bottom: -2px;
    
}
.sidebar-news span
{
    font-size: 12px;

}
.sidebar-news .read-more-link
{
    color: #045be6;
    font-weight: 500;
    margin: 20px 0 10px;
}
.sidebar-ad
{
    background: #fff;
    padding: 15px 25px;
    text-align: center;
    margin: 12px 0;
    font-size: 12px;
}
.sidebar-ad img
{
    width: 60px;
    border-radius: 50%;
    margin: 4px;
}
.sidebar-ad small
{
    float: right;
    font-weight: 500;
}
.sidebar-ad p
{
    margin-top: 30px;
    margin-top: 10px;
    margin: 10px;
}
.sidebar-ad b
{
display: block;
font-weight: 500;
margin-top: 10px;
margin: 4px;
}
.ad-link
{
    display: inline-block;
    border: 1px solid black;
    border-radius: 30px;
    padding: 5px 15px;
    color: sienna;
    font-weight: 500;
    margin: 20px auto 10px;
    
}
.sidebar-usefull-links
{
    padding: 15px 25px;
    text-align: center;
}
.sidebar-usefull-links a
{
    display: inline-block;
    font-size: 14px;
    margin: 2px 10px;
}
.copyright-msg
{
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 12px;
    margin-top: 10px;
    font-weight: 500;

}
.copyright-msg img
{
    margin-right: 4px;

}
/* midle work start from here how to do picture and all things in this */
.create-post
{
    background: #fff;

}
.create-post-input
{
    padding: 20px 25px 10px;
    display: flex;
    align-items: flex-start;

}
.create-post-input img
{
     width: 35px;
     border-radius: 50%;
     margin-right: 10px;    
}
#mm
{
    display: flex;
    
}
#mm textarea
{
    width: 100%;
    border: 0;
    outline: 0;
    
    resize: none;
    background: transparent;
    margin-top: 8px;
}
::placeholder
{
    font-weight: 500;   
}
.create-post-links
{
    display: flex;
    align-items: flex-start;
}
.create-post-links li
{
 list-style: none;
 border-top: 1px solid #ccc;
 border-right: 1px solid #ccc;
 flex-basis: 25%;
 height: 40px;
 font-size: 13px;
 display: flex;
 align-items: center;
 justify-content: center;
 cursor: pointer;
}
.create-post-links li img
{
    width: 15px;
    margin-right: 5px;
}
.create-post-links li:last-child
{
    background: black;
    color: #fff;
    border-top: 0;
    border-right:??0;
}
.sort-by
{
    display: flex;
    align-items: center;
    margin: 10px 0;

}
.sort-by hr{
    flex: 1;
    border: 0;
    height: 1px;
    background: #ccc;
}
.sort-by p{
    font-size: 13px;
    padding-left: 5px;

}
.sort-by p span{
    font-weight: 600px;
    cursor: pointer;
}
.sort-by p span img{
    width: 12px;
    margin-left: 3px;
}
.post{
    background: #fff;
    padding: 20px 25px 5px;
    margin: 5px 0 15px;
}
.post-author{
     display: flex;
     align-items: flex-start;
     margin-bottom: 20px;
}
.post-author img{
    width: 35px;
    border-radius: 50%;
    margin-right: 10px;
    margin-top: 5px;
}
.post-author h1{
    font-size: 18px;
    font-weight: 600;
    color: #333;
}
.post-author small{
    display: block;
    margin-bottom: -2px;
}
.post p{
    font-size: 14px;
    margin-bottom: 15px;
}
.post-stats
{
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: space-between;
    font-size: 12px;
    border-bottom: 1px solid #ccc;
    padding-bottom: 6px;
}.post-stats div{
    display: flex;
    align-items: center;

}
.post-stats img{
    width: 15px;
    margin-right: -5px;

}
.liked-users{
    margin-left: 10px;

}
.post-activity{
    display:  flex;
    align-items: center;
    justify-content: space-between;
    padding: 10px 0;
    font-size: 14px;
    font-weight: 500;

}
.post-activity-user-icon{
    width: 22px;
    border-radius: 50%;
}
.post-activity-arrow-icon{
    width: 12px;
    margin-left: 5px;
}
.post-activity-link img{
width: 18px;
margin-right:??8px;
}

    </style>
</head>
<body>

<?php
    // require 'dbcon.php';
    // $name = $_SESSION['name'];
    // $query=" SELECT * FROM institution WHERE name='$name' ";
    // $result=mysqli_query($con,$query);
    // $row=mysqli_fetch_array($result);
    // $image=$row['profile'];
    // $Bio=$row['Bio'];
    // if(isset($_POST['submit']))
    // {
    //     $name=$_SESSION['name'];
    //     $PostW= mysqli_real_escape_string($con, $_POST['PostW']);
    //     $Vedio= mysqli_real_escape_string($con, $_POST['Vedio']);
    //     $ImageP= mysqli_real_escape_string($con, $_POST['ImageP']);
    //     $query1=" INSERT INTO post(PostW, Vedio, ImageP, name) VALUES (' $PostW','$Vedio','$ImageP','$name')";  
    //     $queryrun=mysqli_query($con,$query1);
    //     if(mysqli_query($con,$query1))
    //               {
    //                 echo "<script> alert('Post Submitted Succesfully');window.location.assign('homepp.php'); </script>";
    //               }
                 
    // }
   
    //     $name = $_SESSION['name'];
    //     $query2=" SELECT * FROM post WHERE name='$name' ";
    //     $result=mysqli_query($con,$query2);
    //     $row=mysqli_fetch_array($result);
    //     $img=$row['ImageP'];
    //     $PostW=$row['PostW'];
        




























?>






  <nav class="navbar">
    <div class="navbar-left">
        <a href="./index.html" class="logo"><img src="./images/easy.png" alt="" height="90px" width="200px"></a>
        <div class="search-box">
          <img src="../images/search.png" alt="">
          <input type="text" placeholder="search">
        </div>
    </div>
    <div class="navbar-center">
      <ul>
        <li><a href="#"><img src="./images/home.png" alt=""><span>Home</span></a></li>
        <li><a href="./aboutpage.php"><img src="./images/network.png" alt=""><span>About</span></a></li>
        <li><a href="#"><img src="./images/jobs.png" alt=""><span>find</span></a></li>
        <li><a href="./teacherregistration.php"><img src="./images/notification.png" alt=""><span>Institute</span></a></li>

      </ul>
    </div>
    <div class="navbar-center">
      <!-- <div class="online"> <img src="./images/user-1.png" alt="" class="nav-profile-img"></div> -->
      <!-- <div class="online"> <button><a href="logout.php">LOgout</a></button></div> -->
      <div class="online"><a href="updatepro.php"><img src="<?php echo $image;  ?>" alt="not found"  class="nav-profile-img"></a></button></div>
<img src="" alt="">
     
    </div>
  </nav>
  <!-- ----------navbar here is close----------- -->
  <div class="container">
    <div class="rigth-sidebar">
       <div class="sidebar-news">
        <img src="./images/more.png" alt="" class="info-icon">
        <h3>Trending news</h3>
        <a href="#">High demands for skilled Coder for teaching</a>
        <span>1d ago &middot; 10,934 readers</span>

        <a href="#">High demands for skilled Maths for teaching</a>
        <span>1d ago &middot; 10,934 readers</span>
        <a href="#" class="read-more-link">Read more</a>
       </div>
       <div class="sidebar-ad">
        <small>Ad &middot; &middot;&middot;</small>
        <p>Master the 5 priciples of web design</p>
        <div>
          <img src="./images/user-1.png" alt="">
          <img src="./images/mi-logo.png" alt="">
        </div>
        <b>Brand  and Demand in Xiaomi</b>
        <a href="#" class="ad-link">Learn more</a>
       </div>
       <div class="sidebar-usefull-links">
        <a href="#">About</a>
        <a href="#">Accessiblity</a>
        <a href="#">Help Center</a>
        <a href="#">Privacy Policy</a>
        <a href="#">More</a>
        <div class="copyright-msg">
          <img src="./images/easy.png" alt="" height="90px" width="100px">
          <p>Easy to find &#169; 2022 .All right reservedea</p>
        </div>
       </div>
    </div>
    
    <div class="main-content">    
       <div class="create-post">
        <div class="create-post-input">
          <img src="<?php echo $image; ?>" alt="">
          </div>
          <!-- work star from here -->



          <form action="" method="POST" enctype="multipart/form-data">
            <div class="create-post-input" id="mm">
          <textarea rows="2" placeholder="Write a post" name="PostW"></textarea>
          </div>
       
        <div class="create-post-links">
          <li> <input type="file" name="ImageP"> <img src="./images/photo.png" alt="">Photo</li>
          <li><img src="./images/video.png" alt="">Vedio</li>
          <li><img src="./images/event.png" alt="">Events</li>
          <li><button type="submit" name="submit"> Post</button></li>
        </div>
        </form>

       </div>
       <div class="sort-by">
        <hr>
        <p>sort by: <span>top <img src="/images/down-arrow.png" alt=""></span></p>
       </div>
       <div class="post">
        <div class="post-author">
        <img src="<?php echo $image; ?>" alt="">
        <div>
          <h1>leo</h1>
          <small><?php echo $Bio?></small>
          <small>2 hours ago</small>

        </div>
       </div>
       <p><?php echo $PostW; ?></p>
       <img src="<?php echo $img; ?>" width="100%">
       <div class="post-stats">
        <div>
          <img src="./images/thumbsup.png" alt="">
          <img src="./images/love.png" alt="">
          <img src="./images/clap.png" alt="">
          <span class="liked-users">Abhinav mishra and 75 others</span>
        </div>
        <div>
          <span>22 comments &middot ;40 shares</span>
        </div>

       </div>
       <div class="post-activity">
        <div>
          <img src="./images/user-1.png" class="post-activity-user-icon">
          <img src="./images/down-arrow.png" class="post-activity-arrow-icon">
        </div>
        <div class="post-activity-link">
          <img src="./images/like.png" alt="">
          <span>Like</span>
        </div>
        <div class="post-activity-link">
          <img src="./images/comment.png" alt="">
          <span>comment</span>
        </div>
        <div class="post-activity-link">
          <img src="./images/share.png" alt="">
          <span>share</span>
        </div>
        <div class="post-activity-link"> 
          <img src="./images/send.png" alt="">
          <span>send</span>
        </div>

       </div>
      </div>
      <div class="post">
        <div class="post-author">
        <img src="./images/user-4.png" alt="">
        <div>
          <h1>george</h1>
          <small>founder and ceo at gellelio group</small>
          <small>2 hours ago</small>

        </div>
       </div>
       <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illo laudantium dolore modi sit similique iusto facere voluptate repellendus omnis quisquam magna</p>
       <img src="./images/post-image-2.png" width="100%">
       <div class="post-stats">
        <div>
          <img src="./images/thumbsup.png" alt="">
          <img src="./images/love.png" alt="">
          <img src="./images/clap.png" alt="">
          <span class="liked-users">Abhinav mishra and 75 others</span>
        </div>
        <div>
          <span>22 comments &middot ;40 shares</span>
        </div>

       </div>
       <div class="post-activity">
        <div>
          <img src="./images/user-2.png" class="post-activity-user-icon">
          <img src="./images/down-arrow.png" class="post-activity-arrow-icon">
        </div>
        <div class="post-activity-link">
          <img src="./images/like.png" alt="">
          <span>Like</span>
        </div>
        <div class="post-activity-link">
          <img src="./images/comment.png" alt="">
          <span>comment</span>
        </div>
        <div class="post-activity-link">
          <img src="./images/share.png" alt="">
          <span>share</span>
        </div>
        <div class="post-activity-link"> 
          <img src="./images/send.png" alt="">
          <span>send</span>
        </div>

       </div>
      </div>
      <div class="post">
        <div class="post-author">
        <img src="./images/user-3.png" alt="">
        <div>
          <h1>leo</h1>
          <small>founder and ceo at gellelio group</small>
          <small>2 hours ago</small>

        </div>
       </div>
       <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illo laudantium dolore modi sit similique iusto facere voluptate repellendus omnis quisquam magna</p>
       <img src="./images/post-image-3.png" width="100%">
       <div class="post-stats">
        <div>
          <img src="./images/thumbsup.png" alt="">
          <img src="./images/love.png" alt="">
          <img src="./images/clap.png" alt="">
          <span class="liked-users">Abhinav mishra and 75 others</span>
        </div>
        <div>
          <span>22 comments &middot ;40 shares</span>
        </div>

       </div>
       <div class="post-activity">
        <div>
          <img src="./images/user-1.png" class="post-activity-user-icon">
          <img src="./images/down-arrow.png" class="post-activity-arrow-icon">
        </div>
        <div class="post-activity-link">
          <img src="./images/like.png" alt="">
          <span>Like</span>
        </div>
        <div class="post-activity-link">
          <img src="./images/comment.png" alt="">
          <span>comment</span>
        </div>
        <div class="post-activity-link">
          <img src="./images/share.png" alt="">
          <span>share</span>
        </div>
        <div class="post-activity-link"> 
          <img src="./images/send.png" alt="">
          <span>send</span>
        </div>

       </div>
      </div>
      <div class="post">
        <div class="post-author">
        <img src="./images/post-image-4.png" alt="">
        <div>
          <h1>george</h1>
          <small>founder and ceo at gellelio group</small>
          <small>2 hours ago</small>

        </div>
       </div>
       <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illo laudantium dolore modi sit similique iusto facere voluptate repellendus omnis quisquam magna</p>
       <img src="./images/post-image-4.png" width="100%">
       <div class="post-stats">
        <div>
          <img src="./images/thumbsup.png" alt="">
          <img src="./images/love.png" alt="">
          <img src="./images/clap.png" alt="">
          <span class="liked-users">Abhinav mishra and 75 others</span>
        </div>
        <div>
          <span>22 comments &middot ;40 shares</span>
        </div>

       </div>
       <div class="post-activity">
        <div>
          <img src="./images/user-1.png" class="post-activity-user-icon">
          <img src="./images/down-arrow.png" class="post-activity-arrow-icon">
        </div>
        <div class="post-activity-link">
          <img src="./images/like.png" alt="">
          <span>Like</span>
        </div>
        <div class="post-activity-link">
          <img src="./images/comment.png" alt="">
          <span>comment</span>
        </div>
        <div class="post-activity-link">
          <img src="./images/share.png" alt="">
          <span>share</span>
        </div>
        <div class="post-activity-link"> 
          <img src="./images/send.png" alt="">
          <span>send</span>
        </div>

       </div>
????????????</div>

    </div>
  </div>
</body>
</html>