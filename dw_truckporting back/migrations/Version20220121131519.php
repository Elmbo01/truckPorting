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




    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs

    }
}
