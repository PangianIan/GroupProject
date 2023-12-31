
<!DOCTYPE html>
<link rel="stylesheet" href="GroupProject.css" media="(min-width: 769px)">
<link rel="stylesheet" href="GroupProjectTablet.css" media="(min-width: 481px) and (max-width: 768px)">
<link rel="stylesheet" href="GroupProjectPhone.css" media="(max-width: 480px)">
<html lang="en">
    <?php
        session_start();
    ?>
    <main>
        <head>
            <script>
                //Make sure the DOM is done with its tasks
                document.addEventListener('DOMContentLoaded', function(){
                    //make the comment form for the listener
                    const commentForm = document.querySelector("#CommentSubmission");
                    //react to a submission
                    commentForm.addEventListener("submit", function(e){
                        //find the submission button and disable it for now
                        const submitButton = document.getElementById("SubmitButton");
                        submitButton.disabled = true;
                        //find the name of the composer and verify it contains values
                        let name = document.querySelector("#compName").value;
                        if(name == "" || name == null){
                            //ask for a proper string and stop the submission
                            alert("Please enter the composer's name");
                            console.log("Please enter the composer's name");
                            e.preventDefault();
                            //allow more submissions and end the function
                            submitButton.disabled = false;
                            return;
                        }
                        //determine if a comment was added and warn them if not
                        //no information is acceptable, however, as just submitting a name to research and add
                        let com = document.querySelector("#compInfo").value;
                        if(com == "" || com == null){
                            alert("Composer name was submitted, but no information was given.");
                        }
                        //create an object of the form and assign that value to a JSON
                        const obj = {composerName: name, commentData: com};
                        const commentJSON = JSON.stringify(obj);
                        console.log(commentJSON);
                        //assign the JSON to local storage
                        localStorage.setItem("ComposerJSON", commentJSON);
                        //enable the submit button
                        submitButton.disabled = false;
                    });
                    
                });
            </script>
            <title>Home - Videogame Music Composers</title>
            <nav class="menu">
                <li>
                    <a href="HomePage.html"><img src="https://static.vecteezy.com/system/resources/previews/000/366/438/original/home-vector-icon.jpg"
                    alt="Home Page" width="20" height="20"></a>
                </li>
                <li>
                    <a href="KojiKondo.html"><img src="https://th.bing.com/th/id/R.1cbab5c2bbbf6e6a73aa78fb19ef2e94?rik=rcNVv2PvuNRUwQ&riu=http%3a%2f%2fvignette2.wikia.nocookie.net%2fmario%2fimages%2f0%2f02%2fStarman.png%2frevision%2flatest%3fcb%3d20110731011808&ehk=NeHdiwccrE4xOSedcU2Lb6Fi2LjvvBWLbskFOel%2b41I%3d&risl=&pid=ImgRaw&r=0"
                        width="20" height="20">Koji Kondo</a>
                </li>
                <li>
                <a href="NobuoUematsu.html"><img src="https://vignette.wikia.nocookie.net/finalfantasy/images/1/17/FFIII_Model_-_Fire_Crystal.png/revision/latest?cb=20150312024345"
                    width="10" height="20">Nobuo Uematsu</a>
                </li>
                <li>
                    <a href="KoichiSugiyama.html"><img src="https://vignette.wikia.nocookie.net/allspecies/images/9/9d/Slime_(Dragon_Quest).png/revision/latest?cb=20150425145237"
                        width="20" height="20">Koichi Sugiyama</a>
                </li>
                <li>
                    <a href="MasatoNakamura.html"><img src="https://down.imgspng.com/download/2110/sonic_hedgehog_PNG37.png"
                        width="20" height="20">Masato Nakamura</a>
                </li>
                <li>
                    <a href="YokoShimomura.html"><img src="https://th.bing.com/th/id/OIP.A7WLj16pgWyhpRjjx4htoQHaJI?pid=ImgDet&rs=1"
                        width="20" height="20">Yoko Shimomura</a>
                </li>
                <li>
                    <a href="MichiruYamane.html"><img src="https://th.bing.com/th/id/R.2d1a693e81a8be515a6c1c9887d908cf?rik=DU9P6DGElCuVdw&riu=http%3a%2f%2forig11.deviantart.net%2f6153%2ff%2f2016%2f011%2f5%2f7%2fcastlevania___symphony_of_the_night_icon_by_andonovmarko-d9nl7qz.png&ehk=3Ye3fMSMoSTVmisOlhxznkqzuYjy5m85oP5JgTv9GrE%3d&risl=&pid=ImgRaw&r=0"
                        width="20" height="20">Michiru Yamane</a>
                </li>
                <li>
                    <a href="JeremySoule.html"><img src="https://logos-world.net/wp-content/uploads/2020/05/Skyrim-Logo.png"
                        width="30" height="15">Jeremy Soule</a>
                </li>
                <li>
                    <a href="GrantKirkhope.html"><img src="https://vignette.wikia.nocookie.net/banjokazooie/images/c/c3/Jiggy2.png/revision/latest?cb=20190303134823&path-prefix=es"
                        width="20" height="20">Grant Kirkhope</a>
                </li>
                <li>
                    <a href="TobyFox.html"><img src="https://vignette.wikia.nocookie.net/subnautica/images/2/28/Annoying_Dog_Sleeping.gif/revision/latest?cb=20161228022648"
                        width="20" height="10">Toby Fox</a>
                </li>
            </nav>
        </head>
        <body>
            <?php 
                if($_SESSION['loggedIn'] == true) {
            ?>
            <h1>LOGGED IN</h1>
            <?php 
            } 
            ?>
            <article>
                <section>
                    <div>
                        <h1>
                            Video Game Music Composers            
                        </h1>
                        <p>
                            One of the most prominent features of videogames can often be the music behind it. From creating a good general
                            atmosphere to setting up for dramatic moments and final challenges, music has a major role in crafting
                            the experience of players of a game. With this, the job of composer is very important. 
                        </p>
                    </div>
                </section>
                <section>
                    <img src="https://www.kindpng.com/picc/m/112-1122861_pacman-ghost-pac-man-ghosts-video-game-pac.png" alt="Pacman Ghost"
                    id="PacmanGhosts">
                        <div>
                        <p>
                            If you have any ideas for other video game music composers, please submit them and some of their works.
                            In addition, let us know if there are any changes or inaccuracies in our information so that we may correct them.
                            (Please include the name of the composer to add or change the information of for ease of fixing it)
                        </p>
                    </div>
                    <h2>Register</h2>
                    <form action="http://localhost:8888/register.php" method="post">
                        <label for="username">
                            Username
                        </label>
                        <input type="text" id="username" name="username" required><br>
                        <label for="password">Password</label><br>
                        <input type="text" id="password" name="password" required><br>
                        <input type="submit" value="Login" id="SubmitButtonLogin">
                    </form>
                    <?php
                        if($_SESSION['loggedIn'] == false) {
                    ?>
                        <h2>Login</h2>
                        <form id ="login" action="http://localhost:8888/login.php" method="post">
                            <label for="username">
                                Username
                            </label>
                            <input type="text" id="username" name="username"><br>
                            <label for="password">Password</label><br>
                            <input type="text" id="password" name="password"><br>
                            <input type="submit" value="Submit" id="SubmitButtonRegister">
                        </form>
                    <?php
                        }
                    ?>
                    <?php
                        if($_SESSION['loggedIn'] == true) {
                    ?>
                        <a href="logout.php">LOG OUT</a>
                        <a href="store.php">STORE</a>
                    <?php
                        }
                    ?>
                    <form id ="CommentSubmission">
                        <label for="compName">
                            Composer's Full Name
                        </label>
                        <input type="text" id="compName" name="compName" required><br>
                        <label for="compInfo">Information about inaccuracies or additional info</label><br>
                        <textarea id="compInfo" name="compInfo"></textarea><br>
                        <input type="submit" value="Submit" id="SubmitButton">
                    </form>
                </section>
            </article>
        </body>
        <footer>
            <div>
                 <h2>
                    Image Sources
                </h2>
                <p>
                    <ul>
                        <li>
                            Mario star from <a href="https://th.bing.com/th/id/R.1cbab5c2bbbf6e6a73aa78fb19ef2e94?rik=rcNVv2PvuNRUwQ&riu=http%3a%2f%2fvignette2.wikia.nocookie.net%2fmario%2fimages%2f0%2f02%2fStarman.png%2frevision%2flatest%3fcb%3d20110731011808&ehk=NeHdiwccrE4xOSedcU2Lb6Fi2LjvvBWLbskFOel%2b41I%3d&risl=&pid=ImgRaw&r=0">
                                https://th.bing.com/th/id/R.1cbab5c2bbbf6e6a73aa78fb19ef2e94?rik=rcNVv2PvuNRUwQ&riu=http%3a%2f%2fvignette2.wikia.nocookie.net%2fmario%2fimages%2f0%2f02%2fStarman.png%2frevision%2flatest%3fcb%3d20110731011808&ehk=NeHdiwccrE4xOSedcU2Lb6Fi2LjvvBWLbskFOel%2b41I%3d&risl=&pid=ImgRaw&r=0
                            </a>
                        </li>
                        <li>
                            Final Fantasy Crystal from <a href="https://vignette.wikia.nocookie.net/finalfantasy/images/1/17/FFIII_Model_-_Fire_Crystal.png/revision/latest?cb=20150312024345">
                                https://vignette.wikia.nocookie.net/finalfantasy/images/1/17/FFIII_Model_-_Fire_Crystal.png/revision/latest?cb=20150312024345
                            </a>
                        </li>
                        <li>
                            Dragon Quest slime from <a href="https://vignette.wikia.nocookie.net/allspecies/images/9/9d/Slime_(Dragon_Quest).png/revision/latest?cb=20150425145237">
                                https://vignette.wikia.nocookie.net/allspecies/images/9/9d/Slime_(Dragon_Quest).png/revision/latest?cb=20150425145237
                            </a>
                        </li>
                        <li>
                            Sonic ring from <a href="https://down.imgspng.com/download/2110/sonic_hedgehog_PNG37.png">https://down.imgspng.com/download/2110/sonic_hedgehog_PNG37.png</a>
                        </li>
                        <li>
                            Kingdom Hearts logo from <a href="https://th.bing.com/th/id/OIP.A7WLj16pgWyhpRjjx4htoQHaJI?pid=ImgDet&rs=1">
                                https://th.bing.com/th/id/OIP.A7WLj16pgWyhpRjjx4htoQHaJI?pid=ImgDet&rs=1
                            </a>
                        </li>
                        <li>
                            Symphony of the Night logo from <a href="https://th.bing.com/th/id/R.2d1a693e81a8be515a6c1c9887d908cf?rik=DU9P6DGElCuVdw&riu=http%3a%2f%2forig11.deviantart.net%2f6153%2ff%2f2016%2f011%2f5%2f7%2fcastlevania___symphony_of_the_night_icon_by_andonovmarko-d9nl7qz.png&ehk=3Ye3fMSMoSTVmisOlhxznkqzuYjy5m85oP5JgTv9GrE%3d&risl=&pid=ImgRaw&r=0">
                                https://th.bing.com/th/id/R.2d1a693e81a8be515a6c1c9887d908cf?rik=DU9P6DGElCuVdw&riu=http%3a%2f%2forig11.deviantart.net%2f6153%2ff%2f2016%2f011%2f5%2f7%2fcastlevania___symphony_of_the_night_icon_by_andonovmarko-d9nl7qz.png&ehk=3Ye3fMSMoSTVmisOlhxznkqzuYjy5m85oP5JgTv9GrE%3d&risl=&pid=ImgRaw&r=0
                            </a>
                        </li>
                        <li>
                            Skyrim logo from <a href="https://logos-world.net/wp-content/uploads/2020/05/Skyrim-Logo.png">https://logos-world.net/wp-content/uploads/2020/05/Skyrim-Logo.png</a>
                        </li>
                        <li>
                            Jiggy from <a href="https://vignette.wikia.nocookie.net/banjokazooie/images/c/c3/Jiggy2.png/revision/latest?cb=20190303134823&path-prefix=es">
                                https://vignette.wikia.nocookie.net/banjokazooie/images/c/c3/Jiggy2.png/revision/latest?cb=20190303134823&path-prefix=es
                            </a>
                        </li>
                        <li>
                            Annoying Dog from <a href="https://vignette.wikia.nocookie.net/subnautica/images/2/28/Annoying_Dog_Sleeping.gif/revision/latest?cb=20161228022648">
                                https://vignette.wikia.nocookie.net/subnautica/images/2/28/Annoying_Dog_Sleeping.gif/revision/latest?cb=20161228022648
                            </a>
                        </li>
                    </ul>
                </p>
            </div>
        </footer>
    </main>

</html>