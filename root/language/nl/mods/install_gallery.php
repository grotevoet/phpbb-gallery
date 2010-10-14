<?php
/**
*
* install_gallery [Nederlands]
*
* @package phpBB Gallery
* @version $Id: install_gallery.php 194 2010-03-01 15:11:42Z GroteVoet $
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
	'BBCODES_NEEDS_REPARSE'			=> 'De BBCode needs to be rebuild.',

	'CAT_CONVERT'					=> 'converteer phpBB2',
	'CAT_CONVERT_TS'				=> 'converteer TS Gallery',
	'CAT_UNINSTALL'					=> 'phpBB Galerij de-installatie',

	'CHECK_TABLES'					=> 'Controleer tabellen',
	'CHECK_TABLES_EXPLAIN'			=> 'De volgende tabellen moeten bestaan zodat ze gevconverteerd kunnen worden.',

	'CONVERT_SMARTOR_INTRO'			=> 'Converteer van „Album-MOD“ van Smartor naar „phpBB Galerij“',
	'CONVERT_SMARTOR_INTRO_BODY'	=> 'Met dit conversieprogramma kun je je albums, afbeeldingen, beoordelingen en commentaren van de <a href="http://www.phpbb.com/community/viewtopic.php?f=16&t=74772">Album-MOD</a> van Smartor (getest v2.0.56) en <a href="http://www.phpbbhacks.com/download/5028">Full Album Pack</a> (getest v1.4.1) naar phpBB Galerij omzetten.<br /><br /><strong>Let op:</strong> De <strong>permissies</strong> worden <strong>niet meegenomen</strong>.',
	'CONVERT_TS_INTRO'				=> 'Converteer van „TS Gallery“ naar „phpBB Galerij“',
	'CONVERT_TS_INTRO_BODY'			=> 'Met dit conversieprogramma kun je je albums, afbeeldingen, beoordelingen en commentaren van de <a href="http://www.phpbb.com/community/viewtopic.php?f=70&t=610509">TS Gallery</a> (getest v0.2.1) naar phpBB Galerij omzetten.<br /><br /><strong>Let op:</strong> De <strong>permissies</strong> worden <strong>niet meegenomen</strong>.',
	'CONVERT_COMPLETE_EXPLAIN'		=> 'Conversie van je galerij naar phpBB Galerij v%s was succesvol.<br />Controleer a.u.b. dat de instellingen goed zijn overgenomen voordat je je forum weer actief maakt door de install-map te verwijderen.<br /><br /><strong>Let op dat de permissies niet meegenomen zijn.</strong><br /><br />Je moet ook je database ontdoen van gegevens waar geen afbeeldingen meer beschikbaar bij zijn.  Je kunt dit doen onder ".MODs > phpBB Galerij > Galerij schoonmaken".',

	'CONVERTED_ALBUMS'				=> 'De albums zijn succesvol gekopieerd.',
	'CONVERTED_COMMENTS'			=> 'De commentaren zijn succesvol gekopieerd.',
	'CONVERTED_IMAGES'				=> 'De afbeeldingen zijn succesvol gekopieerd.',
	'CONVERTED_MISC'				=> 'Diverse onderdelen geconverteerd.',
	'CONVERTED_PERSONALS'			=> 'De persoonlijke albums zijn succesvol gekopieerd.',
	'CONVERTED_RATES'				=> 'De beoordelingen zijn succesvol gekopieerd.',
	'CONVERTED_RESYNC_ALBUMS'		=> 'Ververs albumstatistieken.',
	'CONVERTED_RESYNC_COMMENTS'		=> 'Ververs commentaren.',
	'CONVERTED_RESYNC_COUNTS'		=> 'Ververs afbeeldingstellers.',
	'CONVERTED_RESYNC_RATES'		=> 'Ververs beoordelingen.',

	'FILE_DELETE_FAIL'				=> 'Bestand kan niet worden verwijderd, moet je handmatig verwijderen',
	'FILES_STILL_EXISTS'			=> 'Bestanden bestaan nog',
	'FILES_REQUIRED_EXPLAIN'		=> '<strong>Benodigd</strong> - Om goed te kunnen functioneren heeft phpBB Galerij toegang nodig om bepaalde bestanden of mappen te kunnen schrijven. Als je “Niet schrijfbaar” ziet moet je de permissies van het bestand of de map zo aanpassen dat phpBB er heen kan schrijven.',
	'FILES_DELETE_OUTDATED'			=> 'Verwijder verouderde bestanden',
	'FILES_DELETE_OUTDATED_EXPLAIN'	=> 'Als je klikt om de verouderde bestanden te verwijderen worden ze totaal verwijderd en kunnen niet teruggezet worden!<br /><br />Let op:<br />Als je nog andere stijlen en/of talen hebt geïnstalleerd moet je daar de betreffende handmatig verwijderen.',
	'FILES_OUTDATED'				=> 'Verouderde bestanden',
	'FILES_OUTDATED_EXPLAIN'		=> '<strong>verouderd</strong> - Om hack-pogingen te voorkomen a.u.b. de volgende bestanden verwijderen.',
	'FOUND_INSTALL'					=> 'Dubbele Installatie',
	'FOUND_INSTALL_EXPLAIN'			=> '<strong>Dubbele Installatie</strong> - Er is een installation van de galerij gevonden! Als je nu doorgaat, worden alle bestaande gegevens overschreven. Alle albums, afbeeldingen en commentaren worden verwijderd! <strong>Daarom wordt een %1$supdate%2$s aangeraden.</strong>',
	'FOUND_VERSION'					=> 'De volgende versie is gevonden',
	'FOUNDER_CHECK'					=> 'Je bent een "Oprichter" van dit forum',
	'FOUNDER_NEEDED'				=> 'Je moet "Oprichter" van dit forum zijn!',

	'INSTALL_CONGRATS_EXPLAIN'		=> 'Je hebt succesvol phpBB Galerij v%s ge&iuml;nstalleerd.<br/><br/><strong>Verwijderen, verplaats of hernoem nu de install map voor je je forum gaat gebruiken.  Zolang de map bestaat zal alleen het Beheerderspaneel (ACP) toegangkelijk zijn.</strong>',
	'INSTALL_INTRO_BODY'			=> 'Met deze optie kun je phpBB Galerij in je forum installeren.',

	'GOTO_GALLERY'					=> 'Ga naar phpBB Galerij',
	'GOTO_INDEX'					=> 'Ga naar forum-index',

 	'MISSING_CONSTANTS'				=> 'Voordat je het installatiescript kunt starten moet je de bijgewerkte bestanden uploaden, in bijzonder includes/constants.php.',
	'MODULES_CREATE_PARENT'			=> 'Cre&eumler hoofd standard-module',
	'MODULES_PARENT_SELECT'			=> 'Kies hoofd module',
	'MODULES_SELECT_4ACP'			=> 'Kies hoofd module voor "beheerderspaneel"',
	'MODULES_SELECT_4LOG'			=> 'Kies hoofd module voor "Galerij-log"',
	'MODULES_SELECT_4MCP'			=> 'Kies hoofd module voor "moderatorpaneel"',
	'MODULES_SELECT_4UCP'			=> 'Kies hoofd module voor "gebruikerspaneel"',
	'MODULES_SELECT_NONE'			=> 'geen hoofd module',

	'NO_INSTALL_FOUND'				=> 'Er is geen installatie gevonden!',

	'OPTIONAL_EXIFDATA'				=> 'Functie "exif_read_data" bestaat',
	'OPTIONAL_EXIFDATA_EXP'			=> 'De exif-module is niet geladen of niet geïnstalleerd.',
	'OPTIONAL_EXIFDATA_EXPLAIN'		=> 'Als de functie bestaat worden de exif gegevens van de afbeeldingen getoond op the afbeeldingspagina.',
	'OPTIONAL_IMAGEROTATE'			=> 'Functie "imagerotate" bestaat',
	'OPTIONAL_IMAGEROTATE_EXP'		=> 'Je moet je versie van de GB bibliotheek opwaarderen. Meest recente versie is %s".',
	'OPTIONAL_IMAGEROTATE_EXPLAIN'	=> 'Alsde funtcie bestaat kun je afbeeldingen draaien tijdens het uploaden en bewerken.',

	'PAYPAL_DEV_SUPPORT'			=> '</p><div class="errorbox">
<h3>Opmerking van de auteur</h3>
<p>Het maken, onderhouden en bijwerken van deze MOD vraagt veel tijd en moeite, dus als je deze MOD waardeert en die waardering ook via een donatie wilt laten blijken, dan wordt dat zeer op prijs gesteld. Mijn Paypal account is <strong>nickvergessen@gmx.de</strong>, of neem contact met me op voor mijn postadres.<br /><br />Het voorgestelde donatiebedrag voor deze MOD is 25,00€ (maar alle beetjes helpen).</p><br />
<a href="http://www.flying-bits.org/go/paypal"><input type="submit" value="Doe PayPal-Donatie" name="paypal" id="paypal" class="button1" /></a>
</div><p>',
	'PHP_SETTINGS'					=> 'PHP instellingen',
	'PHP_SETTINGS_EXP'				=> 'Deze PHP instellingen zijn verplicht voor het installeren en draaien van de galerij.',
	'PHP_SETTINGS_OPTIONAL'			=> 'Optionle PHP instelingen',
	'PHP_SETTINGS_OPTIONAL_EXP'		=> 'Deze PHP instellingen zijn <strong>NIET</strong> verplciht voor gewoon gebruik, maar geven een aantal extra opties.',

	'REQ_GD_LIBRARY'				=> 'GD Bibliotheek is ge&iuml;nstalleerd',
	'REQUIREMENTS_EXPLAIN'			=> 'Voor je verder gaat met de installatie zal phpBB een aantal tests uitvoeren op je server instellingen en bestanden om er zeker van te zijn dat je de installatie kunt doen en phpBB Galerij kunt gebruiken. Lees de resultaten aandachtig en ga niet verder voordat alle verplichte tests succesvol gedaan zijn.',

	'STAGE_ADVANCED_EXPLAIN'		=> 'Kies de hoofd module waar de galerij modules onder komen. Normaliter zou je dit niet hoeven wijzigen.',
	'STAGE_COPY_TABLE'				=> 'Kopieer de database-tabellen',
	'STAGE_COPY_TABLE_EXPLAIN'		=> 'De database-tabellen met de albums en gebruikersgegevens van TS Gallery hebben dezelfde namen als voor phpBB Galerij. Daarom is er een kopie aangemaakt om de gegevens toch te kunnen importeren.',
	'STAGE_CREATE_TABLE_EXPLAIN'	=> 'De database-tabellen die phpBB Galerij gebruikt zijn aangemaakt en gevuld met initi&euml;le gegevens.  Ga verder naar het volgende scherm om de installatie van phpBB Galerij te voltooien.',
	'STAGE_DELETE_TABLES'			=> 'Schoon database op',
	'STAGE_DELETE_TABLES_EXPLAIN'	=> 'De database-inhoud van de Galerij-MOD is verwijderd. Ga verder naar het volgende scherm om de de-installatie van phpBB Galerij af te ronden.',
	'SUPPORT_BODY'					=> 'Volledige ondersteuning zal worden geleverd voor de actuele stabiele versie van phpBB Galerij, gratis. Dit omvat:</p><ul><li>installatie</li><li>instellingen</li><li>technische vragen</li><li>problemen veroorzaakt door mogelijk fouten in het programma</li><li>bijwerken van Release Candidate (RC) versies naar recentere stabiele versies</li><li>Converteren van Smartor\'s Album-MOD voor phpBB 2.0.x naar phpBB Galerij for phpBB3</li><li>Converteren van TS Gallery naar phpBB Galerij</li></ul><p>Het gebruik van Beta-V of Test-versies wordt beperkt aangeraden. Als er aanpassingen zijn is het wenselijk die zo spoedig mogelijk te installeren.</p><p>Ondersteuning wordt geleverd via de fora </p><ul><li><a href="http://www.flying-bits.org/">flying-bits.org - MOD-Autor nickvergessen\'s board</a></li><li><a href="http://www.phpbb.de/">phpbb.de</a></li><li><a href="http://www.phpbb.com/">phpbb.com</a></li></ul><p>',

	'TABLE_ALBUM'					=> 'tabel met de afbeeldingen',
	'TABLE_ALBUM_CAT'				=> 'tabel met de albums',
	'TABLE_ALBUM_COMMENT'			=> 'tabel met de commentaren',
	'TABLE_ALBUM_CONFIG'			=> 'tabel met de instellingen',
	'TABLE_ALBUM_RATE'				=> 'tabel met de beoordelingen',
	'TABLE_EXISTS'					=> 'bestaat',
	'TABLE_MISSING'					=> 'mist',
	'TABLE_PREFIX_EXPLAIN'			=> 'Prefix (voorloop) van de phpBB2-installatie',

	'UNINSTALL_INTRO'					=> 'Welkom bij De-installatie',
	'UNINSTALL_INTRO_BODY'				=> 'Met deze optie kun je phpBB Galerij van je forum de-installeren.<br /><br /><strong>WAARSCHUWING: Alle albums, afbeeldingen en commentaren zullen onherstelbaar gewist worden!</strong>',
	'UNINSTALL_REQUIREMENTS'			=> 'Benodigheden',
	'UNINSTALL_REQUIREMENTS_EXPLAIN'	=> 'Voordat het programma verder gaat mer de de-installatie zal phpBB een aantal tests doen om er zeker van te zijn dat de rechten hebt om de de-installatie van phpBB Galerij te doen.',
	'UNINSTALL_START'					=> 'De-installatie',
	'UNINSTALL_FINISHED'				=> 'De-installatie bijna voltooid',
	'UNINSTALL_FINISHED_EXPLAIN'		=> 'Je hebt de phpBB Galerij succesvol verwijderd.<br/><br/><strong>Nu moet je alleen nog de stappen uit install.xml ongedaan maken en de bestanden van de Galerij verwijderen. Daarna is je forum volledig van de Galerij verlost.</strong></p>',
	
	'UPDATE_INSTALLATION_EXPLAIN'	=> 'Hier kun je je phpBB Galerij-versie bijwerken.',

	'VERSION_NOT_SUPPORTED'			=> 'Sorry, maar updates van voor versie 0.2.0 worden door deze installatie niet ondersteund.',
));

?>