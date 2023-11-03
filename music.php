<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Online musics</title>
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="css/music.css">
    
</head>
<!-- <style>
 .songside::before{
    background: url('s-img/') ;
}
</style> -->
<body>

    <?php $page = 'music';
    include 'sidebar.php' ?>
    <div class="main">
    
        <div class="menuside">
            <h1>playlist</h1>
            <div class="playlist">
                <h4 class="active"><span></span><i class='bx bxs-music'></i>playlist</h4>
                <h4 class="active"><span></span><i class='bx bxs-music'></i>Last Listening</h4>
                <h4 class="active"><span></span><i class='bx bxs-music'></i>Recommended</h4>
            </div>
            <div class="menusong">
                <li class="songItems">
                    <span>01</span>
                    <img src="s-img/1.jpg" alt="Alan">
                    <h5>
                        On My Way
                        <div class="subtitle">Alan Walker</div>
                    </h5>
                        <i class='bx playlistplay bx-play-circle' id="1"></i>
                    
                </li>
                <li class="songItems">
                    <span>02</span>
                    <img src="s-img/3.jpg" alt="Dilber">
                    <h5>
                        Dilber
                        <div class="subtitle">Satyameva jayate</div>
                    </h5>
                        <i class='bx playlistplay bx-play-circle' id="2"></i>
                    
                </li>
                <li class="songItems">
                    <span>03</span>
                    <img src="s-img/arijit.jpg" alt="Arijit">
                    <h5>
                        On My Way
                        <div class="subtitle">Alan Walker</div>
                    </h5>
                        <i class='bx playlistplay bx-play-circle' id="3"></i>
                    
                </li>
                <li class="songItems">
                    <span>04</span>
                    <img src="s-img/1.jpg" alt="Alan">
                    <h5>
                        On My Way
                        <div class="subtitle">Alan Walker</div>
                    </h5>
                        <i class='bx playlistplay bx-play-circle' id="4"></i>
                    
                </li>
                <li class="songItems">
                    <span>05</span>
                    <img src="s-img/1.jpg" alt="Alan">
                    <h5>
                        On My Way
                        <div class="subtitle">Alan Walker</div>
                        </h5>
                        <i class='bx playlistplay bx-play-circle' id="5"></i>
                    
                </li>
                <li class="songItems">
                    <span>06</span>
                    <img src="s-img/1.jpg" alt="Alan">
                    <h5>
                        On My Way
                        <div class="subtitle">Alan Walker</div>
                        </h5>
                        <i class='bx playlistplay bx-play-circle' id="6"></i>
                    
                </li>
                <li class="songItems">
                    <span>07</span>
                    <img src="s-img/1.jpg" alt="Alan">
                    <h5>
                        On My Way
                        <div class="subtitle">Alan Walker</div>
                       </h5> 
                       <i class='bx playlistplay bx-play-circle' id="7"></i>
                    
                </li>

            </div>
        </div>
        <div class="songside">
            
            <nav>
                <ul>
                    <li>Discover<span></span></li>
                    <li>My Library</li>
                    <li>Radio</li>
                </ul>
                <div class="search">
                    <i class='bx bx-search'></i>
                    <input type="text" placeholder="Search Music....">
                </div>
                <div class="user">
                    <img src="photos/img12.jpg" alt="User" title="Krishna">
                </div>
            </nav>
            <div class="content">
                <h1>Alan Walker-Fade</h1>
                <p>
                    You were the shadow to my light Did you feel us another start you Walker-Fade
                    <br>
                    Away afraid our of sight wanna see us Alive 
                </p>
                <div class="buttons">
                    <button>PLAY</button>
                    <button>FOLLOW</button>
                </div>
            </div>
            <div class="popular_song">
                <div class="h4">
                    <h4>Popular Songs</h4>
                    <div class="btn">
                        <i id="left-scroll" class='bx bx-left-arrow-alt'></i>
                        <i id="right-scroll" class='bx bx-right-arrow-alt' ></i>
                    </div>
                </div>
                <div class="pop_song">
                    <li class="songItems">
                        <div class="imgplay">
                            <img src="s-img/agar tum saath ho.jpg" alt="Tamashaa">
                            <i class='bx playlistplay bx-play-circle' id="8"></i>
                        </div>
                        <h5>Agar Tum Sath Ho
                            <br>
                            <div class="subtitle">Tamashaa</div>
                       </h5> 
                    </li>
                    <li class="songItems">
                        <div class="imgplay">
                            <img src="s-img/3.jpg" alt="Alan">
                            <i class='bx playlistplay bx-play-circle' id="9"></i>
                        </div>
                        <h5>Dilber
                            <br>
                            <div class="subtitle">satyameva jayate</div>
                       </h5> 
                    </li>
                    <li class="songItems">
                        <div class="imgplay">
                            <img src="s-img/duniya.jpg" alt="Luka Chuppi">
                            <i class='bx playlistplay bx-play-circle' id="10"></i>
                        </div>
                        <h5>Duniya
                            <br>
                            <div class="subtitle">Luka Chuppi</div>
                       </h5> 
                    </li>
                    <li class="songItems">
                        <div class="imgplay">
                            <img src="s-img/lagdi lahore di.jpg" alt="Street Dancer 3D">
                            <i class='bx playlistplay bx-play-circle' id="11"></i>
                        </div>
                        <h5>Lagdi Lahore Di
                            <br>
                            <div class="subtitle">Street Dancer 3D</div>
                       </h5> 
                    </li>
                    <li class="songItems">
                        <div class="imgplay">
                            <img src="s-img/cheez badi.jpg" alt="Machine">
                            <i class='bx playlistplay bx-play-circle' id="12"></i>
                        </div>
                        <h5>Cheez Badi
                            <br>
                            <div class="subtitle">Machine</div>
                       </h5> 
                    </li>
                    <li class="songItems">
                        <div class="imgplay">
                            <img src="s-img/raat bhar.jpg" alt="Heropanti">
                            <i class='bx playlistplay bx-play-circle' id="13"></i>
                        </div>
                        <h5>Raat Bhar
                            <br>
                            <div class="subtitle">Heropanti</div>
                       </h5> 
                    </li>
                    <li class="songItems">
                        <div class="imgplay">
                            <img src="s-img/sawan aya hai.jpg" alt="Craeture 3D">
                            <i class='bx playlistplay bx-play-circle' id="14"></i>
                        </div>
                        <h5>Sawan Aaya Hai
                            <br>
                            <div class="subtitle">Creature 3D</div>
                       </h5> 
                    </li>
                    <li class="songItems">
                        <div class="imgplay">
                            <img src="s-img/dheere dheere.jpg" alt="Yo Yo Honey Singh">
                            <i class='bx playlistplay bx-play-circle' id="15"></i>
                        </div>
                        <h5>Dheere Dheere
                            <br>
                            <div class="subtitle">Yo Yo Honey Singh</div>
                       </h5> 
                    </li>
                    <li class="songItems">
                        <div class="imgplay">
                            <img src="s-img/hangover.jpg" alt="Kick">
                            <i class='bx playlistplay bx-play-circle' id="16"></i>
                        </div>
                        <h5>Hangover
                            <br>
                            <div class="subtitle">Kick</div>
                       </h5> 
                    </li>
                </div>
            </div>
            <div class="popular_artist">
                <div class="h4">
                    <h4>Popular Artists</h4>
                    <div class="btn">
                        <i id="left-scroll" class='bx bx-left-arrow-alt'></i>
                        <i id="right-scroll" class='bx bx-right-arrow-alt' ></i>
                    </div>
                </div>
                <div class="item">
                    <li>
                        <img src="s-img/arijit.jpg" alt="ArijitSingh" title="Arijit Singh">
                    </li>
                    <li>
                        <img src="s-img/alan.jpg" alt="Alan" title="Alan Walker">
                    </li>
                    <li>
                        <img src="s-img/guru.jpg" alt="Guru Randhawa" title="Guru Randhawa">
                    </li>
                    <li>
                        <img src="s-img/honey.jpeg" alt="Honey Singh" title="Honey Singh">
                    </li>
                    <li>
                        <img src="s-img/neha.jpg" alt="Neha Kakkar" title="Neha Kakkar">
                    </li>
                    <li>
                        <img src="s-img/jubin.jpg" alt="Jubin Nuthiyal" title="Jubin Nuthiyal">
                    </li>
                    <li>
                        <img src="s-img/arijit.jpg" alt="ArijitSingh" title="Arijit Singh">
                    </li>
                    <li>
                        <img src="s-img/arijit.jpg" alt="ArijitSingh" title="Arijit Singh">
                    </li>
                    <li>
                        <img src="s-img/arijit.jpg" alt="ArijitSingh" title="Arijit Singh">
                    </li>
                    <li>
                        <img src="s-img/arijit.jpg" alt="ArijitSingh" title="Arijit Singh">
                    </li>
                    <li>
                        <img src="s-img/arijit.jpg" alt="ArijitSingh" title="Arijit Singh">
                    </li>
                    <li>
                        <img src="s-img/arijit.jpg" alt="ArijitSingh" title="Arijit Singh">
                    </li>
                    <li>
                        <img src="s-img/arijit.jpg" alt="ArijitSingh" title="Arijit Singh">
                    </li>
                    <!-- change all img                    -->
                </div>
            </div>
        </div>

        <div class="masterplay">
            <div class="wave">
                <div class="wave1"></div>
                <div class="wave1"></div>
                <div class="wave1"></div>
            </div>
            <img src="s-img/1.jpg" alt="Alan">
            <h5>On My Way<br>
                <div class="subtitle">Alan Walker</div>
            </h5>
            <div class="icon">
                <i class='bx bx-skip-previous' id="back"></i>
                <i class='bx bx-play' id="mPlay"></i>
                <i class='bx bx-skip-next' id="next"></i>
            </div>
            <span id="currentstart">0:00</span>
            <div class="bar">
                <input type="range" id="seek" min="0" value="0" max="100">
                <div class="bar2" id="bar2"></div>
                <div class="dot"></div>
            </div>
            <span id="currentend">0:00</span>
            <div class="vol">
                <i class='bx bxs-volume-full' ></i>
                <input type="range" id="vol" min="0" value="30" max="100">
                <div class="vol_bar"></div>
                <div class="dot" id="vol_dot"></div>
            </div>
        </div>
    </div>
    <script src="js/music.js"></script>
    <script type="text/javascript">
        // This function is called from the pop-up menus to transfer to
        // a different page. Ignore if the value returned is a null string:
        function goPage (newURL) {

        // if url is empty, skip the menu dividers and reset the menu selection to default
            if (newURL != "") {
      
                // if url is "-", it is this page -- reset the menu:
                if (newURL == "-" ) {
                resetMenu();            
                } 
                // else, send page to designated URL            
                else {  
                    document.location.href = newURL;
                }
            }
        }
        // resets the menu selection upon entry to this page:
        function resetMenu() {
            document.gomenu.selector.selectedIndex = 2;
        }
    </script>  
</body>
</html>