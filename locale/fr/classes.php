<?php


#****************************************************************************
#*  Translation text for class Biblio
#****************************************************************************
$trans["biblioError1"]            = "\$text = 'Numéro de code barre obligatoire.';";

#****************************************************************************
#*  Translation text for class BiblioField
#****************************************************************************
$trans["biblioFieldError1"]       = "\$text = 'Lieu de rangement obligatoire.';";
$trans["biblioFieldError2"]       = "\$text = 'le code doit être numérique.';";

#****************************************************************************
#*  Translation text for class BiblioQuery
#****************************************************************************
$trans["biblioQueryQueryErr1"]    = "\$text = 'Erreur d\'accès aux informations sur l\'ouvrage.';";
$trans["biblioQueryQueryErr2"]    = "\$text = 'Erreur d\'accès aux informations sur le lieu de rangement.';";
$trans["biblioQueryInsertErr1"]   = "\$text = 'Erreur d\'insertion des informations sur l\'ouvrage.';";
$trans["biblioQueryInsertErr2"]   = "\$text = 'Erreur d\'insertion des informations sur le lieu de rangement..';";
$trans["biblioQueryUpdateErr1"]   = "\$text = 'Erreur dans la mise à jour des informations sur l\'ouvrage.';";
$trans["biblioQueryUpdateErr2"]   = "\$text = 'Erreur dans la mise à jour des informations sur le lieu de rangement.';";
$trans["biblioQueryDeleteErr"]    = "\$text = 'Erreur lors de la suppression des informations de l\'ouvrage.';";

#****************************************************************************
#*  Translation text for class BiblioSearchQuery
#****************************************************************************
$trans["biblioSearchQueryErr1"]   = "\$text = 'Erreur dans la comptabilisation du résultat.';";
$trans["biblioSearchQueryErr2"]   = "\$text = 'Erreur dans la recherche bibliographique.';";
$trans["biblioSearchQueryErr3"]   = "\$text = 'Erreur de lechture des informations bibliographique.';";

#****************************************************************************
#*  Translation text for class BiblioCopy
#****************************************************************************
$trans["biblioCopyError1"]        = "\$text = 'Le code barre est obligatoire.';";
$trans["biblioCopyError2"]        = "\$text = 'Le code barre doit être numérique ou alpha numérique.';";

#****************************************************************************
#*  Translation text for class BiblioCopyQuery
#****************************************************************************
$trans["biblioCopyQueryErr1"]     = "\$text = 'Erreur lors de la vérification du code barre.';";
$trans["biblioCopyQueryErr2"]     = "\$text = 'L ecode barre %barcodeNmbr% est déjà utilisé.';";
$trans["biblioCopyQueryErr3"]     = "\$text = 'Erreur pendant l\'enregistrement d\'une noubvel information bibliographique.';";
$trans["biblioCopyQueryErr4"]     = "\$text = 'Erreur lors de l\accès des informations bibliographiques.';";
$trans["biblioCopyQueryErr5"]     = "\$text = 'Erreur lors de la mis à jour des informations bibliographique.';";
$trans["biblioCopyQueryErr6"]     = "\$text = 'Erreur lors de la suppresion des informatiosn bibliographiques.';";
$trans["biblioCopyQueryErr7"]     = "\$text = 'Erreur lors de la saisie du code de la collection.';";
$trans["biblioCopyQueryErr8"]     = "\$text = 'Error accessing collection information to check days due back.';";
$trans["biblioCopyQueryErr9"]     = "\$text = 'Error occurred checking copies in';";
$trans["biblioCopyQueryErr10"]    = "\$text = 'Error occurred checking checkout limits';";
$trans["biblioCopyQueryErr11"]    = "\$text = 'Error fetching highest copyid.';";

#****************************************************************************
#*  Translation text for class BiblioFieldQuery
#****************************************************************************
$trans["biblioFieldQueryErr1"]    = "\$text = 'Error reading for a bibliography field.';";
$trans["biblioFieldQueryErr2"]    = "\$text = 'Error reading bibliography fields.';";
$trans["biblioFieldQueryInsertErr"] = "\$text = 'Error inserting new bibliography field.';";
$trans["biblioFieldQueryUpdateErr"] = "\$text = 'Error updating bibliography field.';";
$trans["biblioFieldQueryDeleteErr"] = "\$text = 'Error deleting bibliography field.';";

#****************************************************************************
#*  Translation text for class UsmarcBlockDmQuery
#****************************************************************************
$trans["usmarcBlockDmQueryErr1"]  = "\$text = 'Error accessing the marc block data.';";

#****************************************************************************
#*  Translation text for class UsmarcTagDmQuery
#****************************************************************************
$trans["usmarcTagDmQueryErr1"]    = "\$text = 'Error accessing the marc tag data.';";

#****************************************************************************
#*  Translation text for class UsmarcSubfieldDmQuery
#****************************************************************************
$trans["usmarcSubfldDmQueryErr1"] = "\$text = 'Error accessing the marc subfield data.';";

#****************************************************************************
#*  Translation text for class BiblioHoldQuery
#****************************************************************************
$trans["biblioHoldQueryErr1"]     = "\$text = 'Error accessing hold data by bibliography id.';";
$trans["biblioHoldQueryErr2"]     = "\$text = 'Error accessing hold data by member id.';";
$trans["biblioHoldQueryErr3"]     = "\$text = 'Error getting bibid and copyid for placing hold.';";
$trans["biblioHoldQueryErr4"]     = "\$text = 'Error inserting hold data.';";
$trans["biblioHoldQueryErr5"]     = "\$text = 'Error deleting hold data.';";
$trans["biblioHoldQueryErr6"]     = "\$text = 'Error getting first hold member for a copy.';";

#****************************************************************************
#*  Translation text for class ReportQuery
#****************************************************************************
$trans["reportQueryErr1"]         = "\$text = 'Erreur lors de l\'élaboration de l\'historique.';";

#****************************************************************************
#*  Translation text for class ReportCriteria
#****************************************************************************
$trans["reportCriteriaErr1"]      = "\$text = 'Non numeric value is not valid with numeric column.';";
$trans["reportCriteriaDateTimeErr"] = "\$text = 'Invalid datetime format.';";
$trans["reportCriteriaDateErr"]   = "\$text = 'Invalid date format.';";

#****************************************************************************
#*  Translation text for class LabelFormat and LetterFormat
#****************************************************************************
$trans["labelFormatFontErr"]      = "\$text = 'Invalid font type specified in label definition xml.  Valid font types are Courier, Helvetica, and Times-Roman.';";
$trans["labelFormatFontSizeErr"]  = "\$text = 'Invalid font size specified in label definition xml.  Font size must be numeric.';";
$trans["labelFormatFontSizeErr2"] = "\$text = 'Invalid font size specified in label definition xml.  Font size must be greater than zero.';";
$trans["labelFormatLMarginErr"]   = "\$text = 'Invalid left margin specified in label definition xml.  Left margin must be numeric.';";
$trans["labelFormatLMarginErr2"]  = "\$text = 'Invalid left margin specified in label definition xml.  Left margin must be greater than zero.';";
$trans["labelFormatRMarginErr"]   = "\$text = 'Invalid right margin specified in label definition xml.  Right margin must be numeric.';";
$trans["labelFormatRMarginErr2"]  = "\$text = 'Invalid right margin specified in label definition xml.  Right margin must be greater than zero.';";
$trans["labelFormatTMarginErr"]   = "\$text = 'Invalid top margin specified in label definition xml.  Top margin must be numeric.';";
$trans["labelFormatTMarginErr2"]  = "\$text = 'Invalid top margin specified in label definition xml.  Top margin must be greater than zero.';";
$trans["labelFormatBMarginErr"]   = "\$text = 'Invalid bottom margin specified in label definition xml.  Bottom margin must be numeric.';";
$trans["labelFormatBMarginErr2"]  = "\$text = 'Invalid bottom margin specified in label definition xml.  Bottom margin must be greater than zero.';";
$trans["labelFormatColErr"]       = "\$text = 'Invalid columns specified in label definition xml.  Columns must be numeric.';";
$trans["labelFormatColErr2"]      = "\$text = 'Invalid columns specified in label definition xml.  Columns must be greater than zero.';";
$trans["labelFormatWidthErr"]     = "\$text = 'Invalid width specified in label definition xml.  Width must be numeric.';";
$trans["labelFormatWidthErr2"]    = "\$text = 'Invalid width specified in label definition xml.  Width must be greater than zero.';";
$trans["labelFormatHeightErr"]    = "\$text = 'Invalid height specified in label definition xml.  Height must be numeric.';";
$trans["labelFormatHeightErr2"]   = "\$text = 'Invalid height specified in label definition xml.  Height must be greater than zero.';";
$trans["labelFormatNoLabelsErr"]  = "\$text = 'Invalid label lines specified in label definition xml.';";

#****************************************************************************
#*  Translation text for class BiblioStatusHistQuery
#****************************************************************************
$trans["biblioStatusHistQueryErr1"] = "\$text = 'Error getting bibliography status history by bibliography id.';";
$trans["biblioStatusHistQueryErr2"] = "\$text = 'Error getting bibliography status history by member id';";
$trans["biblioStatusHistQueryErr3"] = "\$text = 'Error inserting bibliography status history';";
$trans["biblioStatusHistQueryErr4"] = "\$text = 'Error deleting bibliography status history by copy id';";
$trans["biblioStatusHistQueryErr5"] = "\$text = 'Error deleting bibliography status history by member id';";

#****************************************************************************
#*  Translation text for class MemberAccountTransaction
#****************************************************************************
$trans["memberAccountTransError1"]  = "\$text = 'Amount is required.';";
$trans["memberAccountTransError2"]  = "\$text = 'Amount must be numeric.';";
$trans["memberAccountTransError3"]  = "\$text = 'Description is required.';";

#****************************************************************************
#*  Translation text for class MemberAccountQuery
#****************************************************************************
$trans["memberAccountQueryErr1"]    = "\$text = 'Erreur lors de l\'accès au compte de l\'élève.';";
$trans["memberAccountQueryErr2"]    = "\$text = 'Erreur lors de la modification du compte de l\'élève.';";
$trans["memberAccountQueryErr3"]    = "\$text = 'Erreur lors de la suppression des informations de l\'élève.';";

?>
