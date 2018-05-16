<form class="mrg10p flx-col dsp-iflex line-h w80 center" name="form" method="post" action="contact.php">
                        <fieldset class="form-style pad-v10">
                            <div class="dsp-flex sp-around">
                                <div class="dsp-flex flx-wrp pad-h20">
                                    <input class="h30p" placeholder="Nom" name="nom" type="text" id="nom" maxlength="20">
                                    <span class="ft-color-org error" id="missNom"> <?php echo (isset($_POST['submit']) && isset($messageError['nom'])) ? $messageError['nom'] : ''; ?></span>
                                        <!-- IMPORTANT : On parle ici d'opérateur terniaire.
                                        Ce qui est écrit dans la balise php, revient à : 
                                        if (isset($_POST['submit']) && isset($messageError['nom']) ) {
                                        $messageError = 'nom';
                                        } else {
                                        ' ' (ne rien afficher);
                                        } -->
                                </div>
                                <div class="dsp-flex flx-wrp pad-h20">
                                    <input class="h30p" placeholder="Prenom" name="prenom" type="text" id="prenom" maxlength="20">
                                    <span class="ft-color-org" id="missPrenom"><?php echo (isset($_POST['submit']) && isset($messageError['prenom'])) ? $messageError['prenom'] : ''; ?></span>
                                </div>
                                <div class="dsp-flex flx-wrp pad-h20">
                                    <input class="h30p" placeholder="Mail" name="mail" type="text" id="mail" maxlength="40" >
                                    <span class="ft-color-org" id="missMail"><?php echo (isset($_POST['submit']) && isset($messageError['mail'])) ? $messageError['mail'] : ''; ?></span>
                                </div>
                            </div>
                        </fieldset>
                        <fieldset class="form-style pad-v10">
                            <div class="dsp-flex sp-around">
                                    <div class="i-block">
                                        <label>Votre niveau sur les balises HTML</label>
                                    </div>
                                    <div class="i-block">
                                        <label for="debutant">débutant</label>
                                        <input name="niveau" type="radio" id="debutant" value="debutant">
                                        <label for="confirme">confirmé</label>
                                        <input name="niveau" type="radio" id="confirme" value="confirme">
                                        <label for="expert">expert</label>
                                        <input name="niveau" type="radio" id="expert" value="expert">
                                        <span class="ft-color-org" id="missNiveau"><?php echo (isset($_POST['submit']) && isset($messageError['niveau'])) ? $messageError['niveau'] : ''; ?></span>
                                    </div>
                            </div>
                        </fieldset> 
                        <fieldset class="form-style pad-v10 center">
                                <select name="balise" id="balise">
                                    <option value="0">Sélectionnez votre balise</option>
                                    <option value="--!">--!</option>
                                    <option value="A">A</option>
                                    <option value="BODY">BODY</option>
                                    <option value="DIV">DIV</option>
                                    <option value="HEAD">HEAD</option>
                                    <option value="IMG">IMG</option>
                                    <option value="LI">LI</option>
                                    <option value="LINK">LINK</option>
                                    <option value="META">META</option>
                                    <option value="P">P</option>
                                    <option value="SELECT">SELECT</option>
                                    <option value="TABLE">TABLE</option>
                                    <option value="TD">TD</option>
                                    <option value="TEXTAREA">TEXTAREA</option>
                                    <option value="TITLE">TITLE</option>
                                    <option value="UL">UL</option>
                                </select>
                                <span class="ft-color-org" id="missBalise"><?php echo (isset($_POST['submit']) && isset($messageError['balise'])) ? $messageError['balise'] : ''; ?></span>
                        </fieldset>
                        <fieldset class="form-style pad-v10 center" >
                            <textarea id="texte" Placeholder="Une question ?" name="textarea" cols="50" rows="5"></textarea>
                            <span class="ft-color-org" id="missTexte"><?php echo (isset($_POST['submit']) && isset($messageError['textarea'])) ? $messageError['textarea'] : ''; ?></span>
                        </fieldset>
                        <div class="center">
                            <label>S'abonner à la newsletter</label>
                            <input name="newsletter" id="news" type="checkbox" value= 'Abonnement'>
                            <span class="ft-color-org" id="missNews"></span>
                        </div>
                        <span class="error"><?php echo (isset($_POST['submit']) && isset($messageError['newsletter'])) ? $messageError['newsletter'] : ''; ?></span>
    
                        
                        <fieldset  class="form-style pad-v10 center">
                            <input type="submit" name="submit" value="Valider" id="bouton">
                        </fieldset>
                    </form>