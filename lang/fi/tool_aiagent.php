<?php
// phpcs:disable moodle.Files.BoilerplateComment
//
// This file is part of the tool_aiagent plugin for Moodle.
//
// This software is proprietary and is licensed, not sold. Use, copying,
// modification and distribution are governed by the LMSCloud Commercial
// License; see the LICENSE file in the plugin root for the full terms.
// Unauthorised redistribution or resale is prohibited.

/**
 * Finnish language pack for AI agent.
 * Last updated: 2026-08-03
 *
 * @package    tool_aiagent
 * @category   string
 * @copyright  LMSCloud Limited <info@lmscloud.io>
 * @author     Marina Glancy
 * @license    https://lmscloud.io/products/ai-agent/license LMSCloud Commercial License
 */

defined('MOODLE_INTERNAL') || die();

$string['addon'] = 'Lisäosa';
$string['aiagent:autoapproveall'] = 'Valita automaattisen hyväksynnän tilan "Kaikki", jossa jokainen toimintokutsu suoritetaan ilman vahvistusta';
$string['aiagent:usechat'] = 'Aloittaa tekoälyagentin chatteja (määrää, missä chatin voi aloittaa; ei rajoita sitä, mihin tietoihin chat pääsee käsiksi aloittamisen jälkeen)';
$string['allowfeedback'] = 'Salli palaute';
$string['allowfeedback_desc'] = 'Kun tämä on käytössä, käyttäjät voivat arvioida avustajan vastauksia ja merkitä epäonnistuneita toimintokutsuja. Lähetykset menevät tekoälyagentti-lisäosan kehittäjille (ei millekään LLM:lle), jotta he voivat parantaa Moodlen toimintokutsujen toimivuutta. Lähetettävä sisältö kattaa vain arvioidun viestinvaihdon, ei koko chattia, ja käyttäjä voi muokata tekstiä ennen lähettämistä. Poista tämä käytöstä sivustoilla, joilla on tiukat ulospäin suuntautuvan liikenteen käytännöt.';
$string['anthropic_heading'] = 'Anthropic (Claude)';
$string['anthropic_web_fetch'] = 'Ota käyttöön web fetch -työkalu';
$string['anthropic_web_fetch_desc'] = 'Antaa Claudelle mahdollisuuden hakea ulkoisia URL-osoitteita palvelimen puolella Anthropicin web_fetch-työkalulla. Hyödyllinen, kun chatissa viitataan julkisiin verkkosivuihin, jotka mallin pitäisi lukea. Tämän Moodle-sivuston tiedostot käsitellään erikseen read_file-toiminnolla (joka lähettää ne tarvittaessa Anthropicin Files APIin), joten web_fetchin poistaminen käytöstä ei vaikuta kurssiaineistojen tai liitteiden käyttöön.';
$string['attachedfiles'] = 'Liitetiedostot';
$string['attachfile'] = 'Liitä tiedosto';
$string['autoapprove'] = 'Autom. hyväksyntä';
$string['autoapprove_all'] = 'Kaikki (käytä varoen)';
$string['autoapprove_all_desc'] = 'Ohita kaikki vahvistukset';
$string['autoapprove_all_disabled'] = 'Sinulla ei ole oikeutta käyttää tätä tilaa.';
$string['autoapprove_all_short'] = 'Kaikki';
$string['autoapprove_header'] = 'Hyväksy toimintokutsut automaattisesti';
$string['autoapprove_none'] = 'Ei mitään';
$string['autoapprove_none_desc'] = 'Kysy ennen jokaista toimintokutsua';
$string['autoapprove_readonly'] = 'Vain luku';
$string['autoapprove_readonly_desc'] = 'Hyväksy lukutoiminnot, kysy kirjoitustoiminnoista';
$string['autoapprove_safe'] = 'Turvallinen';
$string['autoapprove_safe_desc'] = 'Hyväksy toiminnot, jotka eivät muuta sivustoa';
$string['autoapprove_safe_examples'] = 'Lukeminen sekä liitteiden koon muuttaminen, kuvien luominen, tiedostojen lähettäminen LLM:lle jne.';
$string['backtoconfiguration'] = 'Takaisin tekoälyagentin määrityksiin';
$string['builtinfunction'] = 'Vakio';
$string['bulk_disabled'] = 'Toimintoja poistettu käytöstä: {$a}';
$string['bulk_disableselected'] = 'Poista valitut käytöstä';
$string['bulk_enabled'] = 'Toimintoja otettu käyttöön: {$a}';
$string['bulk_enableselected'] = 'Ota valitut käyttöön';
$string['bulk_withselected'] = 'Valituille toiminnoille';
$string['capabilities'] = 'Kyvyt';
$string['chat_namelink'] = 'Nimi linkkinä';
$string['chatfrozen'] = 'Tämän chatin taidot eivät ole enää käytettävissä, joten sitä ei voi jatkaa. Aloita sen sijaan uusi chat.';
$string['chathelpcontent'] = '<p>Tekoälyagentti voi lukea ja muokata tämän sivuston sisältöä puolestasi. Useimmat toiminnot pyytävät hyväksyntääsi ennen suorittamista. Voit muuttaa automaattisen hyväksynnän tilaa viestikentässä tiukemmaksi tai väljemmäksi.</p>
<p>Liitä tiedostoja vetämällä ja pudottamalla, liittämällä leikepöydältä tai napsauttamalla paperiliittimen kuvaketta. Kirjoita sitten pyyntösi ja paina <strong>Lähetä</strong>. Enter lähettää viestin, Shift+Enter lisää rivinvaihdon.</p><p>Tekoäly voi tehdä virheitä. Tarkista tulokset.</p>';
$string['chatnopermission'] = 'Tämä chat aloitettiin sivuston alueella, jolla sinulla ei ole enää pääsyä tekoälyagenttiin, joten sitä ei voi jatkaa.';
$string['chatnostartpermission'] = 'Sinulla ei ole oikeutta aloittaa chattia täällä. Avaa tekoälyagentti sivulla, jolla se on tarjolla.';
$string['chatretention'] = 'Chattien säilytysaika';
$string['chatretention_desc'] = 'Chatit, joissa ei ole ollut toimintaa tämän ajan kuluessa, poistetaan käyttäjien chat-historiasta, niiden liitetiedostot poistetaan tältä sivustolta ja tekoälypalveluntarjoajan tallentamien chat-tietojen (tallennettujen vastausten ja lähetettyjen tiedostojen) poistoa pyydetään. Poisto palveluntarjoajan puolella tehdään parhaan mukaan eikä sitä voida taata; määritä vastaava tietojen säilytyskäytäntö myös palveluntarjoajan tililläsi. Viestit ja käyttötiedot säilytetään raportointia varten, kunnes alla oleva lokien säilytysaika päättyy. Arvo 0 säilyttää chatit ikuisesti.';
$string['closeconfirm_body'] = 'Ikkunan sulkeminen ei poista chattia. Voit avata sen uudelleen milloin tahansa Aiemmat chatit -valikosta. Chatit poistetaan automaattisesti {$a} päivän kuluttua.';
$string['closeconfirm_body_noretention'] = 'Ikkunan sulkeminen ei poista chattia. Voit avata sen uudelleen milloin tahansa Aiemmat chatit -valikosta.';
$string['closeconfirm_close'] = 'Sulje chat';
$string['closeconfirm_dontshowagain'] = 'Älä näytä tätä uudelleen';
$string['closeconfirm_title'] = 'Suljetaanko tämä chat?';
$string['component'] = 'Komponentti';
$string['component_filesandimages'] = 'Tiedostojen ja kuvien käsittely';
$string['configuration'] = 'Tekoälyagentin määritykset';
$string['confirmdeleteskill'] = 'Haluatko varmasti poistaa tämän taidon?';
$string['contextevent_opened'] = 'Avattu kohteesta {$a}';
$string['contextevent_page'] = 'Sivu · {$a}';
$string['copyresponse'] = 'Kopioi vastaus';
$string['copyurl'] = 'Kopioi URL-osoite';
$string['datasource_chats'] = 'Tekoälyagentin chatit';
$string['datasource_usage'] = 'Tekoälyagentin käyttö';
$string['deletechat_menu'] = 'Poista chat';
$string['deletechat_named'] = 'Poista chat: {$a}';
$string['disablefunction'] = 'Poista tämä toiminto käytöstä';
$string['dragtoresize'] = 'Muuta kokoa vetämällä';
$string['dynamicdiscovery'] = 'Dynaaminen toimintojen haku';
$string['dynamicdiscovery_automatic'] = 'Automaattinen';
$string['dynamicdiscovery_desc'] = 'Optimoi tokenien käyttöä hakemalla toimintoja vain tarvittaessa. Tätä suositellaan, jos käytössä on suuri määrä verkkopalvelutoimintoja. Automaattisessa tilassa tämä otetaan käyttöön, jos käytettävissä on yli {$a} toimintoa. Joillakin tekoälypalveluntarjoajilla on rajoitus toimintojen määrälle (esimerkiksi OpenAIn raja on 128).';
$string['dynamicdiscovery_off'] = 'Pois käytöstä';
$string['dynamicdiscovery_on'] = 'Käytössä';
$string['enabled'] = 'Käytössä';
$string['enablefunction'] = 'Ota tämä toiminto käyttöön';
$string['entity_aiagentfunction'] = 'Tekoälyagentin toiminto';
$string['entity_chat'] = 'Chat';
$string['entity_externalfunction'] = 'Verkkopalvelutoiminto';
$string['entity_message'] = 'Viesti';
$string['entity_placement'] = 'Sijoittelu';
$string['entity_skill'] = 'Taito';
$string['entity_usage'] = 'Tokenien käyttö';
$string['error_interrupted_function'] = 'Toimintokutsu keskeytyi ennen valmistumista. Se on voinut tehdä muutoksia osittain; tarkista tilanne ennen uutta yritystä.';
$string['error_interrupted_llm'] = 'Yhteys tekoälypalveluntarjoajaan katkesi. Napsauta "Yritä uudelleen" toistaaksesi pyynnön.';
$string['errordetail'] = '{$a}';
$string['erroremptymessage'] = 'Viesti ei voi olla tyhjä.';
$string['errorfullscreendisabled'] = 'Koko näytön chat-näkymä ei ole käytössä tällä sivustolla.';
$string['errorinvalidchat'] = 'Chattia ei löytynyt tai pääsy on evätty.';
$string['errorinvalidname'] = 'Nimi ei voi olla tyhjä.';
$string['errormissingfeedbackparams'] = 'Viesti tai palautteen tyyppi puuttuu.';
$string['errornopendingfunction'] = 'Odottavia toimintokutsuja ei ole.';
$string['errornoprovider'] = 'Yhtään tekoälypalveluntarjoajaa ei ole käytettävissä. Tekoälyagentti käyttää "Luo tekstiä" -toiminnon asetuksia, joten varmista, että se on määritetty ja otettu käyttöön vähintään yhdelle tekoälypalveluntarjoajalle sivuston hallinnassa.';
$string['errornoprovider_link'] = 'Määritä tekoälypalveluntarjoajat.';
$string['errornoretryresponse'] = 'Ei epäonnistunutta vastausta, jota voisi yrittää uudelleen.';
$string['errorpendingfunctions'] = 'Hyväksy tai hylkää ensin odottavat toimintokutsut.';
$string['errorprovider_blocked_prompt'] = '{$a->provider} esti kehotteen: {$a->reason}';
$string['errorprovider_blocked_response'] = '{$a->provider} esti vastauksen: {$a->reason}';
$string['errorprovider_no_content'] = '{$a} ei palauttanut sisältöä.';
$string['errorprovider_no_content_with_reason'] = '{$a->provider} ei palauttanut sisältöä (päättymisen syy: {$a->reason}).';
$string['errorresponses_endpoint_invalid'] = 'Tekoälypalveluntarjoajan kanssa viestimiseen käytettävä päätepiste ei kelpaa tai siihen ei saada yhteyttä.';
$string['errorresponses_endpoint_invalid_config'] = 'Lisäosa yritti käyttää osoitetta {$a->endpoint} OpenAIn Responses API -päätepisteenä, mutta pyyntö epäonnistui. Avaa {$a->settingslink} ja tarkista Responses API -päätepiste tai vaihda API-tyypiksi Chat Completions.';
$string['errorresponses_endpoint_reply'] = 'Palveluntarjoajan vastaus: {$a}';
$string['errorresponses_provider_switch'] = 'Tätä chattia ei voi jatkaa OpenAIn Responses APIlla, koska se aloitettiin toisella tekoälypalveluntarjoajalla. Aloita uusi chat tai vaihda takaisin alkuperäiseen palveluntarjoajaan (tai OpenAIn Chat Completions -rajapintaan) jatkaaksesi tätä.';
$string['errorrootnotfound'] = 'Tämän chatin aloitusviestiä ei löytynyt.';
$string['exportskill'] = 'Vie';
$string['feedback_modal_freetextlabel'] = 'Vielä jotain? (valinnainen)';
$string['feedback_modal_freetextplaceholder_negative'] = 'Mikä meni pieleen? Kerro niin tarkasti kuin haluat.';
$string['feedback_modal_freetextplaceholder_positive'] = 'Mikä toimi hyvin? (valinnainen)';
$string['feedback_modal_freetextplaceholder_toolerror'] = 'Mikä tässä toimintokutsussa meni pieleen?';
$string['feedback_modal_intro_negative'] = 'Kiitos ilmoituksesta. Palautteesi lähetetään tekoälyagentti-lisäosan kehittäjille (ei tekoälypalveluntarjoajalle), jotta he voivat parantaa Moodlen toimintokutsujen toimivuutta.';
$string['feedback_modal_intro_positive'] = 'Kiitos! Palautteesi lähetetään tekoälyagentti-lisäosan kehittäjille (ei tekoälypalveluntarjoajalle), jotta he voivat säilyttää sen mikä toimii ja parantaa sitä mikä ei toimi.';
$string['feedback_modal_intro_toolerror'] = 'Merkitse tämä toimintokutsu ongelmalliseksi. Palautteesi lähetetään tekoälyagentti-lisäosan kehittäjille (ei tekoälypalveluntarjoajalle), jotta he voivat korjata taustalla olevan verkkopalvelun tai parantaa sitä, miten tekoäly käyttää sitä.';
$string['feedback_modal_send'] = 'Lähetä palaute';
$string['feedback_modal_sending'] = 'Lähetetään...';
$string['feedback_modal_snapshotlabel'] = 'Mitä lähetetään (voit muokata)';
$string['feedback_modal_title_positive'] = 'Kerro, mikä toimi';
$string['feedbackcat_negative_misunderstood'] = 'Ymmärsi kysymykseni väärin';
$string['feedbackcat_negative_notfollowed'] = 'Ei noudattanut ohjeita';
$string['feedbackcat_negative_other'] = 'Jokin muu';
$string['feedbackcat_negative_wronginfo'] = 'Väärää tai keksittyä tietoa';
$string['feedbackcat_negative_wrongtoolused'] = 'Käytti väärää toimintoa';
$string['feedbackcat_positive_accurate'] = 'Paikkansapitävä';
$string['feedbackcat_positive_goodexplanation'] = 'Selkeä selitys';
$string['feedbackcat_positive_helpful'] = 'Hyödyllinen';
$string['feedbackcat_positive_other'] = 'Jokin muu';
$string['feedbackcat_positive_welltimed'] = 'Oikea toiminto tehtävään';
$string['feedbackcat_toolerror_misleadingresult'] = 'Tulos oli harhaanjohtava';
$string['feedbackcat_toolerror_other'] = 'Jokin muu';
$string['feedbackcat_toolerror_toolerror'] = 'Toiminto palautti virheen';
$string['feedbackcat_toolerror_wrongargs'] = 'Väärät argumentit';
$string['feedbackcat_toolerror_wrongtool'] = 'Väärä toiminto tehtävään';
$string['feedbackdisabled'] = 'Sivuston ylläpitäjä on poistanut palautteen keräämisen käytöstä.';
$string['feedbackfailed'] = 'Palautetta ei voitu lähettää. Yritä myöhemmin uudelleen.';
$string['feedbackflagfunctioncall'] = 'Merkitse tämä toimintokutsu';
$string['feedbacksubmitted'] = 'Palaute lähetetty';
$string['feedbackthanks'] = 'Kiitos palautteestasi!';
$string['feedbackthumbdown'] = 'Ilmoita ongelmasta tässä vastauksessa';
$string['feedbackthumbup'] = 'Tämä vastaus oli hyödyllinen';
$string['feedbackvalidation_categoryrequired'] = 'Valitse vähintään yksi luokka.';
$string['functionapprovecount'] = 'Hyväksy {$a} kutsua';
$string['functioncall_actions'] = 'Hyväksy tai hylkää toimintokutsu';
$string['functioncall_chip_action'] = 'Vaihda automaattisen hyväksynnän tilaa';
$string['functioncalldetails'] = 'Toimintokutsun tiedot';
$string['functiondeny'] = 'Hylkää';
$string['functiondenyall'] = 'Hylkää kaikki';
$string['functionloopguardbody'] = 'Tämä toiminto on jo suoritettu {$a} kertaa samalla syötteellä. Automaattinen hyväksyntä on keskeytetty mahdollisen silmukan vuoksi; hyväksy jatkaaksesi.';
$string['functionloopguardheading'] = 'Toistuva kutsu.';
$string['functionname'] = 'Toiminnon nimi';
$string['functionparameters'] = 'Parametrit';
$string['functionresult'] = 'Tulos';
$string['functionresultdiscarded'] = 'Tulos oli liian suuri ({$a}) ja se hylättiin. Rajaa pyyntöä suodattamalla, pyytämällä vähemmän kenttiä tai käyttämällä tarkempaa toimintoa. Saman kutsun toistaminen tuottaa saman virheen.';
$string['functions_intro'] = '<p><b>Kaikki verkkopalvelutoiminnot eivät sovi tekoälyagentille.</b> Osa on tehty selaimen ja palvelimen väliseen viestintään (merkitty AJAX) tai kirjautumattomille käyttäjille (Ilman kirjautumista), ja joillekin on parempia vaihtoehtoja. Osa AJAX-toiminnoista toimii tekoälyagentin kanssa hyvin, mutta useimmat eivät. Tekoälyagentti-lisäosa antaa Moodlen ytimen ja vakiolisäosien toiminnoille relevanssipisteet (1-10) ja ottaa käyttöön ne, joiden pistemäärä on vähintään 5. Lisäosien toimintoja ei pisteytetä; sen sijaan kaikki niiden ei-AJAX-toiminnot otetaan käyttöön automaattisesti. Tällä sivulla voit käydä läpi käytettävissä olevat toiminnot ja ottaa yksittäisiä toimintoja käyttöön tai poistaa niitä käytöstä.</p><p>Kun toiminto vaatii yhden tai useamman kyvyn, se ei ole käytettävissä käyttäjille, joilla ei ole vähintään yhtä näistä kyvyistä jossakin sivuston kontekstissa. Ytimen ja vakiolisäosien osalta tekoälyagentti-lisäosa asettaa nämä kyvyt oikein. Lisäosien osalta kyvyt otetaan toiminnon määrittelystä, ja koska Moodle ei itse valvo tätä tarkistusta, ne voivat olla virheellisiä.</p>';
$string['functions_report'] = 'Tekoälyagentin toiminnot';
$string['functionstatus_denied'] = 'Hylätty';
$string['functionstatus_failed'] = 'Epäonnistui';
$string['functionstatus_pending'] = 'Odottaa hyväksyntää';
$string['functionstatus_processing'] = 'Suoritetaan...';
$string['functiontype'] = 'Tyyppi';
$string['functiontype_help'] = 'Verkkopalvelutoiminnon tyyppi ja sen ominaisuudet:

* **Luku**: hakee tietoja muuttamatta mitään
* **Kirjoitus**: luo tai muuttaa tietoja
* **AJAX**: Moodlen sisäisessä käytössä selaimen ja palvelimen välisiin pyyntöihin, sopii harvemmin tekoälyagentin toiminnoksi
* **Ilman kirjautumista**: käytettävissä kirjautumattomille käyttäjille, sopii sekin harvemmin tekoälyagentin toiminnoksi';
$string['functiontype_read'] = 'Luku';
$string['functiontype_write'] = 'Kirjoitus';
$string['gemini_api_generatecontent'] = 'generateContent (vakaa)';
$string['gemini_api_interactions'] = 'Interactions API (beeta)';
$string['gemini_api_type'] = 'API-tyyppi';
$string['gemini_api_type_desc'] = 'Mitä Gemini-rajapintaa käytetään monivuoroisissa chateissa. generateContent on tavallinen tilaton päätepiste, ja se rakentaa koko viestitaulukon uudelleen joka vuorolla. Interactions API on tällä hetkellä beetavaiheessa; se tallentaa keskustelun tilan Googlen puolelle (joten joka vuorolla lähetetään vain uusi syöte), mutta sen skeema voi muuttua ilman ennakkoilmoitusta.';
$string['gemini_builtin_code_execution'] = 'Ota käyttöön Code Execution -työkalu';
$string['gemini_builtin_code_execution_desc'] = 'Antaa Geminille mahdollisuuden kirjoittaa ja suorittaa Python-koodia hiekkalaatikossa matemaattisten tehtävien ratkaisemiseksi tai tietojen käsittelemiseksi. Vain Gemini 3 -mallit ja uudemmat; Gemini 2.5:ssä ja sitä vanhemmissa asetus ohitetaan huomautuksetta, koska nämä mallit eivät voi yhdistää sisäänrakennettuja työkaluja omiin toimintokutsuihin.';
$string['gemini_builtin_google_search'] = 'Ota käyttöön Google-hakuun pohjautuminen';
$string['gemini_builtin_google_search_desc'] = 'Antaa Geminille mahdollisuuden pohjata vastauksensa ajantasaisiin verkkohaun tuloksiin. Vain Gemini 3 -mallit ja uudemmat; Gemini 2.5:ssä ja sitä vanhemmissa asetus ohitetaan huomautuksetta, koska nämä mallit eivät voi yhdistää sisäänrakennettuja työkaluja omiin toimintokutsuihin. Jokainen hakukysely laskutetaan erikseen.';
$string['gemini_builtin_url_context'] = 'Ota käyttöön URL Context -työkalu';
$string['gemini_builtin_url_context_desc'] = 'Antaa Geminille mahdollisuuden lukea ja analysoida sisältöä julkisista URL-osoitteista, jotka käyttäjä mainitsee. Vain Gemini 3 -mallit ja uudemmat; Gemini 2.5:ssä ja sitä vanhemmissa asetus ohitetaan huomautuksetta, koska nämä mallit eivät voi yhdistää sisäänrakennettuja työkaluja omiin toimintokutsuihin. URL-osoitteiden on oltava julkisesti saatavilla (ei localhostia, ei kirjautumista).';
$string['gemini_heading'] = 'Google Gemini';
$string['hint_splitview'] = 'Haluatko käyttää tätä chattia sivustosi rinnalla? Vedä <a href="{$a}">{$a}</a> uuteen ikkunaan tai avaa se hiiren oikealla painikkeella selaimesi jaettuun näkymään.';
$string['imagedimensions'] = '{$a->width}×{$a->height} px';
$string['imagepreviewinfo'] = 'Tiedosto {$a->size}, mitat {$a->dimensions}. Esikatselu {$a->preview} ({$a->scale} %).';
$string['importskill'] = 'Tuo taitoja';
$string['importskill_addmore'] = 'Lisää tiedostoja...';
$string['importskill_button'] = 'Tuo {$a} taitoa';
$string['importskill_buttonone'] = 'Tuo 1 taito';
$string['importskill_choose'] = 'Valitse tiedostoja...';
$string['importskill_drophint'] = 'Vedä taitotiedostot tähän tai käytä painiketta.';
$string['importskill_fileone'] = '1 tiedosto valittu';
$string['importskill_files'] = '{$a} tiedostoa valittu';
$string['importskill_statusinvalid'] = 'Ei taitotiedosto';
$string['importskill_statusnew'] = 'Uusi taito';
$string['importskill_statusupdate'] = 'Päivittää kohteen {$a}';
$string['importskill_summarynew'] = 'Uusia: {$a}';
$string['importskill_summaryskipped'] = 'Ohitettuja: {$a}';
$string['importskill_summaryupdate'] = 'Päivitettäviä: {$a}';
$string['importskill_toolarge'] = 'Taidon tiedot ovat liian suuret (enintään {$a}).';
$string['inlinefilecharlimit'] = 'Upotetun tiedostosisällön raja';
$string['inlinefilecharlimit_desc'] = 'Enimmäismäärä tekstitiedostoa, joka voidaan upottaa suoraan chattiin, kun tiedosto luetaan upotettuna. Pidempi sisältö katkaistaan. Upotusta käytetään, kun malli pyytää sitä, ja varakeinona niille tekoälypalveluntarjoajille, jotka eivät voi ottaa tiedostoja vastaan. Upotettu sisältö lähetetään uudelleen chat-historian mukana joka vuorolla, joten korkea raja kasvattaa tokenien käyttöä.';
$string['invalidparameter'] = 'Virheellinen parametri havaittu: {$a}';
$string['isajax'] = 'AJAX';
$string['licenseactivate'] = 'Aktivoi lisenssi';
$string['licenseactivate_help'] = 'Syötä lisenssiavain, jonka sait sähköpostitse LMSCloudilta. Lisenssiavaimen voi aktivoida rajallisella määrällä sivustoja (yleensä kahdella). Voit poistaa aktivoinnin milloin tahansa käyttääksesi avainta toisella sivustolla.';
$string['licensedeactivate'] = 'Poista käytöstä';
$string['licensedeactivate_help'] = 'Poista lisenssiavain käytöstä tällä sivustolla, jotta sitä voi käyttää toisella sivustolla.';
$string['licenseerror_deactivate'] = 'Lisenssin poistaminen käytöstä ei onnistunut. Palvelin voi olla tilapäisesti tavoittamattomissa; yritä myöhemmin uudelleen.';
$string['licenseerror_deactivate_forced'] = 'Tämä lisenssi on asetettu palvelimen asetuksissa (config.php), eikä sitä voi poistaa käytöstä tältä sivulta.';
$string['licenseerror_invalid'] = 'Lisenssiavain on virheellinen tai sitä ei voitu aktivoida.';
$string['licenseerror_limit'] = 'Tälle lisenssiavaimelle ei ole vapaita paikkoja. Poista ensin toinen sivusto käytöstä ja yritä sitten uudelleen.';
$string['licenseerror_transport'] = 'Lisenssipalvelimeen ei saatu yhteyttä. Tarkista yhteys ja yritä uudelleen.';
$string['licensekey'] = 'Lisenssiavain';
$string['licenselocked_expired'] = 'Tämä sivusto ei ole vahvistanut lisenssiään yli 14 päivään. Tarkista lisenssi uudelleen palauttaaksesi käyttöoikeuden.';
$string['licenselocked_key_rejected'] = 'Tämä lisenssiavain ei ole enää voimassa tällä sivustolla.';
$string['licenselocked_url_mismatch'] = 'Tämän sivuston verkko-osoite on muuttunut; lisenssin haltijan on hyväksyttävä se.';
$string['licensemanageinsettings'] = 'Hallitse lisenssiä tekoälyagentin asetuksissa.';
$string['licenserecheck'] = 'Tarkista uudelleen';
$string['licensesetting'] = 'Tekoälyagentin lisenssi';
$string['licensesetting_desc'] = 'Aktivoi tämän sivuston tekoälyagentin lisenssi, tarkista se uudelleen tai poista se käytöstä.';
$string['licensestatus_materialsmissing'] = 'Tekoälyagentin lisenssi on voimassa, mutta ladatut aineistot puuttuvat, joten yhtään toimintoa ei ole käytettävissä. Tarkista uudelleen ladataksesi ne uudestaan.';
$string['licensestatus_notactivated'] = 'Tekoälyagentin käyttö tällä sivustolla vaatii lisenssin.';
$string['licensestatus_valid'] = 'Tekoälyagentin lisenssi on voimassa.';
$string['loginrequired'] = 'Vaatii kirjautuneen käyttäjän';
$string['logretention'] = 'Chat-lokien säilytysaika';
$string['logretention_desc'] = 'Niiden chattien viestit ja tokenien käyttötiedot, joissa ei ole ollut toimintaa tämän ajan kuluessa, poistetaan tietokannasta pysyvästi. Tämä koskee vain chatteja, jotka on jo poistettu chat-historiasta joko käyttäjän toimesta tai yllä olevalla asetuksella. Arvo 0 säilyttää lokit ikuisesti.';
$string['maxfilesize'] = 'Tiedoston enimmäiskoko LLM:lle';
$string['maxfilesize_desc'] = 'Estää käyttäjiä lähettämästä liian suuria tiedostoja LLM:lle. Suuret tiedostot kuluttavat tokeneita nopeasti ja kasvattavat kustannuksia. Tätä kokoa suuremmat tiedostot hylätään virheilmoituksella ennen kuin yksikään tavu lähtee sivustolta.

Tekoälypalveluntarjoajat hylkäävät joka tapauksessa tiedostot, jotka ylittävät niiden omat pyyntökohtaiset rajat (Anthropic 32 Mt, Gemini 50 Mt upotettuna, OpenAI 512 Mt).';
$string['maxfunctionresultsize'] = 'Toiminnon tuloksen enimmäiskoko';
$string['maxfunctionresultsize_desc'] = 'Enimmäismäärä tietoa, jonka yksittäinen toiminto saa palauttaa tekoälymallille. Joissakin Moodlen toiminnoissa ei ole suodatinta, ja ne palauttavat sivuston kaikki käyttäjät tai kaikki kurssit, mikä hukuttaa mallin ja kuluttaa tokeneita joka seuraavalla vuorolla. Tämän rajan ylittävä tulos hylätään ja mallia kehotetaan rajaamaan pyyntöä. Arvo nolla poistaa rajan. Tiedoston lukeminen upotettuna on poikkeus; käytä siihen asetusta "Upotetun tiedostosisällön raja".';
$string['newchat'] = 'Uusi chat';
$string['newchatchooser_blank_sub'] = 'Ei kontekstia. Yleisavustaja.';
$string['newchatchooser_clone'] = 'Sama kuin tämä chat';
$string['newchatchooser_continue'] = 'Jatka siitä mihin jäit';
$string['newchatchooser_desc_default'] = 'Aloita uusi chat tällä sivulla tai jatka siitä mihin jäit.';
$string['newchatchooser_desc_full'] = 'Aloita yleinen chat tai jatka siitä mihin jäit.';
$string['newchatchooser_desc_multi'] = 'Tällä sivulla on muutama aloituskohta. Valitse yksi tai jatka siitä mihin jäit.';
$string['newchatchooser_error'] = 'Uuden chatin aloittaminen ei onnistunut. Yritä uudelleen.';
$string['newchatchooser_none'] = 'Täällä ei ole sivua, jolla voisit aloittaa uuden chatin.';
$string['newchatchooser_onthispage'] = 'Tällä sivulla:';
$string['newchatchooser_title'] = 'Aloita uusi chat';
$string['nfilesattached'] = 'Liitetiedostoja: {$a}';
$string['nonauth'] = 'Ilman kirjautumista';
$string['numfiles'] = 'Tiedostoja: {$a}';
$string['numimages'] = 'Kuvia: {$a}';
$string['numotherfiles'] = 'Muita tiedostoja: {$a}';
$string['openai_api_chatcompletions'] = 'Chat Completions';
$string['openai_api_responses'] = 'Responses API';
$string['openai_api_type'] = 'API-tyyppi';
$string['openai_api_type_desc'] = 'Mitä OpenAI-rajapintaa käytetään monivuoroisissa chateissa. Responses API ylläpitää keskustelun tilaa palvelimen puolella, joten joka vuorolla lähetetään vain uusi syöte (pienemmät kustannukset, yksinkertaisempi historia). Chat Completions rakentaa koko viestitaulukon uudelleen jokaisella pyynnöllä (laajempi yhteensopivuus palveluntarjoajien kanssa).<br><br>Responses APIa tukevat: <strong>{$a}</strong>. Muut palveluntarjoajat siirtyvät huomautuksetta Chat Completions -rajapintaan tästä asetuksesta riippumatta.';
$string['openai_heading'] = 'OpenAI (tai yhteensopiva)';
$string['openlink'] = 'Avaa linkki';
$string['placeholder'] = 'Kirjoita viesti...';
$string['placement_add'] = 'Lisää sijoittelu';
$string['placement_confirmdelete'] = 'Haluatko varmasti poistaa tämän sijoittelun?';
$string['placement_copyof'] = '{$a} (kopio)';
$string['placement_defaultname'] = 'Tekoälyagentti';
$string['placement_deleted'] = 'Sijoittelu poistettu.';
$string['placement_duplicated'] = 'Sijoittelu monistettu.';
$string['placement_edit'] = 'Muokkaa sijoittelua';
$string['placement_initialskills'] = 'Aloitustaidot';
$string['placement_initialskills_help'] = 'Taidot, jotka ladataan automaattisesti chatin alkaessa. Valinnainen; agentti voi silti ladata minkä tahansa taidon tarvittaessa. Asettamasi taidot ohjaavat myös tätä sijoittelua: käyttäjät, joilla ei ole pääsyä yhteenkään niistä, eivät näe painiketta eivätkä valikkokohtaa, ja jos kaikki asetetut taidot myöhemmin poistetaan tai poistetaan käytöstä, sijoittelu lakkaa näkymästä.';
$string['placement_intro'] = '<p>Sijoittelujen avulla voit tarjota agentteja, jotka on räätälöity tiettyyn tehtävään. Jokainen sijoittelu lisää tekoälyagentin painikkeen sivuille, joiden URL-osoite vastaa jotakin sen maskia, ja voi aloittaa chatin ennalta määritetyillä aloitustaidoilla ja tervetulotekstillä. Jos aloitustaidot on asetettu, käyttäjät, joilla ei ole pääsyä yhteenkään niistä, eivät näe painiketta.</p><p>Aloitustaidot määrittävät vain chatin lähtökohdan; agentti pääsee edelleen käsiksi kaikkiin käytössä oleviin toimintoihin, ei vain taitojen toimintoihin.</p>';
$string['placement_location'] = 'Painikkeen sijainti';
$string['placement_location_floating'] = 'Kelluva painike';
$string['placement_location_h1'] = 'Sivun otsikko (H1)';
$string['placement_location_h2'] = 'Toissijainen otsikko (H2)';
$string['placement_menuheading'] = 'Kysy tekoälyagentilta';
$string['placement_name'] = 'Nimi';
$string['placement_name_help'] = 'Näytetään käyttäjille: käyttäjävalikossa, painikkeen työkaluvihjeenä ja (kun useampi sijoittelu osuu samalle sivulle) painikkeen valikossa.';
$string['placement_save'] = 'Tallenna sijoittelu';
$string['placement_saved'] = 'Sijoittelu tallennettu.';
$string['placement_skillmissing'] = 'Taitoa ei löydy';
$string['placement_urlmask'] = 'URL-maskit';
$string['placement_urlmask_help'] = 'Yksi kuvio riviä kohden. Käytä *-merkkiä jokerimerkkinä, esimerkiksi /course/view.php* tai /mod/*/view.php*. Huomaa: sivuilla, joilla tarkempi sijoittelu kohdistuu samaan sijaintiin, laaja /*-sijoittelu piilotetaan, jotta käyttäjät näkevät vain osuvamman.';
$string['placement_urlmask_invalid'] = 'Jokaisen URL-maskin on alettava vinoviivalla: "{$a}" ei ala.';
$string['placement_welcome'] = 'Oma tervetuloteksti (valinnainen)';
$string['placement_welcome_help'] = 'Korvaa tavallisen tervetuloviestin chatin aloitusnäytöllä. Jätä tyhjäksi käyttääksesi oletusta.';
$string['pluginname'] = 'Tekoälyagentti';
$string['previouschats'] = 'Aiemmat chatit';
$string['privacy:metadata:aiprovider'] = 'Chatit lähetetään sivuston ylläpitäjän valitsemalle tekoälypalveluntarjoajalle, kuten OpenAIlle, Azure OpenAIlle, Google Geminille tai Anthropicille, jotta se voi luoda vastauksen. Lisäosa lähettää jokaisen pyynnön suoraan palveluntarjoajalle eikä Moodlen tekoälyalijärjestelmän kautta. Se, mikä yritys tiedot vastaanottaa ja kuinka kauan niitä siellä säilytetään, riippuu sivustolle määritetystä palveluntarjoajasta ja sen omista ehdoista.';
$string['privacy:metadata:aiprovider:files'] = 'Tiedostot, jotka käyttäjä liittää chattiin, sekä tiedostot, jotka agentti lukee sivustolta käyttäjän puolesta, lähetetään jotta malli voi lukea niiden sisällön.';
$string['privacy:metadata:aiprovider:messages'] = 'Chat-historia, joka lähetetään uudelleen joka vuorolla: käyttäjän kehotteet, avustajan vastaukset ja agentin suorittamien Moodle-toimintojen tulokset, jotka voivat sisältää muiden käyttäjien henkilötietoja.';
$string['privacy:metadata:aiprovider:userid'] = 'Chattia käyvän käyttäjän tunnus, joka sisällytetään mallille annettaviin ohjeisiin, jotta se voi toimia kyseisen käyttäjän puolesta.';
$string['privacy:metadata:core_files'] = 'Tekoälyagentin viesteihin liitetyt tiedostot.';
$string['privacy:metadata:feedback'] = 'Kun palaute on käytössä ja käyttäjä arvioi vastauksen tai ilmoittaa epäonnistuneesta toimintokutsusta, arvioitu viestinvaihto lähetetään tekoälyagentti-lisäosan kehittäjille, jotta agentin toimintaa voidaan parantaa. Mitään ei lähetetä, ellei käyttäjä itse päätä lähettää palautetta, ja ominaisuuden voi kytkeä kokonaan pois asetuksella "Salli palaute".';
$string['privacy:metadata:feedback:freetext'] = 'Kommentti, jonka käyttäjä halutessaan kirjoittaa palautetta lähettäessään, lähetetään sellaisenaan.';
$string['privacy:metadata:feedback:snapshot'] = 'Ote arvioidusta viestinvaihdosta: käyttäjän kysymys, avustajan vastaukset ja sen kutsumien toimintojen nimet. Sähköpostiosoitteet peitetään, ja näiden toimintojen argumentit ja tulokset jätetään pois, lukuun ottamatta agentin omia toimintohakuja. Käyttäjä voi muokata tekstiä ennen sen lähettämistä.';
$string['privacy:metadata:preference:tool_aiagent_closeconfirm_hidden'] = 'Asetus, jonka mukaan sulkemisen vahvistusikkunaa ei näytetä uudelleen.';
$string['privacy:metadata:preference:tool_aiagent_overlaysize'] = 'Koko, jonka käyttäjä on antanut kelluvalle chat-ikkunalle.';
$string['privacy:metadata:preference:tool_aiagent_sidebarwidth'] = 'Leveys, jonka käyttäjä on antanut chatin sivupalkille.';
$string['privacy:metadata:preference:tool_aiagent_viewtype'] = 'Chat-näkymän tyyppi (kelluva ikkuna, sivupalkki tai koko näyttö), jota käyttäjä käytti viimeksi.';
$string['privacy:metadata:tool_aiagent_conversation'] = 'Käyttäjän ja tekoälyagentin väliset chatit. Käyttäjän poistamat chatit arkistoidaan poistamisen sijaan, jotta tokenien käyttöä voidaan edelleen seurata.';
$string['privacy:metadata:tool_aiagent_conversation:timearchived'] = 'Aika, jolloin chat arkistoitiin (käyttäjä poisti sen), jos sovellettavissa.';
$string['privacy:metadata:tool_aiagent_conversation:timecreated'] = 'Aika, jolloin chat luotiin.';
$string['privacy:metadata:tool_aiagent_conversation:timelastactivity'] = 'Milloin viimeisin viesti tallennettiin chattiin.';
$string['privacy:metadata:tool_aiagent_conversation:timemodified'] = 'Aika, jolloin chattia päivitettiin viimeksi.';
$string['privacy:metadata:tool_aiagent_conversation:title'] = 'Chatin nimi, joka luodaan ensimmäisestä viestistä.';
$string['privacy:metadata:tool_aiagent_conversation:userid'] = 'Käyttäjä, joka omistaa chatin.';
$string['privacy:metadata:tool_aiagent_message'] = 'Chatin yksittäiset viestit, mukaan lukien käyttäjän kehotteet ja tekoälyn vastaukset.';
$string['privacy:metadata:tool_aiagent_message:content'] = 'Viestin sisältö.';
$string['privacy:metadata:tool_aiagent_message:role'] = 'Kuka viestin lähetti: käyttäjä, avustaja, järjestelmä vai toiminto.';
$string['privacy:metadata:tool_aiagent_message:timecreated'] = 'Aika, jolloin viesti luotiin.';
$string['privacy:metadata:tool_aiagent_usage'] = 'Kunkin tekoälypyynnön tokenien käyttö, säilytetään käytön seurantaa varten.';
$string['privacy:metadata:tool_aiagent_usage:completiontokens'] = 'Käytettyjen tulostokenien määrä.';
$string['privacy:metadata:tool_aiagent_usage:model'] = 'Tekoälymalli, joka käsitteli pyynnön.';
$string['privacy:metadata:tool_aiagent_usage:prompttokens'] = 'Käytettyjen syötetokenien määrä.';
$string['privacy:metadata:tool_aiagent_usage:provider'] = 'Tekoälypalveluntarjoaja, joka käsitteli pyynnön.';
$string['privacy:metadata:tool_aiagent_usage:timecreated'] = 'Aika, jolloin pyyntö tehtiin.';
$string['relevancescore'] = 'Relevanssipisteet';
$string['relevancescore_help'] = 'Relevanssipisteet kertovat asteikolla 1-10, kuinka hyvin verkkopalvelutoiminto sopii tekoälyagentille.

**Korkeat pisteet (7-10)** annetaan toiminnoille, joista on tekoälyavustajalle selvästi hyötyä, kuten kurssien luominen, käyttäjien lisääminen kursseille, sisällön hakeminen tai arviointien noutaminen.

**Keskitason pisteet (4-6)** ovat tyypillisiä tuhoaville tai peruuttamattomille toimenpiteille (kuten kurssien poistaminen tai käyttäjien poistaminen kursseilta), jotka ovat hyödyllisiä mutta riskialttiimpia, sekä kapea-alaisille toiminnoille, joiden käyttöala on rajallinen.

**Matalat pisteet (1-3)** annetaan toiminnoille, jotka on suunniteltu selaimen ja palvelimen väliseen sisäiseen viestintään, toiminnoille jotka eivät vaadi kirjautumista, vanhentuneille toiminnoille tai toiminnoille, joille on parempia vaihtoehtoja.

**Pistemäärä 0** tarkoittaa, ettei toimintoa ole vielä arvioitu. Tämä on tavallista lisäosien toiminnoille.

Relevanssipisteiden perusteella asetettiin alkuperäinen oletus siitä, onko kukin toiminto käytössä. Moodlen ydinkomponenttien alkuperäiset pisteet on luotu tekoälyllä, ja ne voivat vaatia käsin tehtävää tarkistusta.';
$string['removefilenamed'] = 'Poista tiedosto: {$a}';
$string['renamechat'] = 'Nimeä chat uudelleen';
$string['renamechat_label'] = 'Chatin uusi nimi';
$string['responses_endpoints'] = 'Omat Responses API -päätepisteet';
$string['responses_endpoints_desc'] = 'Korvaa Responses API -päätepisteen, kun isännöity tai välityspalvelimen takana oleva OpenAI- tai Azure OpenAI -asennus tarjoaa sen epätavallisessa osoitteessa. Jätä tyhjäksi käyttääksesi sisäänrakennettuja oletuksia. Ei vaikutusta, kun API-tyyppi on Chat Completions.<br><br>
Esimerkiksi https://oma-resurssi.azure.com/api/responses?api-version=preview. Files API -päätepiste johdetaan korvaamalla /responses polulla /files ja säilyttämällä kyselymerkkijono, joten lähetykset menevät osoitteeseen https://oma-resurssi.azure.com/api/files?api-version=preview.<br><br>
Jos käytät useita palveluntarjoajan instansseja, lisää yksi URL-osoite riviä kohden. Kukin palveluntarjoaja käyttää sitä riviä, jonka isäntänimi vastaa sen omaa API-päätepistettä.';
$string['responses_endpoints_invalidline'] = 'Jokaisen rivin on oltava täydellinen https-URL-osoite, jonka polku päättyy /responses; http hyväksytään vain localhostille. Virheellinen rivi: {$a}';
$string['resume_desc'] = 'Sinulla on äskettäinen chat. Jatka siitä mihin jäit tai aloita uusi.';
$string['resume_lastmessage'] = 'Viimeisin viesti {$a} sitten';
$string['resume_resume'] = 'Jatka viimeisintä chattia';
$string['resume_title'] = 'Tervetuloa takaisin';
$string['sendmessage'] = 'Lähetä';
$string['settings'] = 'Tekoälyagentin asetukset';
$string['showallfiles'] = 'Näytä kaikki';
$string['skill_add'] = 'Lisää taito';
$string['skill_edit'] = 'Muokkaa taitoa';
$string['skill_save_close'] = 'Tallenna ja sulje';
$string['skill_save_preview'] = 'Tallenna ja esikatsele';
$string['skill_saved'] = 'Taito tallennettu.';
$string['skilladd_aitip'] = 'Sen sijaan että täyttäisit tämän käsin, voit pyytää tekoälyagenttia rakentamaan taidon puolestasi: se osaa etsiä oikeat toiminnot ja laatia ohjeet. <a href="{$a}">Avaa tekoälyagentti</a>.';
$string['skillcapabilities_help'] = 'Päätelty taidon päätoiminnoista: käyttäjä voi käyttää taitoa vain, jos hänellä on vähintään yksi näistä kyvyistä jossakin sivuston kontekstissa. Luettelo yhdistää kaikkien päätoimintojen vaatimat kyvyt.';
$string['skillcapabilities_none'] = 'Ei mitään. Taito on kaikkien käyttäjien käytettävissä.';
$string['skillconfigured'] = 'Määritetyt';
$string['skilldeleted'] = 'Taito "{$a}" poistettu.';
$string['skilldescription'] = 'Kuvaus';
$string['skilldescription_help'] = 'Mihin taito on tarkoitettu, jotta avustaja tietää milloin se kannattaa ladata. Kuvaa tehtävä tai toiminta, jota se koskee, älä sen vaiheita. Kuvaus näkyy sekä taitojen luettelossa (ihmisille) että järjestelmäkehotteessa (avustajalle).';
$string['skillexists'] = 'Taito, jonka lyhytnimi on "{$a}", on jo olemassa.';
$string['skillimport_badmasks'] = 'Kenttien "mainfunctions" ja "otherfunctions" on kummankin oltava luettelo maskimerkkijonoja.';
$string['skillimport_badshortname'] = 'Jokainen taito tarvitsee kelvollisen lyhytnimen (kirjaimia, numeroita, väliviiva, alaviiva).';
$string['skillimport_invalidjson'] = 'Lähetetty tiedosto ei ole kelvollista taito-JSONia.';
$string['skillimport_missingfield'] = 'Pakollinen kenttä puuttuu: {$a}.';
$string['skillimported'] = 'Taito "{$a}" tuotu.';
$string['skillinstructions'] = 'Ohjeet';
$string['skillinstructions_help'] = 'Ohjeistus, joka ladataan chattiin taidon mukana. Sisällytä vain se, mikä ei ole itsestään selvää: avustaja näkee jo jokaisen ladatun toiminnon ja sen kuvauksen, joten älä toista sitä mitä toiminto tekee äläkä muistuta ilmeisistä parametreista. Kirjaa työnkulun järjestys, päätökset ja sudenkuopat, joita kuvaukset eivät kata, ja aloita vain joskus pätevät vaiheet sanoilla "Jos ...".';
$string['skillloadedevent'] = 'Taito ladattu · {$a}';
$string['skillmainfunctions'] = 'Päätoiminnot';
$string['skillmainfunctions_help'] = 'Suppea joukko maskeja, jotka valitsevat taidon keskeiset luonti- ja päivitystoiminnot. Näiden toimintojen kyvyt ratkaisevat, kenelle taito tarjotaan: vain käyttäjille, jotka pääsevät käsiksi vähintään yhteen niistä. Kukin maski vastaa toiminnon nimeä tai komponentti/nimi-kuviota ("*" on jokerimerkki; alussa oleva "~" poistaa osumia). Jätä tyhjäksi tarjotaksesi taitoa kaikille.';
$string['skillmatched'] = 'Osumat ({$a})';
$string['skillmisconfigured'] = 'Ei tällä hetkellä kenenkään käytettävissä: yksikään sen päätoiminnoista ei vastaa käytössä olevaa toimintoa.';
$string['skillname'] = 'Nimi';
$string['skillname_help'] = 'Lyhyt, ihmiselle luettava näyttönimi taidolle; se näkyy taitojen luettelossa.';
$string['skillnomatch'] = 'Yksikään käytössä oleva toiminto ei vastaa näitä kuvioita.';
$string['skillnotfound'] = 'Taitoa ei löytynyt: {$a}.';
$string['skillotherfunctions'] = 'Muut toiminnot';
$string['skillotherfunctions_help'] = 'Maskit muille toiminnoille, jotka taito tuo mukanaan: lukutoiminnot, aputoiminnot tai kokonainen komponentti. Sama syntaksi kuin päätoiminnoissa, mutta nämä eivät vaikuta siihen, kenelle taito tarjotaan. Jätä tyhjäksi, jos taito ei tarvitse lisätoimintoja.';
$string['skills_intro'] = '<p>Taito yhdistää tiettyyn tehtävään erikoistuneet ohjeet ja siihen suositeltujen toimintojen luettelon. Käytä taitoja tavallisissa monivaiheisissa tehtävissä, joissa tekoälyagentti menee helposti sekaisin tai ei löydä oikeita toimintoja, tai organisaatiollesi ominaisissa tehtävissä.</p><p>Taitojen luettelo ja niiden kuvaukset ovat aina tekoälyagentin käytettävissä, ja se lataa taidon omatoimisesti aina kun se katsoo jonkin sopivan käyttäjän pyyntöön. Taito on vain niiden käyttäjien käytettävissä, jotka pääsevät käsiksi vähintään yhteen sen päätoiminnoista. Esimerkiksi opettajille tehty taito ei näy opiskelijoille.</p>';
$string['skillshortname'] = 'Lyhytnimi';
$string['skillshortname_help'] = 'Pysyvä koneluettava nimi, joka on yksilöllinen koko sivustolla: vain kirjaimia, numeroita, väliviiva ja alaviiva. Sitä ei voi muuttaa taidon luomisen jälkeen.';
$string['skilltoobroad'] = 'Vastaa {$a} toimintoa, mikä voi olla liian laaja. Harkitse toimintomaskien rajaamista.';
$string['skillunavailable'] = 'Ei käytettävissä';
$string['skillupdated'] = 'Taito "{$a}" päivitetty.';
$string['switchview'] = 'Vaihda näkymää';
$string['systeminstruction'] = 'Omat järjestelmäohjeet';
$string['systeminstruction_desc'] = 'Omat ohjeet, jotka lähetetään tekoälymallille jokaisen pyynnön mukana ja jotka määrittävät sen toimintatavan, sävyn ja valmiudet. Jätä tyhjäksi käyttääksesi sisäänrakennettua oletusta (näkyy alla). Voit käyttää paikkamerkkejä {siteurl} (sivuston URL-osoite), {userid} (nykyisen käyttäjän tunnus) ja {date} (tämän päivän päivämäärä ISO-muodossa); ne korvataan suoritusaikana. Oletusohjeet:{$a->default}

Lisätään aina järjestelmäohjeiden perään (sekä oletusohjeisiin että omiin):{$a->context}';
$string['tab_functions'] = 'Toiminnot';
$string['tab_placements'] = 'Sijoittelut';
$string['tab_skills'] = 'Taidot';
$string['tagarea_tool_aiagent_functions'] = 'Tekoälyagentin toimintojen tunnisteet';
$string['task_cleanup_chats'] = 'Poista vanhat tekoälyagentin chatit';
$string['task_purge_provider_data'] = 'Poista tekoälyagentin chat-tiedot tekoälypalveluntarjoajalta';
$string['task_revalidate_license'] = 'Tarkista tekoälyagentin lisenssi uudelleen';
$string['thinking'] = 'Tekoälyagentti ajattelee...';
$string['timecreated'] = 'Luontiaika';
$string['timelastactivity'] = 'Viimeisin toiminta';
$string['timemodified'] = 'Muokkausaika';
$string['tryagain'] = 'Yritä uudelleen';
$string['usage_completiontokens'] = 'Tulostokenit';
$string['usage_model'] = 'Malli';
$string['usage_prompttokens'] = 'Syötetokenit';
$string['usage_provider'] = 'Palveluntarjoaja';
$string['usage_totaltokens'] = 'Tokenit yhteensä';
$string['viewdetails'] = 'Näytä tiedot';
$string['viewtype_fullscreen'] = 'Koko näyttö';
$string['viewtype_overlay'] = 'Kelluva ikkuna';
$string['viewtype_sidebar'] = 'Sivupalkki';
$string['viewtypes'] = 'Käytettävissä olevat näkymätyypit';
$string['viewtypes_alldisabled_warning'] = 'Tekoälyagentti ei ole kenenkään käytettävissä, koska kaikki näkymätyypit on poistettu käytöstä <a href="{$a}">asetuksissa</a>.';
$string['viewtypes_desc'] = 'Chat-näkymät, joita käyttäjät voivat avata: pieni kelluva ikkuna sivun kulmassa, sivupalkki sivun sisällön vierellä ja koko näytön chat-sivu. Poista kaikki valinnat kytkeäksesi tekoälyagentin tilapäisesti pois käytöstä kaikilta käyttäjiltä.';
$string['viewtypes_unavailable'] = 'Tekoälyagentti ei ole tällä hetkellä käytettävissä.';
$string['welcomedesc'] = 'Kysy tekoälyagentilta sivustostasi, kursseista, käyttäjistä tai sisällöstä. Se voi lukea tietoja ja luvallasi myös tehdä muutoksia.';
$string['welcometitle'] = 'Tervetuloa, {$a}';
