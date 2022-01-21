<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220120114626 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        $this->addSql("INSERT INTO vehiculo (id, matricula, disponibilidad, tipo, capacidad, costo, personal) values (1, '2HNYD28427H257137', false, 'S2000', 1, '€32176,00', 1)");
        $this->addSql("INSERT INTO vehiculo (id, matricula, disponibilidad, tipo, capacidad, costo, personal) values (2, 'WAULT68E94A813616', true, 'Econoline E150', 2, 81079,65', 2)");
        $this->addSql("INSERT INTO vehiculo (id, matricula, disponibilidad, tipo, capacidad, costo, personal) values (3, 'WAUVFAFR6AA337653', false, 'Grand Cherokee', 3, '€39374,76', 3)");
        $this->addSql("INSERT INTO vehiculo (id, matricula, disponibilidad, tipo, capacidad, costo, personal) values (4, '3C6TD4HT3CG075080', true, 'Accord', 4, '€97620,58', 4)");
        $this->addSql("INSERT INTO vehiculo (id, matricula, disponibilidad, tipo, capacidad, costo, personal) values (5, '1N6AA0CC1BN345502', true, '760', 5, '€79975,12', 5)");
        $this->addSql("INSERT INTO vehiculo (id, matricula, disponibilidad, tipo, capacidad, costo, personal) values (6, '3D7TP2CT4BG260898', false, 'TSX', 6, '€23552,37', 6)");
        $this->addSql("INSERT INTO vehiculo (id, matricula, disponibilidad, tipo, capacidad, costo, personal) values (7, 'JH4CU2F65AC225943', false, 'M5', 7, '€33968,27', 7)");
        $this->addSql("INSERT INTO vehiculo (id, matricula, disponibilidad, tipo, capacidad, costo, personal) values (8, '2G4GR5ER2D9644325', true, 'CC', 8, '€5049,98', 8)");
        $this->addSql("INSERT INTO vehiculo (id, matricula, disponibilidad, tipo, capacidad, costo, personal) values (9, '1G6DU6EV9A0184808', true, '57', 9, '€85868,93', 9)");
        $this->addSql("INSERT INTO vehiculo (id, matricula, disponibilidad, tipo, capacidad, costo, personal) values (10, '3VWML7AJXBM998938', false, 'CLK-Class', 10, '€30186,17', 10)");
        $this->addSql("INSERT INTO vehiculo (id, matricula, disponibilidad, tipo, capacidad, costo, personal) values (11, 'WBAYP1C52ED318498', true, 'Elan', 11, '€51204,69', 11)");
        $this->addSql("INSERT INTO vehiculo (id, matricula, disponibilidad, tipo, capacidad, costo, personal) values (12, '1FTNF2A50AE404850', true, 'A5', 12, '€81425,04', 12)");
        $this->addSql("INSERT INTO vehiculo (id, matricula, disponibilidad, tipo, capacidad, costo, personal) values (13, 'JTHKD5BH9E2522780', false, 'A7', 13, '€46892,86', 13)");
        $this->addSql("INSERT INTO vehiculo (id, matricula, disponibilidad, tipo, capacidad, costo, personal) values (14, 'WAUDFAFC1CN184781', false, 'PT Cruiser', 14, '€10717,26', 14)");
        $this->addSql("INSERT INTO vehiculo (id, matricula, disponibilidad, tipo, capacidad, costo, personal) values (15, 'YV140MAK0F1953314', true, 'Ram Van 3500', 15, '€73622,23', 15)");
        $this->addSql("INSERT INTO vehiculo (id, matricula, disponibilidad, tipo, capacidad, costo, personal) values (16, '3D7JB1ET1BG673312', true, 'Golf', 16, '€26554,14', 16)");
        $this->addSql("INSERT INTO vehiculo (id, matricula, disponibilidad, tipo, capacidad, costo, personal) values (17, '1G6DP57V880452272', false, 'Mariner', 17, '€4302,98', 17)");
        $this->addSql("INSERT INTO vehiculo (id, matricula, disponibilidad, tipo, capacidad, costo, personal) values (18, 'WA1LMBFE5CD577694', false, 'Galant', 18, '€72307,14', 18)");
        $this->addSql("INSERT INTO vehiculo (id, matricula, disponibilidad, tipo, capacidad, costo, personal) values (19, 'WAUDGAFLXDA185398', true, 'Forenza', 19, '€48188,36', 19)");
        $this->addSql("INSERT INTO vehiculo (id, matricula, disponibilidad, tipo, capacidad, costo, personal) values (20, 'KNDJT2A29D7517768', false, 'Accent', 20, '€17224,18', 20)");
        $this->addSql("INSERT INTO vehiculo (id, matricula, disponibilidad, tipo, capacidad, costo, personal) values (21, 'WAUKFAFL0EA820673', true, 'Ram Van B250', 21, '€63717,68', 21)");
        $this->addSql("INSERT INTO vehiculo (id, matricula, disponibilidad, tipo, capacidad, costo, personal) values (22, 'WA1DVBFE1AD451072', true, 'Century', 22, '€59809,03', 22)");
        $this->addSql("INSERT INTO vehiculo (id, matricula, disponibilidad, tipo, capacidad, costo, personal) values (23, 'WAUKFAFL0EA078436', true, '944', 23, '€82871,02', 23)");
        $this->addSql("INSERT INTO vehiculo (id, matricula, disponibilidad, tipo, capacidad, costo, personal) values (24, '4JGCB2FB3AA399747', true, 'Corolla', 24, '€25135,61', 24)");
        $this->addSql("INSERT INTO vehiculo (id, matricula, disponibilidad, tipo, capacidad, costo, personal) values (25, '1GYFC26279R875102', true, 'Neon', 25, '€6779,76', 25)");
        $this->addSql("INSERT INTO vehiculo (id, matricula, disponibilidad, tipo, capacidad, costo, personal) values (26, 'WBADN63453G674027', true, 'Bonneville', 26, '€7985,68', 26)");
        $this->addSql("INSERT INTO vehiculo (id, matricula, disponibilidad, tipo, capacidad, costo, personal) values (27, 'JTDKDTB38C1989850', false, 'Eldorado', 27, '€49909,24', 27)");
        $this->addSql("INSERT INTO vehiculo (id, matricula, disponibilidad, tipo, capacidad, costo, personal) values (28, 'WBAEW53413P016300', false, 'LR3', 28, '€37105,89', 28)");
        $this->addSql("INSERT INTO vehiculo (id, matricula, disponibilidad, tipo, capacidad, costo, personal) values (29, 'WBAYA6C53DD977073', false, 'Grand Cherokee', 29, '€54830,32', 29)");
        $this->addSql("INSERT INTO vehiculo (id, matricula, disponibilidad, tipo, capacidad, costo, personal) values (30, 'WAUVT68E74A573670', false, 'Tempo', 30, '€91029,18', 30)");
        $this->addSql("INSERT INTO vehiculo (id, matricula, disponibilidad, tipo, capacidad, costo, personal) values (31, 'JHMZF1D40DS313633', false, 'Mazda3', 31, '€16312,82', 31)");
        $this->addSql("INSERT INTO vehiculo (id, matricula, disponibilidad, tipo, capacidad, costo, personal) values (32, '1G6YX36D265881244', false, 'Corvette', 32, '€48872,64', 32)");
        $this->addSql("INSERT INTO vehiculo (id, matricula, disponibilidad, tipo, capacidad, costo, personal) values (33, '1G4CU541144575333', false, 'Savana 2500', 33, '€14618,55', 33)");
        $this->addSql("INSERT INTO vehiculo (id, matricula, disponibilidad, tipo, capacidad, costo, personal) values (34, '3D7TP2CTXAG349017', false, 'Miata MX-5', 34, '€54562,88', 34)");
        $this->addSql("INSERT INTO vehiculo (id, matricula, disponibilidad, tipo, capacidad, costo, personal) values (35, '1FMEU5DE2AU201270', false, 'Sunfire', 35, '€47720,39', 35)");
        $this->addSql("INSERT INTO vehiculo (id, matricula, disponibilidad, tipo, capacidad, costo, personal) values (36, '5FNRL5H2XDB148732', false, 'Esteem', 36, '€80592,71', 36)");
        $this->addSql("INSERT INTO vehiculo (id, matricula, disponibilidad, tipo, capacidad, costo, personal) values (37, 'WAUDGAFL1BA342264', true, 'B-Series Plus', 37, '€76652,46', 37)");
        $this->addSql("INSERT INTO vehiculo (id, matricula, disponibilidad, tipo, capacidad, costo, personal) values (38, '1G6DT57V680400375', true, 'Century', 38, '€32840,55', 38)");
        $this->addSql("INSERT INTO vehiculo (id, matricula, disponibilidad, tipo, capacidad, costo, personal) values (39, 'JN1CV6FE7EM906203', true, 'LaCrosse', 39, '€35400,94', 39)");
        $this->addSql("INSERT INTO vehiculo (id, matricula, disponibilidad, tipo, capacidad, costo, personal) values (40, '3C3CFFCR0DT358284', true, '645', 40, '€58527,71', 40)");
        $this->addSql("INSERT INTO vehiculo (id, matricula, disponibilidad, tipo, capacidad, costo, personal) values (41, 'WAUYP54B51N428669', true, 'Mustang', 41, '€58692,49', 41)");
        $this->addSql("INSERT INTO vehiculo (id, matricula, disponibilidad, tipo, capacidad, costo, personal) values (42, 'KNAGM4A72B5585186', true, 'G-Class', 42, '€64997,44', 42)");
        $this->addSql("INSERT INTO vehiculo (id, matricula, disponibilidad, tipo, capacidad, costo, personal) values (43, '2G4GR5EK0C9753934', false, 'VUE', 43, '€46354,81', 43)");
        $this->addSql("INSERT INTO vehiculo (id, matricula, disponibilidad, tipo, capacidad, costo, personal) values (44, '1GYUCCEF6AR008649', true, 'Grand Marquis', 44, '€10268,82', 44)");
        $this->addSql("INSERT INTO vehiculo (id, matricula, disponibilidad, tipo, capacidad, costo, personal) values (45, 'JM1DE1HY4B0145418', false, 'RL', 45, '€68436,95', 45)");
        $this->addSql("INSERT INTO vehiculo (id, matricula, disponibilidad, tipo, capacidad, costo, personal) values (46, 'WBA1J7C58EV347987', false, 'C70', 46, '€78828,81', 46)");
        $this->addSql("INSERT INTO vehiculo (id, matricula, disponibilidad, tipo, capacidad, costo, personal) values (47, '1G4GF5E36DF765564', false, 'M', 47, '€43207,28', 47)");
        $this->addSql("INSERT INTO vehiculo (id, matricula, disponibilidad, tipo, capacidad, costo, personal) values (48, 'WAUDN94F28N621550', true, '3500', 48, '€22470,35', 48)");
        $this->addSql("INSERT INTO vehiculo (id, matricula, disponibilidad, tipo, capacidad, costo, personal) values (49, 'WDDGF4HB1CR034531', true, 'LTD', 49, '€82706,99', 49)");
        $this->addSql("INSERT INTO vehiculo (id, matricula, disponibilidad, tipo, capacidad, costo, personal) values (50, '1G4PR5SK4D4056629', false, 'RX Hybrid', 50, '€78184,44', 50)");
        $this->addSql("INSERT INTO vehiculo (id, matricula, disponibilidad, tipo, capacidad, costo, personal) values (51, '2G4GV5GV9D9057593', true, 'Laser', 51, '€51180,96', 51)");
        $this->addSql("INSERT INTO vehiculo (id, matricula, disponibilidad, tipo, capacidad, costo, personal) values (52, '5N1AN0NU6AC403591', true, 'Park Avenue', 52, '€84542,50', 52)");
        $this->addSql("INSERT INTO vehiculo (id, matricula, disponibilidad, tipo, capacidad, costo, personal) values (53, '1NXBE4EE6AZ961309', true, '968', 53, '€14938,56', 53)");
        $this->addSql("INSERT INTO vehiculo (id, matricula, disponibilidad, tipo, capacidad, costo, personal) values (54, '2G61U5S3XD9905583', true, 'Rodeo', 54, '€98648,71', 54)");
        $this->addSql("INSERT INTO vehiculo (id, matricula, disponibilidad, tipo, capacidad, costo, personal) values (55, '1GTN2TEH8FZ195365', false, 'Safari', 55, '€96728,22', 55)");
        $this->addSql("INSERT INTO vehiculo (id, matricula, disponibilidad, tipo, capacidad, costo, personal) values (56, '3N1CN7AP2DL122891', true, 'Fusion', 56, '€12595,08', 56)");
        $this->addSql("INSERT INTO vehiculo (id, matricula, disponibilidad, tipo, capacidad, costo, personal) values (57, '5NPEB4AC5CH297922', true, 'Biturbo', 57, '€8452,20', 57)");
        $this->addSql("INSERT INTO vehiculo (id, matricula, disponibilidad, tipo, capacidad, costo, personal) values (58, '1G6AH5S37F0578612', false, 'Wrangler', 58, '€51292,22', 58)");
        $this->addSql("INSERT INTO vehiculo (id, matricula, disponibilidad, tipo, capacidad, costo, personal) values (59, 'WBAKB835X9C034447', false, 'F-Series', 59, '€2436,06', 59)");
        $this->addSql("INSERT INTO vehiculo (id, matricula, disponibilidad, tipo, capacidad, costo, personal) values (60, 'WUARL48H48K892272', true, 'Fillmore', 60, '€99424,60', 60)");
        $this->addSql("INSERT INTO vehiculo (id, matricula, disponibilidad, tipo, capacidad, costo, personal) values (61, 'ZFBCFADH1FZ013168', false, 'Crown Victoria', 61, '€53328,24', 61)");
        $this->addSql("INSERT INTO vehiculo (id, matricula, disponibilidad, tipo, capacidad, costo, personal) values (62, 'WAUWFAFR4DA798049', false, '5 Series', 62, '€90748,27', 62)");
        $this->addSql("INSERT INTO vehiculo (id, matricula, disponibilidad, tipo, capacidad, costo, personal) values (63, '3C63D3NL2CG894712', true, 'S10', 63, '€84842,69', 63)");
        $this->addSql("INSERT INTO vehiculo (id, matricula, disponibilidad, tipo, capacidad, costo, personal) values (64, 'JTDBT4K38CL154666', false, 'Mazdaspeed 3', 64, '€74280,44', 64)");
        $this->addSql("INSERT INTO vehiculo (id, matricula, disponibilidad, tipo, capacidad, costo, personal) values (65, 'WP1AA2A22EL104732', true, 'Corsica', 65, '€11793,02', 65)");
        $this->addSql("INSERT INTO vehiculo (id, matricula, disponibilidad, tipo, capacidad, costo, personal) values (66, 'WDDHH8HB6BA812485', false, 'Savana 3500', 66, '€68405,94', 66)");
        $this->addSql("INSERT INTO vehiculo (id, matricula, disponibilidad, tipo, capacidad, costo, personal) values (67, '5J6TF1H31FL232611', true, 'Galant', 67, '€52895,74', 67)");
        $this->addSql("INSERT INTO vehiculo (id, matricula, disponibilidad, tipo, capacidad, costo, personal) values (68, '3D4PH9FG8BT940605', false, 'Trans Sport', 68, '€44256,16', 68)");
        $this->addSql("INSERT INTO vehiculo (id, matricula, disponibilidad, tipo, capacidad, costo, personal) values (69, 'WAUSH74F57N106270', true, 'Envoy', 69, '€62502,12', 69)");
        $this->addSql("INSERT INTO vehiculo (id, matricula, disponibilidad, tipo, capacidad, costo, personal) values (70, 'SAJWA4GB4FL334823', true, 'Integra', 70, '€37400,92', 70)");
        $this->addSql("INSERT INTO vehiculo (id, matricula, disponibilidad, tipo, capacidad, costo, personal) values (71, '4A4AP3AU0DE682947', true, 'Phantom', 71, '€98809,67', 71)");
        $this->addSql("INSERT INTO vehiculo (id, matricula, disponibilidad, tipo, capacidad, costo, personal) values (72, 'WAUAFAFH2EN094881', false, 'Camaro', 72, '€49587,64', 72)");
        $this->addSql("INSERT INTO vehiculo (id, matricula, disponibilidad, tipo, capacidad, costo, personal) values (73, 'WP0AB2A88CU311798', true, '928', 73, '€94998,37', 73)");
        $this->addSql("INSERT INTO vehiculo (id, matricula, disponibilidad, tipo, capacidad, costo, personal) values (74, '1FBAX2CM3FK055101', false, 'Swift', 74, '€79578,07', 74)");
        $this->addSql("INSERT INTO vehiculo (id, matricula, disponibilidad, tipo, capacidad, costo, personal) values (75, '1N4AA5AP9AC214078', false, 'Corolla', 75, '€79614,65', 75)");
        $this->addSql("INSERT INTO vehiculo (id, matricula, disponibilidad, tipo, capacidad, costo, personal) values (76, 'WAUDFAFC3DN394753', true, 'Sunbird', 76, '€18512,23', 76)");
        $this->addSql("INSERT INTO vehiculo (id, matricula, disponibilidad, tipo, capacidad, costo, personal) values (77, '5FRYD3H89FB496332', true, '370Z', 77, '€85954,15', 77)");
        $this->addSql("INSERT INTO vehiculo (id, matricula, disponibilidad, tipo, capacidad, costo, personal) values (78, 'KMHCT4AE3EU073977', true, 'VUE', 78, '€19510,86', 78)");
        $this->addSql("INSERT INTO vehiculo (id, matricula, disponibilidad, tipo, capacidad, costo, personal) values (79, 'WBAYB6C57FG607520', true, 'Five Hundred', 79, '€21566,36', 79)");
        $this->addSql("INSERT INTO vehiculo (id, matricula, disponibilidad, tipo, capacidad, costo, personal) values (80, 'TRUSC28N721223229', true, 'E-Series', 80, '€68401,83', 80)");
        $this->addSql("INSERT INTO vehiculo (id, matricula, disponibilidad, tipo, capacidad, costo, personal) values (81, '4T1BF1FK0EU773116', false, 'LS', 81, '€81294,09', 81)");
        $this->addSql("INSERT INTO vehiculo (id, matricula, disponibilidad, tipo, capacidad, costo, personal) values (82, 'WA1DGBFE7FD610646', true, 'Ram 3500', 82, '€93855,72', 82)");
        $this->addSql("INSERT INTO vehiculo (id, matricula, disponibilidad, tipo, capacidad, costo, personal) values (83, 'WBALL5C5XEP389881', true, 'Esprit', 83, '€21313,99', 83)");


    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs

    }
}
