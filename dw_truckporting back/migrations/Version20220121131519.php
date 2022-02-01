<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220121131519 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        $this->addSql("INSERT INTO evento (id, nombre, lugar, fecha_inicio, fecha_final) values (2, 'Pacific Ethanol, Inc.', 'Mijiang', '1-11-2022', '4-6-2021')");
        $this->addSql("INSERT INTO evento (id, nombre, lugar, fecha_inicio, fecha_final) values (3, 'PT Telekomunikasi Indonesia, Tbk', 'Santa Iria de Azóia', '11-11-2021', '9-9-2021')");
        $this->addSql("INSERT INTO evento (id, nombre, lugar, fecha_inicio, fecha_final) values (4, 'Advanced Disposal Services, Inc.', 'Ejidal', '5-16-2021', '5-12-2021')");
        $this->addSql("INSERT INTO evento (id, nombre, lugar, fecha_inicio, fecha_final) values (5, 'OM Asset Management plc', 'Pingkai', '9-6-2021', '2-7-2021')");
        $this->addSql("INSERT INTO evento (id, nombre, lugar, fecha_inicio, fecha_final) values (6, 'BGC Partners, Inc.', 'Kamojimachō-jōgejima', '1-19-2022', '5-19-2021')");
        $this->addSql("INSERT INTO evento (id, nombre, lugar, fecha_inicio, fecha_final) values (7, 'Minerva Neurosciences, Inc', 'Cagbang', '6-13-2021', '9-15-2021')");
        $this->addSql("INSERT INTO evento (id, nombre, lugar, fecha_inicio, fecha_final) values (8, 'Sandy Spring Bancorp, Inc.', 'Las Vegas', '1-28-2021', '7-24-2021')");
        $this->addSql("INSERT INTO evento (id, nombre, lugar, fecha_inicio, fecha_final) values (9, 'HSBC Holdings plc', 'Bat Khela', '1-24-2021', '10-23-2021')");
        $this->addSql("INSERT INTO evento (id, nombre, lugar, fecha_inicio, fecha_final) values (10, 'Southern Company (The)', 'Cullhuas', '10-21-2021', '9-4-2021')");
        $this->addSql("INSERT INTO evento (id, nombre, lugar, fecha_inicio, fecha_final) values (11, 'Arbor Realty Trust', 'Kālia', '3-24-2021', '8-1-2021')");
        $this->addSql("INSERT INTO evento (id, nombre, lugar, fecha_inicio, fecha_final) values (12, 'Meridian Bancorp, Inc.', 'Bastia', '9-10-2021', '10-7-2021')");
        $this->addSql("INSERT INTO evento (id, nombre, lugar, fecha_inicio, fecha_final) values (13, 'Government Properties Income Trust', 'Buena Vista', '8-9-2021', '10-26-2021')");
        $this->addSql("INSERT INTO evento (id, nombre, lugar, fecha_inicio, fecha_final) values (14, 'ENI S.p.A.', 'Topchikha', '5-6-2021', '11-14-2021')");
        $this->addSql("INSERT INTO evento (id, nombre, lugar, fecha_inicio, fecha_final) values (15, 'Astrotech Corporation', 'Gävle', '8-22-2021', '5-10-2021')");
        $this->addSql("INSERT INTO evento (id, nombre, lugar, fecha_inicio, fecha_final) values (16, 'Iamgold Corporation', 'Seremban', '6-2-2021', '1-3-2022')");
        $this->addSql("INSERT INTO evento (id, nombre, lugar, fecha_inicio, fecha_final) values (17, 'Monsanto Company', 'Norrköping', '7-5-2021', '1-17-2022')");
        $this->addSql("INSERT INTO evento (id, nombre, lugar, fecha_inicio, fecha_final) values (18, 'Becton, Dickinson and Company', 'Santa Lucía', '7-22-2021', '10-7-2021')");
        $this->addSql("INSERT INTO evento (id, nombre, lugar, fecha_inicio, fecha_final) values (19, 'National Oilwell Varco, Inc.', 'Altenberg bei Linz', '8-29-2021', '9-15-2021')");
        $this->addSql("INSERT INTO evento (id, nombre, lugar, fecha_inicio, fecha_final) values (20, 'Peabody Energy Corporation', 'Sinisian', '11-22-2021', '8-25-2021')");
        $this->addSql("INSERT INTO evento (id, nombre, lugar, fecha_inicio, fecha_final) values (21, 'Cornerstone OnDemand, Inc.', 'Klyuchevsk', '6-7-2021', '2-6-2021')");
        $this->addSql("INSERT INTO evento (id, nombre, lugar, fecha_inicio, fecha_final) values (22, 'Federal Signal Corporation', 'Ciudad Bolívar', '1-4-2022', '1-28-2021')");
        $this->addSql("INSERT INTO evento (id, nombre, lugar, fecha_inicio, fecha_final) values (23, 'Jones Lang LaSalle Incorporated', 'Neyagawa', '1-26-2021', '8-23-2021')");
        $this->addSql("INSERT INTO evento (id, nombre, lugar, fecha_inicio, fecha_final) values (24, 'Stage Stores, Inc.', 'Sindi', '10-23-2021', '6-7-2021')");
        $this->addSql("INSERT INTO evento (id, nombre, lugar, fecha_inicio, fecha_final) values (25, 'Cencosud S.A.', 'Goričan', '7-29-2021', '11-29-2021')");
        $this->addSql("INSERT INTO evento (id, nombre, lugar, fecha_inicio, fecha_final) values (26, 'Alcobra Ltd.', 'Nan’ao', '7-14-2021', '12-6-2021')");
        $this->addSql("INSERT INTO evento (id, nombre, lugar, fecha_inicio, fecha_final) values (27, 'Ampco-Pittsburgh Corporation', 'Habartov', '5-13-2021', '9-15-2021')");
        $this->addSql("INSERT INTO evento (id, nombre, lugar, fecha_inicio, fecha_final) values (28, 'AU Optronics Corp', 'Koshki', '12-13-2021', '9-10-2021')");
        $this->addSql("INSERT INTO evento (id, nombre, lugar, fecha_inicio, fecha_final) values (29, 'The Gabelli Healthcare & Wellness Trust', 'Lizhuangzi', '1-17-2022', '9-10-2021')");
        $this->addSql("INSERT INTO evento (id, nombre, lugar, fecha_inicio, fecha_final) values (30, 'Ashford Hospitality Trust Inc', 'Lundo', '10-14-2021', '4-24-2021')");
        $this->addSql("INSERT INTO evento (id, nombre, lugar, fecha_inicio, fecha_final) values (31, 'Jack Henry & Associates, Inc.', 'Calape', '12-3-2021', '7-24-2021')");
        $this->addSql("INSERT INTO evento (id, nombre, lugar, fecha_inicio, fecha_final) values (32, 'Liquidity Services, Inc.', 'Gamovo', '11-21-2021', '11-15-2021')");
        $this->addSql("INSERT INTO evento (id, nombre, lugar, fecha_inicio, fecha_final) values (33, 'MER Telemanagement Solutions Ltd.', 'Nerópolis', '12-27-2021', '7-28-2021')");
        $this->addSql("INSERT INTO evento (id, nombre, lugar, fecha_inicio, fecha_final) values (34, 'Madison Covered Call & Equity Strategy Fund', 'San Jerónimo', '12-1-2021', '10-2-2021')");
        $this->addSql("INSERT INTO evento (id, nombre, lugar, fecha_inicio, fecha_final) values (35, 'Eaton Vance Tax-Managed Diversified Equity Income Fund', 'Xiatang', '9-17-2021', '7-4-2021')");
        $this->addSql("INSERT INTO evento (id, nombre, lugar, fecha_inicio, fecha_final) values (36, 'Stellar Biotechnologies, Inc.', 'Nakatsugawa', '2-4-2021', '1-12-2022')");
        $this->addSql("INSERT INTO evento (id, nombre, lugar, fecha_inicio, fecha_final) values (37, 'Cemtrex Inc.', 'Užice', '1-30-2021', '4-2-2021')");
        $this->addSql("INSERT INTO evento (id, nombre, lugar, fecha_inicio, fecha_final) values (38, 'Ares Management L.P.', 'Likiep', '9-21-2021', '4-29-2021')");
        $this->addSql("INSERT INTO evento (id, nombre, lugar, fecha_inicio, fecha_final) values (39, 'TiVo Corporation', 'Kaliprak', '10-19-2021', '9-14-2021')");
        $this->addSql("INSERT INTO evento (id, nombre, lugar, fecha_inicio, fecha_final) values (40, 'ARMOUR Residential REIT, Inc.', 'Raydah', '8-3-2021', '5-31-2021')");
        $this->addSql("INSERT INTO evento (id, nombre, lugar, fecha_inicio, fecha_final) values (41, 'Eaton Vance Corporation', 'Gujba', '10-7-2021', '6-25-2021')");
        $this->addSql("INSERT INTO evento (id, nombre, lugar, fecha_inicio, fecha_final) values (42, 'Meritage Corporation', 'Changshan', '3-27-2021', '4-12-2021')");
        $this->addSql("INSERT INTO evento (id, nombre, lugar, fecha_inicio, fecha_final) values (43, 'OncoMed Pharmaceuticals, Inc.', 'Khondāb', '8-28-2021', '12-10-2021')");
        $this->addSql("INSERT INTO evento (id, nombre, lugar, fecha_inicio, fecha_final) values (44, 'Pacific Special Acquisition Corp.', 'Bagumbayan', '1-31-2021', '6-3-2021')");
        $this->addSql("INSERT INTO evento (id, nombre, lugar, fecha_inicio, fecha_final) values (45, 'Niagara Mohawk Holdings, Inc.', 'Gununggoong', '11-18-2021', '3-31-2021')");
        $this->addSql("INSERT INTO evento (id, nombre, lugar, fecha_inicio, fecha_final) values (46, 'ZAIS Group Holdings, Inc.', 'Olivia', '3-13-2021', '11-16-2021')");
        $this->addSql("INSERT INTO evento (id, nombre, lugar, fecha_inicio, fecha_final) values (47, 'Nabriva Therapeutics AG', 'Darunban', '5-1-2021', '12-5-2021')");
        $this->addSql("INSERT INTO evento (id, nombre, lugar, fecha_inicio, fecha_final) values (48, 'Ares Capital Corporation', 'Kankara', '12-30-2021', '10-1-2021')");
        $this->addSql("INSERT INTO evento (id, nombre, lugar, fecha_inicio, fecha_final) values (49, 'First Trust Brazil AlphaDEX Fund', 'Labao', '3-19-2021', '1-1-2022')");
        $this->addSql("INSERT INTO evento (id, nombre, lugar, fecha_inicio, fecha_final) values (50, 'First Trust', 'Lizi', '7-20-2021', '5-30-2021')");
        $this->addSql("INSERT INTO evento (id, nombre, lugar, fecha_inicio, fecha_final) values (51, 'Diodes Incorporated', 'Dongshangguan', '5-2-2021', '2-1-2021')");
        $this->addSql("INSERT INTO evento (id, nombre, lugar, fecha_inicio, fecha_final) values (52, 'Endurance International Group Holdings, Inc.', 'Télimélé', '1-10-2022', '10-16-2021')");
        $this->addSql("INSERT INTO evento (id, nombre, lugar, fecha_inicio, fecha_final) values (53, 'Markel Corporation', 'Yonghe', '3-11-2021', '10-22-2021')");
        $this->addSql("INSERT INTO evento (id, nombre, lugar, fecha_inicio, fecha_final) values (54, 'Rice Midstream Partners LP', 'Galyugayevskaya', '8-6-2021', '8-20-2021')");
        $this->addSql("INSERT INTO evento (id, nombre, lugar, fecha_inicio, fecha_final) values (55, 'AirMedia Group Inc', 'Camrose', '6-2-2021', '11-22-2021')");
        $this->addSql("INSERT INTO evento (id, nombre, lugar, fecha_inicio, fecha_final) values (56, 'NOW Inc.', 'Shaoguan', '6-2-2021', '12-26-2021')");
        $this->addSql("INSERT INTO evento (id, nombre, lugar, fecha_inicio, fecha_final) values (57, 'Anavex Life Sciences Corp.', 'Kamaishi', '4-10-2021', '3-10-2021')");
        $this->addSql("INSERT INTO evento (id, nombre, lugar, fecha_inicio, fecha_final) values (58, 'Gilat Satellite Networks Ltd.', 'Mpumalanga', '11-2-2021', '12-30-2021')");
        $this->addSql("INSERT INTO evento (id, nombre, lugar, fecha_inicio, fecha_final) values (59, 'MTS Systems Corporation', 'Cochrane', '11-19-2021', '9-5-2021')");
        $this->addSql("INSERT INTO evento (id, nombre, lugar, fecha_inicio, fecha_final) values (60, 'Belden Inc', 'Lajeosa', '9-21-2021', '6-12-2021')");
        $this->addSql("INSERT INTO evento (id, nombre, lugar, fecha_inicio, fecha_final) values (61, 'Selecta Biosciences, Inc.', 'Sosnowiec', '9-26-2021', '6-18-2021')");
        $this->addSql("INSERT INTO evento (id, nombre, lugar, fecha_inicio, fecha_final) values (62, 'Entergy Mississippi, Inc.', 'Winton', '12-10-2021', '2-14-2021')");
        $this->addSql("INSERT INTO evento (id, nombre, lugar, fecha_inicio, fecha_final) values (63, 'Otter Tail Corporation', 'Klapagading', '11-9-2021', '10-15-2021')");
        $this->addSql("INSERT INTO evento (id, nombre, lugar, fecha_inicio, fecha_final) values (64, 'Noodles & Company', 'Szelków', '1-11-2022', '8-2-2021')");
        $this->addSql("INSERT INTO evento (id, nombre, lugar, fecha_inicio, fecha_final) values (65, 'Ares Dynamic Credit Allocation Fund, Inc.', 'Ghormach', '9-21-2021', '11-3-2021')");
        $this->addSql("INSERT INTO evento (id, nombre, lugar, fecha_inicio, fecha_final) values (66, 'Wells Fargo & Company', 'São Luís', '11-22-2021', '6-12-2021')");
        $this->addSql("INSERT INTO evento (id, nombre, lugar, fecha_inicio, fecha_final) values (67, 'StealthGas, Inc.', 'Rangmanten', '4-24-2021', '5-25-2021')");
        $this->addSql("INSERT INTO evento (id, nombre, lugar, fecha_inicio, fecha_final) values (68, 'IRSA Propiedades Comerciales S.A.', 'Bollstabruk', '4-8-2021', '9-15-2021')");
        $this->addSql("INSERT INTO evento (id, nombre, lugar, fecha_inicio, fecha_final) values (69, 'Forum Merger Corporation', 'Zyryanovsk', '4-14-2021', '3-11-2021')");
        $this->addSql("INSERT INTO evento (id, nombre, lugar, fecha_inicio, fecha_final) values (70, 'Aerie Pharmaceuticals, Inc.', 'Pamarayan', '10-24-2021', '7-27-2021')");
        $this->addSql("INSERT INTO evento (id, nombre, lugar, fecha_inicio, fecha_final) values (71, 'Weyerhaeuser Company', 'Đông Thành', '5-17-2021', '2-28-2021')");
        $this->addSql("INSERT INTO evento (id, nombre, lugar, fecha_inicio, fecha_final) values (72, 'Howard Bancorp, Inc.', 'Tarangnan', '6-13-2021', '8-26-2021')");
        $this->addSql("INSERT INTO evento (id, nombre, lugar, fecha_inicio, fecha_final) values (73, 'Sajan, Inc.', 'Xinzhu', '11-7-2021', '7-25-2021')");
        $this->addSql("INSERT INTO evento (id, nombre, lugar, fecha_inicio, fecha_final) values (74, 'Sabra Healthcare REIT, Inc.', 'Ol’ginka', '7-17-2021', '6-17-2021')");
        $this->addSql("INSERT INTO evento (id, nombre, lugar, fecha_inicio, fecha_final) values (75, 'Western Asset Corporate Loan Fund Inc', 'Datang', '5-19-2021', '7-14-2021')");
        $this->addSql("INSERT INTO evento (id, nombre, lugar, fecha_inicio, fecha_final) values (76, 'Nortel Inversora SA', 'Damao', '7-10-2021', '11-20-2021')");
        $this->addSql("INSERT INTO evento (id, nombre, lugar, fecha_inicio, fecha_final) values (77, 'Tecogen Inc.', 'Pereiro', '5-4-2021', '11-26-2021')");
        $this->addSql("INSERT INTO evento (id, nombre, lugar, fecha_inicio, fecha_final) values (78, 'Polaris Industries Inc.', 'Vitina', '10-7-2021', '3-25-2021')");
        $this->addSql("INSERT INTO evento (id, nombre, lugar, fecha_inicio, fecha_final) values (79, 'Solar Senior Capital Ltd.', 'Kosikha', '5-21-2021', '11-27-2021')");
        $this->addSql("INSERT INTO evento (id, nombre, lugar, fecha_inicio, fecha_final) values (80, 'Analogic Corporation', 'Sampaloc', '4-9-2021', '2-11-2021')");


        $this->addSql("INSERT INTO empresa (id, nombre, tipo, contrasena, telefono, cif) values (2, 'Eabox', 'Investment Bankers-Brokers-Service', 'oqNfFYAvux9', '813-552-0457', '3586268886596690')");
        $this->addSql("INSERT INTO empresa (id, nombre, tipo, contrasena, telefono, cif) values (3, 'BlogXS', 'Oilfield Services-Equipment', '0OE36c', '258-311-4185', '3549320573958224')");
        $this->addSql("INSERT INTO empresa (id, nombre, tipo, contrasena, telefono, cif) values (4, 'Riffpath', 'n-a', 'BC9H9vjNUd', '122-746-0617', '3575328563568801')");
        $this->addSql("INSERT INTO empresa (id, nombre, tipo, contrasena, telefono, cif) values (5, 'Edgeclub', 'Restaurants', 'ynx515', '739-637-0710', '3555755469412672')");
        $this->addSql("INSERT INTO empresa (id, nombre, tipo, contrasena, telefono, cif) values (6, 'Roomm', 'Office Equipment-Supplies-Services', 'UsBReac', '256-914-3267', '3560025027100745')");
        $this->addSql("INSERT INTO empresa (id, nombre, tipo, contrasena, telefono, cif) values (7, 'Oyoyo', 'Other Specialty Stores', 'XPJRvxtm', '695-170-8111', '3569671985637532')");
        $this->addSql("INSERT INTO empresa (id, nombre, tipo, contrasena, telefono, cif) values (8, 'Flipopia', 'n-a', 'wo4dKNKcHa6E', '612-216-0783', '374288561898692')");
        $this->addSql("INSERT INTO empresa (id, nombre, tipo, contrasena, telefono, cif) values (9, 'Skyba', 'Biotechnology: Biological Products (No Diagnostic Substances)', 'kxTplW', '106-485-9003', '3559896432088284')");
        $this->addSql("INSERT INTO empresa (id, nombre, tipo, contrasena, telefono, cif) values (10, 'Fivebridge', 'Telecommunications Equipment', '79Pfnc', '561-386-1592', '372301224556417')");
        $this->addSql("INSERT INTO empresa (id, nombre, tipo, contrasena, telefono, cif) values (11, 'Zoomzone', 'Restaurants', 'KeNX2o', '752-260-1344', '6709139866188750408')");
        $this->addSql("INSERT INTO empresa (id, nombre, tipo, contrasena, telefono, cif) values (12, 'Voolia', 'Real Estate Investment Trusts', '4QrpigqHdN80', '706-568-1806', '3573526542454264')");
        $this->addSql("INSERT INTO empresa (id, nombre, tipo, contrasena, telefono, cif) values (13, 'Voonyx', 'n-a', 'IRyXbUpOgHn', '129-385-5859', '5430404741879764')");
        $this->addSql("INSERT INTO empresa (id, nombre, tipo, contrasena, telefono, cif) values (14, 'Pixoboo', 'Savings Institutions', 'dbeHXCEgm', '367-777-7980', '5484003168976031')");
        $this->addSql("INSERT INTO empresa (id, nombre, tipo, contrasena, telefono, cif) values (15, 'Oyoba', 'Major Banks', 'AyltoI', '471-894-2131', '5602216945761545')");
        $this->addSql("INSERT INTO empresa (id, nombre, tipo, contrasena, telefono, cif) values (16, 'Realcube', 'Engineering & Construction', 'xpkrtXJjSo', '950-224-3411', '4508773046699378')");
        $this->addSql("INSERT INTO empresa (id, nombre, tipo, contrasena, telefono, cif) values (17, 'Tanoodle', 'Accident &Health Insurance', 'Q2NxXcdHfTDS', '940-832-1861', '4903913386264738840')");
        $this->addSql("INSERT INTO empresa (id, nombre, tipo, contrasena, telefono, cif) values (18, 'Eayo', 'Industrial Machinery-Components', 'Vt2vDpFZ', '770-698-7188', '6333644531571300958')");
        $this->addSql("INSERT INTO empresa (id, nombre, tipo, contrasena, telefono, cif) values (19, 'Skinte', 'Hospital-Nursing Management', '293AkdeAEdF1', '646-547-3363', '3568447612774720')");
        $this->addSql("INSERT INTO empresa (id, nombre, tipo, contrasena, telefono, cif) values (20, 'Edgeify', 'Major Pharmaceuticals', 'bGV9FseVcK', '298-161-3960', '6331103823202574632')");
        $this->addSql("INSERT INTO empresa (id, nombre, tipo, contrasena, telefono, cif) values (21, 'Feedfish', 'Major Pharmaceuticals', 'KU2XcURsu9y', '760-766-8114', '5246892393654952')");
        $this->addSql("INSERT INTO empresa (id, nombre, tipo, contrasena, telefono, cif) values (22, 'Rooxo', 'Savings Institutions', 'poLZQSxypGyz', '143-892-8558', '201968588584479')");
        $this->addSql("INSERT INTO empresa (id, nombre, tipo, contrasena, telefono, cif) values (23, 'Devpoint', 'n-a', 'HqRMFIEPk', '979-801-2779', '30579162170234')");
        $this->addSql("INSERT INTO empresa (id, nombre, tipo, contrasena, telefono, cif) values (24, 'Skiba', 'Electrical Products', 'UJRBCHKA5gC', '919-174-7558', '06042400668919201')");
        $this->addSql("INSERT INTO empresa (id, nombre, tipo, contrasena, telefono, cif) values (25, 'Tazzy', 'Industrial Machinery-Components', 'F51cgj', '692-735-1605', '3554132144880064')");
        $this->addSql("INSERT INTO empresa (id, nombre, tipo, contrasena, telefono, cif) values (26, 'Eare', 'n-a', 'I8cC9PMdl', '479-106-4583', '6709441849964850')");
        $this->addSql("INSERT INTO empresa (id, nombre, tipo, contrasena, telefono, cif) values (27, 'Miboo', 'n-a', 'Faivm0', '293-784-5581', '5395008914544064')");
        $this->addSql("INSERT INTO empresa (id, nombre, tipo, contrasena, telefono, cif) values (28, 'Kwilith', 'Consumer Electronics-Appliances', '5cU8i9c', '234-213-8028', '3539209822771524')");
        $this->addSql("INSERT INTO empresa (id, nombre, tipo, contrasena, telefono, cif) values (29, 'Zoonder', 'n-a', 'B5MjDA8Jb', '804-890-9886', '6763999619391698')");
        $this->addSql("INSERT INTO empresa (id, nombre, tipo, contrasena, telefono, cif) values (30, 'Cogibox', 'n-a', 'IwMPavt', '877-850-8118', '3553780500754934')");
        $this->addSql("INSERT INTO empresa (id, nombre, tipo, contrasena, telefono, cif) values (31, 'Quimm', 'Major Pharmaceuticals', 'SVM3Ge6', '764-282-5886', '6331105489275090357')");
        $this->addSql("INSERT INTO empresa (id, nombre, tipo, contrasena, telefono, cif) values (32, 'Roodel', 'Real Estate Investment Trusts', 'AS1H3yrp', '422-317-6352', '3541402441631635')");
        $this->addSql("INSERT INTO empresa (id, nombre, tipo, contrasena, telefono, cif) values (33, 'Flashspan', 'n-a', 'ctj1SRv6Dna', '394-719-5776', '3538273792735902')");
        $this->addSql("INSERT INTO empresa (id, nombre, tipo, contrasena, telefono, cif) values (34, 'Devpulse', 'Mining & Quarrying of Nonmetallic Minerals (No Fuels)', 'IfucrQOXz', '294-871-8341', '30033116595591')");
        $this->addSql("INSERT INTO empresa (id, nombre, tipo, contrasena, telefono, cif) values (35, 'Fliptune', 'Telecommunications Equipment', '7jmH6CHonk', '116-291-1636', '5500993555942531')");
        $this->addSql("INSERT INTO empresa (id, nombre, tipo, contrasena, telefono, cif) values (36, 'Abata', 'Electric Utilities: Central', 'Z5BbRtGq', '111-850-4551', '4041594834764')");
        $this->addSql("INSERT INTO empresa (id, nombre, tipo, contrasena, telefono, cif) values (37, 'Yakitri', 'Major Banks', '9fzF3PktGbh', '654-706-1068', '30382154523910')");
        $this->addSql("INSERT INTO empresa (id, nombre, tipo, contrasena, telefono, cif) values (38, 'Ozu', 'Building Materials', '4dGmcPbbZ', '566-448-7664', '3574958979996492')");
        $this->addSql("INSERT INTO empresa (id, nombre, tipo, contrasena, telefono, cif) values (39, 'Aibox', 'Auto Parts:O.E.M.', 'EkiQ48T7', '746-543-5025', '4917291873450794')");
        $this->addSql("INSERT INTO empresa (id, nombre, tipo, contrasena, telefono, cif) values (40, 'Youtags', 'Savings Institutions', 'ANJ4Z8Ro', '678-243-7870', '4844316266129263')");
        $this->addSql("INSERT INTO empresa (id, nombre, tipo, contrasena, telefono, cif) values (41, 'Wordtune', 'Clothing-Shoe-Accessory Stores', 'xILcMZopAZ2', '446-754-2918', '630490659430301360')");
        $this->addSql("INSERT INTO empresa (id, nombre, tipo, contrasena, telefono, cif) values (42, 'Quinu', 'Investment Managers', 'ooSheGj', '329-477-6405', '4341653694582046')");
        $this->addSql("INSERT INTO empresa (id, nombre, tipo, contrasena, telefono, cif) values (43, 'Twinte', 'Major Pharmaceuticals', 'bWKzjsn2wLov', '253-600-6515', '5108758587093686')");
        $this->addSql("INSERT INTO empresa (id, nombre, tipo, contrasena, telefono, cif) values (44, 'Mudo', 'Oil & Gas Production', 'I4bsf2r', '884-301-8055', '3544162084877757')");
        $this->addSql("INSERT INTO empresa (id, nombre, tipo, contrasena, telefono, cif) values (45, 'Quaxo', 'Marine Transportation', 'Fix5eSBUZ', '515-481-8401', '30255624068213')");
        $this->addSql("INSERT INTO empresa (id, nombre, tipo, contrasena, telefono, cif) values (46, 'Eidel', 'n-a', 'zznp0IC1TSN', '768-142-0137', '4405549023834244')");
        $this->addSql("INSERT INTO empresa (id, nombre, tipo, contrasena, telefono, cif) values (47, 'Roombo', 'Real Estate Investment Trusts', 'PZ3eiLixXD', '622-400-8241', '374002618093680')");
        $this->addSql("INSERT INTO empresa (id, nombre, tipo, contrasena, telefono, cif) values (48, 'Flashset', 'Radio And Television Broadcasting And Communications Equipment', 'St7IZOa2', '791-672-2588', '3554698834502820')");
        $this->addSql("INSERT INTO empresa (id, nombre, tipo, contrasena, telefono, cif) values (49, 'JumpXS', 'n-a', 'AZOppt', '211-667-4957', '561046286862902386')");
        $this->addSql("INSERT INTO empresa (id, nombre, tipo, contrasena, telefono, cif) values (50, 'Yamia', 'Finance: Consumer Services', '3gTOZHyz8jR', '974-648-7644', '4917838298914133')");
        $this->addSql("INSERT INTO empresa (id, nombre, tipo, contrasena, telefono, cif) values (51, 'Photobug', 'n-a', 'MGffkO', '249-505-9502', '5641826250619089')");
        $this->addSql("INSERT INTO empresa (id, nombre, tipo, contrasena, telefono, cif) values (52, 'Plajo', 'n-a', 'UysTvo1X7wes', '118-164-5516', '3568094465019470')");
        $this->addSql("INSERT INTO empresa (id, nombre, tipo, contrasena, telefono, cif) values (53, 'Agivu', 'Publishing', '6mxExu6', '955-801-8455', '3574885984886246')");
        $this->addSql("INSERT INTO empresa (id, nombre, tipo, contrasena, telefono, cif) values (54, 'Mita', 'Homebuilding', 'aYcQXyXf1', '108-607-6487', '675964236168662610')");
        $this->addSql("INSERT INTO empresa (id, nombre, tipo, contrasena, telefono, cif) values (55, 'Centimia', 'n-a', 'WMHaZP', '145-565-4562', '3547588606390217')");
        $this->addSql("INSERT INTO empresa (id, nombre, tipo, contrasena, telefono, cif) values (56, 'Avavee', 'Railroads', 'nnfvH8w9DQMM', '253-573-3680', '6382529270466991')");
        $this->addSql("INSERT INTO empresa (id, nombre, tipo, contrasena, telefono, cif) values (57, 'Mudo', 'Major Banks', 'UPX0A0', '853-947-9749', '5549285781593516')");
        $this->addSql("INSERT INTO empresa (id, nombre, tipo, contrasena, telefono, cif) values (58, 'Edgeclub', 'Department-Specialty Retail Stores', 'heSXwX25Bz', '480-252-3299', '5485863603630041')");
        $this->addSql("INSERT INTO empresa (id, nombre, tipo, contrasena, telefono, cif) values (59, 'InnoZ', 'Telecommunications Equipment', 'oRqLFl', '323-902-8445', '3540334133423800')");
        $this->addSql("INSERT INTO empresa (id, nombre, tipo, contrasena, telefono, cif) values (60, 'Realcube', 'Transportation Services', '7cEPhHM', '531-218-1624', '3553417737222027')");
        $this->addSql("INSERT INTO empresa (id, nombre, tipo, contrasena, telefono, cif) values (61, 'Voonix', 'Real Estate', 'C6nBBYW', '844-974-7254', '50202886295262615')");
        $this->addSql("INSERT INTO empresa (id, nombre, tipo, contrasena, telefono, cif) values (62, 'Meedoo', 'n-a', 'bUWdkgrpwf', '955-903-2590', '5038174759683921')");
        $this->addSql("INSERT INTO empresa (id, nombre, tipo, contrasena, telefono, cif) values (63, 'Jaxspan', 'Automotive Aftermarket', 'EzGUCSO', '701-610-1266', '5525077223511059')");
        $this->addSql("INSERT INTO empresa (id, nombre, tipo, contrasena, telefono, cif) values (64, 'Dynava', 'Broadcasting', 'UXq9SOmJN', '770-631-3947', '3537930834032405')");
        $this->addSql("INSERT INTO empresa (id, nombre, tipo, contrasena, telefono, cif) values (65, 'Twitterworks', 'Integrated oil Companies', '1LlCd1Fo5pk', '827-351-7283', '3566252940358457')");
        $this->addSql("INSERT INTO empresa (id, nombre, tipo, contrasena, telefono, cif) values (66, 'Blognation', 'n-a', 'XGTuNUFg', '332-913-5539', '3532134019910379')");
        $this->addSql("INSERT INTO empresa (id, nombre, tipo, contrasena, telefono, cif) values (67, 'Pixoboo', 'n-a', 'wz7gfZlt1nMW', '816-493-0165', '3568394076700033')");
        $this->addSql("INSERT INTO empresa (id, nombre, tipo, contrasena, telefono, cif) values (68, 'Mydeo', 'n-a', 's97qMR4iaE', '208-547-9214', '633405038068360741')");
        $this->addSql("INSERT INTO empresa (id, nombre, tipo, contrasena, telefono, cif) values (69, 'Twitterlist', 'Beverages (Production-Distribution)', 'PoPuLML782v', '789-513-2121', '3554638384588589')");
        $this->addSql("INSERT INTO empresa (id, nombre, tipo, contrasena, telefono, cif) values (70, 'Bluezoom', 'n-a', 'kmVo2uQ8K', '779-343-1658', '3550964007294171')");
        $this->addSql("INSERT INTO empresa (id, nombre, tipo, contrasena, telefono, cif) values (71, 'Demimbu', 'Miscellaneous', 'IQoapFVm0', '572-963-9796', '3533816806993407')");
        $this->addSql("INSERT INTO empresa (id, nombre, tipo, contrasena, telefono, cif) values (72, 'Kwinu', 'Computer Software: Prepackaged Software', 'gQsuFN1', '382-654-7857', '3573826201086757')");
        $this->addSql("INSERT INTO empresa (id, nombre, tipo, contrasena, telefono, cif) values (73, 'Yodel', 'Professional Services', 'hnG58ZrH', '835-729-2590', '6333533865134519')");
        $this->addSql("INSERT INTO empresa (id, nombre, tipo, contrasena, telefono, cif) values (74, 'Photojam', 'Forest Products', 'QlLSb8nqP5', '222-796-0224', '3574040159767207')");
        $this->addSql("INSERT INTO empresa (id, nombre, tipo, contrasena, telefono, cif) values (75, 'Shuffledrive', 'Medical-Dental Instruments', 'OSpF4cCBqL', '747-411-1976', '5100172726975985')");
        $this->addSql("INSERT INTO empresa (id, nombre, tipo, contrasena, telefono, cif) values (76, 'Wikizz', 'Major Banks', '7Djj9BW9', '196-103-7341', '372301862560077')");
        $this->addSql("INSERT INTO empresa (id, nombre, tipo, contrasena, telefono, cif) values (77, 'Topicstorm', 'n-a', 'kjtiwU', '969-444-9557', '5602259717035821')");


    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs

    }
}
