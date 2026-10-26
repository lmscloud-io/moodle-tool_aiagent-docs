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
 * French language pack for AI agent.
 * Last updated: 2026-10-25
 *
 * @package    tool_aiagent
 * @category   string
 * @copyright  LMSCloud Limited <info@lmscloud.io>
 * @author     Marina Glancy
 * @license    https://lmscloud.io/products/ai-agent/license LMSCloud Commercial License
 */

defined('MOODLE_INTERNAL') || die();

$string['activity_needsyou'] = 'Agent IA : en attente de votre approbation';
$string['activity_working'] = 'Agent IA : au travail';
$string['addon'] = 'Additionnelle';
$string['aiagent:autoapproveall'] = 'Choisir le mode d’auto-approbation « Tous », qui exécute chaque appel de fonction sans confirmation';
$string['aiagent:usechat'] = 'Commencer des chats avec l’agent IA (détermine où un chat peut être commencé ; ne limite pas les données auxquelles le chat peut accéder ensuite)';
$string['allfunctions'] = 'Toutes';
$string['allowfeedback'] = 'Autoriser le feedback';
$string['allowfeedback_desc'] = 'Lorsque ce réglage est activé, les utilisateurs peuvent évaluer les réponses de l’assistant et signaler les appels de fonction en échec. Les envois vont aux développeurs du plugin Agent IA (et non à un LLM), afin qu’ils puissent améliorer le comportement des appels de fonction Moodle. Seul l’échange évalué est envoyé, pas le chat complet, et l’utilisateur peut modifier le texte avant l’envoi. Désactivez ce réglage sur les sites soumis à une politique stricte concernant le trafic sortant.';
$string['anthropic_heading'] = 'Anthropic (Claude)';
$string['anthropic_web_fetch'] = 'Activer l’outil « web fetch »';
$string['anthropic_web_fetch_desc'] = 'Permet à Claude de récupérer des URL externes côté serveur au moyen de l’outil web_fetch d’Anthropic. Utile lorsque le chat mentionne des pages web publiques que le modèle doit lire. Les fichiers de ce site Moodle sont traités séparément par la fonction read_file (qui les envoie à la Files API d’Anthropic à la demande) ; désactiver web_fetch n’a donc aucune incidence sur l’accès aux ressources de cours ou aux fichiers joints.';
$string['attachedfiles'] = 'Fichiers joints';
$string['attachfile'] = 'Joindre un fichier';
$string['autoapprove'] = 'Auto-approbation';
$string['autoapprove_all'] = 'Tous (à utiliser avec prudence)';
$string['autoapprove_all_desc'] = 'Ignorer toutes les confirmations';
$string['autoapprove_all_disabled'] = 'Vous n’avez pas la permission d’utiliser ce mode.';
$string['autoapprove_all_short'] = 'Tous';
$string['autoapprove_header'] = 'Approbation automatique des appels';
$string['autoapprove_none'] = 'Aucun';
$string['autoapprove_none_desc'] = 'Demander avant chaque appel de fonction';
$string['autoapprove_readonly'] = 'Lecture seule';
$string['autoapprove_readonly_desc'] = 'Approuver les lectures, demander pour les écritures';
$string['autoapprove_safe'] = 'Sûr';
$string['autoapprove_safe_desc'] = 'Approuver les actions qui ne modifient pas le site';
$string['autoapprove_safe_examples'] = 'Lectures, plus redimensionnement des fichiers joints, génération d’images, envoi de fichiers au LLM, etc.';
$string['autoapprovetimelimit'] = 'Limite de durée de l’auto-approbation';
$string['autoapprovetimelimit_desc'] = 'Durée pendant laquelle l’agent IA peut continuer à exécuter des fonctions auto-approuvées après la dernière action de l’utilisateur, comme l’envoi d’un message ou l’approbation de fonctions. Au-delà, il demande une approbation avant la fonction suivante. Cela évite que des chats abandonnés consomment des ressources du serveur et des jetons IA. 0 signifie aucune limite.';
$string['autopaused'] = 'Auto-approbation suspendue après {$a} sans action de votre part. Approuvez pour continuer.';
$string['background_heading'] = 'Chats en arrière-plan';
$string['backgroundchats'] = 'Autoriser les chats en arrière-plan';
$string['backgroundchats_desc'] = 'Exécute chaque chat dans un processus PHP CLI qui lui est propre sur le serveur. L’agent IA continue alors à travailler après que l’utilisateur a quitté la page ou fermé l’onglet, exécute plus vite les chaînes de fonctions, et cliquer sur Arrêter interrompt l’agent immédiatement, même pendant l’exécution d’une fonction. Lorsque ce réglage est désactivé, ou qu’aucun PHP CLI n’est disponible, les chats s’exécutent dans la requête du navigateur de l’utilisateur.';
$string['backgroundunavailable_effect'] = 'L’agent IA exécute les chaînes de fonctions via le navigateur : elles sont donc plus lentes et s’arrêtent lorsque l’utilisateur quitte la page ou ferme l’onglet. Les fonctions déjà en cours ne peuvent pas être interrompues.';
$string['backgroundunavailable_executable'] = 'Le chemin d’accès à PHP CLI pour les chats en arrière-plan n’est pas un fichier exécutable.';
$string['backgroundunavailable_function'] = 'La fonction PHP {$a} est désactivée sur ce serveur.';
$string['backgroundunavailable_pathtophp'] = 'Le chemin d’accès à PHP CLI n’est pas défini.';
$string['backgroundunavailable_setpath'] = 'Définir le chemin d’accès à PHP CLI';
$string['backgroundunavailable_windows'] = 'Les chats en arrière-plan ne sont pas disponibles sur les serveurs Windows.';
$string['backtoconfiguration'] = 'Retour à la configuration de l’agent IA';
$string['builtinfunction'] = 'Intégrée';
$string['bulk_disabled'] = '{$a} fonction(s) désactivée(s)';
$string['bulk_disableselected'] = 'Désactiver la sélection';
$string['bulk_enabled'] = '{$a} fonction(s) activée(s)';
$string['bulk_enableselected'] = 'Activer la sélection';
$string['bulk_withselected'] = 'Pour les fonctions sélectionnées';
$string['capabilities'] = 'Capacités';
$string['chat_heading'] = 'Chats';
$string['chat_namelink'] = 'Nom avec lien';
$string['chatfrozen'] = 'Les aptitudes de ce chat ne sont plus disponibles, il ne peut donc pas être poursuivi. Commencez plutôt un nouveau chat.';
$string['chatfrozen_noplacement'] = 'Ce chat a été commencé dans une version antérieure de l’agent IA, il ne peut donc plus être poursuivi. Commencez plutôt un nouveau chat.';
$string['chathelpcontent'] = '<p>L’agent IA peut lire et modifier le contenu de ce site en votre nom. La plupart des actions demandent votre approbation avant de s’exécuter. Vous pouvez changer le mode d’auto-approbation dans le champ de saisie pour l’assouplir ou le renforcer.</p>
<p>Joignez des fichiers par glisser-déposer, par collage, ou en cliquant sur l’icône trombone. Saisissez ensuite votre demande et cliquez sur <strong>Envoyer</strong>. Appuyez sur Entrée pour envoyer, ou sur Maj et Entrée pour un retour à la ligne.</p><p>L’IA peut faire des erreurs. Vérifiez les résultats.</p>';
$string['chatnopermission'] = 'Ce chat a été commencé dans une zone du site où vous n’avez plus accès à l’agent IA, il ne peut donc pas être poursuivi.';
$string['chatnostartpermission'] = 'Vous n’avez pas la permission de commencer un chat ici. Ouvrez l’agent IA depuis une page où il est proposé.';
$string['chatretention'] = 'Conserver les chats pendant';
$string['chatretention_desc'] = 'Les chats sans activité pendant cette durée sont retirés de l’historique des chats des utilisateurs, leurs fichiers joints sont supprimés de ce site, et la suppression des données de chat stockées par le fournisseur IA (réponses stockées et fichiers envoyés) est demandée. La suppression du côté du fournisseur se fait au mieux et n’est pas garantie ; configurez également une politique de conservation des données correspondante dans votre compte chez le fournisseur. Les messages et les enregistrements d’utilisation sont conservés pour les rapports jusqu’à l’expiration de la durée de conservation des journaux de chat ci-dessous. La valeur 0 conserve les chats indéfiniment.';
$string['closeconfirm_background'] = 'L’agent IA continue de travailler pendant que le chat est fermé.';
$string['closeconfirm_body'] = 'Fermer la fenêtre ne supprime pas le chat. Vous pouvez le rouvrir à tout moment depuis le menu « Chats précédents ». Les chats sont supprimés automatiquement après {$a} jours.';
$string['closeconfirm_body_noretention'] = 'Fermer la fenêtre ne supprime pas le chat. Vous pouvez le rouvrir à tout moment depuis le menu « Chats précédents ».';
$string['closeconfirm_close'] = 'Fermer le chat';
$string['closeconfirm_dontshowagain'] = 'Ne plus afficher ce message';
$string['closeconfirm_title'] = 'Fermer ce chat ?';
$string['component'] = 'Composant';
$string['component_filesandimages'] = 'Manipulations de fichiers et d’images';
$string['configuration'] = 'Configuration de l’agent IA';
$string['confirmdeleteskill'] = 'Voulez-vous vraiment supprimer cette aptitude ?';
$string['contextevent_opened'] = 'Ouvert depuis {$a}';
$string['contextevent_page'] = 'Page · {$a}';
$string['copyresponse'] = 'Copier la réponse';
$string['copyurl'] = 'Copier l’URL';
$string['datasource_chats'] = 'Chats de l’agent IA';
$string['datasource_usage'] = 'Utilisation de l’agent IA';
$string['deletechat_menu'] = 'Supprimer le chat';
$string['deletechat_named'] = 'Supprimer le chat : {$a}';
$string['disablefunction'] = 'Désactiver cette fonction';
$string['dragtoresize'] = 'Glisser pour redimensionner';
$string['dynamicdiscovery'] = 'Découverte dynamique des fonctions';
$string['dynamicdiscovery_automatic'] = 'Automatique';
$string['dynamicdiscovery_desc'] = 'Optimiser l’utilisation des jetons en ne découvrant les fonctions qu’en cas de besoin. Recommandé si un grand nombre de fonctions web service sont activées. En mode automatique, la découverte est activée si plus de {$a} fonctions sont disponibles. Certains fournisseurs IA limitent le nombre de fonctions (OpenAI par exemple à 128).';
$string['dynamicdiscovery_off'] = 'Désactivée';
$string['dynamicdiscovery_on'] = 'Activée';
$string['enabled'] = 'Activé';
$string['enablefunction'] = 'Activer cette fonction';
$string['entity_aiagentfunction'] = 'Fonction de l’agent IA';
$string['entity_chat'] = 'Chat';
$string['entity_externalfunction'] = 'Fonction web service';
$string['entity_message'] = 'Message';
$string['entity_placement'] = 'Placement';
$string['entity_skill'] = 'Aptitude';
$string['entity_usage'] = 'Utilisation des jetons';
$string['error_interrupted_function'] = 'Un appel de fonction a été interrompu avant la fin. Des modifications ont peut-être été partiellement appliquées ; vérifiez l’état avant de réessayer.';
$string['error_interrupted_llm'] = 'La communication avec le fournisseur IA a été interrompue. Cliquez sur « Réessayer » pour relancer la requête.';
$string['errorbackgroundstart'] = 'L’agent IA n’a pas pu commencer à travailler sur ce chat. Demandez à l’administrateur du site de vérifier les réglages des chats en arrière-plan.';
$string['errorbackgroundstart_admin'] = 'L’agent IA n’a pas pu démarrer son processus en arrière-plan sur ce serveur. Corrigez le chemin d’accès à PHP CLI, ou désactivez les chats en arrière-plan, dans la section {$a} des réglages de l’agent IA.';
$string['errordetail'] = '{$a}';
$string['erroremptymessage'] = 'Le message ne peut pas être vide.';
$string['errorfullscreendisabled'] = 'La vue plein écran du chat n’est pas activée sur ce site.';
$string['errorinconsistent'] = 'Le chat est dans un état incohérent et ne peut pas continuer. Rechargez la page et réessayez.';
$string['errorinvalidchat'] = 'Chat introuvable ou accès refusé.';
$string['errorinvalidname'] = 'Le nom ne peut pas être vide.';
$string['errormissingfeedbackparams'] = 'Message ou type de feedback manquant.';
$string['errornopendingfunction'] = 'Il n’y a aucun appel de fonction en attente.';
$string['errornoprovider'] = 'Aucun fournisseur IA n’est disponible. L’agent IA utilise les réglages de l’action « Générer texte » ; vous devez donc vous assurer qu’elle est configurée et activée pour au moins un fournisseur IA dans l’administration du site.';
$string['errornoprovider_link'] = 'Configurer les fournisseurs IA.';
$string['errornoretryresponse'] = 'Il n’y a aucune réponse en échec à relancer.';
$string['erroroutofsync'] = 'Ce chat a été modifié dans une autre fenêtre. Actualisez pour afficher son état le plus récent.';
$string['errorpagenotavailable'] = 'La page actuelle n’est pas disponible dans cette vue.';
$string['errorpendingfunctions'] = 'Veuillez d’abord approuver ou refuser les appels de fonction en attente.';
$string['errorprovider_blocked_prompt'] = '{$a->provider} a bloqué le prompt : {$a->reason}';
$string['errorprovider_blocked_response'] = '{$a->provider} a bloqué la réponse : {$a->reason}';
$string['errorprovider_no_content'] = '{$a} n’a retourné aucun contenu.';
$string['errorprovider_no_content_with_reason'] = '{$a->provider} n’a retourné aucun contenu (motif de fin : {$a->reason}).';
$string['errorresponses_endpoint_invalid'] = 'Le point de terminaison permettant de communiquer avec le fournisseur IA n’est pas valide ou n’est pas joignable.';
$string['errorresponses_endpoint_invalid_config'] = 'Le plugin a tenté d’utiliser {$a->endpoint} comme point de terminaison de la Responses API d’OpenAI, mais la requête a échoué. Allez dans {$a->settingslink} et vérifiez le point de terminaison de la Responses API, ou basculez le type d’API sur Chat Completions.';
$string['errorresponses_endpoint_reply'] = 'Réponse du fournisseur : {$a}';
$string['errorresponses_provider_switch'] = 'Ce chat ne peut pas être poursuivi avec la Responses API d’OpenAI, car il a été commencé avec un autre fournisseur IA. Commencez un nouveau chat, ou revenez au fournisseur d’origine (ou à OpenAI Chat Completions) pour poursuivre celui-ci.';
$string['errorrootnotfound'] = 'Message initial introuvable pour ce chat.';
$string['errorupdatesstopped'] = 'Ce chat ne reçoit plus de mises à jour. Actualisez pour afficher son état le plus récent.';
$string['exportskill'] = 'Exporter';
$string['feedback_modal_freetextlabel'] = 'Quelque chose à ajouter ? (facultatif)';
$string['feedback_modal_freetextplaceholder_negative'] = 'Qu’est-ce qui n’a pas fonctionné ? Soyez aussi précis que vous le souhaitez.';
$string['feedback_modal_freetextplaceholder_positive'] = 'Qu’est-ce qui a bien fonctionné ? (facultatif)';
$string['feedback_modal_freetextplaceholder_toolerror'] = 'Qu’est-ce qui n’a pas fonctionné dans cet appel de fonction ?';
$string['feedback_modal_intro_negative'] = 'Merci de nous l’avoir signalé. Votre feedback sera envoyé aux développeurs du plugin Agent IA (et non au fournisseur IA), afin qu’ils puissent améliorer le comportement des appels de fonction Moodle.';
$string['feedback_modal_intro_positive'] = 'Merci ! Votre feedback sera envoyé aux développeurs du plugin Agent IA (et non au fournisseur IA), afin qu’ils puissent conserver ce qui fonctionne et améliorer ce qui ne fonctionne pas.';
$string['feedback_modal_intro_toolerror'] = 'Signalez cet appel de fonction comme problématique. Votre feedback sera envoyé aux développeurs du plugin Agent IA (et non au fournisseur IA), afin qu’ils puissent corriger le web service sous-jacent ou améliorer la façon dont l’IA l’utilise.';
$string['feedback_modal_send'] = 'Envoyer le feedback';
$string['feedback_modal_sending'] = 'Envoi...';
$string['feedback_modal_snapshotlabel'] = 'Ce qui sera envoyé (modifiable)';
$string['feedback_modal_title_positive'] = 'Dites-nous ce qui a fonctionné';
$string['feedbackcat_negative_misunderstood'] = 'N’a pas compris ma question';
$string['feedbackcat_negative_notfollowed'] = 'N’a pas suivi les instructions';
$string['feedbackcat_negative_other'] = 'Autre chose';
$string['feedbackcat_negative_wronginfo'] = 'Informations fausses ou inventées';
$string['feedbackcat_negative_wrongtoolused'] = 'A utilisé la mauvaise fonction';
$string['feedbackcat_positive_accurate'] = 'Exact';
$string['feedbackcat_positive_goodexplanation'] = 'Explication claire';
$string['feedbackcat_positive_helpful'] = 'Utile';
$string['feedbackcat_positive_other'] = 'Autre chose';
$string['feedbackcat_positive_welltimed'] = 'Fonction adaptée à la tâche';
$string['feedbackcat_toolerror_misleadingresult'] = 'Résultat trompeur';
$string['feedbackcat_toolerror_other'] = 'Autre chose';
$string['feedbackcat_toolerror_toolerror'] = 'La fonction a retourné une erreur';
$string['feedbackcat_toolerror_wrongargs'] = 'Arguments incorrects';
$string['feedbackcat_toolerror_wrongtool'] = 'Mauvaise fonction pour la tâche';
$string['feedbackdisabled'] = 'La collecte de feedback a été désactivée par l’administrateur du site.';
$string['feedbackfailed'] = 'Impossible d’envoyer le feedback. Veuillez réessayer plus tard.';
$string['feedbackflagfunctioncall'] = 'Signaler cet appel de fonction';
$string['feedbacksubmitted'] = 'Feedback envoyé';
$string['feedbackthanks'] = 'Merci pour votre feedback !';
$string['feedbackthumbdown'] = 'Signaler un problème avec cette réponse';
$string['feedbackthumbup'] = 'Cette réponse était utile';
$string['feedbackvalidation_categoryrequired'] = 'Veuillez sélectionner au moins une catégorie.';
$string['functionapprovalneeded'] = 'Approbation requise';
$string['functionapprovalneededmany'] = '{$a} appels de fonction à approuver';
$string['functionapprovecount'] = 'Approuver {$a} appels';
$string['functionavailable'] = 'Disponible';
$string['functioncall_actions'] = 'Approuver ou refuser l’appel de fonction';
$string['functioncall_chip_action'] = 'Changer le mode d’auto-approbation';
$string['functioncalldetails'] = 'Détails de l’appel de fonction';
$string['functioncalldetailsof'] = 'Détails de l’appel de fonction : {$a}';
$string['functioncalling'] = 'Appel de {$a}';
$string['functioncallnav'] = '{$a->index} sur {$a->total}';
$string['functioncallnext'] = 'Appel de fonction suivant';
$string['functioncallprevious'] = 'Appel de fonction précédent';
$string['functioncallscount'] = '{$a} appels de fonction';
$string['functioncallscountone'] = '1 appel de fonction';
$string['functiondenied'] = 'Vous avez refusé {$a}';
$string['functiondeniedmany'] = 'Vous avez refusé {$a->name} et {$a->count} autres';
$string['functiondeniednext'] = 'L’agent s’est arrêté. Écrivez un message pour lui dire quoi faire ensuite.';
$string['functiondeny'] = 'Refuser';
$string['functiondenyall'] = 'Tout refuser';
$string['functiondetailscopied'] = 'Copié';
$string['functiondetailscopy'] = 'Copier';
$string['functiondetailscopyhtml'] = 'Copier le code source HTML';
$string['functiondetailscopyparameters'] = 'Copier les paramètres en JSON';
$string['functiondetailscopyresult'] = 'Copier le résultat en JSON';
$string['functiondetailscopysvg'] = 'Copier le code source SVG';
$string['functiondetailsdisplay'] = 'Affichage';
$string['functiondetailsempty'] = '(vide)';
$string['functiondetailsfield'] = '1 champ';
$string['functiondetailsfields'] = '{$a} champs';
$string['functiondetailsformatted'] = 'Mis en forme';
$string['functiondetailshtmlsource'] = 'Code source HTML';
$string['functiondetailsimage'] = 'Image';
$string['functiondetailsitem'] = '1 élément';
$string['functiondetailsitems'] = '{$a} éléments';
$string['functiondetailsjson'] = 'JSON';
$string['functiondetailsjsontext'] = 'Texte JSON';
$string['functiondetailssvgimage'] = 'Image SVG · {$a}';
$string['functiondetailssvgsource'] = 'Code source SVG';
$string['functiondetailsviewformatted'] = 'Afficher le texte mis en forme';
$string['functiondetailsviewimage'] = 'Afficher l’image';
$string['functionloopguardbody'] = 'Cette fonction a déjà été exécutée {$a} fois avec la même entrée. L’auto-approbation est suspendue en raison d’une boucle possible ; approuvez pour continuer.';
$string['functionloopguardheading'] = 'Appel répété.';
$string['functionname'] = 'Nom de la fonction';
$string['functionparameters'] = 'Paramètres';
$string['functionresult'] = 'Résultat';
$string['functionresultdiscarded'] = 'Le résultat était trop volumineux ({$a}) et a été écarté. Restreignez la demande en la filtrant, en demandant moins de champs ou en utilisant une fonction plus spécifique. Répéter le même appel produira la même erreur.';
$string['functionrules_error_component'] = '{$a->path} : aucune fonction n’appartient à un composant correspondant à « {$a->value} ».';
$string['functionrules_error_depth'] = '{$a->path} : la règle comporte plus de {$a->max} niveaux d’imbrication.';
$string['functionrules_error_function'] = '{$a->path} : aucune fonction ne correspond à « {$a->value} ».';
$string['functionrules_error_json'] = 'La règle n’est pas un JSON valide : {$a}';
$string['functionrules_error_list'] = '{$a->path} : une liste non vide de parties de la règle est attendue.';
$string['functionrules_error_node'] = '{$a->path} : chaque partie de la règle doit être un objet avec exactement une clé : type, tag, component, function, not, all ou any.';
$string['functionrules_error_tag'] = '{$a->path} : aucune fonction n’a le tag « {$a->value} ».';
$string['functionrules_error_type'] = '{$a->path} : type « {$a->value} » inconnu. Les types sont read, safe et write.';
$string['functionrules_error_value'] = '{$a->path} : une chaîne non vide ou une liste non vide de chaînes non vides est attendue.';
$string['functionrules_path_root'] = 'La règle entière';
$string['functions_intro'] = '<p><b>Les fonctions web service ne conviennent pas toutes à l’agent IA.</b> Certaines ont été conçues pour la communication client-serveur (signalées AJAX) ou pour des utilisateurs non authentifiés (Sans connexion), et certaines ont de meilleures alternatives. Quelques fonctions AJAX fonctionnent bien avec l’agent IA, mais la plupart non. Le plugin Agent IA attribue un score de pertinence (1-10) aux fonctions du cœur et des plugins standard, et active celles dont le score est supérieur ou égal à 5. Les fonctions des plugins additionnels ne sont pas évaluées ; à la place, toutes leurs fonctions non AJAX sont activées automatiquement. Utilisez cette page pour examiner les fonctions disponibles et les activer ou les désactiver individuellement.</p><p>Lorsqu’une fonction requiert une ou plusieurs capacités, elle n’est pas disponible pour les utilisateurs qui ne possèdent aucune de ces capacités dans un contexte quelconque du site. Pour le cœur et les plugins standard, le plugin Agent IA définit ces capacités correctement. Pour les plugins additionnels, les capacités proviennent de la définition de la fonction, et comme Moodle n’applique pas lui-même cette vérification, elles peuvent être erronées.</p>';
$string['functions_report'] = 'Fonctions de l’agent IA';
$string['functionstatus_denied'] = 'Refusé';
$string['functionstatus_failed'] = 'Échec';
$string['functionstatus_interrupted'] = 'Interrompu';
$string['functionstatus_notrun'] = 'Non exécuté';
$string['functionstatus_pending'] = 'En attente d’approbation';
$string['functionstatus_processing'] = 'Exécution...';
$string['functiontype'] = 'Type';
$string['functiontype_help'] = 'Le type de la fonction web service et ses propriétés :

* **Lecture** : récupère des données sans rien modifier
* **Sûre** : fonction intégrée qui ne modifie pas le site, seulement les fichiers du chat, par exemple le redimensionnement d’un fichier joint ou la génération d’une image
* **Écriture** : crée ou modifie des données
* **AJAX** : utilisée en interne par Moodle pour les requêtes client-serveur, moins susceptible de convenir comme fonction de l’agent IA
* **Sans connexion** : disponible pour les utilisateurs non authentifiés, également moins susceptible de convenir comme fonction de l’agent IA';
$string['functiontype_read'] = 'Lecture';
$string['functiontype_safe'] = 'Sûre';
$string['functiontype_write'] = 'Écriture';
$string['gemini_api_generatecontent'] = 'generateContent (stable)';
$string['gemini_api_interactions'] = 'Interactions API (bêta)';
$string['gemini_api_type'] = 'Type d’API';
$string['gemini_api_type_desc'] = 'Quelle API Gemini utiliser pour les chats à plusieurs tours. generateContent est le point de terminaison sans état standard et reconstruit la liste complète des messages à chaque tour. L’Interactions API est actuellement en bêta ; elle conserve l’état du chat du côté de Google (seule la nouvelle entrée est donc envoyée à chaque tour), mais son schéma peut changer sans préavis.';
$string['gemini_builtin_code_execution'] = 'Activer l’outil « Code Execution »';
$string['gemini_builtin_code_execution_desc'] = 'Permet à Gemini d’écrire et d’exécuter du code Python dans un bac à sable pour résoudre des calculs ou traiter des données. Modèles Gemini 3 et ultérieurs uniquement ; ignoré silencieusement sur Gemini 2.5 et versions antérieures, car ces modèles ne peuvent pas combiner les outils intégrés avec les appels de fonction personnalisés.';
$string['gemini_builtin_google_search'] = 'Activer l’ancrage sur la recherche Google';
$string['gemini_builtin_google_search_desc'] = 'Permet à Gemini d’ancrer ses réponses sur les résultats actuels de la recherche web. Modèles Gemini 3 et ultérieurs uniquement ; ignoré silencieusement sur Gemini 2.5 et versions antérieures, car ces modèles ne peuvent pas combiner les outils intégrés avec les appels de fonction personnalisés. Chaque requête de recherche est facturée séparément.';
$string['gemini_builtin_url_context'] = 'Activer l’outil « URL Context »';
$string['gemini_builtin_url_context_desc'] = 'Permet à Gemini de lire et d’analyser le contenu des URL publiques mentionnées par l’utilisateur. Modèles Gemini 3 et ultérieurs uniquement ; ignoré silencieusement sur Gemini 2.5 et versions antérieures, car ces modèles ne peuvent pas combiner les outils intégrés avec les appels de fonction personnalisés. Les URL doivent être accessibles publiquement (pas de localhost, pas d’authentification).';
$string['gemini_heading'] = 'Google Gemini';
$string['hidefunctioncalls'] = 'Masquer les appels de fonction';
$string['hint_splitview'] = 'Vous souhaitez utiliser ce chat côte à côte avec votre site ? Faites glisser <a href="{$a}">{$a}</a> vers une nouvelle fenêtre, ou faites un clic droit dessus et utilisez la vue fractionnée de votre navigateur.';
$string['imagedimensions'] = '{$a->width}×{$a->height} px';
$string['imagepreviewinfo'] = 'Fichier {$a->size}, dimensions {$a->dimensions}. Aperçu {$a->preview} ({$a->scale} %).';
$string['importskill'] = 'Importer des aptitudes';
$string['importskill_addmore'] = 'Ajouter d’autres...';
$string['importskill_button'] = 'Importer {$a} aptitudes';
$string['importskill_buttonone'] = 'Importer 1 aptitude';
$string['importskill_choose'] = 'Choisir des fichiers...';
$string['importskill_drophint'] = 'Déposez ici des fichiers d’aptitude, ou utilisez le bouton.';
$string['importskill_fileone'] = '1 fichier sélectionné';
$string['importskill_files'] = '{$a} fichiers sélectionnés';
$string['importskill_statusinvalid'] = 'Pas un fichier d’aptitude';
$string['importskill_statusnew'] = 'Nouvelle aptitude';
$string['importskill_statusupdate'] = 'Met à jour {$a}';
$string['importskill_summarynew'] = '{$a} à ajouter';
$string['importskill_summaryskipped'] = '{$a} ignorée(s)';
$string['importskill_summaryupdate'] = '{$a} à mettre à jour';
$string['importskill_toolarge'] = 'Les données de l’aptitude sont trop volumineuses (maximum {$a}).';
$string['inlinefilecharlimit'] = 'Limite du contenu de fichier intégré';
$string['inlinefilecharlimit_desc'] = 'Quantité maximale d’un fichier texte pouvant être intégrée directement dans le chat lorsque le contenu d’un fichier est intégré directement au chat. Les contenus plus longs sont tronqués. L’intégration est utilisée lorsque le modèle la demande, et comme solution de repli pour les fournisseurs IA qui ne peuvent pas accepter de fichiers. Le contenu intégré est renvoyé avec l’historique du chat à chaque tour ; une limite élevée augmente donc l’utilisation des jetons.';
$string['interruptedbystop'] = 'Interrompu : vous avez arrêté l’agent.';
$string['interruptedunexpectedly'] = 'Interrompu : la fonction s’est arrêtée de manière inattendue.';
$string['invalidparameter'] = 'Paramètre non valide détecté : {$a}';
$string['isajax'] = 'AJAX';
$string['licenseactivate'] = 'Activer la licence';
$string['licenseactivate_help'] = 'Saisissez la clef de licence que vous avez reçue par courriel de LMSCloud. La clef de licence peut être activée sur un nombre limité de sites (généralement deux). Vous pouvez la désactiver à tout moment afin de l’utiliser sur un autre site.';
$string['licensedeactivate'] = 'Désactiver';
$string['licensedeactivate_help'] = 'Désactiver la clef de licence sur ce site afin qu’elle puisse être utilisée sur un autre site.';
$string['licenseerror_deactivate'] = 'Impossible de désactiver la licence. Le serveur est peut-être temporairement indisponible ; veuillez réessayer plus tard.';
$string['licenseerror_deactivate_forced'] = 'Cette licence est définie dans la configuration du serveur (config.php) et ne peut pas être désactivée depuis cette page.';
$string['licenseerror_invalid'] = 'La clef de licence n’est pas valide ou n’a pas pu être activée.';
$string['licenseerror_limit'] = 'Aucun emplacement libre pour cette clef de licence. Désactivez d’abord un autre site, puis réessayez.';
$string['licenseerror_transport'] = 'Impossible de joindre le serveur de licences. Veuillez vérifier la connexion et réessayer.';
$string['licensekey'] = 'Clef de licence';
$string['licenselocked_expired'] = 'Ce site n’a pas validé sa licence depuis plus de 14 jours. Revérifiez la licence pour rétablir l’accès.';
$string['licenselocked_key_rejected'] = 'Cette clef de licence n’est plus valide sur ce site.';
$string['licenselocked_url_mismatch'] = 'L’adresse web de ce site a changé ; le titulaire de la licence doit l’autoriser.';
$string['licensemanageinsettings'] = 'Gérer la licence dans les paramètres de l’agent IA.';
$string['licenserecheck'] = 'Revérifier';
$string['licensesetting'] = 'Licence de l’agent IA';
$string['licensesetting_desc'] = 'Activer, revérifier ou désactiver la licence de l’agent IA pour ce site.';
$string['licensestatus_materialsmissing'] = 'Licence de l’agent IA active, mais les matériaux téléchargés sont absents, aucune fonction n’est donc disponible. Revérifiez pour les télécharger à nouveau.';
$string['licensestatus_notactivated'] = 'Une licence est requise pour utiliser l’agent IA sur ce site.';
$string['licensestatus_valid'] = 'Licence de l’agent IA active.';
$string['loginrequired'] = 'Connexion requise';
$string['logretention'] = 'Conserver les journaux de chat pendant';
$string['logretention_desc'] = 'Les messages et les enregistrements d’utilisation des jetons des chats sans activité pendant cette durée sont définitivement supprimés de la base de données. Cela ne concerne que les chats déjà supprimés de l’historique des chats, soit par l’utilisateur, soit par le réglage ci-dessus. La valeur 0 conserve les journaux indéfiniment.';
$string['maxfilesize'] = 'Taille maximale des fichiers pour le LLM';
$string['maxfilesize_desc'] = 'Empêche les utilisateurs d’envoyer au LLM des fichiers trop volumineux. Les gros fichiers consomment rapidement des jetons et font grimper les coûts. Les fichiers dépassant cette taille sont rejetés avec une erreur avant que le moindre octet ne quitte le site.

Les fournisseurs IA refusent de toute façon les fichiers qui dépassent leurs propres limites par requête (Anthropic 32 Mo, Gemini 50 Mo en contenu intégré, OpenAI 512 Mo).';
$string['maxfunctionresultsize'] = 'Taille maximale du résultat d’une fonction';
$string['maxfunctionresultsize_desc'] = 'Quantité maximale de données qu’une seule fonction peut renvoyer au modèle IA. Certaines fonctions de Moodle n’ont aucun filtre et renvoient tous les utilisateurs ou tous les cours du site, ce qui noie le modèle et consomme des jetons à chaque tour suivant. Un résultat dépassant cette limite est écarté et le modèle est invité à restreindre sa demande. Zéro signifie aucune limite. La lecture d’un fichier en intégration directe est exemptée ; utilisez « Limite du contenu de fichier intégré » pour cela.';
$string['newchat'] = 'Nouveau chat';
$string['newchatchooser_clone'] = 'Comme ce chat';
$string['newchatchooser_continue'] = 'Reprendre où vous en étiez';
$string['newchatchooser_desc_default'] = 'Commencez un nouveau chat sur cette page, ou reprenez où vous en étiez.';
$string['newchatchooser_desc_full'] = 'Commencez un chat général, ou reprenez où vous en étiez.';
$string['newchatchooser_desc_multi'] = 'Cette page propose plusieurs points de départ. Choisissez-en un, ou reprenez où vous en étiez.';
$string['newchatchooser_error'] = 'Impossible de commencer un nouveau chat. Veuillez réessayer.';
$string['newchatchooser_none'] = 'Il n’y a ici aucune page où vous pouvez commencer un nouveau chat.';
$string['newchatchooser_onthispage'] = 'Sur cette page :';
$string['newchatchooser_title'] = 'Commencer un nouveau chat';
$string['nfilesattached'] = '{$a} fichiers joints';
$string['nonauth'] = 'Sans connexion';
$string['notavailable_loginas'] = 'L’agent IA n’est pas disponible lorsque vous êtes connecté sous le nom d’un autre utilisateur.';
$string['notavailable_roleswitch'] = 'L’agent IA n’est pas disponible lorsque vous avez pris un autre rôle.';
$string['numfiles'] = '{$a} fichiers';
$string['numimages'] = '{$a} images';
$string['numotherfiles'] = '{$a} autres';
$string['onefileattached'] = '1 fichier joint';
$string['openai_api_chatcompletions'] = 'Chat Completions';
$string['openai_api_responses'] = 'Responses API';
$string['openai_api_type'] = 'Type d’API';
$string['openai_api_type_desc'] = 'Quelle API OpenAI utiliser pour les chats à plusieurs tours. La Responses API conserve l’état du chat côté serveur, seule la nouvelle entrée est donc envoyée à chaque tour (coût moindre, historique plus simple). Chat Completions reconstruit la liste complète des messages à chaque requête (compatibilité plus large avec les fournisseurs).<br><br>La Responses API est prise en charge par : <strong>{$a}</strong>. Les autres fournisseurs basculeront silencieusement sur Chat Completions, quel que soit ce réglage.';
$string['openai_heading'] = 'OpenAI (ou compatible)';
$string['openlink'] = 'Ouvrir le lien';
$string['pathtophp'] = 'Chemin d’accès à PHP CLI pour les chats en arrière-plan';
$string['pathtophp_desc'] = 'Le programme PHP CLI qui exécute les chats en arrière-plan, s’il doit être différent de celui du réglage « Chemin d’accès à PHP CLI » du site. Laissez vide pour utiliser le réglage du site.';
$string['placeholder'] = 'Saisissez un message...';
$string['placement_add'] = 'Ajouter un placement';
$string['placement_confirmdelete'] = 'Voulez-vous vraiment supprimer ce placement ?';
$string['placement_copyof'] = '{$a} (copie)';
$string['placement_defaultname'] = 'Agent IA';
$string['placement_deleted'] = 'Placement supprimé.';
$string['placement_duplicated'] = 'Placement dupliqué.';
$string['placement_edit'] = 'Modifier le placement';
$string['placement_functionrules'] = 'Règle de fonctions';
$string['placement_functionrules_help'] = 'Limite les fonctions que l’agent IA peut utiliser dans les chats commencés depuis ce placement. Laisser vide pour autoriser toutes les fonctions. Modifier la règle la modifie aussi dans les chats déjà commencés depuis ce placement.

La règle est au format JSON. Chacune de ses parties est un objet avec une seule clé :

* {"type": "read"} : le type de la fonction est read, safe ou write, comme dans l’onglet Fonctions
* {"tag": "student"} : la fonction a ce tag
* {"component": "mod_quiz"} : la fonction appartient à ce composant
* {"function": "core_course_get_courses"} : la fonction porte ce nom
* {"not": partie}, {"all": [parties]}, {"any": [parties]} : combinent des parties

Dans un composant ou un nom de fonction, un astérisque correspond à n’importe quel texte. Les clés type, tag, component et function acceptent aussi une liste, qui correspond à n’importe laquelle de ses valeurs : {"type": ["read", "safe"]} autorise toutes les fonctions qui ne modifient pas le site.

Demandez à l’agent IA d’écrire ou de modifier la règle : il vérifie quelles fonctions la règle autorise avant de l’enregistrer.';
$string['placement_functionrules_preview'] = 'La règle enregistrée autorise {$a->count} des {$a->total} fonctions activées';
$string['placement_functions'] = 'Fonctions autorisées';
$string['placement_functions_limited'] = 'Limitées ({$a})';
$string['placement_initialskills'] = 'Aptitudes initiales';
$string['placement_initialskills_help'] = 'Aptitudes chargées automatiquement au début du chat. Facultatif ; l’agent peut toujours charger n’importe quelle aptitude en cas de besoin, sauf si la règle de fonctions du placement l’en empêche. Les aptitudes définies contrôlent aussi ce placement : les utilisateurs qui n’ont accès à aucune d’entre elles ne verront ni le bouton ni l’élément de menu, et si toutes les aptitudes définies sont ensuite supprimées ou désactivées, le placement cesse d’apparaître.';
$string['placement_intro'] = '<p>Les placements vous permettent de proposer des agents adaptés à une tâche particulière. Chaque placement ajoute le bouton de l’agent IA aux pages dont l’URL correspond à l’un de ses masques, et peut commencer le chat avec des aptitudes initiales et un texte d’accueil prédéfinis. Si des aptitudes initiales sont définies, les utilisateurs qui n’ont accès à aucune d’entre elles ne verront pas le bouton.</p><p>Les aptitudes initiales ne définissent que le point de départ du chat ; l’agent peut toujours accéder à toutes les fonctions activées, pas seulement à celles des aptitudes. Une règle de fonctions limite les fonctions que l’agent peut utiliser dans les chats commencés depuis un placement.</p>';
$string['placement_location'] = 'Emplacement du bouton';
$string['placement_location_floating'] = 'Bouton flottant';
$string['placement_location_h1'] = 'Titre de la page (H1)';
$string['placement_location_h2'] = 'Titre secondaire (H2)';
$string['placement_menuheading'] = 'Demander à l’agent IA';
$string['placement_name'] = 'Nom';
$string['placement_name_help'] = 'Affiché aux utilisateurs : dans le menu utilisateur, comme infobulle du bouton et (lorsque plusieurs placements correspondent à la même page) dans le menu du bouton.';
$string['placement_save'] = 'Enregistrer le placement';
$string['placement_saved'] = 'Placement enregistré.';
$string['placement_skillmissing'] = 'Aptitude introuvable';
$string['placement_skillnotinitial'] = 'Ne peut pas être une aptitude initiale';
$string['placement_suggestedprompts'] = 'Prompts suggérés';
$string['placement_suggestedprompts_help'] = 'Un prompt par ligne, proposé sous forme de bouton au-dessus de la zone de message sur l’écran de démarrage du chat. Un clic l’envoie aussitôt, par exemple « Résume ce cours ». Pour proposer un prompt que l’utilisateur doit d’abord compléter, placer ... n’importe où dans le texte : le prompt est alors placé dans la zone de message au lieu d’être envoyé, par exemple « Résume la section ... de ce cours ». Laisser vide pour ne proposer aucun prompt.';
$string['placement_urlmask'] = 'Masques d’URL';
$string['placement_urlmask_help'] = 'Un motif par ligne. Utilisez * comme joker, par exemple /course/view.php* ou /mod/*/view.php*.';
$string['placement_urlmask_invalid'] = 'Chaque masque d’URL doit commencer par une barre oblique : « {$a} » n’en a pas.';
$string['placement_welcome'] = 'Texte d’accueil personnalisé (facultatif)';
$string['placement_welcome_help'] = 'Remplace le message d’accueil standard sur l’écran de démarrage du chat. Laisser vide pour utiliser le texte par défaut.';
$string['pluginname'] = 'Agent IA';
$string['pluginnotinstalled'] = 'Plugin non installé';
$string['previouschats'] = 'Chats précédents';
$string['privacy:metadata:aiprovider'] = 'Les chats sont envoyés au fournisseur IA choisi par l’administrateur du site, par exemple OpenAI, Azure OpenAI, Google Gemini ou Anthropic, afin qu’il puisse générer une réponse. Le plugin envoie chaque requête directement au fournisseur, et non par le sous-système IA de Moodle. L’entreprise qui reçoit les données, et la durée pendant laquelle elles y sont conservées, dépendent du fournisseur configuré sur le site et des conditions propres à ce fournisseur.';
$string['privacy:metadata:aiprovider:files'] = 'Les fichiers que l’utilisateur joint à un chat, et les fichiers que l’agent lit sur le site en son nom, envoyés afin que le modèle puisse en lire le contenu.';
$string['privacy:metadata:aiprovider:messages'] = 'L’historique du chat, renvoyé à chaque tour : les demandes de l’utilisateur, les réponses de l’assistant et les résultats des fonctions Moodle exécutées par l’agent, qui peuvent contenir des données personnelles concernant d’autres utilisateurs.';
$string['privacy:metadata:aiprovider:userid'] = 'L’identifiant de l’utilisateur qui mène le chat, inclus dans les instructions données au modèle afin qu’il puisse agir en son nom.';
$string['privacy:metadata:core_files'] = 'Les fichiers joints aux messages de l’agent IA.';
$string['privacy:metadata:feedback'] = 'Lorsque le feedback est activé et qu’un utilisateur évalue une réponse ou signale un appel de fonction en échec, l’échange évalué est envoyé aux développeurs du plugin Agent IA afin d’améliorer le comportement de l’agent. Rien n’est envoyé tant que l’utilisateur ne choisit pas d’envoyer un feedback, et la fonctionnalité peut être entièrement désactivée avec le réglage « Autoriser le feedback ».';
$string['privacy:metadata:feedback:freetext'] = 'Le commentaire que l’utilisateur écrit facultativement lors de l’envoi du feedback, transmis tel quel.';
$string['privacy:metadata:feedback:snapshot'] = 'Une transcription de l’échange évalué : la question de l’utilisateur, les réponses de l’assistant et les noms des fonctions appelées. Les adresses de courriel sont masquées et les arguments et résultats de ces fonctions sont omis, à l’exception des recherches de fonctions faites par l’agent lui-même. L’utilisateur peut modifier le texte avant de l’envoyer.';
$string['privacy:metadata:preference:tool_aiagent_closeconfirm_hidden'] = 'La préférence de ne plus afficher le dialogue de confirmation de fermeture.';
$string['privacy:metadata:preference:tool_aiagent_overlaysize'] = 'La taille que l’utilisateur a donnée au panneau de chat en superposition.';
$string['privacy:metadata:preference:tool_aiagent_sidebarwidth'] = 'La largeur que l’utilisateur a donnée au panneau de chat en barre latérale.';
$string['privacy:metadata:preference:tool_aiagent_viewtype'] = 'Le type de vue du chat (superposition, barre latérale ou plein écran) utilisé en dernier par l’utilisateur.';
$string['privacy:metadata:tool_aiagent_conversation'] = 'Les chats entre un utilisateur et l’agent IA. Les chats que l’utilisateur supprime sont archivés plutôt que retirés, afin que l’utilisation des jetons reste traçable.';
$string['privacy:metadata:tool_aiagent_conversation:timearchived'] = 'La date et l’heure de l’archivage du chat (suppression par l’utilisateur), le cas échéant.';
$string['privacy:metadata:tool_aiagent_conversation:timecreated'] = 'La date et l’heure de création du chat.';
$string['privacy:metadata:tool_aiagent_conversation:timelastactivity'] = 'Le moment où le dernier message a été enregistré dans le chat.';
$string['privacy:metadata:tool_aiagent_conversation:timemodified'] = 'La date et l’heure de la dernière mise à jour du chat.';
$string['privacy:metadata:tool_aiagent_conversation:title'] = 'Le nom du chat, généré à partir du premier message.';
$string['privacy:metadata:tool_aiagent_conversation:userid'] = 'L’utilisateur propriétaire du chat.';
$string['privacy:metadata:tool_aiagent_message'] = 'Les messages individuels d’un chat, y compris les demandes de l’utilisateur et les réponses de l’IA.';
$string['privacy:metadata:tool_aiagent_message:content'] = 'Le contenu du message.';
$string['privacy:metadata:tool_aiagent_message:pagecontext'] = 'Pour un message envoyé depuis le chat en superposition ou en barre latérale, l’adresse et le nom de la page que l’utilisateur lisait à ce moment-là.';
$string['privacy:metadata:tool_aiagent_message:role'] = 'L’auteur du message : l’utilisateur, l’assistant, le système ou une fonction.';
$string['privacy:metadata:tool_aiagent_message:timecreated'] = 'La date et l’heure de création du message.';
$string['privacy:metadata:tool_aiagent_run'] = 'Un enregistrement de chaque fois que l’agent IA a travaillé sur un message d’un chat, conservé un jour après la fin.';
$string['privacy:metadata:tool_aiagent_run:ip'] = 'L’adresse IP de l’utilisateur au moment de l’envoi du message, enregistrée avec les actions que l’agent IA a effectuées pour lui.';
$string['privacy:metadata:tool_aiagent_run:payload'] = 'Le contenu de la page que l’utilisateur consultait, lorsque l’agent IA a demandé à la lire.';
$string['privacy:metadata:tool_aiagent_run:timecreated'] = 'Le moment où l’agent IA a commencé à travailler sur le message.';
$string['privacy:metadata:tool_aiagent_run:userid'] = 'L’utilisateur qui a envoyé le message.';
$string['privacy:metadata:tool_aiagent_usage'] = 'L’utilisation des jetons enregistrée pour chaque requête IA, conservée pour le suivi de l’utilisation.';
$string['privacy:metadata:tool_aiagent_usage:completiontokens'] = 'Le nombre de jetons de sortie (complétion) utilisés.';
$string['privacy:metadata:tool_aiagent_usage:model'] = 'Le modèle IA qui a traité la requête.';
$string['privacy:metadata:tool_aiagent_usage:prompttokens'] = 'Le nombre de jetons d’entrée (prompt) utilisés.';
$string['privacy:metadata:tool_aiagent_usage:provider'] = 'Le fournisseur IA qui a traité la requête.';
$string['privacy:metadata:tool_aiagent_usage:timecreated'] = 'La date et l’heure de la requête.';
$string['providers_heading'] = 'Tous les fournisseurs IA';
$string['relevancescore'] = 'Score de pertinence';
$string['relevancescore_help'] = 'Le score de pertinence indique dans quelle mesure une fonction web service convient à l’agent IA, sur une échelle de 1 à 10.

**Les scores élevés (7-10)** sont attribués aux fonctions manifestement utiles à un assistant IA, comme créer des cours, inscrire des utilisateurs, rechercher du contenu ou récupérer des notes.

**Les scores intermédiaires (4-6)** sont typiques des opérations destructrices ou irréversibles (comme supprimer des cours ou désinscrire des utilisateurs), utiles mais plus risquées, ainsi que des fonctions de niche à l’usage limité.

**Les scores faibles (1-3)** sont attribués aux fonctions conçues pour la communication interne entre le navigateur et le serveur, aux fonctions qui ne requièrent pas d’authentification, aux fonctions obsolètes ou aux fonctions qui font double emploi avec de meilleures alternatives.

**Un score de 0** signifie que la fonction n’a pas encore été évaluée. C’est fréquent pour les fonctions des plugins tiers.

Le score de pertinence a servi à définir la valeur initiale par défaut de l’activation de chaque fonction. Les scores initiaux des composants du cœur de Moodle ont été générés par une IA et peuvent nécessiter une vérification manuelle.';
$string['removefilenamed'] = 'Supprimer le fichier : {$a}';
$string['renamechat'] = 'Renommer le chat';
$string['renamechat_label'] = 'Nouveau nom du chat';
$string['responses_endpoints'] = 'Points de terminaison personnalisés de la Responses API';
$string['responses_endpoints_desc'] = 'Remplace le point de terminaison de la Responses API lorsqu’un déploiement OpenAI ou Azure OpenAI hébergé ou servi par un proxy le propose à une adresse non standard. Laisser vide pour utiliser les valeurs par défaut intégrées. Sans effet lorsque le type d’API est Chat Completions.<br><br>
Par exemple, https://votre-ressource.azure.com/api/responses?api-version=preview. Le point de terminaison de la Files API est déduit en remplaçant /responses par /files et en conservant la chaîne de requête, les envois vont donc à https://votre-ressource.azure.com/api/files?api-version=preview.<br><br>
Si vous utilisez plusieurs instances de fournisseur, ajoutez une URL par ligne. Chaque fournisseur utilise la ligne dont l’hôte correspond à son propre point de terminaison d’API.';
$string['responses_endpoints_invalidline'] = 'Chaque ligne doit être une URL https complète dont le chemin se termine par /responses ; http n’est accepté que pour localhost. Ligne non valide : {$a}';
$string['resume_desc'] = 'Vous avez un chat récent. Reprenez où vous en étiez, ou commencez-en un nouveau.';
$string['resume_lastmessage'] = 'Dernier message il y a {$a}';
$string['resume_resume'] = 'Reprendre le dernier chat';
$string['resume_title'] = 'Ravi de vous revoir';
$string['sendmessage'] = 'Envoyer';
$string['settings'] = 'Paramètres de l’agent IA';
$string['showallfiles'] = 'Tout afficher';
$string['showfunctioncalls'] = 'Afficher les appels de fonction';
$string['skill_add'] = 'Ajouter une aptitude';
$string['skill_edit'] = 'Modifier l’aptitude';
$string['skill_save_close'] = 'Enregistrer et fermer';
$string['skill_save_preview'] = 'Enregistrer et prévisualiser';
$string['skill_saved'] = 'Aptitude enregistrée.';
$string['skilladd_aitip'] = 'Plutôt que de remplir ce formulaire à la main, vous pouvez demander à l’agent IA de construire l’aptitude pour vous : il peut trouver les bonnes fonctions et rédiger les instructions. <a href="{$a}">Ouvrir l’agent IA</a>.';
$string['skillbundled'] = 'Intégrée';
$string['skillbundledchangedinfo'] = 'Cette aptitude est fournie avec le plugin et a été modifiée sur ce site.';
$string['skillbundledchangedinfo_help'] = 'Demandez à l’agent IA de comparer cette aptitude avec la version fournie avec le plugin, et de rétablir cette version si vous ne souhaitez plus conserver vos modifications. Une aptitude que vous avez modifiée ne reçoit plus de mises à jour.';
$string['skillbundledinfo'] = 'Fournie avec le plugin. Elle peut être désactivée et modifiée, mais pas supprimée ni renommée.';
$string['skillbundlednodelete'] = 'Une aptitude fournie avec le plugin ne peut pas être supprimée. Désactivez-la plutôt.';
$string['skillbundlednorename'] = 'Le nom abrégé d’une aptitude fournie avec le plugin ne peut pas être modifié.';
$string['skillcapabilities_help'] = 'Déduites des fonctions principales de l’aptitude : un utilisateur ne peut utiliser l’aptitude que s’il possède au moins une de ces capacités dans un contexte quelconque du site. La liste regroupe les capacités requises par toutes les fonctions principales.';
$string['skillcapabilities_none'] = 'Aucune. L’aptitude est disponible pour tous les utilisateurs.';
$string['skillconfigured'] = 'Masques configurés';
$string['skilldeleted'] = 'Aptitude « {$a} » supprimée.';
$string['skilldescription'] = 'Description';
$string['skilldescription_help'] = 'À quoi sert l’aptitude, pour que l’assistant sache quand la charger. Décrivez la tâche ou l’activité concernée, pas les étapes à suivre. Ce texte apparaît à la fois dans la liste des aptitudes (pour les personnes) et dans le prompt système (pour l’assistant).';
$string['skillexists'] = 'Une aptitude avec le nom abrégé « {$a} » existe déjà.';
$string['skillimport_badloadmode'] = 'Le champ « loadmode » doit avoir l’une des valeurs suivantes : {$a}.';
$string['skillimport_badmasks'] = 'Les champs « mainfunctions » et « otherfunctions » doivent chacun contenir une liste de masques.';
$string['skillimport_badshortname'] = 'Chaque aptitude a besoin d’un nom abrégé valide (lettres, chiffres, trait d’union, tiret bas).';
$string['skillimport_invalidjson'] = 'Le fichier déposé n’est pas un JSON d’aptitude valide.';
$string['skillimport_missingfield'] = 'Champ obligatoire manquant : {$a}.';
$string['skillimported'] = 'Aptitude « {$a} » importée.';
$string['skillinstructions'] = 'Instructions';
$string['skillinstructions_help'] = 'Consignes chargées dans le chat en même temps que l’aptitude. N’incluez que ce qui n’est pas évident : l’assistant voit déjà chaque fonction chargée et sa description, ne répétez donc pas ce que fait une fonction et ne lui rappelez pas de transmettre des paramètres évidents. Notez l’ordre du déroulement, les décisions et les pièges que les descriptions ne couvrent pas, et introduisez par « Si ... » les étapes qui ne s’appliquent que parfois.';
$string['skillloadedevent'] = 'Aptitude chargée · {$a}';
$string['skillloadmode'] = 'Peut être utilisée';
$string['skillloadmode_dynamic'] = 'Uniquement chargée à la demande pendant le chat';
$string['skillloadmode_help'] = 'Lorsqu’un placement utilise l’aptitude comme aptitude initiale, les instructions de l’aptitude sont ajoutées aux instructions système dès le début du chat. Utilisez ce mode pour modifier la façon dont l’agent IA répond.

Une aptitude destinée à une tâche précise, comme la configuration du carnet de notes ou l’ajout de restrictions d’accès, peut être chargée à la demande, lorsque l’utilisateur demande quelque chose qu’elle couvre.';
$string['skillloadmode_initial'] = 'Uniquement comme aptitude initiale';
$string['skillloadmode_initial_or_dynamic'] = 'À la fois comme aptitude initiale et chargée à la demande';
$string['skillmainfunctions'] = 'Fonctions principales';
$string['skillmainfunctions_help'] = 'Un ensemble restreint de masques sélectionnant les fonctions de création et de mise à jour au cœur de l’aptitude. Les capacités de ces fonctions déterminent à qui l’aptitude est proposée : uniquement aux utilisateurs qui peuvent accéder à au moins l’une d’elles. Chaque masque correspond à un nom de fonction ou à un motif composant/nom (« * » est un joker ; un préfixe « ~ » retire les correspondances). Laisser vide pour proposer l’aptitude à tout le monde.';
$string['skillmatched'] = 'Correspondances ({$a})';
$string['skillmisconfigured'] = 'Actuellement indisponible pour tout le monde : aucune de ses fonctions principales ne se résout en une fonction activée.';
$string['skillname'] = 'Nom';
$string['skillname_help'] = 'Un nom d’affichage court et lisible pour l’aptitude, montré dans la liste des aptitudes.';
$string['skillnomatch'] = 'Aucune fonction activée ne correspond à ces motifs.';
$string['skillnotfound'] = 'Aucune aptitude trouvée : {$a}.';
$string['skillotherfunctions'] = 'Autres fonctions';
$string['skillotherfunctions_help'] = 'Masques pour les autres fonctions apportées par l’aptitude : lectures, utilitaires, ou un composant entier. Même syntaxe que pour les fonctions principales, mais celles-ci n’influent pas sur les personnes à qui l’aptitude est proposée. Laisser vide si l’aptitude n’a besoin d’aucune fonction supplémentaire.';
$string['skills_intro'] = '<p>Une aptitude regroupe des instructions spécialisées pour une tâche donnée et la liste des fonctions recommandées pour celle-ci. Utilisez les aptitudes pour les tâches courantes en plusieurs étapes où l’agent IA a tendance à se perdre ou ne trouve pas les bonnes fonctions, ou pour les tâches propres à votre organisation.</p><p>Une aptitude peut être utilisée de deux façons, au choix dans son réglage « Peut être utilisée ». Un placement peut la définir comme aptitude initiale, afin que ses instructions s’appliquent dès le début du chat. Ou bien l’agent IA peut la charger à la demande : il voit toujours les noms et les descriptions de ces aptitudes, et en charge une dès qu’il juge qu’elle convient à la demande de l’utilisateur. Une aptitude n’est disponible que pour les utilisateurs qui peuvent accéder à au moins une de ses fonctions principales. Par exemple, une aptitude conçue pour les enseignants ne sera pas visible par les étudiants.</p>';
$string['skillshortname'] = 'Nom abrégé';
$string['skillshortname_help'] = 'Un nom machine stable, unique sur l’ensemble du site : lettres, chiffres, trait d’union et tiret bas uniquement. Il peut être modifié par la suite, sauf si l’aptitude est fournie avec le plugin.';
$string['skilltags'] = 'Tags';
$string['skilltags_help'] = 'Les tags servent uniquement au filtrage et ne sont pas envoyés au modèle.';
$string['skilltoobroad'] = 'Correspond à {$a} fonctions, ce qui est peut-être trop large. Envisagez de restreindre les masques de fonctions.';
$string['skillunavailable'] = 'Indisponible';
$string['skillupdated'] = 'Aptitude « {$a} » mise à jour.';
$string['stop'] = 'Arrêter';
$string['stoppedafter'] = 'Arrêté après {$a}';
$string['stoppedbyuser'] = 'Vous avez arrêté l’agent. Saisissez un nouveau message pour continuer.';
$string['stopping'] = 'Arrêt en cours...';
$string['stoppingafterfunction'] = 'Arrêt dès la fin de cette fonction';
$string['suggestedprompt_edit'] = 'Modifier ce message avant de l’envoyer';
$string['suggestedprompt_send'] = 'Envoyer ce message';
$string['switchview'] = 'Changer de vue';
$string['systeminstruction'] = 'Instructions système personnalisées';
$string['systeminstruction_desc'] = 'Instructions personnalisées envoyées au modèle IA à chaque requête, définissant son comportement, son ton et ses possibilités. Laisser vide pour utiliser la valeur par défaut intégrée (affichée ci-dessous). Vous pouvez utiliser {siteurl} (URL du site), {userid} (identifiant de l’utilisateur courant) et {date} (date du jour, format ISO) comme espaces réservés ; ils sont remplacés lors de l’exécution. Instructions par défaut :{$a->default}

Toujours ajouté aux instructions système (par défaut ou personnalisées) :{$a->context}';
$string['tab_functions'] = 'Fonctions';
$string['tab_placements'] = 'Placements';
$string['tab_skills'] = 'Aptitudes';
$string['tagarea_tool_aiagent_functions'] = 'Tags des fonctions de l’agent IA';
$string['tagarea_tool_aiagent_skill'] = 'Tags des aptitudes de l’agent IA';
$string['task_cleanup_chats'] = 'Supprimer les anciens chats de l’agent IA';
$string['task_purge_provider_data'] = 'Supprimer les données de chat de l’agent IA chez le fournisseur IA';
$string['task_revalidate_license'] = 'Revalider la licence de l’agent IA';
$string['thinking'] = 'L’agent IA réfléchit...';
$string['timecreated'] = 'Date de création';
$string['timelastactivity'] = 'Dernière activité';
$string['timemodified'] = 'Dernière modification';
$string['tryagain'] = 'Réessayer';
$string['unavailable_envcheck'] = 'Cette fonction n’est pas disponible, car un réglage du site dont elle dépend n’est pas activé : {$a}.';
$string['unavailable_plugindisabled'] = 'Cette fonction n’est pas disponible, car le plugin {$a} est désactivé sur ce site.';
$string['unavailable_pluginnotinstalled'] = 'Cette fonction ne peut pas être utilisée, car le plugin {$a} n’est pas installé sur ce site.';
$string['usage_completiontokens'] = 'Jetons de sortie';
$string['usage_model'] = 'Modèle';
$string['usage_prompttokens'] = 'Jetons d’entrée';
$string['usage_provider'] = 'Fournisseur';
$string['usage_totaltokens'] = 'Total des jetons';
$string['viewdetails'] = 'Voir les détails';
$string['viewtype_fullscreen'] = 'Plein écran';
$string['viewtype_overlay'] = 'Superposition';
$string['viewtype_sidebar'] = 'Barre latérale';
$string['viewtypes'] = 'Vues disponibles';
$string['viewtypes_alldisabled_warning'] = 'L’agent IA n’est disponible pour personne, car toutes les vues sont désactivées dans les <a href="{$a}">paramètres</a>.';
$string['viewtypes_desc'] = 'Les vues du chat que les utilisateurs peuvent ouvrir : une petite superposition dans le coin de la page, une barre latérale à côté du contenu de la page, et la page de chat en plein écran. Décochez tout pour désactiver temporairement l’agent IA pour tous les utilisateurs.';
$string['viewtypes_unavailable'] = 'L’agent IA est actuellement indisponible.';
$string['welcome_skillsmore'] = '+{$a} autres';
$string['welcome_tryasking'] = 'Essayez de demander';
$string['welcomedesc'] = 'Interrogez l’agent IA sur votre site, vos cours, vos utilisateurs ou vos contenus. Il peut lire et, avec votre approbation, apporter des modifications.';
$string['welcometitle'] = 'Bienvenue, {$a}';
$string['workedfor'] = 'A travaillé pendant {$a}';
$string['working'] = 'Travail en cours';
$string['workingfor'] = 'Travaille depuis {$a}';
