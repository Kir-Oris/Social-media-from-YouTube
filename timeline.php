<?php
    $title = "Profile | Mybook";
    require_once "includes/header.php";
?>

<body>
    <!--top bar-->
    <div class="blue_bar">
        <div style="width: 800px; margin: auto; font-size: 30px;">
            Mybook &nbsp &nbsp <input type="text" class="search_box" placeholder="Search for people">
            <img src="images/selfie.jpg" style="width: 50px; float: right;">
        </div>
    </div>   
    
    <!--cover area-->
    <div style="width: 800px; margin: auto; min-height: 400px;">
        
        <!--below cover area-->
        <div style="display: flex;">
            <!--friends area-->
            <div style="min-height: 400px; flex: 1;">
                <div class="friends_bar">
                   <img src="images/selfie.jpg" class="profile_pic">
                   <br>
                   Mary Banda
                </div>
            </div>
           
            <!--posts area-->
            <div style="min-height: 400px; flex: 2.5; padding: 20px; padding-right: 0px;">
                <div style="border: solid thin #aaa; padding: 10px; background: white;">
                    <textarea placeholder="What's on your mind?"></textarea>
                    <input class="post_button" type="submit" value="Post">
                    <br>
                </div>

                <!--posts-->
                <div class="post_bar">

                    <!--posts 1-->
                    <div class="post">
                        <div>
                            <img src="images/user1.jpg" style="width: 75px; margin-right: 4px;">
                        </div>

                        <div>
                            <div style="font-weight: bold; color: #405d9b;">First Guy</div>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem
                            <br><br>

                            <a href="#">Like</a> . <a href="#">Comment</a> . <span style="color: #999">April 23 2020</span>
                        </div>
                    </div>

                    <!--posts 1-->
                    <div class="post">
                        <div>
                            <img src="images/user4.jpg" style="width: 75px; margin-right: 4px;">
                        </div>

                        <div>
                            <div style="font-weight: bold; color: #405d9b;">African Dude</div>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem
                            <br><br>

                            <a href="#">Like</a> . <a href="#">Comment</a> . <span style="color: #999">April 23 2020</span>
                        </div>
                    </div>

                    
                </div>
            </div>
        </div>
    </div>
</body>
</html>