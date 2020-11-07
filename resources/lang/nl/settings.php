<?php
/**
 * Settings text strings
 * Contains all text strings used in the general settings sections of BookStack
 * including users and roles.
 */
return [

    // Common Messages
    'settings' => 'Instellingen',
    'settings_save' => 'Instellingen opslaan',
    'settings_save_success' => 'Instellingen Opgeslagen',

    // App Settings
    'app_customization' => 'Aanpassingen',
    'app_features_security' => 'Functies en beveiliging',
    'app_name' => 'Applicatienaam',
    'app_name_desc' => 'De applicatienaam wordt in e-mails in in de header weergegeven.',
    'app_name_header' => 'Applicatienaam in de header weergeven?',
    'app_public_access' => 'Openbare toegang',
    'app_public_access_desc' => 'Door deze optie in te schakelen, krijgen bezoekers die niet zijn ingelogd, toegang tot content in je BookStack.',
    'app_public_access_desc_guest' => 'Toegang voor openbare bezoekers kan worden gecontroleerd via de "Guest" gebruiker.',
    'app_public_access_toggle' => 'Openbare toegang toestaan',
    'app_public_viewing' => 'Publieke bewerkingen toestaan?',
    'app_secure_images' => 'Beter beveiligide afbeeldingen gebruiken?',
    'app_secure_images_toggle' => 'Hogere beveiliging geuploade afbeeldingen inschakelen',
    'app_secure_images_desc' => 'Omwille van de performance zijn alle afbeeldingen publiek toegankelijk. Zorg ervoor dat je de \'directory index\' niet hebt ingeschakeld.',
    'app_editor' => 'Pagina Bewerken',
    'app_editor_desc' => 'Selecteer welke tekstverwerker je wilt gebruiken.',
    'app_custom_html' => 'Speciale HTML toevoegen',
    'app_custom_html_desc' => 'Alles wat je hier toevoegd wordt in de <head> sectie van elke pagina meengenomen. Dit kun je bijvoorbeeld voor analytics gebruiken.',
    'app_custom_html_disabled_notice' => 'Aangepaste HTML-hoofd-inhoud is uitgeschakeld op deze instellingenpagina om ervoor te zorgen dat breekbare wijzigingen ongedaan gemaakt kunnen worden.',
    'app_logo' => 'Applicatielogo',
    'app_logo_desc' => 'De afbeelding moet 43px hoog zijn. <br>Grotere afbeeldingen worden geschaald.',
    'app_primary_color' => 'Applicatie hoofdkleur',
    'app_primary_color_desc' => 'Geef een hexadecimale waarde. <br>Als je niks invult wordt de standaardkleur gebruikt.',
    'app_homepage' => 'Applicatie Homepagina',
    'app_homepage_desc' => 'Selecteer een weergave om weer te geven op de homepage in plaats van de standaard weergave. Paginarechten worden genegeerd voor geselecteerde pagina\'s.',
    'app_homepage_select' => 'Selecteer een pagina',
    'app_disable_comments' => 'Reacties uitschakelen',
    'app_disable_comments_toggle' => 'Opmerkingen uitschakelen',
    'app_disable_comments_desc' => 'Schakel opmerkingen uit op alle pagina\'s in de applicatie. Bestaande opmerkingen worden niet getoond.',

    // Color settings
    'content_colors' => 'Kleuren inhoud',
    'content_colors_desc' => 'Stelt de kleuren in voor alle elementen in de pagina-organisatieleiding. Het kiezen van kleuren met dezelfde helderheid als de standaard kleuren wordt aanbevolen voor de leesbaarheid.',
    'bookshelf_color' => 'Kleur van de Boekenplank',
    'book_color' => 'Kleur van het Boek',
    'chapter_color' => 'Kleur van het Hoofdstuk',
    'page_color' => 'Pagina kleur',
    'page_draft_color' => 'Klad pagina kleur',

    // Registration Settings
    'reg_settings' => 'Registratieinstellingen',
    'reg_enable' => 'Registratie inschakelen',
    'reg_enable_toggle' => 'Registratie inschakelen',
    'reg_enable_desc' => 'Wanneer registratie is ingeschakeld, kan de gebruiker zich aanmelden als een gebruiker. Na registratie krijgen ze een enkele, standaard gebruikersrol.',
    'reg_default_role' => 'Standaard rol na registratie',
    'reg_enable_external_warning' => 'De optie hierboven wordt niet gebruikt terwijl LDAP authenticatie actief is. Gebruikersaccounts voor niet-bestaande leden zullen automatisch worden gecreëerd als authenticatie tegen het gebruikte LDAP-systeem succesvol is.',
    'reg_email_confirmation' => 'E-mail bevestiging',
    'reg_email_confirmation_toggle' => 'E-mailbevestiging verplichten',
    'reg_confirm_email_desc' => 'Als domeinrestricties aan staan dan is altijd e-maibevestiging nodig. Onderstaande instelling wordt dan genegeerd.',
    'reg_confirm_restrict_domain' => 'Beperk registratie tot een maildomein',
    'reg_confirm_restrict_domain_desc' => 'Geen een komma-gescheiden lijst van domeinnamen die gebruikt mogen worden bij registratie. <br> Let op: na registratie kunnen gebruikers hun e-mailadres nog steeds wijzigen.',
    'reg_confirm_restrict_domain_placeholder' => 'Geen beperkingen ingesteld',

    // Maintenance settings
    'maint' => 'Onderhoud',
    'maint_image_cleanup' => 'Afbeeldingen opschonen',
    'maint_image_cleanup_desc' => "Scant pagina- en revisie inhoud om te controleren welke afbeeldingen en tekeningen momenteel worden gebruikt en welke afbeeldingen overbodig zijn. Zorg ervoor dat je een volledige database en afbeelding backup maakt voordat je dit uitvoert.",
    'maint_image_cleanup_ignore_revisions' => 'Afbeeldingen in revisies negeren',
    'maint_image_cleanup_run' => 'Opschonen uitvoeren',
    'maint_image_cleanup_warning' => ':count potentieel ongebruikte afbeeldingen gevonden. Weet u zeker dat u deze afbeeldingen wilt verwijderen?',
    'maint_image_cleanup_success' => ':count potentieel ongebruikte afbeeldingen gevonden en verwijderd!',
    'maint_image_cleanup_nothing_found' => 'Geen ongebruikte afbeeldingen gevonden, niets verwijderd!',
    'maint_send_test_email' => 'Stuur een test e-mail',
    'maint_send_test_email_desc' => 'Dit verstuurt een test e-mail naar het e-mailadres dat je in je profiel hebt opgegeven.',
    'maint_send_test_email_run' => 'Test e-mail verzenden',
    'maint_send_test_email_success' => 'E-mail verzonden naar :address',
    'maint_send_test_email_mail_subject' => 'Test E-mail',
    'maint_send_test_email_mail_greeting' => 'E-mailbezorging lijkt te werken!',
    'maint_send_test_email_mail_text' => 'Gefeliciteerd! Nu je deze e-mailmelding hebt ontvangen, lijken je e-mailinstellingen correct te zijn geconfigureerd.',
    'maint_recycle_bin_desc' => 'Deleted shelves, books, chapters & pages are sent to the recycle bin so they can be restored or permanently deleted. Older items in the recycle bin may be automatically removed after a while depending on system configuration.',
    'maint_recycle_bin_open' => 'Open Recycle Bin',

    // Recycle Bin
    'recycle_bin' => 'Recycle Bin',
    'recycle_bin_desc' => 'Here you can restore items that have been deleted or choose to permanently remove them from the system. This list is unfiltered unlike similar activity lists in the system where permission filters are applied.',
    'recycle_bin_deleted_item' => 'Deleted Item',
    'recycle_bin_deleted_by' => 'Deleted By',
    'recycle_bin_deleted_at' => 'Deletion Time',
    'recycle_bin_permanently_delete' => 'Permanently Delete',
    'recycle_bin_restore' => 'Restore',
    'recycle_bin_contents_empty' => 'The recycle bin is currently empty',
    'recycle_bin_empty' => 'Empty Recycle Bin',
    'recycle_bin_empty_confirm' => 'This will permanently destroy all items in the recycle bin including content contained within each item. Are you sure you want to empty the recycle bin?',
    'recycle_bin_destroy_confirm' => 'This action will permanently delete this item, along with any child elements listed below, from the system and you will not be able to restore this content. Are you sure you want to permanently delete this item?',
    'recycle_bin_destroy_list' => 'Items to be Destroyed',
    'recycle_bin_restore_list' => 'Items to be Restored',
    'recycle_bin_restore_confirm' => 'This action will restore the deleted item, including any child elements, to their original location. If the original location has since been deleted, and is now in the recycle bin, the parent item will also need to be restored.',
    'recycle_bin_restore_deleted_parent' => 'The parent of this item has also been deleted. These will remain deleted until that parent is also restored.',
    'recycle_bin_destroy_notification' => 'Deleted :count total items from the recycle bin.',
    'recycle_bin_restore_notification' => 'Restored :count total items from the recycle bin.',

    // Audit Log
    'audit' => 'Audit Log',
    'audit_desc' => 'This audit log displays a list of activities tracked in the system. This list is unfiltered unlike similar activity lists in the system where permission filters are applied.',
    'audit_event_filter' => 'Event Filter',
    'audit_event_filter_no_filter' => 'No Filter',
    'audit_deleted_item' => 'Deleted Item',
    'audit_deleted_item_name' => 'Name: :name',
    'audit_table_user' => 'User',
    'audit_table_event' => 'Event',
    'audit_table_item' => 'Related Item',
    'audit_table_date' => 'Activity Date',
    'audit_date_from' => 'Date Range From',
    'audit_date_to' => 'Date Range To',

    // Role Settings
    'roles' => 'Rollen',
    'role_user_roles' => 'Gebruikrollen',
    'role_create' => 'Nieuwe Rol Maken',
    'role_create_success' => 'Rol succesvol aangemaakt',
    'role_delete' => 'Rol Verwijderen',
    'role_delete_confirm' => 'Dit verwijdert de rol \':roleName\'.',
    'role_delete_users_assigned' => 'Er zijn :userCount gebruikers met deze rol. Selecteer hieronder een nieuwe rol als je deze gebruikers een andere rol wilt geven.',
    'role_delete_no_migration' => "Geen gebruikers migreren",
    'role_delete_sure' => 'Weet je zeker dat je deze rol wilt verwijderen?',
    'role_delete_success' => 'Rol succesvol verwijderd',
    'role_edit' => 'Rol Bewerken',
    'role_details' => 'Rol Details',
    'role_name' => 'Rolnaam',
    'role_desc' => 'Korte beschrijving van de rol',
    'role_external_auth_id' => 'Externe authenticatie ID\'s',
    'role_system' => 'Systeem Permissies',
    'role_manage_users' => 'Gebruikers beheren',
    'role_manage_roles' => 'Rollen en rechten beheren',
    'role_manage_entity_permissions' => 'Beheer alle boeken-, hoofdstukken- en paginaresitrcties',
    'role_manage_own_entity_permissions' => 'Beheer restricties van je eigen boeken, hoofdstukken en pagina\'s',
    'role_manage_page_templates' => 'Paginasjablonen beheren',
    'role_access_api' => 'Ga naar systeem API',
    'role_manage_settings' => 'Beheer app instellingen',
    'role_asset' => 'Asset Permissies',
    'roles_system_warning' => 'Be aware that access to any of the above three permissions can allow a user to alter their own privileges or the privileges of others in the system. Only assign roles with these permissions to trusted users.',
    'role_asset_desc' => 'Deze permissies bepalen de standaardtoegangsrechten. Permissies op boeken, hoofdstukken en pagina\'s overschrijven deze instelling.',
    'role_asset_admins' => 'Beheerders krijgen automatisch toegang tot alle inhoud, maar deze opties kunnen interface opties tonen of verbergen.',
    'role_all' => 'Alles',
    'role_own' => 'Eigen',
    'role_controlled_by_asset' => 'Gecontroleerd door de asset waar deze is geüpload',
    'role_save' => 'Rol Opslaan',
    'role_update_success' => 'Rol succesvol bijgewerkt',
    'role_users' => 'Gebruikers in deze rol',
    'role_users_none' => 'Geen enkele gebruiker heeft deze rol',

    // Users
    'users' => 'Gebruikers',
    'user_profile' => 'Gebruikersprofiel',
    'users_add_new' => 'Gebruiker toevoegen',
    'users_search' => 'Gebruiker zoeken',
    'users_details' => 'Gebruiker details',
    'users_details_desc' => 'Stel een weergavenaam en e-mailadres in voor deze gebruiker. Het e-mailadres zal worden gebruikt om in te loggen.',
    'users_details_desc_no_email' => 'Stel een weergavenaam in voor deze gebruiker zodat anderen deze kunnen herkennen.',
    'users_role' => 'Gebruikersrollen',
    'users_role_desc' => 'Selecteer aan welke rollen deze gebruiker zal worden toegewezen. Als een gebruiker aan meerdere rollen wordt toegewezen worden de machtigingen van deze rollen samengevoegd en krijgen ze alle machtigingen van de toegewezen rollen.',
    'users_password' => 'Wachtwoord gebruiker',
    'users_password_desc' => 'Stel een wachtwoord in dat gebruikt wordt om in te loggen op de applicatie. Dit moet minstens 6 tekens lang zijn.',
    'users_send_invite_text' => 'U kunt ervoor kiezen om deze gebruiker een uitnodigingsmail te sturen waarmee hij zijn eigen wachtwoord kan instellen, anders kunt u zelf zijn wachtwoord instellen.',
    'users_send_invite_option' => 'Stuur gebruiker uitnodigings e-mail',
    'users_external_auth_id' => 'Externe authenticatie ID',
    'users_external_auth_id_desc' => 'This is the ID used to match this user when communicating with your external authentication system.',
    'users_password_warning' => 'Vul onderstaande formulier alleen in als je het wachtwoord wilt aanpassen:',
    'users_system_public' => 'De eigenschappen van deze gebruiker worden voor elke gastbezoeker gebruikt. Er kan niet mee ingelogd worden en wordt automatisch toegewezen.',
    'users_delete' => 'Verwijder gebruiker',
    'users_delete_named' => 'Verwijder gebruiker :userName',
    'users_delete_warning' => 'Dit zal de gebruiker \':userName\' volledig uit het systeem verwijderen.',
    'users_delete_confirm' => 'Weet je zeker dat je deze gebruiker wilt verwijderen?',
    'users_delete_success' => 'Gebruiker succesvol verwijderd',
    'users_edit' => 'Bewerk Gebruiker',
    'users_edit_profile' => 'Bewerk Profiel',
    'users_edit_success' => 'Gebruiker succesvol bijgewerkt',
    'users_avatar' => 'Avatar',
    'users_avatar_desc' => 'De afbeelding moet vierkant zijn en ongeveer 256px breed.',
    'users_preferred_language' => 'Voorkeurstaal',
    'users_preferred_language_desc' => 'Deze optie wijzigt de taal die gebruikt wordt voor de gebruikersinterface. Dit heeft geen invloed op de door de gebruiker gemaakte inhoud.',
    'users_social_accounts' => 'Sociale accounts',
    'users_social_accounts_info' => 'Hier kun je accounts verbinden om makkelijker in te loggen. Via je profiel kun je ook weer rechten intrekken die bij deze social accountsh horen.',
    'users_social_connect' => 'Account Verbinden',
    'users_social_disconnect' => 'Account Ontkoppelen',
    'users_social_connected' => ':socialAccount account is succesvol aan je profiel gekoppeld.',
    'users_social_disconnected' => ':socialAccount account is succesvol ontkoppeld van je profiel.',
    'users_api_tokens' => 'API Tokens',
    'users_api_tokens_none' => 'No API tokens have been created for this user',
    'users_api_tokens_create' => 'Create Token',
    'users_api_tokens_expires' => 'Expires',
    'users_api_tokens_docs' => 'API Documentation',

    // API Tokens
    'user_api_token_create' => 'Create API Token',
    'user_api_token_name' => 'Naam',
    'user_api_token_name_desc' => 'Give your token a readable name as a future reminder of its intended purpose.',
    'user_api_token_expiry' => 'Vervaldatum',
    'user_api_token_expiry_desc' => 'Set a date at which this token expires. After this date, requests made using this token will no longer work. Leaving this field blank will set an expiry 100 years into the future.',
    'user_api_token_create_secret_message' => 'Immediately after creating this token a "Token ID" & "Token Secret" will be generated and displayed. The secret will only be shown a single time so be sure to copy the value to somewhere safe and secure before proceeding.',
    'user_api_token_create_success' => 'API token successfully created',
    'user_api_token_update_success' => 'API token successfully updated',
    'user_api_token' => 'API Token',
    'user_api_token_id' => 'Token ID',
    'user_api_token_id_desc' => 'This is a non-editable system generated identifier for this token which will need to be provided in API requests.',
    'user_api_token_secret' => 'Token Secret',
    'user_api_token_secret_desc' => 'This is a system generated secret for this token which will need to be provided in API requests. This will only be displayed this one time so copy this value to somewhere safe and secure.',
    'user_api_token_created' => 'Token created :timeAgo',
    'user_api_token_updated' => 'Token updated :timeAgo',
    'user_api_token_delete' => 'Token Verwijderen',
    'user_api_token_delete_warning' => 'This will fully delete this API token with the name \':tokenName\' from the system.',
    'user_api_token_delete_confirm' => 'Are you sure you want to delete this API token?',
    'user_api_token_delete_success' => 'API token successfully deleted',

    //! If editing translations files directly please ignore this in all
    //! languages apart from en. Content will be auto-copied from en.
    //!////////////////////////////////
    'language_select' => [
        'en' => 'English',
        'ar' => 'العربية',
        'bg' => 'Bǎlgarski',
        'cs' => 'Česky',
        'da' => 'Dansk',
        'de' => 'Deutsch (Sie)',
        'de_informal' => 'Deutsch (Du)',
        'es' => 'Español',
        'es_AR' => 'Español Argentina',
        'fr' => 'Français',
        'he' => 'עברית',
        'hu' => 'Magyar',
        'it' => 'Italian',
        'ja' => '日本語',
        'ko' => '한국어',
        'nl' => 'Nederlands',
        'pl' => 'Polski',
        'pt_BR' => 'Português do Brasil',
        'ru' => 'Русский',
        'sk' => 'Slovensky',
        'sl' => 'Slovenščina',
        'sv' => 'Svenska',
        'tr' => 'Türkçe',
        'uk' => 'Українська',
        'vi' => 'Tiếng Việt',
        'zh_CN' => '简体中文',
        'zh_TW' => '繁體中文',
    ]
    //!////////////////////////////////
];
