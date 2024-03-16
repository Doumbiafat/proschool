-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 16 mars 2024 à 20:31
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `api4`
--

-- --------------------------------------------------------

--
-- Structure de la table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_admin` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `admins`
--

INSERT INTO `admins` (`id`, `id_admin`, `created_at`, `updated_at`) VALUES
(1, 13, '2024-03-08 17:53:09', '2024-03-08 17:53:09');

-- --------------------------------------------------------

--
-- Structure de la table `classes`
--

CREATE TABLE `classes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `libelle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `classes`
--

INSERT INTO `classes` (`id`, `libelle`, `created_at`, `updated_at`) VALUES
(1, 'IGL L1', '2024-03-10 19:44:46', '2024-03-10 19:44:46'),
(2, 'IGL L2', '2024-03-10 19:47:24', '2024-03-10 19:47:24'),
(3, 'IGL L3', '2024-03-14 13:27:05', '2024-03-14 13:27:05');

-- --------------------------------------------------------

--
-- Structure de la table `enseignants`
--

CREATE TABLE `enseignants` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_enseignant` bigint(20) UNSIGNED NOT NULL,
  `classe_id` bigint(20) UNSIGNED NOT NULL,
  `matiere` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `enseignants`
--

INSERT INTO `enseignants` (`id`, `id_enseignant`, `classe_id`, `matiere`, `created_at`, `updated_at`) VALUES
(1, 16, 2, 'math', '2024-03-10 21:25:20', '2024-03-10 21:25:20'),
(2, 20, 1, 'math', '2024-03-12 19:20:12', '2024-03-12 19:20:12'),
(4, 30, 1, 'anglais', '2024-03-16 15:28:23', '2024-03-16 15:28:23');

-- --------------------------------------------------------

--
-- Structure de la table `etudiants`
--

CREATE TABLE `etudiants` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_etudiant` bigint(20) UNSIGNED NOT NULL,
  `classe_id` bigint(20) UNSIGNED NOT NULL,
  `matricule` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `notes` double(8,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `etudiants`
--

INSERT INTO `etudiants` (`id`, `id_etudiant`, `classe_id`, `matricule`, `created_at`, `updated_at`, `notes`) VALUES
(2, 18, 1, '14035205J', '2024-03-11 10:04:02', '2024-03-15 12:22:54', 12.00),
(3, 19, 1, '14035206J', '2024-03-11 10:05:08', '2024-03-15 12:22:54', 13.00),
(4, 21, 2, '14035207J', '2024-03-12 20:32:28', '2024-03-12 20:32:28', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_03_06_144450_create_user_table', 2),
(6, '2024_03_08_161826_create_enseignants_table', 3),
(7, '2024_03_08_170931_create_etudiants_table', 4),
(8, '2024_03_08_173910_create_admins_table', 5),
(9, '2024_03_09_203548_create_school_years_table', 6),
(10, '2024_03_10_192626_create_classes_table', 7),
(11, '2024_03_10_211719_create_enseignants_table', 8),
(12, '2024_03_10_211955_create_etudiants_table', 9),
(13, '2024_03_12_191335_add_notes_to_etudiants_table', 10),
(14, '2024_03_16_085130_create_notes_table', 11);

-- --------------------------------------------------------

--
-- Structure de la table `notes`
--

CREATE TABLE `notes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `etudiant_id` bigint(20) UNSIGNED NOT NULL,
  `math` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`math`)),
  `physique` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`physique`)),
  `anglais` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`anglais`)),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `notes`
--

INSERT INTO `notes` (`id`, `etudiant_id`, `math`, `physique`, `anglais`, `created_at`, `updated_at`) VALUES
(3, 2, '\"{\\\"math\\\":[\\\"10\\\",\\\"14\\\",\\\"9\\\"]}\"', NULL, '\"{\\\"anglais\\\":[\\\"10\\\",\\\"10\\\",\\\"9\\\"]}\"', '2024-03-16 15:24:14', '2024-03-16 15:44:00'),
(4, 3, '\"{\\\"math\\\":[\\\"10\\\",\\\"11\\\",\\\"5\\\"]}\"', NULL, '\"{\\\"anglais\\\":[\\\"7\\\",\\\"3\\\",\\\"5\\\"]}\"', '2024-03-16 15:24:14', '2024-03-16 15:44:00');

-- --------------------------------------------------------

--
-- Structure de la table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `personal_access_tokens`
--

INSERT INTO `personal_access_tokens` (`id`, `tokenable_type`, `tokenable_id`, `name`, `token`, `abilities`, `last_used_at`, `expires_at`, `created_at`, `updated_at`) VALUES
(38, 'App\\Models\\User', 15, 'auth_token', 'cde01cc3677cfa4afab87fd943d88c854c93bb904b28e880b1d279e41e7d18a6', '[\"*\"]', NULL, NULL, '2024-03-10 17:52:08', '2024-03-10 17:52:08'),
(178, 'App\\Models\\User', 20, 'auth_token', 'b33a98128a0664f9f4fcac80696255576d78bb806d9ebe73bdf7f4c2d2011baf', '[\"*\"]', NULL, NULL, '2024-03-16 15:43:42', '2024-03-16 15:43:42'),
(185, 'App\\Models\\User', 2, 'auth_token', '7236e8bdcf3e09f1d41d76badc4045917fe3261daf165ca45fd1e384ac0747e8', '[\"*\"]', NULL, NULL, '2024-03-16 17:57:11', '2024-03-16 17:57:11');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'etudiant',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `prenom`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Ouattara', 'emmanuel', 'oange866@gmail.com', NULL, '$2y$12$zeaB04Pyzb.RUH.5p62q3ehcFWB0IrhzuEksyuwfT4C/CuBRWI6r2', 'admin', NULL, '2024-03-07 16:21:42', '2024-03-07 16:21:42'),
(13, 'manu', 'ange', 'manu@gmail.com', NULL, '$2y$12$jrKA9wF/ABFlmkdw7jc47urtRqvjkTEvOcEjC6.6RT4FUB7XgKujS', 'admin', NULL, '2024-03-08 17:53:09', '2024-03-08 17:53:09'),
(16, 'yaoo', 'angeee', 'yaoo@gmail.com', NULL, '$2y$12$SkKdQVlPA0o.WwQZYP6EreQqMIR7D/uQLye.HfLnie2WsDIze6a8G', 'enseignant', NULL, '2024-03-10 21:25:19', '2024-03-10 21:25:19'),
(18, 'sidibe', 'aicha', 'sidibe@gmail.com', NULL, '$2y$12$u5JcUIykN1mecLwFsxi4COhKU4H7hVFDP5mv3.ypEesNqjwZhf/Pm', 'etudiant', NULL, '2024-03-11 10:04:01', '2024-03-11 10:04:01'),
(19, 'zehia', 'jean', 'zehia@gmail.com', NULL, '$2y$12$KoeJAWfk2tevJZslsgxvHeKx.Xyz6wT5FyeWKkzO6OKZy2hehMi.m', 'etudiant', NULL, '2024-03-11 10:05:08', '2024-03-11 10:05:08'),
(20, 'moi', 'moii', 'moi@gmail.com', NULL, '$2y$12$ln7.UcV.znzKNsPTUzucAerYa.dyhyIAHp2d5RiztMvyLnGqeyXl6', 'enseignant', NULL, '2024-03-12 19:20:12', '2024-03-12 19:20:12'),
(21, 'koffi', 'ange', 'koffi@gmail.com', NULL, '$2y$12$/COcUnDjq9gFf0JHz2CyuOPIytU0Vzav3secoxwUTUfrhLVkH6/by', 'etudiant', NULL, '2024-03-12 20:32:28', '2024-03-12 20:32:28'),
(30, 'doumbia', 'fatima', 'doumbia@gmail.com', NULL, '$2y$12$wfvKoJ8qHy1gdO7D3kR4I.mWF0nCxw7nsenXsCexM9o5FM4RNnFFS', 'enseignant', NULL, '2024-03-16 15:28:22', '2024-03-16 15:28:22');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `admins_id_admin_foreign` (`id_admin`);

--
-- Index pour la table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `enseignants`
--
ALTER TABLE `enseignants`
  ADD PRIMARY KEY (`id`),
  ADD KEY `enseignants_id_enseignant_foreign` (`id_enseignant`),
  ADD KEY `enseignants_classe_id_foreign` (`classe_id`);

--
-- Index pour la table `etudiants`
--
ALTER TABLE `etudiants`
  ADD PRIMARY KEY (`id`),
  ADD KEY `etudiants_id_etudiant_foreign` (`id_etudiant`),
  ADD KEY `etudiants_classe_id_foreign` (`classe_id`);

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notes_etudiant_id_foreign` (`etudiant_id`);

--
-- Index pour la table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Index pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `classes`
--
ALTER TABLE `classes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `enseignants`
--
ALTER TABLE `enseignants`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `etudiants`
--
ALTER TABLE `etudiants`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `notes`
--
ALTER TABLE `notes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=186;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `admins`
--
ALTER TABLE `admins`
  ADD CONSTRAINT `admins_id_admin_foreign` FOREIGN KEY (`id_admin`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `enseignants`
--
ALTER TABLE `enseignants`
  ADD CONSTRAINT `enseignants_classe_id_foreign` FOREIGN KEY (`classe_id`) REFERENCES `classes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `enseignants_id_enseignant_foreign` FOREIGN KEY (`id_enseignant`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `etudiants`
--
ALTER TABLE `etudiants`
  ADD CONSTRAINT `etudiants_classe_id_foreign` FOREIGN KEY (`classe_id`) REFERENCES `classes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `etudiants_id_etudiant_foreign` FOREIGN KEY (`id_etudiant`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `notes`
--
ALTER TABLE `notes`
  ADD CONSTRAINT `notes_etudiant_id_foreign` FOREIGN KEY (`etudiant_id`) REFERENCES `etudiants` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
