-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: May 08, 2017 at 05:41 AM
-- Server version: 5.6.35
-- PHP Version: 7.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `CSV_DB`
--

-- --------------------------------------------------------

--
-- Table structure for table `TBL_NAME`
--

CREATE TABLE `TBL_NAME` (
  `COL 1` varchar(8) DEFAULT NULL,
  `COL 2` varchar(28) DEFAULT NULL,
  `COL 3` varchar(28) DEFAULT NULL,
  `COL 4` varchar(12) DEFAULT NULL,
  `COL 5` varchar(52) DEFAULT NULL,
  `COL 6` varchar(5) DEFAULT NULL,
  `COL 7` varchar(14) DEFAULT NULL,
  `COL 8` varchar(5) DEFAULT NULL,
  `COL 9` varchar(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `TBL_NAME`
--

INSERT INTO `test_national_parks_and_states` ('selector', 'park', 'state', 'abb_state', 'img', 'audio', 'creator', 'Level', 'comments') VALUES
('', 'Acadia', 'Maine', 'ME', 'src/national_parks/acadia.jpeg', '', 'Woodrow Wilson', '2', ''),
('', 'American Samoa', 'American Samoa', 'AS', 'src/national_parks/american_samoa.jpeg', '', '', '2', ''),
('', 'Arches', 'Utah', 'UT', 'src/national_parks/arches.jpeg', '', '', '2', ''),
('', 'Badlands', 'South Dakota', 'SD', 'src/national_parks/badlands.jpeg', '', '', '1', ''),
('', 'Big Bend', 'Texas', 'TX', 'src/national_parks/big_bend.jpeg', '', '', '1', ''),
('', 'Biscayne', 'Florida', 'FL', 'src/national_parks/biscanyne.jpeg', '', '', '2', ''),
('', 'Black Canyon of the Gunnison', 'Colorado', 'CO', 'src/national_parks/black_canyon_of_the_gunnison.jpeg', '', '', '2', ''),
('', 'Bryce Canyon', 'Utah ', 'UT', 'src/national_parks/bryce_canyon.jpeg', '', '', '3', ''),
('', 'Canyonlands', 'Utah ', 'UT', 'src/national_parks/canyonlands.jpeg', '', '', '1', ''),
('', 'Capitol Reef', 'Utah', 'UT', 'src/national_parks/capitol_reef.jpeg', '', '', '2', ''),
('', 'Carlsbad Caverns', 'New Mexico', 'NM', 'src/national_parks/carlsbad_caverns.jpeg', '', '', '1', ''),
('', 'Channel Islands', 'California', 'CA', 'src/national_parks/channel_islands.jpeg', '', '', '2', ''),
('', 'Congaree', 'South Carolina', 'SC', 'src/national_parks/congaree.jpeg', '', '', '3', ''),
('', 'Crater Lake', 'Oregon', 'OR', 'src/national_parks/crater_lake.jpeg', '', '', '2', ''),
('', 'Cuyahoga Valley', 'Ohio', 'OH', 'src/national_parks/cuyahoga_valley.jpeg', '', '', '1', ''),
('', 'Death Valley', 'California - Nevada', 'CA - NV', 'src/national_parks/death_valley.jpeg', '', '', '1', NULL),
('', 'Denali', 'Alaska', 'AK', 'src/national_parks/denali.jpeg', '', '', '2', NULL),
('', 'Dry Tortugas', 'Florida', 'FL', 'src/national_parks/dry_tortugas.jpeg', '', '', '3', NULL),
('', 'Everglades', 'Florida', 'FL', 'src/national_parks/everglades.jpeg', '', '', '1', NULL),
('', 'Gates of the Arctic', 'Alaska', 'AK', 'src/national_parks/gates_of_the_arctic.jpeg', '', '', '2', NULL),
('', 'Glacier', 'Montana', 'MT', 'src/national_parks/glacier.jpeg', '', '', '2', NULL),
('', 'Glacier Bay', 'Alaska', 'AK', 'src/national_parks/glacier_bay.jpeg', '', '', '2', NULL),
('', 'Grand Canyon', 'Arizona', 'AZ', 'src/national_parks/grand_canyon.jpeg', '', '', '1', NULL),
('', 'Grand Teton', 'Wyoming', 'WY', 'src/national_parks/grand_teton.jpeg', '', '', '2', NULL),
('', 'Great Basin', 'Nevada', 'NV', 'src/national_parks/great_basin.jpeg', '', '', '2', NULL),
('', 'Great Sand Dunes', 'Colorado', 'CO', 'src/national_parks/great_sand_dunes.jpeg', '', '', '2', NULL),
('', 'Great Smokey Mountain', 'North Carolina - Tennessee', 'NC - TN', 'src/national_parks/great_smokey_mountains.jpeg', '', '', '1', NULL),
('', 'Guadelupe Mountains', 'Texas', 'Haleakala', 'src/national_parks/guadelupe_mountains.jpeg', '', '', '3', NULL),
('', 'Hawaii Volcanoes', 'Hawaii', 'HI', 'src/national_parks/hawaii_volcanoes.jpeg', '', '', '1', NULL),
('', 'Hot Springs', 'Arkansas', 'AR', 'src/national_parks/hot_springs.jpeg', '', '', '2', NULL),
('', 'Isle Royale', 'Michigan', 'MI', 'src/national_parks/isle_royale.jpeg', '', '', '2', NULL),
('', 'Joshua Tree', 'California', 'CA', 'src/national_parks/joshua_tree.jpeg', '', '', '1', NULL),
('', 'Katmai', 'Alaska', 'AK', 'src/national_parks/katmai.jpeg', '', '', '3', NULL),
('', 'Kenai Fjords', 'Alaska', 'AK', 'src/national_parks/kenai_fjords.jpeg', '', '', '3', NULL),
('', 'Kings Canyon', 'California', 'CA', 'src/national_parks/kings_canyon.jpeg', '', '', '3', NULL),
('', 'Kobuk Valley', 'Alaska', 'AK', 'src/national_parks/kobuk_valley.jpeg', '', '', '3', NULL),
('', 'Lake Clark', 'Alaska', 'AK', 'src/national_parks/lake_clark.jpeg', '', '', '3', NULL),
('', 'Lassen Volcanic', 'California', 'CA', 'src/national_parks/lassen_volcanic.jpeg', '', '', '3', NULL),
('', 'Mammoth Cave', 'Kentucky', 'KY', 'src/nation_parks/mammoth_cave.jpeg', '', '', '2', NULL),
('', 'Messa Verde', 'Colorado', 'CO', 'src/national_parks/messa_verde.jpeg', '', '', '2', NULL),
('', 'Mount Rainer', 'Washington', 'WA', 'src/national_parks/mount_rainer.jpeg', '', '', '1', NULL),
('', 'North Cascades', 'Washington', 'WA', 'src/national_parks/north_cascades.jpeg', '', '', '3', NULL),
('', 'Olympic', 'Washington', 'WA', 'src/national_parks/olympic.jpeg', '', '', '2', NULL),
('', 'Petrified Forest', 'Arizona', 'AZ', 'src/national_parks/petrified_forest.jpeg', '', '', '2', NULL),
('', 'Pinnacles', 'California', 'CA', 'src/national_parks/pinnacles.jpeg', '', '', '2', NULL),
('', 'Redwood', 'California', 'CA', 'src/national_parks/redwood.jpeg', '', '', '1', NULL),
('', 'Rocky Mountain', 'Colorado', 'CO', 'src/national_parks/rocky_mountains.jpeg', '', '', '1', NULL),
('', 'Saguaro', 'Arizona', 'AZ', 'src/national_parks/saguaro.jpeg', '', '', '3', NULL),
('', 'Sequoia', 'California', 'Ca', 'src/national_parks/sequoia.jpeg', '', '', '2', NULL),
('', 'Shenandoah', 'Virginia', 'VA', 'src/national_parks/shenandoah.jpeg', '', '', '1', NULL),
('', 'Theodore Roosevelt', 'North Dakota', 'ND', 'src/national_parks/theodore_roosevelt.jpeg', '', '', '2', NULL),
('', 'Virgin Islands', 'United States Virgin Islands', 'VI', 'src/national_parks/virgin_islands.jpeg', '', '', '2', NULL),
('', 'Voyageurs', 'Minnesota', 'MN', 'src/national_parks/voyageurs.jpeg', '', '', '3', NULL),
('', 'Wind Cave ', 'South Dakota', 'SD', 'src/national_parks/wind_cave.jpeg', '', '', '3', NULL),
('', 'Wrangell - St. Elias', 'Alaska', 'AK', 'src/national_parks/wrangell_st_elias.jpeg', '', '', '3', NULL),
('', 'Yellowstone', 'Wyoming - Montana - Idaho', 'WY - MT - ID', 'src/national_parks/yellowstone.jpeg', '', '', '1', NULL),
('', 'Yosemite', 'California', 'CA', 'src/national_parks/yosemite.jpeg', '', '', '1', NULL),
('', 'Zion', 'Utah', 'UT', 'src/national_parks/zion.jpeg', '', '', '2', NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
