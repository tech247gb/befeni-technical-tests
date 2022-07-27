CREATE TABLE `ShirtOrder` (
  `id` int UNSIGNED NOT NULL,
  `customerId` int UNSIGNED NOT NULL DEFAULT '0',
  `fabricId` int UNSIGNED NOT NULL DEFAULT '0',
  `collarSize` int UNSIGNED NOT NULL DEFAULT '0',
  `chestSize` int UNSIGNED NOT NULL DEFAULT '0',
  `waistSize` int UNSIGNED NOT NULL DEFAULT '0',
  `wristSize` int UNSIGNED NOT NULL DEFAULT '0',
  `externalSource` enum('WarehouseAPI','ExternalAPI') COLLATE utf8_bin NOT NULL,
  `sourceId` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8_bin;