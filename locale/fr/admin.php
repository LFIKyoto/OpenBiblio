<?php
#****************************************************************************
#*  Common translation text shared among multiple pages
#****************************************************************************
$trans["adminSubmit"]              = "\$text = 'Valider';";
$trans["adminCancel"]              = "\$text = 'Annuler';";
$trans["adminDelete"]              = "\$text = 'Supprimer';";
$trans["adminUpdate"]              = "\$text = 'Mise à jour';";
$trans["adminFootnote"]            = "\$text = 'Les champs comportant un %symbol% sont obligatoires.';";

#****************************************************************************
#*  Translation text for page index.php
#****************************************************************************
$trans["indexHdr"]                 = "\$text = 'Administration - Configuration du programme';";
$trans["indexDesc"]                = "\$text = 'Utilisez cette section afin de gérer votre équipe<br>la configuration de la BCD<br>modifier la classification des membres<br>modifier la classification des ouvrages du catalogue<br>modifier la gestion des historiques de votre BCD.';";

#****************************************************************************
#*  Translation text for page collections*.php
#****************************************************************************
$trans["adminCollections_delReturn"]                 = "\$text = 'Retour à la liste des ouvrages';";
$trans["adminCollections_delStart"]                 = "\$text = 'Collection, ';";

#****************************************************************************
#*  Translation text for page collections_del.php
#****************************************************************************
$trans["adminCollections_delEnd"]                 = "\$text = ', a été supprimé.';";

#****************************************************************************
#*  Translation text for page collections_del_confirm.php
#****************************************************************************
$trans["adminCollections_del_confirmText"]                 = "\$text = 'Êtes vous sûr de vouloir supprimer la collection, ';";

#****************************************************************************
#*  Translation text for page collections_edit.php
#****************************************************************************
$trans["adminCollections_editEnd"]                 = "\$text = ', a été mis à jour.';";

#****************************************************************************
#*  Translation text for page collections_edit_form.php
#****************************************************************************
$trans["adminCollections_edit_formEditcollection"]                 = "\$text = 'Editer la collection:';";
$trans["adminCollections_edit_formDescription"]                 = "\$text = 'Description:';";
$trans["adminCollections_edit_formDaysdueback"]                 = "\$text = 'Jour de retour:';";
$trans["adminCollections_edit_formDailyLateFee"]                 = "\$text = 'Penalité de retard par jour:';";
$trans["adminCollections_edit_formNote"]                 = "\$text = '*Note:';";
$trans["adminCollections_edit_formNoteText"]                 = "\$text = 'La valeur zéro jour permets de rendre la collection entièrement indisponible pour l\'emprunt.';";

#****************************************************************************
#*  Translation text for page collections_list.php
#****************************************************************************
$trans["adminCollections_listAddNewCollection"]                 = "\$text = 'Ajouter une nouvelle collection';";
$trans["adminCollections_listCollections"]                 = "\$text = 'Collections:';";
$trans["adminCollections_listFunction"]                 = "\$text = 'Option';";
$trans["adminCollections_listDescription"]                 = "\$text = 'Description';";
$trans["adminCollections_listDaysdueback"]                 = "\$text = ' Délai Jours<br>à rendre';";
$trans["adminCollections_listDailylatefee"]                 = "\$text = 'par jour<br>penalité de retard';";
$trans["adminCollections_listBibliographycount"]                 = "\$text = 'Ouvrages<br>Nombre';";
$trans["adminCollections_listEdit"]                 = "\$text = 'Editer';";
$trans["adminCollections_listDel"]                 = "\$text = 'Supprimer';";
$trans["adminCollections_ListNote"]                 = "\$text = '*Note:';";
$trans["adminCollections_ListNoteText"]                 = "\$text = 'L\'option supprimer est seulement disponible pour les collections dont le nombre d\'ouvrage est à zéro.<br>Si vous désirez supprimer une collection avec un nombre d\'ouvrage supérieur à zéro vous devrez en premier lieu changer le type de support des ouvrages.';";

#****************************************************************************
#*  Translation text for page collections_new.php
#****************************************************************************
$trans["adminCollections_newAdded"]                 = "\$text = ', a été ajouté.';";

#****************************************************************************
#*  Translation text for page collections_new_form.php
#****************************************************************************
$trans["adminCollections_new_formAddnewcollection"]                 = "\$text = 'Ajouter une nouvelle collection:';";
$trans["adminCollections_new_formDescription"]                 = "\$text = 'Description:';";
$trans["adminCollections_new_formDaysdueback"]                 = "\$text = 'Jour de retour de l\'emprunt:';";
$trans["adminCollections_new_formDailylatefee"]                 = "\$text = 'Pénalité de retard par jour:';";
$trans["adminCollections_new_formNote"]                 = "\$text = '*Note:';";
$trans["adminCollections_new_formNoteText"]                 = "\$text = 'La valeur zéro jour permets de rendre la collection entièrement indisponible à l\'emprunt.';";

#****************************************************************************
#*  Translation text for page materials_del.php
#****************************************************************************
$trans["admin_materials_delMaterialType"]                 = "\$text = 'Type de support, ';";
$trans["admin_materials_delMaterialdeleted"]                 = "\$text = ', a été supprimé.';";
$trans["admin_materials_Return"]                 = "\$text = 'Retourner à la liste des catégories de support';";

#****************************************************************************
#*  Translation text for page materials_del_form.php
#****************************************************************************
$trans["admin_materials_delAreyousure"]                 = "\$text = 'Etes vous sûr de vouloir supprimer cette categorie de support, ';";

#****************************************************************************
#*  Translation text for page materials_edit_form.php
#****************************************************************************
$trans["admin_materials_delEditmaterialtype"]                 = "\$text = 'Editer la categorie de support:';";
$trans["admin_materials_delDescription"]                 = "\$text = 'Description:';";
$trans["admin_materials_delunlimited"]                 = "\$text = '(mettre à 0 pour sans limite)';";
$trans["admin_materials_delImagefile"]                 = "\$text = 'Fichier image:';";
$trans["admin_materials_delNote"]                 = "\$text = '*Note:';";
$trans["admin_materials_delNoteText"]                 = "\$text = 'Le fichier image doit être situé dans le répertoire bcdVersionNr/images.';";

#****************************************************************************
#*  Translation text for page materials_edit.php
#****************************************************************************
$trans["admin_materials_editEnd"]                 = "\$text = ', a été mis à jour.';";

#****************************************************************************
#*  Translation text for page materials_list.php
#****************************************************************************
$trans["admin_materials_listAddmaterialtypes"]                 = "\$text = 'Ajouter une nouvelle categorie de support';";
$trans["admin_materials_listMaterialtypes"]                 = "\$text = 'Categorie de support:';";
$trans["admin_materials_listFunction"]                 = "\$text = 'Option';";
$trans["admin_materials_listDescription"]                 = "\$text = 'Description';";
$trans["admin_materials_listLimits"]                 = "\$text = 'Limites';";
$trans["admin_materials_listCheckoutlimit"]                 = "\$text = 'Emprunts';";
$trans["admin_materials_listRenewallimit"]                 = "\$text = 'Renouvellement';";
$trans["admin_materials_listImageFile"]                 = "\$text = 'Image<br>Fichier';";
$trans["admin_materials_listBibcount"]                 = "\$text = 'Ouvrage<br>nombre';";
$trans["admin_materials_listEdit"]                 = "\$text = 'editer';";
$trans["admin_materials_listDel"]                 = "\$text = 'suppr';";
$trans["admin_materials_listNote"]                 = "\$text = '*Note:';";
$trans["admin_materials_listNoteText"]                 = "\$text = 'L\'option supprimer est seulement disponible pour les categories de support ne comportant pas d\'ouvrage.Changer la categorie des ouvrages pour supprimer la categorie du suupport.';";

#****************************************************************************
#*  Translation text for page materials_new.php
#****************************************************************************
$trans["admin_materials_listNewadded"]                 = "\$text = ', a été ajouté.';";

#****************************************************************************
#*  Translation text for page materials_new_form.php
#****************************************************************************
$trans["admin_materials_new_formNoteText"]                 = "\$text = 'Le fichier image doit être situé dans le répertoire bcd images.';";

#****************************************************************************
#*  Translation text for page noauth.php
#****************************************************************************
$trans["admin_noauth"]                 = "\$text = 'Vous n\'êtes pas autorisé à utiliser la fonction administration.';";

#****************************************************************************
#*  Translation text for page settings_edit.php
#****************************************************************************

#****************************************************************************
#*  Translation text for page settings_edit_form.php
#****************************************************************************
$trans["admin_settingsUpdated"]                 = "\$text = 'Les données ont été mises à jour.';";
$trans["admin_settingsEditsettings"]                 = "\$text = 'Editer la configuration de la BCD:';";
$trans["admin_settingsLibName"]                 = "\$text = 'Nom de la BCD:';";
$trans["admin_settingsLibimageurl"]                 = "\$text = 'Liens vers l\'icône de la BCD:';";
$trans["admin_settingsOnlyshowimginheader"]                 = "\$text = 'Montrer seulement l\'image das l\'en-tête:';";
$trans["admin_settingsLibhours"]                 = "\$text = 'Heures d\'ouverture de la BCD:';";
$trans["admin_settingsLibphone"]                 = "\$text = 'Téléphone:';";
$trans["admin_settingsLibURL"]                 = "\$text = 'Adresse Intranet de la BCD:';";
$trans["admin_settingsOPACURL"]                 = "\$text = 'Adresse publique du catalogue en ligne:';";
$trans["admin_settingsSessionTimeout"]                 = "\$text = 'Délais d\'expiration de la session:';";
$trans["admin_settingsMinutes"]                 = "\$text = 'minutes';";
$trans["admin_settingsSearchResults"]                 = "\$text = 'Résultat de la recherche:';";
$trans["admin_settingsItemsperpage"]                 = "\$text = 'Nombre d\'exemplaire par pages';";
$trans["admin_settingsPurgebibhistory"]                 = "\$text = 'Purger l\'historique de la bibliograhie après:';";
$trans["admin_settingsmonths"]                 = "\$text = 'mois';";
$trans["admin_settingsBlockCheckouts"]                 = "\$text = 'Bloquer les emprunts quand des pénalités de retard sont dues:';";
$trans["admin_settingsLocale"]                 = "\$text = 'Langue:';";
$trans["admin_settingsHTMLChar"]                 = "\$text = 'HTML Charset:';";
$trans["admin_settingsHTMLTagLangAttr"]                 = "\$text = 'HTML Tag Lang Attribute:';";

#****************************************************************************
#*  Translation text for all staff pages
#****************************************************************************
$trans["adminStaff_Staffmember"]                 = "\$text = 'Collège des enseignants,';";
$trans["adminStaff_Return"]                 = "\$text = 'Retourner à la liste des enseignants';";
$trans["adminStaff_Yes"]                 = "\$text = 'Oui';";
$trans["adminStaff_No"]                 = "\$text = 'Non';";


#****************************************************************************
#*  Translation text for page staff_del.php
#****************************************************************************
$trans["adminStaff_delDeleted"]                 = "\$text = ', a été supprimé.';";

#****************************************************************************
#*  Translation text for page staff_delete_confirm.php
#****************************************************************************
$trans["adminStaff_del_confirmConfirmText"]                 = "\$text = 'Êtes vous sûr de vouloir supprimer ce membre du collège des enseignants, ';";

#****************************************************************************
#*  Translation text for page staff_edit.php
#****************************************************************************
$trans["adminStaff_editUpdated"]                 = "\$text = ', a été mise à jour.';";

#****************************************************************************
#*  Translation text for page staff_edit_form.php
#****************************************************************************
$trans["adminStaff_edit_formHeader"]                 = "\$text = 'Editer la liste des enseignants:';";
$trans["adminStaff_edit_formLastname"]                 = "\$text = 'Prénom:';";
$trans["adminStaff_edit_formFirstname"]                 = "\$text = 'Nom de famille:';";
$trans["adminStaff_edit_formLogin"]                 = "\$text = 'Nom d\'utilisateur:';";
$trans["adminStaff_edit_formAuth"]                 = "\$text = 'Autorisation:';";
$trans["adminStaff_edit_formCirc"]                 = "\$text = 'Emprunts';";
$trans["adminStaff_edit_formUpdatemember"]                 = "\$text = 'Mis à jour';";
$trans["adminStaff_edit_formCatalog"]                 = "\$text = 'Catalogue';";
$trans["adminStaff_edit_formAdmin"]                 = "\$text = 'Administration et configuration';";
$trans["adminStaff_edit_formReports"]                 = "\$text = 'Historiques';";
$trans["adminStaff_edit_formSuspended"]                 = "\$text = 'Suspendu:';";

#****************************************************************************
#*  Translation text for page staff_list.php
#****************************************************************************
$trans["adminStaff_list_formHeader"]                 = "\$text = 'Ajouter un nouvel enseignant';";
$trans["adminStaff_list_Columnheader"]                 = "\$text = 'Enseignants:';";
$trans["adminStaff_list_Function"]                 = "\$text = 'Option';";
$trans["adminStaff_list_Edit"]                 = "\$text = 'Editer';";
$trans["adminStaff_list_Pwd"]                 = "\$text = 'Mot de passe';";
$trans["adminStaff_list_Del"]                 = "\$text = 'suppr';";

#****************************************************************************
#*  Translation text for page staff_new.php
#****************************************************************************
$trans["adminStaff_new_Added"]                 = "\$text = ', a été ajouté.';";

#****************************************************************************
#*  Translation text for page staff_new_form.php
#****************************************************************************
$trans["adminStaff_new_form_Header"]            = "\$text = 'Ajouter un nouveau membre de l\'équipe:';";
$trans["adminStaff_new_form_Password"]          = "\$text = 'Mot de passe:';";
$trans["adminStaff_new_form_Reenterpassword"]   = "\$text = 'Mot de passe pour vérification:';";

#****************************************************************************
#*  Translation text for page staff_pwd_reset.php
#****************************************************************************
$trans["adminStaff_pwd_reset_Passwordreset"]   = "\$text = 'Le changement de mot de passe a bien été effectué.';";

#****************************************************************************
#*  Translation text for page staff_pwd_reset_form.php
#****************************************************************************
$trans["adminStaff_pwd_reset_form_Resetheader"]   = "\$text = 'Changer le mot de passe d'un membre de l\'équipe:';";

#****************************************************************************
#*  Translation text for theme pages
#****************************************************************************
$trans["adminTheme_Return"]                 = "\$text = 'Retourner à la liste des thèmes';";
$trans["adminTheme_Theme"]                 = "\$text = 'Thème, ';";

#****************************************************************************
#*  Translation text for page theme_del.php
#****************************************************************************
$trans["adminTheme_Deleted"]                 = "\$text = ', a été supprimé.';";
#****************************************************************************
#*  Translation text for page theme_del_confirm.php
#****************************************************************************
$trans["adminTheme_Deleteconfirm"]                 = "\$text = 'Etes vous sûr de vouloir supprimer ce thème, ';";
#****************************************************************************
#*  Translation text for page theme_edit.php
#****************************************************************************
$trans["adminTheme_Updated"]                 = "\$text = ', a été mis à jour.';";

#****************************************************************************
#*  Translation text for page theme_edit_form.php
#****************************************************************************
$trans["adminTheme_Preview"]                 = "\$text = 'Prévisualiser les changements du thème';";

#****************************************************************************
#*  Translation text for page theme_list.php
#****************************************************************************
$trans["adminTheme_Changetheme"]                 = "\$text = 'Changer de thème:';";
$trans["adminTheme_Choosetheme"]                 = "\$text = 'Choisir un nouveau thème:';";
$trans["adminTheme_Addnew"]                 = "\$text = 'Ajouter un nouveau thème';";
$trans["adminTheme_themes"]                 = "\$text = 'Thèmes:';";
$trans["adminTheme_function"]                 = "\$text = 'Option';";
$trans["adminTheme_Themename"]                 = "\$text = 'Nom du thème';";
$trans["adminTheme_Usage"]                 = "\$text = 'Usage';";
$trans["adminTheme_Edit"]                 = "\$text = 'Editer';";
$trans["adminTheme_Copy"]                 = "\$text = 'Copier';";
$trans["adminTheme_Del"]                 = "\$text = 'Supprimer';";
$trans["adminTheme_Inuse"]                 = "\$text = 'Utilisé';";
$trans["adminTheme_Note"]                 = "\$text = '*Note:';";
$trans["adminTheme_Notetext"]                 = "\$text = 'La suppression du thème en cours d\' utilisation est impossible.';";

#****************************************************************************
#*  Translation text for page theme_list.php
#****************************************************************************
$trans["adminTheme_Theme2"]                 = "\$text = 'Thème:';";
$trans["adminTheme_Tablebordercolor"]                 = "\$text = 'Couleur bord de tableau:';";
$trans["adminTheme_Errorcolor"]                 = "\$text = 'Erreur couleur:';";
$trans["adminTheme_Tableborderwidth"]                 = "\$text = 'Longueur des tableaux:';";
$trans["adminTheme_Tablecellpadding"]                 = "\$text = 'Longueur des cellules:';";
$trans["adminTheme_Title"]                 = "\$text = 'Titre';";
$trans["adminTheme_Mainbody"]                 = "\$text = 'Corp principal';";
$trans["adminTheme_Navigation"]                 = "\$text = 'Navigation';";
$trans["adminTheme_Tabs"]                 = "\$text = 'Option';";
$trans["adminTheme_Backgroundcolor"]                 = "\$text = 'Couleur du fond:';";
$trans["adminTheme_Fontface"]                 = "\$text = 'Police de caractère:';";
$trans["adminTheme_Fontsize"]                 = "\$text = 'Taille de la police:';";
$trans["adminTheme_Bold"]                 = "\$text = 'gras';";
$trans["adminTheme_Fontcolor"]                 = "\$text = 'Couleur de la police:';";
$trans["adminTheme_Linkcolor"]                 = "\$text = 'Couleur des liens:';";
$trans["adminTheme_Align"]                 = "\$text = 'Aligner:';";
$trans["adminTheme_Right"]                 = "\$text = 'Droite';";
$trans["adminTheme_Left"]                 = "\$text = 'Gauche';";
$trans["adminTheme_Center"]                 = "\$text = 'Centrer';";

$trans["adminTheme_HeaderWording"]                 = "\$text = 'Editer';";


#****************************************************************************
#*  Translation text for page theme_new.php
#****************************************************************************
$trans["adminTheme_new_Added"]                 = "\$text = ', a été ajouté.';";

#****************************************************************************
#*  Translation text for page theme_new_form.php
#****************************************************************************

#****************************************************************************
#*  Translation text for page theme_preview.php
#****************************************************************************
$trans["adminTheme_preview_Themepreview"]                 = "\$text = 'Prévisualiser le thème';";
$trans["adminTheme_preview_Librarytitle"]                 = "\$text = 'Titre de la BCD';";
$trans["adminTheme_preview_CloseWindow"]                 = "\$text = 'Fermer la fenêtre';";
$trans["adminTheme_preview_Home"]                 = "\$text = 'Accueil';";
$trans["adminTheme_preview_Circulation"]   = "\$text = 'Emprunts';";
$trans["adminTheme_preview_Cataloging"]    = "\$text = 'Catalogue';";
$trans["adminTheme_preview_Admin"]         = "\$text = 'Administration';";
$trans["adminTheme_preview_Samplelink"]    = "\$text = 'Exemple de liens';";
$trans["adminTheme_preview_Thisstart"]     = "\$text = 'Voici la prévisualisation du thème ';";
$trans["adminTheme_preview_Thisend"]       = "\$text = 'Thème.';";
$trans["adminTheme_preview_Samplelist"]    = "\$text = 'Exemple de liens:';";
$trans["adminTheme_preview_Tableheading"]  = "\$text = 'Haut de page';";
$trans["adminTheme_preview_Sampledatarow1"]= "\$text = 'Exemple colonne 1';";
$trans["adminTheme_preview_Sampledatarow2"]= "\$text = 'Exemple colonne 2';";
$trans["adminTheme_preview_Sampledatarow3"]= "\$text = 'Exemple colonne 3';";
$trans["adminTheme_preview_Samplelink"]    = "\$text = 'Exemple de lien';";
$trans["adminTheme_preview_Sampleerror"]   = "\$text = 'Exemple erreur';";
$trans["adminTheme_preview_Sampleinput"]   = "\$text = 'Exemple ajouter';";
$trans["adminTheme_preview_Samplebutton"]  = "\$text = 'Exemple de bouton';";
$trans["adminTheme_preview_Poweredby"]     = "\$text = '';";
$trans["adminTheme_preview_Copyright"]     = "\$text = '&copy; 2007 - Inspection Académique Strasbourg Europe';";
$trans["adminTheme_preview_underthe"]      = "\$text = 'Réalisation Traduction - Vincent Oesterle - Jean-Michel Ovide';";
$trans["adminTheme_preview_GNU"]           = "\$text = '';";

#****************************************************************************
#*  Translation text for page theme_use.php
#****************************************************************************

?>
