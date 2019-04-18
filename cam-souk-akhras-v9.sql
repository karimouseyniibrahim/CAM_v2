-- --------------------------------------------------------
-- Hôte :                        localhost
-- Version du serveur:           5.7.24 - MySQL Community Server (GPL)
-- SE du serveur:                Win64
-- HeidiSQL Version:             9.5.0.5332
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Listage de la structure de la base pour cam-souk-akhras-v6
CREATE DATABASE IF NOT EXISTS `cam-souk-akhras-v6` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `cam-souk-akhras-v6`;

-- Listage de la structure de la table cam-souk-akhras-v6. items
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
) ENGINE=InnoDB AUTO_INCREMENT=91 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table cam-souk-akhras-v6.items : ~65 rows (environ)
DELETE FROM `items`;
/*!40000 ALTER TABLE `items` DISABLE KEYS */;
INSERT INTO `items` (`id`, `name`, `link`, `type`, `icon`, `parent_id`, `order`, `controller_path`, `menu_id`, `created_at`, `updated_at`) VALUES
	(1, '{"ar":" الرئيسية ","en":"Home"}', '/admin/home', '', '<i class="material-icons">home</i>', 0, 0, '["App\\\\Application\\\\Controllers\\\\Admin\\\\HomeController"]', 1, NULL, '2019-03-24 17:42:14'),
	(3, '{"ar":"  المستخدمين ","en":"User"}', '#', '', '<i class="material-icons">account_circle</i>', 0, 2, '["App\\\\Application\\\\Controllers\\\\Admin\\\\UserController","App\\\\Application\\\\Controllers\\\\Admin\\\\GroupController","App\\\\Application\\\\Controllers\\\\Admin\\\\RoleController","App\\\\Application\\\\Controllers\\\\Admin\\\\Development\\\\PermissionController"]', 1, NULL, '2019-03-24 17:42:15'),
	(4, '{"en":"Setting","fr":null,"ar":"اعدادت الموقع"}', '#', 'self', '<i class="material-icons">insert_emoticon</i>', 0, 3, '["App\\\\Application\\\\Controllers\\\\Admin\\\\SettingController","App\\\\Application\\\\Controllers\\\\Admin\\\\MenuController"]', 1, NULL, '2019-03-26 15:56:27'),
	(5, '{"ar":" الصفحات ","en":"Page"}', '/admin/page', '', '<i class="material-icons">find_in_page</i>', 55, 7, '["App\\\\Application\\\\Controllers\\\\Admin\\\\PageController"]', 1, NULL, '2019-03-24 17:42:14'),
	(6, '{"ar":" ادارة الملفات ","en":"File Manager"}', '/admin/file-manager', '', '<i class="material-icons">folder</i>', 4, 1, '["App\\\\Application\\\\Controllers\\\\Admin\\\\HomeController"]', 1, NULL, '2019-03-24 17:42:15'),
	(7, '{"ar":" سجل البينات ","en":"Logs"}', '/admin/log', '', '<i class="material-icons">info</i>', 4, 3, '["App\\\\Application\\\\Controllers\\\\Admin\\\\LogController"]', 1, NULL, '2019-03-24 17:42:16'),
	(8, '{"ar":" الاحصائيات ","en":"Statistics"}', '/admin/links', '', '<i class="material-icons">insert_chart</i>', 4, 6, '["App\\\\Application\\\\Controllers\\\\Admin\\\\UserController"]', 1, NULL, '2019-03-24 17:42:16'),
	(9, '{"ar":" اتصل بنا ","en":"Contact Us"}', '/admin/contact', '', '<i class="material-icons">perm_contact_calendar</i>', 55, 1, '["App\\\\Application\\\\Controllers\\\\Admin\\\\ContactController"]', 1, NULL, '2019-03-24 17:42:14'),
	(10, '{"ar":" المستخدمين ","en":"Users"}', '/admin/user', '', NULL, 3, 0, '["App\\\\Application\\\\Controllers\\\\Admin\\\\UserController"]', 1, NULL, '2019-03-24 17:42:15'),
	(11, '{"ar":" جروبات الاعضاء ","en":"Groups"}', '/admin/group', '', NULL, 3, 1, '["App\\\\Application\\\\Controllers\\\\Admin\\\\GroupController"]', 1, NULL, '2019-03-24 17:42:15'),
	(12, '{"ar":" قوانين الاستخدام ","en":"Roles"}', '/admin/role', '', NULL, 3, 2, '["App\\\\Application\\\\Controllers\\\\Admin\\\\RoleController"]', 1, NULL, '2019-03-24 17:42:15'),
	(13, '{"ar":" التصاريح ","en":"Permissions"}', '/admin/permission', '', NULL, 3, 3, '["App\\\\Application\\\\Controllers\\\\Admin\\\\Development\\\\PermissionController"]', 1, NULL, '2019-03-24 17:42:15'),
	(14, '{"en":"Icons","ar":"ايقونات الموقع"}', '/admin/icons', 'self', '<i class="material-icons"> explore </i>', 4, 2, '["App\\\\Application\\\\Controllers\\\\Admin\\\\HomeController"]', 1, NULL, '2019-03-24 18:23:05'),
	(15, '{"en":"Docs","ar":"التوثيق"}', '/admin/docs', 'self', '<i class="material-icons"> description </i>', 4, 0, '["App\\\\Application\\\\Controllers\\\\Admin\\\\HomeController"]', 1, NULL, '2019-03-24 18:23:23'),
	(16, '{"en":"Settings","ar":"اعدادت الموقع"}', '/admin/setting', 'self', '<i class="material-icons"> settings_input_component </i>', 4, 5, '["App\\\\Application\\\\Controllers\\\\Admin\\\\SettingController"]', 1, NULL, '2019-03-24 18:22:30'),
	(17, '{"en":"Menu","ar":"القوائم"}', '/admin/menu', 'self', '<i class="material-icons"> view_list </i>', 4, 4, '["App\\\\Application\\\\Controllers\\\\Admin\\\\MenuController"]', 1, NULL, '2019-03-24 18:22:08'),
	(18, '{"ar":" لارافلات ","en":"laraFalt"}', 'https://laraflat.com/', 'blank', NULL, 0, 1, '', 2, NULL, NULL),
	(19, '{"ar":" خدمات ويب ","en":"5dmat-web"}', 'https://5dmat-web.com/', 'blank', NULL, 0, 2, '', 2, NULL, NULL),
	(20, '{"ar":" ستريم لاب ","en":"StreamLab"}', 'https://streamlab.io/', 'blank', NULL, 0, 3, '', 2, NULL, NULL),
	(21, '{"ar":" تطوير  ","en":"Develop"}', '#', '', '<i class="material-icons">settings</i>', 0, 4, '["App\\\\Application\\\\Controllers\\\\Admin\\\\RelationController","App\\\\Application\\\\Controllers\\\\Admin\\\\TranslationController","App\\\\Application\\\\Controllers\\\\Admin\\\\CommandsController","App\\\\Application\\\\Controllers\\\\Admin\\\\Development\\\\CustomPermissionsController"]', 1, NULL, '2019-03-24 17:42:16'),
	(22, '{"ar":" الاوامر ","en":"Commands"}', '/admin/commands', '', NULL, 21, 0, '["App\\\\Application\\\\Controllers\\\\Admin\\\\CommandsController"]', 1, NULL, '2019-03-24 17:42:16'),
	(23, '{"ar":"  العلاقات ","en":"Relation"}', '/admin/relation', '', NULL, 21, 1, '["App\\\\Application\\\\Controllers\\\\Admin\\\\RelationController"]', 1, NULL, '2019-03-24 17:42:16'),
	(24, '{"ar":" الترجمة  ","en":" Translation "}', '/admin/translation', '', NULL, 21, 2, '["App\\\\Application\\\\Controllers\\\\Admin\\\\TranslationController"]', 1, NULL, '2019-03-24 17:42:16'),
	(25, '{"ar":"  تخصيص التصريحات  ","en":" Custom Permissions "}', '/admin/custom-permissions', '', NULL, 21, 3, '["App\\\\Application\\\\Controllers\\\\Admin\\\\Development\\\\CustomPermissionsController"]', 1, NULL, '2019-03-24 17:42:17'),
	(26, '{"ar":" اوامر لارافيل  ","en":" Laravel Commands  "}', 'admin/laravel/commands', '', NULL, 21, 4, '["App\\\\Application\\\\Controllers\\\\Admin\\\\CommandsController"]', 1, NULL, '2019-03-24 17:42:17'),
	(27, '{"ar":"  التحكم في قواعد البينات  ","en":" DataBase Manager  "}', '/adminer.php', 'blank', NULL, 21, 5, '["App\\\\Application\\\\Controllers\\\\Admin\\\\CommandsController"]', 1, NULL, '2019-03-24 17:42:17'),
	(28, '{"ar":" المظهر  ","en":"Theme"}', '#', '', '<i class="material-icons">color_lens</i>', 0, 5, '["App\\\\Application\\\\Controllers\\\\Admin\\\\Themes\\\\ThemeController"]', 1, NULL, '2019-03-24 17:42:17'),
	(29, '{"ar":" لوحة تحكم المدير  ","en":"Admin"}', 'admin/theme/admin', '', '', 28, 0, '["App\\\\Application\\\\Controllers\\\\Admin\\\\Themes\\\\ThemeController"]', 1, NULL, '2019-03-24 17:42:17'),
	(30, '{"ar":" الموقع ","en":"Website"}', 'admin/theme/website', '', '', 28, 1, '["App\\\\Application\\\\Controllers\\\\Admin\\\\Themes\\\\ThemeController"]', 1, NULL, '2019-03-24 17:42:17'),
	(31, '{"ar":" رئيسية الموقع ","en":"Home Widget"}', 'admin/theme/homepage', '', '', 28, 2, '["App\\\\Application\\\\Controllers\\\\Admin\\\\Themes\\\\ThemeController"]', 1, NULL, '2019-03-24 17:42:17'),
	(32, '{"ar":" السيد بار ","en":"Sidebar Widget"}', 'admin/theme/sidebar', '', '', 28, 3, '["App\\\\Application\\\\Controllers\\\\Admin\\\\Themes\\\\ThemeController"]', 1, NULL, '2019-03-24 17:42:17'),
	(33, '{"ar":"  رفع \\/ استخراج المديولات ","en":" Export \\\\ Import Models  "}', 'admin/exportImport', 'blank', NULL, 21, 6, '["App\\\\Application\\\\Controllers\\\\Admin\\\\CommandsController"]', 1, NULL, '2019-03-24 17:42:17'),
	(34, '{"en":"Home","fr":null,"ar":"الرئيسية"}', '/', 'self', NULL, 0, 4, '["App\\\\Application\\\\Controllers\\\\Website\\\\HomeController"]', 3, '2019-03-05 20:40:13', '2019-04-13 19:34:31'),
	(43, '{"en":"Formation","ar":"Formation"}', '/admin/formation', 'self', '<i class="material-icons"> work </i>', 55, 2, '["App\\\\Application\\\\Controllers\\\\Admin\\\\FormationController"]', 1, '2019-03-06 14:35:29', '2019-03-24 18:15:08'),
	(44, '{"en":"Formation","ar":"Formation"}', 'formation', 'self', NULL, 0, 6, '["App\\\\Application\\\\Controllers\\\\Website\\\\FormationController"]', 3, '2019-03-06 14:35:29', '2019-04-13 19:34:31'),
	(45, '{"en":"Inscription","ar":"Inscription"}', '/admin/inscription', 'self', '<i class="material-icons"> receipt </i>', 55, 3, '["App\\\\Application\\\\Controllers\\\\Admin\\\\InscriptionController"]', 1, '2019-03-06 15:09:03', '2019-03-24 18:14:07'),
	(47, '{"en":"Section","ar":"Section"}', '/admin/section', 'self', '<i class="material-icons"> view_carousel </i>', 55, 9, '["App\\\\Application\\\\Controllers\\\\Admin\\\\SectionController"]', 1, '2019-03-06 20:38:36', '2019-03-24 18:16:06'),
	(48, '{"en":"Sites","ar":"Sites"}', 'section', 'self', NULL, 0, 7, '["App\\\\Application\\\\Controllers\\\\Admin\\\\SectionController"]', 3, '2019-03-06 20:38:36', '2019-04-13 19:34:31'),
	(49, '{"en":"Local","ar":"Local"}', '/admin/local', 'self', '<i class="material-icons"> view_array </i>', 55, 4, '["App\\\\Application\\\\Controllers\\\\Admin\\\\LocalController"]', 1, '2019-03-06 20:53:21', '2019-03-24 18:16:27'),
	(51, '{"en":"Artisan","ar":"Artisan"}', '/admin/artisan', 'self', '<i class="material-icons"> people_outline </i>', 55, 0, '["App\\\\Application\\\\Controllers\\\\Admin\\\\ArtisanController"]', 1, '2019-03-06 20:55:33', '2019-03-24 18:19:25'),
	(53, '{"en":"Request","ar":"Request"}', '/admin/request', 'self', '<i class="material-icons"> subscriptions </i>', 55, 8, '["App\\\\Application\\\\Controllers\\\\Admin\\\\RequestController"]', 1, '2019-03-06 23:20:14', '2019-03-24 18:15:43'),
	(55, '{"en":"Management","ar":"Management"}', '/admin/management', 'self', '<i class="material-icons">control_point</i>', 0, 1, '["App\\\\Application\\\\Controllers\\\\Admin\\\\FormationController"]', 1, '2019-03-07 16:04:52', '2019-03-24 17:42:14'),
	(56, '{"en":"News","ar":"News"}', '/admin/news', '', '<i class="material-icons">control_point</i>', 55, 6, '["App\\\\Application\\\\Controllers\\\\Admin\\\\NewsController"]', 1, '2019-03-07 16:14:36', '2019-03-24 17:42:14'),
	(60, '{"en":"Medias","ar":"Medias"}', '/admin/medias', 'self', '<i class="material-icons"> perm_media </i>', 55, 5, '["App\\\\Application\\\\Controllers\\\\Admin\\\\MediasController"]', 1, '2019-03-08 13:00:30', '2019-03-24 18:13:28'),
	(63, '{"en":"Gallery","ar":"Gallery"}', '/galery', 'self', NULL, 0, 1, '["App\\\\Application\\\\Controllers\\\\Website\\\\MediasController"]', 4, '2019-03-25 09:39:04', '2019-03-25 09:42:16'),
	(64, '{"en":"News","ar":"News"}', 'news', 'self', NULL, 0, 0, '["App\\\\Application\\\\Controllers\\\\Website\\\\NewsController"]', 4, '2019-03-25 09:40:03', '2019-03-25 09:42:16'),
	(66, '{"en":"About Us","ar":"About Us"}', 'page/2/view', 'self', NULL, 0, 3, '["App\\\\Application\\\\Controllers\\\\Website\\\\HomeController"]', 4, '2019-03-25 09:42:07', '2019-03-25 09:42:16'),
	(67, '{"en":"Nomenclature","ar":"Nomenclature"}', 'nomenclature', 'self', NULL, 0, 5, '["App\\\\Application\\\\Controllers\\\\Website\\\\MediasController"]', 3, '2019-03-25 09:44:17', '2019-04-13 19:34:31'),
	(68, '{"en":"Votre Cam","fr":"Votre Cam","ar":"Votre Cam"}', '/page/3/view', 'self', NULL, 0, 0, '["App\\\\Application\\\\Controllers\\\\Website\\\\PageController"]', 3, '2019-04-11 09:23:07', '2019-04-13 19:34:28'),
	(70, '{"en":"Créer","fr":"Créer","ar":"Créer"}', '/page', 'self', NULL, 0, 1, '["App\\\\Application\\\\Controllers\\\\Website\\\\PageController"]', 3, '2019-04-13 14:52:24', '2019-04-13 19:34:29'),
	(71, '{"en":"Gérer","fr":"Gérer","ar":"Gérer"}', '/page', 'self', NULL, 0, 2, '["App\\\\Application\\\\Controllers\\\\Website\\\\PageController"]', 3, '2019-04-13 14:53:13', '2019-04-13 19:34:30'),
	(72, '{"en":"Se Former","fr":"Se Former","ar":"Se Former"}', '/page', 'self', NULL, 0, 3, '["App\\\\Application\\\\Controllers\\\\Website\\\\PageController"]', 3, '2019-04-13 14:54:16', '2019-04-13 19:34:31'),
	(73, '{"en":"L\'artisanat","fr":"L\'artisanat","ar":"L\'artisanat"}', '/page', 'self', NULL, 68, 0, '["App\\\\Application\\\\Controllers\\\\Website\\\\PageController"]', 3, '2019-04-13 14:54:50', '2019-04-13 19:34:29'),
	(74, '{"en":"Partenariat","fr":"Partenariat","ar":"Partenariat"}', '/page', 'self', NULL, 68, 1, '["App\\\\Application\\\\Controllers\\\\Website\\\\PageController"]', 3, '2019-04-13 14:55:19', '2019-04-13 19:34:29'),
	(75, '{"en":"Nous contactez","fr":"Nous contactez","ar":"Nous contactez"}', '/page', 'self', NULL, 0, 8, '["App\\\\Application\\\\Controllers\\\\Website\\\\PageController"]', 3, '2019-04-13 14:55:50', '2019-04-13 19:34:31'),
	(76, '{"en":"Nos missions","fr":"Nos missions","ar":"Nos missions"}', '/page', 'self', NULL, 73, 0, '["App\\\\Application\\\\Controllers\\\\Website\\\\PageController"]', 3, '2019-04-13 14:56:37', '2019-04-13 19:34:29'),
	(77, '{"en":"L\'observatoire de l\'artisanat","fr":"L\'observatoire de l\'artisanat","ar":"L\'observatoire de l\'artisanat"}', '/page', 'self', NULL, 73, 1, '["App\\\\Application\\\\Controllers\\\\Website\\\\PageController"]', 3, '2019-04-13 14:57:12', '2019-04-13 19:34:29'),
	(78, '{"en":"Les partenaires","fr":"Les partenaires","ar":"Les partenaires"}', '/page', 'self', NULL, 74, 0, '["App\\\\Application\\\\Controllers\\\\Website\\\\PageController"]', 3, '2019-04-13 14:57:41', '2019-04-13 19:34:29'),
	(79, '{"en":"Comment devenir partenaire ?","fr":"Comment devenir partenaire ?","ar":"Comment devenir partenaire ?"}', '/page', 'self', NULL, 74, 1, '["App\\\\Application\\\\Controllers\\\\Website\\\\PageController"]', 3, '2019-04-13 14:58:17', '2019-04-13 19:34:29'),
	(80, '{"en":"Créer son entreprise","fr":"Créer son entreprise","ar":"Créer son entreprise"}', '/page', 'self', NULL, 70, 0, '["App\\\\Application\\\\Controllers\\\\Website\\\\PageController"]', 3, '2019-04-13 15:02:47', '2019-04-13 19:34:30'),
	(81, '{"en":"Déclarer son entreprise","fr":"Déclarer son entreprise","ar":"Déclarer son entreprise"}', '/page', 'self', NULL, 70, 1, '["App\\\\Application\\\\Controllers\\\\Website\\\\PageController"]', 3, '2019-04-13 15:03:18', '2019-04-13 19:34:30'),
	(82, '{"en":"Gérer au quotidien","fr":"Gérer au quotidien","ar":"Gérer au quotidien"}', '/page', 'self', NULL, 71, 0, '["App\\\\Application\\\\Controllers\\\\Website\\\\PageController"]', 3, '2019-04-13 15:03:53', '2019-04-13 19:34:30'),
	(83, '{"en":"Développer son activité","fr":"Développer son activité","ar":"Développer son activité"}', '/page', 'self', NULL, 71, 1, '["App\\\\Application\\\\Controllers\\\\Website\\\\PageController"]', 3, '2019-04-13 15:04:24', '2019-04-13 19:34:30'),
	(84, '{"en":"Formation par l\'apprentissage","fr":"Formation par l\'apprentissage","ar":"Formation par l\'apprentissage"}', '/page', 'self', NULL, 72, 0, '["App\\\\Application\\\\Controllers\\\\Website\\\\PageController"]', 3, '2019-04-13 15:04:56', '2019-04-13 19:34:31'),
	(85, '{"en":"Formation Continue","fr":"Formation Continue","ar":"Formation Continue"}', '/page', 'self', NULL, 72, 1, '["App\\\\Application\\\\Controllers\\\\Website\\\\PageController"]', 3, '2019-04-13 15:05:24', '2019-04-13 19:34:31'),
	(86, '{"en":"Piloter la gestion de son activité","fr":"Piloter la gestion de son activité","ar":"Piloter la gestion de son activité"}', '/page', 'self', NULL, 71, 4, '["App\\\\Application\\\\Controllers\\\\Website\\\\PageController"]', 3, '2019-04-13 15:06:05', '2019-04-13 19:34:31'),
	(87, '{"en":"Former un apprenti","fr":"Former un apprenti","ar":"Former un apprenti"}', '/page', 'self', NULL, 71, 2, '["App\\\\Application\\\\Controllers\\\\Website\\\\PageController"]', 3, '2019-04-13 15:06:32', '2019-04-13 19:34:30'),
	(88, '{"en":"Booster son developpement commercial","fr":"Booster son developpement commercial","ar":"Booster son developpement commercial"}', '/page', 'self', NULL, 71, 3, '["App\\\\Application\\\\Controllers\\\\Website\\\\PageController"]', 3, '2019-04-13 15:07:06', '2019-04-13 19:34:30'),
	(89, '{"en":"Qu\'est-ce que l\'apprentissage","fr":"Qu\'est-ce que l\'apprentissage","ar":"Qu\'est-ce que l\'apprentissage"}', '/page', 'self', NULL, 84, 0, '["App\\\\Application\\\\Controllers\\\\Website\\\\PageController"]', 3, '2019-04-13 15:08:10', '2019-04-13 19:34:31'),
	(90, '{"en":"Qu\'est-ce que la formation continue ?","fr":"Qu\'est-ce que la formation continue ?","ar":"Qu\'est-ce que la formation continue ?"}', '/page', 'self', NULL, 85, 0, '["App\\\\Application\\\\Controllers\\\\Website\\\\PageController"]', 3, '2019-04-13 15:08:41', '2019-04-13 19:34:31');
/*!40000 ALTER TABLE `items` ENABLE KEYS */;

-- Listage de la structure de la table cam-souk-akhras-v6. menu
CREATE TABLE IF NOT EXISTS `menu` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table cam-souk-akhras-v6.menu : ~5 rows (environ)
DELETE FROM `menu`;
/*!40000 ALTER TABLE `menu` DISABLE KEYS */;
INSERT INTO `menu` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(1, 'Admin', NULL, NULL),
	(2, 'Main', NULL, NULL),
	(3, 'Website', NULL, NULL),
	(4, 'Website Left', '2019-03-25 09:36:43', '2019-03-25 09:36:43'),
	(5, 'Website Links', '2019-03-25 09:58:33', '2019-03-25 09:58:33');
/*!40000 ALTER TABLE `menu` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
