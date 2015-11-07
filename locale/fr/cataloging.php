<?php
#****************************************************************************
#*  Common translation text shared among multiple pages
#****************************************************************************
$trans["catalogSubmit"]            = "\$text = 'Valider';";
$trans["catalogCancel"]            = "\$text = 'Annuler';";
$trans["catalogRefresh"]           = "\$text = 'Actualiser';";
$trans["catalogDelete"]            = "\$text = 'Supprimer';";
$trans["catalogFootnote"]          = "\$text = 'Les champs marqués d\'un %symbol% sont obligatoires.';";
$trans["AnswerYes"]                = "\$text = 'Oui';";
$trans["AnswerNo"]                 = "\$text = 'Non';";

#****************************************************************************
#*  Translation text for page index.php
#****************************************************************************
$trans["indexHdr"]                 = "\$text = 'Gestion du Catalogue';";
$trans["indexBarcodeHdr"]          = "\$text = 'Rechercher un ouvrage selon le code barre';";
$trans["indexBarcodeField"]        = "\$text = 'Numéro de codebarre';";
$trans["indexSearchHdr"]           = "\$text = 'Rechercher dans le catalogue selon un groupe de mots';";
$trans["indexTitle"]               = "\$text = 'Titre';";
$trans["indexAuthor"]              = "\$text = 'Auteur';";
$trans["indexSubject"]             = "\$text = 'Sujet';";
$trans["indexButton"]              = "\$text = 'Rechercher';";

#****************************************************************************
#*  Translation text for page biblio_fields.php
#****************************************************************************
$trans["biblioFieldsLabel"]        = "\$text = 'Bibliographie';";
$trans["biblioFieldsMaterialTyp"]  = "\$text = 'Catégorie de support';";
$trans["biblioFieldsCollection"]   = "\$text = 'Collection';";
$trans["biblioFieldsCallNmbr"]     = "\$text = 'Lieu de rangement de l\'ouvrage';";
$trans["biblioFieldsUsmarcFields"] = "\$text = 'Code ouvrage';";
$trans["biblioFieldsOpacFlg"]      = "\$text = 'Montrer dans le Catalogue Public';";

#****************************************************************************
#*  Translation text for page biblio_new.php
#****************************************************************************
$trans["biblioNewFormLabel"]       = "\$text = 'Ajouter un nouvel exemplaire';";
$trans["biblioNewSuccess"]         = "\$text = 'Ce nouvel ouvrage a été ajouté.  Afin d\'ajouter un exemplaire selectionner nouvel exemplaire ou ajouter exemplaire.';";

#****************************************************************************
#*  Translation text for page biblio_edit.php
#****************************************************************************
$trans["biblioEditSuccess"]        = "\$text = 'Ouvrage mis à jour avec succès.';";

#****************************************************************************
#*  Translation text for page biblio_copy_new_form.php and biblio_copy_edit_form.php
#****************************************************************************
$trans["biblioCopyNewFormLabel"]   = "\$text = 'Ajouter un nouvel exemplaire';";
$trans["biblioCopyNewBarcode"]     = "\$text = 'Numéro code-barre';";
$trans["biblioCopyNewDesc"]        = "\$text = 'Description';";
$trans["biblioCopyNewAuto"]        = "\$text = 'Génération de code auto';";
$trans["biblioCopyEditFormLabel"]  = "\$text = 'Editer exemplaire';";
$trans["biblioCopyEditFormStatus"] = "\$text = 'Statut';";

#****************************************************************************
#*  Translation text for page biblio_copy_new.php
#****************************************************************************
$trans["biblioCopyNewSuccess"]     = "\$text = 'Exemplaire créé avec succès.';";

#****************************************************************************
#*  Translation text for page biblio_copy_edit.php
#****************************************************************************
$trans["biblioCopyEditSuccess"]    = "\$text = 'Exemplaire mis à jour avec succès.';";

#****************************************************************************
#*  Translation text for page biblio_copy_del_confirm.php
#****************************************************************************
$trans["biblioCopyDelConfirmErr1"] = "\$text = 'Impossible de supprimer l\'exemplaire. L\'ouvrage doit être rendu avant la suppression.';";
$trans["biblioCopyDelConfirmMsg"]  = "\$text = 'Etes vous sûr de vouloir supprimer l\'exemplaire avec le code-barre %barcodeNmbr%?  Cela supprimera également l\'historique des prêts de cet ouvrage.';";

#****************************************************************************
#*  Translation text for page biblio_copy_del.php
#****************************************************************************
$trans["biblioCopyDelSuccess"]     = "\$text = 'L\'exemplaire avec le code barre %barcode% a été supprimé avec succès.';";

#****************************************************************************
#*  Translation text for page biblio_marc_list.php
#****************************************************************************
$trans["biblioMarcListMarcSelect"] = "\$text = 'Ajouter une nouvelle catégorie MARC';";
$trans["biblioMarcListHdr"]        = "\$text = 'Information de la catégorie MARC';";
$trans["biblioMarcListTbleCol1"]   = "\$text = 'Fonction';";
$trans["biblioMarcListTbleCol2"]   = "\$text = 'Option';";
$trans["biblioMarcListTbleCol3"]   = "\$text = 'Description option';";
$trans["biblioMarcListTbleCol4"]   = "\$text = 'Ind 1';";
$trans["biblioMarcListTbleCol5"]   = "\$text = 'Ind 2';";
$trans["biblioMarcListTbleCol6"]   = "\$text = 'Sous-catégorie';";
$trans["biblioMarcListTbleCol7"]   = "\$text = 'Description de la sous-catégorie';";
$trans["biblioMarcListTbleCol8"]   = "\$text = 'Fichier de la catégorie';";
$trans["biblioMarcListNoRows"]     = "\$text = 'Aucune categorie MARC trouvée.';";
$trans["biblioMarcListEdit"]       = "\$text = 'Editer';";
$trans["biblioMarcListDel"]        = "\$text = 'Suppr';";

#****************************************************************************
#*  Translation text for page usmarc_select.php
#****************************************************************************
$trans["usmarcSelectHdr"]          = "\$text = 'Selectionner une catégorie MARC';";
$trans["usmarcSelectInst"]         = "\$text = 'Selectionner une catégorie de domaine';";
$trans["usmarcSelectNoTags"]       = "\$text = 'Aucune donnée ne correspond à votre recherche.';";
$trans["usmarcSelectUse"]          = "\$text = 'Utiliser';";
$trans["usmarcCloseWindow"]        = "\$text = 'Fermer la fenêtre';";

#****************************************************************************
#*  Translation text for page biblio_marc_new_form.php
#****************************************************************************
$trans["biblioMarcNewFormHdr"]     = "\$text = 'Ajouter nouveau domaine MARC';";
$trans["biblioMarcNewFormTag"]     = "\$text = 'Bouton';";
$trans["biblioMarcNewFormSubfld"]  = "\$text = 'Sous-catégorie';";
$trans["biblioMarcNewFormData"]    = "\$text = 'Fichier du domaine';";
# traduction domaine à revoir
$trans["biblioMarcNewFormInd1"]    = "\$text = 'Indicateur 1';";
$trans["biblioMarcNewFormInd2"]    = "\$text = 'Indicateur 2';";
$trans["biblioMarcNewFormSelect"]  = "\$text = 'Selectionner';";

#****************************************************************************
#*  Translation text for page biblio_marc_new.php
#****************************************************************************
$trans["biblioMarcNewSuccess"]     = "\$text = 'Le domaine Marc ajouté avec succès.';";

#****************************************************************************
#*  Translation text for page biblio_marc_edit_form.php
#****************************************************************************
$trans["biblioMarcEditFormHdr"]    = "\$text = 'Editer domaine Marc';";

#****************************************************************************
#*  Translation text for page biblio_marc_edit.php
#****************************************************************************
$trans["biblioMarcEditSuccess"]    = "\$text = 'Domaine Marc mise à jour avec succès.';";

#****************************************************************************
#*  Translation text for page biblio_marc_del_confirm.php
#****************************************************************************
$trans["biblioMarcDelConfirmMsg"]  = "\$text = 'Êtes-vous sûr de vouloir supprimer le domaine avec son étiquette %tag% et son sous-domaine %subfieldCd%?';";

#****************************************************************************
#*  Translation text for page biblio_marc_del.php
#****************************************************************************
$trans["biblioMarcDelSuccess"]     = "\$text = 'Le domaine Marc a été supprimé avec succès.';";

#****************************************************************************
#*  Translation text for page biblio_del_confirm.php
#****************************************************************************
$trans["biblioDelConfirmWarn"]     = "\$text = 'L\'ouvrage a %copyCount% exemplaire(s) et  %holdCount% réservation(s).  Supprimer les exemplaires et/ou les réservations avant de supprimer cet ouvrage.';";
$trans["biblioDelConfirmReturn"]   = "\$text = 'Retour à la description de l\'ouvrage';";
$trans["biblioDelConfirmMsg"]      = "\$text = 'Etes vous sûr de vouloir supprimer l\'ouvrage avec le titre %title%?';";

#****************************************************************************
#*  Translation text for page biblio_del_confirm.php
#****************************************************************************
$trans["biblioDelMsg"]             = "\$text = 'l\'ouvrage, %title%, a été supprimé.';";
$trans["biblioDelReturn"]          = "\$text = 'Retour à la recherche du catalogue';";

#****************************************************************************
#*  Translation text for page biblio_hold_list.php
#****************************************************************************
$trans["biblioHoldListHead"]       = "\$text = 'Ouvrages réservés:';";
$trans["biblioHoldListNoHolds"]    = "\$text = 'Aucun exemplaire de l\'ouvrage en réservation.';";
$trans["biblioHoldListHdr1"]       = "\$text = 'Option';";
$trans["biblioHoldListHdr2"]       = "\$text = 'Exemplaire';";
$trans["biblioHoldListHdr3"]       = "\$text = 'Réserver';";
$trans["biblioHoldListHdr4"]       = "\$text = 'Elève';";
$trans["biblioHoldListHdr5"]       = "\$text = 'Statut';";
$trans["biblioHoldListHdr6"]       = "\$text = 'Date de retour';";
$trans["biblioHoldListdel"]        = "\$text = 'Suppr';";

#****************************************************************************
#*  Translation text for page noauth.php
#****************************************************************************
$trans["NotAuth"]                 = "\$text = 'Vous n\'êtes pas autorisé à utiliser la fonction du catalogue';";

#****************************************************************************
#*  Translation text for page upload_usmarc.php and upload_usmarc_form.php
#****************************************************************************
$trans["MarcUploadTest"]            = "\$text = 'Test de chargement';";
$trans["MarcUploadTestTrue"]        = "\$text = 'Vrai';";
$trans["MarcUploadTestFalse"]       = "\$text = 'Faux';";
$trans["MarcUploadTestFileUpload"]  = "\$text = 'Fichier USMarc à télécharger';";
$trans["MarcUploadRecordsUploaded"] = "\$text = 'Registre téléchargé';";
$trans["MarcUploadMarcRecord"]      = "\$text = 'MARC Enregistrement';";
$trans["MarcUploadTag"]             = "\$text = 'Option';";
$trans["MarcUploadSubfield"]        = "\$text = 'Sous-domaine';";
$trans["MarcUploadData"]            = "\$text = 'Données';";
$trans["MarcUploadRawData"]         = "\$text = 'Données brutes:';";
$trans["UploadFile"]                = "\$text = 'Téléchargement du fichier';";

#****************************************************************************
#*  Translation text for page usmarc_select.php
#****************************************************************************
$trans["PoweredByOB"]                 = "\$text = ' ';";
$trans["Copyright"]                   = "\$text = ' &copy; 2007 - Inspection Académique Strasbourg Europe';";
$trans["underthe"]                    = "\$text = 'Réalisation Traduction - Vincent Oesterle - Jean-Michel Ovide';";
$trans["GNU"]                         = "\$text = ' ';";

$trans["catalogResults"]                 = "\$text = 'Résultat de la recherche';";



?>
