<?php


#****************************************************************************
#*  Translation text used on multiple pages
#****************************************************************************
$trans["reportsCancel"]            = "\$text = 'Annuler';";

#****************************************************************************
#*  Translation text for page index.php
#****************************************************************************
$trans["indexHdr"]                 = "\$text = 'Gestion des Historiques';";
$trans["indexDesc"]                = "\$text = 'Utiliser les options à gauche afin de gérer l\'historique des emprunts et imprimer des étiquettes.';";

#****************************************************************************
#*  Translation text for page report_list.php
#****************************************************************************
$trans["reportListHdr"]            = "\$text = 'Liste des historiques';";
$trans["reportListDesc"]           = "\$text = 'Choisir un des liens afin d\'établir l\'historique.';";
$trans["reportListXmlErr"]         = "\$text = 'Erreur lors de l\'établissement du fichier xml.';";
$trans["reportListCannotRead"]     = "\$text = 'Impossible de lire l\'intitulé: %fileName%';";

#****************************************************************************
#*  Translation text for page label_list.php
#****************************************************************************
$trans["labelListHdr"]             = "\$text = 'Liste des étiquettes';";
$trans["labelListDesc"]            = "\$text = 'Choisir un des liens afin de créér les étiquettes au format pdf.';";
$trans["displayLabelsXmlErr"]      = "\$text = 'Erreur d\'interpretation du code xml.  Erreur = ';";

#****************************************************************************
#*  Translation text for page letter_list.php
#****************************************************************************
$trans["letterListHdr"]            = "\$text = 'Liste des lettres';";
$trans["letterListDesc"]           = "\$text = 'Choisir un des modèles pour imprimer une lettre au format pdf.';";
$trans["displayLettersXmlErr"]      = "\$text ='Erreur d\'interpretation du code xml.  Erreur = ';";

#****************************************************************************
#*  Translation text for page report_criteria.php
#****************************************************************************
$trans["reportCriteriaHead1"]      = "\$text = 'Option des critères de recherche (facultatif)';";
$trans["reportCriteriaHead2"]      = "\$text = 'Orde de présentation des historiques (optional)';";
$trans["reportCriteriaHead3"]      = "\$text = 'Classement des historiques';";
$trans["reportCriteriaCrit1"]      = "\$text = '1er critère:';";
$trans["reportCriteriaCrit2"]      = "\$text = '2ème critère:';";
$trans["reportCriteriaCrit3"]      = "\$text = '3ème critère:';";
$trans["reportCriteriaCrit4"]      = "\$text = '4ème critère:';";
$trans["reportCriteriaEQ"]         = "\$text = '=';";
$trans["reportCriteriaNE"]         = "\$text = 'non inclu =';";
$trans["reportCriteriaLT"]         = "\$text = '&lt;';";
$trans["reportCriteriaGT"]         = "\$text = '&gt;';";
$trans["reportCriteriaLE"]         = "\$text = '&lt ou =';";
$trans["reportCriteriaGE"]         = "\$text = '&gt ou =';";
$trans["reportCriteriaBT"]         = "\$text = 'entre';";
$trans["reportCriteriaAnd"]        = "\$text = 'et';";
$trans["reportCriteriaRunReport"]  = "\$text = 'Etablir l\'historique';";
$trans["reportCriteriaSortCrit1"]  = "\$text = 'Classement 1:';";
$trans["reportCriteriaSortCrit2"]  = "\$text = 'Classement 2:';";
$trans["reportCriteriaSortCrit3"]  = "\$text = 'Classementt 3:';";
$trans["reportCriteriaAscending"]  = "\$text = 'Croissant';";
$trans["reportCriteriaDescending"] = "\$text = 'Décroissant';";
$trans["reportCriteriaStartOnLabel"] = "\$text = 'Imprimer les étiquettes:';";
$trans["reportCriteriaOutput"]     = "\$text = 'Type de format d\'exportation:';";
$trans["reportCriteriaOutputHTML"] = "\$text = 'HTML';";
$trans["reportCriteriaOutputCSV"]  = "\$text = 'CSV';";

#****************************************************************************
#*  Translation text for page run_report.php
#****************************************************************************
$trans["runReportReturnLink1"]     = "\$text = 'Sélection des types d\'historique';";
$trans["runReportReturnLink2"]     = "\$text = 'Listes des historiques';";
$trans["runReportTotal"]           = "\$text = 'Total des colonnes:';";

#****************************************************************************
#*  Translation text for page display_labels.php
#****************************************************************************
$trans["displayLabelsStartOnLblErr"] = "\$text = 'Le champ doit être numérique.';";
$trans["displayLabelsXmlErr"]      = "\$text = 'Erreur lors de l'\interprétation du code xml.  Error = ';";
$trans["displayLabelsCannotRead"]  = "\$text = 'Impossible de lire le fichier étiquette: %fileName%';";

#****************************************************************************
#*  Translation text for page noauth.php
#****************************************************************************
$trans["noauthMsg"]                = "\$text = 'Vous n\'avez pas l\'autorisation de consulter les historiques.';";

#****************************************************************************
#*  Report Titles
#****************************************************************************
$trans["reportHolds"]              = "\$text = 'Demande de réservation avec informations sur les élèves';";
$trans["reportCheckouts"]          = "\$text = 'Liste des ouvrages empruntés';";
$trans["Over Due Letters"]           = "\$text = 'Lettres de retard';";
$trans["reportLabels"]             = "\$text = 'Fonction d\'impression des étiquettes';";
$trans["popularBiblios"]           = "\$text = 'Ouvrages les plus populaires';";
$trans["overdueList"]              = "\$text = 'Listes des élèves dont le délai des emprunts est dépassé';";
$trans["balanceDueList"]           = "\$text = 'Solde des montants débiteurs - Pénalités de retard';";

#****************************************************************************
#*  Label Titles
#****************************************************************************
$trans["labelsMulti"]              = "\$text = 'Multi Label Example';";
$trans["labelsSimple"]             = "\$text = 'Simple Label Example';";

#****************************************************************************
#*  Column Text
#****************************************************************************
$trans["biblio.bibid"]             = "\$text = 'Code identifiant BCD';";
$trans["biblio.create_dt"]         = "\$text = 'Date de création';";
$trans["biblio.last_change_dt"]    = "\$text = 'Dernier changement';";
$trans["biblio.material_cd"]       = "\$text = 'Type de support';";
$trans["biblio.collection_cd"]     = "\$text = 'Collection';";
$trans["biblio.call_nmbr1"]        = "\$text = '1er rappel';";
$trans["biblio.call_nmbr2"]        = "\$text = '2ème rappel';";
$trans["biblio.call_nmbr3"]        = "\$text = '3ème Rappel';";
$trans["biblio.title_remainder"]   = "\$text = 'En-tête de la lettre de rappel';";
$trans["biblio.responsibility_stmt"] = "\$text = 'Nom du responsable BCD';";
$trans["biblio.opac_flg"]          = "\$text = 'Autoriser en Catalogue Public';";

$trans["biblio_copy.barcode_nmbr"] = "\$text = 'Code barre';";
$trans["biblio.title"]             = "\$text = 'Titre';";
$trans["biblio.author"]            = "\$text = 'Auteur';";
$trans["biblio_copy.status_begin_dt"]   = "\$text = 'Date du statut';";
$trans["biblio_copy.due_back_dt"]       = "\$text = 'Date de retour prévue';";
$trans["member.mbrid"]             = "\$text = 'Code de l\'élève';";
$trans["member.barcode_nmbr"]      = "\$text = 'Code barre de l\'élève';";
$trans["member.last_name"]         = "\$text = 'Prénom';";
$trans["member.first_name"]        = "\$text = 'Nom';";
$trans["member.address"]          = "\$text = 'Addresse';";
$trans["biblio_hold.hold_begin_dt"] = "\$text = 'Date de réservation';";
$trans["member.home_phone"]        = "\$text = 'Téléphone domicile';";
$trans["member.work_phone"]        = "\$text = 'Téléphone prof';";
$trans["member.email"]             = "\$text = 'Email';";
$trans["biblio_status_dm.description"] = "\$text = 'Statut';";
$trans["settings.library_name"]    = "\$text = 'Nom de la BCD';";
$trans["settings.library_hours"]   = "\$text = 'Heures d\'ouverture de la BCD';";
$trans["settings.library_phone"]   = "\$text = 'Téléphone';";
$trans["days_late"]                = "\$text = 'Jour de retard';";
$trans["title"]                    = "\$text = 'Titre';";
$trans["author"]                   = "\$text = 'Auteur';";
$trans["due_back_dt"]              = "\$text = 'Date de retour prévue';";
$trans["checkoutCount"]            = "\$text = 'Nombre emprunté';";

?>
