<?php
/**
*
* gallery [Nederlands]
*
* @package phpBB Gallery
* @version $Id$
* @copyright (c) 2007 nickvergessen nickvergessen@gmx.de http://www.flying-bits.org
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
**/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB')) 
{ 
	exit; 
} 

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'ALBUM'							=> 'Album',
	'ALBUM_IS_CATEGORY'				=> 'Het album waar je heen gegaan bent is een categoriealbum.<br />Je kunt niet invoeren in categorieën.',
	'ALBUM_LOCKED'					=> 'Gesloten',
	'ALBUM_NAME'					=> 'Albumnaam',
	'ALBUM_NOT_EXIST'				=> 'Dit album bestaat niet',
	'ALBUM_PERMISSIONS'				=> 'Album Permissies',
	'ALBUM_REACHED_QUOTA'			=> 'Je mag niet meer dan %s afbeeldingen uploaden. Neem a.u.b. contact op met de beheerder voor meer informatie.',
	'ALBUM_UPLOAD_NEED_APPROVAL'	=> 'Je afbeelding is correct ingevoerd.<br /><br />Maar de optie Afbeelding Goedkeuren is geactiveerd zodat je afbeelding eerst goedgekeurd moet worden door een beheerder of een moderator voor hij geplaats kan worden',
	'ALBUM_UPLOAD_SUCCESSFUL'		=> 'Je afbeelding is correct ingevoerd',
	'ALBUMS_MARKED'					=> 'Alle albums zijn gemarkeerd als gelezen.',
	'ALL'							=> 'Alle',
	'ALL_IMAGES'					=> 'Alle afbeeldingen',
	'ALLOWED_FILETYPES'				=> 'Toegstane bestandsformaten',
	'APPROVE'						=> 'Keur goed',
	'APPROVE_IMAGE'					=> 'Keur afbeelding goed',

	//@todo
	'ALBUM_COMMENT_CAN'				=> 'Je <strong>kunt</strong> commentaren plaatsen bij de afbeeldingen in dit album',
	'ALBUM_COMMENT_CANNOT'			=> 'Je kunt <strong>geen</strong> commentaren plaatsen bij de afbeeldingen in dit album',
	'ALBUM_DELETE_CAN'				=> 'Je <strong>kunt</strong> je afbeeldingen verwijderen uit dit album',
	'ALBUM_DELETE_CANNOT'			=> 'Je kunt <strong>niet</strong> je afbeeldingen verwijderen uit dit album',
	'ALBUM_EDIT_CAN'				=> 'Je <strong>kunt</strong> je afbeeldingen bewerken in dit album',
	'ALBUM_EDIT_CANNOT'				=> 'Je kunt <strong>niet</strong> je afbeeldingen bewerken in dit album',
	'ALBUM_RATE_CAN'				=> 'Je <strong>kunt</strong> de afbeeldingen waarderen in dit album',
	'ALBUM_RATE_CANNOT'				=> 'Je kunt <strong>niet</strong> de afbeeldingen waarderen in dit album',
	'ALBUM_UPLOAD_CAN'				=> 'Je <strong>kunt</strong> nieuwe afbeeldingen invoeren in dit album',
	'ALBUM_UPLOAD_CANNOT'			=> 'Je kunt <strong>geen</strong> nieuwe afbeeldingen invoeren in dit album',
	'ALBUM_VIEW_CAN'				=> 'Je <strong>kunt</strong> afbeeldingen bekijken in dit album',
	'ALBUM_VIEW_CANNOT'				=> 'Je kunt <strong>geen</strong> afbeeldingen bekijken in dit album',

	'BAD_UPLOAD_FILE_SIZE'			=> 'Je invoer bestand is te groot',
	'BROWSING_ALBUM'				=> 'Gebruikers die dit album bekijken: %1$s',
	'BROWSING_ALBUM_GUEST'			=> 'Gebruikers die dit album bekijken: %1$s en %2$d gast',
	'BROWSING_ALBUM_GUESTS'			=> 'Gebruikers die dit album bekijken: %1$s en %2$d gasten',

	'CHANGE_IMAGE_STATUS'			=> 'Verander afbeeldingstatus',
	'CLICK_RETURN_ALBUM'			=> 'Klik %shier%s om terug te gaan naar het album',
	'CLICK_RETURN_IMAGE'			=> 'Klik %shier%s om terug te gaan naar de afbeelding',
	'COMMENT'						=> 'Commentaar',
	'COMMENT_IMAGE'					=> 'Commentaar op een afbeelding in album %s aan het toevoegen',
	'COMMENT_LENGTH'				=> 'Voer hier je commentaar in, het mag niet langer dan <strong>%d</strong> karacters zijn.',
	'COMMENT_ON'					=> 'Commentaar op',
	'COMMENT_STORED'				=> 'Je commentaar is correct opgeslagen.',
	'COMMENT_TOO_LONG'				=> 'Je commentaar is te lang',
	'COMMENTS'						=> 'Commentaren',
	'CONTEST_COMMENTS_STARTS'		=> 'Commentaren op afbeeldingen in deze wedstrijd zijn toegestaan vanaf %s.',
	'CONTEST_ENDED'					=> 'Deze wedstrijd eindigde op %s.',
	'CONTEST_ENDS'					=> 'Deze wedstrijd eindigt op %s.',
	'CONTEST_RATING_STARTED'		=> 'Beoordelingen voor deze wedstrijd zijn gestart op %s.',
	'CONTEST_RATING_STARTS'			=> 'Beoordelingen voor deze wedstrijd starten op %s.',
	'CONTEST_RATING_ENDED'			=> 'Beoordelingen voor deze wedstrijd is geëindigd op %s.',
	'CONTEST_RATING_HIDDEN'			=> 'verborgen',
	'CONTEST_RESULT'				=> 'Wedstrijd',
	'CONTEST_RESULT_1'				=> 'Winnaar',
	'CONTEST_RESULT_2'				=> 'Tweede',
	'CONTEST_RESULT_3'				=> 'Derde',
	'CONTEST_RESULT_HIDDEN'			=> 'De beoordeling van deze afbeelding is verborgen, tot het einde van de wedstrijd op %s.',
	'CONTEST_STARTED'				=> 'De wedstrijd begon op %s.',
	'CONTEST_STARTS'				=> 'De wedstrijd begint op %s.',
	'CONTEST_USERNAME'				=> '<strong>Wedstrijd</strong>',
	'CONTEST_USERNAME_LONG'			=> '<strong>Wedstrijd</strong> » De gebruikersnaam is verborgen tot het einde van de wedstrijd op %s.',
	'CONTEST_WINNERS_OF'			=> 'Winnaar van wedstrijd "%s"',
	
	'DELETE_COMMENT'				=> 'Commentaar verwijderen',
	'DELETE_COMMENT2'				=> 'Commentaar verwijderen?',
	'DELETE_COMMENT2_CONFIRM'		=> 'Weet je zeker dat je dit commentaar wilt verwijderen?',
	'DELETE_IMAGE'					=> 'Verwijderen',
	'DELETE_IMAGE2'					=> 'Afbeelding verwijderen?',
	'DELETE_IMAGE2_CONFIRM'			=> 'Weet je zeker dat je deze afbeelding wilt verwijderen?',
	'DELETED_COMMENT'				=> 'Commentaar verwijderd',
	'DELETED_COMMENT_NOT'			=> 'Commentaar niet verwijderd',
	'DELETED_IMAGE'					=> 'Afbeelding verwijderd',
	'DELETED_IMAGE_NOT'				=> 'Afbeelding niet verwijderd',
	'DESC_TOO_LONG'					=> 'Je omschrijving is te lang',
	'DESCRIPTION_LENGTH'			=> 'Voer hier je beschrijving in, die mag niet langer dan <strong>%d</strong> karacters zijn.',
	'DETAILS'						=> 'Details',
	'DONT_RATE_IMAGE'				=> 'Afbeelding niet beoordelen',

	'EDIT_COMMENT'					=> 'Bewerk commentaar',
	'EDIT_IMAGE'					=> 'Bewerken',
	'EDITED_TIME_TOTAL'				=> 'Laatst bijgewerkt door %s op %s; totaal %d keer bijgewerkt',
	'EDITED_TIMES_TOTAL'			=> 'Laatst bijgewerkt door %s op %s; totaal %d keer bijgewerkt',

	'FAVORITE_IMAGE'				=> 'Voeg toe aan favorieten',
	'FAVORITED_IMAGE'				=> 'De afbeelding is toegevoegd aan je favorieten.',
	'FILE'							=> 'Bestand',
	'FILETYPE_MIMETYPE_MISMATCH'	=> 'Het bestandstype "<strong>%1$s</strong>" sluit niet aan bij het mime-type (%2$s).',
	'FILETYPES_GIF'					=> 'gif',
	'FILETYPES_JPG'					=> 'jpg',
	'FILETYPES_PNG'					=> 'png',

	'IMAGE'							=> 'Afbeelding',
	'IMAGE_#'						=> '1 afbeelding',
	'IMAGE_ALREADY_REPORTED'		=> 'De afbeelding is al gerapporteerd.',
	'IMAGE_BBCODE'					=> 'Afbeelding BBCode',
	'IMAGE_DAY'						=> '%.2f afbeeldingen per dag',
	'IMAGE_DESC'					=> 'Afbeelding beschrijving',
	'IMAGE_LOCKED'					=> 'Sorry, Deze afbeelding is afgesloten. Je kan geen commentaar meer posten op deze afbeeldingen.',
	'IMAGE_NAME'					=> 'Afbeeldingnaam',
	'IMAGE_NOT_EXIST'				=> 'Deze afbeelding bestaat niet',
	'IMAGE_PCT'						=> '%.2f%% van alle afbeeldingen',
	'IMAGE_STATUS'					=> 'Status',
	'IMAGE_URL'						=> 'Afbeelding-URL',
	'IMAGES_#'						=> '%s afbeeldingen',
	'IMAGES_REPORTED_SUCCESSFULLY'	=> 'De afbeelding is succesvol gerapporteerd',
	'IMAGES_UPDATED_SUCCESSFULLY'	=> 'Je afbeelding informatie is succesvol bijgewerkt',
	'INVALID_USERNAME'				=> 'Je gebruikersnaam klopt niet',

	'LAST_COMMENT'					=> 'Meest recente Commentaar',
	'LAST_IMAGE'					=> 'Laatste afbeelding',
	'LOGIN_EXPLAIN_UPLOAD'			=> 'Je moet geregistreerd en ingelogd zijn om afbeeldingen te kunnen uploaden in dit album.',
	'LOOP_EXP'						=> 'Als je meer dan één afbeelding upload kun je <span style="font-weight: bold;">{NUM}</span> meegeven in de Naam en Beschrijving.<br />
										Dan wordt er een volgnummer toegevoegd, beginnend met jouw nummer.  Bijvoorbeeld: "Afbeelding {NUM}" resulteert in "Afbeelding 1", "Afbeelding 2", etc.',

	'MARK_ALBUMS_READ'				=> 'Markeer albums als gelezen',
	'MAX_FILE_SIZE'					=> 'Maximum bestandsgrootte (bytes)',
	'MAX_HEIGHT'					=> 'Maximum afbeeldinghoogte (pixels)',
	'MAX_WIDTH'						=> 'Maximum afbeeldingbreedte (pixels)',
	'MISSING_COMMENT'				=> 'Geen mededeling ingevoerd',
	'MISSING_MODE'					=> 'Geen modus geselecteerd',
	'MISSING_REPORT_REASON'			=> 'Je moet een reden opgeven als een afbeelding rapporteerd.',
	'MISSING_SLIDESHOW_PLUGIN'		=> 'Geen slideshow-uitbreiding gevonden. Neem contact op met de forumbeheerder voor meer information.',
	'MISSING_SUBMODE'				=> 'Geen ondermodus geselecteerd',
	'MISSING_USERNAME'				=> 'Geen gebruikersnaam ingevoerd',
	'MOVE_TO_ALBUM'					=> 'Verplaats naar album',
	'MOVE_TO_PERSONAL'				=> 'Verplaats naar persoonlijk album',
	'MOVE_TO_PERSONAL_MOD'			=> 'Als je deze optie op "ja" zet wordt de afbeelding verplaatst naar het persoonlijke album van de gebruiker. Als de gebruiker nog geen persoonlijk album heeft wordt deze automatisch aangemaakt.',
	'MOVE_TO_PERSONAL_EXPLAIN'		=> 'Als je deze optie op "ja" zet wordt de afbeelding verplaatst naar je persoonlijke album. Als je nog geen persoonlijk album hebt wordt deze automatisch aagemaakt.',

	'NEW_COMMENT'					=> 'Nieuw commentaar',
	'NEW_IMAGES'					=> 'Nieuwe afbeeldingen',
	'NEWEST_PGALLERY'				=> 'Onze meest recente persoonlijk galerij: %s',
	'NO_ALBUMS'						=> 'Deze galerij heeft nog geen albums',
	'NO_COMMENTS'					=> 'Nog geen commentaar',
	'NO_IMAGES'						=> 'Geen afbeeldingen',
	'NO_IMAGES_FOUND'				=> 'Geen afbeeldingen gevonden.',
	'NO_NEW_IMAGES'					=> 'Geen nieuwe afbeeldingen',
	'NO_IMAGES_LONG'				=> 'Er zijn geen afbeeldingen in dit album.',
	'NOT_ALLOWED_FILE_TYPE'			=> 'Deze extensie is niet toegestaan',
	'NOT_RATED'						=> 'Niet beoordeeld',

	'ORDER'							=> 'Volgorde',
	'ORIG_FILENAME'					=> 'Neem bestandsnaam als Afbeeldingnaam (het invoerveld verliest zijn functie)',
	'OUT_OF_RANGE_VALUE'			=> 'Waarde is buiten bereik',

	'PERSONAL_ALBUMS'				=> 'Persoonlijke albums',
	'POST_COMMENT'					=> 'Plaats een commentaar',
	'POST_COMMENT_RATE_IMAGE'		=> 'Commentaar schrijven over en boordelingen geven op een afbeelding',
	'POSTER'						=> 'Gebruiker',

	'RANDOM_IMAGES'					=> 'Willekeurige afbeeldingen',
	'RATE_IMAGE'					=> 'Beoordeel de afbeelding',
	'RATE_STRING'					=> '%1$s (%2$s beoordeling)', // 1.beoordelingsgemiddelde 2.aantal beoordelingen
	'RATES_COUNT'					=> 'Beoordelingen',
	'RATES_STRING'					=> '%1$s (%2$s beoordelingen)',
	'RATING'						=> 'Beoordeling',
	'RATING_SUCCESSFUL'				=> 'De beoordeling van de afbeelding is succesvol geplaatst.',
	'READ_REPORT'					=> 'Lees rapportage bericht',
	'RECENT_COMMENTS'				=> 'Recente commentaren',
	'RECENT_IMAGES'					=> 'Recente Afbeeldingen',
	'REPORT_IMAGE'					=> 'Rapporteer afbeelding',
	'RETURN_ALBUM'					=> '%sKeer terug naar het laatst bezochtje album%s',
	'ROTATE_IMAGE'					=> 'Roteer afbeelding',
	'ROTATE_LEFT'					=> '90° linksom',
	'ROTATE_NONE'					=> 'geen',
	'ROTATE_RIGHT'					=> '90° rechtsom',
	'ROTATE_UPSIDEDOWN'				=> '180° draaien',

	'SEARCH_ALBUM'					=> 'Zoeken in dit albums',
	'SEARCH_ALBUMS'					=> 'Zoeken in albums',
	'SEARCH_ALBUMS_EXPLAIN'			=> 'Selecteer het album of de albums die je wilt doorzoeken. Subalbums worden automatisch meegenomen als je “doorzoek subalbums“ hieronder niet uischakelt.',
	'SEARCH_COMMENTS'				=> 'Alleen commentaren',
	'SEARCH_CONTEST'				=> 'Winnaars',
	'SEARCH_IMAGE_COMMENTS'			=> 'Afbeeldingsnamen, beschrijvingen en commentaren',
	'SEARCH_IMAGE_VALUES'			=> 'Alleen afbeeldingsnamen en beschrijvingen',
	'SEARCH_IMAGENAME'				=> 'Alleen afbeeldingsnamen',
	'SEARCH_RANDOM'					=> 'Willekeurige afbeeldingen',
	'SEARCH_RECENT'					=> 'Recente afbeeldingen',
	'SEARCH_RECENT_COMMENTS'		=> 'Recente commentaren',
	'SEARCH_SUBALBUMS'				=> 'Doorzoek subalbums',
	'SEARCH_TOPRATED'				=> 'Hoogst beoordeelde afbeeldingen',
	'SEARCH_USER_IMAGES'			=> 'Zoek in de gebruikers afbeeldingen',
	'SEARCH_USER_IMAGES_OF'			=> 'Afbeeldingen van %s',
	'SHOW_PERSONAL_ALBUM_OF'		=> 'Toon persoonlijk album van %s',
	'SLIDE_SHOW'					=> 'Diashow',
	'SLIDE_SHOW_HIGHSLIDE'			=> 'Om de diashow te starten, klik op een van de afbeeldingnamen en klik op het "afspelen"-icoon:',
	'SLIDE_SHOW_LYTEBOX'			=> 'Om de diashow te starten, klik op een van de afbeeldingnamen:',
	'SLIDE_SHOW_SHADOWBOX'			=> 'Om de diashow te starten, klik op een van de afbeeldingnamen:',
	'SORT_ASCENDING'				=> 'Oplopend',
	'SORT_DESCENDING'				=> 'Aflopend',
	'SORT_DEFAULT'					=> 'Standaard',
	'STATUS'						=> 'Status',
	'SUBALBUMS'						=> 'onderalbums',
	'SUBALBUM'						=> 'onderalbum',

	'THUMBNAIL_SIZE'				=> 'Miniatuur grootte (pixels)',
	'TOTAL_COMMENTS_OTHER'			=> 'Aantal commentaren <strong>%d</strong>',
	'TOTAL_COMMENTS_ZERO'			=> 'Aantal commentaren <strong>0</strong>',
	'TOTAL_IMAGES'					=> 'Aantal afbeeldingen',
	'TOTAL_PGALLERIES_OTHER'		=> 'Aantal persoonlijke galerijen <strong>%d</strong>',
	'TOTAL_PGALLERIES_SHORT'		=> '%d persoonlijke galerijen ',
	'TOTAL_PGALLERIES_ZERO'			=> 'Aantal persoonlijke galerijen <strong>0</strong>',

	'UNFAVORITE_IMAGE'				=> 'verwijder uit favorieten',
	'UNFAVORITED_IMAGE'				=> 'Deze afbeelding is verwijderd uit je favorieten.',
	'UNFAVORITED_IMAGES'			=> 'De afbeeldingen zijn verwijderd uit je favorieten.',
	'UNLOCK_IMAGE'					=> 'Afbeeldingen vrijgeven',
	'UNWATCH_ALBUM'					=> 'Stop abonnement op album',
	'UNWATCH_IMAGE'					=> 'Stop abonnement op afbeelding',
	'UNWATCHED_ALBUM'				=> 'Je wordt niet meer bericht over nieuwe afbeeldingen in dit album.',
	'UNWATCHED_ALBUMS'				=> 'Je wordt niet meer bericht over nieuwe afbeeldingen in deze albums.',
	'UNWATCHED_IMAGE'				=> 'Je wordt niet meer bericht over nieuwe commentaren over deze afbeelding.',
	'UNWATCHED_IMAGES'				=> 'Je wordt niet meer bericht over nieuwe commentaren over deze afbeeldingen.',
	'UPLOAD_IMAGE'					=> 'Upload Afbeelding',
	'UPLOAD_IMAGE_SIZE_TOO_BIG'		=> 'De afmetingen van je afbeelding zijn te groot',
	'UPLOAD_NO_FILE'				=> 'Je moet het pad en bestandsnaam invullen',
	'UPLOADED_BY_USER'				=> 'Geüpload door',
	'UPLOADED_ON_DATE'				=> 'Geüpload op',
	'USER_NEARLY_REACHED_QUOTA'		=> 'Je mag maar %s afbeeldingen uploaden, maar hebt al %s afbeeldingen geplaatst.  Daarom kun je nog maar %s bestandsnamen opgeven.',
	'USER_REACHED_QUOTA'			=> 'Je mag maar %s afbeeldingen uploaden.<br /><br />Neem voor meer informatie contact op met een beheerder.',
	'USERNAME_BEGINS_WITH'			=> 'Gebruikersnaam begint met',
	'USERS_PERSONAL_ALBUMS'			=> 'Persoonlijke Albums van leden',
	
	'VIEW_ALBUM'					=> 'Bekijk album',
	'VIEW_ALBUM_IMAGE'				=> '1 afbeelding',
	'VIEW_ALBUM_IMAGES'				=> '%s afbeeldingen',
	'VIEW_IMAGE'					=> 'Bekijk afbeelding',
	'VIEW_LATEST_IMAGE'				=> 'Bekijk de meest recente afbeelding',
	'VIEW_SEARCH_RECENT'			=> 'Bekijk recente afbeeldingen',
	'VIEW_SEARCH_RANDOM'			=> 'Bekijk willekeurige afbeeldingen',
	'VIEW_SEARCH_COMMENTED'			=> 'Bekijk recente commentaren',
	'VIEW_SEARCH_CONTESTS'			=> 'Bekijk winnaars',
	'VIEW_SEARCH_TOPRATED'			=> 'Bekijk hoogst beoordeelde afbeeldingen',
	'VIEW_SEARCH_SELF'				=> 'Bekijk eigen afbeeldingen',
	'VIEWING_ALBUM'					=> 'Album %s bekijken',
	'VIEWING_IMAGE'					=> 'Afbeelding in album %s bekijken',
	'VIEWS'							=> 'Aantal keer bekeken',

	'WATCH_ALBUM'					=> 'Abonneer op album',
	'WATCH_IMAGE'					=> 'Abonneer op afbeelding',
	'WATCHING_ALBUM'				=> 'Je wordt bericht over nieuwe afbeeldingen in dit album.',
	'WATCHING_IMAGE'				=> 'Je wordt bericht over nieuwe commentaren over deze afbeelding.',

	'YOUR_COMMENT'					=> 'Jouw commentaar',
	'YOUR_PERSONAL_ALBUM'			=> 'Jouw Persoonlijke Album',
	'YOUR_RATING'					=> 'Jouw beoordeling',
));

?>