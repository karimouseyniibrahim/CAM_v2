-- --------------------------------------------------------
-- Hôte :                        localhost
-- Version du serveur:           5.6.35 - MySQL Community Server (GPL)
-- SE du serveur:                Win64
-- HeidiSQL Version:             9.5.0.5332
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Listage de la structure de la base pour cam-souk-akhras-v2
DROP DATABASE IF EXISTS `cam-souk-akhras-v2`;
CREATE DATABASE IF NOT EXISTS `cam-souk-akhras-v2` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `cam-souk-akhras-v2`;

-- Listage de la structure de la table cam-souk-akhras-v2. artisan
DROP TABLE IF EXISTS `artisan`;
CREATE TABLE IF NOT EXISTS `artisan` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `numero_artisan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telephone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `artisan_numero_artisan_unique` (`numero_artisan`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table cam-souk-akhras-v2.artisan : ~1 rows (environ)
/*!40000 ALTER TABLE `artisan` DISABLE KEYS */;
INSERT INTO `artisan` (`id`, `numero_artisan`, `name`, `email`, `telephone`, `address`, `created_at`, `updated_at`) VALUES
	(1, 'A001', '{"en":"Issa","ar":"Issa"}', 'ibrahim.karimouseyni@yahoo.com', '0025555955', 'RU04', '2019-03-07 11:29:55', '2019-03-07 11:29:55');
/*!40000 ALTER TABLE `artisan` ENABLE KEYS */;

-- Listage de la structure de la table cam-souk-akhras-v2. categorie
DROP TABLE IF EXISTS `categorie`;
CREATE TABLE IF NOT EXISTS `categorie` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table cam-souk-akhras-v2.categorie : ~2 rows (environ)
/*!40000 ALTER TABLE `categorie` DISABLE KEYS */;
INSERT INTO `categorie` (`id`, `title`, `created_at`, `updated_at`) VALUES
	(1, '{"en":"Genaral","ar":"العام"}', '2019-03-05 19:54:45', '2019-03-05 19:54:45'),
	(2, '{"en":"cars","ar":"السيارات"}', '2019-03-05 19:54:45', '2019-03-05 19:54:45');
/*!40000 ALTER TABLE `categorie` ENABLE KEYS */;

-- Listage de la structure de la table cam-souk-akhras-v2. command
DROP TABLE IF EXISTS `command`;
CREATE TABLE IF NOT EXISTS `command` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` text COLLATE utf8mb4_unicode_ci,
  `command` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table cam-souk-akhras-v2.command : ~10 rows (environ)
/*!40000 ALTER TABLE `command` DISABLE KEYS */;
INSERT INTO `command` (`id`, `name`, `options`, `command`, `created_at`, `updated_at`) VALUES
	(1, 'Page', 'title:string:min-1_max-70_required:true,body:text:min-1_required:true,active:boolean:required_integer:false', 'laraflat:admin_model', '2019-03-05 19:54:44', '2019-03-05 19:54:44'),
	(2, 'PageComment', 'page', 'laraflat:comment', '2019-03-05 19:54:44', '2019-03-05 19:54:44'),
	(3, 'Categorie', 'title:string:min-1_max-80_required:false', 'laraflat:admin_model', '2019-03-05 19:54:44', '2019-03-05 19:54:44'),
	(6, 'Inscription', 'numero_artisan:string:nullable:false,name:string:required:false,email:string:nullable_email:false,adresse:string:nullable:false,telephone:string:nullable:false,status:string:nullable:false,formation_id:integer:required:false', 'laraflat:admin_model', '2019-03-06 15:08:59', '2019-03-06 15:08:59'),
	(7, 'Section', 'name:string:required:true,description:longText:nullable:true,image:string:image:false', 'laraflat:admin_model', '2019-03-06 20:38:30', '2019-03-06 20:38:30'),
	(8, 'Local', 'name:string:required:true,description:longText:nullable:true,image:string:image:false,price:double:required:false,area:double:required:false,section_id:integer::false', 'laraflat:admin_model', '2019-03-06 20:53:17', '2019-03-06 20:53:17'),
	(9, 'Artisan', 'numero_artisan:string:required:false,name:string:required:true,email:string:nullable_email:false,telephone:string:required:false,address:string:nullable:false', 'laraflat:admin_model', '2019-03-06 20:55:29', '2019-03-06 20:55:29'),
	(10, 'Request', 'artisan_id:integer:required:false,section_id:integer:required:false,local_id:integer:required:false,status:string:nullable:false', 'laraflat:admin_model', '2019-03-06 23:20:03', '2019-03-06 23:20:03'),
	(11, 'News', 'title:string:required:true,description:longText:required:true,image:string:image:false', 'laraflat:admin_model', '2019-03-07 16:14:19', '2019-03-07 16:14:19'),
	(12, 'Galery', 'name:string:required:true,description:longText:nullable:true,images:longText:image-500:false', 'laraflat:admin_model', '2019-03-07 18:14:20', '2019-03-07 18:14:20');
/*!40000 ALTER TABLE `command` ENABLE KEYS */;

-- Listage de la structure de la table cam-souk-akhras-v2. contacts
DROP TABLE IF EXISTS `contacts`;
CREATE TABLE IF NOT EXISTS `contacts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table cam-souk-akhras-v2.contacts : ~0 rows (environ)
/*!40000 ALTER TABLE `contacts` DISABLE KEYS */;
/*!40000 ALTER TABLE `contacts` ENABLE KEYS */;

-- Listage de la structure de la table cam-souk-akhras-v2. formation
DROP TABLE IF EXISTS `formation`;
CREATE TABLE IF NOT EXISTS `formation` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `libelle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `price` double NOT NULL,
  `places` int(11) NOT NULL,
  `debut_formation` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fin_formation` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `formation_libelle_unique` (`libelle`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table cam-souk-akhras-v2.formation : ~0 rows (environ)
/*!40000 ALTER TABLE `formation` DISABLE KEYS */;
INSERT INTO `formation` (`id`, `libelle`, `description`, `price`, `places`, `debut_formation`, `fin_formation`, `image`, `created_at`, `updated_at`) VALUES
	(1, '{"en":"Complete Training 01","ar":"Complete Training 01"}', '{"en":"<p>Complete Training 01 English<\\/p>","ar":"<p>Complete Training 01 Arabic<\\/p>"}', 15000, 25, '2019-03-07', '2019-03-16', '65525_1551884509.jpg', '2019-03-06 15:01:49', '2019-03-06 15:01:49');
/*!40000 ALTER TABLE `formation` ENABLE KEYS */;

-- Listage de la structure de la table cam-souk-akhras-v2. groups
DROP TABLE IF EXISTS `groups`;
CREATE TABLE IF NOT EXISTS `groups` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table cam-souk-akhras-v2.groups : ~2 rows (environ)
/*!40000 ALTER TABLE `groups` DISABLE KEYS */;
INSERT INTO `groups` (`id`, `name`, `slug`, `description`, `created_at`, `updated_at`) VALUES
	(1, 'Admin', 'admin', 'Access to User , permission , role , groups roles', '2019-03-05 19:54:26', '2019-03-05 19:54:26'),
	(2, 'User', 'user', 'User group ', NULL, NULL);
/*!40000 ALTER TABLE `groups` ENABLE KEYS */;

-- Listage de la structure de la table cam-souk-akhras-v2. group_role
DROP TABLE IF EXISTS `group_role`;
CREATE TABLE IF NOT EXISTS `group_role` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `group_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `group_role_group_id_foreign` (`group_id`),
  KEY `group_role_role_id_foreign` (`role_id`),
  CONSTRAINT `group_role_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE,
  CONSTRAINT `group_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table cam-souk-akhras-v2.group_role : ~0 rows (environ)
/*!40000 ALTER TABLE `group_role` DISABLE KEYS */;
/*!40000 ALTER TABLE `group_role` ENABLE KEYS */;

-- Listage de la structure de la table cam-souk-akhras-v2. inscription
DROP TABLE IF EXISTS `inscription`;
CREATE TABLE IF NOT EXISTS `inscription` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `numero_artisan` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `adresse` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telephone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `formation_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `inscription_formation_id_foreign` (`formation_id`),
  CONSTRAINT `inscription_formation_id_foreign` FOREIGN KEY (`formation_id`) REFERENCES `formation` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table cam-souk-akhras-v2.inscription : ~2 rows (environ)
/*!40000 ALTER TABLE `inscription` DISABLE KEYS */;
INSERT INTO `inscription` (`id`, `numero_artisan`, `name`, `email`, `adresse`, `telephone`, `status`, `formation_id`, `created_at`, `updated_at`) VALUES
	(1, 'KIS001', 'Ibrahim', 'habibou776@gmail.com', 'Algeria', '02639645', NULL, 1, '2019-03-06 20:26:55', '2019-03-06 20:26:55'),
	(2, 'Kis002', 'Mahamet Habibou', 'habibou776@gmail.com', 'Algeria', '02639645', NULL, 1, '2019-03-06 20:30:54', '2019-03-06 20:30:54');
/*!40000 ALTER TABLE `inscription` ENABLE KEYS */;

-- Listage de la structure de la table cam-souk-akhras-v2. items
DROP TABLE IF EXISTS `items`;
CREATE TABLE IF NOT EXISTS `items` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(11) NOT NULL,
  `order` int(11) NOT NULL,
  `controller_path` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `menu_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `items_menu_id_foreign` (`menu_id`),
  CONSTRAINT `items_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menu` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=60 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table cam-souk-akhras-v2.items : ~46 rows (environ)
/*!40000 ALTER TABLE `items` DISABLE KEYS */;
INSERT INTO `items` (`id`, `name`, `link`, `type`, `icon`, `parent_id`, `order`, `controller_path`, `menu_id`, `created_at`, `updated_at`) VALUES
	(1, '{"ar":" الرئيسية ","en":"Home"}', '/admin/home', '', '<i class="material-icons">home</i>', 0, 0, '["App\\\\Application\\\\Controllers\\\\Admin\\\\HomeController"]', 1, NULL, '2019-03-07 16:08:16'),
	(3, '{"ar":"  المستخدمين ","en":"User"}', '#', '', '<i class="material-icons">account_circle</i>', 0, 3, '["App\\\\Application\\\\Controllers\\\\Admin\\\\UserController","App\\\\Application\\\\Controllers\\\\Admin\\\\GroupController","App\\\\Application\\\\Controllers\\\\Admin\\\\RoleController","App\\\\Application\\\\Controllers\\\\Admin\\\\Development\\\\PermissionController"]', 1, NULL, '2019-03-07 16:08:16'),
	(4, '{"ar":" اعدادت الموقع ","en":"Setting"}', '#', '', '<i class="material-icons">insert_emoticon</i>', 0, 4, '["App\\\\Application\\\\Controllers\\\\Admin\\\\SettingController","App\\\\Application\\\\Controllers\\\\Admin\\\\HomeController","App\\\\Application\\\\Controllers\\\\Admin\\\\MenuController"]', 1, NULL, '2019-03-07 16:08:17'),
	(5, '{"ar":" الصفحات ","en":"Page"}', '/admin/page', '', '<i class="material-icons">find_in_page</i>', 0, 5, '["App\\\\Application\\\\Controllers\\\\Admin\\\\PageController"]', 1, NULL, '2019-03-07 16:08:17'),
	(6, '{"ar":" ادارة الملفات ","en":"File Manager"}', '/admin/file-manager', '', '<i class="material-icons">folder</i>', 0, 6, '["App\\\\Application\\\\Controllers\\\\Admin\\\\HomeController"]', 1, NULL, '2019-03-07 16:08:17'),
	(7, '{"ar":" سجل البينات ","en":"Logs"}', '/admin/log', '', '<i class="material-icons">info</i>', 0, 7, '["App\\\\Application\\\\Controllers\\\\Admin\\\\LogController"]', 1, NULL, '2019-03-07 16:08:17'),
	(8, '{"ar":" الاحصائيات ","en":"Statistics"}', '/admin/links', '', '<i class="material-icons">insert_chart</i>', 0, 8, '["App\\\\Application\\\\Controllers\\\\Admin\\\\UserController"]', 1, NULL, '2019-03-07 16:08:17'),
	(9, '{"ar":" اتصل بنا ","en":"Contact Us"}', '/admin/contact', '', '<i class="material-icons">perm_contact_calendar</i>', 0, 9, '["App\\\\Application\\\\Controllers\\\\Admin\\\\ContactController"]', 1, NULL, '2019-03-07 16:08:17'),
	(10, '{"ar":" المستخدمين ","en":"Users"}', '/admin/user', '', NULL, 3, 0, '["App\\\\Application\\\\Controllers\\\\Admin\\\\UserController"]', 1, NULL, '2019-03-07 16:08:16'),
	(11, '{"ar":" جروبات الاعضاء ","en":"Groups"}', '/admin/group', '', NULL, 3, 1, '["App\\\\Application\\\\Controllers\\\\Admin\\\\GroupController"]', 1, NULL, '2019-03-07 16:08:17'),
	(12, '{"ar":" قوانين الاستخدام ","en":"Roles"}', '/admin/role', '', NULL, 3, 2, '["App\\\\Application\\\\Controllers\\\\Admin\\\\RoleController"]', 1, NULL, '2019-03-07 16:08:17'),
	(13, '{"ar":" التصاريح ","en":"Permissions"}', '/admin/permission', '', NULL, 3, 3, '["App\\\\Application\\\\Controllers\\\\Admin\\\\Development\\\\PermissionController"]', 1, NULL, '2019-03-07 16:08:17'),
	(14, '{"ar":" ايقونات الموقع ","en":"Icons"}', '/admin/icons', '', NULL, 4, 0, '["App\\\\Application\\\\Controllers\\\\Admin\\\\HomeController"]', 1, NULL, '2019-03-07 16:08:17'),
	(15, '{"ar":"  التوثيق ","en":"Docs"}', '/admin/docs', '', NULL, 4, 1, '["App\\\\Application\\\\Controllers\\\\Admin\\\\HomeController"]', 1, NULL, '2019-03-07 16:08:17'),
	(16, '{"ar":" اعدادت الموقع ","en":"Settings"}', '/admin/setting', '', NULL, 4, 2, '["App\\\\Application\\\\Controllers\\\\Admin\\\\SettingController"]', 1, NULL, '2019-03-07 16:08:17'),
	(17, '{"ar":" القوائم ","en":"Menu"}', '/admin/menu', '', NULL, 4, 3, '["App\\\\Application\\\\Controllers\\\\Admin\\\\MenuController"]', 1, NULL, '2019-03-07 16:08:17'),
	(18, '{"ar":" لارافلات ","en":"laraFalt"}', 'https://laraflat.com/', 'blank', NULL, 0, 1, '', 2, NULL, NULL),
	(19, '{"ar":" خدمات ويب ","en":"5dmat-web"}', 'https://5dmat-web.com/', 'blank', NULL, 0, 2, '', 2, NULL, NULL),
	(20, '{"ar":" ستريم لاب ","en":"StreamLab"}', 'https://streamlab.io/', 'blank', NULL, 0, 3, '', 2, NULL, NULL),
	(21, '{"ar":" تطوير  ","en":"Develop"}', '#', '', '<i class="material-icons">settings</i>', 0, 10, '["App\\\\Application\\\\Controllers\\\\Admin\\\\RelationController","App\\\\Application\\\\Controllers\\\\Admin\\\\TranslationController","App\\\\Application\\\\Controllers\\\\Admin\\\\CommandsController","App\\\\Application\\\\Controllers\\\\Admin\\\\Development\\\\CustomPermissionsController"]', 1, NULL, '2019-03-07 16:08:17'),
	(22, '{"ar":" الاوامر ","en":"Commands"}', '/admin/commands', '', NULL, 21, 0, '["App\\\\Application\\\\Controllers\\\\Admin\\\\CommandsController"]', 1, NULL, '2019-03-07 16:08:17'),
	(23, '{"ar":"  العلاقات ","en":"Relation"}', '/admin/relation', '', NULL, 21, 1, '["App\\\\Application\\\\Controllers\\\\Admin\\\\RelationController"]', 1, NULL, '2019-03-07 16:08:17'),
	(24, '{"ar":" الترجمة  ","en":" Translation "}', '/admin/translation', '', NULL, 21, 2, '["App\\\\Application\\\\Controllers\\\\Admin\\\\TranslationController"]', 1, NULL, '2019-03-07 16:08:17'),
	(25, '{"ar":"  تخصيص التصريحات  ","en":" Custom Permissions "}', '/admin/custom-permissions', '', NULL, 21, 3, '["App\\\\Application\\\\Controllers\\\\Admin\\\\Development\\\\CustomPermissionsController"]', 1, NULL, '2019-03-07 16:08:17'),
	(26, '{"ar":" اوامر لارافيل  ","en":" Laravel Commands  "}', 'admin/laravel/commands', '', NULL, 21, 4, '["App\\\\Application\\\\Controllers\\\\Admin\\\\CommandsController"]', 1, NULL, '2019-03-07 16:08:17'),
	(27, '{"ar":"  التحكم في قواعد البينات  ","en":" DataBase Manager  "}', '/adminer.php', 'blank', NULL, 21, 5, '["App\\\\Application\\\\Controllers\\\\Admin\\\\CommandsController"]', 1, NULL, '2019-03-07 16:08:17'),
	(28, '{"ar":" المظهر  ","en":"Theme"}', '#', '', '<i class="material-icons">color_lens</i>', 0, 11, '["App\\\\Application\\\\Controllers\\\\Admin\\\\Themes\\\\ThemeController"]', 1, NULL, '2019-03-07 16:08:17'),
	(29, '{"ar":" لوحة تحكم المدير  ","en":"Admin"}', 'admin/theme/admin', '', '', 28, 0, '["App\\\\Application\\\\Controllers\\\\Admin\\\\Themes\\\\ThemeController"]', 1, NULL, '2019-03-07 16:08:17'),
	(30, '{"ar":" الموقع ","en":"Website"}', 'admin/theme/website', '', '', 28, 1, '["App\\\\Application\\\\Controllers\\\\Admin\\\\Themes\\\\ThemeController"]', 1, NULL, '2019-03-07 16:08:17'),
	(31, '{"ar":" رئيسية الموقع ","en":"Home Widget"}', 'admin/theme/homepage', '', '', 28, 2, '["App\\\\Application\\\\Controllers\\\\Admin\\\\Themes\\\\ThemeController"]', 1, NULL, '2019-03-07 16:08:17'),
	(32, '{"ar":" السيد بار ","en":"Sidebar Widget"}', 'admin/theme/sidebar', '', '', 28, 3, '["App\\\\Application\\\\Controllers\\\\Admin\\\\Themes\\\\ThemeController"]', 1, NULL, '2019-03-07 16:08:17'),
	(33, '{"ar":"  رفع \\/ استخراج المديولات ","en":" Export \\\\ Import Models  "}', 'admin/exportImport', 'blank', NULL, 21, 6, '["App\\\\Application\\\\Controllers\\\\Admin\\\\CommandsController"]', 1, NULL, '2019-03-07 16:08:17'),
	(34, '{"en":"Home","ar":null}', '/', 'self', NULL, 0, 0, '["App\\\\Application\\\\Controllers\\\\Website\\\\HomeController"]', 3, '2019-03-05 20:40:13', '2019-03-05 20:40:13'),
	(43, '{"en":"Formation","ar":"Formation"}', '/admin/formation', 'self', NULL, 55, 0, '["App\\\\Application\\\\Controllers\\\\Admin\\\\FormationController"]', 1, '2019-03-06 14:35:29', '2019-03-07 16:08:16'),
	(44, '{"en":"Formation","ar":"Formation"}', 'formation', 'self', '<i class="fa fa-plus-square-o" aria-hidden="true"></i>', 0, 36, '["App\\\\Application\\\\Controllers\\\\Website\\\\FormationController"]', 3, '2019-03-06 14:35:29', '2019-03-06 18:40:58'),
	(45, '{"en":"Inscription","ar":"Inscription"}', '/admin/inscription', 'self', NULL, 55, 1, '["App\\\\Application\\\\Controllers\\\\Admin\\\\InscriptionController"]', 1, '2019-03-06 15:09:03', '2019-03-07 16:08:16'),
	(47, '{"en":"Section","ar":"Section"}', '/admin/section', 'self', NULL, 55, 2, '["App\\\\Application\\\\Controllers\\\\Admin\\\\SectionController"]', 1, '2019-03-06 20:38:36', '2019-03-07 16:08:16'),
	(48, '{"en":"Section","ar":"Section"}', 'section', '', '<i class="fa fa-plus-square-o" aria-hidden="true"></i> ', 0, 39, '["App\\\\Application\\\\Controllers\\\\Admin\\\\SectionController"]', 3, '2019-03-06 20:38:36', '2019-03-06 20:38:36'),
	(49, '{"en":"Local","ar":"Local"}', '/admin/local', 'self', NULL, 55, 3, '["App\\\\Application\\\\Controllers\\\\Admin\\\\LocalController"]', 1, '2019-03-06 20:53:21', '2019-03-07 16:08:16'),
	(51, '{"en":"Artisan","ar":"Artisan"}', '/admin/artisan', 'self', NULL, 55, 4, '["App\\\\Application\\\\Controllers\\\\Admin\\\\ArtisanController"]', 1, '2019-03-06 20:55:33', '2019-03-07 16:08:16'),
	(53, '{"en":"Request","ar":"Request"}', '/admin/request', 'self', NULL, 55, 5, '["App\\\\Application\\\\Controllers\\\\Admin\\\\RequestController"]', 1, '2019-03-06 23:20:14', '2019-03-07 16:08:16'),
	(55, '{"en":"Management","ar":"Management"}', '/admin/management', 'self', '<i class="material-icons">control_point</i>', 0, 1, '["App\\\\Application\\\\Controllers\\\\Admin\\\\FormationController"]', 1, '2019-03-07 16:04:52', '2019-03-07 16:11:17'),
	(56, '{"en":"News","ar":"News"}', '/admin/news', '', '<i class="material-icons">control_point</i>', 0, 43, '["App\\\\Application\\\\Controllers\\\\Admin\\\\NewsController"]', 1, '2019-03-07 16:14:36', '2019-03-07 16:14:36'),
	(57, '{"en":"News","ar":"News"}', 'news', '', '<i class="fa fa-plus-square-o" aria-hidden="true"></i> ', 0, 44, '["App\\\\Application\\\\Controllers\\\\Admin\\\\NewsController"]', 3, '2019-03-07 16:14:36', '2019-03-07 16:14:36'),
	(58, '{"en":"Galery","ar":"Galery"}', '/admin/galery', '', '<i class="material-icons">control_point</i>', 0, 45, '["App\\\\Application\\\\Controllers\\\\Admin\\\\GaleryController"]', 1, '2019-03-07 18:14:30', '2019-03-07 18:14:30'),
	(59, '{"en":"Galery","ar":"Galery"}', 'galery', '', '<i class="fa fa-plus-square-o" aria-hidden="true"></i> ', 0, 46, '["App\\\\Application\\\\Controllers\\\\Admin\\\\GaleryController"]', 3, '2019-03-07 18:14:30', '2019-03-07 18:14:30');
/*!40000 ALTER TABLE `items` ENABLE KEYS */;

-- Listage de la structure de la table cam-souk-akhras-v2. links
DROP TABLE IF EXISTS `links`;
CREATE TABLE IF NOT EXISTS `links` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `links_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table cam-souk-akhras-v2.links : ~3 rows (environ)
/*!40000 ALTER TABLE `links` DISABLE KEYS */;
INSERT INTO `links` (`id`, `url`, `slug`, `created_at`, `updated_at`) VALUES
	(1, 'http://127.0.0.1:8000/en/login', '0ms8DD', '2019-03-05 19:55:25', '2019-03-05 19:55:25'),
	(2, 'http://127.0.0.1:8000/en/page/1/view', 'vSPmxg', '2019-03-05 19:56:47', '2019-03-05 19:56:47'),
	(3, 'http://127.0.0.1:8000/en/contact', 'SclkjX', '2019-03-05 19:56:54', '2019-03-05 19:56:54');
/*!40000 ALTER TABLE `links` ENABLE KEYS */;

-- Listage de la structure de la table cam-souk-akhras-v2. link_views
DROP TABLE IF EXISTS `link_views`;
CREATE TABLE IF NOT EXISTS `link_views` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `link_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `language` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `browser` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `browser_version` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `os` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `os_version` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ip` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table cam-souk-akhras-v2.link_views : ~6 rows (environ)
/*!40000 ALTER TABLE `link_views` DISABLE KEYS */;
INSERT INTO `link_views` (`id`, `link_id`, `language`, `browser`, `browser_version`, `os`, `os_version`, `ip`, `created_at`, `updated_at`) VALUES
	(1, '1', 'fr', 'Chrome', '71.0.3578.98', 'Windows', '10.0', '127.0.0.1', '2019-03-05 19:55:46', '2019-03-05 19:55:46'),
	(2, '2', 'fr', 'Chrome', '71.0.3578.98', 'Windows', '10.0', '127.0.0.1', '2019-03-05 19:56:48', '2019-03-05 19:56:48'),
	(3, '3', 'fr', 'Chrome', '71.0.3578.98', 'Windows', '10.0', '127.0.0.1', '2019-03-05 19:56:55', '2019-03-05 19:56:55'),
	(4, '1', 'fr', 'Chrome', '71.0.3578.98', 'Windows', '10.0', '127.0.0.1', '2019-03-05 19:57:01', '2019-03-05 19:57:01'),
	(5, '3', 'fr', 'Chrome', '71.0.3578.98', 'Windows', '10.0', '127.0.0.1', '2019-03-05 20:31:21', '2019-03-05 20:31:21'),
	(6, '3', 'fr', 'Chrome', '71.0.3578.98', 'Windows', '10.0', '127.0.0.1', '2019-03-05 20:43:04', '2019-03-05 20:43:04');
/*!40000 ALTER TABLE `link_views` ENABLE KEYS */;

-- Listage de la structure de la table cam-souk-akhras-v2. local
DROP TABLE IF EXISTS `local`;
CREATE TABLE IF NOT EXISTS `local` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` double NOT NULL,
  `area` double NOT NULL,
  `section_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `local_name_unique` (`name`),
  KEY `local_section_id_foreign` (`section_id`),
  CONSTRAINT `local_section_id_foreign` FOREIGN KEY (`section_id`) REFERENCES `section` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table cam-souk-akhras-v2.local : ~2 rows (environ)
/*!40000 ALTER TABLE `local` DISABLE KEYS */;
INSERT INTO `local` (`id`, `name`, `description`, `image`, `price`, `area`, `section_id`, `created_at`, `updated_at`) VALUES
	(1, '{"en":"Local 01","ar":"Local 01"}', '{"en":"<p>Local 01.....<\\/p>","ar":null}', '95548_1551983242.jpg', 14000, 25, 1, '2019-03-06 21:14:17', '2019-03-07 18:27:22'),
	(2, '{"en":"local 02","ar":"local 02"}', '{"en":"<p>local 02 ...<\\/p>","ar":null}', '46935_1551912668.jpg', 25000, 15, 1, '2019-03-06 22:51:08', '2019-03-06 22:51:08');
/*!40000 ALTER TABLE `local` ENABLE KEYS */;

-- Listage de la structure de la table cam-souk-akhras-v2. logs
DROP TABLE IF EXISTS `logs`;
CREATE TABLE IF NOT EXISTS `logs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `action` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `messages` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=420 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table cam-souk-akhras-v2.logs : ~407 rows (environ)
/*!40000 ALTER TABLE `logs` DISABLE KEYS */;
INSERT INTO `logs` (`id`, `action`, `model`, `status`, `messages`, `user_id`, `created_at`, `updated_at`) VALUES
	(1, 'Visit Edit Page', 'page', 'Success', '{"Edit Id":["1"]}', 0, '2019-03-05 19:56:47', '2019-03-05 19:56:47'),
	(2, 'Visit Edit Page', 'page', 'Success', '{"Edit Id":["1"]}', 0, '2019-03-05 19:56:49', '2019-03-05 19:56:49'),
	(3, 'Visit Edit Page', 'menu', 'Success', '{"Edit Id":["1"]}', 1, '2019-03-05 19:58:38', '2019-03-05 19:58:38'),
	(4, 'Visit Edit Page', 'menu', 'Success', '{"Edit Id":["1"]}', 1, '2019-03-05 19:58:45', '2019-03-05 19:58:45'),
	(5, 'Visit Edit Page', 'menu', 'Success', '{"Edit Id":["3"]}', 1, '2019-03-05 20:30:49', '2019-03-05 20:30:49'),
	(6, 'Visit Edit Page', 'menu', 'Success', '{"Edit Id":["2"]}', 1, '2019-03-05 20:38:18', '2019-03-05 20:38:18'),
	(7, 'Visit Edit Page', 'menu', 'Success', '{"Edit Id":["1"]}', 1, '2019-03-05 20:38:36', '2019-03-05 20:38:36'),
	(8, 'Visit Edit Page', 'menu', 'Success', '{"Edit Id":["3"]}', 1, '2019-03-05 20:38:58', '2019-03-05 20:38:58'),
	(9, 'Visit Edit Page', 'menu', 'Success', '{"Edit Id":["3"]}', 1, '2019-03-05 20:40:14', '2019-03-05 20:40:14'),
	(10, 'Visit Edit Page', 'menu', 'Success', '{"Edit Id":["3"]}', 1, '2019-03-05 22:50:01', '2019-03-05 22:50:01'),
	(11, 'Visit Edit Page', 'page', 'Success', '{"Edit Id":["1"]}', 1, '2019-03-05 23:22:42', '2019-03-05 23:22:42'),
	(12, 'Visit Edit Page', 'page', 'Success', '{"Edit Id":["1"]}', 1, '2019-03-05 23:23:50', '2019-03-05 23:23:50'),
	(13, 'Visit Edit Page', 'page', 'Success', '{"Edit Id":["1"]}', 1, '2019-03-05 23:24:54', '2019-03-05 23:24:54'),
	(14, 'Visit Edit Page', 'page', 'Success', '{"Edit Id":["1"]}', 1, '2019-03-05 23:25:17', '2019-03-05 23:25:17'),
	(15, 'Visit Create Page', 'formation', 'Success', '', 1, '2019-03-06 14:42:48', '2019-03-06 14:42:48'),
	(16, 'Visit Create Page', 'formation', 'Success', '', 1, '2019-03-06 14:44:13', '2019-03-06 14:44:13'),
	(17, 'Visit Create Page', 'formation', 'Success', '', 1, '2019-03-06 14:53:01', '2019-03-06 14:53:01'),
	(18, 'Visit Create Page', 'formation', 'Success', '', 1, '2019-03-06 14:53:48', '2019-03-06 14:53:48'),
	(19, 'Visit Create Page', 'formation', 'Success', '', 1, '2019-03-06 14:54:56', '2019-03-06 14:54:56'),
	(20, 'Visit Create Page', 'formation', 'Success', '', 1, '2019-03-06 14:55:49', '2019-03-06 14:55:49'),
	(21, 'Visit Create Page', 'formation', 'Success', '', 1, '2019-03-06 14:58:43', '2019-03-06 14:58:43'),
	(22, 'Visit Create Page', 'formation', 'Success', '', 1, '2019-03-06 15:00:40', '2019-03-06 15:00:40'),
	(23, 'Create', 'formation', 'Success', '{"New id":[1]}', 1, '2019-03-06 15:01:49', '2019-03-06 15:01:49'),
	(24, 'Visit Create Page', 'inscription', 'Success', '', 1, '2019-03-06 15:48:03', '2019-03-06 15:48:03'),
	(25, 'Visit Create Page', 'inscription', 'Success', '', 1, '2019-03-06 16:00:14', '2019-03-06 16:00:14'),
	(26, 'Visit Create Page', 'inscription', 'Success', '', 1, '2019-03-06 16:01:23', '2019-03-06 16:01:23'),
	(27, 'Visit Create Page', 'inscription', 'Success', '', 1, '2019-03-06 16:03:14', '2019-03-06 16:03:14'),
	(28, 'Visit Create Page', 'inscription', 'Success', '', 1, '2019-03-06 16:03:46', '2019-03-06 16:03:46'),
	(29, 'Visit Create Page', 'formation', 'Success', '', 1, '2019-03-06 16:06:10', '2019-03-06 16:06:10'),
	(30, 'Visit Edit Page', 'formation', 'Success', '{"Edit Id":["1"]}', 1, '2019-03-06 16:40:37', '2019-03-06 16:40:37'),
	(31, 'Visit Edit Page', 'formation', 'Success', '{"Edit Id":["1"]}', 1, '2019-03-06 16:41:35', '2019-03-06 16:41:35'),
	(32, 'Visit Edit Page', 'formation', 'Success', '{"Edit Id":["1"]}', 1, '2019-03-06 16:49:52', '2019-03-06 16:49:52'),
	(33, 'Visit Edit Page', 'formation', 'Success', '{"Edit Id":["1"]}', 1, '2019-03-06 16:50:52', '2019-03-06 16:50:52'),
	(34, 'Visit Edit Page', 'formation', 'Success', '{"Edit Id":["1"]}', 1, '2019-03-06 16:51:20', '2019-03-06 16:51:20'),
	(35, 'Visit Edit Page', 'formation', 'Success', '{"Edit Id":["1"]}', 1, '2019-03-06 16:53:00', '2019-03-06 16:53:00'),
	(36, 'Visit Edit Page', 'formation', 'Success', '{"Edit Id":["1"]}', 1, '2019-03-06 16:53:29', '2019-03-06 16:53:29'),
	(37, 'Visit Edit Page', 'formation', 'Success', '{"Edit Id":["1"]}', 1, '2019-03-06 16:55:10', '2019-03-06 16:55:10'),
	(38, 'Visit Edit Page', 'formation', 'Success', '{"Edit Id":["1"]}', 1, '2019-03-06 16:55:41', '2019-03-06 16:55:41'),
	(39, 'Visit Edit Page', 'permissions', 'Success', '{"Edit Id":["227"]}', 1, '2019-03-06 17:07:27', '2019-03-06 17:07:27'),
	(40, 'Visit Edit Page', 'permissions', 'Success', '{"Edit Id":["31"]}', 1, '2019-03-06 17:09:18', '2019-03-06 17:09:18'),
	(41, 'Visit Edit Page', 'groups', 'Success', '{"Edit Id":["2"]}', 1, '2019-03-06 17:09:58', '2019-03-06 17:09:58'),
	(42, 'Visit Edit Page', 'permissions', 'Success', '{"Edit Id":["117"]}', 1, '2019-03-06 17:11:16', '2019-03-06 17:11:16'),
	(43, 'Visit Edit Page', 'permissions', 'Success', '{"Edit Id":["221"]}', 1, '2019-03-06 17:12:04', '2019-03-06 17:12:04'),
	(44, 'Visit Edit Page', 'permissions', 'Success', '{"Edit Id":["227"]}', 1, '2019-03-06 17:18:47', '2019-03-06 17:18:47'),
	(45, 'Visit Edit Page', 'permissions', 'Success', '{"Edit Id":["227"]}', 1, '2019-03-06 18:01:08', '2019-03-06 18:01:08'),
	(46, 'Visit Edit Page', 'permissions', 'Success', '{"Edit Id":["253"]}', 1, '2019-03-06 18:16:22', '2019-03-06 18:16:22'),
	(47, 'Visit Edit Page', 'groups', 'Success', '{"Edit Id":["1"]}', 1, '2019-03-06 18:18:55', '2019-03-06 18:18:55'),
	(48, 'Update', 'groups', 'Success', '{"Updated id":["1"]}', 1, '2019-03-06 18:20:26', '2019-03-06 18:20:26'),
	(49, 'Visit Edit Page', 'groups', 'Success', '{"Edit Id":["2"]}', 1, '2019-03-06 18:20:53', '2019-03-06 18:20:53'),
	(50, 'Visit Edit Page', 'formation', 'Success', '{"Edit Id":["1"]}', 1, '2019-03-06 18:23:29', '2019-03-06 18:23:29'),
	(51, 'Visit Edit Page', 'formation', 'Success', '{"Edit Id":["1"]}', 1, '2019-03-06 18:24:24', '2019-03-06 18:24:24'),
	(52, 'Visit Edit Page', 'formation', 'Success', '{"Edit Id":["1"]}', 1, '2019-03-06 18:24:41', '2019-03-06 18:24:41'),
	(53, 'Visit Edit Page', 'formation', 'Success', '{"Edit Id":["1"]}', 1, '2019-03-06 18:28:30', '2019-03-06 18:28:30'),
	(54, 'Visit Edit Page', 'menu', 'Success', '{"Edit Id":["3"]}', 1, '2019-03-06 18:40:30', '2019-03-06 18:40:30'),
	(55, 'Update', 'menu', 'Success', '{"Updated id":["3"]}', 1, '2019-03-06 18:41:01', '2019-03-06 18:41:01'),
	(56, 'Visit Edit Page', 'menu', 'Success', '{"Edit Id":["3"]}', 1, '2019-03-06 18:41:27', '2019-03-06 18:41:27'),
	(57, 'Update', 'menu', 'Success', '{"Updated id":["3"]}', 1, '2019-03-06 18:42:04', '2019-03-06 18:42:04'),
	(58, 'Visit Edit Page', 'menu', 'Success', '{"Edit Id":["3"]}', 1, '2019-03-06 18:44:29', '2019-03-06 18:44:29'),
	(59, 'Visit Edit Page', 'menu', 'Success', '{"Edit Id":["1"]}', 1, '2019-03-06 18:45:04', '2019-03-06 18:45:04'),
	(60, 'Visit Edit Page', 'formation', 'Success', '{"Edit Id":["1"]}', 0, '2019-03-06 19:08:47', '2019-03-06 19:08:47'),
	(61, 'Visit Edit Page', 'menu', 'Success', '{"Edit Id":["3"]}', 1, '2019-03-06 19:09:25', '2019-03-06 19:09:25'),
	(62, 'Visit Edit Page', 'menu', 'Success', '{"Edit Id":["3"]}', 1, '2019-03-06 19:09:31', '2019-03-06 19:09:31'),
	(63, 'Update', 'menu', 'Success', '{"Updated id":["3"]}', 1, '2019-03-06 19:09:38', '2019-03-06 19:09:38'),
	(64, 'Visit Create Page', 'inscription', 'Success', '', 1, '2019-03-06 19:44:20', '2019-03-06 19:44:20'),
	(65, 'Visit Edit Page', 'formation', 'Success', '{"Edit Id":["1"]}', 0, '2019-03-06 20:01:10', '2019-03-06 20:01:10'),
	(66, 'Visit Edit Page', 'formation', 'Success', '{"Edit Id":["1"]}', 0, '2019-03-06 20:09:10', '2019-03-06 20:09:10'),
	(67, 'Visit Edit Page', 'formation', 'Success', '{"Edit Id":["1"]}', 0, '2019-03-06 20:10:52', '2019-03-06 20:10:52'),
	(68, 'Visit Edit Page', 'formation', 'Success', '{"Edit Id":["1"]}', 0, '2019-03-06 20:11:24', '2019-03-06 20:11:24'),
	(69, 'Visit Edit Page', 'formation', 'Success', '{"Edit Id":["1"]}', 0, '2019-03-06 20:12:33', '2019-03-06 20:12:33'),
	(70, 'Visit Edit Page', 'formation', 'Success', '{"Edit Id":["1"]}', 0, '2019-03-06 20:13:08', '2019-03-06 20:13:08'),
	(71, 'Visit Edit Page', 'formation', 'Success', '{"Edit Id":["1"]}', 0, '2019-03-06 20:14:48', '2019-03-06 20:14:48'),
	(72, 'Visit Edit Page', 'formation', 'Success', '{"Edit Id":["1"]}', 0, '2019-03-06 20:16:45', '2019-03-06 20:16:45'),
	(73, 'Visit Edit Page', 'formation', 'Success', '{"Edit Id":["1"]}', 0, '2019-03-06 20:17:31', '2019-03-06 20:17:31'),
	(74, 'Visit Edit Page', 'formation', 'Success', '{"Edit Id":["1"]}', 0, '2019-03-06 20:19:25', '2019-03-06 20:19:25'),
	(75, 'Visit Edit Page', 'formation', 'Success', '{"Edit Id":["1"]}', 0, '2019-03-06 20:20:03', '2019-03-06 20:20:03'),
	(76, 'Visit Edit Page', 'formation', 'Success', '{"Edit Id":["1"]}', 0, '2019-03-06 20:20:21', '2019-03-06 20:20:21'),
	(77, 'Visit Edit Page', 'formation', 'Success', '{"Edit Id":["1"]}', 0, '2019-03-06 20:20:45', '2019-03-06 20:20:45'),
	(78, 'Visit Edit Page', 'formation', 'Success', '{"Edit Id":["1"]}', 0, '2019-03-06 20:21:43', '2019-03-06 20:21:43'),
	(79, 'Visit Edit Page', 'formation', 'Success', '{"Edit Id":["1"]}', 0, '2019-03-06 20:22:13', '2019-03-06 20:22:13'),
	(80, 'Visit Edit Page', 'formation', 'Success', '{"Edit Id":["1"]}', 0, '2019-03-06 20:22:58', '2019-03-06 20:22:58'),
	(81, 'Visit Edit Page', 'formation', 'Success', '{"Edit Id":["1"]}', 0, '2019-03-06 20:23:34', '2019-03-06 20:23:34'),
	(82, 'Visit Edit Page', 'formation', 'Success', '{"Edit Id":["1"]}', 0, '2019-03-06 20:24:16', '2019-03-06 20:24:16'),
	(83, 'Visit Edit Page', 'formation', 'Success', '{"Edit Id":["1"]}', 0, '2019-03-06 20:25:03', '2019-03-06 20:25:03'),
	(84, 'Visit Edit Page', 'formation', 'Success', '{"Edit Id":["1"]}', 0, '2019-03-06 20:26:02', '2019-03-06 20:26:02'),
	(85, 'Create', 'inscription', 'Success', '{"New id":[1]}', 0, '2019-03-06 20:26:55', '2019-03-06 20:26:55'),
	(86, 'Visit Edit Page', 'formation', 'Success', '{"Edit Id":["1"]}', 0, '2019-03-06 20:26:56', '2019-03-06 20:26:56'),
	(87, 'Create', 'inscription', 'Success', '{"New id":[2]}', 0, '2019-03-06 20:30:54', '2019-03-06 20:30:54'),
	(88, 'Visit Create Page', 'section', 'Success', '', 1, '2019-03-06 20:42:30', '2019-03-06 20:42:30'),
	(89, 'Visit Create Page', 'section', 'Success', '', 1, '2019-03-06 20:44:41', '2019-03-06 20:44:41'),
	(90, 'Visit Create Page', 'section', 'Success', '', 1, '2019-03-06 20:48:45', '2019-03-06 20:48:45'),
	(91, 'Visit Create Page', 'section', 'Success', '', 1, '2019-03-06 20:49:07', '2019-03-06 20:49:07'),
	(92, 'Create', 'section', 'Success', '{"New id":[1]}', 1, '2019-03-06 20:50:06', '2019-03-06 20:50:06'),
	(93, 'Visit Edit Page', 'section', 'Success', '{"Edit Id":["1"]}', 1, '2019-03-06 20:50:29', '2019-03-06 20:50:29'),
	(94, 'Visit Create Page', 'local', 'Success', '', 1, '2019-03-06 21:01:58', '2019-03-06 21:01:58'),
	(95, 'Visit Create Page', 'local', 'Success', '', 1, '2019-03-06 21:05:11', '2019-03-06 21:05:11'),
	(96, 'Visit Create Page', 'local', 'Success', '', 1, '2019-03-06 21:13:18', '2019-03-06 21:13:18'),
	(97, 'Create', 'local', 'Success', '{"New id":[1]}', 1, '2019-03-06 21:14:17', '2019-03-06 21:14:17'),
	(98, 'Visit Create Page', 'artisan', 'Success', '', 1, '2019-03-06 21:18:33', '2019-03-06 21:18:33'),
	(99, 'Visit Edit Page', 'section', 'Success', '{"Edit Id":["1"]}', 1, '2019-03-06 21:34:09', '2019-03-06 21:34:09'),
	(100, 'Visit Edit Page', 'formation', 'Success', '{"Edit Id":["1"]}', 1, '2019-03-06 21:35:47', '2019-03-06 21:35:47'),
	(101, 'Visit Edit Page', 'section', 'Success', '{"Edit Id":["1"]}', 1, '2019-03-06 21:40:37', '2019-03-06 21:40:37'),
	(102, 'Visit Edit Page', 'section', 'Success', '{"Edit Id":["1"]}', 1, '2019-03-06 21:41:15', '2019-03-06 21:41:15'),
	(103, 'Visit Edit Page', 'section', 'Success', '{"Edit Id":["1"]}', 1, '2019-03-06 21:42:24', '2019-03-06 21:42:24'),
	(104, 'Visit Edit Page', 'section', 'Success', '{"Edit Id":["1"]}', 1, '2019-03-06 21:54:19', '2019-03-06 21:54:19'),
	(105, 'Visit Edit Page', 'section', 'Success', '{"Edit Id":["1"]}', 1, '2019-03-06 21:55:14', '2019-03-06 21:55:14'),
	(106, 'Visit Edit Page', 'section', 'Success', '{"Edit Id":["1"]}', 1, '2019-03-06 21:55:52', '2019-03-06 21:55:52'),
	(107, 'Visit Edit Page', 'section', 'Success', '{"Edit Id":["1"]}', 1, '2019-03-06 21:56:08', '2019-03-06 21:56:08'),
	(108, 'Visit Edit Page', 'section', 'Success', '{"Edit Id":["1"]}', 1, '2019-03-06 22:08:37', '2019-03-06 22:08:37'),
	(109, 'Visit Edit Page', 'section', 'Success', '{"Edit Id":["1"]}', 1, '2019-03-06 22:08:58', '2019-03-06 22:08:58'),
	(110, 'Visit Edit Page', 'section', 'Success', '{"Edit Id":["1"]}', 1, '2019-03-06 22:09:27', '2019-03-06 22:09:27'),
	(111, 'Visit Edit Page', 'section', 'Success', '{"Edit Id":["1"]}', 1, '2019-03-06 22:09:57', '2019-03-06 22:09:57'),
	(112, 'Visit Edit Page', 'section', 'Success', '{"Edit Id":["1"]}', 1, '2019-03-06 22:10:24', '2019-03-06 22:10:24'),
	(113, 'Visit Edit Page', 'section', 'Success', '{"Edit Id":["1"]}', 1, '2019-03-06 22:10:38', '2019-03-06 22:10:38'),
	(114, 'Visit Edit Page', 'section', 'Success', '{"Edit Id":["1"]}', 1, '2019-03-06 22:11:09', '2019-03-06 22:11:09'),
	(115, 'Visit Edit Page', 'section', 'Success', '{"Edit Id":["1"]}', 1, '2019-03-06 22:19:08', '2019-03-06 22:19:08'),
	(116, 'Visit Edit Page', 'section', 'Success', '{"Edit Id":["1"]}', 1, '2019-03-06 22:21:13', '2019-03-06 22:21:13'),
	(117, 'Visit Edit Page', 'section', 'Success', '{"Edit Id":["1"]}', 1, '2019-03-06 22:23:54', '2019-03-06 22:23:54'),
	(118, 'Visit Edit Page', 'section', 'Success', '{"Edit Id":["1"]}', 1, '2019-03-06 22:44:45', '2019-03-06 22:44:45'),
	(119, 'Visit Edit Page', 'section', 'Success', '{"Edit Id":["1"]}', 1, '2019-03-06 22:44:49', '2019-03-06 22:44:49'),
	(120, 'Visit Edit Page', 'section', 'Success', '{"Edit Id":["1"]}', 1, '2019-03-06 22:49:29', '2019-03-06 22:49:29'),
	(121, 'Visit Create Page', 'local', 'Success', '', 1, '2019-03-06 22:49:48', '2019-03-06 22:49:48'),
	(122, 'Create', 'local', 'Success', '{"New id":[2]}', 1, '2019-03-06 22:51:08', '2019-03-06 22:51:08'),
	(123, 'Visit Edit Page', 'section', 'Success', '{"Edit Id":["1"]}', 1, '2019-03-06 22:51:13', '2019-03-06 22:51:13'),
	(124, 'Visit Edit Page', 'section', 'Success', '{"Edit Id":["1"]}', 1, '2019-03-06 22:51:52', '2019-03-06 22:51:52'),
	(125, 'Visit Edit Page', 'section', 'Success', '{"Edit Id":["1"]}', 1, '2019-03-06 22:52:07', '2019-03-06 22:52:07'),
	(126, 'Visit Edit Page', 'section', 'Success', '{"Edit Id":["1"]}', 1, '2019-03-06 22:52:20', '2019-03-06 22:52:20'),
	(127, 'Visit Edit Page', 'section', 'Success', '{"Edit Id":["1"]}', 1, '2019-03-06 22:53:02', '2019-03-06 22:53:02'),
	(128, 'Visit Edit Page', 'section', 'Success', '{"Edit Id":["1"]}', 1, '2019-03-06 22:55:06', '2019-03-06 22:55:06'),
	(129, 'Visit Edit Page', 'local', 'Success', '{"Edit Id":["1"]}', 1, '2019-03-06 22:55:13', '2019-03-06 22:55:13'),
	(130, 'Visit Edit Page', 'local', 'Success', '{"Edit Id":["2"]}', 1, '2019-03-06 22:55:39', '2019-03-06 22:55:39'),
	(131, 'Visit Edit Page', 'section', 'Success', '{"Edit Id":["1"]}', 1, '2019-03-06 22:56:04', '2019-03-06 22:56:04'),
	(132, 'Visit Edit Page', 'local', 'Success', '{"Edit Id":["1"]}', 1, '2019-03-06 22:57:17', '2019-03-06 22:57:17'),
	(133, 'Visit Edit Page', 'formation', 'Success', '{"Edit Id":["1"]}', 1, '2019-03-06 22:57:33', '2019-03-06 22:57:33'),
	(134, 'Visit Edit Page', 'formation', 'Success', '{"Edit Id":["1"]}', 1, '2019-03-06 23:01:20', '2019-03-06 23:01:20'),
	(135, 'Visit Edit Page', 'section', 'Success', '{"Edit Id":["1"]}', 1, '2019-03-06 23:05:39', '2019-03-06 23:05:39'),
	(136, 'Visit Edit Page', 'local', 'Success', '{"Edit Id":["2"]}', 1, '2019-03-06 23:05:46', '2019-03-06 23:05:46'),
	(137, 'Visit Edit Page', 'local', 'Success', '{"Edit Id":["1"]}', 1, '2019-03-06 23:39:49', '2019-03-06 23:39:49'),
	(138, 'Visit Edit Page', 'local', 'Success', '{"Edit Id":["1"]}', 1, '2019-03-06 23:41:11', '2019-03-06 23:41:11'),
	(139, 'Visit Edit Page', 'local', 'Success', '{"Edit Id":["1"]}', 1, '2019-03-06 23:54:17', '2019-03-06 23:54:17'),
	(140, 'Visit Edit Page', 'local', 'Success', '{"Edit Id":["1"]}', 1, '2019-03-06 23:54:57', '2019-03-06 23:54:57'),
	(141, 'Visit Edit Page', 'local', 'Success', '{"Edit Id":["1"]}', 1, '2019-03-06 23:55:18', '2019-03-06 23:55:18'),
	(142, 'Visit Edit Page', 'local', 'Success', '{"Edit Id":["1"]}', 1, '2019-03-06 23:56:02', '2019-03-06 23:56:02'),
	(143, 'Visit Edit Page', 'local', 'Success', '{"Edit Id":["2"]}', 1, '2019-03-06 23:56:30', '2019-03-06 23:56:30'),
	(144, 'Visit Edit Page', 'section', 'Success', '{"Edit Id":["1"]}', 1, '2019-03-06 23:56:56', '2019-03-06 23:56:56'),
	(145, 'Visit Edit Page', 'section', 'Success', '{"Edit Id":["1"]}', 1, '2019-03-06 23:57:29', '2019-03-06 23:57:29'),
	(146, 'Visit Edit Page', 'section', 'Success', '{"Edit Id":["1"]}', 1, '2019-03-06 23:59:23', '2019-03-06 23:59:23'),
	(147, 'Visit Edit Page', 'section', 'Success', '{"Edit Id":["1"]}', 1, '2019-03-07 00:00:17', '2019-03-07 00:00:17'),
	(148, 'Visit Edit Page', 'section', 'Success', '{"Edit Id":["1"]}', 1, '2019-03-07 00:02:37', '2019-03-07 00:02:37'),
	(149, 'Visit Edit Page', 'section', 'Success', '{"Edit Id":["1"]}', 1, '2019-03-07 00:08:20', '2019-03-07 00:08:20'),
	(150, 'Visit Edit Page', 'section', 'Success', '{"Edit Id":["1"]}', 1, '2019-03-07 00:11:02', '2019-03-07 00:11:02'),
	(151, 'Visit Edit Page', 'section', 'Success', '{"Edit Id":["1"]}', 1, '2019-03-07 00:11:27', '2019-03-07 00:11:27'),
	(152, 'Visit Edit Page', 'section', 'Success', '{"Edit Id":["1"]}', 1, '2019-03-07 00:12:00', '2019-03-07 00:12:00'),
	(153, 'Visit Edit Page', 'section', 'Success', '{"Edit Id":["1"]}', 1, '2019-03-07 00:13:42', '2019-03-07 00:13:42'),
	(154, 'Visit Edit Page', 'section', 'Success', '{"Edit Id":["1"]}', 1, '2019-03-07 00:15:46', '2019-03-07 00:15:46'),
	(155, 'Visit Edit Page', 'section', 'Success', '{"Edit Id":["1"]}', 1, '2019-03-07 00:27:35', '2019-03-07 00:27:35'),
	(156, 'Visit Create Page', 'section', 'Success', '', 1, '2019-03-07 00:28:47', '2019-03-07 00:28:47'),
	(157, 'Create', 'section', 'Success', '{"New id":[2]}', 1, '2019-03-07 00:29:17', '2019-03-07 00:29:17'),
	(158, 'Visit Edit Page', 'section', 'Success', '{"Edit Id":["2"]}', 1, '2019-03-07 00:29:25', '2019-03-07 00:29:25'),
	(159, 'Visit Edit Page', 'section', 'Success', '{"Edit Id":["2"]}', 1, '2019-03-07 00:32:14', '2019-03-07 00:32:14'),
	(160, 'Visit Edit Page', 'section', 'Success', '{"Edit Id":["2"]}', 1, '2019-03-07 00:33:42', '2019-03-07 00:33:42'),
	(161, 'Visit Edit Page', 'section', 'Success', '{"Edit Id":["2"]}', 1, '2019-03-07 00:35:00', '2019-03-07 00:35:00'),
	(162, 'Visit Edit Page', 'section', 'Success', '{"Edit Id":["2"]}', 1, '2019-03-07 00:36:08', '2019-03-07 00:36:08'),
	(163, 'Visit Edit Page', 'section', 'Success', '{"Edit Id":["2"]}', 1, '2019-03-07 00:36:14', '2019-03-07 00:36:14'),
	(164, 'Visit Edit Page', 'section', 'Success', '{"Edit Id":["2"]}', 1, '2019-03-07 00:36:21', '2019-03-07 00:36:21'),
	(165, 'Visit Edit Page', 'section', 'Success', '{"Edit Id":["2"]}', 1, '2019-03-07 00:36:25', '2019-03-07 00:36:25'),
	(166, 'Visit Edit Page', 'section', 'Success', '{"Edit Id":["2"]}', 1, '2019-03-07 00:38:30', '2019-03-07 00:38:30'),
	(167, 'Visit Edit Page', 'section', 'Success', '{"Edit Id":["2"]}', 1, '2019-03-07 00:48:03', '2019-03-07 00:48:03'),
	(168, 'Visit Edit Page', 'section', 'Success', '{"Edit Id":["1"]}', 1, '2019-03-07 09:30:01', '2019-03-07 09:30:01'),
	(169, 'Visit Edit Page', 'section', 'Success', '{"Edit Id":["1"]}', 1, '2019-03-07 09:31:22', '2019-03-07 09:31:22'),
	(170, 'Visit Edit Page', 'section', 'Success', '{"Edit Id":["1"]}', 1, '2019-03-07 09:31:55', '2019-03-07 09:31:55'),
	(171, 'Visit Edit Page', 'section', 'Success', '{"Edit Id":["1"]}', 1, '2019-03-07 09:32:03', '2019-03-07 09:32:03'),
	(172, 'Visit Edit Page', 'section', 'Success', '{"Edit Id":["1"]}', 1, '2019-03-07 09:38:07', '2019-03-07 09:38:07'),
	(173, 'Visit Edit Page', 'section', 'Success', '{"Edit Id":["1"]}', 1, '2019-03-07 09:38:34', '2019-03-07 09:38:34'),
	(174, 'Visit Edit Page', 'section', 'Success', '{"Edit Id":["1"]}', 1, '2019-03-07 09:39:26', '2019-03-07 09:39:26'),
	(175, 'Visit Edit Page', 'section', 'Success', '{"Edit Id":["1"]}', 1, '2019-03-07 09:39:40', '2019-03-07 09:39:40'),
	(176, 'Visit Edit Page', 'section', 'Success', '{"Edit Id":["1"]}', 1, '2019-03-07 09:41:41', '2019-03-07 09:41:41'),
	(177, 'Visit Edit Page', 'section', 'Success', '{"Edit Id":["1"]}', 1, '2019-03-07 10:06:01', '2019-03-07 10:06:01'),
	(178, 'Visit Edit Page', 'section', 'Success', '{"Edit Id":["1"]}', 1, '2019-03-07 10:07:19', '2019-03-07 10:07:19'),
	(179, 'Visit Edit Page', 'section', 'Success', '{"Edit Id":["1"]}', 1, '2019-03-07 10:10:48', '2019-03-07 10:10:48'),
	(180, 'Visit Edit Page', 'section', 'Success', '{"Edit Id":["1"]}', 1, '2019-03-07 10:11:30', '2019-03-07 10:11:30'),
	(181, 'Visit Edit Page', 'section', 'Success', '{"Edit Id":["1"]}', 1, '2019-03-07 10:11:40', '2019-03-07 10:11:40'),
	(182, 'Visit Edit Page', 'section', 'Success', '{"Edit Id":["1"]}', 1, '2019-03-07 10:12:55', '2019-03-07 10:12:55'),
	(183, 'Visit Edit Page', 'section', 'Success', '{"Edit Id":["1"]}', 1, '2019-03-07 10:13:53', '2019-03-07 10:13:53'),
	(184, 'Visit Edit Page', 'section', 'Success', '{"Edit Id":["1"]}', 1, '2019-03-07 10:18:20', '2019-03-07 10:18:20'),
	(185, 'Visit Edit Page', 'section', 'Success', '{"Edit Id":["1"]}', 1, '2019-03-07 10:18:54', '2019-03-07 10:18:54'),
	(186, 'Visit Edit Page', 'section', 'Success', '{"Edit Id":["1"]}', 1, '2019-03-07 10:25:04', '2019-03-07 10:25:04'),
	(187, 'Visit Edit Page', 'section', 'Success', '{"Edit Id":["1"]}', 1, '2019-03-07 10:26:13', '2019-03-07 10:26:13'),
	(188, 'Visit Edit Page', 'section', 'Success', '{"Edit Id":["1"]}', 1, '2019-03-07 10:27:03', '2019-03-07 10:27:03'),
	(189, 'Visit Edit Page', 'section', 'Success', '{"Edit Id":["1"]}', 1, '2019-03-07 10:27:50', '2019-03-07 10:27:50'),
	(190, 'Visit Edit Page', 'section', 'Success', '{"Edit Id":["1"]}', 1, '2019-03-07 10:35:34', '2019-03-07 10:35:34'),
	(191, 'Visit Edit Page', 'section', 'Success', '{"Edit Id":["1"]}', 1, '2019-03-07 10:40:01', '2019-03-07 10:40:01'),
	(192, 'Visit Edit Page', 'section', 'Success', '{"Edit Id":["1"]}', 1, '2019-03-07 10:40:34', '2019-03-07 10:40:34'),
	(193, 'Visit Edit Page', 'section', 'Success', '{"Edit Id":["1"]}', 1, '2019-03-07 10:41:02', '2019-03-07 10:41:02'),
	(194, 'Visit Edit Page', 'section', 'Success', '{"Edit Id":["1"]}', 1, '2019-03-07 10:44:16', '2019-03-07 10:44:16'),
	(195, 'Visit Edit Page', 'section', 'Success', '{"Edit Id":["1"]}', 1, '2019-03-07 10:45:32', '2019-03-07 10:45:32'),
	(196, 'Visit Edit Page', 'section', 'Success', '{"Edit Id":["1"]}', 1, '2019-03-07 10:46:08', '2019-03-07 10:46:08'),
	(197, 'Visit Edit Page', 'section', 'Success', '{"Edit Id":["1"]}', 1, '2019-03-07 10:47:18', '2019-03-07 10:47:18'),
	(198, 'Visit Edit Page', 'section', 'Success', '{"Edit Id":["1"]}', 1, '2019-03-07 10:47:52', '2019-03-07 10:47:52'),
	(199, 'Visit Edit Page', 'section', 'Success', '{"Edit Id":["1"]}', 1, '2019-03-07 10:48:21', '2019-03-07 10:48:21'),
	(200, 'Visit Edit Page', 'section', 'Success', '{"Edit Id":["1"]}', 1, '2019-03-07 10:50:00', '2019-03-07 10:50:00'),
	(201, 'Visit Edit Page', 'section', 'Success', '{"Edit Id":["1"]}', 1, '2019-03-07 10:50:44', '2019-03-07 10:50:44'),
	(202, 'Visit Edit Page', 'section', 'Success', '{"Edit Id":["1"]}', 1, '2019-03-07 11:11:24', '2019-03-07 11:11:24'),
	(203, 'Visit Edit Page', 'section', 'Success', '{"Edit Id":["1"]}', 1, '2019-03-07 11:12:42', '2019-03-07 11:12:42'),
	(204, 'Visit Edit Page', 'section', 'Success', '{"Edit Id":["1"]}', 1, '2019-03-07 11:13:46', '2019-03-07 11:13:46'),
	(205, 'Visit Edit Page', 'section', 'Success', '{"Edit Id":["1"]}', 1, '2019-03-07 11:14:16', '2019-03-07 11:14:16'),
	(206, 'Visit Edit Page', 'section', 'Success', '{"Edit Id":["1"]}', 1, '2019-03-07 11:14:37', '2019-03-07 11:14:37'),
	(207, 'Visit Edit Page', 'section', 'Success', '{"Edit Id":["1"]}', 1, '2019-03-07 11:18:10', '2019-03-07 11:18:10'),
	(208, 'Visit Edit Page', 'section', 'Success', '{"Edit Id":["1"]}', 1, '2019-03-07 11:20:57', '2019-03-07 11:20:57'),
	(209, 'Visit Edit Page', 'local', 'Success', '{"Edit Id":["2"]}', 1, '2019-03-07 11:21:19', '2019-03-07 11:21:19'),
	(210, 'Visit Edit Page', 'local', 'Success', '{"Edit Id":["2"]}', 1, '2019-03-07 11:25:18', '2019-03-07 11:25:18'),
	(211, 'Visit Edit Page', 'section', 'Success', '{"Edit Id":["1"]}', 1, '2019-03-07 11:28:11', '2019-03-07 11:28:11'),
	(212, 'Visit Edit Page', 'section', 'Success', '{"Edit Id":["1"]}', 1, '2019-03-07 11:28:28', '2019-03-07 11:28:28'),
	(213, 'Visit Create Page', 'artisan', 'Success', '', 1, '2019-03-07 11:29:20', '2019-03-07 11:29:20'),
	(214, 'Create', 'artisan', 'Success', '{"New id":[1]}', 1, '2019-03-07 11:29:55', '2019-03-07 11:29:55'),
	(215, 'Create', 'request', 'Success', '{"New id":[4]}', 1, '2019-03-07 11:30:07', '2019-03-07 11:30:07'),
	(216, 'Visit Edit Page', 'section', 'Success', '{"Edit Id":["1"]}', 1, '2019-03-07 11:30:08', '2019-03-07 11:30:08'),
	(217, 'Visit Edit Page', 'request', 'Success', '{"Edit Id":["4"]}', 1, '2019-03-07 11:36:38', '2019-03-07 11:36:38'),
	(218, 'Visit Edit Page', 'request', 'Success', '{"Edit Id":["4"]}', 1, '2019-03-07 11:36:50', '2019-03-07 11:36:50'),
	(219, 'Visit Edit Page', 'section', 'Success', '{"Edit Id":["2"]}', 1, '2019-03-07 11:43:41', '2019-03-07 11:43:41'),
	(220, 'Visit Edit Page', 'section', 'Success', '{"Edit Id":["1"]}', 1, '2019-03-07 11:43:58', '2019-03-07 11:43:58'),
	(221, 'Visit Edit Page', 'local', 'Success', '{"Edit Id":["1"]}', 1, '2019-03-07 11:44:06', '2019-03-07 11:44:06'),
	(222, 'Visit Edit Page', 'local', 'Success', '{"Edit Id":["1"]}', 1, '2019-03-07 11:44:41', '2019-03-07 11:44:41'),
	(223, 'Visit Edit Page', 'section', 'Success', '{"Edit Id":["2"]}', 0, '2019-03-07 11:45:21', '2019-03-07 11:45:21'),
	(224, 'Visit Edit Page', 'section', 'Success', '{"Edit Id":["2"]}', 0, '2019-03-07 11:45:31', '2019-03-07 11:45:31'),
	(225, 'Visit Edit Page', 'section', 'Success', '{"Edit Id":["1"]}', 0, '2019-03-07 11:45:37', '2019-03-07 11:45:37'),
	(226, 'Visit Edit Page', 'local', 'Success', '{"Edit Id":["1"]}', 0, '2019-03-07 11:45:45', '2019-03-07 11:45:45'),
	(227, 'Visit Edit Page', 'local', 'Success', '{"Edit Id":["2"]}', 0, '2019-03-07 12:33:23', '2019-03-07 12:33:23'),
	(228, 'Visit Edit Page', 'local', 'Success', '{"Edit Id":["2"]}', 0, '2019-03-07 12:33:27', '2019-03-07 12:33:27'),
	(229, 'Visit Edit Page', 'local', 'Success', '{"Edit Id":["2"]}', 0, '2019-03-07 12:34:23', '2019-03-07 12:34:23'),
	(230, 'Visit Edit Page', 'local', 'Success', '{"Edit Id":["2"]}', 0, '2019-03-07 12:34:50', '2019-03-07 12:34:50'),
	(231, 'Visit Edit Page', 'local', 'Success', '{"Edit Id":["2"]}', 0, '2019-03-07 12:35:54', '2019-03-07 12:35:54'),
	(232, 'Visit Edit Page', 'local', 'Success', '{"Edit Id":["2"]}', 0, '2019-03-07 12:37:04', '2019-03-07 12:37:04'),
	(233, 'Visit Edit Page', 'local', 'Success', '{"Edit Id":["2"]}', 0, '2019-03-07 12:37:16', '2019-03-07 12:37:16'),
	(234, 'Visit Edit Page', 'local', 'Success', '{"Edit Id":["2"]}', 0, '2019-03-07 12:38:21', '2019-03-07 12:38:21'),
	(235, 'Visit Edit Page', 'local', 'Success', '{"Edit Id":["2"]}', 0, '2019-03-07 12:40:38', '2019-03-07 12:40:38'),
	(236, 'Visit Edit Page', 'local', 'Success', '{"Edit Id":["2"]}', 0, '2019-03-07 12:41:03', '2019-03-07 12:41:03'),
	(237, 'Visit Edit Page', 'local', 'Success', '{"Edit Id":["2"]}', 0, '2019-03-07 12:41:33', '2019-03-07 12:41:33'),
	(238, 'Visit Edit Page', 'local', 'Success', '{"Edit Id":["2"]}', 0, '2019-03-07 12:43:00', '2019-03-07 12:43:00'),
	(239, 'Visit Edit Page', 'local', 'Success', '{"Edit Id":["2"]}', 0, '2019-03-07 12:44:42', '2019-03-07 12:44:42'),
	(240, 'Visit Edit Page', 'local', 'Success', '{"Edit Id":["2"]}', 0, '2019-03-07 12:48:08', '2019-03-07 12:48:08'),
	(241, 'Visit Edit Page', 'local', 'Success', '{"Edit Id":["1"]}', 0, '2019-03-07 12:48:17', '2019-03-07 12:48:17'),
	(242, 'Visit Edit Page', 'local', 'Success', '{"Edit Id":["1"]}', 0, '2019-03-07 12:49:04', '2019-03-07 12:49:04'),
	(243, 'Visit Edit Page', 'local', 'Success', '{"Edit Id":["1"]}', 0, '2019-03-07 12:50:15', '2019-03-07 12:50:15'),
	(244, 'Visit Edit Page', 'local', 'Success', '{"Edit Id":["2"]}', 0, '2019-03-07 12:50:23', '2019-03-07 12:50:23'),
	(245, 'Visit Edit Page', 'local', 'Success', '{"Edit Id":["2"]}', 0, '2019-03-07 12:50:46', '2019-03-07 12:50:46'),
	(246, 'Visit Edit Page', 'local', 'Success', '{"Edit Id":["2"]}', 0, '2019-03-07 12:50:51', '2019-03-07 12:50:51'),
	(247, 'Visit Edit Page', 'local', 'Success', '{"Edit Id":["2"]}', 0, '2019-03-07 12:51:09', '2019-03-07 12:51:09'),
	(248, 'Visit Edit Page', 'local', 'Success', '{"Edit Id":["2"]}', 0, '2019-03-07 12:51:16', '2019-03-07 12:51:16'),
	(249, 'Visit Edit Page', 'local', 'Success', '{"Edit Id":["2"]}', 0, '2019-03-07 12:52:21', '2019-03-07 12:52:21'),
	(250, 'Visit Edit Page', 'local', 'Success', '{"Edit Id":["2"]}', 0, '2019-03-07 12:52:30', '2019-03-07 12:52:30'),
	(251, 'Visit Edit Page', 'local', 'Success', '{"Edit Id":["2"]}', 0, '2019-03-07 12:52:48', '2019-03-07 12:52:48'),
	(252, 'Visit Edit Page', 'local', 'Success', '{"Edit Id":["2"]}', 0, '2019-03-07 12:53:21', '2019-03-07 12:53:21'),
	(253, 'Visit Edit Page', 'local', 'Success', '{"Edit Id":["2"]}', 0, '2019-03-07 12:53:51', '2019-03-07 12:53:51'),
	(254, 'Visit Edit Page', 'local', 'Success', '{"Edit Id":["2"]}', 0, '2019-03-07 12:55:53', '2019-03-07 12:55:53'),
	(255, 'Visit Edit Page', 'local', 'Success', '{"Edit Id":["2"]}', 0, '2019-03-07 12:56:05', '2019-03-07 12:56:05'),
	(256, 'Visit Edit Page', 'local', 'Success', '{"Edit Id":["2"]}', 0, '2019-03-07 12:56:13', '2019-03-07 12:56:13'),
	(257, 'Visit Edit Page', 'local', 'Success', '{"Edit Id":["2"]}', 0, '2019-03-07 12:57:42', '2019-03-07 12:57:42'),
	(258, 'Visit Edit Page', 'local', 'Success', '{"Edit Id":["2"]}', 0, '2019-03-07 12:58:16', '2019-03-07 12:58:16'),
	(259, 'Visit Edit Page', 'local', 'Success', '{"Edit Id":["2"]}', 0, '2019-03-07 12:58:41', '2019-03-07 12:58:41'),
	(260, 'Visit Edit Page', 'local', 'Success', '{"Edit Id":["2"]}', 0, '2019-03-07 12:59:27', '2019-03-07 12:59:27'),
	(261, 'Visit Edit Page', 'local', 'Success', '{"Edit Id":["1"]}', 0, '2019-03-07 12:59:43', '2019-03-07 12:59:43'),
	(262, 'Visit Edit Page', 'local', 'Success', '{"Edit Id":["1"]}', 0, '2019-03-07 13:00:58', '2019-03-07 13:00:58'),
	(263, 'Visit Edit Page', 'local', 'Success', '{"Edit Id":["1"]}', 0, '2019-03-07 13:01:51', '2019-03-07 13:01:51'),
	(264, 'Visit Edit Page', 'local', 'Success', '{"Edit Id":["1"]}', 0, '2019-03-07 13:02:22', '2019-03-07 13:02:22'),
	(265, 'Visit Edit Page', 'local', 'Success', '{"Edit Id":["1"]}', 0, '2019-03-07 13:02:35', '2019-03-07 13:02:35'),
	(266, 'Visit Edit Page', 'local', 'Success', '{"Edit Id":["1"]}', 0, '2019-03-07 13:03:39', '2019-03-07 13:03:39'),
	(267, 'Visit Edit Page', 'local', 'Success', '{"Edit Id":["1"]}', 0, '2019-03-07 13:04:06', '2019-03-07 13:04:06'),
	(268, 'Visit Edit Page', 'local', 'Success', '{"Edit Id":["1"]}', 0, '2019-03-07 13:05:23', '2019-03-07 13:05:23'),
	(269, 'Visit Edit Page', 'local', 'Success', '{"Edit Id":["1"]}', 0, '2019-03-07 13:06:10', '2019-03-07 13:06:10'),
	(270, 'Visit Edit Page', 'local', 'Success', '{"Edit Id":["1"]}', 0, '2019-03-07 13:07:37', '2019-03-07 13:07:37'),
	(271, 'Visit Edit Page', 'local', 'Success', '{"Edit Id":["1"]}', 0, '2019-03-07 13:07:51', '2019-03-07 13:07:51'),
	(272, 'Visit Edit Page', 'local', 'Success', '{"Edit Id":["1"]}', 0, '2019-03-07 13:08:18', '2019-03-07 13:08:18'),
	(273, 'Visit Edit Page', 'local', 'Success', '{"Edit Id":["2"]}', 0, '2019-03-07 13:08:30', '2019-03-07 13:08:30'),
	(274, 'Visit Edit Page', 'section', 'Success', '{"Edit Id":["2"]}', 0, '2019-03-07 14:42:26', '2019-03-07 14:42:26'),
	(275, 'Visit Edit Page', 'section', 'Success', '{"Edit Id":["1"]}', 0, '2019-03-07 14:42:49', '2019-03-07 14:42:49'),
	(276, 'Visit Edit Page', 'local', 'Success', '{"Edit Id":["2"]}', 0, '2019-03-07 14:42:58', '2019-03-07 14:42:58'),
	(277, 'Visit Edit Page', 'section', 'Success', '{"Edit Id":["2"]}', 0, '2019-03-07 14:43:19', '2019-03-07 14:43:19'),
	(278, 'Create', 'request', 'Success', '{"New id":[5]}', 0, '2019-03-07 14:43:54', '2019-03-07 14:43:54'),
	(279, 'Visit Edit Page', 'local', 'Success', '{"Edit Id":["2"]}', 0, '2019-03-07 14:43:55', '2019-03-07 14:43:55'),
	(280, 'Visit Edit Page', 'local', 'Success', '{"Edit Id":["2"]}', 1, '2019-03-07 14:53:59', '2019-03-07 14:53:59'),
	(281, 'Visit Edit Page', 'local', 'Success', '{"Edit Id":["2"]}', 1, '2019-03-07 14:54:15', '2019-03-07 14:54:15'),
	(282, 'Visit Edit Page', 'local', 'Success', '{"Edit Id":["2"]}', 1, '2019-03-07 14:56:06', '2019-03-07 14:56:06'),
	(283, 'Visit Edit Page', 'local', 'Success', '{"Edit Id":["2"]}', 1, '2019-03-07 14:56:20', '2019-03-07 14:56:20'),
	(284, 'Visit Edit Page', 'local', 'Success', '{"Edit Id":["2"]}', 1, '2019-03-07 14:58:11', '2019-03-07 14:58:11'),
	(285, 'Visit Edit Page', 'local', 'Success', '{"Edit Id":["2"]}', 1, '2019-03-07 14:58:23', '2019-03-07 14:58:23'),
	(286, 'Visit Create Page', 'request', 'Success', '', 1, '2019-03-07 15:02:23', '2019-03-07 15:02:23'),
	(287, 'Visit Edit Page', 'section', 'Success', '{"Edit Id":["2"]}', 1, '2019-03-07 15:11:49', '2019-03-07 15:11:49'),
	(288, 'Visit Edit Page', 'section', 'Success', '{"Edit Id":["2"]}', 1, '2019-03-07 15:14:21', '2019-03-07 15:14:21'),
	(289, 'Visit Edit Page', 'section', 'Success', '{"Edit Id":["2"]}', 1, '2019-03-07 15:14:32', '2019-03-07 15:14:32'),
	(290, 'Visit Edit Page', 'section', 'Success', '{"Edit Id":["2"]}', 1, '2019-03-07 15:14:55', '2019-03-07 15:14:55'),
	(291, 'Visit Edit Page', 'section', 'Success', '{"Edit Id":["1"]}', 1, '2019-03-07 15:15:06', '2019-03-07 15:15:06'),
	(292, 'Visit Edit Page', 'section', 'Success', '{"Edit Id":["1"]}', 1, '2019-03-07 15:40:31', '2019-03-07 15:40:31'),
	(293, 'Visit Edit Page', 'section', 'Success', '{"Edit Id":["1"]}', 1, '2019-03-07 15:41:07', '2019-03-07 15:41:07'),
	(294, 'Visit Edit Page', 'section', 'Success', '{"Edit Id":["1"]}', 1, '2019-03-07 15:43:02', '2019-03-07 15:43:02'),
	(295, 'Visit Edit Page', 'section', 'Success', '{"Edit Id":["1"]}', 1, '2019-03-07 15:49:08', '2019-03-07 15:49:08'),
	(296, 'Visit Edit Page', 'section', 'Success', '{"Edit Id":["1"]}', 1, '2019-03-07 15:50:10', '2019-03-07 15:50:10'),
	(297, 'Visit Edit Page', 'section', 'Success', '{"Edit Id":["2"]}', 1, '2019-03-07 15:55:15', '2019-03-07 15:55:15'),
	(298, 'Visit Edit Page', 'section', 'Success', '{"Edit Id":["1"]}', 1, '2019-03-07 15:55:27', '2019-03-07 15:55:27'),
	(299, 'Visit Edit Page', 'section', 'Success', '{"Edit Id":["1"]}', 1, '2019-03-07 15:55:39', '2019-03-07 15:55:39'),
	(300, 'Visit Edit Page', 'section', 'Success', '{"Edit Id":["1"]}', 1, '2019-03-07 15:56:33', '2019-03-07 15:56:33'),
	(301, 'Visit Edit Page', 'section', 'Success', '{"Edit Id":["1"]}', 1, '2019-03-07 15:56:43', '2019-03-07 15:56:43'),
	(302, 'Visit Edit Page', 'local', 'Success', '{"Edit Id":["2"]}', 1, '2019-03-07 15:57:10', '2019-03-07 15:57:10'),
	(303, 'Visit Edit Page', 'local', 'Success', '{"Edit Id":["2"]}', 1, '2019-03-07 15:57:22', '2019-03-07 15:57:22'),
	(304, 'Create', 'request', 'Success', '{"New id":[10]}', 1, '2019-03-07 15:58:51', '2019-03-07 15:58:51'),
	(305, 'Visit Edit Page', 'local', 'Success', '{"Edit Id":["2"]}', 1, '2019-03-07 15:58:52', '2019-03-07 15:58:52'),
	(306, 'Visit Edit Page', 'section', 'Success', '{"Edit Id":["2"]}', 0, '2019-03-07 16:00:40', '2019-03-07 16:00:40'),
	(307, 'Create', 'request', 'Success', '{"New id":[11]}', 0, '2019-03-07 16:00:50', '2019-03-07 16:00:50'),
	(308, 'Visit Edit Page', 'section', 'Success', '{"Edit Id":["2"]}', 0, '2019-03-07 16:00:51', '2019-03-07 16:00:51'),
	(309, 'Visit Edit Page', 'menu', 'Success', '{"Edit Id":["3"]}', 1, '2019-03-07 16:02:37', '2019-03-07 16:02:37'),
	(310, 'Visit Edit Page', 'menu', 'Success', '{"Edit Id":["3"]}', 1, '2019-03-07 16:02:46', '2019-03-07 16:02:46'),
	(311, 'Visit Edit Page', 'menu', 'Success', '{"Edit Id":["3"]}', 1, '2019-03-07 16:02:54', '2019-03-07 16:02:54'),
	(312, 'Visit Edit Page', 'menu', 'Success', '{"Edit Id":["3"]}', 1, '2019-03-07 16:03:02', '2019-03-07 16:03:02'),
	(313, 'Update', 'menu', 'Success', '{"Updated id":["3"]}', 1, '2019-03-07 16:03:11', '2019-03-07 16:03:11'),
	(314, 'Visit Edit Page', 'menu', 'Success', '{"Edit Id":["1"]}', 1, '2019-03-07 16:03:22', '2019-03-07 16:03:22'),
	(315, 'Visit Edit Page', 'menu', 'Success', '{"Edit Id":["1"]}', 1, '2019-03-07 16:04:52', '2019-03-07 16:04:52'),
	(316, 'Visit Edit Page', 'menu', 'Success', '{"Edit Id":["1"]}', 1, '2019-03-07 16:08:24', '2019-03-07 16:08:24'),
	(317, 'Update', 'menu', 'Success', '{"Updated id":["1"]}', 1, '2019-03-07 16:08:42', '2019-03-07 16:08:42'),
	(318, 'Visit Edit Page', 'menu', 'Success', '{"Edit Id":["1"]}', 1, '2019-03-07 16:09:05', '2019-03-07 16:09:05'),
	(319, 'Update', 'menu', 'Success', '{"Updated id":["1"]}', 1, '2019-03-07 16:09:55', '2019-03-07 16:09:55'),
	(320, 'Visit Edit Page', 'menu', 'Success', '{"Edit Id":["1"]}', 1, '2019-03-07 16:10:52', '2019-03-07 16:10:52'),
	(321, 'Update', 'menu', 'Success', '{"Updated id":["1"]}', 1, '2019-03-07 16:11:25', '2019-03-07 16:11:25'),
	(322, 'Visit Create Page', 'news', 'Success', '', 1, '2019-03-07 16:17:55', '2019-03-07 16:17:55'),
	(323, 'Visit Create Page', 'news', 'Success', '', 1, '2019-03-07 16:22:15', '2019-03-07 16:22:15'),
	(324, 'Visit Create Page', 'news', 'Success', '', 1, '2019-03-07 16:23:24', '2019-03-07 16:23:24'),
	(325, 'Visit Create Page', 'news', 'Success', '', 1, '2019-03-07 16:24:30', '2019-03-07 16:24:30'),
	(326, 'Visit Create Page', 'news', 'Success', '', 1, '2019-03-07 16:24:51', '2019-03-07 16:24:51'),
	(327, 'Visit Create Page', 'news', 'Success', '', 1, '2019-03-07 16:26:21', '2019-03-07 16:26:21'),
	(328, 'Visit Create Page', 'news', 'Success', '', 1, '2019-03-07 16:27:40', '2019-03-07 16:27:40'),
	(329, 'Create', 'news', 'Success', '{"New id":[1]}', 1, '2019-03-07 16:29:15', '2019-03-07 16:29:15'),
	(330, 'Visit Create Page', 'news', 'Success', '', 1, '2019-03-07 16:29:33', '2019-03-07 16:29:33'),
	(331, 'Create', 'news', 'Success', '{"New id":[2]}', 1, '2019-03-07 16:30:52', '2019-03-07 16:30:52'),
	(332, 'Visit Edit Page', 'news', 'Success', '{"Edit Id":["1"]}', 1, '2019-03-07 16:31:02', '2019-03-07 16:31:02'),
	(333, 'Visit Edit Page', 'section', 'Success', '{"Edit Id":["2"]}', 1, '2019-03-07 16:31:18', '2019-03-07 16:31:18'),
	(334, 'Visit Edit Page', 'news', 'Success', '{"Edit Id":["1"]}', 1, '2019-03-07 17:10:51', '2019-03-07 17:10:51'),
	(335, 'Visit Edit Page', 'formation', 'Success', '{"Edit Id":["1"]}', 1, '2019-03-07 17:11:42', '2019-03-07 17:11:42'),
	(336, 'Visit Edit Page', 'news', 'Success', '{"Edit Id":["2"]}', 1, '2019-03-07 17:13:53', '2019-03-07 17:13:53'),
	(337, 'Visit Edit Page', 'news', 'Success', '{"Edit Id":["2"]}', 1, '2019-03-07 17:14:35', '2019-03-07 17:14:35'),
	(338, 'Visit Edit Page', 'news', 'Success', '{"Edit Id":["2"]}', 1, '2019-03-07 17:14:52', '2019-03-07 17:14:52'),
	(339, 'Visit Edit Page', 'news', 'Success', '{"Edit Id":["2"]}', 1, '2019-03-07 17:15:01', '2019-03-07 17:15:01'),
	(340, 'Visit Edit Page', 'section', 'Success', '{"Edit Id":["2"]}', 1, '2019-03-07 17:15:29', '2019-03-07 17:15:29'),
	(341, 'Visit Edit Page', 'news', 'Success', '{"Edit Id":["2"]}', 1, '2019-03-07 17:16:48', '2019-03-07 17:16:48'),
	(342, 'Visit Edit Page', 'news', 'Success', '{"Edit Id":["2"]}', 1, '2019-03-07 17:17:04', '2019-03-07 17:17:04'),
	(343, 'Visit Edit Page', 'news', 'Success', '{"Edit Id":["2"]}', 1, '2019-03-07 17:17:42', '2019-03-07 17:17:42'),
	(344, 'Visit Edit Page', 'news', 'Success', '{"Edit Id":["2"]}', 1, '2019-03-07 17:18:03', '2019-03-07 17:18:03'),
	(345, 'Visit Edit Page', 'news', 'Success', '{"Edit Id":["2"]}', 1, '2019-03-07 17:18:38', '2019-03-07 17:18:38'),
	(346, 'Visit Edit Page', 'news', 'Success', '{"Edit Id":["2"]}', 1, '2019-03-07 17:18:58', '2019-03-07 17:18:58'),
	(347, 'Visit Edit Page', 'news', 'Success', '{"Edit Id":["2"]}', 1, '2019-03-07 17:19:04', '2019-03-07 17:19:04'),
	(348, 'Visit Edit Page', 'news', 'Success', '{"Edit Id":["2"]}', 1, '2019-03-07 17:19:22', '2019-03-07 17:19:22'),
	(349, 'Visit Edit Page', 'news', 'Success', '{"Edit Id":["2"]}', 1, '2019-03-07 17:20:05', '2019-03-07 17:20:05'),
	(350, 'Visit Edit Page', 'news', 'Success', '{"Edit Id":["2"]}', 1, '2019-03-07 17:20:30', '2019-03-07 17:20:30'),
	(351, 'Visit Edit Page', 'news', 'Success', '{"Edit Id":["2"]}', 1, '2019-03-07 17:21:33', '2019-03-07 17:21:33'),
	(352, 'Visit Edit Page', 'news', 'Success', '{"Edit Id":["2"]}', 1, '2019-03-07 17:21:46', '2019-03-07 17:21:46'),
	(353, 'Visit Edit Page', 'news', 'Success', '{"Edit Id":["2"]}', 1, '2019-03-07 17:22:54', '2019-03-07 17:22:54'),
	(354, 'Visit Edit Page', 'news', 'Success', '{"Edit Id":["2"]}', 1, '2019-03-07 17:23:54', '2019-03-07 17:23:54'),
	(355, 'Visit Edit Page', 'news', 'Success', '{"Edit Id":["2"]}', 1, '2019-03-07 17:24:32', '2019-03-07 17:24:32'),
	(356, 'Visit Edit Page', 'news', 'Success', '{"Edit Id":["2"]}', 1, '2019-03-07 17:25:04', '2019-03-07 17:25:04'),
	(357, 'Visit Edit Page', 'news', 'Success', '{"Edit Id":["2"]}', 1, '2019-03-07 17:25:42', '2019-03-07 17:25:42'),
	(358, 'Visit Edit Page', 'news', 'Success', '{"Edit Id":["2"]}', 1, '2019-03-07 17:25:59', '2019-03-07 17:25:59'),
	(359, 'Visit Edit Page', 'news', 'Success', '{"Edit Id":["2"]}', 1, '2019-03-07 17:28:06', '2019-03-07 17:28:06'),
	(360, 'Visit Edit Page', 'news', 'Success', '{"Edit Id":["2"]}', 1, '2019-03-07 17:28:39', '2019-03-07 17:28:39'),
	(361, 'Visit Edit Page', 'news', 'Success', '{"Edit Id":["2"]}', 1, '2019-03-07 17:29:31', '2019-03-07 17:29:31'),
	(362, 'Visit Edit Page', 'news', 'Success', '{"Edit Id":["2"]}', 1, '2019-03-07 17:29:36', '2019-03-07 17:29:36'),
	(363, 'Visit Edit Page', 'news', 'Success', '{"Edit Id":["2"]}', 1, '2019-03-07 17:29:45', '2019-03-07 17:29:45'),
	(364, 'Visit Edit Page', 'news', 'Success', '{"Edit Id":["2"]}', 1, '2019-03-07 17:30:59', '2019-03-07 17:30:59'),
	(365, 'Visit Edit Page', 'news', 'Success', '{"Edit Id":["2"]}', 1, '2019-03-07 17:31:10', '2019-03-07 17:31:10'),
	(366, 'Visit Edit Page', 'news', 'Success', '{"Edit Id":["2"]}', 1, '2019-03-07 17:31:40', '2019-03-07 17:31:40'),
	(367, 'Visit Edit Page', 'news', 'Success', '{"Edit Id":["2"]}', 1, '2019-03-07 17:32:13', '2019-03-07 17:32:13'),
	(368, 'Visit Edit Page', 'news', 'Success', '{"Edit Id":["2"]}', 1, '2019-03-07 17:32:33', '2019-03-07 17:32:33'),
	(369, 'Visit Edit Page', 'news', 'Success', '{"Edit Id":["2"]}', 1, '2019-03-07 17:32:38', '2019-03-07 17:32:38'),
	(370, 'Visit Edit Page', 'news', 'Success', '{"Edit Id":["2"]}', 1, '2019-03-07 17:32:52', '2019-03-07 17:32:52'),
	(371, 'Visit Edit Page', 'news', 'Success', '{"Edit Id":["2"]}', 1, '2019-03-07 17:33:20', '2019-03-07 17:33:20'),
	(372, 'Visit Edit Page', 'news', 'Success', '{"Edit Id":["2"]}', 1, '2019-03-07 17:33:38', '2019-03-07 17:33:38'),
	(373, 'Visit Edit Page', 'news', 'Success', '{"Edit Id":["2"]}', 0, '2019-03-07 17:35:34', '2019-03-07 17:35:34'),
	(374, 'Visit Create Page', 'galery', 'Success', '', 1, '2019-03-07 18:15:00', '2019-03-07 18:15:00'),
	(375, 'Visit Edit Page', 'local', 'Success', '{"Edit Id":["1"]}', 1, '2019-03-07 18:25:06', '2019-03-07 18:25:06'),
	(376, 'Update', 'local', 'Success', '{"Updated id":["1"]}', 1, '2019-03-07 18:25:53', '2019-03-07 18:25:53'),
	(377, 'Visit Edit Page', 'local', 'Success', '{"Edit Id":["1"]}', 1, '2019-03-07 18:25:53', '2019-03-07 18:25:53'),
	(378, 'Update', 'local', 'Success', '{"Updated id":["1"]}', 1, '2019-03-07 18:27:22', '2019-03-07 18:27:22'),
	(379, 'Visit Edit Page', 'local', 'Success', '{"Edit Id":["1"]}', 1, '2019-03-07 18:27:22', '2019-03-07 18:27:22'),
	(380, 'Visit Create Page', 'galery', 'Success', '', 1, '2019-03-07 18:45:15', '2019-03-07 18:45:15'),
	(381, 'Visit Create Page', 'galery', 'Success', '', 1, '2019-03-07 19:42:44', '2019-03-07 19:42:44'),
	(382, 'Visit Create Page', 'medias', 'Success', '', 1, '2019-03-07 19:55:31', '2019-03-07 19:55:31'),
	(383, 'Visit Create Page', 'medias', 'Success', '', 1, '2019-03-07 19:58:03', '2019-03-07 19:58:03'),
	(384, 'Visit Create Page', 'medias', 'Success', '', 1, '2019-03-07 20:01:52', '2019-03-07 20:01:52'),
	(385, 'Visit Create Page', 'medias', 'Success', '', 1, '2019-03-07 20:02:25', '2019-03-07 20:02:25'),
	(386, 'Visit Create Page', 'medias', 'Success', '', 1, '2019-03-07 20:03:44', '2019-03-07 20:03:44'),
	(387, 'Visit Create Page', 'medias', 'Success', '', 1, '2019-03-07 20:04:09', '2019-03-07 20:04:09'),
	(388, 'Visit Create Page', 'medias', 'Success', '', 1, '2019-03-07 20:04:31', '2019-03-07 20:04:31'),
	(389, 'Visit Create Page', 'medias', 'Success', '', 1, '2019-03-07 20:06:11', '2019-03-07 20:06:11'),
	(390, 'Visit Create Page', 'medias', 'Success', '', 1, '2019-03-07 20:06:42', '2019-03-07 20:06:42'),
	(391, 'Visit Create Page', 'medias', 'Success', '', 1, '2019-03-07 20:07:34', '2019-03-07 20:07:34'),
	(392, 'Visit Create Page', 'medias', 'Success', '', 1, '2019-03-07 20:08:53', '2019-03-07 20:08:53'),
	(393, 'Visit Create Page', 'medias', 'Success', '', 1, '2019-03-07 20:09:14', '2019-03-07 20:09:14'),
	(394, 'Visit Create Page', 'medias', 'Success', '', 1, '2019-03-07 20:09:43', '2019-03-07 20:09:43'),
	(395, 'Visit Create Page', 'medias', 'Success', '', 1, '2019-03-07 20:15:00', '2019-03-07 20:15:00'),
	(396, 'Visit Create Page', 'medias', 'Success', '', 1, '2019-03-07 20:15:24', '2019-03-07 20:15:24'),
	(397, 'Visit Create Page', 'medias', 'Success', '', 1, '2019-03-07 20:15:47', '2019-03-07 20:15:47'),
	(398, 'Visit Create Page', 'medias', 'Success', '', 1, '2019-03-07 20:16:14', '2019-03-07 20:16:14'),
	(399, 'Visit Create Page', 'medias', 'Success', '', 1, '2019-03-07 20:20:37', '2019-03-07 20:20:37'),
	(400, 'Visit Create Page', 'inscription', 'Success', '', 1, '2019-03-07 20:23:10', '2019-03-07 20:23:10'),
	(401, 'Visit Create Page', 'inscription', 'Success', '', 1, '2019-03-07 20:26:21', '2019-03-07 20:26:21'),
	(402, 'Visit Create Page', 'medias', 'Success', '', 1, '2019-03-07 20:26:30', '2019-03-07 20:26:30'),
	(403, 'Visit Create Page', 'medias', 'Success', '', 1, '2019-03-07 20:32:02', '2019-03-07 20:32:02'),
	(404, 'Visit Create Page', 'medias', 'Success', '', 1, '2019-03-07 20:33:35', '2019-03-07 20:33:35'),
	(405, 'Visit Create Page', 'medias', 'Success', '', 1, '2019-03-07 20:34:26', '2019-03-07 20:34:26'),
	(406, 'Visit Create Page', 'medias', 'Success', '', 1, '2019-03-07 20:35:17', '2019-03-07 20:35:17'),
	(407, 'Visit Create Page', 'medias', 'Success', '', 1, '2019-03-07 20:36:06', '2019-03-07 20:36:06'),
	(408, 'Visit Create Page', 'medias', 'Success', '', 1, '2019-03-07 20:42:42', '2019-03-07 20:42:42'),
	(409, 'Create', 'medias', 'Success', '{"New id":[1]}', 1, '2019-03-07 20:43:03', '2019-03-07 20:43:03'),
	(410, 'Visit Create Page', 'medias', 'Success', '', 1, '2019-03-07 20:44:49', '2019-03-07 20:44:49'),
	(411, 'Visit Create Page', 'medias', 'Success', '', 1, '2019-03-07 20:44:54', '2019-03-07 20:44:54'),
	(412, 'Visit Create Page', 'medias', 'Success', '', 1, '2019-03-07 20:45:31', '2019-03-07 20:45:31'),
	(413, 'Visit Create Page', 'medias', 'Success', '', 1, '2019-03-07 20:46:08', '2019-03-07 20:46:08'),
	(414, 'Visit Create Page', 'medias', 'Success', '', 1, '2019-03-07 20:46:39', '2019-03-07 20:46:39'),
	(415, 'Visit Create Page', 'medias', 'Success', '', 1, '2019-03-07 20:48:16', '2019-03-07 20:48:16'),
	(416, 'Visit Create Page', 'medias', 'Success', '', 1, '2019-03-07 20:48:49', '2019-03-07 20:48:49'),
	(417, 'Visit Create Page', 'medias', 'Success', '', 1, '2019-03-07 21:02:37', '2019-03-07 21:02:37'),
	(418, 'Visit Create Page', 'medias', 'Success', '', 1, '2019-03-07 21:03:04', '2019-03-07 21:03:04'),
	(419, 'Visit Create Page', 'medias', 'Success', '', 1, '2019-03-07 21:04:15', '2019-03-07 21:04:15');
/*!40000 ALTER TABLE `logs` ENABLE KEYS */;

-- Listage de la structure de la table cam-souk-akhras-v2. medias
DROP TABLE IF EXISTS `medias`;
CREATE TABLE IF NOT EXISTS `medias` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table cam-souk-akhras-v2.medias : ~0 rows (environ)
/*!40000 ALTER TABLE `medias` DISABLE KEYS */;
INSERT INTO `medias` (`id`, `name`, `type`, `description`, `created_at`, `updated_at`) VALUES
	(1, '{"en":"sejdfnclzd","ar":"ekrfsjncvl"}', '1', '{"en":"<p>ersldwxc,lz sd<\\/p>","ar":"<p>skjdwxnfcls<\\/p>"}', '2019-03-07 20:43:03', '2019-03-07 20:43:03');
/*!40000 ALTER TABLE `medias` ENABLE KEYS */;

-- Listage de la structure de la table cam-souk-akhras-v2. menu
DROP TABLE IF EXISTS `menu`;
CREATE TABLE IF NOT EXISTS `menu` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table cam-souk-akhras-v2.menu : ~3 rows (environ)
/*!40000 ALTER TABLE `menu` DISABLE KEYS */;
INSERT INTO `menu` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(1, 'Admin', NULL, NULL),
	(2, 'Main', NULL, NULL),
	(3, 'Website', NULL, NULL);
/*!40000 ALTER TABLE `menu` ENABLE KEYS */;

-- Listage de la structure de la table cam-souk-akhras-v2. migrations
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table cam-souk-akhras-v2.migrations : ~31 rows (environ)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_04_11_141239_create_groups_table', 1),
	(2, '2014_04_11_141239_create_permissions_table', 1),
	(3, '2014_04_11_141239_create_roles_table', 1),
	(4, '2014_10_12_000000_create_users_table', 1),
	(5, '2014_10_12_100000_create_password_resets_table', 1),
	(6, '2016_10_30_174357_links', 1),
	(7, '2016_10_30_174359_link_views', 1),
	(8, '2017_02_07_172633_create_role_user_table', 1),
	(9, '2017_02_07_172657_create_group_role_table', 1),
	(10, '2017_02_07_172657_create_permission_group_table', 1),
	(11, '2017_02_07_172657_create_permission_role_table', 1),
	(12, '2017_02_17_152439_create_permission_user_table', 1),
	(13, '2017_04_23_182351_create_settings_table', 1),
	(14, '2017_04_25_200458_create_menus_table', 1),
	(15, '2017_04_25_211701_create_item_table', 1),
	(16, '2017_05_02_232740_create_logs_table', 1),
	(17, '2017_09_06_005757_create_contacts_table', 1),
	(18, '2017_11_17_120927_create_commands_table', 1),
	(19, '2017_11_19_021526_create_relations_table', 1),
	(20, '2018_01_25_1516842578_create_page_table', 1),
	(21, '2018_01_25_1516842887_create_pagecomment_table', 1),
	(22, '2018_01_25_1516845532_create_categorie_table', 1),
	(23, '2019_03_06_1551881355_create_formation_table', 2),
	(24, '2019_03_06_1551882926_create_formation_table', 3),
	(26, '2019_03_06_1551884939_create_inscription_table', 4),
	(28, '2019_03_06_1551904711_create_section_table', 5),
	(31, '2019_03_06_1551905598_create_local_table', 6),
	(32, '2019_03_06_1551905730_create_artisan_table', 6),
	(34, '2019_03_06_1551914404_create_request_table', 7),
	(35, '2019_03_07_1551975266_create_news_table', 8),
	(37, '2019_03_07_1551982464_create_galery_table', 9);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Listage de la structure de la table cam-souk-akhras-v2. news
DROP TABLE IF EXISTS `news`;
CREATE TABLE IF NOT EXISTS `news` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table cam-souk-akhras-v2.news : ~2 rows (environ)
/*!40000 ALTER TABLE `news` DISABLE KEYS */;
INSERT INTO `news` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
	(1, '{"en":"News 01","ar":"News 01"}', '{"en":"<div class=\\"main-wrapper\\">\\r\\n<div class=\\"container-fluid\\">\\r\\n<div class=\\"row\\">\\r\\n<div class=\\"col-md-12\\">\\r\\n<div class=\\"logo-generator-wrapper\\">\\r\\n<div class=\\"row\\">\\r\\n<section id=\\"free-resources\\" class=\\"section\\">\\r\\n<div class=\\"row wow fadeIn\\">\\r\\n<div class=\\"col-lg-4 col-md-6 mb-4\\">\\r\\n<div class=\\"card card-cascade wider\\">\\r\\n<div class=\\"card-body card-body-cascade  text-center\\">\\r\\n<p class=\\"card-text\\">This comprehensive tutorial contains everything you have to know about WordPress Theme development, starting with setting the environment, through WordPress installation and configuration, setting up theme construction, development including custom widgets and functions.<\\/p>\\r\\n<a class=\\"btn btn-primary waves-effect waves-light\\" href=\\"https:\\/\\/mdbootstrap.com\\/wordpress-tutorial\\/\\">LEARN MORE<\\/a><\\/div>\\r\\n<\\/div>\\r\\n<\\/div>\\r\\n<\\/div>\\r\\n<\\/section>\\r\\n<\\/div>\\r\\n<\\/div>\\r\\n<\\/div>\\r\\n<div class=\\"col-md-12\\">&nbsp;<\\/div>\\r\\n<\\/div>\\r\\n<\\/div>\\r\\n<\\/div>\\r\\n<footer id=\\"footer\\" class=\\"page-footer unique-color-dark mt-4\\"><\\/footer>","ar":"<div class=\\"main-wrapper\\">\\r\\n<div class=\\"container-fluid\\">\\r\\n<div class=\\"row\\">\\r\\n<div class=\\"col-md-12\\">\\r\\n<div class=\\"logo-generator-wrapper\\">\\r\\n<div class=\\"row\\">\\r\\n<section id=\\"free-resources\\" class=\\"section\\">\\r\\n<div class=\\"row wow fadeIn\\">\\r\\n<div class=\\"col-lg-4 col-md-6 mb-4\\">\\r\\n<div class=\\"card card-cascade wider\\">\\r\\n<div class=\\"card-body card-body-cascade  text-center\\">\\r\\n<p class=\\"card-text\\">This comprehensive tutorial contains everything you have to know about WordPress Theme development, starting with setting the environment, through WordPress installation and configuration, setting up theme construction, development including custom widgets and functions.<\\/p>\\r\\n<a class=\\"btn btn-primary waves-effect waves-light\\" href=\\"https:\\/\\/mdbootstrap.com\\/wordpress-tutorial\\/\\">LEARN MORE<\\/a><\\/div>\\r\\n<\\/div>\\r\\n<\\/div>\\r\\n<\\/div>\\r\\n<\\/section>\\r\\n<\\/div>\\r\\n<\\/div>\\r\\n<\\/div>\\r\\n<div class=\\"col-md-12\\">&nbsp;<\\/div>\\r\\n<\\/div>\\r\\n<\\/div>\\r\\n<\\/div>\\r\\n<footer id=\\"footer\\" class=\\"page-footer unique-color-dark mt-4\\"><\\/footer>"}', '37342_1551976155.jpg', '2019-03-07 16:29:15', '2019-03-07 16:29:15'),
	(2, '{"en":"News 02","ar":"News 02"}', '{"en":"<section id=\\"how-it-works\\">\\r\\n<p>The carousel is a slideshow for cycling through a series of content, built with CSS 3D transforms and a bit of JavaScript. It works with a series of images, text, or custom markup. It also includes support for previous\\/next controls and indicators.<\\/p>\\r\\n<p>In browsers where the&nbsp;<a href=\\"https:\\/\\/www.w3.org\\/TR\\/page-visibility\\/\\">Page Visibility API<\\/a>&nbsp;is supported, the carousel will avoid sliding when the webpage is not visible to the user (such as when the browser tab is inactive, the browser window is minimized, etc.).<\\/p>\\r\\n<p>Please be aware that nested carousels are not supported, and carousels are generally not compliant with accessibility standards.<\\/p>\\r\\n<\\/section>","ar":"<section id=\\"how-it-works\\">\\r\\n<p>The carousel is a slideshow for cycling through a series of content, built with CSS 3D transforms and a bit of JavaScript. It works with a series of images, text, or custom markup. It also includes support for previous\\/next controls and indicators.<\\/p>\\r\\n<p>In browsers where the&nbsp;<a href=\\"https:\\/\\/www.w3.org\\/TR\\/page-visibility\\/\\">Page Visibility API<\\/a>&nbsp;is supported, the carousel will avoid sliding when the webpage is not visible to the user (such as when the browser tab is inactive, the browser window is minimized, etc.).<\\/p>\\r\\n<p>Please be aware that nested carousels are not supported, and carousels are generally not compliant with accessibility standards.<\\/p>\\r\\n<\\/section>"}', '37052_1551976252.jpg', '2019-03-07 16:30:52', '2019-03-07 16:30:52');
/*!40000 ALTER TABLE `news` ENABLE KEYS */;

-- Listage de la structure de la table cam-souk-akhras-v2. page
DROP TABLE IF EXISTS `page`;
CREATE TABLE IF NOT EXISTS `page` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body` text COLLATE utf8mb4_unicode_ci,
  `active` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table cam-souk-akhras-v2.page : ~0 rows (environ)
/*!40000 ALTER TABLE `page` DISABLE KEYS */;
INSERT INTO `page` (`id`, `title`, `body`, `active`, `created_at`, `updated_at`) VALUES
	(1, '{"ar":" من نحن ","en":"About us"}', '{"ar":"\\r\\n                    هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.\\r\\nإذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.\\r\\nومن هنا وجب على المصمم أن يضع نصوصا مؤقتة على التصميم ليظهر للعميل الشكل كاملاً،دور مولد النص العربى أن يوفر على المصمم عناء البحث عن نص بديل لا علاقة له بالموضوع الذى يتحدث عنه التصميم فيظهر بشكل لا يليق.\\r\\nهذا النص يمكن أن يتم تركيبه على أي تصميم دون مشكلة فلن يبدو وكأنه نص منسوخ، غير منظم، غير منسق، أو حتى غير مفهوم. لأنه مازال نصاً بديلاً ومؤقتاً.\\r\\n            ","en":"\\r\\n                 <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).<\\/p>\\r\\n                 <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).<\\/p>\\r\\n             "}', 1, NULL, NULL);
/*!40000 ALTER TABLE `page` ENABLE KEYS */;

-- Listage de la structure de la table cam-souk-akhras-v2. pagecomment
DROP TABLE IF EXISTS `pagecomment`;
CREATE TABLE IF NOT EXISTS `pagecomment` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `page_id` int(11) NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table cam-souk-akhras-v2.pagecomment : ~0 rows (environ)
/*!40000 ALTER TABLE `pagecomment` DISABLE KEYS */;
/*!40000 ALTER TABLE `pagecomment` ENABLE KEYS */;

-- Listage de la structure de la table cam-souk-akhras-v2. password_resets
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table cam-souk-akhras-v2.password_resets : ~0 rows (environ)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Listage de la structure de la table cam-souk-akhras-v2. permissions
DROP TABLE IF EXISTS `permissions`;
CREATE TABLE IF NOT EXISTS `permissions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `controller_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `method_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `controller_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permission` tinyint(1) NOT NULL,
  `namespace` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=368 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table cam-souk-akhras-v2.permissions : ~289 rows (environ)
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;
INSERT INTO `permissions` (`id`, `name`, `slug`, `description`, `controller_name`, `method_name`, `controller_type`, `permission`, `namespace`, `created_at`, `updated_at`) VALUES
	(1, 'admin-admin-index-CustomPermissionsController', 'App-Application-Controllers-Admin-Development-CustomPermissionsController-index', 'Allow Admin admin on index in controller CustomPermissionsController', 'CustomPermissionsController', 'index', 'admin', 1, 'App\\Application\\Controllers\\Admin\\Development\\CustomPermissionsController', '2019-03-05 19:54:27', '2019-03-05 19:54:27'),
	(2, 'admin-admin-readFile-CustomPermissionsController', 'App-Application-Controllers-Admin-Development-CustomPermissionsController-readFile', 'Allow Admin admin on readFile in controller CustomPermissionsController', 'CustomPermissionsController', 'readFile', 'admin', 1, 'App\\Application\\Controllers\\Admin\\Development\\CustomPermissionsController', '2019-03-05 19:54:27', '2019-03-05 19:54:27'),
	(3, 'admin-admin-save-CustomPermissionsController', 'App-Application-Controllers-Admin-Development-CustomPermissionsController-save', 'Allow Admin admin on save in controller CustomPermissionsController', 'CustomPermissionsController', 'save', 'admin', 1, 'App\\Application\\Controllers\\Admin\\Development\\CustomPermissionsController', '2019-03-05 19:54:27', '2019-03-05 19:54:27'),
	(4, 'admin-admin-index-PermissionController', 'App-Application-Controllers-Admin-Development-PermissionController-index', 'Allow Admin admin on index in controller PermissionController', 'PermissionController', 'index', 'admin', 1, 'App\\Application\\Controllers\\Admin\\Development\\PermissionController', '2019-03-05 19:54:28', '2019-03-05 19:54:28'),
	(5, 'admin-admin-show-PermissionController', 'App-Application-Controllers-Admin-Development-PermissionController-show', 'Allow Admin admin on show in controller PermissionController', 'PermissionController', 'show', 'admin', 1, 'App\\Application\\Controllers\\Admin\\Development\\PermissionController', '2019-03-05 19:54:28', '2019-03-05 19:54:28'),
	(6, 'admin-admin-store-PermissionController', 'App-Application-Controllers-Admin-Development-PermissionController-store', 'Allow Admin admin on store in controller PermissionController', 'PermissionController', 'store', 'admin', 1, 'App\\Application\\Controllers\\Admin\\Development\\PermissionController', '2019-03-05 19:54:28', '2019-03-05 19:54:28'),
	(7, 'admin-admin-update-PermissionController', 'App-Application-Controllers-Admin-Development-PermissionController-update', 'Allow Admin admin on update in controller PermissionController', 'PermissionController', 'update', 'admin', 1, 'App\\Application\\Controllers\\Admin\\Development\\PermissionController', '2019-03-05 19:54:28', '2019-03-05 19:54:28'),
	(8, 'admin-admin-getById-PermissionController', 'App-Application-Controllers-Admin-Development-PermissionController-getById', 'Allow Admin admin on getById in controller PermissionController', 'PermissionController', 'getById', 'admin', 1, 'App\\Application\\Controllers\\Admin\\Development\\PermissionController', '2019-03-05 19:54:28', '2019-03-05 19:54:28'),
	(9, 'admin-admin-destroy-PermissionController', 'App-Application-Controllers-Admin-Development-PermissionController-destroy', 'Allow Admin admin on destroy in controller PermissionController', 'PermissionController', 'destroy', 'admin', 1, 'App\\Application\\Controllers\\Admin\\Development\\PermissionController', '2019-03-05 19:54:28', '2019-03-05 19:54:28'),
	(10, 'admin-admin-getControllerByType-PermissionController', 'App-Application-Controllers-Admin-Development-PermissionController-getControllerByType', 'Allow Admin admin on getControllerByType in controller PermissionController', 'PermissionController', 'getControllerByType', 'admin', 1, 'App\\Application\\Controllers\\Admin\\Development\\PermissionController', '2019-03-05 19:54:28', '2019-03-05 19:54:28'),
	(11, 'admin-admin-getMethodByController-PermissionController', 'App-Application-Controllers-Admin-Development-PermissionController-getMethodByController', 'Allow Admin admin on getMethodByController in controller PermissionController', 'PermissionController', 'getMethodByController', 'admin', 1, 'App\\Application\\Controllers\\Admin\\Development\\PermissionController', '2019-03-05 19:54:28', '2019-03-05 19:54:28'),
	(12, 'admin-admin-adminPanel-ThemeController', 'App-Application-Controllers-Admin-Themes-ThemeController-adminPanel', 'Allow Admin admin on adminPanel in controller ThemeController', 'ThemeController', 'adminPanel', 'admin', 1, 'App\\Application\\Controllers\\Admin\\Themes\\ThemeController', '2019-03-05 19:54:28', '2019-03-05 19:54:28'),
	(13, 'admin-admin-openFile-ThemeController', 'App-Application-Controllers-Admin-Themes-ThemeController-openFile', 'Allow Admin admin on openFile in controller ThemeController', 'ThemeController', 'openFile', 'admin', 1, 'App\\Application\\Controllers\\Admin\\Themes\\ThemeController', '2019-03-05 19:54:28', '2019-03-05 19:54:28'),
	(14, 'admin-admin-save-ThemeController', 'App-Application-Controllers-Admin-Themes-ThemeController-save', 'Allow Admin admin on save in controller ThemeController', 'ThemeController', 'save', 'admin', 1, 'App\\Application\\Controllers\\Admin\\Themes\\ThemeController', '2019-03-05 19:54:28', '2019-03-05 19:54:28'),
	(15, 'admin-admin-index-CategorieController', 'App-Application-Controllers-Admin-CategorieController-index', 'Allow Admin admin on index in controller CategorieController', 'CategorieController', 'index', 'admin', 1, 'App\\Application\\Controllers\\Admin\\CategorieController', '2019-03-05 19:54:28', '2019-03-05 19:54:28'),
	(16, 'admin-admin-show-CategorieController', 'App-Application-Controllers-Admin-CategorieController-show', 'Allow Admin admin on show in controller CategorieController', 'CategorieController', 'show', 'admin', 1, 'App\\Application\\Controllers\\Admin\\CategorieController', '2019-03-05 19:54:28', '2019-03-05 19:54:28'),
	(17, 'admin-admin-store-CategorieController', 'App-Application-Controllers-Admin-CategorieController-store', 'Allow Admin admin on store in controller CategorieController', 'CategorieController', 'store', 'admin', 1, 'App\\Application\\Controllers\\Admin\\CategorieController', '2019-03-05 19:54:28', '2019-03-05 19:54:28'),
	(18, 'admin-admin-update-CategorieController', 'App-Application-Controllers-Admin-CategorieController-update', 'Allow Admin admin on update in controller CategorieController', 'CategorieController', 'update', 'admin', 1, 'App\\Application\\Controllers\\Admin\\CategorieController', '2019-03-05 19:54:29', '2019-03-05 19:54:29'),
	(19, 'admin-admin-getById-CategorieController', 'App-Application-Controllers-Admin-CategorieController-getById', 'Allow Admin admin on getById in controller CategorieController', 'CategorieController', 'getById', 'admin', 1, 'App\\Application\\Controllers\\Admin\\CategorieController', '2019-03-05 19:54:29', '2019-03-05 19:54:29'),
	(20, 'admin-admin-destroy-CategorieController', 'App-Application-Controllers-Admin-CategorieController-destroy', 'Allow Admin admin on destroy in controller CategorieController', 'CategorieController', 'destroy', 'admin', 1, 'App\\Application\\Controllers\\Admin\\CategorieController', '2019-03-05 19:54:29', '2019-03-05 19:54:29'),
	(21, 'admin-admin-pluck-CategorieController', 'App-Application-Controllers-Admin-CategorieController-pluck', 'Allow Admin admin on pluck in controller CategorieController', 'CategorieController', 'pluck', 'admin', 1, 'App\\Application\\Controllers\\Admin\\CategorieController', '2019-03-05 19:54:29', '2019-03-05 19:54:29'),
	(22, 'admin-admin-index-CommandsController', 'App-Application-Controllers-Admin-CommandsController-index', 'Allow Admin admin on index in controller CommandsController', 'CommandsController', 'index', 'admin', 1, 'App\\Application\\Controllers\\Admin\\CommandsController', '2019-03-05 19:54:29', '2019-03-05 19:54:29'),
	(23, 'admin-admin-command-CommandsController', 'App-Application-Controllers-Admin-CommandsController-command', 'Allow Admin admin on command in controller CommandsController', 'CommandsController', 'command', 'admin', 1, 'App\\Application\\Controllers\\Admin\\CommandsController', '2019-03-05 19:54:29', '2019-03-05 19:54:29'),
	(24, 'admin-admin-otherExe-CommandsController', 'App-Application-Controllers-Admin-CommandsController-otherExe', 'Allow Admin admin on otherExe in controller CommandsController', 'CommandsController', 'otherExe', 'admin', 1, 'App\\Application\\Controllers\\Admin\\CommandsController', '2019-03-05 19:54:29', '2019-03-05 19:54:29'),
	(25, 'admin-admin-exe-CommandsController', 'App-Application-Controllers-Admin-CommandsController-exe', 'Allow Admin admin on exe in controller CommandsController', 'CommandsController', 'exe', 'admin', 1, 'App\\Application\\Controllers\\Admin\\CommandsController', '2019-03-05 19:54:29', '2019-03-05 19:54:29'),
	(26, 'admin-admin-haveCommand-CommandsController', 'App-Application-Controllers-Admin-CommandsController-haveCommand', 'Allow Admin admin on haveCommand in controller CommandsController', 'CommandsController', 'haveCommand', 'admin', 1, 'App\\Application\\Controllers\\Admin\\CommandsController', '2019-03-05 19:54:29', '2019-03-05 19:54:29'),
	(27, 'admin-admin-exportEmportModels-CommandsController', 'App-Application-Controllers-Admin-CommandsController-exportEmportModels', 'Allow Admin admin on exportEmportModels in controller CommandsController', 'CommandsController', 'exportEmportModels', 'admin', 1, 'App\\Application\\Controllers\\Admin\\CommandsController', '2019-03-05 19:54:29', '2019-03-05 19:54:29'),
	(28, 'admin-admin-export-CommandsController', 'App-Application-Controllers-Admin-CommandsController-export', 'Allow Admin admin on export in controller CommandsController', 'CommandsController', 'export', 'admin', 1, 'App\\Application\\Controllers\\Admin\\CommandsController', '2019-03-05 19:54:29', '2019-03-05 19:54:29'),
	(29, 'admin-admin-import-CommandsController', 'App-Application-Controllers-Admin-CommandsController-import', 'Allow Admin admin on import in controller CommandsController', 'CommandsController', 'import', 'admin', 1, 'App\\Application\\Controllers\\Admin\\CommandsController', '2019-03-05 19:54:29', '2019-03-05 19:54:29'),
	(30, 'admin-admin-replayEmail-ContactController', 'App-Application-Controllers-Admin-ContactController-replayEmail', 'Allow Admin admin on replayEmail in controller ContactController', 'ContactController', 'replayEmail', 'admin', 1, 'App\\Application\\Controllers\\Admin\\ContactController', '2019-03-05 19:54:30', '2019-03-05 19:54:30'),
	(31, 'admin-admin-index-ContactController', 'App-Application-Controllers-Admin-ContactController-index', 'Allow Admin admin on index in controller ContactController', 'ContactController', 'index', 'admin', 1, 'App\\Application\\Controllers\\Admin\\ContactController', '2019-03-05 19:54:30', '2019-03-05 19:54:30'),
	(32, 'admin-admin-show-ContactController', 'App-Application-Controllers-Admin-ContactController-show', 'Allow Admin admin on show in controller ContactController', 'ContactController', 'show', 'admin', 1, 'App\\Application\\Controllers\\Admin\\ContactController', '2019-03-05 19:54:30', '2019-03-05 19:54:30'),
	(33, 'admin-admin-store-ContactController', 'App-Application-Controllers-Admin-ContactController-store', 'Allow Admin admin on store in controller ContactController', 'ContactController', 'store', 'admin', 1, 'App\\Application\\Controllers\\Admin\\ContactController', '2019-03-05 19:54:30', '2019-03-05 19:54:30'),
	(34, 'admin-admin-update-ContactController', 'App-Application-Controllers-Admin-ContactController-update', 'Allow Admin admin on update in controller ContactController', 'ContactController', 'update', 'admin', 1, 'App\\Application\\Controllers\\Admin\\ContactController', '2019-03-05 19:54:30', '2019-03-05 19:54:30'),
	(35, 'admin-admin-getById-ContactController', 'App-Application-Controllers-Admin-ContactController-getById', 'Allow Admin admin on getById in controller ContactController', 'ContactController', 'getById', 'admin', 1, 'App\\Application\\Controllers\\Admin\\ContactController', '2019-03-05 19:54:30', '2019-03-05 19:54:30'),
	(36, 'admin-admin-destroy-ContactController', 'App-Application-Controllers-Admin-ContactController-destroy', 'Allow Admin admin on destroy in controller ContactController', 'ContactController', 'destroy', 'admin', 1, 'App\\Application\\Controllers\\Admin\\ContactController', '2019-03-05 19:54:30', '2019-03-05 19:54:30'),
	(37, 'admin-admin-pluck-ContactController', 'App-Application-Controllers-Admin-ContactController-pluck', 'Allow Admin admin on pluck in controller ContactController', 'ContactController', 'pluck', 'admin', 1, 'App\\Application\\Controllers\\Admin\\ContactController', '2019-03-05 19:54:30', '2019-03-05 19:54:30'),
	(38, 'admin-admin-index-GroupController', 'App-Application-Controllers-Admin-GroupController-index', 'Allow Admin admin on index in controller GroupController', 'GroupController', 'index', 'admin', 1, 'App\\Application\\Controllers\\Admin\\GroupController', '2019-03-05 19:54:30', '2019-03-05 19:54:30'),
	(39, 'admin-admin-show-GroupController', 'App-Application-Controllers-Admin-GroupController-show', 'Allow Admin admin on show in controller GroupController', 'GroupController', 'show', 'admin', 1, 'App\\Application\\Controllers\\Admin\\GroupController', '2019-03-05 19:54:30', '2019-03-05 19:54:30'),
	(40, 'admin-admin-store-GroupController', 'App-Application-Controllers-Admin-GroupController-store', 'Allow Admin admin on store in controller GroupController', 'GroupController', 'store', 'admin', 1, 'App\\Application\\Controllers\\Admin\\GroupController', '2019-03-05 19:54:30', '2019-03-05 19:54:30'),
	(41, 'admin-admin-update-GroupController', 'App-Application-Controllers-Admin-GroupController-update', 'Allow Admin admin on update in controller GroupController', 'GroupController', 'update', 'admin', 1, 'App\\Application\\Controllers\\Admin\\GroupController', '2019-03-05 19:54:30', '2019-03-05 19:54:30'),
	(42, 'admin-admin-getById-GroupController', 'App-Application-Controllers-Admin-GroupController-getById', 'Allow Admin admin on getById in controller GroupController', 'GroupController', 'getById', 'admin', 1, 'App\\Application\\Controllers\\Admin\\GroupController', '2019-03-05 19:54:30', '2019-03-05 19:54:30'),
	(43, 'admin-admin-destroy-GroupController', 'App-Application-Controllers-Admin-GroupController-destroy', 'Allow Admin admin on destroy in controller GroupController', 'GroupController', 'destroy', 'admin', 1, 'App\\Application\\Controllers\\Admin\\GroupController', '2019-03-05 19:54:30', '2019-03-05 19:54:30'),
	(44, 'admin-admin-pluck-GroupController', 'App-Application-Controllers-Admin-GroupController-pluck', 'Allow Admin admin on pluck in controller GroupController', 'GroupController', 'pluck', 'admin', 1, 'App\\Application\\Controllers\\Admin\\GroupController', '2019-03-05 19:54:31', '2019-03-05 19:54:31'),
	(45, 'admin-admin-index-HomeController', 'App-Application-Controllers-Admin-HomeController-index', 'Allow Admin admin on index in controller HomeController', 'HomeController', 'index', 'admin', 1, 'App\\Application\\Controllers\\Admin\\HomeController', '2019-03-05 19:54:31', '2019-03-05 19:54:31'),
	(46, 'admin-admin-icons-HomeController', 'App-Application-Controllers-Admin-HomeController-icons', 'Allow Admin admin on icons in controller HomeController', 'HomeController', 'icons', 'admin', 1, 'App\\Application\\Controllers\\Admin\\HomeController', '2019-03-05 19:54:31', '2019-03-05 19:54:31'),
	(47, 'admin-admin-apiDocs-HomeController', 'App-Application-Controllers-Admin-HomeController-apiDocs', 'Allow Admin admin on apiDocs in controller HomeController', 'HomeController', 'apiDocs', 'admin', 1, 'App\\Application\\Controllers\\Admin\\HomeController', '2019-03-05 19:54:31', '2019-03-05 19:54:31'),
	(48, 'admin-admin-fileManager-HomeController', 'App-Application-Controllers-Admin-HomeController-fileManager', 'Allow Admin admin on fileManager in controller HomeController', 'HomeController', 'fileManager', 'admin', 1, 'App\\Application\\Controllers\\Admin\\HomeController', '2019-03-05 19:54:31', '2019-03-05 19:54:31'),
	(49, 'admin-admin-index-LogController', 'App-Application-Controllers-Admin-LogController-index', 'Allow Admin admin on index in controller LogController', 'LogController', 'index', 'admin', 1, 'App\\Application\\Controllers\\Admin\\LogController', '2019-03-05 19:54:31', '2019-03-05 19:54:31'),
	(50, 'admin-admin-show-LogController', 'App-Application-Controllers-Admin-LogController-show', 'Allow Admin admin on show in controller LogController', 'LogController', 'show', 'admin', 1, 'App\\Application\\Controllers\\Admin\\LogController', '2019-03-05 19:54:31', '2019-03-05 19:54:31'),
	(51, 'admin-admin-store-LogController', 'App-Application-Controllers-Admin-LogController-store', 'Allow Admin admin on store in controller LogController', 'LogController', 'store', 'admin', 1, 'App\\Application\\Controllers\\Admin\\LogController', '2019-03-05 19:54:31', '2019-03-05 19:54:31'),
	(52, 'admin-admin-getById-LogController', 'App-Application-Controllers-Admin-LogController-getById', 'Allow Admin admin on getById in controller LogController', 'LogController', 'getById', 'admin', 1, 'App\\Application\\Controllers\\Admin\\LogController', '2019-03-05 19:54:31', '2019-03-05 19:54:31'),
	(53, 'admin-admin-destroy-LogController', 'App-Application-Controllers-Admin-LogController-destroy', 'Allow Admin admin on destroy in controller LogController', 'LogController', 'destroy', 'admin', 1, 'App\\Application\\Controllers\\Admin\\LogController', '2019-03-05 19:54:31', '2019-03-05 19:54:31'),
	(54, 'admin-admin-pluck-LogController', 'App-Application-Controllers-Admin-LogController-pluck', 'Allow Admin admin on pluck in controller LogController', 'LogController', 'pluck', 'admin', 1, 'App\\Application\\Controllers\\Admin\\LogController', '2019-03-05 19:54:31', '2019-03-05 19:54:31'),
	(55, 'admin-admin-index-MenuController', 'App-Application-Controllers-Admin-MenuController-index', 'Allow Admin admin on index in controller MenuController', 'MenuController', 'index', 'admin', 1, 'App\\Application\\Controllers\\Admin\\MenuController', '2019-03-05 19:54:31', '2019-03-05 19:54:31'),
	(56, 'admin-admin-show-MenuController', 'App-Application-Controllers-Admin-MenuController-show', 'Allow Admin admin on show in controller MenuController', 'MenuController', 'show', 'admin', 1, 'App\\Application\\Controllers\\Admin\\MenuController', '2019-03-05 19:54:31', '2019-03-05 19:54:31'),
	(57, 'admin-admin-store-MenuController', 'App-Application-Controllers-Admin-MenuController-store', 'Allow Admin admin on store in controller MenuController', 'MenuController', 'store', 'admin', 1, 'App\\Application\\Controllers\\Admin\\MenuController', '2019-03-05 19:54:32', '2019-03-05 19:54:32'),
	(58, 'admin-admin-update-MenuController', 'App-Application-Controllers-Admin-MenuController-update', 'Allow Admin admin on update in controller MenuController', 'MenuController', 'update', 'admin', 1, 'App\\Application\\Controllers\\Admin\\MenuController', '2019-03-05 19:54:32', '2019-03-05 19:54:32'),
	(59, 'admin-admin-getById-MenuController', 'App-Application-Controllers-Admin-MenuController-getById', 'Allow Admin admin on getById in controller MenuController', 'MenuController', 'getById', 'admin', 1, 'App\\Application\\Controllers\\Admin\\MenuController', '2019-03-05 19:54:32', '2019-03-05 19:54:32'),
	(60, 'admin-admin-destroy-MenuController', 'App-Application-Controllers-Admin-MenuController-destroy', 'Allow Admin admin on destroy in controller MenuController', 'MenuController', 'destroy', 'admin', 1, 'App\\Application\\Controllers\\Admin\\MenuController', '2019-03-05 19:54:32', '2019-03-05 19:54:32'),
	(61, 'admin-admin-menuItem-MenuController', 'App-Application-Controllers-Admin-MenuController-menuItem', 'Allow Admin admin on menuItem in controller MenuController', 'MenuController', 'menuItem', 'admin', 1, 'App\\Application\\Controllers\\Admin\\MenuController', '2019-03-05 19:54:32', '2019-03-05 19:54:32'),
	(62, 'admin-admin-addNewItemToMenu-MenuController', 'App-Application-Controllers-Admin-MenuController-addNewItemToMenu', 'Allow Admin admin on addNewItemToMenu in controller MenuController', 'MenuController', 'addNewItemToMenu', 'admin', 1, 'App\\Application\\Controllers\\Admin\\MenuController', '2019-03-05 19:54:32', '2019-03-05 19:54:32'),
	(63, 'admin-admin-getItemInfo-MenuController', 'App-Application-Controllers-Admin-MenuController-getItemInfo', 'Allow Admin admin on getItemInfo in controller MenuController', 'MenuController', 'getItemInfo', 'admin', 1, 'App\\Application\\Controllers\\Admin\\MenuController', '2019-03-05 19:54:32', '2019-03-05 19:54:32'),
	(64, 'admin-admin-updateOneMenuItem-MenuController', 'App-Application-Controllers-Admin-MenuController-updateOneMenuItem', 'Allow Admin admin on updateOneMenuItem in controller MenuController', 'MenuController', 'updateOneMenuItem', 'admin', 1, 'App\\Application\\Controllers\\Admin\\MenuController', '2019-03-05 19:54:32', '2019-03-05 19:54:32'),
	(65, 'admin-admin-pluck-MenuController', 'App-Application-Controllers-Admin-MenuController-pluck', 'Allow Admin admin on pluck in controller MenuController', 'MenuController', 'pluck', 'admin', 1, 'App\\Application\\Controllers\\Admin\\MenuController', '2019-03-05 19:54:32', '2019-03-05 19:54:32'),
	(66, 'admin-admin-deleteMenuItem-MenuController', 'App-Application-Controllers-Admin-MenuController-deleteMenuItem', 'Allow Admin admin on deleteMenuItem in controller MenuController', 'MenuController', 'deleteMenuItem', 'admin', 1, 'App\\Application\\Controllers\\Admin\\MenuController', '2019-03-05 19:54:32', '2019-03-05 19:54:32'),
	(67, 'admin-admin-addComment-PageCommentController', 'App-Application-Controllers-Admin-PageCommentController-addComment', 'Allow Admin admin on addComment in controller PageCommentController', 'PageCommentController', 'addComment', 'admin', 1, 'App\\Application\\Controllers\\Admin\\PageCommentController', '2019-03-05 19:54:32', '2019-03-05 19:54:32'),
	(68, 'admin-admin-updateComment-PageCommentController', 'App-Application-Controllers-Admin-PageCommentController-updateComment', 'Allow Admin admin on updateComment in controller PageCommentController', 'PageCommentController', 'updateComment', 'admin', 1, 'App\\Application\\Controllers\\Admin\\PageCommentController', '2019-03-05 19:54:32', '2019-03-05 19:54:32'),
	(69, 'admin-admin-deleteComment-PageCommentController', 'App-Application-Controllers-Admin-PageCommentController-deleteComment', 'Allow Admin admin on deleteComment in controller PageCommentController', 'PageCommentController', 'deleteComment', 'admin', 1, 'App\\Application\\Controllers\\Admin\\PageCommentController', '2019-03-05 19:54:33', '2019-03-05 19:54:33'),
	(70, 'admin-admin-index-PageController', 'App-Application-Controllers-Admin-PageController-index', 'Allow Admin admin on index in controller PageController', 'PageController', 'index', 'admin', 1, 'App\\Application\\Controllers\\Admin\\PageController', '2019-03-05 19:54:33', '2019-03-05 19:54:33'),
	(71, 'admin-admin-show-PageController', 'App-Application-Controllers-Admin-PageController-show', 'Allow Admin admin on show in controller PageController', 'PageController', 'show', 'admin', 1, 'App\\Application\\Controllers\\Admin\\PageController', '2019-03-05 19:54:33', '2019-03-05 19:54:33'),
	(72, 'admin-admin-store-PageController', 'App-Application-Controllers-Admin-PageController-store', 'Allow Admin admin on store in controller PageController', 'PageController', 'store', 'admin', 1, 'App\\Application\\Controllers\\Admin\\PageController', '2019-03-05 19:54:33', '2019-03-05 19:54:33'),
	(73, 'admin-admin-update-PageController', 'App-Application-Controllers-Admin-PageController-update', 'Allow Admin admin on update in controller PageController', 'PageController', 'update', 'admin', 1, 'App\\Application\\Controllers\\Admin\\PageController', '2019-03-05 19:54:33', '2019-03-05 19:54:33'),
	(74, 'admin-admin-getById-PageController', 'App-Application-Controllers-Admin-PageController-getById', 'Allow Admin admin on getById in controller PageController', 'PageController', 'getById', 'admin', 1, 'App\\Application\\Controllers\\Admin\\PageController', '2019-03-05 19:54:33', '2019-03-05 19:54:33'),
	(75, 'admin-admin-destroy-PageController', 'App-Application-Controllers-Admin-PageController-destroy', 'Allow Admin admin on destroy in controller PageController', 'PageController', 'destroy', 'admin', 1, 'App\\Application\\Controllers\\Admin\\PageController', '2019-03-05 19:54:33', '2019-03-05 19:54:33'),
	(76, 'admin-admin-pluck-PageController', 'App-Application-Controllers-Admin-PageController-pluck', 'Allow Admin admin on pluck in controller PageController', 'PageController', 'pluck', 'admin', 1, 'App\\Application\\Controllers\\Admin\\PageController', '2019-03-05 19:54:33', '2019-03-05 19:54:33'),
	(77, 'admin-admin-index-RelationController', 'App-Application-Controllers-Admin-RelationController-index', 'Allow Admin admin on index in controller RelationController', 'RelationController', 'index', 'admin', 1, 'App\\Application\\Controllers\\Admin\\RelationController', '2019-03-05 19:54:34', '2019-03-05 19:54:34'),
	(78, 'admin-admin-exe-RelationController', 'App-Application-Controllers-Admin-RelationController-exe', 'Allow Admin admin on exe in controller RelationController', 'RelationController', 'exe', 'admin', 1, 'App\\Application\\Controllers\\Admin\\RelationController', '2019-03-05 19:54:34', '2019-03-05 19:54:34'),
	(79, 'admin-admin-rollback-RelationController', 'App-Application-Controllers-Admin-RelationController-rollback', 'Allow Admin admin on rollback in controller RelationController', 'RelationController', 'rollback', 'admin', 1, 'App\\Application\\Controllers\\Admin\\RelationController', '2019-03-05 19:54:34', '2019-03-05 19:54:34'),
	(80, 'admin-admin-getCols-RelationController', 'App-Application-Controllers-Admin-RelationController-getCols', 'Allow Admin admin on getCols in controller RelationController', 'RelationController', 'getCols', 'admin', 1, 'App\\Application\\Controllers\\Admin\\RelationController', '2019-03-05 19:54:34', '2019-03-05 19:54:34'),
	(81, 'admin-admin-index-RoleController', 'App-Application-Controllers-Admin-RoleController-index', 'Allow Admin admin on index in controller RoleController', 'RoleController', 'index', 'admin', 1, 'App\\Application\\Controllers\\Admin\\RoleController', '2019-03-05 19:54:34', '2019-03-05 19:54:34'),
	(82, 'admin-admin-show-RoleController', 'App-Application-Controllers-Admin-RoleController-show', 'Allow Admin admin on show in controller RoleController', 'RoleController', 'show', 'admin', 1, 'App\\Application\\Controllers\\Admin\\RoleController', '2019-03-05 19:54:34', '2019-03-05 19:54:34'),
	(83, 'admin-admin-store-RoleController', 'App-Application-Controllers-Admin-RoleController-store', 'Allow Admin admin on store in controller RoleController', 'RoleController', 'store', 'admin', 1, 'App\\Application\\Controllers\\Admin\\RoleController', '2019-03-05 19:54:34', '2019-03-05 19:54:34'),
	(84, 'admin-admin-update-RoleController', 'App-Application-Controllers-Admin-RoleController-update', 'Allow Admin admin on update in controller RoleController', 'RoleController', 'update', 'admin', 1, 'App\\Application\\Controllers\\Admin\\RoleController', '2019-03-05 19:54:35', '2019-03-05 19:54:35'),
	(85, 'admin-admin-getById-RoleController', 'App-Application-Controllers-Admin-RoleController-getById', 'Allow Admin admin on getById in controller RoleController', 'RoleController', 'getById', 'admin', 1, 'App\\Application\\Controllers\\Admin\\RoleController', '2019-03-05 19:54:35', '2019-03-05 19:54:35'),
	(86, 'admin-admin-destroy-RoleController', 'App-Application-Controllers-Admin-RoleController-destroy', 'Allow Admin admin on destroy in controller RoleController', 'RoleController', 'destroy', 'admin', 1, 'App\\Application\\Controllers\\Admin\\RoleController', '2019-03-05 19:54:35', '2019-03-05 19:54:35'),
	(87, 'admin-admin-pluck-RoleController', 'App-Application-Controllers-Admin-RoleController-pluck', 'Allow Admin admin on pluck in controller RoleController', 'RoleController', 'pluck', 'admin', 1, 'App\\Application\\Controllers\\Admin\\RoleController', '2019-03-05 19:54:35', '2019-03-05 19:54:35'),
	(88, 'admin-admin-index-SettingController', 'App-Application-Controllers-Admin-SettingController-index', 'Allow Admin admin on index in controller SettingController', 'SettingController', 'index', 'admin', 1, 'App\\Application\\Controllers\\Admin\\SettingController', '2019-03-05 19:54:35', '2019-03-05 19:54:35'),
	(89, 'admin-admin-show-SettingController', 'App-Application-Controllers-Admin-SettingController-show', 'Allow Admin admin on show in controller SettingController', 'SettingController', 'show', 'admin', 1, 'App\\Application\\Controllers\\Admin\\SettingController', '2019-03-05 19:54:35', '2019-03-05 19:54:35'),
	(90, 'admin-admin-store-SettingController', 'App-Application-Controllers-Admin-SettingController-store', 'Allow Admin admin on store in controller SettingController', 'SettingController', 'store', 'admin', 1, 'App\\Application\\Controllers\\Admin\\SettingController', '2019-03-05 19:54:35', '2019-03-05 19:54:35'),
	(91, 'admin-admin-update-SettingController', 'App-Application-Controllers-Admin-SettingController-update', 'Allow Admin admin on update in controller SettingController', 'SettingController', 'update', 'admin', 1, 'App\\Application\\Controllers\\Admin\\SettingController', '2019-03-05 19:54:35', '2019-03-05 19:54:35'),
	(92, 'admin-admin-getById-SettingController', 'App-Application-Controllers-Admin-SettingController-getById', 'Allow Admin admin on getById in controller SettingController', 'SettingController', 'getById', 'admin', 1, 'App\\Application\\Controllers\\Admin\\SettingController', '2019-03-05 19:54:35', '2019-03-05 19:54:35'),
	(93, 'admin-admin-destroy-SettingController', 'App-Application-Controllers-Admin-SettingController-destroy', 'Allow Admin admin on destroy in controller SettingController', 'SettingController', 'destroy', 'admin', 1, 'App\\Application\\Controllers\\Admin\\SettingController', '2019-03-05 19:54:35', '2019-03-05 19:54:35'),
	(94, 'admin-admin-pluck-SettingController', 'App-Application-Controllers-Admin-SettingController-pluck', 'Allow Admin admin on pluck in controller SettingController', 'SettingController', 'pluck', 'admin', 1, 'App\\Application\\Controllers\\Admin\\SettingController', '2019-03-05 19:54:35', '2019-03-05 19:54:35'),
	(95, 'admin-admin-index-TranslationController', 'App-Application-Controllers-Admin-TranslationController-index', 'Allow Admin admin on index in controller TranslationController', 'TranslationController', 'index', 'admin', 1, 'App\\Application\\Controllers\\Admin\\TranslationController', '2019-03-05 19:54:35', '2019-03-05 19:54:35'),
	(96, 'admin-admin-getFiles-TranslationController', 'App-Application-Controllers-Admin-TranslationController-getFiles', 'Allow Admin admin on getFiles in controller TranslationController', 'TranslationController', 'getFiles', 'admin', 1, 'App\\Application\\Controllers\\Admin\\TranslationController', '2019-03-05 19:54:36', '2019-03-05 19:54:36'),
	(97, 'admin-admin-readFile-TranslationController', 'App-Application-Controllers-Admin-TranslationController-readFile', 'Allow Admin admin on readFile in controller TranslationController', 'TranslationController', 'readFile', 'admin', 1, 'App\\Application\\Controllers\\Admin\\TranslationController', '2019-03-05 19:54:36', '2019-03-05 19:54:36'),
	(98, 'admin-admin-save-TranslationController', 'App-Application-Controllers-Admin-TranslationController-save', 'Allow Admin admin on save in controller TranslationController', 'TranslationController', 'save', 'admin', 1, 'App\\Application\\Controllers\\Admin\\TranslationController', '2019-03-05 19:54:36', '2019-03-05 19:54:36'),
	(99, 'admin-admin-getAllContent-TranslationController', 'App-Application-Controllers-Admin-TranslationController-getAllContent', 'Allow Admin admin on getAllContent in controller TranslationController', 'TranslationController', 'getAllContent', 'admin', 1, 'App\\Application\\Controllers\\Admin\\TranslationController', '2019-03-05 19:54:36', '2019-03-05 19:54:36'),
	(100, 'admin-admin-bothSave-TranslationController', 'App-Application-Controllers-Admin-TranslationController-bothSave', 'Allow Admin admin on bothSave in controller TranslationController', 'TranslationController', 'bothSave', 'admin', 1, 'App\\Application\\Controllers\\Admin\\TranslationController', '2019-03-05 19:54:36', '2019-03-05 19:54:36'),
	(101, 'admin-admin-index-UserController', 'App-Application-Controllers-Admin-UserController-index', 'Allow Admin admin on index in controller UserController', 'UserController', 'index', 'admin', 1, 'App\\Application\\Controllers\\Admin\\UserController', '2019-03-05 19:54:36', '2019-03-05 19:54:36'),
	(102, 'admin-admin-show-UserController', 'App-Application-Controllers-Admin-UserController-show', 'Allow Admin admin on show in controller UserController', 'UserController', 'show', 'admin', 1, 'App\\Application\\Controllers\\Admin\\UserController', '2019-03-05 19:54:36', '2019-03-05 19:54:36'),
	(103, 'admin-admin-store-UserController', 'App-Application-Controllers-Admin-UserController-store', 'Allow Admin admin on store in controller UserController', 'UserController', 'store', 'admin', 1, 'App\\Application\\Controllers\\Admin\\UserController', '2019-03-05 19:54:36', '2019-03-05 19:54:36'),
	(104, 'admin-admin-update-UserController', 'App-Application-Controllers-Admin-UserController-update', 'Allow Admin admin on update in controller UserController', 'UserController', 'update', 'admin', 1, 'App\\Application\\Controllers\\Admin\\UserController', '2019-03-05 19:54:36', '2019-03-05 19:54:36'),
	(105, 'admin-admin-getById-UserController', 'App-Application-Controllers-Admin-UserController-getById', 'Allow Admin admin on getById in controller UserController', 'UserController', 'getById', 'admin', 1, 'App\\Application\\Controllers\\Admin\\UserController', '2019-03-05 19:54:36', '2019-03-05 19:54:36'),
	(106, 'admin-admin-destroy-UserController', 'App-Application-Controllers-Admin-UserController-destroy', 'Allow Admin admin on destroy in controller UserController', 'UserController', 'destroy', 'admin', 1, 'App\\Application\\Controllers\\Admin\\UserController', '2019-03-05 19:54:36', '2019-03-05 19:54:36'),
	(107, 'admin-admin-pluck-UserController', 'App-Application-Controllers-Admin-UserController-pluck', 'Allow Admin admin on pluck in controller UserController', 'UserController', 'pluck', 'admin', 1, 'App\\Application\\Controllers\\Admin\\UserController', '2019-03-05 19:54:36', '2019-03-05 19:54:36'),
	(108, 'admin-website-index-CategorieController', 'App-Application-Controllers-Website-CategorieController-index', 'Allow Admin admin on index in controller CategorieController', 'CategorieController', 'index', 'website', 1, 'App\\Application\\Controllers\\Website\\CategorieController', '2019-03-05 19:54:37', '2019-03-05 19:54:37'),
	(109, 'admin-website-show-CategorieController', 'App-Application-Controllers-Website-CategorieController-show', 'Allow Admin admin on show in controller CategorieController', 'CategorieController', 'show', 'website', 1, 'App\\Application\\Controllers\\Website\\CategorieController', '2019-03-05 19:54:37', '2019-03-05 19:54:37'),
	(110, 'admin-website-store-CategorieController', 'App-Application-Controllers-Website-CategorieController-store', 'Allow Admin admin on store in controller CategorieController', 'CategorieController', 'store', 'website', 1, 'App\\Application\\Controllers\\Website\\CategorieController', '2019-03-05 19:54:37', '2019-03-05 19:54:37'),
	(111, 'admin-website-update-CategorieController', 'App-Application-Controllers-Website-CategorieController-update', 'Allow Admin admin on update in controller CategorieController', 'CategorieController', 'update', 'website', 1, 'App\\Application\\Controllers\\Website\\CategorieController', '2019-03-05 19:54:37', '2019-03-05 19:54:37'),
	(112, 'admin-website-getById-CategorieController', 'App-Application-Controllers-Website-CategorieController-getById', 'Allow Admin admin on getById in controller CategorieController', 'CategorieController', 'getById', 'website', 1, 'App\\Application\\Controllers\\Website\\CategorieController', '2019-03-05 19:54:37', '2019-03-05 19:54:37'),
	(113, 'admin-website-destroy-CategorieController', 'App-Application-Controllers-Website-CategorieController-destroy', 'Allow Admin admin on destroy in controller CategorieController', 'CategorieController', 'destroy', 'website', 1, 'App\\Application\\Controllers\\Website\\CategorieController', '2019-03-05 19:54:37', '2019-03-05 19:54:37'),
	(114, 'admin-website-addComment-PageCommentController', 'App-Application-Controllers-Website-PageCommentController-addComment', 'Allow Admin admin on addComment in controller PageCommentController', 'PageCommentController', 'addComment', 'website', 1, 'App\\Application\\Controllers\\Website\\PageCommentController', '2019-03-05 19:54:37', '2019-03-05 19:54:37'),
	(115, 'admin-website-updateComment-PageCommentController', 'App-Application-Controllers-Website-PageCommentController-updateComment', 'Allow Admin admin on updateComment in controller PageCommentController', 'PageCommentController', 'updateComment', 'website', 1, 'App\\Application\\Controllers\\Website\\PageCommentController', '2019-03-05 19:54:37', '2019-03-05 19:54:37'),
	(116, 'admin-website-deleteComment-PageCommentController', 'App-Application-Controllers-Website-PageCommentController-deleteComment', 'Allow Admin admin on deleteComment in controller PageCommentController', 'PageCommentController', 'deleteComment', 'website', 1, 'App\\Application\\Controllers\\Website\\PageCommentController', '2019-03-05 19:54:37', '2019-03-05 19:54:37'),
	(117, 'admin-website-index-PageController', 'App-Application-Controllers-Website-PageController-index', 'Allow Admin admin on index in controller PageController', 'PageController', 'index', 'website', 1, 'App\\Application\\Controllers\\Website\\PageController', '2019-03-05 19:54:38', '2019-03-05 19:54:38'),
	(118, 'admin-website-show-PageController', 'App-Application-Controllers-Website-PageController-show', 'Allow Admin admin on show in controller PageController', 'PageController', 'show', 'website', 1, 'App\\Application\\Controllers\\Website\\PageController', '2019-03-05 19:54:38', '2019-03-05 19:54:38'),
	(119, 'admin-website-store-PageController', 'App-Application-Controllers-Website-PageController-store', 'Allow Admin admin on store in controller PageController', 'PageController', 'store', 'website', 1, 'App\\Application\\Controllers\\Website\\PageController', '2019-03-05 19:54:38', '2019-03-05 19:54:38'),
	(120, 'admin-website-update-PageController', 'App-Application-Controllers-Website-PageController-update', 'Allow Admin admin on update in controller PageController', 'PageController', 'update', 'website', 1, 'App\\Application\\Controllers\\Website\\PageController', '2019-03-05 19:54:38', '2019-03-05 19:54:38'),
	(121, 'admin-website-getById-PageController', 'App-Application-Controllers-Website-PageController-getById', 'Allow Admin admin on getById in controller PageController', 'PageController', 'getById', 'website', 1, 'App\\Application\\Controllers\\Website\\PageController', '2019-03-05 19:54:38', '2019-03-05 19:54:38'),
	(122, 'admin-website-destroy-PageController', 'App-Application-Controllers-Website-PageController-destroy', 'Allow Admin admin on destroy in controller PageController', 'PageController', 'destroy', 'website', 1, 'App\\Application\\Controllers\\Website\\PageController', '2019-03-05 19:54:38', '2019-03-05 19:54:38'),
	(123, 'user-website-index-CategorieController', 'App-Application-Controllers-Website-CategorieController-index', 'Allow User admin on index in controller CategorieController', 'CategorieController', 'index', 'website', 1, 'App\\Application\\Controllers\\Website\\CategorieController', '2019-03-05 19:54:38', '2019-03-05 19:54:38'),
	(124, 'user-website-show-CategorieController', 'App-Application-Controllers-Website-CategorieController-show', 'Allow User admin on show in controller CategorieController', 'CategorieController', 'show', 'website', 1, 'App\\Application\\Controllers\\Website\\CategorieController', '2019-03-05 19:54:38', '2019-03-05 19:54:38'),
	(125, 'user-website-store-CategorieController', 'App-Application-Controllers-Website-CategorieController-store', 'Allow User admin on store in controller CategorieController', 'CategorieController', 'store', 'website', 1, 'App\\Application\\Controllers\\Website\\CategorieController', '2019-03-05 19:54:38', '2019-03-05 19:54:38'),
	(126, 'user-website-update-CategorieController', 'App-Application-Controllers-Website-CategorieController-update', 'Allow User admin on update in controller CategorieController', 'CategorieController', 'update', 'website', 1, 'App\\Application\\Controllers\\Website\\CategorieController', '2019-03-05 19:54:38', '2019-03-05 19:54:38'),
	(127, 'user-website-getById-CategorieController', 'App-Application-Controllers-Website-CategorieController-getById', 'Allow User admin on getById in controller CategorieController', 'CategorieController', 'getById', 'website', 1, 'App\\Application\\Controllers\\Website\\CategorieController', '2019-03-05 19:54:39', '2019-03-05 19:54:39'),
	(128, 'user-website-destroy-CategorieController', 'App-Application-Controllers-Website-CategorieController-destroy', 'Allow User admin on destroy in controller CategorieController', 'CategorieController', 'destroy', 'website', 1, 'App\\Application\\Controllers\\Website\\CategorieController', '2019-03-05 19:54:39', '2019-03-05 19:54:39'),
	(129, 'user-website-addComment-PageCommentController', 'App-Application-Controllers-Website-PageCommentController-addComment', 'Allow User admin on addComment in controller PageCommentController', 'PageCommentController', 'addComment', 'website', 1, 'App\\Application\\Controllers\\Website\\PageCommentController', '2019-03-05 19:54:39', '2019-03-05 19:54:39'),
	(130, 'user-website-updateComment-PageCommentController', 'App-Application-Controllers-Website-PageCommentController-updateComment', 'Allow User admin on updateComment in controller PageCommentController', 'PageCommentController', 'updateComment', 'website', 1, 'App\\Application\\Controllers\\Website\\PageCommentController', '2019-03-05 19:54:39', '2019-03-05 19:54:39'),
	(131, 'user-website-deleteComment-PageCommentController', 'App-Application-Controllers-Website-PageCommentController-deleteComment', 'Allow User admin on deleteComment in controller PageCommentController', 'PageCommentController', 'deleteComment', 'website', 1, 'App\\Application\\Controllers\\Website\\PageCommentController', '2019-03-05 19:54:39', '2019-03-05 19:54:39'),
	(132, 'user-website-index-PageController', 'App-Application-Controllers-Website-PageController-index', 'Allow User admin on index in controller PageController', 'PageController', 'index', 'website', 1, 'App\\Application\\Controllers\\Website\\PageController', '2019-03-05 19:54:39', '2019-03-05 19:54:39'),
	(133, 'user-website-show-PageController', 'App-Application-Controllers-Website-PageController-show', 'Allow User admin on show in controller PageController', 'PageController', 'show', 'website', 1, 'App\\Application\\Controllers\\Website\\PageController', '2019-03-05 19:54:39', '2019-03-05 19:54:39'),
	(134, 'user-website-store-PageController', 'App-Application-Controllers-Website-PageController-store', 'Allow User admin on store in controller PageController', 'PageController', 'store', 'website', 1, 'App\\Application\\Controllers\\Website\\PageController', '2019-03-05 19:54:39', '2019-03-05 19:54:39'),
	(135, 'user-website-update-PageController', 'App-Application-Controllers-Website-PageController-update', 'Allow User admin on update in controller PageController', 'PageController', 'update', 'website', 1, 'App\\Application\\Controllers\\Website\\PageController', '2019-03-05 19:54:39', '2019-03-05 19:54:39'),
	(136, 'user-website-getById-PageController', 'App-Application-Controllers-Website-PageController-getById', 'Allow User admin on getById in controller PageController', 'PageController', 'getById', 'website', 1, 'App\\Application\\Controllers\\Website\\PageController', '2019-03-05 19:54:39', '2019-03-05 19:54:39'),
	(137, 'user-website-destroy-PageController', 'App-Application-Controllers-Website-PageController-destroy', 'Allow User admin on destroy in controller PageController', 'PageController', 'destroy', 'website', 1, 'App\\Application\\Controllers\\Website\\PageController', '2019-03-05 19:54:39', '2019-03-05 19:54:39'),
	(214, 'index-FormationController', 'App-Application-Admin-Formation-Controller-index', 'Allow admin on index in controller Formation Controller', 'FormationController', 'index', 'admin', 1, 'App\\Application\\Controllers\\Admin\\FormationController', '2019-03-06 14:35:29', '2019-03-06 14:35:29'),
	(215, 'show-FormationController', 'App-Application-Admin-Formation-Controller-show', 'Allow admin on show in controller Formation Controller', 'FormationController', 'show', 'admin', 1, 'App\\Application\\Controllers\\Admin\\FormationController', '2019-03-06 14:35:29', '2019-03-06 14:35:29'),
	(216, 'store-FormationController', 'App-Application-Admin-Formation-Controller-store', 'Allow admin on store in controller Formation Controller', 'FormationController', 'store', 'admin', 1, 'App\\Application\\Controllers\\Admin\\FormationController', '2019-03-06 14:35:29', '2019-03-06 14:35:29'),
	(217, 'update-FormationController', 'App-Application-Admin-Formation-Controller-update', 'Allow admin on update in controller Formation Controller', 'FormationController', 'update', 'admin', 1, 'App\\Application\\Controllers\\Admin\\FormationController', '2019-03-06 14:35:29', '2019-03-06 14:35:29'),
	(218, 'getById-FormationController', 'App-Application-Admin-Formation-Controller-getById', 'Allow admin on getById in controller Formation Controller', 'FormationController', 'getById', 'admin', 1, 'App\\Application\\Controllers\\Admin\\FormationController', '2019-03-06 14:35:29', '2019-03-06 14:35:29'),
	(219, 'destroy-FormationController', 'App-Application-Admin-Formation-Controller-destroy', 'Allow admin on destroy in controller Formation Controller', 'FormationController', 'destroy', 'admin', 1, 'App\\Application\\Controllers\\Admin\\FormationController', '2019-03-06 14:35:30', '2019-03-06 14:35:30'),
	(220, 'pluck-FormationController', 'App-Application-Admin-Formation-Controller-pluck', 'Allow admin on pluck in controller Formation Controller', 'FormationController', 'pluck', 'admin', 1, 'App\\Application\\Controllers\\Admin\\FormationController', '2019-03-06 14:35:30', '2019-03-06 14:35:30'),
	(221, 'admin-website-index-FormationController', 'App-Application-Admin-Formation-Controller-index', 'Allow admin on index in controller Formation Controller', 'FormationController', 'index', 'website', 1, 'App\\Application\\Controllers\\Website\\FormationController', '2019-03-06 14:35:30', '2019-03-06 14:35:30'),
	(222, 'admin-website-show-FormationController', 'App-Application-Admin-Formation-Controller-show', 'Allow admin on show in controller Formation Controller', 'FormationController', 'show', 'website', 1, 'App\\Application\\Controllers\\Website\\FormationController', '2019-03-06 14:35:30', '2019-03-06 14:35:30'),
	(223, 'admin-website-store-FormationController', 'App-Application-Admin-Formation-Controller-store', 'Allow admin on store in controller Formation Controller', 'FormationController', 'store', 'website', 1, 'App\\Application\\Controllers\\Website\\FormationController', '2019-03-06 14:35:30', '2019-03-06 14:35:30'),
	(224, 'admin-website-update-FormationController', 'App-Application-Admin-Formation-Controller-update', 'Allow admin on update in controller Formation Controller', 'FormationController', 'update', 'website', 1, 'App\\Application\\Controllers\\Website\\FormationController', '2019-03-06 14:35:30', '2019-03-06 14:35:30'),
	(225, 'admin-website-getById-FormationController', 'App-Application-Admin-Formation-Controller-getById', 'Allow admin on getById in controller Formation Controller', 'FormationController', 'getById', 'website', 1, 'App\\Application\\Controllers\\Website\\FormationController', '2019-03-06 14:35:30', '2019-03-06 14:35:30'),
	(226, 'admin-website-destroy-FormationController', 'App-Application-Admin-Formation-Controller-destroy', 'Allow admin on destroy in controller Formation Controller', 'FormationController', 'destroy', 'website', 1, 'App\\Application\\Controllers\\Website\\FormationController', '2019-03-06 14:35:30', '2019-03-06 14:35:30'),
	(227, 'users-websitesindex-FormationController', 'App-Application-Admin-Formation-Controller-index', 'Allow admin on index in controller Formation Controller', 'FormationController', 'index', 'website', 1, 'App\\Application\\Controllers\\Website\\FormationController', '2019-03-06 14:35:30', '2019-03-06 14:35:30'),
	(228, 'users-websiteshow-FormationController', 'App-Application-Admin-Formation-Controller-show', 'Allow admin on show in controller Formation Controller', 'FormationController', 'show', 'website', 1, 'App\\Application\\Controllers\\Website\\FormationController', '2019-03-06 14:35:30', '2019-03-06 14:35:30'),
	(229, 'users-websitestore-FormationController', 'App-Application-Admin-Formation-Controller-store', 'Allow admin on store in controller Formation Controller', 'FormationController', 'store', 'website', 1, 'App\\Application\\Controllers\\Website\\FormationController', '2019-03-06 14:35:30', '2019-03-06 14:35:30'),
	(230, 'users-websiteupdate-FormationController', 'App-Application-Admin-Formation-Controller-update', 'Allow admin on update in controller Formation Controller', 'FormationController', 'update', 'website', 1, 'App\\Application\\Controllers\\Website\\FormationController', '2019-03-06 14:35:30', '2019-03-06 14:35:30'),
	(231, 'users-websitegetById-FormationController', 'App-Application-Admin-Formation-Controller-getById', 'Allow admin on getById in controller Formation Controller', 'FormationController', 'getById', 'website', 1, 'App\\Application\\Controllers\\Website\\FormationController', '2019-03-06 14:35:30', '2019-03-06 14:35:30'),
	(232, 'users-websitedestroy-FormationController', 'App-Application-Admin-Formation-Controller-destroy', 'Allow admin on destroy in controller Formation Controller', 'FormationController', 'destroy', 'website', 1, 'App\\Application\\Controllers\\Website\\FormationController', '2019-03-06 14:35:30', '2019-03-06 14:35:30'),
	(233, 'index-InscriptionController', 'App-Application-Admin-Inscription-Controller-index', 'Allow admin on index in controller Inscription Controller', 'InscriptionController', 'index', 'admin', 1, 'App\\Application\\Controllers\\Admin\\InscriptionController', '2019-03-06 15:09:03', '2019-03-06 15:09:03'),
	(234, 'show-InscriptionController', 'App-Application-Admin-Inscription-Controller-show', 'Allow admin on show in controller Inscription Controller', 'InscriptionController', 'show', 'admin', 1, 'App\\Application\\Controllers\\Admin\\InscriptionController', '2019-03-06 15:09:04', '2019-03-06 15:09:04'),
	(235, 'store-InscriptionController', 'App-Application-Admin-Inscription-Controller-store', 'Allow admin on store in controller Inscription Controller', 'InscriptionController', 'store', 'admin', 1, 'App\\Application\\Controllers\\Admin\\InscriptionController', '2019-03-06 15:09:04', '2019-03-06 15:09:04'),
	(236, 'update-InscriptionController', 'App-Application-Admin-Inscription-Controller-update', 'Allow admin on update in controller Inscription Controller', 'InscriptionController', 'update', 'admin', 1, 'App\\Application\\Controllers\\Admin\\InscriptionController', '2019-03-06 15:09:04', '2019-03-06 15:09:04'),
	(237, 'getById-InscriptionController', 'App-Application-Admin-Inscription-Controller-getById', 'Allow admin on getById in controller Inscription Controller', 'InscriptionController', 'getById', 'admin', 1, 'App\\Application\\Controllers\\Admin\\InscriptionController', '2019-03-06 15:09:04', '2019-03-06 15:09:04'),
	(238, 'destroy-InscriptionController', 'App-Application-Admin-Inscription-Controller-destroy', 'Allow admin on destroy in controller Inscription Controller', 'InscriptionController', 'destroy', 'admin', 1, 'App\\Application\\Controllers\\Admin\\InscriptionController', '2019-03-06 15:09:04', '2019-03-06 15:09:04'),
	(239, 'pluck-InscriptionController', 'App-Application-Admin-Inscription-Controller-pluck', 'Allow admin on pluck in controller Inscription Controller', 'InscriptionController', 'pluck', 'admin', 1, 'App\\Application\\Controllers\\Admin\\InscriptionController', '2019-03-06 15:09:04', '2019-03-06 15:09:04'),
	(240, 'admin-website-index-InscriptionController', 'App-Application-Admin-Inscription-Controller-index', 'Allow admin on index in controller Inscription Controller', 'InscriptionController', 'index', 'website', 1, 'App\\Application\\Controllers\\Website\\InscriptionController', '2019-03-06 15:09:04', '2019-03-06 15:09:04'),
	(241, 'admin-website-show-InscriptionController', 'App-Application-Admin-Inscription-Controller-show', 'Allow admin on show in controller Inscription Controller', 'InscriptionController', 'show', 'website', 1, 'App\\Application\\Controllers\\Website\\InscriptionController', '2019-03-06 15:09:04', '2019-03-06 15:09:04'),
	(242, 'admin-website-store-InscriptionController', 'App-Application-Admin-Inscription-Controller-store', 'Allow admin on store in controller Inscription Controller', 'InscriptionController', 'store', 'website', 1, 'App\\Application\\Controllers\\Website\\InscriptionController', '2019-03-06 15:09:04', '2019-03-06 15:09:04'),
	(243, 'admin-website-update-InscriptionController', 'App-Application-Admin-Inscription-Controller-update', 'Allow admin on update in controller Inscription Controller', 'InscriptionController', 'update', 'website', 1, 'App\\Application\\Controllers\\Website\\InscriptionController', '2019-03-06 15:09:04', '2019-03-06 15:09:04'),
	(244, 'admin-website-getById-InscriptionController', 'App-Application-Admin-Inscription-Controller-getById', 'Allow admin on getById in controller Inscription Controller', 'InscriptionController', 'getById', 'website', 1, 'App\\Application\\Controllers\\Website\\InscriptionController', '2019-03-06 15:09:04', '2019-03-06 15:09:04'),
	(245, 'admin-website-destroy-InscriptionController', 'App-Application-Admin-Inscription-Controller-destroy', 'Allow admin on destroy in controller Inscription Controller', 'InscriptionController', 'destroy', 'website', 1, 'App\\Application\\Controllers\\Website\\InscriptionController', '2019-03-06 15:09:04', '2019-03-06 15:09:04'),
	(246, 'users-websiteindex-InscriptionController', 'App-Application-Admin-Inscription-Controller-index', 'Allow admin on index in controller Inscription Controller', 'InscriptionController', 'index', 'website', 1, 'App\\Application\\Controllers\\Website\\InscriptionController', '2019-03-06 15:09:04', '2019-03-06 15:09:04'),
	(247, 'users-websiteshow-InscriptionController', 'App-Application-Admin-Inscription-Controller-show', 'Allow admin on show in controller Inscription Controller', 'InscriptionController', 'show', 'website', 1, 'App\\Application\\Controllers\\Website\\InscriptionController', '2019-03-06 15:09:04', '2019-03-06 15:09:04'),
	(248, 'users-websitestore-InscriptionController', 'App-Application-Admin-Inscription-Controller-store', 'Allow admin on store in controller Inscription Controller', 'InscriptionController', 'store', 'website', 1, 'App\\Application\\Controllers\\Website\\InscriptionController', '2019-03-06 15:09:04', '2019-03-06 15:09:04'),
	(249, 'users-websiteupdate-InscriptionController', 'App-Application-Admin-Inscription-Controller-update', 'Allow admin on update in controller Inscription Controller', 'InscriptionController', 'update', 'website', 1, 'App\\Application\\Controllers\\Website\\InscriptionController', '2019-03-06 15:09:04', '2019-03-06 15:09:04'),
	(250, 'users-websitegetById-InscriptionController', 'App-Application-Admin-Inscription-Controller-getById', 'Allow admin on getById in controller Inscription Controller', 'InscriptionController', 'getById', 'website', 1, 'App\\Application\\Controllers\\Website\\InscriptionController', '2019-03-06 15:09:04', '2019-03-06 15:09:04'),
	(251, 'users-websitedestroy-InscriptionController', 'App-Application-Admin-Inscription-Controller-destroy', 'Allow admin on destroy in controller Inscription Controller', 'InscriptionController', 'destroy', 'website', 1, 'App\\Application\\Controllers\\Website\\InscriptionController', '2019-03-06 15:09:05', '2019-03-06 15:09:05'),
	(254, 'index-SectionController', 'App-Application-Admin-Section-Controller-index', 'Allow admin on index in controller Section Controller', 'SectionController', 'index', 'admin', 1, 'App\\Application\\Controllers\\Admin\\SectionController', '2019-03-06 20:38:37', '2019-03-06 20:38:37'),
	(255, 'show-SectionController', 'App-Application-Admin-Section-Controller-show', 'Allow admin on show in controller Section Controller', 'SectionController', 'show', 'admin', 1, 'App\\Application\\Controllers\\Admin\\SectionController', '2019-03-06 20:38:37', '2019-03-06 20:38:37'),
	(256, 'store-SectionController', 'App-Application-Admin-Section-Controller-store', 'Allow admin on store in controller Section Controller', 'SectionController', 'store', 'admin', 1, 'App\\Application\\Controllers\\Admin\\SectionController', '2019-03-06 20:38:37', '2019-03-06 20:38:37'),
	(257, 'update-SectionController', 'App-Application-Admin-Section-Controller-update', 'Allow admin on update in controller Section Controller', 'SectionController', 'update', 'admin', 1, 'App\\Application\\Controllers\\Admin\\SectionController', '2019-03-06 20:38:37', '2019-03-06 20:38:37'),
	(258, 'getById-SectionController', 'App-Application-Admin-Section-Controller-getById', 'Allow admin on getById in controller Section Controller', 'SectionController', 'getById', 'admin', 1, 'App\\Application\\Controllers\\Admin\\SectionController', '2019-03-06 20:38:37', '2019-03-06 20:38:37'),
	(259, 'destroy-SectionController', 'App-Application-Admin-Section-Controller-destroy', 'Allow admin on destroy in controller Section Controller', 'SectionController', 'destroy', 'admin', 1, 'App\\Application\\Controllers\\Admin\\SectionController', '2019-03-06 20:38:37', '2019-03-06 20:38:37'),
	(260, 'pluck-SectionController', 'App-Application-Admin-Section-Controller-pluck', 'Allow admin on pluck in controller Section Controller', 'SectionController', 'pluck', 'admin', 1, 'App\\Application\\Controllers\\Admin\\SectionController', '2019-03-06 20:38:37', '2019-03-06 20:38:37'),
	(261, 'admin-website-index-SectionController', 'App-Application-Admin-Section-Controller-index', 'Allow admin on index in controller Section Controller', 'SectionController', 'index', 'website', 1, 'App\\Application\\Controllers\\Website\\SectionController', '2019-03-06 20:38:37', '2019-03-06 20:38:37'),
	(262, 'admin-website-show-SectionController', 'App-Application-Admin-Section-Controller-show', 'Allow admin on show in controller Section Controller', 'SectionController', 'show', 'website', 1, 'App\\Application\\Controllers\\Website\\SectionController', '2019-03-06 20:38:37', '2019-03-06 20:38:37'),
	(263, 'admin-website-store-SectionController', 'App-Application-Admin-Section-Controller-store', 'Allow admin on store in controller Section Controller', 'SectionController', 'store', 'website', 1, 'App\\Application\\Controllers\\Website\\SectionController', '2019-03-06 20:38:37', '2019-03-06 20:38:37'),
	(264, 'admin-website-update-SectionController', 'App-Application-Admin-Section-Controller-update', 'Allow admin on update in controller Section Controller', 'SectionController', 'update', 'website', 1, 'App\\Application\\Controllers\\Website\\SectionController', '2019-03-06 20:38:38', '2019-03-06 20:38:38'),
	(265, 'admin-website-getById-SectionController', 'App-Application-Admin-Section-Controller-getById', 'Allow admin on getById in controller Section Controller', 'SectionController', 'getById', 'website', 1, 'App\\Application\\Controllers\\Website\\SectionController', '2019-03-06 20:38:38', '2019-03-06 20:38:38'),
	(266, 'admin-website-destroy-SectionController', 'App-Application-Admin-Section-Controller-destroy', 'Allow admin on destroy in controller Section Controller', 'SectionController', 'destroy', 'website', 1, 'App\\Application\\Controllers\\Website\\SectionController', '2019-03-06 20:38:38', '2019-03-06 20:38:38'),
	(267, 'users-websiteindex-SectionController', 'App-Application-Admin-Section-Controller-index', 'Allow admin on index in controller Section Controller', 'SectionController', 'index', 'website', 1, 'App\\Application\\Controllers\\Website\\SectionController', '2019-03-06 20:38:38', '2019-03-06 20:38:38'),
	(268, 'users-websiteshow-SectionController', 'App-Application-Admin-Section-Controller-show', 'Allow admin on show in controller Section Controller', 'SectionController', 'show', 'website', 1, 'App\\Application\\Controllers\\Website\\SectionController', '2019-03-06 20:38:38', '2019-03-06 20:38:38'),
	(269, 'users-websitestore-SectionController', 'App-Application-Admin-Section-Controller-store', 'Allow admin on store in controller Section Controller', 'SectionController', 'store', 'website', 1, 'App\\Application\\Controllers\\Website\\SectionController', '2019-03-06 20:38:38', '2019-03-06 20:38:38'),
	(270, 'users-websiteupdate-SectionController', 'App-Application-Admin-Section-Controller-update', 'Allow admin on update in controller Section Controller', 'SectionController', 'update', 'website', 1, 'App\\Application\\Controllers\\Website\\SectionController', '2019-03-06 20:38:38', '2019-03-06 20:38:38'),
	(271, 'users-websitegetById-SectionController', 'App-Application-Admin-Section-Controller-getById', 'Allow admin on getById in controller Section Controller', 'SectionController', 'getById', 'website', 1, 'App\\Application\\Controllers\\Website\\SectionController', '2019-03-06 20:38:39', '2019-03-06 20:38:39'),
	(272, 'users-websitedestroy-SectionController', 'App-Application-Admin-Section-Controller-destroy', 'Allow admin on destroy in controller Section Controller', 'SectionController', 'destroy', 'website', 1, 'App\\Application\\Controllers\\Website\\SectionController', '2019-03-06 20:38:39', '2019-03-06 20:38:39'),
	(273, 'index-LocalController', 'App-Application-Admin-Local-Controller-index', 'Allow admin on index in controller Local Controller', 'LocalController', 'index', 'admin', 1, 'App\\Application\\Controllers\\Admin\\LocalController', '2019-03-06 20:53:21', '2019-03-06 20:53:21'),
	(274, 'show-LocalController', 'App-Application-Admin-Local-Controller-show', 'Allow admin on show in controller Local Controller', 'LocalController', 'show', 'admin', 1, 'App\\Application\\Controllers\\Admin\\LocalController', '2019-03-06 20:53:21', '2019-03-06 20:53:21'),
	(275, 'store-LocalController', 'App-Application-Admin-Local-Controller-store', 'Allow admin on store in controller Local Controller', 'LocalController', 'store', 'admin', 1, 'App\\Application\\Controllers\\Admin\\LocalController', '2019-03-06 20:53:21', '2019-03-06 20:53:21'),
	(276, 'update-LocalController', 'App-Application-Admin-Local-Controller-update', 'Allow admin on update in controller Local Controller', 'LocalController', 'update', 'admin', 1, 'App\\Application\\Controllers\\Admin\\LocalController', '2019-03-06 20:53:21', '2019-03-06 20:53:21'),
	(277, 'getById-LocalController', 'App-Application-Admin-Local-Controller-getById', 'Allow admin on getById in controller Local Controller', 'LocalController', 'getById', 'admin', 1, 'App\\Application\\Controllers\\Admin\\LocalController', '2019-03-06 20:53:21', '2019-03-06 20:53:21'),
	(278, 'destroy-LocalController', 'App-Application-Admin-Local-Controller-destroy', 'Allow admin on destroy in controller Local Controller', 'LocalController', 'destroy', 'admin', 1, 'App\\Application\\Controllers\\Admin\\LocalController', '2019-03-06 20:53:21', '2019-03-06 20:53:21'),
	(279, 'pluck-LocalController', 'App-Application-Admin-Local-Controller-pluck', 'Allow admin on pluck in controller Local Controller', 'LocalController', 'pluck', 'admin', 1, 'App\\Application\\Controllers\\Admin\\LocalController', '2019-03-06 20:53:21', '2019-03-06 20:53:21'),
	(280, 'admin-website-index-LocalController', 'App-Application-Admin-Local-Controller-index', 'Allow admin on index in controller Local Controller', 'LocalController', 'index', 'website', 1, 'App\\Application\\Controllers\\Website\\LocalController', '2019-03-06 20:53:22', '2019-03-06 20:53:22'),
	(281, 'admin-website-show-LocalController', 'App-Application-Admin-Local-Controller-show', 'Allow admin on show in controller Local Controller', 'LocalController', 'show', 'website', 1, 'App\\Application\\Controllers\\Website\\LocalController', '2019-03-06 20:53:22', '2019-03-06 20:53:22'),
	(282, 'admin-website-store-LocalController', 'App-Application-Admin-Local-Controller-store', 'Allow admin on store in controller Local Controller', 'LocalController', 'store', 'website', 1, 'App\\Application\\Controllers\\Website\\LocalController', '2019-03-06 20:53:22', '2019-03-06 20:53:22'),
	(283, 'admin-website-update-LocalController', 'App-Application-Admin-Local-Controller-update', 'Allow admin on update in controller Local Controller', 'LocalController', 'update', 'website', 1, 'App\\Application\\Controllers\\Website\\LocalController', '2019-03-06 20:53:22', '2019-03-06 20:53:22'),
	(284, 'admin-website-getById-LocalController', 'App-Application-Admin-Local-Controller-getById', 'Allow admin on getById in controller Local Controller', 'LocalController', 'getById', 'website', 1, 'App\\Application\\Controllers\\Website\\LocalController', '2019-03-06 20:53:22', '2019-03-06 20:53:22'),
	(285, 'admin-website-destroy-LocalController', 'App-Application-Admin-Local-Controller-destroy', 'Allow admin on destroy in controller Local Controller', 'LocalController', 'destroy', 'website', 1, 'App\\Application\\Controllers\\Website\\LocalController', '2019-03-06 20:53:22', '2019-03-06 20:53:22'),
	(286, 'users-websiteindex-LocalController', 'App-Application-Admin-Local-Controller-index', 'Allow admin on index in controller Local Controller', 'LocalController', 'index', 'website', 1, 'App\\Application\\Controllers\\Website\\LocalController', '2019-03-06 20:53:22', '2019-03-06 20:53:22'),
	(287, 'users-websiteshow-LocalController', 'App-Application-Admin-Local-Controller-show', 'Allow admin on show in controller Local Controller', 'LocalController', 'show', 'website', 1, 'App\\Application\\Controllers\\Website\\LocalController', '2019-03-06 20:53:22', '2019-03-06 20:53:22'),
	(288, 'users-websitestore-LocalController', 'App-Application-Admin-Local-Controller-store', 'Allow admin on store in controller Local Controller', 'LocalController', 'store', 'website', 1, 'App\\Application\\Controllers\\Website\\LocalController', '2019-03-06 20:53:22', '2019-03-06 20:53:22'),
	(289, 'users-websiteupdate-LocalController', 'App-Application-Admin-Local-Controller-update', 'Allow admin on update in controller Local Controller', 'LocalController', 'update', 'website', 1, 'App\\Application\\Controllers\\Website\\LocalController', '2019-03-06 20:53:22', '2019-03-06 20:53:22'),
	(290, 'users-websitegetById-LocalController', 'App-Application-Admin-Local-Controller-getById', 'Allow admin on getById in controller Local Controller', 'LocalController', 'getById', 'website', 1, 'App\\Application\\Controllers\\Website\\LocalController', '2019-03-06 20:53:23', '2019-03-06 20:53:23'),
	(291, 'users-websitedestroy-LocalController', 'App-Application-Admin-Local-Controller-destroy', 'Allow admin on destroy in controller Local Controller', 'LocalController', 'destroy', 'website', 1, 'App\\Application\\Controllers\\Website\\LocalController', '2019-03-06 20:53:23', '2019-03-06 20:53:23'),
	(292, 'index-ArtisanController', 'App-Application-Admin-Artisan-Controller-index', 'Allow admin on index in controller Artisan Controller', 'ArtisanController', 'index', 'admin', 1, 'App\\Application\\Controllers\\Admin\\ArtisanController', '2019-03-06 20:55:33', '2019-03-06 20:55:33'),
	(293, 'show-ArtisanController', 'App-Application-Admin-Artisan-Controller-show', 'Allow admin on show in controller Artisan Controller', 'ArtisanController', 'show', 'admin', 1, 'App\\Application\\Controllers\\Admin\\ArtisanController', '2019-03-06 20:55:33', '2019-03-06 20:55:33'),
	(294, 'store-ArtisanController', 'App-Application-Admin-Artisan-Controller-store', 'Allow admin on store in controller Artisan Controller', 'ArtisanController', 'store', 'admin', 1, 'App\\Application\\Controllers\\Admin\\ArtisanController', '2019-03-06 20:55:33', '2019-03-06 20:55:33'),
	(295, 'update-ArtisanController', 'App-Application-Admin-Artisan-Controller-update', 'Allow admin on update in controller Artisan Controller', 'ArtisanController', 'update', 'admin', 1, 'App\\Application\\Controllers\\Admin\\ArtisanController', '2019-03-06 20:55:33', '2019-03-06 20:55:33'),
	(296, 'getById-ArtisanController', 'App-Application-Admin-Artisan-Controller-getById', 'Allow admin on getById in controller Artisan Controller', 'ArtisanController', 'getById', 'admin', 1, 'App\\Application\\Controllers\\Admin\\ArtisanController', '2019-03-06 20:55:33', '2019-03-06 20:55:33'),
	(297, 'destroy-ArtisanController', 'App-Application-Admin-Artisan-Controller-destroy', 'Allow admin on destroy in controller Artisan Controller', 'ArtisanController', 'destroy', 'admin', 1, 'App\\Application\\Controllers\\Admin\\ArtisanController', '2019-03-06 20:55:33', '2019-03-06 20:55:33'),
	(298, 'pluck-ArtisanController', 'App-Application-Admin-Artisan-Controller-pluck', 'Allow admin on pluck in controller Artisan Controller', 'ArtisanController', 'pluck', 'admin', 1, 'App\\Application\\Controllers\\Admin\\ArtisanController', '2019-03-06 20:55:33', '2019-03-06 20:55:33'),
	(299, 'admin-website-index-ArtisanController', 'App-Application-Admin-Artisan-Controller-index', 'Allow admin on index in controller Artisan Controller', 'ArtisanController', 'index', 'website', 1, 'App\\Application\\Controllers\\Website\\ArtisanController', '2019-03-06 20:55:33', '2019-03-06 20:55:33'),
	(300, 'admin-website-show-ArtisanController', 'App-Application-Admin-Artisan-Controller-show', 'Allow admin on show in controller Artisan Controller', 'ArtisanController', 'show', 'website', 1, 'App\\Application\\Controllers\\Website\\ArtisanController', '2019-03-06 20:55:34', '2019-03-06 20:55:34'),
	(301, 'admin-website-store-ArtisanController', 'App-Application-Admin-Artisan-Controller-store', 'Allow admin on store in controller Artisan Controller', 'ArtisanController', 'store', 'website', 1, 'App\\Application\\Controllers\\Website\\ArtisanController', '2019-03-06 20:55:34', '2019-03-06 20:55:34'),
	(302, 'admin-website-update-ArtisanController', 'App-Application-Admin-Artisan-Controller-update', 'Allow admin on update in controller Artisan Controller', 'ArtisanController', 'update', 'website', 1, 'App\\Application\\Controllers\\Website\\ArtisanController', '2019-03-06 20:55:34', '2019-03-06 20:55:34'),
	(303, 'admin-website-getById-ArtisanController', 'App-Application-Admin-Artisan-Controller-getById', 'Allow admin on getById in controller Artisan Controller', 'ArtisanController', 'getById', 'website', 1, 'App\\Application\\Controllers\\Website\\ArtisanController', '2019-03-06 20:55:34', '2019-03-06 20:55:34'),
	(304, 'admin-website-destroy-ArtisanController', 'App-Application-Admin-Artisan-Controller-destroy', 'Allow admin on destroy in controller Artisan Controller', 'ArtisanController', 'destroy', 'website', 1, 'App\\Application\\Controllers\\Website\\ArtisanController', '2019-03-06 20:55:34', '2019-03-06 20:55:34'),
	(305, 'users-websiteindex-ArtisanController', 'App-Application-Admin-Artisan-Controller-index', 'Allow admin on index in controller Artisan Controller', 'ArtisanController', 'index', 'website', 1, 'App\\Application\\Controllers\\Website\\ArtisanController', '2019-03-06 20:55:34', '2019-03-06 20:55:34'),
	(306, 'users-websiteshow-ArtisanController', 'App-Application-Admin-Artisan-Controller-show', 'Allow admin on show in controller Artisan Controller', 'ArtisanController', 'show', 'website', 1, 'App\\Application\\Controllers\\Website\\ArtisanController', '2019-03-06 20:55:34', '2019-03-06 20:55:34'),
	(307, 'users-websitestore-ArtisanController', 'App-Application-Admin-Artisan-Controller-store', 'Allow admin on store in controller Artisan Controller', 'ArtisanController', 'store', 'website', 1, 'App\\Application\\Controllers\\Website\\ArtisanController', '2019-03-06 20:55:34', '2019-03-06 20:55:34'),
	(308, 'users-websiteupdate-ArtisanController', 'App-Application-Admin-Artisan-Controller-update', 'Allow admin on update in controller Artisan Controller', 'ArtisanController', 'update', 'website', 1, 'App\\Application\\Controllers\\Website\\ArtisanController', '2019-03-06 20:55:34', '2019-03-06 20:55:34'),
	(309, 'users-websitegetById-ArtisanController', 'App-Application-Admin-Artisan-Controller-getById', 'Allow admin on getById in controller Artisan Controller', 'ArtisanController', 'getById', 'website', 1, 'App\\Application\\Controllers\\Website\\ArtisanController', '2019-03-06 20:55:34', '2019-03-06 20:55:34'),
	(310, 'users-websitedestroy-ArtisanController', 'App-Application-Admin-Artisan-Controller-destroy', 'Allow admin on destroy in controller Artisan Controller', 'ArtisanController', 'destroy', 'website', 1, 'App\\Application\\Controllers\\Website\\ArtisanController', '2019-03-06 20:55:34', '2019-03-06 20:55:34'),
	(311, 'index-RequestController', 'App-Application-Admin-Request-Controller-index', 'Allow admin on index in controller Request Controller', 'RequestController', 'index', 'admin', 1, 'App\\Application\\Controllers\\Admin\\RequestController', '2019-03-06 23:20:14', '2019-03-06 23:20:14'),
	(312, 'show-RequestController', 'App-Application-Admin-Request-Controller-show', 'Allow admin on show in controller Request Controller', 'RequestController', 'show', 'admin', 1, 'App\\Application\\Controllers\\Admin\\RequestController', '2019-03-06 23:20:14', '2019-03-06 23:20:14'),
	(313, 'store-RequestController', 'App-Application-Admin-Request-Controller-store', 'Allow admin on store in controller Request Controller', 'RequestController', 'store', 'admin', 1, 'App\\Application\\Controllers\\Admin\\RequestController', '2019-03-06 23:20:14', '2019-03-06 23:20:14'),
	(314, 'update-RequestController', 'App-Application-Admin-Request-Controller-update', 'Allow admin on update in controller Request Controller', 'RequestController', 'update', 'admin', 1, 'App\\Application\\Controllers\\Admin\\RequestController', '2019-03-06 23:20:14', '2019-03-06 23:20:14'),
	(315, 'getById-RequestController', 'App-Application-Admin-Request-Controller-getById', 'Allow admin on getById in controller Request Controller', 'RequestController', 'getById', 'admin', 1, 'App\\Application\\Controllers\\Admin\\RequestController', '2019-03-06 23:20:14', '2019-03-06 23:20:14'),
	(316, 'destroy-RequestController', 'App-Application-Admin-Request-Controller-destroy', 'Allow admin on destroy in controller Request Controller', 'RequestController', 'destroy', 'admin', 1, 'App\\Application\\Controllers\\Admin\\RequestController', '2019-03-06 23:20:14', '2019-03-06 23:20:14'),
	(317, 'pluck-RequestController', 'App-Application-Admin-Request-Controller-pluck', 'Allow admin on pluck in controller Request Controller', 'RequestController', 'pluck', 'admin', 1, 'App\\Application\\Controllers\\Admin\\RequestController', '2019-03-06 23:20:14', '2019-03-06 23:20:14'),
	(318, 'admin-website-index-RequestController', 'App-Application-Admin-Request-Controller-index', 'Allow admin on index in controller Request Controller', 'RequestController', 'index', 'website', 1, 'App\\Application\\Controllers\\Website\\RequestController', '2019-03-06 23:20:15', '2019-03-06 23:20:15'),
	(319, 'admin-website-show-RequestController', 'App-Application-Admin-Request-Controller-show', 'Allow admin on show in controller Request Controller', 'RequestController', 'show', 'website', 1, 'App\\Application\\Controllers\\Website\\RequestController', '2019-03-06 23:20:15', '2019-03-06 23:20:15'),
	(320, 'admin-website-store-RequestController', 'App-Application-Admin-Request-Controller-store', 'Allow admin on store in controller Request Controller', 'RequestController', 'store', 'website', 1, 'App\\Application\\Controllers\\Website\\RequestController', '2019-03-06 23:20:15', '2019-03-06 23:20:15'),
	(321, 'admin-website-update-RequestController', 'App-Application-Admin-Request-Controller-update', 'Allow admin on update in controller Request Controller', 'RequestController', 'update', 'website', 1, 'App\\Application\\Controllers\\Website\\RequestController', '2019-03-06 23:20:15', '2019-03-06 23:20:15'),
	(322, 'admin-website-getById-RequestController', 'App-Application-Admin-Request-Controller-getById', 'Allow admin on getById in controller Request Controller', 'RequestController', 'getById', 'website', 1, 'App\\Application\\Controllers\\Website\\RequestController', '2019-03-06 23:20:15', '2019-03-06 23:20:15'),
	(323, 'admin-website-destroy-RequestController', 'App-Application-Admin-Request-Controller-destroy', 'Allow admin on destroy in controller Request Controller', 'RequestController', 'destroy', 'website', 1, 'App\\Application\\Controllers\\Website\\RequestController', '2019-03-06 23:20:15', '2019-03-06 23:20:15'),
	(324, 'users-websiteindex-RequestController', 'App-Application-Admin-Request-Controller-index', 'Allow admin on index in controller Request Controller', 'RequestController', 'index', 'website', 1, 'App\\Application\\Controllers\\Website\\RequestController', '2019-03-06 23:20:15', '2019-03-06 23:20:15'),
	(325, 'users-websiteshow-RequestController', 'App-Application-Admin-Request-Controller-show', 'Allow admin on show in controller Request Controller', 'RequestController', 'show', 'website', 1, 'App\\Application\\Controllers\\Website\\RequestController', '2019-03-06 23:20:15', '2019-03-06 23:20:15'),
	(326, 'users-websitestore-RequestController', 'App-Application-Admin-Request-Controller-store', 'Allow admin on store in controller Request Controller', 'RequestController', 'store', 'website', 1, 'App\\Application\\Controllers\\Website\\RequestController', '2019-03-06 23:20:16', '2019-03-06 23:20:16'),
	(327, 'users-websiteupdate-RequestController', 'App-Application-Admin-Request-Controller-update', 'Allow admin on update in controller Request Controller', 'RequestController', 'update', 'website', 1, 'App\\Application\\Controllers\\Website\\RequestController', '2019-03-06 23:20:16', '2019-03-06 23:20:16'),
	(328, 'users-websitegetById-RequestController', 'App-Application-Admin-Request-Controller-getById', 'Allow admin on getById in controller Request Controller', 'RequestController', 'getById', 'website', 1, 'App\\Application\\Controllers\\Website\\RequestController', '2019-03-06 23:20:16', '2019-03-06 23:20:16'),
	(329, 'users-websitedestroy-RequestController', 'App-Application-Admin-Request-Controller-destroy', 'Allow admin on destroy in controller Request Controller', 'RequestController', 'destroy', 'website', 1, 'App\\Application\\Controllers\\Website\\RequestController', '2019-03-06 23:20:16', '2019-03-06 23:20:16'),
	(330, 'index-NewsController', 'App-Application-Admin-News-Controller-index', 'Allow admin on index in controller News Controller', 'NewsController', 'index', 'admin', 1, 'App\\Application\\Controllers\\Admin\\NewsController', '2019-03-07 16:14:36', '2019-03-07 16:14:36'),
	(331, 'show-NewsController', 'App-Application-Admin-News-Controller-show', 'Allow admin on show in controller News Controller', 'NewsController', 'show', 'admin', 1, 'App\\Application\\Controllers\\Admin\\NewsController', '2019-03-07 16:14:36', '2019-03-07 16:14:36'),
	(332, 'store-NewsController', 'App-Application-Admin-News-Controller-store', 'Allow admin on store in controller News Controller', 'NewsController', 'store', 'admin', 1, 'App\\Application\\Controllers\\Admin\\NewsController', '2019-03-07 16:14:36', '2019-03-07 16:14:36'),
	(333, 'update-NewsController', 'App-Application-Admin-News-Controller-update', 'Allow admin on update in controller News Controller', 'NewsController', 'update', 'admin', 1, 'App\\Application\\Controllers\\Admin\\NewsController', '2019-03-07 16:14:36', '2019-03-07 16:14:36'),
	(334, 'getById-NewsController', 'App-Application-Admin-News-Controller-getById', 'Allow admin on getById in controller News Controller', 'NewsController', 'getById', 'admin', 1, 'App\\Application\\Controllers\\Admin\\NewsController', '2019-03-07 16:14:36', '2019-03-07 16:14:36'),
	(335, 'destroy-NewsController', 'App-Application-Admin-News-Controller-destroy', 'Allow admin on destroy in controller News Controller', 'NewsController', 'destroy', 'admin', 1, 'App\\Application\\Controllers\\Admin\\NewsController', '2019-03-07 16:14:36', '2019-03-07 16:14:36'),
	(336, 'pluck-NewsController', 'App-Application-Admin-News-Controller-pluck', 'Allow admin on pluck in controller News Controller', 'NewsController', 'pluck', 'admin', 1, 'App\\Application\\Controllers\\Admin\\NewsController', '2019-03-07 16:14:36', '2019-03-07 16:14:36'),
	(337, 'admin-website-index-NewsController', 'App-Application-Admin-News-Controller-index', 'Allow admin on index in controller News Controller', 'NewsController', 'index', 'website', 1, 'App\\Application\\Controllers\\Website\\NewsController', '2019-03-07 16:14:38', '2019-03-07 16:14:38'),
	(338, 'admin-website-show-NewsController', 'App-Application-Admin-News-Controller-show', 'Allow admin on show in controller News Controller', 'NewsController', 'show', 'website', 1, 'App\\Application\\Controllers\\Website\\NewsController', '2019-03-07 16:14:39', '2019-03-07 16:14:39'),
	(339, 'admin-website-store-NewsController', 'App-Application-Admin-News-Controller-store', 'Allow admin on store in controller News Controller', 'NewsController', 'store', 'website', 1, 'App\\Application\\Controllers\\Website\\NewsController', '2019-03-07 16:14:39', '2019-03-07 16:14:39'),
	(340, 'admin-website-update-NewsController', 'App-Application-Admin-News-Controller-update', 'Allow admin on update in controller News Controller', 'NewsController', 'update', 'website', 1, 'App\\Application\\Controllers\\Website\\NewsController', '2019-03-07 16:14:39', '2019-03-07 16:14:39'),
	(341, 'admin-website-getById-NewsController', 'App-Application-Admin-News-Controller-getById', 'Allow admin on getById in controller News Controller', 'NewsController', 'getById', 'website', 1, 'App\\Application\\Controllers\\Website\\NewsController', '2019-03-07 16:14:39', '2019-03-07 16:14:39'),
	(342, 'admin-website-destroy-NewsController', 'App-Application-Admin-News-Controller-destroy', 'Allow admin on destroy in controller News Controller', 'NewsController', 'destroy', 'website', 1, 'App\\Application\\Controllers\\Website\\NewsController', '2019-03-07 16:14:39', '2019-03-07 16:14:39'),
	(343, 'users-websiteindex-NewsController', 'App-Application-Admin-News-Controller-index', 'Allow admin on index in controller News Controller', 'NewsController', 'index', 'website', 1, 'App\\Application\\Controllers\\Website\\NewsController', '2019-03-07 16:14:39', '2019-03-07 16:14:39'),
	(344, 'users-websiteshow-NewsController', 'App-Application-Admin-News-Controller-show', 'Allow admin on show in controller News Controller', 'NewsController', 'show', 'website', 1, 'App\\Application\\Controllers\\Website\\NewsController', '2019-03-07 16:14:39', '2019-03-07 16:14:39'),
	(345, 'users-websitestore-NewsController', 'App-Application-Admin-News-Controller-store', 'Allow admin on store in controller News Controller', 'NewsController', 'store', 'website', 1, 'App\\Application\\Controllers\\Website\\NewsController', '2019-03-07 16:14:39', '2019-03-07 16:14:39'),
	(346, 'users-websiteupdate-NewsController', 'App-Application-Admin-News-Controller-update', 'Allow admin on update in controller News Controller', 'NewsController', 'update', 'website', 1, 'App\\Application\\Controllers\\Website\\NewsController', '2019-03-07 16:14:39', '2019-03-07 16:14:39'),
	(347, 'users-websitegetById-NewsController', 'App-Application-Admin-News-Controller-getById', 'Allow admin on getById in controller News Controller', 'NewsController', 'getById', 'website', 1, 'App\\Application\\Controllers\\Website\\NewsController', '2019-03-07 16:14:39', '2019-03-07 16:14:39'),
	(348, 'users-websitedestroy-NewsController', 'App-Application-Admin-News-Controller-destroy', 'Allow admin on destroy in controller News Controller', 'NewsController', 'destroy', 'website', 1, 'App\\Application\\Controllers\\Website\\NewsController', '2019-03-07 16:14:39', '2019-03-07 16:14:39'),
	(349, 'index-GaleryController', 'App-Application-Admin-Galery-Controller-index', 'Allow admin on index in controller Galery Controller', 'GaleryController', 'index', 'admin', 1, 'App\\Application\\Controllers\\Admin\\GaleryController', '2019-03-07 18:14:30', '2019-03-07 18:14:30'),
	(350, 'show-GaleryController', 'App-Application-Admin-Galery-Controller-show', 'Allow admin on show in controller Galery Controller', 'GaleryController', 'show', 'admin', 1, 'App\\Application\\Controllers\\Admin\\GaleryController', '2019-03-07 18:14:30', '2019-03-07 18:14:30'),
	(351, 'store-GaleryController', 'App-Application-Admin-Galery-Controller-store', 'Allow admin on store in controller Galery Controller', 'GaleryController', 'store', 'admin', 1, 'App\\Application\\Controllers\\Admin\\GaleryController', '2019-03-07 18:14:30', '2019-03-07 18:14:30'),
	(352, 'update-GaleryController', 'App-Application-Admin-Galery-Controller-update', 'Allow admin on update in controller Galery Controller', 'GaleryController', 'update', 'admin', 1, 'App\\Application\\Controllers\\Admin\\GaleryController', '2019-03-07 18:14:30', '2019-03-07 18:14:30'),
	(353, 'getById-GaleryController', 'App-Application-Admin-Galery-Controller-getById', 'Allow admin on getById in controller Galery Controller', 'GaleryController', 'getById', 'admin', 1, 'App\\Application\\Controllers\\Admin\\GaleryController', '2019-03-07 18:14:30', '2019-03-07 18:14:30'),
	(354, 'destroy-GaleryController', 'App-Application-Admin-Galery-Controller-destroy', 'Allow admin on destroy in controller Galery Controller', 'GaleryController', 'destroy', 'admin', 1, 'App\\Application\\Controllers\\Admin\\GaleryController', '2019-03-07 18:14:30', '2019-03-07 18:14:30'),
	(355, 'pluck-GaleryController', 'App-Application-Admin-Galery-Controller-pluck', 'Allow admin on pluck in controller Galery Controller', 'GaleryController', 'pluck', 'admin', 1, 'App\\Application\\Controllers\\Admin\\GaleryController', '2019-03-07 18:14:30', '2019-03-07 18:14:30'),
	(356, 'admin-website-index-GaleryController', 'App-Application-Admin-Galery-Controller-index', 'Allow admin on index in controller Galery Controller', 'GaleryController', 'index', 'website', 1, 'App\\Application\\Controllers\\Website\\GaleryController', '2019-03-07 18:14:31', '2019-03-07 18:14:31'),
	(357, 'admin-website-show-GaleryController', 'App-Application-Admin-Galery-Controller-show', 'Allow admin on show in controller Galery Controller', 'GaleryController', 'show', 'website', 1, 'App\\Application\\Controllers\\Website\\GaleryController', '2019-03-07 18:14:31', '2019-03-07 18:14:31'),
	(358, 'admin-website-store-GaleryController', 'App-Application-Admin-Galery-Controller-store', 'Allow admin on store in controller Galery Controller', 'GaleryController', 'store', 'website', 1, 'App\\Application\\Controllers\\Website\\GaleryController', '2019-03-07 18:14:31', '2019-03-07 18:14:31'),
	(359, 'admin-website-update-GaleryController', 'App-Application-Admin-Galery-Controller-update', 'Allow admin on update in controller Galery Controller', 'GaleryController', 'update', 'website', 1, 'App\\Application\\Controllers\\Website\\GaleryController', '2019-03-07 18:14:31', '2019-03-07 18:14:31'),
	(360, 'admin-website-getById-GaleryController', 'App-Application-Admin-Galery-Controller-getById', 'Allow admin on getById in controller Galery Controller', 'GaleryController', 'getById', 'website', 1, 'App\\Application\\Controllers\\Website\\GaleryController', '2019-03-07 18:14:31', '2019-03-07 18:14:31'),
	(361, 'admin-website-destroy-GaleryController', 'App-Application-Admin-Galery-Controller-destroy', 'Allow admin on destroy in controller Galery Controller', 'GaleryController', 'destroy', 'website', 1, 'App\\Application\\Controllers\\Website\\GaleryController', '2019-03-07 18:14:31', '2019-03-07 18:14:31'),
	(362, 'users-websiteindex-GaleryController', 'App-Application-Admin-Galery-Controller-index', 'Allow admin on index in controller Galery Controller', 'GaleryController', 'index', 'website', 1, 'App\\Application\\Controllers\\Website\\GaleryController', '2019-03-07 18:14:31', '2019-03-07 18:14:31'),
	(363, 'users-websiteshow-GaleryController', 'App-Application-Admin-Galery-Controller-show', 'Allow admin on show in controller Galery Controller', 'GaleryController', 'show', 'website', 1, 'App\\Application\\Controllers\\Website\\GaleryController', '2019-03-07 18:14:31', '2019-03-07 18:14:31'),
	(364, 'users-websitestore-GaleryController', 'App-Application-Admin-Galery-Controller-store', 'Allow admin on store in controller Galery Controller', 'GaleryController', 'store', 'website', 1, 'App\\Application\\Controllers\\Website\\GaleryController', '2019-03-07 18:14:31', '2019-03-07 18:14:31'),
	(365, 'users-websiteupdate-GaleryController', 'App-Application-Admin-Galery-Controller-update', 'Allow admin on update in controller Galery Controller', 'GaleryController', 'update', 'website', 1, 'App\\Application\\Controllers\\Website\\GaleryController', '2019-03-07 18:14:31', '2019-03-07 18:14:31'),
	(366, 'users-websitegetById-GaleryController', 'App-Application-Admin-Galery-Controller-getById', 'Allow admin on getById in controller Galery Controller', 'GaleryController', 'getById', 'website', 1, 'App\\Application\\Controllers\\Website\\GaleryController', '2019-03-07 18:14:31', '2019-03-07 18:14:31'),
	(367, 'users-websitedestroy-GaleryController', 'App-Application-Admin-Galery-Controller-destroy', 'Allow admin on destroy in controller Galery Controller', 'GaleryController', 'destroy', 'website', 1, 'App\\Application\\Controllers\\Website\\GaleryController', '2019-03-07 18:14:31', '2019-03-07 18:14:31');
/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;

-- Listage de la structure de la table cam-souk-akhras-v2. permission_group
DROP TABLE IF EXISTS `permission_group`;
CREATE TABLE IF NOT EXISTS `permission_group` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `permission_id` int(10) unsigned NOT NULL,
  `group_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `permission_group_permission_id_foreign` (`permission_id`),
  KEY `permission_group_group_id_foreign` (`group_id`),
  CONSTRAINT `permission_group_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE,
  CONSTRAINT `permission_group_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=367 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table cam-souk-akhras-v2.permission_group : ~288 rows (environ)
/*!40000 ALTER TABLE `permission_group` DISABLE KEYS */;
INSERT INTO `permission_group` (`id`, `permission_id`, `group_id`) VALUES
	(1, 1, 1),
	(2, 2, 1),
	(3, 3, 1),
	(4, 4, 1),
	(5, 5, 1),
	(6, 6, 1),
	(7, 7, 1),
	(8, 8, 1),
	(9, 9, 1),
	(10, 10, 1),
	(11, 11, 1),
	(12, 12, 1),
	(13, 13, 1),
	(14, 14, 1),
	(15, 15, 1),
	(16, 16, 1),
	(17, 17, 1),
	(18, 18, 1),
	(19, 19, 1),
	(20, 20, 1),
	(21, 21, 1),
	(22, 22, 1),
	(23, 23, 1),
	(24, 24, 1),
	(25, 25, 1),
	(26, 26, 1),
	(27, 27, 1),
	(28, 28, 1),
	(29, 29, 1),
	(30, 30, 1),
	(31, 31, 1),
	(32, 32, 1),
	(33, 33, 1),
	(34, 34, 1),
	(35, 35, 1),
	(36, 36, 1),
	(37, 37, 1),
	(38, 38, 1),
	(39, 39, 1),
	(40, 40, 1),
	(41, 41, 1),
	(42, 42, 1),
	(43, 43, 1),
	(44, 44, 1),
	(45, 45, 1),
	(46, 46, 1),
	(47, 47, 1),
	(48, 48, 1),
	(49, 49, 1),
	(50, 50, 1),
	(51, 51, 1),
	(52, 52, 1),
	(53, 53, 1),
	(54, 54, 1),
	(55, 55, 1),
	(56, 56, 1),
	(57, 57, 1),
	(58, 58, 1),
	(59, 59, 1),
	(60, 60, 1),
	(61, 61, 1),
	(62, 62, 1),
	(63, 63, 1),
	(64, 64, 1),
	(65, 65, 1),
	(66, 66, 1),
	(67, 67, 1),
	(68, 68, 1),
	(69, 69, 1),
	(70, 70, 1),
	(71, 71, 1),
	(72, 72, 1),
	(73, 73, 1),
	(74, 74, 1),
	(75, 75, 1),
	(76, 76, 1),
	(77, 77, 1),
	(78, 78, 1),
	(79, 79, 1),
	(80, 80, 1),
	(81, 81, 1),
	(82, 82, 1),
	(83, 83, 1),
	(84, 84, 1),
	(85, 85, 1),
	(86, 86, 1),
	(87, 87, 1),
	(88, 88, 1),
	(89, 89, 1),
	(90, 90, 1),
	(91, 91, 1),
	(92, 92, 1),
	(93, 93, 1),
	(94, 94, 1),
	(95, 95, 1),
	(96, 96, 1),
	(97, 97, 1),
	(98, 98, 1),
	(99, 99, 1),
	(100, 100, 1),
	(101, 101, 1),
	(102, 102, 1),
	(103, 103, 1),
	(104, 104, 1),
	(105, 105, 1),
	(106, 106, 1),
	(107, 107, 1),
	(108, 108, 1),
	(109, 109, 1),
	(110, 110, 1),
	(111, 111, 1),
	(112, 112, 1),
	(113, 113, 1),
	(114, 114, 1),
	(115, 115, 1),
	(116, 116, 1),
	(117, 117, 1),
	(118, 118, 1),
	(119, 119, 1),
	(120, 120, 1),
	(121, 121, 1),
	(122, 122, 1),
	(123, 123, 2),
	(124, 124, 2),
	(125, 125, 2),
	(126, 126, 2),
	(127, 127, 2),
	(128, 128, 2),
	(129, 129, 2),
	(130, 130, 2),
	(131, 131, 2),
	(132, 132, 2),
	(133, 133, 2),
	(134, 134, 2),
	(135, 135, 2),
	(136, 136, 2),
	(137, 137, 2),
	(214, 214, 1),
	(215, 215, 1),
	(216, 216, 1),
	(217, 217, 1),
	(218, 218, 1),
	(219, 219, 1),
	(220, 220, 1),
	(222, 222, 1),
	(223, 223, 1),
	(224, 224, 1),
	(225, 225, 1),
	(226, 226, 1),
	(228, 228, 2),
	(229, 229, 2),
	(230, 230, 2),
	(231, 231, 2),
	(232, 232, 2),
	(233, 233, 1),
	(234, 234, 1),
	(235, 235, 1),
	(236, 236, 1),
	(237, 237, 1),
	(238, 238, 1),
	(239, 239, 1),
	(240, 240, 1),
	(241, 241, 1),
	(242, 242, 1),
	(243, 243, 1),
	(244, 244, 1),
	(245, 245, 1),
	(246, 246, 2),
	(247, 247, 2),
	(248, 248, 2),
	(249, 249, 2),
	(250, 250, 2),
	(251, 251, 2),
	(252, 221, 1),
	(253, 254, 1),
	(254, 255, 1),
	(255, 256, 1),
	(256, 257, 1),
	(257, 258, 1),
	(258, 259, 1),
	(259, 260, 1),
	(260, 261, 1),
	(261, 262, 1),
	(262, 263, 1),
	(263, 264, 1),
	(264, 265, 1),
	(265, 266, 1),
	(266, 267, 2),
	(267, 268, 2),
	(268, 269, 2),
	(269, 270, 2),
	(270, 271, 2),
	(271, 272, 2),
	(272, 273, 1),
	(273, 274, 1),
	(274, 275, 1),
	(275, 276, 1),
	(276, 277, 1),
	(277, 278, 1),
	(278, 279, 1),
	(279, 280, 1),
	(280, 281, 1),
	(281, 282, 1),
	(282, 283, 1),
	(283, 284, 1),
	(284, 285, 1),
	(285, 286, 2),
	(286, 287, 2),
	(287, 288, 2),
	(288, 289, 2),
	(289, 290, 2),
	(290, 291, 2),
	(291, 292, 1),
	(292, 293, 1),
	(293, 294, 1),
	(294, 295, 1),
	(295, 296, 1),
	(296, 297, 1),
	(297, 298, 1),
	(298, 299, 1),
	(299, 300, 1),
	(300, 301, 1),
	(301, 302, 1),
	(302, 303, 1),
	(303, 304, 1),
	(304, 305, 2),
	(305, 306, 2),
	(306, 307, 2),
	(307, 308, 2),
	(308, 309, 2),
	(309, 310, 2),
	(310, 311, 1),
	(311, 312, 1),
	(312, 313, 1),
	(313, 314, 1),
	(314, 315, 1),
	(315, 316, 1),
	(316, 317, 1),
	(317, 318, 1),
	(318, 319, 1),
	(319, 320, 1),
	(320, 321, 1),
	(321, 322, 1),
	(322, 323, 1),
	(323, 324, 2),
	(324, 325, 2),
	(325, 326, 2),
	(326, 327, 2),
	(327, 328, 2),
	(328, 329, 2),
	(329, 330, 1),
	(330, 331, 1),
	(331, 332, 1),
	(332, 333, 1),
	(333, 334, 1),
	(334, 335, 1),
	(335, 336, 1),
	(336, 337, 1),
	(337, 338, 1),
	(338, 339, 1),
	(339, 340, 1),
	(340, 341, 1),
	(341, 342, 1),
	(342, 343, 2),
	(343, 344, 2),
	(344, 345, 2),
	(345, 346, 2),
	(346, 347, 2),
	(347, 348, 2),
	(348, 349, 1),
	(349, 350, 1),
	(350, 351, 1),
	(351, 352, 1),
	(352, 353, 1),
	(353, 354, 1),
	(354, 355, 1),
	(355, 356, 1),
	(356, 357, 1),
	(357, 358, 1),
	(358, 359, 1),
	(359, 360, 1),
	(360, 361, 1),
	(361, 362, 2),
	(362, 363, 2),
	(363, 364, 2),
	(364, 365, 2),
	(365, 366, 2),
	(366, 367, 2);
/*!40000 ALTER TABLE `permission_group` ENABLE KEYS */;

-- Listage de la structure de la table cam-souk-akhras-v2. permission_role
DROP TABLE IF EXISTS `permission_role`;
CREATE TABLE IF NOT EXISTS `permission_role` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `permission_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `permission_role_role_id_foreign` (`role_id`),
  KEY `permission_role_permission_id_index` (`permission_id`),
  CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table cam-souk-akhras-v2.permission_role : ~0 rows (environ)
/*!40000 ALTER TABLE `permission_role` DISABLE KEYS */;
/*!40000 ALTER TABLE `permission_role` ENABLE KEYS */;

-- Listage de la structure de la table cam-souk-akhras-v2. permission_user
DROP TABLE IF EXISTS `permission_user`;
CREATE TABLE IF NOT EXISTS `permission_user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `permission_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `permission_user_permission_id_foreign` (`permission_id`),
  KEY `permission_user_user_id_foreign` (`user_id`),
  CONSTRAINT `permission_user_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `permission_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table cam-souk-akhras-v2.permission_user : ~0 rows (environ)
/*!40000 ALTER TABLE `permission_user` DISABLE KEYS */;
/*!40000 ALTER TABLE `permission_user` ENABLE KEYS */;

-- Listage de la structure de la table cam-souk-akhras-v2. relations
DROP TABLE IF EXISTS `relations`;
CREATE TABLE IF NOT EXISTS `relations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` text COLLATE utf8mb4_unicode_ci,
  `command` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `p` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `f` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `t` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table cam-souk-akhras-v2.relations : ~0 rows (environ)
/*!40000 ALTER TABLE `relations` DISABLE KEYS */;
/*!40000 ALTER TABLE `relations` ENABLE KEYS */;

-- Listage de la structure de la table cam-souk-akhras-v2. request
DROP TABLE IF EXISTS `request`;
CREATE TABLE IF NOT EXISTS `request` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `artisan_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `section_id` int(10) unsigned NOT NULL,
  `local_id` int(10) unsigned NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `request_artisan_id_foreign` (`artisan_id`),
  KEY `request_local_id_foreign` (`local_id`),
  KEY `request_section_id_foreign` (`section_id`),
  CONSTRAINT `request_artisan_id_foreign` FOREIGN KEY (`artisan_id`) REFERENCES `artisan` (`numero_artisan`) ON DELETE CASCADE,
  CONSTRAINT `request_local_id_foreign` FOREIGN KEY (`local_id`) REFERENCES `local` (`id`) ON DELETE CASCADE,
  CONSTRAINT `request_section_id_foreign` FOREIGN KEY (`section_id`) REFERENCES `section` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table cam-souk-akhras-v2.request : ~4 rows (environ)
/*!40000 ALTER TABLE `request` DISABLE KEYS */;
INSERT INTO `request` (`id`, `artisan_id`, `section_id`, `local_id`, `status`, `created_at`, `updated_at`) VALUES
	(4, 'A001', 1, 1, NULL, '2019-03-07 11:30:07', '2019-03-07 11:30:07'),
	(5, 'A001', 1, 1, NULL, '2019-03-07 14:43:54', '2019-03-07 14:43:54'),
	(10, 'A001', 1, 2, NULL, '2019-03-07 15:58:51', '2019-03-07 15:58:51'),
	(11, 'A001', 2, 1, NULL, '2019-03-07 16:00:50', '2019-03-07 16:00:50');
/*!40000 ALTER TABLE `request` ENABLE KEYS */;

-- Listage de la structure de la table cam-souk-akhras-v2. roles
DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table cam-souk-akhras-v2.roles : ~0 rows (environ)
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;

-- Listage de la structure de la table cam-souk-akhras-v2. role_user
DROP TABLE IF EXISTS `role_user`;
CREATE TABLE IF NOT EXISTS `role_user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `role_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `role_user_role_id_foreign` (`role_id`),
  KEY `role_user_user_id_foreign` (`user_id`),
  CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table cam-souk-akhras-v2.role_user : ~0 rows (environ)
/*!40000 ALTER TABLE `role_user` DISABLE KEYS */;
/*!40000 ALTER TABLE `role_user` ENABLE KEYS */;

-- Listage de la structure de la table cam-souk-akhras-v2. section
DROP TABLE IF EXISTS `section`;
CREATE TABLE IF NOT EXISTS `section` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `section_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table cam-souk-akhras-v2.section : ~2 rows (environ)
/*!40000 ALTER TABLE `section` DISABLE KEYS */;
INSERT INTO `section` (`id`, `name`, `description`, `image`, `created_at`, `updated_at`) VALUES
	(1, '{"en":"Section 01","ar":"Section 01"}', '{"en":"<p>Section 01 Description0.....<\\/p>","ar":null}', '52415_1551905406.jpg', '2019-03-06 20:50:06', '2019-03-06 20:50:06'),
	(2, '{"en":"Section 02","ar":"Section 02"}', '{"en":"<p>Section 02 ....<\\/p>","ar":null}', '53768_1551918556.jpg', '2019-03-07 00:29:17', '2019-03-07 00:29:17');
/*!40000 ALTER TABLE `section` ENABLE KEYS */;

-- Listage de la structure de la table cam-souk-akhras-v2. setting
DROP TABLE IF EXISTS `setting`;
CREATE TABLE IF NOT EXISTS `setting` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body_setting` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table cam-souk-akhras-v2.setting : ~2 rows (environ)
/*!40000 ALTER TABLE `setting` DISABLE KEYS */;
INSERT INTO `setting` (`id`, `name`, `type`, `body_setting`, `created_at`, `updated_at`) VALUES
	(1, 'siteTitle', 'text', 'LaraFlat', NULL, NULL),
	(2, 'GOOGLE_API_MAP', 'text', '', NULL, NULL);
/*!40000 ALTER TABLE `setting` ENABLE KEYS */;

-- Listage de la structure de la table cam-souk-akhras-v2. users
DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `group_id` int(11) NOT NULL,
  `api_token` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  UNIQUE KEY `users_api_token_unique` (`api_token`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table cam-souk-akhras-v2.users : ~1 rows (environ)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `password`, `group_id`, `api_token`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'admin', 'admin@gmail.com', '$2y$10$L73fIoyiWTHYsJX0iADeaeO7j6qtpYiHgv6ZqKvR7Z3PKy.3UjioW', 1, '6eHhqtVbg0jrHTzu9SksHpbvysuElRsQlXpo3Gz1jnNJMDkIrs6UejkHIkd7', 'cV1849bHAyHj6KilNUWVARKiLuUu4GNBoi9dMVywyydHFXhC4cRouX1zfKmk', '2019-03-05 19:54:27', '2019-03-05 19:54:27');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
