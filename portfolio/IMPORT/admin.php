         <main>
                <h1>Section Administration</h1> 
                <!-- ##################################### -->

                <!-- Trigger/Open The Modal -->
                <button id="myBtn">Login</button>

                <!-- The Modal -->
                <div id="myModal" class="modal">
                    
                    <!-- Modal content -->
                    <div class="modal-content">
                        <span class="close">&times;</span>
                        <form action="/action_page.php" method="post">
                            <div class="imgcontainer">
                            <svg id="Layer_1" style="enable-background:new 0 0 128 128;" version="1.1" viewBox="0 0 128 128" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g><path d="M30,49c0,18.7,15.3,34,34,34s34-15.3,34-34S82.7,15,64,15S30,30.3,30,49z M90,49c0,14.3-11.7,26-26,26S38,63.3,38,49   s11.7-26,26-26S90,34.7,90,49z"/><path d="M24.4,119.4C35,108.8,49,103,64,103s29,5.8,39.6,16.4l5.7-5.7C97.2,101.7,81.1,95,64,95s-33.2,6.7-45.3,18.7L24.4,119.4z"/></g></svg>
                            </div>
                            <div class="container">
                                <label for="admin_name"><b>Identifiant :</label>
                                <input type="text" id="admin_name" placeholder="Entrez votre identifiant" name="Admin_name" required>
                                <label for="psw">Mot de passe</b></label>
                                <input type="password" placeholder="Entrez votre mot de passe" id="psw" name="psw" required>
                                <button type="submit">Connexion</button>
                                <label><input type="checkbox" checked="checked" name="remember"> Se souvenir de moi
                                </label>
                            </div>
                            <div class="container" style="background-color:#f1f1f1">
                                <button type="button" class="cancelbtn">Annuler</button>
                                <span class="psw"><a href="#">Mot de passe</a> oublié ?</span>
                            </div>
                        </form>
                    </div>
                </div>
            </main>
        </div>

