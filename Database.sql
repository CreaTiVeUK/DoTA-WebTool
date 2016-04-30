-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2016 at 05:48 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 7.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dota`
--

-- --------------------------------------------------------

--
-- Table structure for table `heroes`
--

CREATE TABLE `heroes` (
  `heroId` int(3) NOT NULL,
  `heroURI` varchar(50) NOT NULL,
  `heroName` varchar(50) NOT NULL,
  `heroPicSmall` varchar(50) NOT NULL,
  `heroPicHover` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `heroes`
--

INSERT INTO `heroes` (`heroId`, `heroURI`, `heroName`, `heroPicSmall`, `heroPicHover`) VALUES
(1, 'earthshaker', 'EarthShaker', 'earthshaker_sb.png', 'earthshaker_hphover.png'),
(2, 'sven', 'Sven', 'sven_sb.png', 'sven_hphover.png'),
(3, 'tiny', 'Tiny', 'tiny_sb.png', 'tiny_hphover.png'),
(4, 'kunkka', 'Kunkka', 'kunkka_sb.png', 'kunkka_hphover.png'),
(5, 'beastmaster', 'Beastmaster', 'beastmaster_sb.png', 'beastmaster_hphover.png'),
(6, 'dragon_knight', 'DragonKnight', 'dragon_knight_sb.png', 'dragon_knight_hphover.png'),
(7, 'rattletrap', 'Clockwerk', 'rattletrap_sb.png', 'rattletrap_hphover.png'),
(8, 'omniknight', 'Omniknight', 'omniknight_sb.png', 'omniknight_hphover.png'),
(9, 'huskar', 'Huskar', 'huskar_sb.png', 'huskar_hphover.png'),
(10, 'alchemist', 'Alchemist', 'alchemist_sb.png', 'alchemist_hphover.png'),
(11, 'brewmaster', 'Brewmaster', 'brewmaster_sb.png', 'brewmaster_hphover.png'),
(12, 'treant', 'TreantProtector', 'treant_sb.png', 'treant_hphover.png'),
(13, 'wisp', 'Io', 'wisp_sb.png', 'wisp_hphover.png'),
(14, 'centaur', 'CentaurWarrunner', 'centaur_sb.png', 'centaur_hphover.png'),
(15, 'shredder', 'Timbersaw', 'shredder_sb.png', 'shredder_hphover.png'),
(16, 'bristleback', 'Bristleback', 'bristleback_sb.png', 'bristleback_hphover.png'),
(17, 'tusk', 'Tusk', 'tusk_sb.png', 'tusk_hphover.png'),
(18, 'elder_titan', 'ElderTitan', 'elder_titan_sb.png', 'elder_titan_hphover.png'),
(19, 'legion_commander', 'LegionCommander', 'legion_commander_sb.png', 'legion_commander_hphover.png'),
(20, 'earth_spirit', 'EarthSpirit', 'earth_spirit_sb.png', 'earth_spirit_hphover.png'),
(21, 'phoenix', 'Phoenix', 'phoenix_sb.png', 'phoenix_hphover.png'),
(22, 'antimage', 'Anti-Mage', 'antimage_sb.png', 'antimage_hphover.png'),
(23, 'drow_ranger', 'DrowRanger', 'drow_ranger_sb.png', 'drow_ranger_hphover.png'),
(24, 'juggernaut', 'Juggernaut', 'juggernaut_sb.png', 'juggernaut_hphover.png'),
(25, 'mirana', 'Mirana', 'mirana_sb.png', 'mirana_hphover.png'),
(26, 'morphling', 'Morphling', 'morphling_sb.png', 'morphling_hphover.png'),
(27, 'phantom_lancer', 'PhantomLancer', 'phantom_lancer_sb.png', 'phantom_lancer_hphover.png'),
(28, 'vengefulspirit', 'VengefulSpirit', 'vengefulspirit_sb.png', 'vengefulspirit_hphover.png'),
(29, 'riki', 'Riki', 'riki_sb.png', 'riki_hphover.png'),
(30, 'sniper', 'Sniper', 'sniper_sb.png', 'sniper_hphover.png'),
(31, 'templar_assassin', 'TemplarAssassin', 'templar_assassin_sb.png', 'templar_assassin_hphover.png'),
(32, 'luna', 'Luna', 'luna_sb.png', 'luna_hphover.png'),
(33, 'bounty_hunter', 'BountyHunter', 'bounty_hunter_sb.png', 'bounty_hunter_hphover.png'),
(34, 'ursa', 'Ursa', 'ursa_sb.png', 'ursa_hphover.png'),
(35, 'gyrocopter', 'Gyrocopter', 'gyrocopter_sb.png', 'gyrocopter_hphover.png'),
(36, 'lone_druid', 'LoneDruid', 'lone_druid_sb.png', 'lone_druid_hphover.png'),
(37, 'naga_siren', 'NagaSiren', 'naga_siren_sb.png', 'naga_siren_hphover.png'),
(38, 'troll_warlord', 'TrollWarlord', 'troll_warlord_sb.png', 'troll_warlord_hphover.png'),
(39, 'ember_spirit', 'EmberSpirit', 'ember_spirit_sb.png', 'ember_spirit_hphover.png'),
(40, 'arc_warden', 'ArcWarden', 'arc_warden_sb.png', 'arc_warden_hphover.png'),
(41, 'crystal_maiden', 'CrystalMaiden', 'crystal_maiden_sb.png', 'crystal_maiden_hphover.png'),
(42, 'puck', 'Puck', 'puck_sb.png', 'puck_hphover.png'),
(43, 'storm_spirit', 'StormSpirit', 'storm_spirit_sb.png', 'storm_spirit_hphover.png'),
(44, 'windrunner', 'Windranger', 'windrunner_sb.png', 'windrunner_hphover.png'),
(45, 'zuus', 'Zeus', 'zuus_sb.png', 'zuus_hphover.png'),
(46, 'lina', 'Lina', 'lina_sb.png', 'lina_hphover.png'),
(47, 'shadow_shaman', 'ShadowShaman', 'shadow_shaman_sb.png', 'shadow_shaman_hphover.png'),
(48, 'tinker', 'Tinker', 'tinker_sb.png', 'tinker_hphover.png'),
(49, 'furion', 'Nature''sProphet', 'furion_sb.png', 'furion_hphover.png'),
(50, 'enchantress', 'Enchantress', 'enchantress_sb.png', 'enchantress_hphover.png'),
(51, 'jakiro', 'Jakiro', 'jakiro_sb.png', 'jakiro_hphover.png'),
(52, 'chen', 'Chen', 'chen_sb.png', 'chen_hphover.png'),
(53, 'silencer', 'Silencer', 'silencer_sb.png', 'silencer_hphover.png'),
(54, 'ogre_magi', 'OgreMagi', 'ogre_magi_sb.png', 'ogre_magi_hphover.png'),
(55, 'rubick', 'Rubick', 'rubick_sb.png', 'rubick_hphover.png'),
(56, 'disruptor', 'Disruptor', 'disruptor_sb.png', 'disruptor_hphover.png'),
(57, 'keeper_of_the_light', 'KeeperOfTheLight', 'keeper_of_the_light_sb.png', 'keeper_of_the_light_hphover.png'),
(58, 'skywrath_mage', 'SkywrathMage', 'skywrath_mage_sb.png', 'skywrath_mage_hphover.png'),
(59, 'oracle', 'Oracle', 'oracle_sb.png', 'oracle_hphover.png'),
(60, 'techies', 'Techies', 'techies_sb.png', 'techies_hphover.png'),
(61, 'axe', 'Axe', 'axe_sb.png', 'axe_hphover.png'),
(62, 'pudge', 'Pudge', 'pudge_sb.png', 'pudge_hphover.png'),
(63, 'sand_king', 'SandKing', 'sand_king_sb.png', 'sand_king_hphover.png'),
(64, 'slardar', 'Slardar', 'slardar_sb.png', 'slardar_hphover.png'),
(65, 'tidehunter', 'Tidehunter', 'tidehunter_sb.png', 'tidehunter_hphover.png'),
(66, 'skeleton_king', 'WraithKing', 'skeleton_king_sb.png', 'skeleton_king_hphover.png'),
(67, 'life_stealer', 'Lifestealer', 'life_stealer_sb.png', 'life_stealer_hphover.png'),
(68, 'night_stalker', 'NightStalker', 'night_stalker_sb.png', 'night_stalker_hphover.png'),
(69, 'doom_bringer', 'Doom', 'doom_bringer_sb.png', 'doom_bringer_hphover.png'),
(70, 'spirit_breaker', 'SpiritBreaker', 'spirit_breaker_sb.png', 'spirit_breaker_hphover.png'),
(71, 'lycan', 'Lycan', 'lycan_sb.png', 'lycan_hphover.png'),
(72, 'chaos_knight', 'ChaosKnight', 'chaos_knight_sb.png', 'chaos_knight_hphover.png'),
(73, 'undying', 'Undying', 'undying_sb.png', 'undying_hphover.png'),
(74, 'magnataur', 'Magnus', 'magnataur_sb.png', 'magnataur_hphover.png'),
(75, 'abaddon', 'Abaddon', 'abaddon_sb.png', 'abaddon_hphover.png'),
(76, 'bloodseeker', 'Bloodseeker', 'bloodseeker_sb.png', 'bloodseeker_hphover.png'),
(77, 'nevermore', 'ShadowFiend', 'nevermore_sb.png', 'nevermore_hphover.png'),
(78, 'razor', 'Razor', 'razor_sb.png', 'razor_hphover.png'),
(79, 'venomancer', 'Venomancer', 'venomancer_sb.png', 'venomancer_hphover.png'),
(80, 'faceless_void', 'FacelessVoid', 'faceless_void_sb.png', 'faceless_void_hphover.png'),
(81, 'phantom_assassin', 'PhantomAssassin', 'phantom_assassin_sb.png', 'phantom_assassin_hphover.png'),
(82, 'viper', 'Viper', 'viper_sb.png', 'viper_hphover.png'),
(83, 'clinkz', 'Clinkz', 'clinkz_sb.png', 'clinkz_hphover.png'),
(84, 'broodmother', 'Broodmother', 'broodmother_sb.png', 'broodmother_hphover.png'),
(85, 'weaver', 'Weaver', 'weaver_sb.png', 'weaver_hphover.png'),
(86, 'spectre', 'Spectre', 'spectre_sb.png', 'spectre_hphover.png'),
(87, 'meepo', 'Meepo', 'meepo_sb.png', 'meepo_hphover.png'),
(88, 'nyx_assassin', 'NyxAssassin', 'nyx_assassin_sb.png', 'nyx_assassin_hphover.png'),
(89, 'slark', 'Slark', 'slark_sb.png', 'slark_hphover.png'),
(90, 'medusa', 'Medusa', 'medusa_sb.png', 'medusa_hphover.png'),
(91, 'terrorblade', 'Terrorblade', 'terrorblade_sb.png', 'terrorblade_hphover.png'),
(92, 'bane', 'Bane', 'bane_sb.png', 'bane_hphover.png'),
(93, 'lich', 'Lich', 'lich_sb.png', 'lich_hphover.png'),
(94, 'lion', 'Lion', 'lion_sb.png', 'lion_hphover.png'),
(95, 'witch_doctor', 'WitchDoctor', 'witch_doctor_sb.png', 'witch_doctor_hphover.png'),
(96, 'enigma', 'Enigma', 'enigma_sb.png', 'enigma_hphover.png'),
(97, 'necrolyte', 'Necrophos', 'necrolyte_sb.png', 'necrolyte_hphover.png'),
(98, 'warlock', 'Warlock', 'warlock_sb.png', 'warlock_hphover.png'),
(99, 'queenofpain', 'QueenOfPain', 'queenofpain_sb.png', 'queenofpain_hphover.png'),
(100, 'death_prophet', 'DeathProphet', 'death_prophet_sb.png', 'death_prophet_hphover.png'),
(101, 'pugna', 'Pugna', 'pugna_sb.png', 'pugna_hphover.png'),
(102, 'dazzle', 'Dazzle', 'dazzle_sb.png', 'dazzle_hphover.png'),
(103, 'leshrac', 'Leshrac', 'leshrac_sb.png', 'leshrac_hphover.png'),
(104, 'dark_seer', 'DarkSeer', 'dark_seer_sb.png', 'dark_seer_hphover.png'),
(105, 'batrider', 'Batrider', 'batrider_sb.png', 'batrider_hphover.png'),
(106, 'ancient_apparition', 'AncientApparition', 'ancient_apparition_sb.png', 'ancient_apparition_hphover.png'),
(107, 'invoker', 'Invoker', 'invoker_sb.png', 'invoker_hphover.png'),
(108, 'obsidian_destroyer', 'OutworldDevourer', 'obsidian_destroyer_sb.png', 'obsidian_destroyer_hphover.png'),
(109, 'shadow_demon', 'ShadowDemon', 'shadow_demon_sb.png', 'shadow_demon_hphover.png'),
(110, 'visage', 'Visage', 'visage_sb.png', 'visage_hphover.png'),
(111, 'winter_wyvern', 'WinterWyvern', 'winter_wyvern_sb.png', 'winter_wyvern_hphover.png');

-- --------------------------------------------------------

--
-- Table structure for table `steam_users`
--

CREATE TABLE `steam_users` (
  `steamid` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `avatar` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `steam_users`
--

INSERT INTO `steam_users` (`steamid`, `name`, `avatar`) VALUES
(2147483647, 'CreaTivE', 'https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/8d/8d6842d22560f0c6994de2d99a7f55b5ab8ad396.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `heroes`
--
ALTER TABLE `heroes`
  ADD PRIMARY KEY (`heroId`);

--
-- Indexes for table `steam_users`
--
ALTER TABLE `steam_users`
  ADD PRIMARY KEY (`steamid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `heroes`
--
ALTER TABLE `heroes`
  MODIFY `heroId` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
