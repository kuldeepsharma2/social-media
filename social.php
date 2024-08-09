<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Social Media</title>
    <link rel="icon" type="image/png" width="50px" href="./images/favicon.png">
    <link rel="stylesheet" href="./css/style.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/44d04ad0c5.js" crossorigin="anonymous"></script>
    <meta name="author" content="Shivam" />
</head>

<body>

    <nav>
        <div class="nav-left">
            <img src="./images/logo.png" alt="logo" class="logo"></img>
            <ul>
                <li><img src="./images/notification.png" alt="notification"></li>
                <li><img src="./images/inbox.png" alt="inbox"></li>
                <li><img src="./images/video.png" alt="video"></li>
            </ul>
        </div>
        <div class="nav-right">
            <div class="search-box">
                <img src="./images/search.png" alt="search">
                <input type="text" placeholder="Search">
            </div>
            <div class="nav-user-icon " onclick="settingMenuTooggle()">
                <img src="./images/profile-pic.jpg" alt="user-profile-pic">
            </div>
        </div>
        <!--Settings menu-->
        <div class="settings-menu">
            <div id="dark-btn" class="">
                <span>

                </span>
            </div>
            <div class="setting-menu-inner">
                <div class="user-profile">
                    <img src="./images/profile-pic.jpg" alt="">
                    <div>
                        <p>Shivam</p>
                        <a href="#">See Your Profile</a>
                    </div>
                </div>
                <hr>
                <div class="user-profile">
                    <img src="./images/feedback.png" alt="">
                    <div>
                        <p>Give Feedback</p>
                        <a href="#">Help Us To Improve The New Design</a>
                    </div>
                </div>
                <hr>
                <div class="settings-links">
                    <img src="./images/setting.png" class="settings-icon" alt="">
                    <a href="#">Settings & Privacy <img src="./images/arrow.png" width="10px" alt=""></a>
                </div>
                <div class="settings-links">
                    <img src="./images/help.png" class="settings-icon" alt="">
                    <a href="#">Help & Support <img src="./images/arrow.png" width="10px" alt=""></a>
                </div>
                <div class="settings-links">
                    <img src="./images/display.png" class="settings-icon" alt="">
                    <a href="#">Display & Accessibility <img src="./images/arrow.png" width="10px" alt=""></a>
                </div>
                <div class="settings-links">
                    <img src="./images/logout.png" class="settings-icon" alt="">
                    <a href="logout.php">Logout<img src="./images/arrow.png" width="10px" alt=""></a>
                </div>
            </div>


        </div>



    </nav>
    <div class="container">
        <div class="left-sidebar">
            <!--left-sidebar-->
            <div class="imp-links">
                <a href="#"><img src="./images/news.png" alt="">Latest News</a>
            </div>

            <div class="imp-links">
                <a href="#"><img src="./images/friends.png" alt="">Friends</a>
            </div>

            <div class="imp-links">
                <a href="#"><img src="./images/group.png" alt="">Groups</a>
            </div>

            <div class="imp-links">
                <a href="#"><img src="./images/marketplace.png" alt="">Markting Place</a>
            </div>

            <div class="imp-links">
                <a href="#"><img src="./images/watch.png" alt="">Watch</a>
            </div>

            <div class="imp-links text">
                <a href="#">See More</a>
            </div>
            <div class="shortcut-links">
                <p>Your Shortcut</p>
                <a href="#"><img src="./images/shortcut-1.png" alt="">Web Developers</a>
                <a href="#"><img src="./images/shortcut-2.png" alt="">Web Design Course</a>
                <a href="#"><img src="./images/shortcut-3.png" alt="">Full Stack Development</a>
                <a href="#"><img src="./images/shortcut-4.png" alt="">Website Experts</a>
            </div>

        </div>
        <div class="main-content">
            <!--main-content-->
            <div class="story-gallery">
                <div class="story story1">
                    <img src="./images/upload.png" class="upload" alt="">
                    <p>Post Story</p>
                </div>
                <div class="story story2">
                    <img src="./images/member-1.png" alt="">
                    <p>Raman</p>
                </div>
                <div class="story story3">
                    <img src="./images/member-2.png" alt="">
                    <p>Harman</p>
                </div>
                <div class="story story4">
                    <img src="./images/member-3.png" alt="">
                    <p>Daman</p>
                </div>
                <div class="story story5">
                    <img src="./images/member-4.png" alt="">
                    <p>Rajat</p>
                </div>
            </div>


            <div class="write-post-container">
                <div class="user-profile">
                    <img src="./images/profile-pic.jpg" alt="">
                    <div>
                        <p>Shivam</p>
                        <small>Public <i class="fa-solid fa-caret-down"></i></small>
                    </div>
                </div>
                <div class="post-input-container">
                    <textarea row="3" placeholder="What's on your mind, Shivam"></textarea>
                    <div class="add-post-link">
                        <a href="#"><img src="./images/live-video.png" alt="">Live Video</a>
                        <a href="#"><img src="./images/photo.png" alt="">Photo/Video</a>
                        <a href="#"><img src="./images/feeling.png" alt="">Feeling/Activity</a>
                    </div>
                </div>

            </div>

            <div class="post-container">
                <div class="post-row">
                    <div class="user-profile">
                        <img src="./images/profile-pic.jpg" alt="">
                        <div>
                            <p>Shivam</p>
                            <span>July 4 2024,8pm</span>
                        </div>
                    </div>
                    <a href="#"></a> <i class="fa-solid fa-ellipsis-v"></i>
                </div>

                <p class="post-text ">It's a Good Day To Start <span>@Code</span>. I love Website Development And UI
                    design <a href="#">#TakeItEasy</a>
                    <a href="#">#Code</a>
                </p>
                <img src="./images/feed-image-1.png" class="post-img" alt="">
                <div class="post-row">
                    <div class="activity-icon">
                        <div><img src="./images/like-blue.png" alt=""> 120</div>
                        <div><img src="./images/comments.png" alt=""> 140</div>
                        <div><img src="./images/share.png" alt=""> 200</div>
                    </div>
                    <div class="post-profile-icon">
                        <img src="./images/profile-pic.jpg" alt=""> <i class="fa-solid fa-caret-down"></i>
                    </div>
                </div>
            </div>
            <div class="post-container">
                <div class="post-row">
                    <div class="user-profile">
                        <img src="./images/profile-pic.jpg" alt="">
                        <div>
                            <p>Shivam</p>
                            <span>July 1 2024,8pm</span>
                        </div>
                    </div>
                    <a href="#"></a> <i class="fa-solid fa-ellipsis-v"></i>
                </div>

                <p class="post-text ">Like And Share This Video With Friend<span>@Code</span>. <a
                        href="#">#TakeItEasy</a>
                    <a href="#">#Code</a>
                </p>
                <img src="./images/feed-image-2.png" class="post-img" alt="">
                <div class="post-row">
                    <div class="activity-icon">
                        <div><img src="./images/like.png" alt=""> 110</div>
                        <div><img src="./images/comments.png" alt=""> 142</div>
                        <div><img src="./images/share.png" alt=""> 120</div>
                    </div>
                    <div class="post-profile-icon">
                        <img src="./images/profile-pic.jpg" alt=""> <i class="fa-solid fa-caret-down"></i>
                    </div>
                </div>
            </div>
            <div class="post-container">
                <div class="post-row">
                    <div class="user-profile">
                        <img src="./images/profile-pic.jpg" alt="">
                        <div>
                            <p>Shivam</p>
                            <span>June 14 2024,1pm</span>
                        </div>
                    </div>
                    <a href="#"></a> <i class="fa-solid fa-ellipsis-v"></i>
                </div>

                <p class="post-text ">It's a Good Day To Start <span>@Code</span>. I love Website Development And UI
                    design <a href="#">#TakeItEasy</a>
                    <a href="#">#Code</a>
                </p>
                <img src="./images/feed-image-3.png" class="post-img" alt="">
                <div class="post-row">
                    <div class="activity-icon">
                        <div><img src="./images/like-blue.png" alt=""> 110</div>
                        <div><img src="./images/comments.png" alt=""> 134</div>
                        <div><img src="./images/share.png" alt=""> 432</div>
                    </div>
                    <div class="post-profile-icon">
                        <img src="./images/profile-pic.jpg" alt=""> <i class="fa-solid fa-caret-down"></i>
                    </div>
                </div>
            </div>
            <div class="post-container">
                <div class="post-row">
                    <div class="user-profile">
                        <img src="./images/profile-pic.jpg" alt="">
                        <div>
                            <p>Shivam</p>
                            <span>July 4 2024,8pm</span>
                        </div>
                    </div>
                    <a href="#"></a> <i class="fa-solid fa-ellipsis-v"></i>
                </div>

                <p class="post-text ">It's a Good Day To Start <span>@Code</span>. I love Website Development And UI
                    design <a href="#">#TakeItEasy</a>
                    <a href="#">#Code</a>
                </p>
                <img src="./images/feed-image-4.png" class="post-img" alt="">
                <div class="post-row">
                    <div class="activity-icon">
                        <div><img src="./images/like-blue.png" alt=""> 120</div>
                        <div><img src="./images/comments.png" alt=""> 160</div>
                        <div><img src="./images/share.png" alt=""> 400</div>
                    </div>
                    <div class="post-profile-icon">
                        <img src="./images/profile-pic.jpg" alt=""> <i class="fa-solid fa-caret-down"></i>
                    </div>
                </div>
            </div>
            <div class="post-container">
                <div class="post-row">
                    <div class="user-profile">
                        <img src="./images/profile-pic.jpg" alt="">
                        <div>
                            <p>Shivam</p>
                            <span>July 4 2024,8pm</span>
                        </div>
                    </div>
                    <a href="#"></a> <i class="fa-solid fa-ellipsis-v"></i>
                </div>

                <p class="post-text ">It's a Good Day To Start <span>@Code</span>. I love Website Development And UI
                    design <a href="#">#TakeItEasy</a>
                    <a href="#">#Code</a>
                </p>
                <img src="./images/feed-image-5.png" class="post-img" alt="">
                <div class="post-row">
                    <div class="activity-icon">
                        <div><img src="./images/like-blue.png" alt=""> 1230</div>
                        <div><img src="./images/comments.png" alt=""> 430</div>
                        <div><img src="./images/share.png" alt=""> 2010</div>
                    </div>
                    <div class="post-profile-icon">
                        <img src="./images/profile-pic.jpg" alt=""> <i class="fa-solid fa-caret-down"></i>
                    </div>
                </div>
            </div>

            <button type="button" class="load-more-btn">Load More</button>

        </div>
        <div class="right-sidebar">
            <!--right-sidebar-->
            <div class="sidebar-title">
                <h4>Events</h4>
                <a href="#">See all</a>
            </div>
            <div class="event">
                <div class="left-event">
                    <h3>18</h3>
                    <span>March</span>
                </div>
                <div class="right-event">
                    <h4>Social Media</h4>
                    <p><i class="fa-solid fa-location-dot"></i>Willson Tech Part</p>
                    <a href="#">More Info</a>
                </div>
            </div>
            <div class="event">
                <div class="left-event">
                    <h3>22</h3>
                    <span>June</span>
                </div>
                <div class="right-event">
                    <h4>Mobile Marketing</h4>
                    <p><i class="fa-solid fa-location-dot"></i>Willson Tech Part </p>
                    <a href="#">More Info</a>
                </div>
            </div>
            <div class="sidebar-title">
                <h4>Advertisement</h4>
                <a href="#">Close</a>
            </div>
            <img src="./images/advertisement.png" alt="" class="sidebar-ads">
            <div class="sidebar-title">
                <h4>Conversation</h4>
                <a href="#">Hide Chat</a>
            </div>

            <div class="online-list">
                <div class="online">
                    <img src="./images/member-1.png" alt="">
                </div>
                <p>Raman</p>
            </div>
            <div class="online-list">
                <div class="online">
                    <img src="./images/member-2.png" alt="">
                </div>
                <p>Haraman</p>
            </div>
            <div class="online-list">
                <div class="online">
                    <img src="./images/member-3.png" alt="">
                </div>
                <p>Daman</p>
            </div>






        </div>
    </div>



    <div class="footer">
        <p>&copy; 2024 Social Media. All Rights Reserved. Managed By Shivam.</p>
    </div>


    <script src="./js/script.js"></script>
</body>

</html>