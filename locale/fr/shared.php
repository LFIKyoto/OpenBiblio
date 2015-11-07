<?php

#****************************************************************************
#*  Common translation text shared among multiple pages
#****************************************************************************
$trans["sharedCancel"]             = "\$text = 'Annuler';";
$trans["sharedDelete"]             = "\$text = 'Supprimer';";

#****************************************************************************
#*  Translation text for page biblio_view.php
#****************************************************************************
$trans["biblioViewTble1Hdr"]       = "\$text = 'Information sur l\'ouvrage';";
$trans["biblioViewMaterialType"]   = "\$text = 'Catégorie de support';";
$trans["biblioViewCollection"]     = "\$text = 'Collection';";
$trans["biblioViewPictureHeader"]     = "\$text = 'Image du support';";
$trans["biblioViewCallNmbr"]       = "\$text = 'Lieu rangement de l\'ouvrage';";
# lieu de rangement à modifier et le problème de l'apostrophe
$trans["biblioViewTble2Hdr"]       = "\$text = 'Information sur l\'exemplaire';";
$trans["biblioViewTble2Col1"]      = "\$text = 'Numéro du support';";
$trans["biblioViewTble2Col2"]      = "\$text = 'Description';";
$trans["biblioViewTble2Col3"]      = "\$text = 'Statut';";
$trans["biblioViewTble2Col4"]      = "\$text = 'Date retour';";
$trans["biblioViewTble2Col5"]      = "\$text = 'A rendre';";
$trans["biblioViewTble2ColFunc"]   = "\$text = 'Option';";
$trans["biblioViewTble2Coldel"]    = "\$text = 'Supprimer';";
$trans["biblioViewTble2Coledit"]   = "\$text = 'Editer';";
$trans["biblioViewTble3Hdr"]       = "\$text = 'Information supplémentaire sur l\'exenplaire;";
$trans["biblioViewNoAddInfo"]      = "\$text = 'Aucune inforpmation bibliographique supplémentaire.';";
$trans["biblioViewNoCopies"]       = "\$text = 'Aucun exemplaire ajouté.';";
$trans["biblioViewOpacFlg"]        = "\$text = 'Visualiser dans le catalogue public';";
$trans["biblioViewNewCopy"]        = "\$text = 'Ajouter un nouvel exemplaire';";
$trans["biblioViewNeweCopy"]       = "\$text = 'Ajouter un nouvel exemplaire électronique';";
$trans["biblioViewYes"]            = "\$text = 'Oui';";
$trans["biblioViewNo"]             = "\$text = 'Non';";

#****************************************************************************
#*  Translation text for page biblio_search.php
#****************************************************************************
$trans["biblioSearchNoResults"]    = "\$text = 'Aucun résultat pour cette recherche.';";
$trans["biblioSearchResults"]      = "\$text = 'Résultat de la recherche';";
$trans["biblioSearchResultPages"]  = "\$text = 'Pages de résultat';";
$trans["biblioSearchPrev"]         = "\$text = 'Précédent';";
$trans["biblioSearchNext"]         = "\$text = 'Suivant';";
$trans["biblioSearchResultTxt"]    = "if (%items% == 1) {
                                        \$text = 'Résultat de la recherche %items%.';
                                      } else {
                                        \$text = 'Résultats de la recherche %items%.';
                                      }";
$trans["biblioSearchauthor"]       = "\$text = ' Trier par auteur';";
$trans["biblioSearchtitle"]        = "\$text = ' Trier par titre';";
$trans["biblioSearchSortByAuthor"] = "\$text = 'Trier par auteur';";
$trans["biblioSearchSortByTitle"]  = "\$text = 'Trier par titre';";
$trans["biblioSearchTitle"]        = "\$text = 'Titre';";
$trans["biblioSearchAuthor"]       = "\$text = 'Auteur';";
$trans["biblioSearchMaterial"]     = "\$text = 'Support';";
$trans["biblioSearchCollection"]   = "\$text = 'Collection';";
$trans["biblioSearchCall"]         = "\$text = 'Lieu de rangement ouvrage';";
$trans["biblioSearchCopyBCode"]    = "\$text = 'Code de l\'exemplaire';";
$trans["biblioSearchSelect"]       = "\$text = 'Choisir cet ouvrage';";
$trans["biblioSearchCopyStatus"]   = "\$text = 'Statut';";
$trans["biblioSearchNoCopies"]     = "\$text = 'Aucun ouvrage disponible.';";
$trans["biblioSearchHold"]         = "\$text = 'Réserver';";
$trans["biblioSearchOutIn"]        = "\$text = 'Emprunter - Rendre';";
$trans["biblioSearchDetail"]       = "\$text = 'Montrer les détails de la bibliographie';";
$trans["biblioSearchBCode2Chk"]    = "\$text = 'Code pour emprunter ou rendre un ouvrage';";
$trans["biblioSearchBCode2Hold"]   = "\$text = 'Code pour reserver';";



#****************************************************************************
#*  Translation text for page loginform.php
#****************************************************************************
$trans["loginFormTbleHdr"]         = "\$text = 'Identification Enseignant';";
$trans["loginFormUsername"]        = "\$text = 'Nom d\'utilisateur';";
$trans["loginFormPassword"]        = "\$text = 'Mot de passe';";
$trans["loginFormLogin"]           = "\$text = 'Ouvrir une session';";

#****************************************************************************
#*  Translation text for page hold_del_confirm.php
#****************************************************************************
$trans["holdDelConfirmMsg"]        = "\$text = 'Etes vous sûr de vouloir supprimer la demande de prêt?';";

#****************************************************************************
#*  Translation text for page hold_del.php
#****************************************************************************
$trans["holdDelSuccess"]           = "\$text='La demande de prêt a été supprimée avec succès.';";
#reservation de l'ouvrage

#****************************************************************************
#*  Translation text for page help_header.php
#****************************************************************************
$trans["helpHeaderTitle"]          = "\$text='Aide de la BCD';";
$trans["helpHeaderCloseWin"]       = "\$text='Fermer la fenêtre';";
$trans["helpHeaderContents"]       = "\$text='Contenu';";
$trans["helpHeaderPrint"]          = "\$text='Imprimer';";

$trans["catalogResults"]           = "\$text='Résultat de la recherche';";

#****************************************************************************
#*  Translation text for page header.php and header_opac.php
#****************************************************************************
$trans["headerTodaysDate"]         = "\$text='Nous sommes le:';";
$trans["headerDateFormat"]         = "\$text='d.m.Y';";
$trans["headerLibraryHours"]       = "\$text='Heures d\'ouverture de la BCD:';";
$trans["headerLibraryPhone"]       = "\$text='Téléphone:';";
$trans["headerHome"]               = "\$text='Accueil';";
$trans["headerCirculation"]        = "\$text='Emprunts';";
$trans["headerCataloging"]         = "\$text='Catalogue';";
$trans["headerAdmin"]              = "\$text='Administration';";
$trans["headerReports"]            = "\$text='Historiques';";

#****************************************************************************
#*  Translation text for page footer.php
#****************************************************************************
$trans["footerLibraryHome"]        = "\$text='Page d\'accueil de la BCD';";
$trans["footerOPAC"]               = "\$text='Catalogue public en ligne';";
$trans["footerHelp"]               = "\$text='Aide';";
$trans["footerPoweredBy"]          = "\$text='OpenBiblio (LFK)';";
$trans["footerDatabaseVersion"]    = "\$text='Version de BD';";
$trans["footerCopyright"]          = "\$text=' &copy; 2007/2015 - Inspection Académique Strasbourg Europe / LFK';";
$trans["footerUnderThe"]           = "\$text='Réalisation Traduction - Vincent Oesterle - Jean-Michel Ovide / Frédéric Bergeron';";
$trans["footerGPL"]                = "\$text=' ';";


#****************************************************************************
#*  Translation text for page login.php
#****************************************************************************

$trans["Loginusername"]            = "\$text='Nom d\'utilisateur';";
$trans["LoginPassword"]            = "\$text='Mot de passe.';";
$trans["LoginInvalid"]             = "\$text='Nom d\'utilisateur ou mot de passe erroné.';";

?>
