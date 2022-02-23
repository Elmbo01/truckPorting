<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220120121113 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        $this->addSql("INSERT INTO vehiculo (id, matricula, disponibilidad, tipo, capacidad, costo, personal,imagen) values (2, 'JN8AF5MR4FT456104', false, 'CR-V', 2, 43879.46, 2,'http://dummyimage.com/208x100.png/cc0000/ffffff')");
        $this->addSql("INSERT INTO vehiculo (id, matricula, disponibilidad, tipo, capacidad, costo, personal,imagen) values (3, '4T1BK3DB3BU468389', true, 'Mariner', 3, 55103.31, 3,'http://dummyimage.com/208x100.png/cc0000/ffffff')");
        $this->addSql("INSERT INTO vehiculo (id, matricula, disponibilidad, tipo, capacidad, costo, personal,imagen) values (4, '3VWC17AU2FM603877', true, 'Eclipse', 4, 92169.5, 4,'http://dummyimage.com/208x100.png/cc0000/ffffff')");
        $this->addSql("INSERT INTO vehiculo (id, matricula, disponibilidad, tipo, capacidad, costo, personal,imagen) values (5, 'ZFBCFAAH7EZ286845', true, 'Explorer', 5, 56881.8, 5,'http://dummyimage.com/208x100.png/cc0000/ffffff')");
        $this->addSql("INSERT INTO vehiculo (id, matricula, disponibilidad, tipo, capacidad, costo, personal,imagen) values (6, 'SCBCU7ZA1BC065935', true, '7 Series', 6, 50895.82, 6,'http://dummyimage.com/208x100.png/cc0000/ffffff')");
        $this->addSql("INSERT INTO vehiculo (id, matricula, disponibilidad, tipo, capacidad, costo, personal,imagen) values (7, '1B3BD1FB3BN286736', true, 'Lightning', 7, 23709.76, 7,'http://dummyimage.com/208x100.png/cc0000/ffffff')");
        $this->addSql("INSERT INTO vehiculo (id, matricula, disponibilidad, tipo, capacidad, costo, personal,imagen) values (8, 'WAUSF98K19N653130', true, 'Astro', 8, 24144.83, 8,'http://dummyimage.com/208x100.png/cc0000/ffffff')");
        $this->addSql("INSERT INTO vehiculo (id, matricula, disponibilidad, tipo, capacidad, costo, personal,imagen) values (9, '2B3CK9CV1AH076229', true, 'Courier', 9, 11037.33, 9,'http://dummyimage.com/208x100.png/cc0000/ffffff')");
        $this->addSql("INSERT INTO vehiculo (id, matricula, disponibilidad, tipo, capacidad, costo, personal,imagen) values (10, 'WAUBFAFL5FN964116', true, 'Cube', 10, 10392.98, 10,'http://dummyimage.com/208x100.png/cc0000/ffffff')");
        $this->addSql("INSERT INTO vehiculo (id, matricula, disponibilidad, tipo, capacidad, costo, personal,imagen) values (11, '1G4GC5GR0DF372198', false, 'Elantra', 11, 79830.55, 11,'http://dummyimage.com/208x100.png/cc0000/ffffff')");
        $this->addSql("INSERT INTO vehiculo (id, matricula, disponibilidad, tipo, capacidad, costo, personal,imagen) values (12, 'WAUDH94F48N461999', false, 'Space', 12, 29821.9, 12,'http://dummyimage.com/208x100.png/cc0000/ffffff')");
        $this->addSql("INSERT INTO vehiculo (id, matricula, disponibilidad, tipo, capacidad, costo, personal,imagen) values (13, 'WAULT68E05A448051', true, 'Silhouette', 13, 86499.91, 13,'http://dummyimage.com/208x100.png/cc0000/ffffff')");
        $this->addSql("INSERT INTO vehiculo (id, matricula, disponibilidad, tipo, capacidad, costo, personal) values (14, 'WBANV13558B896572', false, 'W201', 14, 69425.4, 14,'http://dummyimage.com/208x100.png/cc0000/ffffff')");
        $this->addSql("INSERT INTO vehiculo (id, matricula, disponibilidad, tipo, capacidad, costo, personal,imagen) values (15, '1GKS1AE05CR278952', true, 'Express 2500', 15, 2341.48, 15,'http://dummyimage.com/208x100.png/cc0000/ffffff')");
        $this->addSql("INSERT INTO vehiculo (id, matricula, disponibilidad, tipo, capacidad, costo, personal,imagen) values (16, 'WBAEU33402K779480', false, 'Coachbuilder', 16, 47444.25, 16,'http://dummyimage.com/208x100.png/cc0000/ffffff')");
        $this->addSql("INSERT INTO vehiculo (id, matricula, disponibilidad, tipo, capacidad, costo, personal,imagen) values (17, 'WAUKF98E96A628814', true, '760', 17, 75419.15, 17,'http://dummyimage.com/208x100.png/cc0000/ffffff')");
        $this->addSql("INSERT INTO vehiculo (id, matricula, disponibilidad, tipo, capacidad, costo, personal,imagen) values (18, 'NM0KS9BNXBT217831', true, 'Ram 2500', 18, 86965.31, 18,'http://dummyimage.com/208x100.png/cc0000/ffffff')");
        $this->addSql("INSERT INTO vehiculo (id, matricula, disponibilidad, tipo, capacidad, costo, personal,imagen) values (19, 'JH4DC54836S706204', false, 'Mazda6', 19, 23421.22, 19,'http://dummyimage.com/208x100.png/cc0000/ffffff')");
        $this->addSql("INSERT INTO vehiculo (id, matricula, disponibilidad, tipo, capacidad, costo, personal,imagen) values (20, '3D73M4EL6BG051129', false, 'G', 20, 40414.79, 20,'http://dummyimage.com/208x100.png/cc0000/ffffff')");
        $this->addSql("INSERT INTO vehiculo (id, matricula, disponibilidad, tipo, capacidad, costo, personal,imagen) values (21, 'YV1612FS6E2574877', true, 'Ram 1500 Club', 21, 97513.75, 21,'http://dummyimage.com/208x100.png/cc0000/ffffff')");
        $this->addSql("INSERT INTO vehiculo (id, matricula, disponibilidad, tipo, capacidad, costo, personal,imagen) values (22, '1FBSS3BL2AD720794', false, '9-7X', 22, 83891.39, 22,'http://dummyimage.com/208x100.png/cc0000/ffffff')");
        $this->addSql("INSERT INTO vehiculo (id, matricula, disponibilidad, tipo, capacidad, costo, personal,imagen) values (23, 'WAUML64B23N669768', true, 'Diamante', 23, 24869.09, 23,'http://dummyimage.com/208x100.png/cc0000/ffffff')");
        $this->addSql("INSERT INTO vehiculo (id, matricula, disponibilidad, tipo, capacidad, costo, personal,imagen) values (24, 'JH4CU2F48DC210596', true, 'Miata MX-5', 24, 45496.43, 24,'http://dummyimage.com/208x100.png/cc0000/ffffff')");
        $this->addSql("INSERT INTO vehiculo (id, matricula, disponibilidad, tipo, capacidad, costo, personal,imagen) values (25, 'WAUDK78T18A313032', false, 'Supra', 25, 16443.35, 25,'http://dummyimage.com/208x100.png/cc0000/ffffff')");
        $this->addSql("INSERT INTO vehiculo (id, matricula, disponibilidad, tipo, capacidad, costo, personal,imagen) values (26, 'WBAKN9C52FD777574', true, 'Diablo', 26, 85142.72, 26,'http://dummyimage.com/208x100.png/cc0000/ffffff')");
        $this->addSql("INSERT INTO vehiculo (id, matricula, disponibilidad, tipo, capacidad, costo, personal,imagen) values (27, 'WP0AB2A8XCU126765', true, 'Caravan', 27, 42142.24, 27,'http://dummyimage.com/208x100.png/cc0000/ffffff')");
        $this->addSql("INSERT INTO vehiculo (id, matricula, disponibilidad, tipo, capacidad, costo, personal,imagen) values (28, '4JGDA0EB5FA658355', true, 'S-Class', 28, 59320.96, 28,'http://dummyimage.com/208x100.png/cc0000/ffffff')");
        $this->addSql("INSERT INTO vehiculo (id, matricula, disponibilidad, tipo, capacidad, costo, personal,imagen) values (29, 'WAUFFAFM3CA629806', true, '300', 29, 53342.43, 29,'http://dummyimage.com/208x100.png/cc0000/ffffff')");
        $this->addSql("INSERT INTO vehiculo (id, matricula, disponibilidad, tipo, capacidad, costo, personal,imagen) values (30, '3D7TP2HT6AG909723', true, 'S-Series', 30, 76895.19, 30,'http://dummyimage.com/208x100.png/cc0000/ffffff')");
        $this->addSql("INSERT INTO vehiculo (id, matricula, disponibilidad, tipo, capacidad, costo, personal,imagen) values (31, 'WAUWMAFC8EN125745', true, 'GTO', 31, 2197.71, 31,'http://dummyimage.com/208x100.png/cc0000/ffffff')");
        $this->addSql("INSERT INTO vehiculo (id, matricula, disponibilidad, tipo, capacidad, costo, personal,imagen) values (32, 'WBAYE4C54ED935893', true, '911', 32, 13151.61, 32,'http://dummyimage.com/208x100.png/cc0000/ffffff')");
        $this->addSql("INSERT INTO vehiculo (id, matricula, disponibilidad, tipo, capacidad, costo, personal,imagen) values (33, '1G4CU541324229765', false, 'RSX', 33, 59816.07, 33,'http://dummyimage.com/208x100.png/cc0000/ffffff')");
        $this->addSql("INSERT INTO vehiculo (id, matricula, disponibilidad, tipo, capacidad, costo, personal,imagen) values (34, 'KMHHT6KJ7FU251257', true, 'Silverado', 34, 41914.3, 34,'http://dummyimage.com/208x100.png/cc0000/ffffff')");
        $this->addSql("INSERT INTO vehiculo (id, matricula, disponibilidad, tipo, capacidad, costo, personal,imagen) values (35, '3D73M4HL4AG869744', false, 'IS', 35, 98472.66, 35,'http://dummyimage.com/208x100.png/cc0000/ffffff')");
        $this->addSql("INSERT INTO vehiculo (id, matricula, disponibilidad, tipo, capacidad, costo, personal,imagen) values (36, '1GYFK63878R332267', true, 'Suburban 1500', 36, 89261.7, 36,'http://dummyimage.com/208x100.png/cc0000/ffffff')");
        $this->addSql("INSERT INTO vehiculo (id, matricula, disponibilidad, tipo, capacidad, costo, personal,imagen) values (37, '1C3CDFDH7FD639101', false, 'California', 37, 64924.28, 37,'http://dummyimage.com/208x100.png/cc0000/ffffff')");
        $this->addSql("INSERT INTO vehiculo (id, matricula, disponibilidad, tipo, capacidad, costo, personal,imagen) values (38, '1G4GB5EG9AF585246', false, 'Sonata', 38, 54113.1, 38,'http://dummyimage.com/208x100.png/cc0000/ffffff')");
        $this->addSql("INSERT INTO vehiculo (id, matricula, disponibilidad, tipo, capacidad, costo, personal,imagen) values (39, '1GKS1AE04BR061164', true, 'Town & Country', 39, 54675.69, 39,'http://dummyimage.com/208x100.png/cc0000/ffffff')");
        $this->addSql("INSERT INTO vehiculo (id, matricula, disponibilidad, tipo, capacidad, costo, personal,imagen) values (40, '5BZAF0AA9EN934145', false, 'Cabriolet', 40, 50480.27, 40,'http://dummyimage.com/208x100.png/cc0000/ffffff')");
        $this->addSql("INSERT INTO vehiculo (id, matricula, disponibilidad, tipo, capacidad, costo, personal, imagen) values (41, '3LN6L2G97DR590944', false, 'Villager', 41, 73585.98, 41,'http://dummyimage.com/208x100.png/cc0000/ffffff')");
        $this->addSql("INSERT INTO vehiculo (id, matricula, disponibilidad, tipo, capacidad, costo, personal,imagen) values (42, '5N1AR2MM2FC240981', false, 'Ranger', 42, 43782.44, 42,'http://dummyimage.com/208x100.png/cc0000/ffffff')");
        $this->addSql("INSERT INTO vehiculo (id, matricula, disponibilidad, tipo, capacidad, costo, personal,imagen) values (43, 'WBAKF5C58DE169216', true, 'Dynasty', 43, 46387.65, 43,'http://dummyimage.com/208x100.png/cc0000/ffffff')");
        $this->addSql("INSERT INTO vehiculo (id, matricula, disponibilidad, tipo, capacidad, costo, personal,imagen) values (44, '2T1BU4EE9CC144049', true, 'Liberty', 44, 24838.36, 44,'http://dummyimage.com/208x100.png/cc0000/ffffff')");
        $this->addSql("INSERT INTO vehiculo (id, matricula, disponibilidad, tipo, capacidad, costo, personal,imagen) values (45, '1GYEC63T34R975464', true, 'Elantra', 45, 3921.38, 45,'http://dummyimage.com/208x100.png/cc0000/ffffff')");
        $this->addSql("INSERT INTO vehiculo (id, matricula, disponibilidad, tipo, capacidad, costo, personal,imagen) values (46, 'WBA4A7C55FD576650', false, 'QX', 46, 22304.42, 46,'http://dummyimage.com/208x100.png/cc0000/ffffff')");
        $this->addSql("INSERT INTO vehiculo (id, matricula, disponibilidad, tipo, capacidad, costo, personal,imagen) values (47, 'WA1CGAFE6ED545681', false, 'Ciera', 47, 84102.42, 47,'http://dummyimage.com/208x100.png/cc0000/ffffff')");
        $this->addSql("INSERT INTO vehiculo (id, matricula, disponibilidad, tipo, capacidad, costo, personal,imagen) values (48, 'YV1612FH9E2834287', true, 'Impreza', 48, 59503.12, 48,'http://dummyimage.com/208x100.png/cc0000/ffffff')");
        $this->addSql("INSERT INTO vehiculo (id, matricula, disponibilidad, tipo, capacidad, costo, personal,imagen) values (49, 'WA1CGBFEXCD416815', true, '7 Series', 49, 10069.29, 49,'http://dummyimage.com/208x100.png/cc0000/ffffff')");
        $this->addSql("INSERT INTO vehiculo (id, matricula, disponibilidad, tipo, capacidad, costo, personal,imagen) values (50, '3GYT4MEF5CG404556', true, 'Tracker', 50, 35452.18, 50,'http://dummyimage.com/208x100.png/cc0000/ffffff')");
        $this->addSql("INSERT INTO vehiculo (id, matricula, disponibilidad, tipo, capacidad, costo, personal,imagen) values (51, 'WA1AY74L29D060890', true, 'Ram 1500 Club', 51, 19743.15, 51,'http://dummyimage.com/208x100.png/cc0000/ffffff')");
        $this->addSql("INSERT INTO vehiculo (id, matricula, disponibilidad, tipo, capacidad, costo, personal,imagen) values (52, '5UXFA13564L953254', false, 'Sonata', 52, 79631.99, 52,'http://dummyimage.com/208x100.png/cc0000/ffffff')");
        $this->addSql("INSERT INTO vehiculo (id, matricula, disponibilidad, tipo, capacidad, costo, personal,imagen) values (53, '3VW1K7AJ0DM156151', true, '400E', 53, 30069.63, 53,'http://dummyimage.com/208x100.png/cc0000/ffffff')");
        $this->addSql("INSERT INTO vehiculo (id, matricula, disponibilidad, tipo, capacidad, costo, personal,imagen) values (54, '1G6DP57VX90425883', false, 'LaCrosse', 54, 89222.01, 54,'http://dummyimage.com/208x100.png/cc0000/ffffff')");
        $this->addSql("INSERT INTO vehiculo (id, matricula, disponibilidad, tipo, capacidad, costo, personal,imagen) values (55, '3GYFK66N84G997772', false, 'Phantom', 55, 61876.33, 55,'http://dummyimage.com/208x100.png/cc0000/ffffff')");
        $this->addSql("INSERT INTO vehiculo (id, matricula, disponibilidad, tipo, capacidad, costo, personal,imagen) values (56, 'WAUJC68E25A229437', false, '600', 56, 33187.02, 56,'http://dummyimage.com/208x100.png/cc0000/ffffff')");
        $this->addSql("INSERT INTO vehiculo (id, matricula, disponibilidad, tipo, capacidad, costo, personal,imagen) values (57, '5N1AZ2MG4FN065552', false, 'Grand Cherokee', 57, 13328.95, 57,'http://dummyimage.com/208x100.png/cc0000/ffffff')");
        $this->addSql("INSERT INTO vehiculo (id, matricula, disponibilidad, tipo, capacidad, costo, personal,imagen) values (58, 'WAU4GAFB0AN070255', true, 'Charger', 58, 33428.36, 58,'http://dummyimage.com/208x100.png/cc0000/ffffff')");
        $this->addSql("INSERT INTO vehiculo (id, matricula, disponibilidad, tipo, capacidad, costo, personal,imagen) values (59, '2T3BFREV5FW712475', false, 'Touareg', 59, 19142.9, 59,'http://dummyimage.com/208x100.png/cc0000/ffffff')");
        $this->addSql("INSERT INTO vehiculo (id, matricula, disponibilidad, tipo, capacidad, costo, personal,imagen) values (60, 'KNAGN4AD1F5427284', false, 'Skylark', 60, 69820.64, 60,'http://dummyimage.com/208x100.png/cc0000/ffffff')");
        $this->addSql("INSERT INTO vehiculo (id, matricula, disponibilidad, tipo, capacidad, costo, personal,imagen) values (61, '5N1CL0MM5EC990808', false, 'GL-Class', 61, 8931.1, 61,'http://dummyimage.com/208x100.png/cc0000/ffffff')");
        $this->addSql("INSERT INTO vehiculo (id, matricula, disponibilidad, tipo, capacidad, costo, personal,imagen) values (62, '5N1BA0ND3FN786742', false, 'Montero', 62, 93024.24, 62,'http://dummyimage.com/208x100.png/cc0000/ffffff')");
        $this->addSql("INSERT INTO vehiculo (id, matricula, disponibilidad, tipo, capacidad, costo, personal,imagen) values (63, '1GYUKHEF6AR558028', false, 'GTI', 63, 21711.69, 63,'http://dummyimage.com/208x100.png/cc0000/ffffff')");
        $this->addSql("INSERT INTO vehiculo (id, matricula, disponibilidad, tipo, capacidad, costo, personal,imagen) values (64, '5UXZV4C58CL967738', false, 'Rainier', 64, 76640.78, 64,'http://dummyimage.com/208x100.png/cc0000/ffffff')");
        $this->addSql("INSERT INTO vehiculo (id, matricula, disponibilidad, tipo, capacidad, costo, personal,imagen) values (65, '1G6DM56T450400268', false, 'New Beetle', 65, 19862.69, 65,'http://dummyimage.com/208x100.png/cc0000/ffffff')");
        $this->addSql("INSERT INTO vehiculo (id, matricula, disponibilidad, tipo, capacidad, costo, personal,imagen) values (66, 'KNAFU6A25C5481627', false, 'Reatta', 66, 89782.41, 66,'http://dummyimage.com/208x100.png/cc0000/ffffff')");
        $this->addSql("INSERT INTO vehiculo (id, matricula, disponibilidad, tipo, capacidad, costo, personal,imagen) values (67, '1GT020CG9EF706620', true, 'Dakota', 67, 46471.14, 67,'http://dummyimage.com/208x100.png/cc0000/ffffff')");
        $this->addSql("INSERT INTO vehiculo (id, matricula, disponibilidad, tipo, capacidad, costo, personal,imagen) values (68, 'WAULL44EX5N631511', false, 'XJ Series', 68, 24344.51, 68,'http://dummyimage.com/208x100.png/cc0000/ffffff')");
        $this->addSql("INSERT INTO vehiculo (id, matricula, disponibilidad, tipo, capacidad, costo, personal,imagen) values (69, 'WBAGL63432D288791', false, 'QX', 69, 81921.27, 69,'http://dummyimage.com/208x100.png/cc0000/ffffff')");
        $this->addSql("INSERT INTO vehiculo (id, matricula, disponibilidad, tipo, capacidad, costo, personal,imagen) values (70, '2FMDK3KC0AB719682', false, 'Achieva', 70, 95076.47, 70,'http://dummyimage.com/208x100.png/cc0000/ffffff')");
        $this->addSql("INSERT INTO vehiculo (id, matricula, disponibilidad, tipo, capacidad, costo, personal,imagen) values (71, 'WA1VFAFLXEA957386', false, 'T100 Xtra', 71, 73332.76, 71,'http://dummyimage.com/208x100.png/cc0000/ffffff')");
        $this->addSql("INSERT INTO vehiculo (id, matricula, disponibilidad, tipo, capacidad, costo, personal,imagen) values (72, '3VWML7AJ3CM528607', true, 'Yukon', 72, 30542.47, 72,'http://dummyimage.com/208x100.png/cc0000/ffffff')");
        $this->addSql("INSERT INTO vehiculo (id, matricula, disponibilidad, tipo, capacidad, costo, personal,imagen) values (73, 'YV440MBC8F1410688', true, 'W123', 73, 79435.64, 73,'http://dummyimage.com/208x100.png/cc0000/ffffff')");
        $this->addSql("INSERT INTO vehiculo (id, matricula, disponibilidad, tipo, capacidad, costo, personal,imagen) values (74, 'JN8AS5MT7FW684863', true, 'Savana 1500', 74, 61403.03, 74,'http://dummyimage.com/208x100.png/cc0000/ffffff')");
        $this->addSql("INSERT INTO vehiculo (id, matricula, disponibilidad, tipo, capacidad, costo, personal,imagen) values (75, 'WAUHF78PX8A755607', false, 'Outback', 75, 44661.36, 75,'http://dummyimage.com/208x100.png/cc0000/ffffff')");
        $this->addSql("INSERT INTO vehiculo (id, matricula, disponibilidad, tipo, capacidad, costo, personal,imagen) values (76, '1G4GB5EG3AF314182', true, 'Silverado 3500', 76, 81539.06, 76,'http://dummyimage.com/208x100.png/cc0000/ffffff')");
        $this->addSql("INSERT INTO vehiculo (id, matricula, disponibilidad, tipo, capacidad, costo, personal,imagen) values (77, '3GYVKLEF8AG208200', false, 'Avenger', 77, 88658.06, 77,'http://dummyimage.com/208x100.png/cc0000/ffffff')");
        $this->addSql("INSERT INTO vehiculo (id, matricula, disponibilidad, tipo, capacidad, costo, personal,imagen) values (78, 'WP0CA2A83EK964887', true, '90', 78, 17797.67, 78,'http://dummyimage.com/208x100.png/cc0000/ffffff')");
        $this->addSql("INSERT INTO vehiculo (id, matricula, disponibilidad, tipo, capacidad, costo, personal,imagen) values (79, '1N6AF0LY4EN152018', true, 'Miata MX-5', 79, 21318.7, 79,'http://dummyimage.com/208x100.png/cc0000/ffffff')");
        $this->addSql("INSERT INTO vehiculo (id, matricula, disponibilidad, tipo, capacidad, costo, personal,imagen) values (80, 'WAU32AFD4FN049265', true, 'Spectra', 80, 30639.73, 80,'http://dummyimage.com/208x100.png/cc0000/ffffff')");
        $this->addSql("INSERT INTO vehiculo (id, matricula, disponibilidad, tipo, capacidad, costo, personal,imagen) values (81, 'WBAAV53441J548495', true, '9-3', 81, 46422.49, 81,'http://dummyimage.com/208x100.png/cc0000/ffffff')");
        $this->addSql("INSERT INTO vehiculo (id, matricula, disponibilidad, tipo, capacidad, costo, personal,imagen) values (82, 'WBABS33441J590201', false, 'Ranger', 82, 7495.54, 82,'http://dummyimage.com/208x100.png/cc0000/ffffff')");
        $this->addSql("INSERT INTO vehiculo (id, matricula, disponibilidad, tipo, capacidad, costo, personal,imagen) values (83, 'YV126MFD7F1932251', true, 'Grand Vitara', 83, 36165.51, 83,'http://dummyimage.com/208x100.png/cc0000/ffffff')");
        $this->addSql("INSERT INTO vehiculo (id, matricula, disponibilidad, tipo, capacidad, costo, personal,imagen) values (84, '5N1AN0NUXAC741057', true, 'Dakota', 84, 97637.92, 84,'http://dummyimage.com/208x100.png/cc0000/ffffff')");
        $this->addSql("INSERT INTO vehiculo (id, matricula, disponibilidad, tipo, capacidad, costo, personal,imagen) values (85, 'WAUUL78E75A834587', false, 'Journey', 85, 4357.81, 85,'http://dummyimage.com/208x100.png/cc0000/ffffff')");
        $this->addSql("INSERT INTO vehiculo (id, matricula, disponibilidad, tipo, capacidad, costo, personal,imagen) values (86, 'WA1CMBFP3FA807272', false, 'E-Class', 86, 28173.01, 86,'http://dummyimage.com/208x100.png/cc0000/ffffff')");
        $this->addSql("INSERT INTO vehiculo (id, matricula, disponibilidad, tipo, capacidad, costo, personal,imagen) values (87, 'WAUCFAFH1EN396400', false, 'Bonneville', 87, 25916.08, 87,'http://dummyimage.com/208x100.png/cc0000/ffffff')");

    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs

    }
}
