          </div>
          
          <nav class="span4">
            <?php
              if(isset($billet_upd) && $billet_upd!= null){
                  ?>
                    <h2>Modifier un billet</h2>
                    <form method="post">
                        <input type="hidden" name="action" value="mod" />
                        <label for="titre">Titre : </label><input type="text" name="titre" id="titre" value="<?php echo $billet_upd['titre'];?>" placeholder="Titre du billet" required />
                        <label for="Message">Message : </label><textarea name="Message" id="Message" placeholder="Mon message" required><?php echo $billet_upd['contenu'];?></textarea><br />
                        <label for="date">Date de publication : </label><input type="text" name="date" value="<?php echo $billet_upd['date'];?>" /><br />
                        <label for="tags">Tags : </label><input type="text" name="tags" placeholder="Tags" /><br />
                        <?php
                          echo ($billet_upd['publie'] == 1) ? "<label for='publie'>Publier : </label><input type='checkbox' name='publie' checked/><br />" : "<label for='publie'>Publier : </label><input type='checkbox' name='publie'/><br />";
                        ?>
                        <input type="hidden" name="id" value="<?php echo $_GET['id'];?>" />
                        <input type="submit" value="Modifier" />
                    </form>
                  <?php
              }
              else{
                  ?>
                    <h2>Ajouter un billet</h2>
                    <form method="post">
                        <input type="hidden" name="action" value="add" />
                        <label for="titre">Titre : </label><input type="text" name="titre" id="titre" placeholder="Titre du billet" required />
                        <label for="Message">Message : </label><textarea name="Message" id="Message" placeholder="Mon message" required></textarea><br />
                        <label for="date">Date de publication : </label><input type="date" name="date" /><br />
                        <label for="tags">Tags : </label><input type="text" name="tags" placeholder="Tags" /><br />
                        <label for="publie">Publier : </label><input type="checkbox" name="publie" /><br />
                        <input type="submit" value="Ajouter" />
                    </form>

            <?php
              }
            ?>
            
          </nav>
        </div>
        
      </div>

      <footer>
        
      </footer>

    </div>

  </body>
</html>

